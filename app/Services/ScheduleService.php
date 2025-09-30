<?php

declare(strict_types=1);

namespace Modules\Job\Services;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;
use Modules\Job\Models\Schedule;
use Webmozart\Assert\Assert;

class ScheduleService
{
    /**
     * Undocumented variable.
     *
     * @var Schedule
     */
    private $model;

    public function __construct()
    {
<<<<<<< HEAD
        Assert::string($modelClass = config('job::model'), '[' . __LINE__ . '][' . class_basename($this) . ']');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        Assert::string($modelClass = config('job::model'), '[' . __LINE__ . '][' . class_basename($this) . ']');
=======
        Assert::string($modelClass = config('job::model'), '['.__LINE__.']['.class_basename($this).']');
>>>>>>> a12f125f4a (.)
=======
        Assert::string($modelClass = config('job::model'), '[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> b93ef594b4 (.)
=======
        Assert::string($modelClass = config('job::model'), '['.__LINE__.']['.class_basename($this).']');
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
        $this->model = app($modelClass);
    }

    /**
     * Undocumented function.
     *
     * @return Collection
     */
    public function getActives()
    {
        if (config('job::cache.enabled')) {
            return $this->getFromCache();
        }

        return $this->model->active()->get();
    }

    public function clearCache(): void
    {
<<<<<<< HEAD
        Assert::string($store = config('job::cache.store'), '[' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::string($key = config('job::cache.key'), '[' . __LINE__ . '][' . class_basename($this) . ']');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        Assert::string($store = config('job::cache.store'), '[' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::string($key = config('job::cache.key'), '[' . __LINE__ . '][' . class_basename($this) . ']');
=======
        Assert::string($store = config('job::cache.store'), '['.__LINE__.']['.class_basename($this).']');
        Assert::string($key = config('job::cache.key'), '['.__LINE__.']['.class_basename($this).']');
>>>>>>> a12f125f4a (.)
=======
        Assert::string($store = config('job::cache.store'), '[' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::string($key = config('job::cache.key'), '[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> b93ef594b4 (.)
=======
        Assert::string($store = config('job::cache.store'), '['.__LINE__.']['.class_basename($this).']');
        Assert::string($key = config('job::cache.key'), '['.__LINE__.']['.class_basename($this).']');
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)

        Cache::store($store)->forget($key);
    }

    /**
     * Undocumented function.
     *
     * @return Collection
     */
    private function getFromCache()
    {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 548bbd3 (.)
        Assert::string($store = config('job::cache.store'), '[' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::string($key = config('job::cache.key'), '[' . __LINE__ . '][' . class_basename($this) . ']');

        return Cache::store($store)->rememberForever($key, $this->model->active()->get(...));
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
        Assert::string($store = config('job::cache.store'), '['.__LINE__.']['.class_basename($this).']');
        Assert::string($key = config('job::cache.key'), '['.__LINE__.']['.class_basename($this).']');

        return Cache::store($store)->rememberForever($key, fn () => $this->model->active()->get());
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
        Assert::string($store = config('job::cache.store'), '[' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::string($key = config('job::cache.key'), '[' . __LINE__ . '][' . class_basename($this) . ']');

        return Cache::store($store)->rememberForever($key, $this->model->active()->get(...));
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
    }
}
