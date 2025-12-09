<?php

declare(strict_types=1);

use Illuminate\Support\Facades\DB;
use Modules\Job\Tests\TestCase;

uses(TestCase::class);

test('database connection works', function () {
    // Simple test to verify database connection
    expect(DB::connection())->not->toBeNull();
    expect(DB::connection()->getPdo())->not->toBeNull();
});

test('can create a simple database record without model', function () {
    // Test direct database insert without using Eloquent models
    $result = DB::table('users')->insert([
        'name' => 'Test User',
        'email' => 'test@example.com',
        'password' => 'password123',
        'created_at' => now(),
        'updated_at' => now(),
    ]);

    expect($result)->toBeTrue();

    $user = DB::table('users')->where('email', 'test@example.com')->first();
    expect($user)->not->toBeNull();
<<<<<<< HEAD
    expect($user?->name)->toBe('Test User');
=======
<<<<<<< HEAD
<<<<<<< HEAD
    expect($user?->name)->toBe('Test User');
=======
    expect($user->name)->toBe('Test User');
>>>>>>> a12f125f4a (.)
=======
    expect($user?->name)->toBe('Test User');
>>>>>>> b93ef594b4 (.)
>>>>>>> 548bbd3 (.)
});
