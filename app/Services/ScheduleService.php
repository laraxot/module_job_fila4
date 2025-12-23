<?php

declare(strict_types=1);

namespace Modules\Job\Services;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;
use Modules\Job\Models\Schedule;
use Webmozart\Assert\Assert;

class ScheduleService
{
<<<<<<< HEAD
    /**
     * Undocumented variable.
     *
     * @var Schedule
     */
    private $model;

    public function __construct()
    {
        Assert::string($modelClass = config('job::model'), '['.__LINE__.']['.class_basename($this).']');
        $model = app($modelClass);
        Assert::isInstanceOf($model, Schedule::class);
=======
    private Schedule $model;

    public function __construct()
    {
        Assert::string($modelClass = config('job::model'), '[' . __LINE__ . '][' . class_basename($this) . ']');

        $model = app($modelClass);
        Assert::isInstanceOf($model, Schedule::class, '[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> laraxot/develop
        $this->model = $model;
    }

    /**
<<<<<<< HEAD
     * Undocumented function.
=======
     * @return Collection<int, Schedule>
>>>>>>> laraxot/develop
     */
    public function getActives(): Collection
    {
        if (config('job::cache.enabled')) {
            return $this->getFromCache();
        }

        return $this->model->active()->get();
    }

    public function clearCache(): void
    {
<<<<<<< HEAD
        Assert::string($store = config('job::cache.store'), '['.__LINE__.']['.class_basename($this).']');
        Assert::string($key = config('job::cache.key'), '['.__LINE__.']['.class_basename($this).']');
=======
        Assert::string($store = config('job::cache.store'), '[' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::string($key = config('job::cache.key'), '[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> laraxot/develop

        Cache::store($store)->forget($key);
    }

    /**
<<<<<<< HEAD
     * Undocumented function.
     */
    private function getFromCache(): Collection
    {
        Assert::string($store = config('job::cache.store'), '['.__LINE__.']['.class_basename($this).']');
        Assert::string($key = config('job::cache.key'), '['.__LINE__.']['.class_basename($this).']');

        return Cache::store($store)->rememberForever($key, $this->model->active()->get(...));
=======
     * @return Collection<int, Schedule>
     */
    private function getFromCache(): Collection
    {
        Assert::string($store = config('job::cache.store'), '[' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::string($key = config('job::cache.key'), '[' . __LINE__ . '][' . class_basename($this) . ']');

        /** @var Collection<int, Schedule> $result */
        $result = Cache::store($store)->rememberForever($key, fn (): Collection => $this->model->active()->get());

        return $result;
>>>>>>> laraxot/develop
    }
}
