# Job Module - Testing Guidelines

## Testing Framework Requirements

### Environment Configuration
All tests MUST use `.env.testing` configuration:
```env
APP_ENV=testing
DB_CONNECTION=sqlite
DB_DATABASE=saluteora_data_test
QUEUE_CONNECTION=sync
```

### Pest Framework Usage
All tests MUST be written in Pest format. Convert any PHPUnit tests to Pest syntax.

## Business Logic Test Coverage

### 1. Job Processing Tests

#### Core Job Management
```php
<?php

declare(strict_types=1);

use Modules\Job\Models\JobBatch;
use Modules\Job\Jobs\ProcessPatientDataJob;
use Illuminate\Support\Facades\Queue;

describe('Job Processing Business Logic', function () {
    it('creates and processes jobs correctly', function () {
        Queue::fake();
        
        $job = new ProcessPatientDataJob(['patient_id' => 123]);
        
        dispatch($job);
        
        Queue::assertPushed(ProcessPatientDataJob::class, function ($job) {
            return $job->patientData['patient_id'] === 123;
        });
    });

    it('handles job failures with retry mechanism', function () {
        $jobBatch = JobBatch::create([
            'name' => 'test_batch',
            'total_jobs' => 1,
            'pending_jobs' => 1,
            'failed_jobs' => 0,
            'retry_attempts' => 3,
        ]);

        $jobBatch->recordFailure('Test failure');
        
        expect($jobBatch->fresh()->failed_jobs)->toBe(1)
            ->and($jobBatch->fresh()->canRetry())->toBeTrue();
    });

    it('processes batch jobs atomically', function () {
        $batch = JobBatch::create([
            'name' => 'patient_batch_update',
            'total_jobs' => 5,
            'pending_jobs' => 5,
        ]);

        // Simulate batch processing
        for ($i = 0; $i < 5; $i++) {
            $batch->recordSuccess();
        }
        
        expect($batch->fresh()->isCompleted())->toBeTrue()
            ->and($batch->fresh()->pending_jobs)->toBe(0)
            ->and($batch->fresh()->finished_at)->not->toBeNull();
    });

    it('prioritizes healthcare emergency jobs', function () {
        Queue::fake();
        
        $emergencyJob = new EmergencyNotificationJob(['patient_id' => 123]);
        $routineJob = new RoutineMaintenanceJob();
        
        dispatch($emergencyJob)->onQueue('emergency');
        dispatch($routineJob)->onQueue('default');
        
        Queue::assertPushedOn('emergency', EmergencyNotificationJob::class);
        Queue::assertPushedOn('default', RoutineMaintenanceJob::class);
    });
});
```

### 2. Scheduled Task Tests

```php
describe('Scheduled Task Business Logic', function () {
    it('creates scheduled tasks with proper frequency', function () {
        $task = ScheduledTask::create([
            'name' => 'daily_appointment_reminders',
            'job_class' => SendAppointmentRemindersJob::class,
            'frequency' => TaskFrequency::DAILY,
            'scheduled_time' => '09:00:00',
            'is_active' => true,
        ]);

        expect($task)
            ->toBeInstanceOf(ScheduledTask::class)
            ->and($task->frequency)->toBe(TaskFrequency::DAILY)
            ->and($task->is_active)->toBeTrue();
    });

    it('calculates next run time correctly', function () {
        $task = ScheduledTask::factory()->create([
            'frequency' => TaskFrequency::DAILY,
            'scheduled_time' => '10:00:00',
            'last_run_at' => now()->subDay(),
        ]);

        $nextRun = $task->getNextRunTime();
        
        expect($nextRun)->toBeInstanceOf(Carbon::class)
            ->and($nextRun->format('H:i:s'))->toBe('10:00:00');
    });

    it('respects healthcare operational hours', function () {
        $task = ScheduledTask::factory()->create([
            'frequency' => TaskFrequency::HOURLY,
            'operational_hours_only' => true,
        ]);

        // Test during non-operational hours (e.g., 2 AM)
        $nonOperationalTime = now()->setTime(2, 0, 0);
        $shouldRun = $task->shouldRunAt($nonOperationalTime);
        
        expect($shouldRun)->toBeFalse();
        
        // Test during operational hours (e.g., 10 AM)
        $operationalTime = now()->setTime(10, 0, 0);
        $shouldRun = $task->shouldRunAt($operationalTime);
        
        expect($shouldRun)->toBeTrue();
    });

    it('handles timezone conversions for multi-location healthcare', function () {
        $task = ScheduledTask::factory()->create([
            'scheduled_time' => '09:00:00',
            'timezone' => 'Europe/Rome',
        ]);

        $utcTime = $task->getScheduledTimeInTimezone('UTC');
        
        expect($utcTime)->toBeString()
            ->and($utcTime)->not->toBe('09:00:00'); // Should be different in UTC
    });
});
```

