<?php

declare(strict_types=1);

namespace Modules\Job\Models\Policies;

use Modules\Job\Models\Parameter;
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

class ParameterPolicy extends JobBasePolicy
{
    /**
     * Determine whether the user can view any models.
     */
<<<<<<< HEAD
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('parameter.viewAny');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('parameter.viewAny');
=======
    public function viewAny(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('parameter.viewAny'); /** @phpstan-ignore method.nonObject */
>>>>>>> a12f125f4a (.)
=======
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('parameter.viewAny');
>>>>>>> b93ef594b4 (.)
=======
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('parameter.viewAny');
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
    }

    /**
     * Determine whether the user can view the model.
     */
<<<<<<< HEAD
    public function view(UserContract $user, Parameter $_parameter): bool
    {
        return $user->hasPermissionTo('parameter.view');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function view(UserContract $user, Parameter $_parameter): bool
    {
        return $user->hasPermissionTo('parameter.view');
=======
    public function view(ProfileContract $user, Parameter $parameter): bool
    {
        return $user->hasPermissionTo('parameter.view'); /** @phpstan-ignore method.nonObject */
>>>>>>> a12f125f4a (.)
=======
    public function view(UserContract $user, Parameter $_parameter): bool
    {
        return $user->hasPermissionTo('parameter.view');
>>>>>>> b93ef594b4 (.)
=======
    public function view(UserContract $user, Parameter $parameter): bool
    {
        return $user->hasPermissionTo('parameter.view');
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
    }

    /**
     * Determine whether the user can create models.
     */
<<<<<<< HEAD
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('parameter.create');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('parameter.create');
=======
    public function create(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('parameter.create'); /** @phpstan-ignore method.nonObject */
>>>>>>> a12f125f4a (.)
=======
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('parameter.create');
>>>>>>> b93ef594b4 (.)
=======
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('parameter.create');
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
    }

    /**
     * Determine whether the user can update the model.
     */
<<<<<<< HEAD
    public function update(UserContract $user, Parameter $_parameter): bool
    {
        return $user->hasPermissionTo('parameter.update');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function update(UserContract $user, Parameter $_parameter): bool
    {
        return $user->hasPermissionTo('parameter.update');
=======
    public function update(ProfileContract $user, Parameter $parameter): bool
    {
        return $user->hasPermissionTo('parameter.update'); /** @phpstan-ignore method.nonObject */
>>>>>>> a12f125f4a (.)
=======
    public function update(UserContract $user, Parameter $_parameter): bool
    {
        return $user->hasPermissionTo('parameter.update');
>>>>>>> b93ef594b4 (.)
=======
    public function update(UserContract $user, Parameter $parameter): bool
    {
        return $user->hasPermissionTo('parameter.update');
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
    }

    /**
     * Determine whether the user can delete the model.
     */
<<<<<<< HEAD
    public function delete(UserContract $user, Parameter $_parameter): bool
    {
        return $user->hasPermissionTo('parameter.delete');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function delete(UserContract $user, Parameter $_parameter): bool
    {
        return $user->hasPermissionTo('parameter.delete');
=======
    public function delete(ProfileContract $user, Parameter $parameter): bool
    {
        return $user->hasPermissionTo('parameter.delete'); /** @phpstan-ignore method.nonObject */
>>>>>>> a12f125f4a (.)
=======
    public function delete(UserContract $user, Parameter $_parameter): bool
    {
        return $user->hasPermissionTo('parameter.delete');
>>>>>>> b93ef594b4 (.)
=======
    public function delete(UserContract $user, Parameter $parameter): bool
    {
        return $user->hasPermissionTo('parameter.delete');
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
    }

    /**
     * Determine whether the user can restore the model.
     */
<<<<<<< HEAD
    public function restore(UserContract $user, Parameter $_parameter): bool
    {
        return $user->hasPermissionTo('parameter.restore');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function restore(UserContract $user, Parameter $_parameter): bool
    {
        return $user->hasPermissionTo('parameter.restore');
=======
    public function restore(ProfileContract $user, Parameter $parameter): bool
    {
        return $user->hasPermissionTo('parameter.restore'); /** @phpstan-ignore method.nonObject */
>>>>>>> a12f125f4a (.)
=======
    public function restore(UserContract $user, Parameter $_parameter): bool
    {
        return $user->hasPermissionTo('parameter.restore');
>>>>>>> b93ef594b4 (.)
=======
    public function restore(UserContract $user, Parameter $parameter): bool
    {
        return $user->hasPermissionTo('parameter.restore');
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
    public function forceDelete(UserContract $user, Parameter $parameter): bool
    {
        return $user->hasPermissionTo('parameter.forceDelete');
=======
    public function forceDelete(ProfileContract $user, Parameter $parameter): bool
    {
        return $user->hasPermissionTo('parameter.forceDelete'); /** @phpstan-ignore method.nonObject */
>>>>>>> a12f125f4a (.)
=======
    public function forceDelete(UserContract $user, Parameter $parameter): bool
    {
        return $user->hasPermissionTo('parameter.forceDelete');
>>>>>>> b93ef594b4 (.)
    }
}
=======
>>>>>>> 548bbd3 (.)
    public function forceDelete(UserContract $user, Parameter $parameter): bool
    {
        return $user->hasPermissionTo('parameter.forceDelete');
    }
}
<<<<<<< HEAD
=======
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
