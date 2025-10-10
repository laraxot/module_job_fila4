<?php

declare(strict_types=1);

namespace Modules\Job\Tests;

<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Foundation\Application;
use Modules\Job\Providers\JobServiceProvider;
=======
use Modules\Job\Providers\JobServiceProvider;
use Illuminate\Foundation\Application;
>>>>>>> e1b0bf9 (.)
=======
use Illuminate\Foundation\Application;
use Modules\Job\Providers\JobServiceProvider;
>>>>>>> 7d4742a (.)
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Modules\Xot\Tests\CreatesApplication;

/**
 * Base test case for Job module tests.
 */
abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    /**
     * Setup the test environment.
     */
    protected function setUp(): void
    {
        parent::setUp();

        // Load Job module specific configurations
        $this->loadLaravelMigrations();
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> e1b0bf9 (.)
=======

>>>>>>> 7d4742a (.)
        // Seed any required data for Job tests
        $this->artisan('module:seed', ['module' => 'Job']);
    }

    /**
     * Get package providers.
     *
     * @param Application $app
     * @return array<int, class-string>
     */
    protected function getPackageProviders($app): array
    {
        return [
            JobServiceProvider::class,
        ];
    }
}
