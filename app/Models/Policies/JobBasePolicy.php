<?php

declare(strict_types=1);

namespace Modules\Job\Models\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Xot\Contracts\UserContract;
=======
use Modules\Xot\Contracts\ProfileContract;
>>>>>>> e1b0bf9 (.)
=======
use Modules\Xot\Contracts\UserContract;
>>>>>>> 7d4742a (.)
use Modules\Xot\Datas\XotData;

abstract class JobBasePolicy
{
    use HandlesAuthorization;

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 7d4742a (.)
    public function before(UserContract $user, string $_ability): null|bool
    {
        $xotData = XotData::make();
        if ($user->hasRole('super-admin')) {
<<<<<<< HEAD
=======
    public function before(ProfileContract $user, string $ability): ?bool
    {
        $xotData = XotData::make();
        if ($user->hasRole('super-admin')/** @phpstan-ignore method.nonObject */) {
>>>>>>> e1b0bf9 (.)
=======
>>>>>>> 7d4742a (.)
            return true;
        }

        return null;
    }
}
