# Filament Widget Implementation - Job Module

## Panoramica
Questo documento descrive l'implementazione corretta dei widget Filament per il modulo Job, con particolare attenzione alla risoluzione dell'errore FatalError relativo alla visibilità del metodo `getFormSchema()`.

## Errore Risolto

### Descrizione dell'Errore
```
Symfony\Component\ErrorHandler\Error\FatalError
Class Modules\Job\Filament\Widgets\ClockWidget contains 1 abstract method and must therefore be declared abstract or implement the remaining methods (Modules\Xot\Filament\Widgets\XotBaseWidget::getFormSchema)
```

### Causa
La classe `ClockWidget` estendeva `XotBaseWidget` ma implementava il metodo `getFormSchema()` con visibilità **protetta** invece che **pubblica**. La classe base `XotBaseWidget` richiede che questo metodo sia **pubblico**.

### Struttura di XotBaseWidget
```php
<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Widgets;

abstract class XotBaseWidget extends FilamentWidget implements HasForms, HasActions
{
    /**
     * Ottiene lo schema del form.
     * Deve essere implementato nelle classi figlie.
     *
     * @return array<int|string, Forms\Components\Component>
     */
    abstract public function getFormSchema(): array; // ⚠️ PUBBLICO, non protetto!
}
```

## Implementazione Corretta

### ClockWidget Corretto
```php
<?php

declare(strict_types=1);

namespace Modules\Job\Filament\Widgets;

use Exception;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Process;
use Modules\Xot\Filament\Widgets\XotBaseWidget;
use Symfony\Component\Console\Output\BufferedOutput;
use Symfony\Component\Console\Output\StreamOutput;

use function Safe\fopen;

class ClockWidget extends XotBaseWidget
{
    /** @var string */
    public $time = '---';

    public bool $run = false;

    protected static string $view = 'job::filament.widgets.clock-widget';

    protected int|string|array $columnSpan = 'full';

    /**
     * Get the form schema for the widget.
     * ⚠️ IMPORTANTE: Questo metodo deve essere PUBBLICO, non protetto!
     *
     * @return array<int, \Filament\Forms\Components\Component>
     */
    public function getFormSchema(): array // ⚠️ PUBBLICO, non protected!
    {
        return [
            // Schema del form del widget
            // Per ora vuoto, ma può essere esteso in futuro
        ];
    }

    public function begin(): void
    {
        $this->beginProcess();
    }

    public function beginProcess(): void
    {
        $this->time = '';
        $process = Process::path(base_path())
            ->start('php artisan queue:listen --timeout=0');
        
        while ($process->running()) {
            $this->stream(to: 'count', content: $this->time, replace: true);
            sleep(3);
            $this->time .= $process->latestOutput();
        }

        $process->wait();
    }

    public function beginStream(): void
    {
        $this->run = ! $this->run;
        
        $resource = fopen('php://stdout', 'w');
        if ($resource === false) {
            throw new Exception('['.__LINE__.']['.class_basename($this).']');
        }
        
        $output = new StreamOutput($resource);
        Artisan::call('route:list', [], $output);
        dddx($output);
    }
}
```

## Pattern per Widget Filament

### 1. Estensione Corretta
```php
use Modules\Xot\Filament\Widgets\XotBaseWidget;

class MyWidget extends XotBaseWidget
{
    // Implementazione
}
```

### 2. Metodo getFormSchema Obbligatorio
```php
/**
 * @return array<int|string, \Filament\Forms\Components\Component>
 */
public function getFormSchema(): array // ⚠️ PUBBLICO!
{
    return [
        // Componenti del form
    ];
}
```

### 3. Proprietà Standard
```php
protected static string $view = 'job::filament.widgets.my-widget';
protected int|string|array $columnSpan = 'full';
public string $title = '';
public string $icon = '';
```

### 4. Metodi di Lifecycle
```php
public function mount(): void
{
    // Inizializzazione widget
}

public function render(): View
{
    // Rendering personalizzato (opzionale)
    return view(static::$view);
}
```

