<?php

declare(strict_types=1);

namespace Modules\Job\Models\Policies;

use Modules\Job\Models\JobManager;
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Xot\Contracts\UserContract;
=======
use Modules\Xot\Contracts\ProfileContract;
>>>>>>> e1b0bf9 (.)
=======
use Modules\Xot\Contracts\UserContract;
>>>>>>> 7d4742a (.)

class JobManagerPolicy extends JobBasePolicy
{
    /**
     * Determine whether the user can view any models.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('job_manager.viewAny');
=======
    public function viewAny(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('job_manager.viewAny'); /** @phpstan-ignore method.nonObject */
>>>>>>> e1b0bf9 (.)
=======
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('job_manager.viewAny');
>>>>>>> 7d4742a (.)
    }

    /**
     * Determine whether the user can view the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function view(UserContract $user, JobManager $_job_manager): bool
    {
        return $user->hasPermissionTo('job_manager.view');
=======
    public function view(ProfileContract $user, JobManager $job_manager): bool
    {
        return $user->hasPermissionTo('job_manager.view'); /** @phpstan-ignore method.nonObject */
>>>>>>> e1b0bf9 (.)
=======
    public function view(UserContract $user, JobManager $_job_manager): bool
    {
        return $user->hasPermissionTo('job_manager.view');
>>>>>>> 7d4742a (.)
    }

    /**
     * Determine whether the user can create models.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('job_manager.create');
=======
    public function create(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('job_manager.create'); /** @phpstan-ignore method.nonObject */
>>>>>>> e1b0bf9 (.)
=======
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('job_manager.create');
>>>>>>> 7d4742a (.)
    }

    /**
     * Determine whether the user can update the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function update(UserContract $user, JobManager $_job_manager): bool
    {
        return $user->hasPermissionTo('job_manager.update');
=======
    public function update(ProfileContract $user, JobManager $job_manager): bool
    {
        return $user->hasPermissionTo('job_manager.update'); /** @phpstan-ignore method.nonObject */
>>>>>>> e1b0bf9 (.)
=======
    public function update(UserContract $user, JobManager $_job_manager): bool
    {
        return $user->hasPermissionTo('job_manager.update');
>>>>>>> 7d4742a (.)
    }

    /**
     * Determine whether the user can delete the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function delete(UserContract $user, JobManager $_job_manager): bool
    {
        return $user->hasPermissionTo('job_manager.delete');
=======
    public function delete(ProfileContract $user, JobManager $job_manager): bool
    {
        return $user->hasPermissionTo('job_manager.delete'); /** @phpstan-ignore method.nonObject */
>>>>>>> e1b0bf9 (.)
=======
    public function delete(UserContract $user, JobManager $_job_manager): bool
    {
        return $user->hasPermissionTo('job_manager.delete');
>>>>>>> 7d4742a (.)
    }

    /**
     * Determine whether the user can restore the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function restore(UserContract $user, JobManager $_job_manager): bool
    {
        return $user->hasPermissionTo('job_manager.restore');
=======
    public function restore(ProfileContract $user, JobManager $job_manager): bool
    {
        return $user->hasPermissionTo('job_manager.restore'); /** @phpstan-ignore method.nonObject */
>>>>>>> e1b0bf9 (.)
=======
    public function restore(UserContract $user, JobManager $_job_manager): bool
    {
        return $user->hasPermissionTo('job_manager.restore');
>>>>>>> 7d4742a (.)
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function forceDelete(UserContract $user, JobManager $job_manager): bool
    {
        return $user->hasPermissionTo('job_manager.forceDelete');
=======
    public function forceDelete(ProfileContract $user, JobManager $job_manager): bool
    {
        return $user->hasPermissionTo('job_manager.forceDelete'); /** @phpstan-ignore method.nonObject */
>>>>>>> e1b0bf9 (.)
=======
    public function forceDelete(UserContract $user, JobManager $job_manager): bool
    {
        return $user->hasPermissionTo('job_manager.forceDelete');
>>>>>>> 7d4742a (.)
    }
}
