<?php

declare(strict_types=1);

namespace Modules\Job\Models\Policies;

use Modules\Job\Models\Schedule;
<<<<<<< HEAD
use Modules\Xot\Contracts\UserContract;
=======
<<<<<<< HEAD
use Modules\Xot\Contracts\UserContract;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Xot\Contracts\UserContract;
=======
use Modules\Xot\Contracts\ProfileContract;
>>>>>>> a12f125f4a (.)
=======
use Modules\Xot\Contracts\UserContract;
>>>>>>> b93ef594b4 (.)
=======
use Modules\Xot\Contracts\UserContract;
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
>>>>>>> laraxot/develop

class SchedulePolicy extends JobBasePolicy
{
    /**
     * Determine whether the user can view any models.
     */
<<<<<<< HEAD
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('schedule.viewAny');
=======
<<<<<<< HEAD
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('schedule.viewAny');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('schedule.viewAny');
=======
    public function viewAny(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('schedule.viewAny'); /** @phpstan-ignore method.nonObject */
>>>>>>> a12f125f4a (.)
=======
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('schedule.viewAny');
>>>>>>> b93ef594b4 (.)
=======
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('schedule.viewAny');
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
>>>>>>> laraxot/develop
    }

    /**
     * Determine whether the user can view the model.
     */
<<<<<<< HEAD
    public function view(UserContract $user, Schedule $_schedule): bool
    {
        return $user->hasPermissionTo('schedule.view');
=======
<<<<<<< HEAD
    public function view(UserContract $user, Schedule $_schedule): bool
    {
        return $user->hasPermissionTo('schedule.view');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function view(UserContract $user, Schedule $_schedule): bool
    {
        return $user->hasPermissionTo('schedule.view');
=======
    public function view(ProfileContract $user, Schedule $schedule): bool
    {
        return $user->hasPermissionTo('schedule.view'); /** @phpstan-ignore method.nonObject */
>>>>>>> a12f125f4a (.)
=======
    public function view(UserContract $user, Schedule $_schedule): bool
    {
        return $user->hasPermissionTo('schedule.view');
>>>>>>> b93ef594b4 (.)
=======
    public function view(UserContract $user, Schedule $schedule): bool
    {
        return $user->hasPermissionTo('schedule.view');
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
>>>>>>> laraxot/develop
    }

    /**
     * Determine whether the user can create models.
     */
<<<<<<< HEAD
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('schedule.create');
=======
<<<<<<< HEAD
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('schedule.create');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('schedule.create');
=======
    public function create(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('schedule.create'); /** @phpstan-ignore method.nonObject */
>>>>>>> a12f125f4a (.)
=======
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('schedule.create');
>>>>>>> b93ef594b4 (.)
=======
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('schedule.create');
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
>>>>>>> laraxot/develop
    }

    /**
     * Determine whether the user can update the model.
     */
<<<<<<< HEAD
    public function update(UserContract $user, Schedule $_schedule): bool
    {
        return $user->hasPermissionTo('schedule.update');
=======
<<<<<<< HEAD
    public function update(UserContract $user, Schedule $_schedule): bool
    {
        return $user->hasPermissionTo('schedule.update');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function update(UserContract $user, Schedule $_schedule): bool
    {
        return $user->hasPermissionTo('schedule.update');
=======
    public function update(ProfileContract $user, Schedule $schedule): bool
    {
        return $user->hasPermissionTo('schedule.update'); /** @phpstan-ignore method.nonObject */
>>>>>>> a12f125f4a (.)
=======
    public function update(UserContract $user, Schedule $_schedule): bool
    {
        return $user->hasPermissionTo('schedule.update');
>>>>>>> b93ef594b4 (.)
=======
    public function update(UserContract $user, Schedule $schedule): bool
    {
        return $user->hasPermissionTo('schedule.update');
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
>>>>>>> laraxot/develop
    }

    /**
     * Determine whether the user can delete the model.
     */
<<<<<<< HEAD
    public function delete(UserContract $user, Schedule $_schedule): bool
    {
        return $user->hasPermissionTo('schedule.delete');
=======
<<<<<<< HEAD
    public function delete(UserContract $user, Schedule $_schedule): bool
    {
        return $user->hasPermissionTo('schedule.delete');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function delete(UserContract $user, Schedule $_schedule): bool
    {
        return $user->hasPermissionTo('schedule.delete');
=======
    public function delete(ProfileContract $user, Schedule $schedule): bool
    {
        return $user->hasPermissionTo('schedule.delete'); /** @phpstan-ignore method.nonObject */
>>>>>>> a12f125f4a (.)
=======
    public function delete(UserContract $user, Schedule $_schedule): bool
    {
        return $user->hasPermissionTo('schedule.delete');
>>>>>>> b93ef594b4 (.)
=======
    public function delete(UserContract $user, Schedule $schedule): bool
    {
        return $user->hasPermissionTo('schedule.delete');
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
>>>>>>> laraxot/develop
    }

    /**
     * Determine whether the user can restore the model.
     */
<<<<<<< HEAD
    public function restore(UserContract $user, Schedule $_schedule): bool
    {
        return $user->hasPermissionTo('schedule.restore');
=======
<<<<<<< HEAD
    public function restore(UserContract $user, Schedule $_schedule): bool
    {
        return $user->hasPermissionTo('schedule.restore');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function restore(UserContract $user, Schedule $_schedule): bool
    {
        return $user->hasPermissionTo('schedule.restore');
=======
    public function restore(ProfileContract $user, Schedule $schedule): bool
    {
        return $user->hasPermissionTo('schedule.restore'); /** @phpstan-ignore method.nonObject */
>>>>>>> a12f125f4a (.)
=======
    public function restore(UserContract $user, Schedule $_schedule): bool
    {
        return $user->hasPermissionTo('schedule.restore');
>>>>>>> b93ef594b4 (.)
=======
    public function restore(UserContract $user, Schedule $schedule): bool
    {
        return $user->hasPermissionTo('schedule.restore');
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
>>>>>>> laraxot/develop
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function forceDelete(UserContract $user, Schedule $schedule): bool
    {
        return $user->hasPermissionTo('schedule.forceDelete');
=======
    public function forceDelete(ProfileContract $user, Schedule $schedule): bool
    {
        return $user->hasPermissionTo('schedule.forceDelete'); /** @phpstan-ignore method.nonObject */
>>>>>>> a12f125f4a (.)
=======
    public function forceDelete(UserContract $user, Schedule $schedule): bool
    {
        return $user->hasPermissionTo('schedule.forceDelete');
>>>>>>> b93ef594b4 (.)
    }
}
=======
>>>>>>> 548bbd3 (.)
>>>>>>> laraxot/develop
    public function forceDelete(UserContract $user, Schedule $schedule): bool
    {
        return $user->hasPermissionTo('schedule.forceDelete');
    }
}
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
>>>>>>> laraxot/develop
