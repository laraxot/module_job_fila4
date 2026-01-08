# Job Module - Migrazione a Filament 4

## Panoramica Job Module
Il modulo Job gestisce background tasks, batch processing e queue management. È un **candidato ideale** per Filament 4 grazie ai benefici di performance e real-time monitoring.

## 🔄 Modifiche Richieste per la Migrazione

### 1. JobBatchResource - Schema Unificato
**Problemi attuali**: Form schema inadeguato per read-only data, type hints mixed

**Prima (Filament 3):**
```php
public static function getFormSchema(): array
{
    return [
        'id' => TextInput::make('id')->required()->maxLength(255),
        'name' => TextInput::make('name')->required()->maxLength(255),
        // ... form fields per data che dovrebbe essere read-only
    ];
}
```

**Dopo (Filament 4):**
```php
<?php

namespace Modules\Job\Filament\Resources;

use Filament\Resources\Resource;
use Filament\Schema\Schema;
use Filament\Schema\Components\TextInput;
use Filament\Schema\Components\Section;
use Filament\Schema\Components\Placeholder;
use Filament\Schema\Components\ViewField;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Tables\Columns\ProgressColumn;
use Modules\Job\Models\JobBatch;

class JobBatchResource extends Resource
{
    protected static ?string $model = JobBatch::class;
    protected static ?string $navigationIcon = 'heroicon-o-queue-list';
    protected static ?string $navigationGroup = 'System';

    public static function schema(): Schema
    {
        return Schema::make([
            Section::make('Batch Information')->schema([
                Placeholder::make('id')
                    ->content(fn ($record) => $record->id ?? 'Generated on creation'),
                    
                TextInput::make('name')
                    ->disabled()
                    ->dehydrated(false),
                    
                Placeholder::make('progress')
                    ->content(fn ($record) => $record ? "{$record->progress()}%" : '0%'),
            ])->visibleOn(['view', 'edit']),
            
            Section::make('Job Statistics')->schema([
                ViewField::make('job_stats')
                    ->view('job::batch-statistics')
                    ->viewData(fn ($record) => [
                        'total_jobs' => $record->total_jobs,
                        'pending_jobs' => $record->pending_jobs,
                        'failed_jobs' => $record->failed_jobs,
                        'processed_jobs' => $record->processedJobs(),
                    ])
                    ->columnSpanFull(),
            ])->visibleOn(['view', 'edit']),
            
            Section::make('Execution Timeline')->schema([
                Placeholder::make('created_at')
                    ->content(fn ($record) => $record->created_at?->format('Y-m-d H:i:s')),
                    
                Placeholder::make('finished_at')
                    ->content(fn ($record) => $record->finished_at?->format('Y-m-d H:i:s') ?? 'Still running'),
                    
                Placeholder::make('duration')
                    ->content(function ($record) {
                        if (!$record->finished_at) return 'In progress';
                        return $record->created_at->diffForHumans($record->finished_at, true);
                    }),
            ])->visibleOn(['view', 'edit']),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->searchable()
                    ->sortable(),
                    
                ProgressColumn::make('progress')
                    ->getStateUsing(fn ($record) => $record->progress())
                    ->color(fn ($state) => match (true) {
                        $state === 100 => 'success',
                        $state >= 75 => 'info', 
                        $state >= 50 => 'warning',
                        default => 'danger',
                    }),
                    
                TextColumn::make('total_jobs')
                    ->numeric()
                    ->label('Total'),
                    
                TextColumn::make('pending_jobs') 
                    ->numeric()
                    ->label('Pending')
                    ->color('warning'),
                    
                TextColumn::make('failed_jobs')
                    ->numeric()
                    ->label('Failed')
                    ->color('danger'),
                    
                BadgeColumn::make('status')
                    ->getStateUsing(function ($record) {
                        if ($record->cancelled()) return 'cancelled';
                        if ($record->failed()) return 'failed';
                        if ($record->finished()) return 'completed';
                        if ($record->hasPendingJobs()) return 'running';
                        return 'queued';
                    })
                    ->colors([
                        'success' => 'completed',
                        'danger' => 'failed',
                        'warning' => 'running', 
                        'gray' => 'cancelled',
                        'info' => 'queued',
                    ]),
                    
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable(),
            ])
            ->actions([
                // Enhanced actions con Filament 4
                Action::make('retry_failed')
                    ->icon('heroicon-o-arrow-path')
                    ->color('warning')
                    ->visible(fn ($record) => $record->hasFailures())
                    ->action(function ($record) {
                        $batch = Bus::findBatch($record->id);
                        if ($batch && $batch->allowsFailures()) {
                            $batch->retry();
                            
                            Notification::make()
                                ->title('Batch retry initiated')
                                ->success()
                                ->send();
                        }
                    }),
                    
                Action::make('cancel')
                    ->icon('heroicon-o-x-circle')
                    ->color('danger')
                    ->visible(fn ($record) => !$record->finished() && !$record->cancelled())
                    ->requiresConfirmation()
                    ->modalDescription('This will cancel all pending jobs in the batch.')
                    ->action(function ($record) {
                        $batch = Bus::findBatch($record->id);
                        if ($batch) {
                            $batch->cancel();
                            
                            Notification::make()
                                ->title('Batch cancelled')
                                ->success()
                                ->send();
                        }
                    }),
                    
                Action::make('view_logs')
                    ->icon('heroicon-o-document-text')
                    ->url(fn ($record) => route('job.batch.logs', $record)),
            ])
            ->filters([
                SelectFilter::make('status')
                    ->options([
                        'running' => 'Running',
                        'completed' => 'Completed',
                        'failed' => 'Failed', 
                        'cancelled' => 'Cancelled',
                    ]),
                    
                DateFilter::make('created_at')
                    ->label('Created Date'),
            ])
            ->poll('5s'); // Real-time updates ogni 5 secondi
    }

    // Only allow viewing, no create/edit
    public static function canCreate(): bool
    {
        return false;
    }

    public static function canEdit($record): bool
    {
        return false;
    }
}
```

