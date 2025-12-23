<?php

declare(strict_types=1);

namespace Modules\Job\Models\Policies;

use Modules\Job\Models\Task;
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

class TaskPolicy extends JobBasePolicy
{
    /**
     * Determine whether the user can view any models.
     */
<<<<<<< HEAD
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('task.viewAny');
=======
<<<<<<< HEAD
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('task.viewAny');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('task.viewAny');
=======
    public function viewAny(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('task.viewAny'); /** @phpstan-ignore method.nonObject */
>>>>>>> a12f125f4a (.)
=======
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('task.viewAny');
>>>>>>> b93ef594b4 (.)
=======
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('task.viewAny');
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
>>>>>>> laraxot/develop
    }

    /**
     * Determine whether the user can view the model.
     */
<<<<<<< HEAD
    public function view(UserContract $user, Task $_task): bool
    {
        return $user->hasPermissionTo('task.view');
=======
<<<<<<< HEAD
    public function view(UserContract $user, Task $_task): bool
    {
        return $user->hasPermissionTo('task.view');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function view(UserContract $user, Task $_task): bool
    {
        return $user->hasPermissionTo('task.view');
=======
    public function view(ProfileContract $user, Task $task): bool
    {
        return $user->hasPermissionTo('task.view'); /** @phpstan-ignore method.nonObject */
>>>>>>> a12f125f4a (.)
=======
    public function view(UserContract $user, Task $_task): bool
    {
        return $user->hasPermissionTo('task.view');
>>>>>>> b93ef594b4 (.)
=======
    public function view(UserContract $user, Task $task): bool
    {
        return $user->hasPermissionTo('task.view');
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
        return $user->hasPermissionTo('task.create');
=======
<<<<<<< HEAD
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('task.create');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('task.create');
=======
    public function create(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('task.create'); /** @phpstan-ignore method.nonObject */
>>>>>>> a12f125f4a (.)
=======
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('task.create');
>>>>>>> b93ef594b4 (.)
=======
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('task.create');
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
>>>>>>> laraxot/develop
    }

    /**
     * Determine whether the user can update the model.
     */
<<<<<<< HEAD
    public function update(UserContract $user, Task $_task): bool
    {
        return $user->hasPermissionTo('task.update');
=======
<<<<<<< HEAD
    public function update(UserContract $user, Task $_task): bool
    {
        return $user->hasPermissionTo('task.update');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function update(UserContract $user, Task $_task): bool
    {
        return $user->hasPermissionTo('task.update');
=======
    public function update(ProfileContract $user, Task $task): bool
    {
        return $user->hasPermissionTo('task.update'); /** @phpstan-ignore method.nonObject */
>>>>>>> a12f125f4a (.)
=======
    public function update(UserContract $user, Task $_task): bool
    {
        return $user->hasPermissionTo('task.update');
>>>>>>> b93ef594b4 (.)
=======
    public function update(UserContract $user, Task $task): bool
    {
        return $user->hasPermissionTo('task.update');
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
>>>>>>> laraxot/develop
    }

    /**
     * Determine whether the user can delete the model.
     */
<<<<<<< HEAD
    public function delete(UserContract $user, Task $_task): bool
    {
        return $user->hasPermissionTo('task.delete');
=======
<<<<<<< HEAD
    public function delete(UserContract $user, Task $_task): bool
    {
        return $user->hasPermissionTo('task.delete');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function delete(UserContract $user, Task $_task): bool
    {
        return $user->hasPermissionTo('task.delete');
=======
    public function delete(ProfileContract $user, Task $task): bool
    {
        return $user->hasPermissionTo('task.delete'); /** @phpstan-ignore method.nonObject */
>>>>>>> a12f125f4a (.)
=======
    public function delete(UserContract $user, Task $_task): bool
    {
        return $user->hasPermissionTo('task.delete');
>>>>>>> b93ef594b4 (.)
=======
    public function delete(UserContract $user, Task $task): bool
    {
        return $user->hasPermissionTo('task.delete');
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
>>>>>>> laraxot/develop
    }

    /**
     * Determine whether the user can restore the model.
     */
<<<<<<< HEAD
    public function restore(UserContract $user, Task $_task): bool
    {
        return $user->hasPermissionTo('task.restore');
=======
<<<<<<< HEAD
    public function restore(UserContract $user, Task $_task): bool
    {
        return $user->hasPermissionTo('task.restore');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function restore(UserContract $user, Task $_task): bool
    {
        return $user->hasPermissionTo('task.restore');
=======
    public function restore(ProfileContract $user, Task $task): bool
    {
        return $user->hasPermissionTo('task.restore'); /** @phpstan-ignore method.nonObject */
>>>>>>> a12f125f4a (.)
=======
    public function restore(UserContract $user, Task $_task): bool
    {
        return $user->hasPermissionTo('task.restore');
>>>>>>> b93ef594b4 (.)
=======
    public function restore(UserContract $user, Task $task): bool
    {
        return $user->hasPermissionTo('task.restore');
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
    public function forceDelete(UserContract $user, Task $task): bool
    {
        return $user->hasPermissionTo('task.forceDelete');
=======
    public function forceDelete(ProfileContract $user, Task $task): bool
    {
        return $user->hasPermissionTo('task.forceDelete'); /** @phpstan-ignore method.nonObject */
>>>>>>> a12f125f4a (.)
=======
    public function forceDelete(UserContract $user, Task $task): bool
    {
        return $user->hasPermissionTo('task.forceDelete');
>>>>>>> b93ef594b4 (.)
    }
}
=======
>>>>>>> 548bbd3 (.)
>>>>>>> laraxot/develop
    public function forceDelete(UserContract $user, Task $task): bool
    {
        return $user->hasPermissionTo('task.forceDelete');
    }
}
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
>>>>>>> laraxot/develop
