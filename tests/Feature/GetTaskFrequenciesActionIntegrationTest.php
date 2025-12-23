<?php

declare(strict_types=1);

use Modules\Job\Actions\GetTaskFrequenciesAction;
use Modules\Job\Models\TaskFrequency;

describe('GetTaskFrequenciesAction Integration', function () {
    beforeEach(function () {
        $this->action = new GetTaskFrequenciesAction();
    });

    it('returns array when config exists', function () {
        // Set up realistic frequency configuration
        config(['totem.frequencies' => [
            'everyMinute' => 'Every Minute',
            'everyFiveMinutes' => 'Every 5 Minutes',
            'hourly' => 'Hourly',
            'daily' => 'Daily',
            'weekly' => 'Weekly',
            'monthly' => 'Monthly',
        ]]);

        $result = $this->action->execute();

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 548bbd3 (.)
        expect($result)
            ->toBeArray()
            ->and($result)
            ->toHaveKeys([
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
        expect($result)->toBeArray()
            ->and($result)->toHaveKeys([
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
        expect($result)->toBeArray()
            ->and($result)->toHaveKeys([
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
                'everyMinute',
                'everyFiveMinutes',
                'hourly',
                'daily',
                'weekly',
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 548bbd3 (.)
                'monthly',
            ])
            ->and($result['everyMinute'])
            ->toBe('Every Minute')
            ->and($result['hourly'])
            ->toBe('Hourly')
            ->and($result['daily'])
            ->toBe('Daily');
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
                'monthly'
            ])
            ->and($result['everyMinute'])->toBe('Every Minute')
            ->and($result['hourly'])->toBe('Hourly')
            ->and($result['daily'])->toBe('Daily');
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
                'monthly',
            ])
            ->and($result['everyMinute'])
            ->toBe('Every Minute')
            ->and($result['hourly'])
            ->toBe('Hourly')
            ->and($result['daily'])
            ->toBe('Daily');
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
    });

    it('throws exception when config is not array', function () {
        // Mock config with non-array value
        config(['totem.frequencies' => 'invalid_value']);

<<<<<<< HEAD
        expect($this->action->execute(...))->toThrow(Exception::class);
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        expect($this->action->execute(...))->toThrow(Exception::class);
=======
        expect(fn () => $this->action->execute())
            ->toThrow(Exception::class);
>>>>>>> a12f125f4a (.)
=======
        expect($this->action->execute(...))->toThrow(Exception::class);
>>>>>>> b93ef594b4 (.)
=======
        expect(fn () => $this->action->execute())
            ->toThrow(Exception::class);
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
    });

    it('throws exception when config is null', function () {
        // Mock config with null value
        config(['totem.frequencies' => null]);

<<<<<<< HEAD
        expect($this->action->execute(...))->toThrow(Exception::class);
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        expect($this->action->execute(...))->toThrow(Exception::class);
=======
        expect(fn () => $this->action->execute())
            ->toThrow(Exception::class);
>>>>>>> a12f125f4a (.)
=======
        expect($this->action->execute(...))->toThrow(Exception::class);
>>>>>>> b93ef594b4 (.)
=======
        expect(fn () => $this->action->execute())
            ->toThrow(Exception::class);
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
    });

    it('handles empty array config', function () {
        config(['totem.frequencies' => []]);

        $result = $this->action->execute();

<<<<<<< HEAD
        expect($result)->toBeArray()->and(count($result))->toBe(0);
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        expect($result)->toBeArray()->and(count($result))->toBe(0);
=======
        expect($result)->toBeArray()
            ->and(count($result))->toBe(0);
>>>>>>> a12f125f4a (.)
=======
        expect($result)->toBeArray()->and(count($result))->toBe(0);
>>>>>>> b93ef594b4 (.)
=======
        expect($result)->toBeArray()
            ->and(count($result))->toBe(0);
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
    });

    it('can be queued', function () {
        // Test that the action can be queued (basic trait functionality)
        expect(method_exists($this->action, 'onQueue'))->toBeTrue();
    });

    it('integrates with Laravel service container', function () {
        // Test that the action can be resolved from container
        $actionFromContainer = app(GetTaskFrequenciesAction::class);
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
        expect($actionFromContainer)->toBeInstanceOf(GetTaskFrequenciesAction::class);
    });

    it('handles configuration changes dynamically', function () {
        // Test with initial config
        config(['totem.frequencies' => ['initial' => 'Initial Value']]);
        $result1 = $this->action->execute();

        // Change config
        config(['totem.frequencies' => ['changed' => 'Changed Value']]);
        $result2 = $this->action->execute();

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 548bbd3 (.)
        expect($result1)
            ->toHaveKey('initial')
            ->and($result1['initial'])
            ->toBe('Initial Value')
            ->and($result2)
            ->toHaveKey('changed')
            ->and($result2['changed'])
            ->toBe('Changed Value')
            ->and($result2)
            ->not->toHaveKey('initial');
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
        expect($result1)->toHaveKey('initial')
            ->and($result1['initial'])->toBe('Initial Value')
            ->and($result2)->toHaveKey('changed')
            ->and($result2['changed'])->toBe('Changed Value')
            ->and($result2)->not->toHaveKey('initial');
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
    });

    it('returns string keys and mixed values', function () {
        config(['totem.frequencies' => [
            'string_key' => 'string_value',
            'another_key' => ['nested', 'array'],
            'numeric_key' => 123,
            'boolean_key' => true,
        ]]);

        $result = $this->action->execute();

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 548bbd3 (.)
        expect($result)
            ->toBeArray()
            ->and($result['string_key'])
            ->toBe('string_value')
            ->and($result['another_key'])
            ->toBe(['nested', 'array'])
            ->and($result['numeric_key'])
            ->toBe(123)
            ->and($result['boolean_key'])
            ->toBe(true);
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
        expect($result)->toBeArray()
            ->and($result['string_key'])->toBe('string_value')
            ->and($result['another_key'])->toBe(['nested', 'array'])
            ->and($result['numeric_key'])->toBe(123)
            ->and($result['boolean_key'])->toBe(true);
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
    });

    it('preserves array key types', function () {
        config(['totem.frequencies' => [
            'string_key' => 'value1',
            0 => 'value2',
            1 => 'value3',
        ]]);

        $result = $this->action->execute();

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 548bbd3 (.)
        expect($result)
            ->toBeArray()
            ->and($result)
            ->toHaveKey('string_key')
            ->and($result)
            ->toHaveKey(0)
            ->and($result)
            ->toHaveKey(1)
            ->and($result['string_key'])
            ->toBe('value1')
            ->and($result[0])
            ->toBe('value2')
            ->and($result[1])
            ->toBe('value3');
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
        expect($result)->toBeArray()
            ->and($result)->toHaveKey('string_key')
            ->and($result)->toHaveKey(0)
            ->and($result)->toHaveKey(1)
            ->and($result['string_key'])->toBe('value1')
            ->and($result[0])->toBe('value2')
            ->and($result[1])->toBe('value3');
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
    });

    it('maintains consistency across multiple executions', function () {
        config(['totem.frequencies' => [
            'consistent_key' => 'Consistent Value',
            'another_key' => 'Another Value',
        ]]);

        $results = [];
        for ($i = 0; $i < 3; $i++) {
            $results[] = $this->action->execute();
        }

        // All results should be identical
        foreach ($results as $result) {
            expect($result)->toBe($results[0]);
        }
    });

    it('works with realistic totem configuration', function () {
        // Test with configuration that would be realistic for Laravel Totem
        config(['totem.frequencies' => [
            'everyMinute' => 'Every Minute',
            'everyFiveMinutes' => 'Every Five Minutes',
            'everyTenMinutes' => 'Every Ten Minutes',
            'everyFifteenMinutes' => 'Every Fifteen Minutes',
            'everyThirtyMinutes' => 'Every Thirty Minutes',
            'hourly' => 'Hourly',
            'daily' => 'Daily',
            'weekly' => 'Weekly',
            'monthly' => 'Monthly',
            'yearly' => 'Yearly',
        ]]);

        $result = $this->action->execute();

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 548bbd3 (.)
        expect($result)
            ->toBeArray()
            ->and(count($result))
            ->toBe(10)
            ->and(isset($result['everyMinute']) ? $result['everyMinute'] : null)
            ->toBe('Every Minute')
            ->and(isset($result['hourly']) ? $result['hourly'] : null)
            ->toBe('Hourly')
            ->and(isset($result['daily']) ? $result['daily'] : null)
            ->toBe('Daily')
            ->and(isset($result['weekly']) ? $result['weekly'] : null)
            ->toBe('Weekly')
            ->and(isset($result['monthly']) ? $result['monthly'] : null)
            ->toBe('Monthly')
            ->and(isset($result['yearly']) ? $result['yearly'] : null)
            ->toBe('Yearly');
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
        expect($result)->toBeArray()
            ->and(count($result))->toBe(10)
            ->and($result['everyMinute'])->toBe('Every Minute')
            ->and($result['hourly'])->toBe('Hourly')
            ->and($result['daily'])->toBe('Daily')
            ->and($result['weekly'])->toBe('Weekly')
            ->and($result['monthly'])->toBe('Monthly')
            ->and($result['yearly'])->toBe('Yearly');
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
    });
});
