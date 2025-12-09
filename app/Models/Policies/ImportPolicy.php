<?php

declare(strict_types=1);

namespace Modules\Job\Models\Policies;

use Modules\Job\Models\Import;
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Xot\Contracts\UserContract;
=======
use Modules\Xot\Contracts\ProfileContract;
>>>>>>> e1b0bf9 (.)
=======
use Modules\Xot\Contracts\UserContract;
>>>>>>> 7d4742a (.)

class ImportPolicy extends JobBasePolicy
{
    /**
     * Determine whether the user can view any models.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('import.viewAny');
=======
    public function viewAny(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('import.viewAny'); /** @phpstan-ignore method.nonObject */
>>>>>>> e1b0bf9 (.)
=======
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('import.viewAny');
>>>>>>> 7d4742a (.)
    }

    /**
     * Determine whether the user can view the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function view(UserContract $user, Import $_import): bool
    {
        return $user->hasPermissionTo('import.view');
=======
    public function view(ProfileContract $user, Import $import): bool
    {
        return $user->hasPermissionTo('import.view'); /** @phpstan-ignore method.nonObject */
>>>>>>> e1b0bf9 (.)
=======
    public function view(UserContract $user, Import $_import): bool
    {
        return $user->hasPermissionTo('import.view');
>>>>>>> 7d4742a (.)
    }

    /**
     * Determine whether the user can create models.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('import.create');
=======
    public function create(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('import.create'); /** @phpstan-ignore method.nonObject */
>>>>>>> e1b0bf9 (.)
=======
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('import.create');
>>>>>>> 7d4742a (.)
    }

    /**
     * Determine whether the user can update the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function update(UserContract $user, Import $_import): bool
    {
        return $user->hasPermissionTo('import.update');
=======
    public function update(ProfileContract $user, Import $import): bool
    {
        return $user->hasPermissionTo('import.update'); /** @phpstan-ignore method.nonObject */
>>>>>>> e1b0bf9 (.)
=======
    public function update(UserContract $user, Import $_import): bool
    {
        return $user->hasPermissionTo('import.update');
>>>>>>> 7d4742a (.)
    }

    /**
     * Determine whether the user can delete the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function delete(UserContract $user, Import $_import): bool
    {
        return $user->hasPermissionTo('import.delete');
=======
    public function delete(ProfileContract $user, Import $import): bool
    {
        return $user->hasPermissionTo('import.delete'); /** @phpstan-ignore method.nonObject */
>>>>>>> e1b0bf9 (.)
=======
    public function delete(UserContract $user, Import $_import): bool
    {
        return $user->hasPermissionTo('import.delete');
>>>>>>> 7d4742a (.)
    }

    /**
     * Determine whether the user can restore the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function restore(UserContract $user, Import $_import): bool
    {
        return $user->hasPermissionTo('import.restore');
=======
    public function restore(ProfileContract $user, Import $import): bool
    {
        return $user->hasPermissionTo('import.restore'); /** @phpstan-ignore method.nonObject */
>>>>>>> e1b0bf9 (.)
=======
    public function restore(UserContract $user, Import $_import): bool
    {
        return $user->hasPermissionTo('import.restore');
>>>>>>> 7d4742a (.)
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function forceDelete(UserContract $user, Import $import): bool
    {
        return $user->hasPermissionTo('import.forceDelete');
=======
    public function forceDelete(ProfileContract $user, Import $import): bool
    {
        return $user->hasPermissionTo('import.forceDelete'); /** @phpstan-ignore method.nonObject */
>>>>>>> e1b0bf9 (.)
=======
    public function forceDelete(UserContract $user, Import $import): bool
    {
        return $user->hasPermissionTo('import.forceDelete');
>>>>>>> 7d4742a (.)
    }
}
