<?php

declare(strict_types=1);

namespace Modules\Job\Models\Policies;

use Modules\Job\Models\Frequency;
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Xot\Contracts\UserContract;
=======
use Modules\Xot\Contracts\ProfileContract;
>>>>>>> e1b0bf9 (.)
=======
use Modules\Xot\Contracts\UserContract;
>>>>>>> 7d4742a (.)

class FrequencyPolicy extends JobBasePolicy
{
    /**
     * Determine whether the user can view any models.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('frequency.viewAny');
=======
    public function viewAny(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('frequency.viewAny'); /** @phpstan-ignore method.nonObject */
>>>>>>> e1b0bf9 (.)
=======
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('frequency.viewAny');
>>>>>>> 7d4742a (.)
    }

    /**
     * Determine whether the user can view the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function view(UserContract $user, Frequency $_frequency): bool
    {
        return $user->hasPermissionTo('frequency.view');
=======
    public function view(ProfileContract $user, Frequency $frequency): bool
    {
        return $user->hasPermissionTo('frequency.view'); /** @phpstan-ignore method.nonObject */
>>>>>>> e1b0bf9 (.)
=======
    public function view(UserContract $user, Frequency $_frequency): bool
    {
        return $user->hasPermissionTo('frequency.view');
>>>>>>> 7d4742a (.)
    }

    /**
     * Determine whether the user can create models.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('frequency.create');
=======
    public function create(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('frequency.create'); /** @phpstan-ignore method.nonObject */
>>>>>>> e1b0bf9 (.)
=======
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('frequency.create');
>>>>>>> 7d4742a (.)
    }

    /**
     * Determine whether the user can update the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function update(UserContract $user, Frequency $_frequency): bool
    {
        return $user->hasPermissionTo('frequency.update');
=======
    public function update(ProfileContract $user, Frequency $frequency): bool
    {
        return $user->hasPermissionTo('frequency.update'); /** @phpstan-ignore method.nonObject */
>>>>>>> e1b0bf9 (.)
=======
    public function update(UserContract $user, Frequency $_frequency): bool
    {
        return $user->hasPermissionTo('frequency.update');
>>>>>>> 7d4742a (.)
    }

    /**
     * Determine whether the user can delete the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function delete(UserContract $user, Frequency $_frequency): bool
    {
        return $user->hasPermissionTo('frequency.delete');
=======
    public function delete(ProfileContract $user, Frequency $frequency): bool
    {
        return $user->hasPermissionTo('frequency.delete'); /** @phpstan-ignore method.nonObject */
>>>>>>> e1b0bf9 (.)
=======
    public function delete(UserContract $user, Frequency $_frequency): bool
    {
        return $user->hasPermissionTo('frequency.delete');
>>>>>>> 7d4742a (.)
    }

    /**
     * Determine whether the user can restore the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function restore(UserContract $user, Frequency $_frequency): bool
    {
        return $user->hasPermissionTo('frequency.restore');
=======
    public function restore(ProfileContract $user, Frequency $frequency): bool
    {
        return $user->hasPermissionTo('frequency.restore'); /** @phpstan-ignore method.nonObject */
>>>>>>> e1b0bf9 (.)
=======
    public function restore(UserContract $user, Frequency $_frequency): bool
    {
        return $user->hasPermissionTo('frequency.restore');
>>>>>>> 7d4742a (.)
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function forceDelete(UserContract $user, Frequency $frequency): bool
    {
        return $user->hasPermissionTo('frequency.forceDelete');
=======
    public function forceDelete(ProfileContract $user, Frequency $frequency): bool
    {
        return $user->hasPermissionTo('frequency.forceDelete'); /** @phpstan-ignore method.nonObject */
>>>>>>> e1b0bf9 (.)
=======
    public function forceDelete(UserContract $user, Frequency $frequency): bool
    {
        return $user->hasPermissionTo('frequency.forceDelete');
>>>>>>> 7d4742a (.)
    }
}
