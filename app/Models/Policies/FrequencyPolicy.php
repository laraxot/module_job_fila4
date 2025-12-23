<?php

declare(strict_types=1);

namespace Modules\Job\Models\Policies;

use Modules\Job\Models\Frequency;
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

class FrequencyPolicy extends JobBasePolicy
{
    /**
     * Determine whether the user can view any models.
     */
<<<<<<< HEAD
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('frequency.viewAny');
=======
<<<<<<< HEAD
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('frequency.viewAny');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('frequency.viewAny');
=======
    public function viewAny(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('frequency.viewAny'); /** @phpstan-ignore method.nonObject */
>>>>>>> a12f125f4a (.)
=======
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('frequency.viewAny');
>>>>>>> b93ef594b4 (.)
=======
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('frequency.viewAny');
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
>>>>>>> laraxot/develop
    }

    /**
     * Determine whether the user can view the model.
     */
<<<<<<< HEAD
    public function view(UserContract $user, Frequency $_frequency): bool
    {
        return $user->hasPermissionTo('frequency.view');
=======
<<<<<<< HEAD
    public function view(UserContract $user, Frequency $_frequency): bool
    {
        return $user->hasPermissionTo('frequency.view');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function view(UserContract $user, Frequency $_frequency): bool
    {
        return $user->hasPermissionTo('frequency.view');
=======
    public function view(ProfileContract $user, Frequency $frequency): bool
    {
        return $user->hasPermissionTo('frequency.view'); /** @phpstan-ignore method.nonObject */
>>>>>>> a12f125f4a (.)
=======
    public function view(UserContract $user, Frequency $_frequency): bool
    {
        return $user->hasPermissionTo('frequency.view');
>>>>>>> b93ef594b4 (.)
=======
    public function view(UserContract $user, Frequency $frequency): bool
    {
        return $user->hasPermissionTo('frequency.view');
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
        return $user->hasPermissionTo('frequency.create');
=======
<<<<<<< HEAD
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('frequency.create');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('frequency.create');
=======
    public function create(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('frequency.create'); /** @phpstan-ignore method.nonObject */
>>>>>>> a12f125f4a (.)
=======
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('frequency.create');
>>>>>>> b93ef594b4 (.)
=======
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('frequency.create');
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
>>>>>>> laraxot/develop
    }

    /**
     * Determine whether the user can update the model.
     */
<<<<<<< HEAD
    public function update(UserContract $user, Frequency $_frequency): bool
    {
        return $user->hasPermissionTo('frequency.update');
=======
<<<<<<< HEAD
    public function update(UserContract $user, Frequency $_frequency): bool
    {
        return $user->hasPermissionTo('frequency.update');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function update(UserContract $user, Frequency $_frequency): bool
    {
        return $user->hasPermissionTo('frequency.update');
=======
    public function update(ProfileContract $user, Frequency $frequency): bool
    {
        return $user->hasPermissionTo('frequency.update'); /** @phpstan-ignore method.nonObject */
>>>>>>> a12f125f4a (.)
=======
    public function update(UserContract $user, Frequency $_frequency): bool
    {
        return $user->hasPermissionTo('frequency.update');
>>>>>>> b93ef594b4 (.)
=======
    public function update(UserContract $user, Frequency $frequency): bool
    {
        return $user->hasPermissionTo('frequency.update');
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
>>>>>>> laraxot/develop
    }

    /**
     * Determine whether the user can delete the model.
     */
<<<<<<< HEAD
    public function delete(UserContract $user, Frequency $_frequency): bool
    {
        return $user->hasPermissionTo('frequency.delete');
=======
<<<<<<< HEAD
    public function delete(UserContract $user, Frequency $_frequency): bool
    {
        return $user->hasPermissionTo('frequency.delete');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function delete(UserContract $user, Frequency $_frequency): bool
    {
        return $user->hasPermissionTo('frequency.delete');
=======
    public function delete(ProfileContract $user, Frequency $frequency): bool
    {
        return $user->hasPermissionTo('frequency.delete'); /** @phpstan-ignore method.nonObject */
>>>>>>> a12f125f4a (.)
=======
    public function delete(UserContract $user, Frequency $_frequency): bool
    {
        return $user->hasPermissionTo('frequency.delete');
>>>>>>> b93ef594b4 (.)
=======
    public function delete(UserContract $user, Frequency $frequency): bool
    {
        return $user->hasPermissionTo('frequency.delete');
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
>>>>>>> laraxot/develop
    }

    /**
     * Determine whether the user can restore the model.
     */
<<<<<<< HEAD
    public function restore(UserContract $user, Frequency $_frequency): bool
    {
        return $user->hasPermissionTo('frequency.restore');
=======
<<<<<<< HEAD
    public function restore(UserContract $user, Frequency $_frequency): bool
    {
        return $user->hasPermissionTo('frequency.restore');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function restore(UserContract $user, Frequency $_frequency): bool
    {
        return $user->hasPermissionTo('frequency.restore');
=======
    public function restore(ProfileContract $user, Frequency $frequency): bool
    {
        return $user->hasPermissionTo('frequency.restore'); /** @phpstan-ignore method.nonObject */
>>>>>>> a12f125f4a (.)
=======
    public function restore(UserContract $user, Frequency $_frequency): bool
    {
        return $user->hasPermissionTo('frequency.restore');
>>>>>>> b93ef594b4 (.)
=======
    public function restore(UserContract $user, Frequency $frequency): bool
    {
        return $user->hasPermissionTo('frequency.restore');
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
    public function forceDelete(UserContract $user, Frequency $frequency): bool
    {
        return $user->hasPermissionTo('frequency.forceDelete');
=======
    public function forceDelete(ProfileContract $user, Frequency $frequency): bool
    {
        return $user->hasPermissionTo('frequency.forceDelete'); /** @phpstan-ignore method.nonObject */
>>>>>>> a12f125f4a (.)
=======
    public function forceDelete(UserContract $user, Frequency $frequency): bool
    {
        return $user->hasPermissionTo('frequency.forceDelete');
>>>>>>> b93ef594b4 (.)
    }
}
=======
>>>>>>> 548bbd3 (.)
>>>>>>> laraxot/develop
    public function forceDelete(UserContract $user, Frequency $frequency): bool
    {
        return $user->hasPermissionTo('frequency.forceDelete');
    }
}
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
>>>>>>> laraxot/develop
