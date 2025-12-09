<?php

declare(strict_types=1);

namespace Modules\Job\Models\Policies;

use Modules\Job\Models\TaskComment;
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

class TaskCommentPolicy extends JobBasePolicy
{
    /**
     * Determine whether the user can view any models.
     */
<<<<<<< HEAD
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('task_comment.viewAny');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('task_comment.viewAny');
=======
    public function viewAny(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('task_comment.viewAny'); /** @phpstan-ignore method.nonObject */
>>>>>>> a12f125f4a (.)
=======
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('task_comment.viewAny');
>>>>>>> b93ef594b4 (.)
=======
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('task_comment.viewAny');
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
    }

    /**
     * Determine whether the user can view the model.
     */
<<<<<<< HEAD
    public function view(UserContract $user, TaskComment $_task_comment): bool
    {
        return $user->hasPermissionTo('task_comment.view');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function view(UserContract $user, TaskComment $_task_comment): bool
    {
        return $user->hasPermissionTo('task_comment.view');
=======
    public function view(ProfileContract $user, TaskComment $task_comment): bool
    {
        return $user->hasPermissionTo('task_comment.view'); /** @phpstan-ignore method.nonObject */
>>>>>>> a12f125f4a (.)
=======
    public function view(UserContract $user, TaskComment $_task_comment): bool
    {
        return $user->hasPermissionTo('task_comment.view');
>>>>>>> b93ef594b4 (.)
=======
    public function view(UserContract $user, TaskComment $task_comment): bool
    {
        return $user->hasPermissionTo('task_comment.view');
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
    }

    /**
     * Determine whether the user can create models.
     */
<<<<<<< HEAD
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('task_comment.create');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('task_comment.create');
=======
    public function create(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('task_comment.create'); /** @phpstan-ignore method.nonObject */
>>>>>>> a12f125f4a (.)
=======
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('task_comment.create');
>>>>>>> b93ef594b4 (.)
=======
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('task_comment.create');
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
    }

    /**
     * Determine whether the user can update the model.
     */
<<<<<<< HEAD
    public function update(UserContract $user, TaskComment $_task_comment): bool
    {
        return $user->hasPermissionTo('task_comment.update');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function update(UserContract $user, TaskComment $_task_comment): bool
    {
        return $user->hasPermissionTo('task_comment.update');
=======
    public function update(ProfileContract $user, TaskComment $task_comment): bool
    {
        return $user->hasPermissionTo('task_comment.update'); /** @phpstan-ignore method.nonObject */
>>>>>>> a12f125f4a (.)
=======
    public function update(UserContract $user, TaskComment $_task_comment): bool
    {
        return $user->hasPermissionTo('task_comment.update');
>>>>>>> b93ef594b4 (.)
=======
    public function update(UserContract $user, TaskComment $task_comment): bool
    {
        return $user->hasPermissionTo('task_comment.update');
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
    }

    /**
     * Determine whether the user can delete the model.
     */
<<<<<<< HEAD
    public function delete(UserContract $user, TaskComment $_task_comment): bool
    {
        return $user->hasPermissionTo('task_comment.delete');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function delete(UserContract $user, TaskComment $_task_comment): bool
    {
        return $user->hasPermissionTo('task_comment.delete');
=======
    public function delete(ProfileContract $user, TaskComment $task_comment): bool
    {
        return $user->hasPermissionTo('task_comment.delete'); /** @phpstan-ignore method.nonObject */
>>>>>>> a12f125f4a (.)
=======
    public function delete(UserContract $user, TaskComment $_task_comment): bool
    {
        return $user->hasPermissionTo('task_comment.delete');
>>>>>>> b93ef594b4 (.)
=======
    public function delete(UserContract $user, TaskComment $task_comment): bool
    {
        return $user->hasPermissionTo('task_comment.delete');
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
    }

    /**
     * Determine whether the user can restore the model.
     */
<<<<<<< HEAD
    public function restore(UserContract $user, TaskComment $_task_comment): bool
    {
        return $user->hasPermissionTo('task_comment.restore');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function restore(UserContract $user, TaskComment $_task_comment): bool
    {
        return $user->hasPermissionTo('task_comment.restore');
=======
    public function restore(ProfileContract $user, TaskComment $task_comment): bool
    {
        return $user->hasPermissionTo('task_comment.restore'); /** @phpstan-ignore method.nonObject */
>>>>>>> a12f125f4a (.)
=======
    public function restore(UserContract $user, TaskComment $_task_comment): bool
    {
        return $user->hasPermissionTo('task_comment.restore');
>>>>>>> b93ef594b4 (.)
=======
    public function restore(UserContract $user, TaskComment $task_comment): bool
    {
        return $user->hasPermissionTo('task_comment.restore');
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
    public function forceDelete(UserContract $user, TaskComment $task_comment): bool
    {
        return $user->hasPermissionTo('task_comment.forceDelete');
=======
    public function forceDelete(ProfileContract $user, TaskComment $task_comment): bool
    {
        return $user->hasPermissionTo('task_comment.forceDelete'); /** @phpstan-ignore method.nonObject */
>>>>>>> a12f125f4a (.)
=======
    public function forceDelete(UserContract $user, TaskComment $task_comment): bool
    {
        return $user->hasPermissionTo('task_comment.forceDelete');
>>>>>>> b93ef594b4 (.)
    }
}
=======
>>>>>>> 548bbd3 (.)
    public function forceDelete(UserContract $user, TaskComment $task_comment): bool
    {
        return $user->hasPermissionTo('task_comment.forceDelete');
    }
}
<<<<<<< HEAD
=======
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
