<?php

declare(strict_types=1);

namespace Modules\Job\Models\Policies;

use Modules\Job\Models\JobManager;
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

class JobManagerPolicy extends JobBasePolicy
{
    /**
     * Determine whether the user can view any models.
     */
<<<<<<< HEAD
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('job_manager.viewAny');
=======
<<<<<<< HEAD
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('job_manager.viewAny');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('job_manager.viewAny');
=======
    public function viewAny(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('job_manager.viewAny'); /** @phpstan-ignore method.nonObject */
>>>>>>> a12f125f4a (.)
=======
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('job_manager.viewAny');
>>>>>>> b93ef594b4 (.)
=======
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('job_manager.viewAny');
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
>>>>>>> laraxot/develop
    }

    /**
     * Determine whether the user can view the model.
     */
<<<<<<< HEAD
    public function view(UserContract $user, JobManager $_job_manager): bool
    {
        return $user->hasPermissionTo('job_manager.view');
=======
<<<<<<< HEAD
    public function view(UserContract $user, JobManager $_job_manager): bool
    {
        return $user->hasPermissionTo('job_manager.view');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function view(UserContract $user, JobManager $_job_manager): bool
    {
        return $user->hasPermissionTo('job_manager.view');
=======
    public function view(ProfileContract $user, JobManager $job_manager): bool
    {
        return $user->hasPermissionTo('job_manager.view'); /** @phpstan-ignore method.nonObject */
>>>>>>> a12f125f4a (.)
=======
    public function view(UserContract $user, JobManager $_job_manager): bool
    {
        return $user->hasPermissionTo('job_manager.view');
>>>>>>> b93ef594b4 (.)
=======
    public function view(UserContract $user, JobManager $job_manager): bool
    {
        return $user->hasPermissionTo('job_manager.view');
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
        return $user->hasPermissionTo('job_manager.create');
=======
<<<<<<< HEAD
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('job_manager.create');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('job_manager.create');
=======
    public function create(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('job_manager.create'); /** @phpstan-ignore method.nonObject */
>>>>>>> a12f125f4a (.)
=======
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('job_manager.create');
>>>>>>> b93ef594b4 (.)
=======
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('job_manager.create');
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
>>>>>>> laraxot/develop
    }

    /**
     * Determine whether the user can update the model.
     */
<<<<<<< HEAD
    public function update(UserContract $user, JobManager $_job_manager): bool
    {
        return $user->hasPermissionTo('job_manager.update');
=======
<<<<<<< HEAD
    public function update(UserContract $user, JobManager $_job_manager): bool
    {
        return $user->hasPermissionTo('job_manager.update');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function update(UserContract $user, JobManager $_job_manager): bool
    {
        return $user->hasPermissionTo('job_manager.update');
=======
    public function update(ProfileContract $user, JobManager $job_manager): bool
    {
        return $user->hasPermissionTo('job_manager.update'); /** @phpstan-ignore method.nonObject */
>>>>>>> a12f125f4a (.)
=======
    public function update(UserContract $user, JobManager $_job_manager): bool
    {
        return $user->hasPermissionTo('job_manager.update');
>>>>>>> b93ef594b4 (.)
=======
    public function update(UserContract $user, JobManager $job_manager): bool
    {
        return $user->hasPermissionTo('job_manager.update');
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
>>>>>>> laraxot/develop
    }

    /**
     * Determine whether the user can delete the model.
     */
<<<<<<< HEAD
    public function delete(UserContract $user, JobManager $_job_manager): bool
    {
        return $user->hasPermissionTo('job_manager.delete');
=======
<<<<<<< HEAD
    public function delete(UserContract $user, JobManager $_job_manager): bool
    {
        return $user->hasPermissionTo('job_manager.delete');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function delete(UserContract $user, JobManager $_job_manager): bool
    {
        return $user->hasPermissionTo('job_manager.delete');
=======
    public function delete(ProfileContract $user, JobManager $job_manager): bool
    {
        return $user->hasPermissionTo('job_manager.delete'); /** @phpstan-ignore method.nonObject */
>>>>>>> a12f125f4a (.)
=======
    public function delete(UserContract $user, JobManager $_job_manager): bool
    {
        return $user->hasPermissionTo('job_manager.delete');
>>>>>>> b93ef594b4 (.)
=======
    public function delete(UserContract $user, JobManager $job_manager): bool
    {
        return $user->hasPermissionTo('job_manager.delete');
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
>>>>>>> laraxot/develop
    }

    /**
     * Determine whether the user can restore the model.
     */
<<<<<<< HEAD
    public function restore(UserContract $user, JobManager $_job_manager): bool
    {
        return $user->hasPermissionTo('job_manager.restore');
=======
<<<<<<< HEAD
    public function restore(UserContract $user, JobManager $_job_manager): bool
    {
        return $user->hasPermissionTo('job_manager.restore');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function restore(UserContract $user, JobManager $_job_manager): bool
    {
        return $user->hasPermissionTo('job_manager.restore');
=======
    public function restore(ProfileContract $user, JobManager $job_manager): bool
    {
        return $user->hasPermissionTo('job_manager.restore'); /** @phpstan-ignore method.nonObject */
>>>>>>> a12f125f4a (.)
=======
    public function restore(UserContract $user, JobManager $_job_manager): bool
    {
        return $user->hasPermissionTo('job_manager.restore');
>>>>>>> b93ef594b4 (.)
=======
    public function restore(UserContract $user, JobManager $job_manager): bool
    {
        return $user->hasPermissionTo('job_manager.restore');
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
    public function forceDelete(UserContract $user, JobManager $job_manager): bool
    {
        return $user->hasPermissionTo('job_manager.forceDelete');
=======
    public function forceDelete(ProfileContract $user, JobManager $job_manager): bool
    {
        return $user->hasPermissionTo('job_manager.forceDelete'); /** @phpstan-ignore method.nonObject */
>>>>>>> a12f125f4a (.)
=======
    public function forceDelete(UserContract $user, JobManager $job_manager): bool
    {
        return $user->hasPermissionTo('job_manager.forceDelete');
>>>>>>> b93ef594b4 (.)
    }
}
=======
>>>>>>> 548bbd3 (.)
>>>>>>> laraxot/develop
    public function forceDelete(UserContract $user, JobManager $job_manager): bool
    {
        return $user->hasPermissionTo('job_manager.forceDelete');
    }
}
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
>>>>>>> laraxot/develop
