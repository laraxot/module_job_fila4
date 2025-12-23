<?php

declare(strict_types=1);

namespace Modules\Job\Tests;

<<<<<<< HEAD
use Illuminate\Foundation\Application;
use Modules\Job\Providers\JobServiceProvider;
=======
<<<<<<< HEAD
use Illuminate\Foundation\Application;
use Modules\Job\Providers\JobServiceProvider;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Foundation\Application;
use Modules\Job\Providers\JobServiceProvider;
=======
use Modules\Job\Providers\JobServiceProvider;
use Illuminate\Foundation\Application;
>>>>>>> a12f125f4a (.)
=======
use Illuminate\Foundation\Application;
use Modules\Job\Providers\JobServiceProvider;
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
>>>>>>> laraxot/develop
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

=======
<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
        
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
>>>>>>> laraxot/develop
        // Seed any required data for Job tests
        $this->artisan('module:seed', ['module' => 'Job']);
    }

    /**
     * Get package providers.
     *
<<<<<<< HEAD
     * @param Application $app
=======
<<<<<<< HEAD
     * @param Application $app
=======
<<<<<<< HEAD
     * @param Application $app
=======
     * @param \Illuminate\Foundation\Application $app
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
>>>>>>> laraxot/develop
     * @return array<int, class-string>
     */
    protected function getPackageProviders($app): array
    {
        return [
<<<<<<< HEAD
            JobServiceProvider::class,
=======
<<<<<<< HEAD
            JobServiceProvider::class,
=======
<<<<<<< HEAD
            JobServiceProvider::class,
=======
            \Modules\Job\Providers\JobServiceProvider::class,
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
>>>>>>> laraxot/develop
        ];
    }
}
