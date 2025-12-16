<?php

declare(strict_types=1);

namespace Modules\Job\Models\Policies;

use Modules\Job\Models\JobsWaiting;
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

class JobsWaitingPolicy extends JobBasePolicy
{
    /**
     * Determine whether the user can view any models.
     */
<<<<<<< HEAD
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('jobs_waiting.viewAny');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('jobs_waiting.viewAny');
=======
    public function viewAny(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('jobs_waiting.viewAny'); /** @phpstan-ignore method.nonObject */
>>>>>>> a12f125f4a (.)
=======
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('jobs_waiting.viewAny');
>>>>>>> b93ef594b4 (.)
=======
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('jobs_waiting.viewAny');
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
    }

    /**
     * Determine whether the user can view the model.
     */
<<<<<<< HEAD
    public function view(UserContract $user, JobsWaiting $_jobs_waiting): bool
    {
        return $user->hasPermissionTo('jobs_waiting.view');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function view(UserContract $user, JobsWaiting $_jobs_waiting): bool
    {
        return $user->hasPermissionTo('jobs_waiting.view');
=======
    public function view(ProfileContract $user, JobsWaiting $jobs_waiting): bool
    {
        return $user->hasPermissionTo('jobs_waiting.view'); /** @phpstan-ignore method.nonObject */
>>>>>>> a12f125f4a (.)
=======
    public function view(UserContract $user, JobsWaiting $_jobs_waiting): bool
    {
        return $user->hasPermissionTo('jobs_waiting.view');
>>>>>>> b93ef594b4 (.)
=======
    public function view(UserContract $user, JobsWaiting $jobs_waiting): bool
    {
        return $user->hasPermissionTo('jobs_waiting.view');
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
    }

    /**
     * Determine whether the user can create models.
     */
<<<<<<< HEAD
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('jobs_waiting.create');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('jobs_waiting.create');
=======
    public function create(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('jobs_waiting.create'); /** @phpstan-ignore method.nonObject */
>>>>>>> a12f125f4a (.)
=======
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('jobs_waiting.create');
>>>>>>> b93ef594b4 (.)
=======
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('jobs_waiting.create');
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
    }

    /**
     * Determine whether the user can update the model.
     */
<<<<<<< HEAD
    public function update(UserContract $user, JobsWaiting $_jobs_waiting): bool
    {
        return $user->hasPermissionTo('jobs_waiting.update');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function update(UserContract $user, JobsWaiting $_jobs_waiting): bool
    {
        return $user->hasPermissionTo('jobs_waiting.update');
=======
    public function update(ProfileContract $user, JobsWaiting $jobs_waiting): bool
    {
        return $user->hasPermissionTo('jobs_waiting.update'); /** @phpstan-ignore method.nonObject */
>>>>>>> a12f125f4a (.)
=======
    public function update(UserContract $user, JobsWaiting $_jobs_waiting): bool
    {
        return $user->hasPermissionTo('jobs_waiting.update');
>>>>>>> b93ef594b4 (.)
=======
    public function update(UserContract $user, JobsWaiting $jobs_waiting): bool
    {
        return $user->hasPermissionTo('jobs_waiting.update');
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
    }

    /**
     * Determine whether the user can delete the model.
     */
<<<<<<< HEAD
    public function delete(UserContract $user, JobsWaiting $_jobs_waiting): bool
    {
        return $user->hasPermissionTo('jobs_waiting.delete');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function delete(UserContract $user, JobsWaiting $_jobs_waiting): bool
    {
        return $user->hasPermissionTo('jobs_waiting.delete');
=======
    public function delete(ProfileContract $user, JobsWaiting $jobs_waiting): bool
    {
        return $user->hasPermissionTo('jobs_waiting.delete'); /** @phpstan-ignore method.nonObject */
>>>>>>> a12f125f4a (.)
=======
    public function delete(UserContract $user, JobsWaiting $_jobs_waiting): bool
    {
        return $user->hasPermissionTo('jobs_waiting.delete');
>>>>>>> b93ef594b4 (.)
=======
    public function delete(UserContract $user, JobsWaiting $jobs_waiting): bool
    {
        return $user->hasPermissionTo('jobs_waiting.delete');
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
    }

    /**
     * Determine whether the user can restore the model.
     */
<<<<<<< HEAD
    public function restore(UserContract $user, JobsWaiting $_jobs_waiting): bool
    {
        return $user->hasPermissionTo('jobs_waiting.restore');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function restore(UserContract $user, JobsWaiting $_jobs_waiting): bool
    {
        return $user->hasPermissionTo('jobs_waiting.restore');
=======
    public function restore(ProfileContract $user, JobsWaiting $jobs_waiting): bool
    {
        return $user->hasPermissionTo('jobs_waiting.restore'); /** @phpstan-ignore method.nonObject */
>>>>>>> a12f125f4a (.)
=======
    public function restore(UserContract $user, JobsWaiting $_jobs_waiting): bool
    {
        return $user->hasPermissionTo('jobs_waiting.restore');
>>>>>>> b93ef594b4 (.)
=======
    public function restore(UserContract $user, JobsWaiting $jobs_waiting): bool
    {
        return $user->hasPermissionTo('jobs_waiting.restore');
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function forceDelete(UserContract $user, JobsWaiting $jobs_waiting): bool
    {
        return $user->hasPermissionTo('jobs_waiting.forceDelete');
=======
    public function forceDelete(ProfileContract $user, JobsWaiting $jobs_waiting): bool
    {
        return $user->hasPermissionTo('jobs_waiting.forceDelete'); /** @phpstan-ignore method.nonObject */
>>>>>>> a12f125f4a (.)
=======
    public function forceDelete(UserContract $user, JobsWaiting $jobs_waiting): bool
    {
        return $user->hasPermissionTo('jobs_waiting.forceDelete');
>>>>>>> b93ef594b4 (.)
    }
}
=======
>>>>>>> 548bbd3 (.)
    public function forceDelete(UserContract $user, JobsWaiting $jobs_waiting): bool
    {
        return $user->hasPermissionTo('jobs_waiting.forceDelete');
    }
}
<<<<<<< HEAD
=======
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
