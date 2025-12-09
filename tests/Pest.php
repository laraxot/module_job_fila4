<?php

declare(strict_types=1);

use Modules\Job\Models\Job;
use Modules\Job\Models\JobBatch;
use Modules\Job\Tests\TestCase;

/*
 * |--------------------------------------------------------------------------
 * | Test Case
 * |--------------------------------------------------------------------------
 * |
 * | The closure you provide to your test functions is always bound to a specific PHPUnit test
 * | case class. By default, that class is "PHPUnit\Framework\TestCase". Of course, you may
 * | need to change it using the "pest()" function to bind a different classes or traits.
 * |
 */

pest()->extend(TestCase::class)->in('Feature', 'Unit');

/*
 * |--------------------------------------------------------------------------
 * | Expectations
 * |--------------------------------------------------------------------------
 * |
 * | When you're writing tests, you often need to check that values meet certain conditions. The
 * | "expect()" function gives you access to a set of "expectations" methods that you can use
 * | to assert different things. Of course, you may extend the Expectation API at any time.
 * |
 */

// Custom expectations removed due to PHPStan compatibility issues
// Use expect($value)->toBeInstanceOf(Job::class) directly in tests

/*
 * |--------------------------------------------------------------------------
 * | Functions
 * |--------------------------------------------------------------------------
 * |
 * | While Pest is very powerful out-of-the-box, you may have some testing code specific to your
 * | project that you don't want to repeat in every file. Here you can also expose helpers as
 * | global functions to help you to reduce the number of lines of code in your test files.
 * |
 */
namespace Modules\Job\Tests;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Modules\Job\Models\Job;
use Modules\Job\Models\JobBatch;

/*
|--------------------------------------------------------------------------
| Test Case
|--------------------------------------------------------------------------
|
| The closure you provide to your test functions is always bound to a specific PHPUnit test
| case class. By default, that class is "PHPUnit\Framework\TestCase". Of course, you may
| need to change it using the "pest()" function to bind a different classes or traits.
|
*/

uses(TestCase::class)
    ->uses(DatabaseTransactions::class)
    ->in('Feature', 'Unit');

/*
|--------------------------------------------------------------------------
| Expectations
|--------------------------------------------------------------------------
|
| When you're writing tests, you often need to check that values meet certain conditions. The
| "expect()" function gives you access to a set of "expectations" methods that you can use
| to assert different things. Of course, you may extend the Expectation API at any time.
|
*/

expect()->extend('toBeJob', function () {
    return $this->toBeInstanceOf(Job::class);
});

expect()->extend('toBeJobBatch', function () {
    return $this->toBeInstanceOf(JobBatch::class);
});

/*
|--------------------------------------------------------------------------
| Functions
|--------------------------------------------------------------------------
|
| While Pest is very powerful out-of-the-box, you may have some testing code specific to your
| project that you don't want to repeat in every file. Here you can also expose helpers as
| global functions to help you to reduce the number of lines of code in your test files.
|
*/

/**
 * @param array<string, mixed> $attributes
 * @return Job
 */
function createJob(array $attributes = []): Job
{
    /** @var \Illuminate\Database\Eloquent\Factories\Factory<Job> $factory */
    $factory = Job::factory();
    /** @var Job $job */
    $job = $factory->create($attributes);
    return $job;
}

/**
 * @param array<string, mixed> $attributes
 * @return Job
 */
function makeJob(array $attributes = []): Job
{
    /** @var \Illuminate\Database\Eloquent\Factories\Factory<Job> $factory */
    $factory = Job::factory();
    /** @var Job $job */
    $job = $factory->make($attributes);
    return $job;
}

/**
 * @param array<string, mixed> $attributes
 * @return JobBatch
 */
function createJobBatch(array $attributes = []): JobBatch
{
    /** @var \Illuminate\Database\Eloquent\Factories\Factory<JobBatch> $factory */
    $factory = JobBatch::factory();
    /** @var JobBatch $batch */
    $batch = $factory->create($attributes);
    return $batch;
}

/**
 * @param array<string, mixed> $attributes
 * @return JobBatch
 */
function makeJobBatch(array $attributes = []): JobBatch
{
    /** @var \Illuminate\Database\Eloquent\Factories\Factory<JobBatch> $factory */
    $factory = JobBatch::factory();
    /** @var JobBatch $batch */
    $batch = $factory->make($attributes);
    return $batch;
}
