<?php

/**
 * @see https://github.com/husam-tariq/filament-database-schedule/blob/main/src/Filament/resources/ScheduleResource.php
 */

declare(strict_types=1);

namespace Modules\Job\Filament\Resources;

<<<<<<< HEAD
use Override;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Override;
=======
>>>>>>> a12f125f4a (.)
=======
use Override;
>>>>>>> b93ef594b4 (.)
>>>>>>> 548bbd3 (.)
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Repeater;
<<<<<<< HEAD
=======
=======
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Section;
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
use Filament\Forms\Get;
use Filament\Forms\Set;
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Modules\Job\Actions\Command\GetCommandsAction;
use Modules\Job\Datas\CommandData;
use Modules\Job\Filament\Resources\ScheduleResource\Pages\CreateSchedule;
use Modules\Job\Filament\Resources\ScheduleResource\Pages\EditSchedule;
use Modules\Job\Filament\Resources\ScheduleResource\Pages\ListSchedules;
use Modules\Job\Filament\Resources\ScheduleResource\Pages\ViewSchedule;
use Modules\Job\Models\Schedule;
use Modules\Job\Rules\Corn;
use Modules\Xot\Filament\Resources\XotBaseResource;
use Spatie\LaravelData\DataCollection;
use Webmozart\Assert\Assert;

class ScheduleResource extends XotBaseResource
{
<<<<<<< HEAD
    protected static null|string $model = Schedule::class;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    protected static null|string $model = Schedule::class;
=======
    protected static ?string $model = Schedule::class;
>>>>>>> a12f125f4a (.)
=======
    protected static null|string $model = Schedule::class;
>>>>>>> b93ef594b4 (.)
=======
    protected static ?string $model = Schedule::class;
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)

    protected static bool $shouldRegisterNavigation = true;

    /** @var DataCollection<CommandData> */
    protected static DataCollection $commands;

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }

<<<<<<< HEAD
    #[Override]
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    #[Override]
=======
>>>>>>> a12f125f4a (.)
=======
    #[Override]
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
    public static function getPages(): array
    {
        return [
            'index' => ListSchedules::route('/'),
            'create' => CreateSchedule::route('/create'),
            'edit' => EditSchedule::route('/{record}/edit'),
            'view' => ViewSchedule::route('/{record}'),
        ];
    }

<<<<<<< HEAD
    #[Override]
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    #[Override]
=======
>>>>>>> a12f125f4a (.)
=======
    #[Override]
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
    public static function getFormSchema(): array
    {
        static::$commands = app(GetCommandsAction::class)->execute();
        $commands_opts = static::$commands->toCollection()->pluck('full_name', 'name')->toArray();

        return [
            'main_section' => Section::make([
                Select::make('command')
<<<<<<< HEAD
                    ->options(fn() => $commands_opts)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                    ->options(fn() => $commands_opts)
=======
                    ->options(fn () => $commands_opts)
>>>>>>> a12f125f4a (.)
=======
                    ->options(fn() => $commands_opts)
>>>>>>> b93ef594b4 (.)
=======
                    ->options(fn () => $commands_opts)
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
                    ->reactive()
                    ->searchable()
                    ->required()
                    ->afterStateUpdated(function (Set $set, $state): void {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 548bbd3 (.)
                        Assert::isInstanceOf(
                            $command = static::$commands->where('name', $state)->first(),
                            CommandData::class,
                        );
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
                        Assert::isInstanceOf($command = static::$commands->where('name', $state)->first(), CommandData::class);
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
                        Assert::isInstanceOf($command = static::$commands->where('name', $state)->first(), CommandData::class);
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
                        $params = $command->arguments;
                        $options_with_value = $command->options['withValue'] ?? [];
                        $set('params', $params);
                        $set('options_with_value', $options_with_value);
                    }),
                Repeater::make('params')
                    ->schema([
                        Hidden::make('name'),
                        TextInput::make('value')
<<<<<<< HEAD
                            ->label(fn(Get $get): mixed => $get('name'))
                            ->required(fn(Get $get): mixed => $get('required')),
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                            ->label(fn(Get $get): mixed => $get('name'))
                            ->required(fn(Get $get): mixed => $get('required')),
=======
                            ->label(fn (Get $get): mixed => $get('name'))
                            ->required(fn (Get $get): mixed => $get('required')),
>>>>>>> a12f125f4a (.)
=======
                            ->label(fn(Get $get): mixed => $get('name'))
                            ->required(fn(Get $get): mixed => $get('required')),
>>>>>>> b93ef594b4 (.)
=======
                            ->label(fn (Get $get): mixed => $get('name'))
                            ->required(fn (Get $get): mixed => $get('required')),
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
                    ])
                    ->addable(false)
                    ->deletable(false)
                    ->reorderable(false),
                Repeater::make('options_with_value')
                    ->schema([
                        Hidden::make('name'),
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 548bbd3 (.)
                        Hidden::make('type')->default('string'),
                        TextInput::make('value')
                            ->label(fn(Get $get): mixed => $get('name'))
                            ->required(fn(Get $get): mixed => $get('required')),
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
                        Hidden::make('type')
                            ->default('string'),
                        TextInput::make('value')
                            ->label(fn (Get $get): mixed => $get('name'))
                            ->required(fn (Get $get): mixed => $get('required')),
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
                        Hidden::make('type')->default('string'),
                        TextInput::make('value')
                            ->label(fn(Get $get): mixed => $get('name'))
                            ->required(fn(Get $get): mixed => $get('required')),
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
                    ])
                    ->addable(false)
                    ->deletable(false)
                    ->reorderable(false),
                TextInput::make('expression')
                    ->placeholder('* * * * *')
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 548bbd3 (.)
                    ->rules([new Corn()])
                    ->required(),
                TagsInput::make('environments')->placeholder(null),
                TextInput::make('log_filename')->helperText(static::trans('messages.help-log-filename')),
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
                    ->rules([new Corn])
                    ->required(),
                TagsInput::make('environments')
                    ->placeholder(null),
                TextInput::make('log_filename')
                    ->helperText(static::trans('messages.help-log-filename')),
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
                    ->rules([new Corn()])
                    ->required(),
                TagsInput::make('environments')->placeholder(null),
                TextInput::make('log_filename')->helperText(static::trans('messages.help-log-filename')),
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
                TextInput::make('webhook_before'),
                TextInput::make('webhook_after'),
                TextInput::make('email_output'),
                Toggle::make('sendmail_success'),
                Toggle::make('sendmail_error'),
<<<<<<< HEAD
                Toggle::make('log_success')->default(true),
                Toggle::make('log_error')->default(true),
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                Toggle::make('log_success')->default(true),
                Toggle::make('log_error')->default(true),
=======
=======
>>>>>>> origin/develop
                Toggle::make('log_success')
                    ->default(true),
                Toggle::make('log_error')
                    ->default(true),
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
                Toggle::make('log_success')->default(true),
                Toggle::make('log_error')->default(true),
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
                Toggle::make('even_in_maintenance_mode'),
                Toggle::make('without_overlapping'),
                Toggle::make('on_one_server'),
                Toggle::make('run_in_background'),
            ])->inlineLabel(false),
        ];
    }

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 548bbd3 (.)
    #[Override]
    public static function getRelations(): array
    {
        return [
            
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
    public static function getRelations(): array
    {
        return [
            //
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
    #[Override]
    public static function getRelations(): array
    {
        return [
            
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
        ];
    }
}
