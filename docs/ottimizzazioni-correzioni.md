# Job Module - Ottimizzazioni e Correzioni

## Panoramica
Il modulo Job gestisce background tasks, batch processing e queue management. È ben strutturato ma presenta alcune aree di miglioramento per performance e maintainability.

## 🔧 Ottimizzazioni Tecniche

### 1. Composer.json - Dipendenze Vuote
**Problema identificato:**
```json
"require": {},
"require-dev": {},
```

**Correzioni consigliate:**
```json
{
    "require": {
        "php": "^8.1",
        "laravel/horizon": "^5.0",
        "laravel/queue": "*"
    },
    "require-dev": {
        "pestphp/pest": "^2.0",
        "phpstan/phpstan": "^1.0"
    }
}
```

### 2. JobBatch Model - Ottimizzazioni

#### Problemi Identificati:
- Fillable include timestamp (security concern)
- Type hints mixed per processedJobs()
- Casts ridondanti

**Correzioni:**
```php
class JobBatch extends BaseModel
{
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id',
        'name', 
        'total_jobs',
        'pending_jobs',
        'failed_jobs',
        'failed_job_ids',
        'options',
        // Rimuovere timestamps da fillable
    ];

    protected function casts(): array
    {
        return [
            'id' => 'string',
            'total_jobs' => 'integer',
            'pending_jobs' => 'integer', 
            'failed_jobs' => 'integer',
            'options' => 'collection',
            'cancelled_at' => 'datetime',
            'finished_at' => 'datetime',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
        ];
    }

    // Fix type hint
    public function processedJobs(): int
    {
        return max(0, $this->total_jobs - $this->pending_jobs);
    }

    // Aggiungere scope utili
    public function scopeActive($query)
    {
        return $query->whereNull('finished_at')->whereNull('cancelled_at');
    }

    public function scopeCompleted($query)
    {
        return $query->whereNotNull('finished_at');
    }

    public function scopeFailed($query)
    {
        return $query->where('failed_jobs', '>', 0);
    }
}
```

### 3. Filament JobBatchResource - Miglioramenti

#### Problemi Attuali:
- Form schema inadeguato per read-only data
- Mancanza di table configuration
- Form fields non ottimali per job batches

**Miglioramenti:**
```php
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Tables\Actions\Action;

class JobBatchResource extends XotBaseResource
{
    protected static ?string $model = JobBatch::class;
    protected static ?string $navigationIcon = 'heroicon-o-queue-list';
    protected static ?string $navigationGroup = 'System';

    // Job batches dovrebbero essere principalmente read-only
    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('id')
                ->disabled()
                ->label('Batch ID'),
                
            Forms\Components\TextInput::make('name')
                ->disabled(),
                
            Forms\Components\Grid::make(3)->schema([
                Forms\Components\TextInput::make('total_jobs')
                    ->disabled()
                    ->numeric(),
                Forms\Components\TextInput::make('pending_jobs')
                    ->disabled() 
                    ->numeric(),
                Forms\Components\TextInput::make('failed_jobs')
                    ->disabled()
                    ->numeric(),
            ]),
            
            Forms\Components\Textarea::make('options')
                ->disabled()
                ->json(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->sortable(),
                    
                Tables\Columns\TextColumn::make('progress')
                    ->getStateUsing(fn ($record) => $record->progress() . '%')
                    ->badge()
                    ->color(fn ($state) => match (true) {
                        $state === '100%' => 'success',
                        (int)str_replace('%', '', $state) > 50 => 'warning',
                        default => 'danger',
                    }),
                    
                Tables\Columns\TextColumn::make('total_jobs')
                    ->numeric(),
                    
                Tables\Columns\TextColumn::make('pending_jobs')
                    ->numeric(),
                    
                Tables\Columns\TextColumn::make('failed_jobs')
                    ->numeric()
                    ->color('danger'),
                    
                Tables\Columns\IconColumn::make('status')
                    ->getStateUsing(function ($record) {
                        if ($record->cancelled()) return 'cancelled';
                        if ($record->failed()) return 'failed';
                        if ($record->finished()) return 'completed';
                        if ($record->hasPendingJobs()) return 'running';
                        return 'unknown';
                    })
                    ->icons([
                        'heroicon-o-check-circle' => 'completed',
                        'heroicon-o-x-circle' => 'failed',
                        'heroicon-o-clock' => 'running',
                        'heroicon-o-stop-circle' => 'cancelled',
                    ])
                    ->colors([
                        'success' => 'completed',
                        'danger' => 'failed', 
                        'warning' => 'running',
                        'gray' => 'cancelled',
                    ]),
                    
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable(),
                    
                Tables\Columns\TextColumn::make('finished_at')
                    ->dateTime()
                    ->sortable(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('status')
                    ->options([
                        'running' => 'Running',
                        'completed' => 'Completed', 
                        'failed' => 'Failed',
                        'cancelled' => 'Cancelled',
                    ])
                    ->query(function ($query, $data) {
                        if (!$data['value']) return;
                        
                        return match($data['value']) {
                            'running' => $query->where('pending_jobs', '>', 0)
                                              ->whereNull('finished_at')
                                              ->whereNull('cancelled_at'),
                            'completed' => $query->whereNotNull('finished_at')
                                                ->where('failed_jobs', 0),
                            'failed' => $query->where('failed_jobs', '>', 0),
                            'cancelled' => $query->whereNotNull('cancelled_at'),
                        };
                    }),
            ])
            ->actions([
                Action::make('retry_failed')
                    ->icon('heroicon-o-arrow-path')
                    ->color('warning')
                    ->visible(fn ($record) => $record->hasFailures())
                    ->action(function ($record) {
                        // Logic to retry failed jobs
                        $batch = Bus::findBatch($record->id);
                        if ($batch) {
                            $batch->retry();
                        }
                    }),
                    
                Action::make('cancel')
                    ->icon('heroicon-o-x-circle')
                    ->color('danger')
                    ->visible(fn ($record) => !$record->finished() && !$record->cancelled())
                    ->requiresConfirmation()
                    ->action(function ($record) {
                        $batch = Bus::findBatch($record->id);
                        if ($batch) {
                            $batch->cancel();
                        }
                    }),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListJobBatches::route('/'),
            'view' => Pages\ViewJobBatch::route('/{record}'), // Solo view, no edit
        ];
    }
}
```