## Componenti Form Disponibili

### Input Base
```php
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Select;

public function getFormSchema(): array
{
    return [
        TextInput::make('time')
            ->label('Ora')
            ->required(),
        Toggle::make('run')
            ->label('Avvia')
            ->default(false),
        Select::make('mode')
            ->label('Modalità')
            ->options([
                'clock' => 'Orologio',
                'timer' => 'Timer',
                'stopwatch' => 'Cronometro',
            ]),
    ];
}
```

### Layout e Organizzazione
```php
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Grid;

public function getFormSchema(): array
{
    return [
        Section::make('Configurazione Orologio')
            ->schema([
                Grid::make(2)
                    ->schema([
                        TextInput::make('time'),
                        Toggle::make('run'),
                    ]),
            ])
            ->collapsible(),
    ];
}
```

## Gestione dello Stato

### Proprietà Pubbliche
```php
class ClockWidget extends XotBaseWidget
{
    /** @var string */
    public $time = '---';
    
    public bool $run = false;
    
    public ?string $mode = 'clock';
}
```

### Metodi per Aggiornamento Stato
```php
public function updateTime(): void
{
    $this->time = Carbon::now()->format('H:i:s');
}

public function toggleRun(): void
{
    $this->run = ! $this->run;
}
```

## Interazione con Livewire

### Eventi e Listener
```php
class ClockWidget extends XotBaseWidget
{
    public array $listener = [
        'echo:clock,time-updated' => 'handleTimeUpdate',
        'filters-updated' => 'filtersUpdated',
    ];

    public function handleTimeUpdate($event): void
    {
        $this->time = $event['time'];
    }
}
```

### Streaming Real-time
```php
public function streamTime(): void
{
    $this->stream(
        to: 'time-display',
        content: $this->time,
        replace: true
    );
}
```

## Best Practices

### 1. Visibilità Metodi
- **getFormSchema()**: SEMPRE `public`
- **Metodi di business logic**: `public` o `protected` secondo necessità
- **Metodi di utilità**: `private` quando possibile

### 2. Gestione Errori
```php
public function beginStream(): void
{
    try {
        $resource = fopen('php://stdout', 'w');
        if ($resource === false) {
            throw new Exception('Impossibile aprire stdout');
        }
        
        $output = new StreamOutput($resource);
        Artisan::call('route:list', [], $output);
        
    } catch (Exception $e) {
        Log::error('Errore in ClockWidget::beginStream', [
            'error' => $e->getMessage(),
            'widget' => static::class,
        ]);
        
        // Gestione fallback
        $this->time = 'Errore: ' . $e->getMessage();
    }
}
```

### 3. Performance
```php
class ClockWidget extends XotBaseWidget
{
    protected static ?bool $isLazy = true; // Caricamento lazy
    protected static ?string $pollingInterval = null; // No polling automatico
    
    public function getFormSchema(): array
    {
        return []; // Schema minimo per performance
    }
}
```

### 4. Responsività
```php
class ClockWidget extends XotBaseWidget
{
    protected int|string|array $columnSpan = 'full'; // Occupa tutta la larghezza
    
    // Adattamento per dispositivi mobili
    protected function getColumnSpan(): int|string|array
    {
        return match (true) {
            request()->isMobile() => 'full',
            request()->isTablet() => 2,
            default => 'full',
        };
    }
}
```

## Testing dei Widget