### 2. Real-time Job Monitoring Widget
**Filament 4 Static Data + Performance:**

```php
<?php

namespace Modules\Job\Filament\Widgets;

use Filament\Widgets\Widget;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\BadgeColumn;
use Modules\Job\Services\JobMonitoringService;

class JobSystemStatusWidget extends Widget
{
    protected static string $view = 'job::widgets.system-status';
    protected int | string | array $columnSpan = 'full';

    public function table(Table $table): Table
    {
        $monitoring = app(JobMonitoringService::class);
        
        return $table
            ->records([
                [
                    'metric' => 'Queue Size (default)',
                    'value' => Queue::size('default'),
                    'status' => Queue::size('default') > 100 ? 'warning' : 'healthy',
                    'threshold' => '< 100',
                ],
                [
                    'metric' => 'Failed Jobs (24h)',
                    'value' => FailedJob::where('failed_at', '>', now()->subDay())->count(),
                    'status' => FailedJob::where('failed_at', '>', now()->subDay())->count() > 10 ? 'critical' : 'healthy',
                    'threshold' => '< 10/day',
                ],
                [
                    'metric' => 'Active Batches',
                    'value' => JobBatch::whereNull('finished_at')->count(),
                    'status' => 'healthy',
                    'threshold' => 'N/A',
                ],
                [
                    'metric' => 'Avg Processing Time',
                    'value' => $monitoring->getAverageProcessingTime() . 's',
                    'status' => $monitoring->getAverageProcessingTime() > 300 ? 'warning' : 'healthy',
                    'threshold' => '< 5min',
                ],
            ])
            ->columns([
                TextColumn::make('metric'),
                TextColumn::make('value')->numeric(),
                BadgeColumn::make('status')
                    ->colors([
                        'success' => 'healthy',
                        'warning' => 'warning',
                        'danger' => 'critical',
                    ]),
                TextColumn::make('threshold'),
            ])
            ->poll('3s'); // Real-time ogni 3 secondi
    }
}
```