### 3. Healthcare Workflow Tests

```php
describe('Healthcare Workflow Business Logic', function () {
    it('processes patient registration workflow', function () {
        Queue::fake();
        
        $patient = Patient::factory()->create();
        
        $workflow = new PatientRegistrationWorkflow($patient);
        $workflow->execute();
        
        Queue::assertPushed(SendWelcomeEmailJob::class);
        Queue::assertPushed(RequestDocumentsJob::class);
        Queue::assertPushed(ScheduleInitialConsultationJob::class);
    });

    it('sends appointment reminders at correct intervals', function () {
        Queue::fake();
        
        $appointment = Appointment::factory()->create([
            'scheduled_at' => now()->addDays(1),
        ]);
        
        $reminderJob = new SendAppointmentReminderJob($appointment);
        $reminderJob->handle();
        
        Queue::assertPushed(SendEmailJob::class);
        Queue::assertPushed(SendSmsJob::class);
    });

    it('generates medical reports automatically', function () {
        $patient = Patient::factory()->create();
        $appointments = Appointment::factory()->count(3)->create([
            'patient_id' => $patient->id,
            'status' => 'completed',
        ]);

        $reportJob = new GenerateMedicalReportJob($patient);
        $result = $reportJob->handle();
        
        expect($result)->toBeArray()
            ->and($result['report_generated'])->toBeTrue()
            ->and($result['appointments_included'])->toBe(3);
    });

    it('processes billing workflow correctly', function () {
        Queue::fake();
        
        $appointment = Appointment::factory()->create([
            'status' => 'completed',
            'amount' => 150.00,
        ]);

        $billingWorkflow = new BillingWorkflow($appointment);
        $billingWorkflow->execute();
        
        Queue::assertPushed(GenerateInvoiceJob::class);
        Queue::assertPushed(SendInvoiceEmailJob::class);
        Queue::assertPushed(ProcessPaymentJob::class);
    });
});
```

### 4. Job Monitoring Tests

```php
describe('Job Monitoring Business Logic', function () {
    it('tracks job execution metrics', function () {
        $monitor = JobMonitor::create([
            'job_class' => ProcessPatientDataJob::class,
            'started_at' => now(),
        ]);

        $monitor->recordCompletion(1.5, 1024); // 1.5 seconds, 1MB memory
        
        expect($monitor->fresh()->execution_time)->toBe(1.5)
            ->and($monitor->fresh()->memory_usage)->toBe(1024)
            ->and($monitor->fresh()->status)->toBe('completed');
    });

    it('detects performance degradation', function () {
        // Create historical performance data
        JobMonitor::factory()->count(10)->create([
            'job_class' => ProcessPatientDataJob::class,
            'execution_time' => 1.0, // Normal execution time
            'status' => 'completed',
        ]);

        // Create slow execution
        $slowJob = JobMonitor::create([
            'job_class' => ProcessPatientDataJob::class,
            'execution_time' => 5.0, // Slow execution
            'status' => 'completed',
        ]);

        $analyzer = new JobPerformanceAnalyzer();
        $isDegraded = $analyzer->isPerformanceDegraded(ProcessPatientDataJob::class);
        
        expect($isDegraded)->toBeTrue();
    });

    it('generates job health reports', function () {
        // Create test job data
        JobMonitor::factory()->count(50)->create(['status' => 'completed']);
        JobMonitor::factory()->count(5)->create(['status' => 'failed']);
        JobMonitor::factory()->count(2)->create(['status' => 'timeout']);

        $report = JobHealthReport::generate();
        
        expect($report)->toHaveKey('total_jobs')
            ->and($report)->toHaveKey('success_rate')
            ->and($report['total_jobs'])->toBe(57)
            ->and($report['success_rate'])->toBeGreaterThan(0.8);
    });

    it('triggers alerts for critical job failures', function () {
        Queue::fake();
        
        $criticalJob = JobMonitor::create([
            'job_class' => EmergencyNotificationJob::class,
            'status' => 'failed',
            'error_message' => 'Critical system failure',
        ]);

        $alertSystem = new JobAlertSystem();
        $alertSystem->processFailure($criticalJob);
        
        Queue::assertPushed(SendAdminAlertJob::class);
    });
});
```

