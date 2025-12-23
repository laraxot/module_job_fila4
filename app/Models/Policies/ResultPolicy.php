<?php

declare(strict_types=1);

namespace Modules\Job\Models\Policies;

use Modules\Job\Models\Result;
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

class ResultPolicy extends JobBasePolicy
{
    /**
     * Determine whether the user can view any models.
     */
<<<<<<< HEAD
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('result.viewAny');
=======
<<<<<<< HEAD
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('result.viewAny');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('result.viewAny');
=======
    public function viewAny(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('result.viewAny'); /** @phpstan-ignore method.nonObject */
>>>>>>> a12f125f4a (.)
=======
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('result.viewAny');
>>>>>>> b93ef594b4 (.)
=======
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('result.viewAny');
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
>>>>>>> laraxot/develop
    }

    /**
     * Determine whether the user can view the model.
     */
<<<<<<< HEAD
    public function view(UserContract $user, Result $_result): bool
    {
        return $user->hasPermissionTo('result.view');
=======
<<<<<<< HEAD
    public function view(UserContract $user, Result $_result): bool
    {
        return $user->hasPermissionTo('result.view');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function view(UserContract $user, Result $_result): bool
    {
        return $user->hasPermissionTo('result.view');
=======
    public function view(ProfileContract $user, Result $result): bool
    {
        return $user->hasPermissionTo('result.view'); /** @phpstan-ignore method.nonObject */
>>>>>>> a12f125f4a (.)
=======
    public function view(UserContract $user, Result $_result): bool
    {
        return $user->hasPermissionTo('result.view');
>>>>>>> b93ef594b4 (.)
=======
    public function view(UserContract $user, Result $result): bool
    {
        return $user->hasPermissionTo('result.view');
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
        return $user->hasPermissionTo('result.create');
=======
<<<<<<< HEAD
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('result.create');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('result.create');
=======
    public function create(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('result.create'); /** @phpstan-ignore method.nonObject */
>>>>>>> a12f125f4a (.)
=======
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('result.create');
>>>>>>> b93ef594b4 (.)
=======
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('result.create');
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
>>>>>>> laraxot/develop
    }

    /**
     * Determine whether the user can update the model.
     */
<<<<<<< HEAD
    public function update(UserContract $user, Result $_result): bool
    {
        return $user->hasPermissionTo('result.update');
=======
<<<<<<< HEAD
    public function update(UserContract $user, Result $_result): bool
    {
        return $user->hasPermissionTo('result.update');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function update(UserContract $user, Result $_result): bool
    {
        return $user->hasPermissionTo('result.update');
=======
    public function update(ProfileContract $user, Result $result): bool
    {
        return $user->hasPermissionTo('result.update'); /** @phpstan-ignore method.nonObject */
>>>>>>> a12f125f4a (.)
=======
    public function update(UserContract $user, Result $_result): bool
    {
        return $user->hasPermissionTo('result.update');
>>>>>>> b93ef594b4 (.)
=======
    public function update(UserContract $user, Result $result): bool
    {
        return $user->hasPermissionTo('result.update');
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
>>>>>>> laraxot/develop
    }

    /**
     * Determine whether the user can delete the model.
     */
<<<<<<< HEAD
    public function delete(UserContract $user, Result $_result): bool
    {
        return $user->hasPermissionTo('result.delete');
=======
<<<<<<< HEAD
    public function delete(UserContract $user, Result $_result): bool
    {
        return $user->hasPermissionTo('result.delete');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function delete(UserContract $user, Result $_result): bool
    {
        return $user->hasPermissionTo('result.delete');
=======
    public function delete(ProfileContract $user, Result $result): bool
    {
        return $user->hasPermissionTo('result.delete'); /** @phpstan-ignore method.nonObject */
>>>>>>> a12f125f4a (.)
=======
    public function delete(UserContract $user, Result $_result): bool
    {
        return $user->hasPermissionTo('result.delete');
>>>>>>> b93ef594b4 (.)
=======
    public function delete(UserContract $user, Result $result): bool
    {
        return $user->hasPermissionTo('result.delete');
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
>>>>>>> laraxot/develop
    }

    /**
     * Determine whether the user can restore the model.
     */
<<<<<<< HEAD
    public function restore(UserContract $user, Result $_result): bool
    {
        return $user->hasPermissionTo('result.restore');
=======
<<<<<<< HEAD
    public function restore(UserContract $user, Result $_result): bool
    {
        return $user->hasPermissionTo('result.restore');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function restore(UserContract $user, Result $_result): bool
    {
        return $user->hasPermissionTo('result.restore');
=======
    public function restore(ProfileContract $user, Result $result): bool
    {
        return $user->hasPermissionTo('result.restore'); /** @phpstan-ignore method.nonObject */
>>>>>>> a12f125f4a (.)
=======
    public function restore(UserContract $user, Result $_result): bool
    {
        return $user->hasPermissionTo('result.restore');
>>>>>>> b93ef594b4 (.)
=======
    public function restore(UserContract $user, Result $result): bool
    {
        return $user->hasPermissionTo('result.restore');
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
    public function forceDelete(UserContract $user, Result $result): bool
    {
        return $user->hasPermissionTo('result.forceDelete');
=======
    public function forceDelete(ProfileContract $user, Result $result): bool
    {
        return $user->hasPermissionTo('result.forceDelete'); /** @phpstan-ignore method.nonObject */
>>>>>>> a12f125f4a (.)
=======
    public function forceDelete(UserContract $user, Result $result): bool
    {
        return $user->hasPermissionTo('result.forceDelete');
>>>>>>> b93ef594b4 (.)
    }
}
=======
>>>>>>> 548bbd3 (.)
>>>>>>> laraxot/develop
    public function forceDelete(UserContract $user, Result $result): bool
    {
        return $user->hasPermissionTo('result.forceDelete');
    }
}
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
>>>>>>> laraxot/develop