### 3. Enhanced Failed Job Resource
```php
class FailedJobResource extends Resource
{
    protected static ?string $model = FailedJob::class;
    protected static ?string $navigationIcon = 'heroicon-o-exclamation-triangle';
    
    public static function schema(): Schema
    {
        return Schema::make([
            Section::make('Job Information')->schema([
                TextInput::make('queue')
                    ->disabled(),
                    
                TextInput::make('connection')
                    ->disabled(),
                    
                Textarea::make('payload')
                    ->disabled()
                    ->formatStateUsing(fn ($state) => json_encode(json_decode($state), JSON_PRETTY_PRINT))
                    ->columnSpanFull(),
            ]),
            
            Section::make('Error Details')->schema([
                Textarea::make('exception')
                    ->disabled()
                    ->columnSpanFull()
                    ->rows(10),
                    
                TextInput::make('failed_at')
                    ->disabled(),
            ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('queue')
                    ->searchable(),
                    
                TextColumn::make('job_class')
                    ->getStateUsing(fn ($record) => $this->extractJobClass($record->payload))
                    ->searchable(),
                    
                TextColumn::make('exception')
                    ->limit(50)
                    ->tooltip(fn ($record) => $record->exception),
                    
                TextColumn::make('failed_at')
                    ->dateTime()
                    ->sortable(),
            ])
            ->actions([
                Action::make('retry')
                    ->icon('heroicon-o-arrow-path')
                    ->action(function ($record) {
                        Artisan::call('queue:retry', ['id' => $record->uuid]);
                        
                        Notification::make()
                            ->title('Job queued for retry')
                            ->success()
                            ->send();
                    }),
                    
                Action::make('delete')
                    ->icon('heroicon-o-trash')
                    ->color('danger')
                    ->requiresConfirmation()
                    ->action(fn ($record) => $record->delete()),
            ]);
    }
}
```

### 4. Queue Performance Analytics
**Utilizzo Static Tables per metriche:**

```php
class QueueAnalyticsWidget extends Widget
{
    public function getAnalyticsData(): array
    {
        $last24h = now()->subDay();
        $last7days = now()->subWeek();
        
        return [
            [
                'period' => 'Last 24 Hours',
                'jobs_processed' => $this->getJobsProcessedCount($last24h),
                'avg_processing_time' => $this->getAverageProcessingTime($last24h),
                'failure_rate' => $this->getFailureRate($last24h),
                'peak_hour' => $this->getPeakHour($last24h),
            ],
            [
                'period' => 'Last 7 Days', 
                'jobs_processed' => $this->getJobsProcessedCount($last7days),
                'avg_processing_time' => $this->getAverageProcessingTime($last7days),
                'failure_rate' => $this->getFailureRate($last7days),
                'peak_hour' => $this->getPeakHour($last7days),
            ],
        ];
    }
}
```

## 🚀 Vantaggi della Migrazione Job Module

### 1. Real-time Performance Monitoring
**Filament 4 polling + performance ottimizzate:**
```php
// Real-time job queue monitoring
protected int | string | array $columnSpan = 'full';
protected string $pollingInterval = '2s';

// Only updates changed data (Filament 4 feature)
public function getPollingData(): array
{
    return [
        'queue_size' => Queue::size('default'),
        'failed_count' => FailedJob::count(), 
        'processing_batches' => JobBatch::active()->count(),
    ];
}
```

### 2. Enhanced Job Batch Management
- **Batch retry con granular control**
- **Real-time progress tracking**
- **Advanced filtering e search**
- **Automated failure notifications**

### 3. Static Data per System Metrics
**Non serve Model per metriche di sistema:**
```php
// System health metrics senza DB queries pesanti
$metrics = [
    'queue_health' => $this->calculateQueueHealth(),
    'worker_status' => $this->getWorkerStatus(),
    'memory_usage' => $this->getMemoryUsage(),
];
```

### 4. Performance Optimizations
- **Partial rendering**: Solo job status changes vengono re-renderizzati
- **Background polling**: Non blocca UI durante updates
- **Lazy loading**: Caricamento progressivo job details

### 5. Advanced Security per Job Management
```php
// MFA per operazioni critiche job system
Action::make('purge_failed_jobs')
    ->requiresConfirmation()
    ->modalDescription('This will permanently delete all failed jobs.')
    ->form([
        Checkbox::make('mfa_verified')
            ->required()
            ->label('MFA verification completed'),
    ]);
```

## ⚠️ Svantaggi e Considerazioni

### 1. High-Frequency Updates Impact
```bash
# Polling ogni 2-3 secondi può causare:
⚠️  Database load incrementato
⚠️  Network traffic aumentato  
⚠️  Browser performance impact su UI complesse
```

