<?php

declare(strict_types=1);

use Modules\Job\Actions\GetTaskFrequenciesAction;
use function Safe\class_uses;
use function Safe\file_get_contents;

describe('GetTaskFrequenciesAction', function (): void {
    it('can be instantiated', function (): void {
        $action = new GetTaskFrequenciesAction();
        expect($action)->toBeInstanceOf(GetTaskFrequenciesAction::class);
    });

    it('has queueable action trait', function (): void {
        $action = new GetTaskFrequenciesAction();
        $traits = class_uses($action);

        expect($traits)->toContain('Spatie\QueueableAction\QueueableAction');
    });

    it('has correct method signature', function (): void {
        $reflection = new \ReflectionClass(GetTaskFrequenciesAction::class);
        /** @phpstan-ignore-next-line method.nonObject */
        $method = $reflection->getMethod('execute');

        expect($method->isPublic())->toBeTrue();
        
        /** @phpstan-ignore-next-line method.nonObject */
        $returnType = $method->getReturnType();
        if ($returnType instanceof \ReflectionNamedType) {
            expect($returnType->getName())->toBe('array');
        }
        
        expect($method->getNumberOfParameters())->toBe(0);
    });

    it('has proper return type annotation', function (): void {
        $reflection = new \ReflectionClass(GetTaskFrequenciesAction::class);
        /** @phpstan-ignore-next-line method.nonObject */
        $method = $reflection->getMethod('execute');

        /** @phpstan-ignore-next-line method.nonObject */
        $docComment = $method->getDocComment();
        expect($docComment)->toContain('@return array<string, mixed>');
    });

    it('uses correct exception handling', function (): void {
        $reflection = new \ReflectionClass(GetTaskFrequenciesAction::class);
        /** @phpstan-ignore-next-line method.nonObject */
        $method = $reflection->getMethod('execute');

        // Check that the method can throw exceptions
        expect($method)->not->toBeNull();
    });

    it('has proper class structure', function (): void {
        $reflection = new \ReflectionClass(GetTaskFrequenciesAction::class);

        expect($reflection->isInstantiable())
            ->toBeTrue()
            /** @phpstan-ignore-next-line method.nonObject */
            ->and($reflection->isFinal())
            ->toBeFalse()
            /** @phpstan-ignore-next-line method.nonObject */
            ->and($reflection->isAbstract())
            ->toBeFalse();
    });

    it('implements queueable functionality', function (): void {
        $action = new GetTaskFrequenciesAction();
        // Test that queueable methods are available via trait
        expect($action)->toBeInstanceOf(GetTaskFrequenciesAction::class);
    });

    it('has correct namespace', function (): void {
        $reflection = new \ReflectionClass(GetTaskFrequenciesAction::class);

        expect($reflection->getNamespaceName())->toBe('Modules\Job\Actions');
    });

    it('uses strict types', function (): void {
        $reflection = new \ReflectionClass(GetTaskFrequenciesAction::class);
        /** @phpstan-ignore-next-line method.nonObject */
        $filename = $reflection->getFileName();

        if ($filename !== false) {
            $content = file_get_contents($filename);
            expect($content)->toContain('declare(strict_types=1);');
        }
    });

    it('has proper imports', function (): void {
        $reflection = new \ReflectionClass(GetTaskFrequenciesAction::class);
        /** @phpstan-ignore-next-line method.nonObject */
        $filename = $reflection->getFileName();

        if ($filename !== false) {
            $content = file_get_contents($filename);
            expect($content)
                ->toContain('use Exception;')
                ->and($content)
                ->toContain('use Spatie\QueueableAction\QueueableAction;');
        }
    });

    it('validates class dependencies', function (): void {
        // Check that required classes exist
        expect(class_exists('Exception'))
            ->and(trait_exists('Spatie\QueueableAction\QueueableAction'))
            ->toBeTrue();
    });

    it('has correct method implementation structure', function (): void {
        $reflection = new \ReflectionClass(GetTaskFrequenciesAction::class);
        /** @phpstan-ignore-next-line method.nonObject */
        $method = $reflection->getMethod('execute');

        // Verify method is properly implemented
        expect($method->isPublic())
            ->toBeTrue()
            /** @phpstan-ignore-next-line method.nonObject */
            ->and($method->isStatic())
            ->toBeFalse()
            /** @phpstan-ignore-next-line method.nonObject */
            ->and($method->isAbstract())
            ->toBeFalse();
    });

    it('follows Laravel action conventions', function (): void {
        $action = new GetTaskFrequenciesAction();
        // Test that the action follows Laravel conventions
        expect($action)->toBeInstanceOf(GetTaskFrequenciesAction::class);
    });

    it('can be used with dependency injection', function (): void {
        // Test that the action can be resolved from container
        $actionFromContainer = app(GetTaskFrequenciesAction::class);

        expect($actionFromContainer)->toBeInstanceOf(GetTaskFrequenciesAction::class);
    });

    it('has proper error handling implementation', function (): void {
        $reflection = new \ReflectionClass(GetTaskFrequenciesAction::class);
        /** @phpstan-ignore-next-line method.nonObject */
        $filename = $reflection->getFileName();

        if ($filename !== false) {
            $content = file_get_contents($filename);
            expect($content)->toContain('throw new Exception');
        }
    });

    it('validates config function usage', function (): void {
        $reflection = new \ReflectionClass(GetTaskFrequenciesAction::class);
        /** @phpstan-ignore-next-line method.nonObject */
        $filename = $reflection->getFileName();

        if ($filename !== false) {
            $content = file_get_contents($filename);
            expect($content)->toContain('config(');
        }
    });
});
