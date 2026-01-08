<?php

declare(strict_types=1);

return [
    'navigation' => [
        'label' => 'Job in attesa',
        'group' => 'Automazioni',
        'icon' => 'heroicon-o-clock',
        'sort' => 50,
    ],
    'fields' => [
        'id' => [
            'label' => 'ID',
            'description' => 'Identificativo univoco del job',
            'helper_text' => 'Generato automaticamente dal sistema',
        ],
        'queue' => [
            'label' => 'Coda',
            'description' => 'Coda in cui il job è in attesa',
            'helper_text' => 'Aiuta a distribuire il carico tra code differenti',
        ],
        'payload' => [
            'label' => 'Payload',
            'description' => 'Dati e parametri del job',
            'helper_text' => 'Contiene il comando e i parametri serializzati',
        ],
        'attempts' => [
            'label' => 'Tentativi',
            'description' => 'Numero di tentativi di esecuzione',
            'helper_text' => 'Aggiornato automaticamente dopo ogni retry',
        ],
        'reserved_at' => [
            'label' => 'Riservato alle',
            'description' => 'Timestamp di presa in carico',
            'helper_text' => 'Indica il momento in cui un worker ha iniziato il job',
        ],
        'available_at' => [
            'label' => 'Disponibile dalle',
            'description' => 'Quando il job può essere eseguito',
            'helper_text' => 'Utilizzato per delay e pianificazioni',
        ],
        'created_at' => [
            'label' => 'Creato il',
            'description' => 'Data di creazione del job',
            'helper_text' => 'Serve a monitorare i job più vecchi',
        ],
    ],
    'actions' => [
        'process' => [
            'label' => 'Esegui ora',
            'tooltip' => 'Avvia immediatamente il job selezionato',
            'icon' => 'heroicon-o-play',
            'color' => 'success',
            'modal' => [
                'heading' => 'Esegui job in attesa',
                'description' => 'Confermi l\'avvio immediato di questo job?',
            ],
            'messages' => [
                'success' => 'Job avviato con successo.',
            ],
        ],
        'cancel' => [
            'label' => 'Annulla',
            'tooltip' => 'Rimuovi il job dalla coda',
            'icon' => 'heroicon-o-x-circle',
            'color' => 'danger',
            'modal' => [
                'heading' => 'Annulla job',
                'description' => 'Questa azione rimuove definitivamente il job dalla coda. Vuoi continuare?',
            ],
            'messages' => [
                'success' => 'Job annullato correttamente.',
            ],
        ],
        'retry' => [
            'label' => 'Riprova',
            'tooltip' => 'Ripianifica l\'esecuzione del job',
            'icon' => 'heroicon-o-arrow-path',
            'color' => 'warning',
            'modal' => [
                'heading' => 'Ripianifica job',
                'description' => 'Vuoi riprovare l\'esecuzione del job selezionato?',
            ],
            'messages' => [
                'success' => 'Job ripianificato con successo.',
            ],
        ],
    ],
    'messages' => [
        'no_jobs' => 'Non ci sono job in attesa.',
        'job_processed' => 'Job eseguito correttamente.',
        'job_cancelled' => 'Job annullato.',
        'job_retried' => 'Job ripianificato.',
    ],
    'statuses' => [
        'waiting' => 'In attesa',
        'reserved' => 'Riservato',
        'delayed' => 'Ritardato',
        'ready' => 'Pronto',
    ],
    'priorities' => [
        'low' => 'Bassa',
        'normal' => 'Normale',
        'high' => 'Alta',
        'urgent' => 'Urgente',
  'navigation' => 
  [
    'label' => 'Navigation Label',
    'group' => 'Job',
    'icon' => 'heroicon-o-cog',
    'sort' => 50,
  ],
  'fields' => 
  [
    'id' => 
    [
      'label' => 'ID',
      'description' => 'Unique identifier for the job',
      'helper_text' => 'Auto-generated job identifier',
    ],
    'queue' => 
    [
      'label' => 'Queue',
      'description' => 'Queue name where the job is waiting',
      'helper_text' => 'Name of the queue this job belongs to',
    ],
    'payload' => 
    [
      'label' => 'Payload',
      'description' => 'Job data and parameters',
      'helper_text' => 'Serialized job data and parameters',
    ],
    'attempts' => 
    [
      'label' => 'Attempts',
      'description' => 'Number of execution attempts',
      'helper_text' => 'How many times this job has been attempted',
    ],
    'reserved_at' => 
    [
      'label' => 'Reserved At',
      'description' => 'When the job was reserved for processing',
      'helper_text' => 'Timestamp when job was picked up for processing',
    ],
    'available_at' => 
    [
      'label' => 'Available At',
      'description' => 'When the job becomes available for processing',
      'helper_text' => 'Timestamp when job becomes available for execution',
    ],
    'created_at' => 
    [
      'label' => 'Created At',
      'description' => 'When the job was created',
      'helper_text' => 'Timestamp when job was added to queue',
    ],
  ],
  'actions' => 
  [
    'export' => 
    [
      'label' => 'Esporta',
      'tooltip' => 'Esporta i dati in un file',
      'icon' => 'export-icon',
      'color' => 'green',
      'filename_prefix' => 'Aree al',
      'columns' => 
      [
        'name' => 
        [
          'label' => 'Nome area',
          'tooltip' => 'Nome dell\'area da esportare',
        ],
        'parent_name' => 
        [
          'label' => 'Nome area livello superiore',
          'tooltip' => 'Nome dell\'area di livello superiore',
        ],
      ],
    ],
    'process' => 
    [
      'label' => 'Processa',
      'tooltip' => 'Processa il job in attesa',
      'icon' => 'play-circle',
      'color' => 'green',
      'modal' => 
      [
        'heading' => 'Processa Job',
        'description' => 'Vuoi processare questo job in attesa?',
      ],
      'messages' => 
      [
        'success' => 'Job processato con successo',
      ],
    ],
    'cancel' => 
    [
      'label' => 'Cancella',
      'tooltip' => 'Cancella il job in attesa',
      'icon' => 'delete-icon',
      'color' => 'red',
      'modal' => 
      [
        'heading' => 'Cancella Job',
        'description' => 'Vuoi cancellare questo job in attesa?',
      ],
      'messages' => 
      [
        'success' => 'Job cancellato con successo',
      ],
    ],
    'retry' => 
    [
      'label' => 'Riprova',
      'tooltip' => 'Riprova il job fallito',
      'icon' => 'redo',
      'color' => 'yellow',
      'modal' => 
      [
        'heading' => 'Riprova Job',
        'description' => 'Vuoi riprovare questo job?',
      ],
      'messages' => 
      [
        'success' => 'Job riprovato con successo',
      ],
    ],
  ],
  'messages' => 
  [
    'no_jobs' => 'Nessun job in attesa',
    'job_processed' => 'Job processato',
    'job_cancelled' => 'Job cancellato',
    'job_retried' => 'Job riprovato',
  ],
  'statuses' => 
  [
    'waiting' => 'In Attesa',
    'reserved' => 'Riservato',
    'delayed' => 'Ritardato',
    'ready' => 'Pronto',
  ],
  'priorities' => 
  [
    'low' => 'Bassa',
    'normal' => 'Normale',
    'high' => 'Alta',
    'urgent' => 'Urgente',
    ],
    'types' => [
        'default' => 'Standard',
        'scheduled' => 'Programmato',
        'recurring' => 'Ricorrente',
        'batch' => 'Batch',
    ],
];