### 2. Composer Dependencies Missing
**Problema attuale che complica migrazione:**
```json
{
    "require": {}, // ❌ Empty dependencies
    "require-dev": {} // ❌ Empty dev dependencies
}

// Needed for proper job monitoring:
{
    "require": {
        "laravel/horizon": "^5.0",
        "pusher/pusher-php-server": "^7.0"
    }
}
```

### 3. Real-time Infrastructure Requirements
```yaml
# Necessario per real-time updates:
services:
  redis:
    image: redis:alpine
  websockets:
    image: pusher/pusher-server
  horizon:
    command: php artisan horizon
```

### 4. Memory Usage con Polling
**Job lists con polling frequente:**
- Increased memory usage per browser tab
- Potential memory leaks con long-running sessions
- Resource consumption su server

## 🎯 Piano di Migrazione Job Module

### Fase 1: Dependencies & Infrastructure (2 giorni)
1. 🔧 Fix composer.json dependencies vuote
2. 🔧 Setup Redis per queue management  
3. 🔧 Configure Horizon per monitoring
4. 🔧 Setup WebSocket server per real-time

### Fase 2: Core Migration (3-4 giorni)
1. 🔄 Convert JobBatchResource a Schema unificato
2. 🔄 Create FailedJobResource con actions
3. 🔄 Implement real-time widgets
4. 🔄 Setup polling e performance optimization

### Fase 3: Advanced Features (2-3 giorni)
1. 🆕 Static data analytics widgets
2. 🆕 Advanced batch management actions
3. 🆕 Automated alerts e notifications
4. 🆕 Performance metrics dashboard

### Fase 4: Testing & Optimization (2 giorni)
1. 🧪 Load testing con high job volume
2. 🧪 Real-time update performance testing
3. 🧪 Memory usage monitoring
4. 🧪 Failover scenario testing

## 📋 Checklist Migrazione Job Module

### Pre-Migration
- [ ] **Fix composer.json dependencies**
- [ ] **Setup Redis infrastructure**
- [ ] **Configure Horizon dashboard**
- [ ] **Test queue workers functioning**

### Migration Core
- [ ] **Convert all Resources a Schema unificato**
- [ ] **Implement real-time polling**
- [ ] **Setup static data widgets**  
- [ ] **Configure MFA per critical actions**

### Post-Migration
- [ ] **Performance test job processing**
- [ ] **Verify real-time updates functioning**
- [ ] **Load test polling system**
- [ ] **Monitor memory usage patterns**

## 💡 Raccomandazioni Job Module

### ✅ MIGRAZIONE RACCOMANDATA perché:

1. **High-value features** - Real-time monitoring è game-changer
2. **Performance benefits** - Filament 4 ottimizzazioni critiche per job management
3. **Better UX** - Static data widgets perfect per system metrics
4. **Infrastructure ready** - Job system benefit da real-time updates
5. **Operational efficiency** - Advanced batch management tools

### ⚠️ Considerazioni importanti:

1. **Infrastructure dependency** - Redis, Horizon, WebSockets necessari
2. **Resource consumption** - Real-time polling ha overhead
3. **Complexity increase** - Più moving parts da monitorare

## 🕐 Timeline Stimato Job Module

**Effort moderato ma Infrastructure-heavy:**
- **Dependencies setup**: 2-3 giorni DevOps
- **Core migration**: 4-5 giorni sviluppatore
- **Real-time features**: 3-4 giorni sviluppatore  
- **Performance testing**: 2-3 giorni QA
- **Infrastructure testing**: 1-2 giorni DevOps

**TOTALE: 12-17 giorni lavorativi**

## 🔮 Conclusioni Job Module

**Migrazione ALTAMENTE RACCOMANDATA** - Il Job module è un **candidato perfetto** per Filament 4 perché:

✅ **Real-time monitoring** è natural fit per job management
✅ **Performance optimizations** critiche per high-volume job processing  
✅ **Static data features** perfect per system metrics
✅ **Advanced UI** migliora operational efficiency significativamente
✅ **ROI alto** su investment migrazione

**Timing**: Questo modulo può essere migrato **dopo Badge** ma **prima dei moduli più complessi** come User/GDPR.

**Success metric**: Reduced time-to-detection per job failures e improved batch management efficiency.