## 📊 Performance Optimizations

### 1. Database Indexing
**Raccomandazioni per indici:**
```sql
-- Job batches
ALTER TABLE job_batches ADD INDEX idx_status (finished_at, cancelled_at);
ALTER TABLE job_batches ADD INDEX idx_progress (pending_jobs, total_jobs);
ALTER TABLE job_batches ADD INDEX idx_created (created_at);

-- Jobs table 
ALTER TABLE jobs ADD INDEX idx_queue_reserved (queue, reserved_at);
ALTER TABLE jobs ADD INDEX idx_available_at (available_at);

-- Failed jobs
ALTER TABLE failed_jobs ADD INDEX idx_failed_at (failed_at);
ALTER TABLE failed_jobs ADD INDEX idx_queue (queue);
```

### 2. Queue Configuration
**Ottimizzazioni config/queue.php:**
```php
return [
    'default' => env('QUEUE_CONNECTION', 'redis'),
    
    'connections' => [
        'redis' => [
            'driver' => 'redis',
            'connection' => 'queue',
            'queue' => env('REDIS_QUEUE', 'default'),
            'retry_after' => 120,
            'block_for' => null,
            'after_commit' => false,
        ],
        
        'batch' => [
            'driver' => 'redis',
            'connection' => 'queue',
            'queue' => 'batch',
            'retry_after' => 300, // Longer timeout for batches
        ],
    ],
];
```

### 3. Horizon Configuration
**Per monitoraggio avanzato:**
```php
// config/horizon.php
return [
    'environments' => [
        'production' => [
            'supervisor-1' => [
                'connection' => 'redis',
                'queue' => ['default', 'batch', 'emails'],
                'balance' => 'auto',
                'processes' => 10,
                'tries' => 3,
                'nice' => 0,
            ],
        ],
    ],
];
```

## 🚀 Advanced Features

### 1. Job Monitoring Service
```php
class JobMonitoringService
{
    public function getSystemStats(): array
    {
        return [
            'active_batches' => JobBatch::whereNull('finished_at')->count(),
            'failed_batches_today' => JobBatch::where('failed_jobs', '>', 0)
                ->whereDate('created_at', today())->count(),
            'avg_processing_time' => $this->getAverageProcessingTime(),
            'queue_sizes' => $this->getQueueSizes(),
        ];
    }

    private function getAverageProcessingTime(): float
    {
        return JobBatch::whereNotNull('finished_at')
            ->whereDate('created_at', today())
            ->selectRaw('AVG(TIMESTAMPDIFF(SECOND, created_at, finished_at)) as avg_time')
            ->value('avg_time') ?? 0;
    }

    private function getQueueSizes(): array
    {
        return [
            'default' => Queue::size('default'),
            'batch' => Queue::size('batch'),
            'emails' => Queue::size('emails'),
        ];
    }
}
```

### 2. Custom Batch Events
```php
// Events
class BatchStarted 
{
    public function __construct(public JobBatch $batch) {}
}

class BatchCompleted
{
    public function __construct(public JobBatch $batch) {}
}

class BatchFailed
{
    public function __construct(public JobBatch $batch) {}
}

// Listeners
class BatchEventListener
{
    public function handleBatchStarted(BatchStarted $event): void
    {
        Log::info("Batch started: {$event->batch->name}");
        // Send notification to admins
    }

    public function handleBatchCompleted(BatchCompleted $event): void
    {
        Log::info("Batch completed: {$event->batch->name}");
        // Update metrics, send notifications
    }

    public function handleBatchFailed(BatchFailed $event): void
    {
        Log::error("Batch failed: {$event->batch->name}");
        // Send alert, create ticket
    }
}
```

