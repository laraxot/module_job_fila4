<?php

declare(strict_types=1);

namespace Modules\Job\Models\Policies;

use Modules\Job\Models\ScheduleHistory;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Contracts\ProfileContract;

class ScheduleHistoryPolicy extends JobBasePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('schedule_history.viewAny');
    public function viewAny(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('schedule_history.viewAny'); /** @phpstan-ignore method.nonObject */
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(UserContract $user, ScheduleHistory $_schedule_history): bool
    {
        return $user->hasPermissionTo('schedule_history.view');
    public function view(ProfileContract $user, ScheduleHistory $schedule_history): bool
    {
        return $user->hasPermissionTo('schedule_history.view'); /** @phpstan-ignore method.nonObject */
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('schedule_history.create');
    public function create(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('schedule_history.create'); /** @phpstan-ignore method.nonObject */
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(UserContract $user, ScheduleHistory $_schedule_history): bool
    {
        return $user->hasPermissionTo('schedule_history.update');
    public function update(ProfileContract $user, ScheduleHistory $schedule_history): bool
    {
        return $user->hasPermissionTo('schedule_history.update'); /** @phpstan-ignore method.nonObject */
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(UserContract $user, ScheduleHistory $_schedule_history): bool
    {
        return $user->hasPermissionTo('schedule_history.delete');
    public function delete(ProfileContract $user, ScheduleHistory $schedule_history): bool
    {
        return $user->hasPermissionTo('schedule_history.delete'); /** @phpstan-ignore method.nonObject */
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(UserContract $user, ScheduleHistory $_schedule_history): bool
    {
        return $user->hasPermissionTo('schedule_history.restore');
    public function restore(ProfileContract $user, ScheduleHistory $schedule_history): bool
    {
        return $user->hasPermissionTo('schedule_history.restore'); /** @phpstan-ignore method.nonObject */
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(UserContract $user, ScheduleHistory $schedule_history): bool
    {
        return $user->hasPermissionTo('schedule_history.forceDelete');
    public function forceDelete(ProfileContract $user, ScheduleHistory $schedule_history): bool
    {
        return $user->hasPermissionTo('schedule_history.forceDelete'); /** @phpstan-ignore method.nonObject */
    }
}
