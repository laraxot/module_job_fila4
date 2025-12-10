<?php

declare(strict_types=1);

namespace Modules\Job\Models\Policies;

use Modules\Job\Models\FailedImportRow;
use Modules\Xot\Contracts\ProfileContract as Profile;
use Modules\Xot\Contracts\UserContract as User;

final class FailedImportRowPolicy extends JobBasePolicy
{
    public function viewAny(User|Profile $user): bool
    {
        return $this->can($user, 'failed_import_row.viewAny');
    }

    public function view(User|Profile $user, FailedImportRow $failedImportRow): bool
    {
        $permission = 'failed_import_row.view';

        return $this->authorizeOnRecord(
            $user,
            $permission,
            $failedImportRow,
        );
    }

    public function create(User|Profile $user): bool
    {
        return $this->can($user, 'failed_import_row.create');
    }

    public function update(User|Profile $user, FailedImportRow $failedImportRow): bool
    {
        $permission = 'failed_import_row.update';

        return $this->authorizeOnRecord(
            $user,
            $permission,
            $failedImportRow,
        );
    }

    public function delete(User|Profile $user, FailedImportRow $failedImportRow): bool
    {
        $permission = 'failed_import_row.delete';

        return $this->authorizeOnRecord(
            $user,
            $permission,
            $failedImportRow,
        );
    }

    public function restore(User|Profile $user, FailedImportRow $failedImportRow): bool
    {
        $permission = 'failed_import_row.restore';

        return $this->authorizeOnRecord(
            $user,
            $permission,
            $failedImportRow,
        );
    }

    public function forceDelete(User|Profile $user, FailedImportRow $failedImportRow): bool
    {
        $permission = 'failed_import_row.forceDelete';

        return $this->authorizeOnRecord(
            $user,
            $permission,
            $failedImportRow,
        );
    }

    private function authorizeOnRecord(
        User|Profile $user,
        string $permission,
        FailedImportRow $failedImportRow,
    ): bool {
        unset($failedImportRow);

        return $this->can($user, $permission);
    }

    private function can(User|Profile $user, string $permission): bool
    {
        return $user->hasPermissionTo($permission);
    }
}