## 🧪 Testing Strategy

### 1. Job Testing
```php
// JobBatchTest
class JobBatchTest extends TestCase
{
    test('can create job batch')
    {
        $batch = JobBatch::factory()->create([
            'name' => 'Test Batch',
            'total_jobs' => 10,
            'pending_jobs' => 5,
        ]);

        $this->assertEquals(50, $batch->progress());
        $this->assertTrue($batch->hasPendingJobs());
        $this->assertFalse($batch->finished());
    }

    test('calculates progress correctly')
    {
        $batch = JobBatch::factory()->create([
            'total_jobs' => 100,
            'pending_jobs' => 25,
        ]);

        $this->assertEquals(75, $batch->progress());
        $this->assertEquals(75, $batch->processedJobs());
    }

    test('identifies failed batches')
    {
        $batch = JobBatch::factory()->create([
            'total_jobs' => 10,
            'failed_jobs' => 10,
        ]);

        $this->assertTrue($batch->failed());
        $this->assertTrue($batch->hasFailures());
    }
}

// Feature test for Filament Resource
class JobBatchResourceTest extends TestCase
{
    test('can list job batches')
    {
        $batches = JobBatch::factory(3)->create();

        livewire(ListJobBatches::class)
            ->assertCanSeeTableRecords($batches);
    }

    test('can filter by status')
    {
        $runningBatch = JobBatch::factory()->create(['pending_jobs' => 5]);
        $completedBatch = JobBatch::factory()->create([
            'pending_jobs' => 0,
            'finished_at' => now(),
        ]);

        livewire(ListJobBatches::class)
            ->filterTable('status', 'running')
            ->assertCanSeeTableRecords([$runningBatch])
            ->assertCanNotSeeTableRecords([$completedBatch]);
    }
}
```

## 🔐 Security & Reliability  

### 1. Job Security
```php
// JobSecurityMiddleware
class JobSecurityMiddleware
{
    public function handle($job, $next)
    {
        // Rate limiting
        if ($this->exceedsRateLimit($job)) {
            $job->fail('Rate limit exceeded');
            return;
        }

        // Resource monitoring
        if ($this->exceedsMemoryLimit()) {
            $job->fail('Memory limit exceeded');
            return;
        }

        return $next($job);
    }
}
```

### 2. Error Handling
```php
// BaseJob with error handling
abstract class BaseJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public int $tries = 3;
    public int $maxExceptions = 1;
    public int $timeout = 300;

    public function retryUntil(): DateTime
    {
        return now()->addHours(2);
    }

    public function failed(\Throwable $exception): void
    {
        Log::error('Job failed', [
            'job' => static::class,
            'exception' => $exception->getMessage(),
            'trace' => $exception->getTraceAsString(),
        ]);

        // Send notification to admin
        event(new JobFailedEvent($this, $exception));
    }
}
```

## 📚 Documentation

### 1. File da Cleanup
**Problemi identificati nel docs:**
- Documentazione dispersa e duplicata
- File di dimensioni eccessive (bottlenecks-detailed.md: 8517 bytes)
- Struttura non organizzata

**Raccomandazioni:**
```bash
# Struttura consigliata
docs/
├── README.md (overview)
├── getting-started.md
├── configuration.md
├── advanced/
│   ├── batching.md
│   ├── monitoring.md
│   └── performance.md
├── api/
│   ├── jobs.md
│   └── batches.md
└── troubleshooting.md
```

## 🎯 Priorità di Implementazione

### 🔴 Critica (Immediata)
1. ✅ Aggiungere dipendenze mancanti composer.json
2. ✅ Fix fillable JobBatch model
3. ✅ Implementare indici database

### 🟡 Alta (Entro 2 settimane)
1. Enhanced Filament resource con actions
2. Job monitoring service
3. Error handling improvements
4. Testing coverage

### 🟢 Media (Entro 1 mese)
1. Horizon integration
2. Advanced batch features
3. Documentation restructuring
4. Performance monitoring

### 🔵 Bassa (Future)
1. Custom batch workflows
2. Advanced analytics
3. External integrations
4. Auto-scaling capabilities

## 💡 Conclusioni

Il modulo Job ha una buona architettura di base ma necessita di miglioramenti in sicurezza, monitoring e user experience. Le priorità sono l'aggiunta di dipendenze mancanti e il miglioramento della Filament resource per better job management. L'implementazione di proper monitoring e error handling migliorerà significativamente la reliability del sistema.