### 5. Integration Tests

```php
describe('Job Integration Tests', function () {
    it('integrates with notification system', function () {
        Queue::fake();
        
        $patient = Patient::factory()->create(['email' => 'test@example.com']);
        $appointment = Appointment::factory()->create([
            'patient_id' => $patient->id,
            'scheduled_at' => now()->addDay(),
        ]);

        $job = new SendAppointmentReminderJob($appointment);
        $job->handle();
        
        // Verify notification was queued
        Queue::assertPushed(function ($job) {
            return $job instanceof SendEmailJob && 
                   str_contains($job->email, 'test@example.com');
        });
    });

    it('maintains data consistency during batch operations', function () {
        $patients = Patient::factory()->count(10)->create();
        
        $batch = JobBatch::create([
            'name' => 'update_patient_records',
            'total_jobs' => 10,
            'pending_jobs' => 10,
        ]);

        DB::transaction(function () use ($patients, $batch) {
            foreach ($patients as $patient) {
                dispatch(new UpdatePatientRecordJob($patient))->onBatch($batch);
            }
        });
        
        expect($batch->fresh()->total_jobs)->toBe(10)
            ->and(Patient::count())->toBe(10); // No data corruption
    });

    it('handles external service failures gracefully', function () {
        // Mock external service failure
        Http::fake([
            'external-service.com/*' => Http::response([], 500),
        ]);

        $job = new SyncWithExternalServiceJob(['data' => 'test']);
        
        expect(function () use ($job) {
            $job->handle();
        })->not->toThrow();
        
        // Verify job was marked for retry
        expect($job->attempts())->toBeGreaterThan(0);
    });
});
```

## Performance Tests

### Job Queue Performance
```php
describe('Job Performance', function () {
    it('processes large job batches efficiently', function () {
        Queue::fake();
        
        $startTime = microtime(true);
        
        // Dispatch 1000 jobs
        for ($i = 0; $i < 1000; $i++) {
            dispatch(new ProcessDataJob(['id' => $i]));
        }
        
        $duration = microtime(true) - $startTime;
        
        expect($duration)->toBeLessThan(5.0) // 5 seconds max
            ->and(Queue::size())->toBe(1000);
    });

    it('handles memory-intensive jobs without leaks', function () {
        $initialMemory = memory_get_usage();
        
        $job = new ProcessLargeDatasetJob(['size' => 10000]);
        $job->handle();
        
        $finalMemory = memory_get_usage();
        $memoryIncrease = $finalMemory - $initialMemory;
        
        expect($memoryIncrease)->toBeLessThan(50 * 1024 * 1024); // 50MB max increase
    });
});
```

## Quality Standards

### Test Requirements
- All tests use `declare(strict_types=1);`
- Descriptive test names explaining job scenarios
- Complete setup and teardown
- Meaningful assertions covering job execution
- Performance benchmarks for critical jobs

### Business Logic Focus
- Job processing reliability
- Healthcare workflow automation
- Scheduling accuracy
- Performance monitoring
- Error handling and recovery

---

**Last Updated**: 2025-08-28
**Testing Framework**: Pest
**Environment**: .env.testing