### Test Base
```php
<?php

declare(strict_types=1);

namespace Modules\Job\Tests\Feature\Filament\Widgets;

use Livewire\Livewire;
use Modules\Job\Filament\Widgets\ClockWidget;
use Tests\TestCase;

class ClockWidgetTest extends TestCase
{
    /** @test */
    public function it_can_render_clock_widget(): void
    {
        Livewire::test(ClockWidget::class)
            ->assertSee('---') // Valore iniziale
            ->assertSee('Avvia'); // Toggle button
    }

    /** @test */
    public function it_can_toggle_run_state(): void
    {
        Livewire::test(ClockWidget::class)
            ->assertSet('run', false)
            ->set('run', true)
            ->assertSet('run', true);
    }

    /** @test */
    public function it_implements_required_methods(): void
    {
        $widget = new ClockWidget();
        
        // Verifica che getFormSchema sia pubblico
        $reflection = new \ReflectionMethod($widget, 'getFormSchema');
        $this->assertTrue($reflection->isPublic());
        
        // Verifica che restituisca un array
        $this->assertIsArray($widget->getFormSchema());
    }
}
```

## Errori Comuni e Soluzioni

### Errore 1: Metodo getFormSchema Protetto
```php
// ❌ ERRATO: Metodo protetto
class ClockWidget extends XotBaseWidget
{
    protected function getFormSchema(): array // ERRORE!
    {
        return [];
    }
}

// ✅ CORRETTO: Metodo pubblico
class ClockWidget extends XotBaseWidget
{
    public function getFormSchema(): array // CORRETTO!
    {
        return [];
    }
}
```

### Errore 2: Metodo getFormSchema Mancante
```php
// ❌ ERRATO: Metodo mancante
class ClockWidget extends XotBaseWidget
{
    // Manca getFormSchema()
}

// ✅ CORRETTO: Metodo implementato
class ClockWidget extends XotBaseWidget
{
    public function getFormSchema(): array
    {
        return [];
    }
}
```

### Errore 3: Tipo di Ritorno Errato
```php
// ❌ ERRATO: Tipo di ritorno non corretto
class ClockWidget extends XotBaseWidget
{
    public function getFormSchema() // Manca tipo di ritorno
    {
        return [];
    }
}

// ✅ CORRETTO: Tipo di ritorno esplicito
class ClockWidget extends XotBaseWidget
{
    public function getFormSchema(): array
    {
        return [];
    }
}
```

## Checklist per Widget

### Prima di Creare un Widget
- [ ] Verificare che la classe estenda `XotBaseWidget`
- [ ] Implementare il metodo `getFormSchema()` come **PUBBLICO**
- [ ] Definire la proprietà `$view` con il percorso corretto
- [ ] Configurare `$columnSpan` appropriato

### Durante l'Implementazione
- [ ] Utilizzare componenti Form appropriati
- [ ] Gestire correttamente lo stato del widget
- [ ] Implementare gestione errori robusta
- [ ] Considerare performance e responsività

### Dopo l'Implementazione
- [ ] Testare il rendering del widget
- [ ] Verificare interazioni e aggiornamenti stato
- [ ] Controllare responsività su dispositivi diversi
- [ ] Eseguire test unitari e feature

## Collegamenti e Riferimenti

- [XotBaseWidget Source Code](../../../Xot/app/Filament/Widgets/XotBaseWidget.php)
- [Filament Widgets Documentation](https://filamentphp.com/project_docs/3.x/panels/widgets)
- [Filament Forms Documentation](https://filamentphp.com/project_docs/3.x/forms/fields)
- [Livewire Testing Documentation](https://laravel-livewire.com/project_docs/testing)
- [Filament ViewRecord Errors](../../../project_docs/filament-view-record-errors.md)

## Note di Manutenzione

- **Data Creazione**: 2025-01-06
- **Motivazione**: Documentazione dell'errore FatalError in ClockWidget e sua risoluzione
- **Autore**: AI Assistant
- **Stato**: Completato e verificato
- **Ultimo Aggiornamento**: 2025-01-06

---

**IMPORTANTE**: 
1. Ricorda sempre che `getFormSchema()` deve essere **PUBBLICO** quando si estende `XotBaseWidget`
2. Questo errore è comune e può essere facilmente evitato seguendo i pattern documentati sopra
3. La visibilità dei metodi è fondamentale per il corretto funzionamento dei widget Filament
4. Testa sempre i widget dopo l'implementazione per verificare che non ci siano errori di visibilità
