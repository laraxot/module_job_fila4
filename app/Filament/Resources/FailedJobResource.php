<?php

/**
 * @see https://gitlab.com/amvisor/filament-failed-jobs/-/blob/master/src/resources/FailedJobsResource.php
 */

declare(strict_types=1);

namespace Modules\Job\Filament\Resources;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Modules\Job\Filament\Resources\FailedJobResource\Pages\ListFailedJobs;
use Modules\Job\Models\FailedJob;
use Modules\Xot\Filament\Resources\XotBaseResource;
use Override;

class FailedJobResource extends XotBaseResource
{
    protected static ?string $model = FailedJob::class;

    #[Override]
    public static function getFormSchema(): array
    {
        return [
            TextInput::make('uuid')->disabled()->columnSpan(4),
            TextInput::make('failed_at')->disabled(),
            TextInput::make('id')->disabled(),
            TextInput::make('connection')->disabled(),
            TextInput::make('queue')->disabled(),
            Textarea::make('exception')
                ->disabled()
                ->columnSpan(4)
                ->extraInputAttributes(['style' => 'font-size: 80%;']),
            Textarea::make('payload')
                ->disabled()
                ->columnSpan(4)
                ->extraInputAttributes(['style' => 'font-size: 80%;']),
        ];
    }

    #[Override]
    public static function getRelations(): array
    {
        return [];
    }

    #[Override]
    public static function getPages(): array
    {
        return [
            'index' => ListFailedJobs::route('/'),
        ];
    }
}
