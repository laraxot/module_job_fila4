<?php

declare(strict_types=1);

namespace Modules\Job\Models\Policies;

use Modules\Job\Models\Export;
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

class ExportPolicy extends JobBasePolicy
{
    /**
     * Determine whether the user can view any models.
     */
<<<<<<< HEAD
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('export.viewAny');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('export.viewAny');
=======
    public function viewAny(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('export.viewAny'); /** @phpstan-ignore method.nonObject */
>>>>>>> a12f125f4a (.)
=======
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('export.viewAny');
>>>>>>> b93ef594b4 (.)
=======
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('export.viewAny');
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
    }

    /**
     * Determine whether the user can view the model.
     */
<<<<<<< HEAD
    public function view(UserContract $user, Export $_export): bool
    {
        return $user->hasPermissionTo('export.view');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function view(UserContract $user, Export $_export): bool
    {
        return $user->hasPermissionTo('export.view');
=======
    public function view(ProfileContract $user, Export $export): bool
    {
        return $user->hasPermissionTo('export.view'); /** @phpstan-ignore method.nonObject */
>>>>>>> a12f125f4a (.)
=======
    public function view(UserContract $user, Export $_export): bool
    {
        return $user->hasPermissionTo('export.view');
>>>>>>> b93ef594b4 (.)
=======
    public function view(UserContract $user, Export $export): bool
    {
        return $user->hasPermissionTo('export.view');
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
    }

    /**
     * Determine whether the user can create models.
     */
<<<<<<< HEAD
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('export.create');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('export.create');
=======
    public function create(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('export.create'); /** @phpstan-ignore method.nonObject */
>>>>>>> a12f125f4a (.)
=======
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('export.create');
>>>>>>> b93ef594b4 (.)
=======
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('export.create');
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
    }

    /**
     * Determine whether the user can update the model.
     */
<<<<<<< HEAD
    public function update(UserContract $user, Export $_export): bool
    {
        return $user->hasPermissionTo('export.update');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function update(UserContract $user, Export $_export): bool
    {
        return $user->hasPermissionTo('export.update');
=======
    public function update(ProfileContract $user, Export $export): bool
    {
        return $user->hasPermissionTo('export.update'); /** @phpstan-ignore method.nonObject */
>>>>>>> a12f125f4a (.)
=======
    public function update(UserContract $user, Export $_export): bool
    {
        return $user->hasPermissionTo('export.update');
>>>>>>> b93ef594b4 (.)
=======
    public function update(UserContract $user, Export $export): bool
    {
        return $user->hasPermissionTo('export.update');
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
    }

    /**
     * Determine whether the user can delete the model.
     */
<<<<<<< HEAD
    public function delete(UserContract $user, Export $_export): bool
    {
        return $user->hasPermissionTo('export.delete');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function delete(UserContract $user, Export $_export): bool
    {
        return $user->hasPermissionTo('export.delete');
=======
    public function delete(ProfileContract $user, Export $export): bool
    {
        return $user->hasPermissionTo('export.delete'); /** @phpstan-ignore method.nonObject */
>>>>>>> a12f125f4a (.)
=======
    public function delete(UserContract $user, Export $_export): bool
    {
        return $user->hasPermissionTo('export.delete');
>>>>>>> b93ef594b4 (.)
=======
    public function delete(UserContract $user, Export $export): bool
    {
        return $user->hasPermissionTo('export.delete');
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
    }

    /**
     * Determine whether the user can restore the model.
     */
<<<<<<< HEAD
    public function restore(UserContract $user, Export $_export): bool
    {
        return $user->hasPermissionTo('export.restore');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function restore(UserContract $user, Export $_export): bool
    {
        return $user->hasPermissionTo('export.restore');
=======
    public function restore(ProfileContract $user, Export $export): bool
    {
        return $user->hasPermissionTo('export.restore'); /** @phpstan-ignore method.nonObject */
>>>>>>> a12f125f4a (.)
=======
    public function restore(UserContract $user, Export $_export): bool
    {
        return $user->hasPermissionTo('export.restore');
>>>>>>> b93ef594b4 (.)
=======
    public function restore(UserContract $user, Export $export): bool
    {
        return $user->hasPermissionTo('export.restore');
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
    public function forceDelete(UserContract $user, Export $export): bool
    {
        return $user->hasPermissionTo('export.forceDelete');
=======
    public function forceDelete(ProfileContract $user, Export $export): bool
    {
        return $user->hasPermissionTo('export.forceDelete'); /** @phpstan-ignore method.nonObject */
>>>>>>> a12f125f4a (.)
=======
    public function forceDelete(UserContract $user, Export $export): bool
    {
        return $user->hasPermissionTo('export.forceDelete');
>>>>>>> b93ef594b4 (.)
    }
}
=======
>>>>>>> 548bbd3 (.)
    public function forceDelete(UserContract $user, Export $export): bool
    {
        return $user->hasPermissionTo('export.forceDelete');
    }
}
<<<<<<< HEAD
=======
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
