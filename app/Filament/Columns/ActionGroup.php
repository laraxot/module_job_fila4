<?php

/**
 * @see https://github.com/husam-tariq/filament-database-schedule/blob/v2.0.0/src/Filament/Columns/ActionGroup.php
 */

declare(strict_types=1);

namespace Modules\Job\Filament\Columns;

use Filament\Actions\Concerns\InteractsWithRecord;
use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
=======
use Modules\Xot\Filament\Actions\XotBaseActionGroup;
>>>>>>> laraxot/develop

/**
 * @property Model $record
 */
<<<<<<< HEAD
class ActionGroup extends \Filament\Actions\ActionGroup
=======
class ActionGroup extends XotBaseActionGroup
>>>>>>> laraxot/develop
{
    use InteractsWithRecord;

    public const ICON_BUTTON_VIEW = 'job::components.action-group';

    protected string $view = 'job::components.action-group';

    public function getActions(): array
    {
        return [];
    }
}
