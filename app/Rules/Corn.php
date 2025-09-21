<?php

declare(strict_types=1);

/**
 * @see HusamTariq\FilamentDatabaseSchedule
 */

namespace Modules\Job\Rules;

use Closure;
use Cron\CronExpression;
use Illuminate\Contracts\Validation\ValidationRule;

class Corn implements ValidationRule
{
    /**
     * Run the validation rule.
     */
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 548bbd3 (.)
    public function validate(string $_attribute, mixed $value, Closure $fail): void
    {
        if (!is_string($value)) {
            $msg = 'value is not a string [' . __LINE__ . '][' . class_basename($this) . ']';
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (! is_string($value)) {
            $msg = 'value is not a string ['.__LINE__.']['.class_basename($this).']';
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
    public function validate(string $_attribute, mixed $value, Closure $fail): void
    {
        if (!is_string($value)) {
            $msg = 'value is not a string [' . __LINE__ . '][' . class_basename($this) . ']';
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
            $fail($msg);

            return;
        }
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 548bbd3 (.)
        if (!CronExpression::isValidExpression($value)) {
            $msg = trans('job::schedule.validation.cron');
            if (!is_string($msg)) {
                $msg = 'WIP [' . __LINE__ . '][' . class_basename($this) . ']';
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
        if (! CronExpression::isValidExpression($value)) {
            $msg = trans('job::schedule.validation.cron');
            if (! is_string($msg)) {
                $msg = 'WIP ['.__LINE__.']['.class_basename($this).']';
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
        if (!CronExpression::isValidExpression($value)) {
            $msg = trans('job::schedule.validation.cron');
            if (!is_string($msg)) {
                $msg = 'WIP [' . __LINE__ . '][' . class_basename($this) . ']';
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
            }
            $fail($msg);
        }
    }
}
