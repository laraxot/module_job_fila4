# PHPStan Fixes - Job Module

## Overview
This document tracks the PHPStan fixes applied to the Job module to resolve type safety issues and ensure code quality.

## Issues Identified
During analysis, we identified that the main PHPStan error is occurring during the bootstrap process:
```
Webmozart\Assert\InvalidArgumentException thrown in /var/www/_bases/base_quaeris_fila4_mono/laravel/vendor/webmozart/assert/src/Assert.php on line 2338 while loading bootstrap file /var/www/_bases/base_quaeris_fila4_mono/laravel/vendor/larastan/larastan/bootstrap.php: [Modules\User\Models\User] check config auth
```

This error indicates that there's an issue with the user class configuration validation during the bootstrap process.

## Fixes Applied

### 1. Parameter Model Type Safety
- **Issue**: Missing type safety in Parameter model
- **Solution**: Added proper type casting and validation
- **Files Affected**:
  - `Modules/Job/app/Models/Parameter.php`

### 2. Frequency Model Type Safety
- **Issue**: Missing type safety in Frequency model
- **Solution**: Added proper type casting and validation
- **Files Affected**:
  - `Modules/Job/app/Models/Frequency.php`

### 3. Task Model Type Safety
- **Issue**: Missing type safety in Task model, particularly in the `compileParameters` method
- **Solution**: Added proper type casting and validation
- **Files Affected**:
  - `Modules/Job/app/Models/Task.php`

## Key Changes

### Parameter Model
```php
// Added proper type casting for all properties
protected function casts(): array
{
    return array_merge(parent::casts(), [
        'id' => 'integer',
        'frequency_id' => 'integer',
        'name' => 'string',
        'value' => 'string',
        'created_by' => 'string',
        'updated_by' => 'string',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ]);
}
```

### Task Model
```php
// Fixed compileParameters method to ensure proper type handling
public function compileParameters(bool $forScheduler = false): array
{
    $parametersValue = $this->attributes['parameters'] ?? null;
    
    if ($parametersValue === null) {
        return [];
    }

    $parameters = json_decode((string) $parametersValue, true);
    Assert::isArray($parameters);

    if ($forScheduler) {
        return array_map(fn ($value) => is_bool($value) ? ($value ? '1' : '0') : ((string) $value), $parameters);
    }

    return $parameters;
}
```

## Benefits
1. **Type Safety**: Improved type checking with proper casting
2. **Flexibility**: Ensured models work correctly with dynamic properties
3. **Maintainability**: Centralized casting definitions
4. **Compliance**: Follows Laraxot architecture patterns

## Next Steps
1. Continue monitoring for any runtime issues
2. Review other modules for similar patterns
3. Update documentation as needed