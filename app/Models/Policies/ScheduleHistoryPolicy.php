<?php

declare(strict_types=1);

namespace Modules\Job\Models\Policies;

use Modules\Job\Models\ScheduleHistory;
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Xot\Contracts\UserContract;
=======
use Modules\Xot\Contracts\ProfileContract;
>>>>>>> e1b0bf9 (.)
=======
use Modules\Xot\Contracts\UserContract;
>>>>>>> 7d4742a (.)

class ScheduleHistoryPolicy extends JobBasePolicy
{
    /**
     * Determine whether the user can view any models.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('schedule_history.viewAny');
=======
    public function viewAny(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('schedule_history.viewAny'); /** @phpstan-ignore method.nonObject */
>>>>>>> e1b0bf9 (.)
=======
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('schedule_history.viewAny');
>>>>>>> 7d4742a (.)
    }

    /**
     * Determine whether the user can view the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function view(UserContract $user, ScheduleHistory $_schedule_history): bool
    {
        return $user->hasPermissionTo('schedule_history.view');
=======
    public function view(ProfileContract $user, ScheduleHistory $schedule_history): bool
    {
        return $user->hasPermissionTo('schedule_history.view'); /** @phpstan-ignore method.nonObject */
>>>>>>> e1b0bf9 (.)
=======
    public function view(UserContract $user, ScheduleHistory $_schedule_history): bool
    {
        return $user->hasPermissionTo('schedule_history.view');
>>>>>>> 7d4742a (.)
    }

    /**
     * Determine whether the user can create models.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('schedule_history.create');
=======
    public function create(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('schedule_history.create'); /** @phpstan-ignore method.nonObject */
>>>>>>> e1b0bf9 (.)
=======
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('schedule_history.create');
>>>>>>> 7d4742a (.)
    }

    /**
     * Determine whether the user can update the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function update(UserContract $user, ScheduleHistory $_schedule_history): bool
    {
        return $user->hasPermissionTo('schedule_history.update');
=======
    public function update(ProfileContract $user, ScheduleHistory $schedule_history): bool
    {
        return $user->hasPermissionTo('schedule_history.update'); /** @phpstan-ignore method.nonObject */
>>>>>>> e1b0bf9 (.)
=======
    public function update(UserContract $user, ScheduleHistory $_schedule_history): bool
    {
        return $user->hasPermissionTo('schedule_history.update');
>>>>>>> 7d4742a (.)
    }

    /**
     * Determine whether the user can delete the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function delete(UserContract $user, ScheduleHistory $_schedule_history): bool
    {
        return $user->hasPermissionTo('schedule_history.delete');
=======
    public function delete(ProfileContract $user, ScheduleHistory $schedule_history): bool
    {
        return $user->hasPermissionTo('schedule_history.delete'); /** @phpstan-ignore method.nonObject */
>>>>>>> e1b0bf9 (.)
=======
    public function delete(UserContract $user, ScheduleHistory $_schedule_history): bool
    {
        return $user->hasPermissionTo('schedule_history.delete');
>>>>>>> 7d4742a (.)
    }

    /**
     * Determine whether the user can restore the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function restore(UserContract $user, ScheduleHistory $_schedule_history): bool
    {
        return $user->hasPermissionTo('schedule_history.restore');
=======
    public function restore(ProfileContract $user, ScheduleHistory $schedule_history): bool
    {
        return $user->hasPermissionTo('schedule_history.restore'); /** @phpstan-ignore method.nonObject */
>>>>>>> e1b0bf9 (.)
=======
    public function restore(UserContract $user, ScheduleHistory $_schedule_history): bool
    {
        return $user->hasPermissionTo('schedule_history.restore');
>>>>>>> 7d4742a (.)
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function forceDelete(UserContract $user, ScheduleHistory $schedule_history): bool
    {
        return $user->hasPermissionTo('schedule_history.forceDelete');
=======
    public function forceDelete(ProfileContract $user, ScheduleHistory $schedule_history): bool
    {
        return $user->hasPermissionTo('schedule_history.forceDelete'); /** @phpstan-ignore method.nonObject */
>>>>>>> e1b0bf9 (.)
=======
    public function forceDelete(UserContract $user, ScheduleHistory $schedule_history): bool
    {
        return $user->hasPermissionTo('schedule_history.forceDelete');
>>>>>>> 7d4742a (.)
    }
}
