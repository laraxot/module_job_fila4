<?php

declare(strict_types=1);

namespace Modules\Job\Filament\Resources\ScheduleResource\Pages;

use Filament\Forms\Concerns\InteractsWithForms;
<<<<<<< HEAD
use Filament\Resources\Concerns\HasTabs;
use Filament\Resources\Pages\Concerns\HasRelationManagers;
use Filament\Resources\Pages\Concerns\InteractsWithRecord;
use Filament\Resources\Pages\Page;
use Filament\Tables\Columns\Layout\Panel;
use Filament\Tables\Columns\Layout\Split;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Illuminate\Support\HtmlString;
use Livewire\Attributes\Url;
use Modules\Job\Filament\Resources\ScheduleResource;
use Webmozart\Assert\Assert;

class ViewSchedule extends Page implements HasTable
{
    use HasRelationManagers;
    use HasTabs;
    use InteractsWithForms;
    use InteractsWithRecord;
    use InteractsWithTable {
        makeTable as makeBaseTable;
    }
=======
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Columns\Layout\Split;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\Layout\Panel;
use Filament\Forms;
use Filament\Tables\Contracts\HasTable;
use Illuminate\Support\Carbon;
use Illuminate\Support\HtmlString;
use Livewire\Attributes\Url;
use Modules\Job\Filament\Resources\ScheduleResource;
use Modules\Job\Models\ScheduleHistory;
use Modules\Xot\Filament\Resources\Pages\XotBaseResourcePage;
use Webmozart\Assert\Assert;

class ViewSchedule extends XotBaseResourcePage implements HasTable
{
    use InteractsWithForms;
>>>>>>> laraxot/develop
    use InteractsWithTable {
        makeTable as makeBaseTable;
    }

    #[Url]
<<<<<<< HEAD
    public ?string $activeTab = null;
=======
    public null|string $activeTab = null;
>>>>>>> laraxot/develop

    protected static string $resource = ScheduleResource::class;

    protected string $view = 'filament-panels::resources.pages.list-records';

    public function getTitle(): string
    {
        return __('job::schedule.resource.history');
    }

    protected function getHeaderActions(): array
    {
        return [];
    }

<<<<<<< HEAD
    /*
     * Undocumented function
     *
     * @param string $record
     * @return void
     *
     * public function mount($record): void
     * {
     * static::authorizeResourceAccess();
     *
     * $this->record = $this->resolveRecord($record);
     *
     * abort_unless(static::getResource()::canView($this->getRecord()), 403);
     * }
     *
     * protected function getRelationManagers(): array
     * {
     * return [];
     * }
     *
     *
     * protected function getTableQuery(): Builder
     * {
     * return ScheduleHistory::where('schedule_id', $this->record->id)->latest();
     * }
     */

    protected function getTableColumns(): array
    {
        $date_format = config('app.date_format');
        Assert::string($date_format, '['.__LINE__.']['.class_basename($this).']');
=======
    protected function getTableColumns(): array
    {
        $date_format = config('app.date_format');
        Assert::string($date_format, '[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> laraxot/develop

        return [
            Split::make([
                TextColumn::make('command'),
                TextColumn::make('created_at')->dateTime($date_format),
                TextColumn::make('updated_at')->formatStateUsing(static function (
<<<<<<< HEAD
                    $state,
                    $record,
                ): string {
                    if (is_object($record) && method_exists($record, 'getAttribute')) {
                        $createdAt = $record->getAttribute('created_at');
                        if ($state === $createdAt) {
                            return 'Processing...';
                        }

                        if (is_object($state) && method_exists($state, 'diffInSeconds') && is_object($createdAt) && method_exists($createdAt, 'getTimestamp')) {
                            $diffSeconds = $state->diffInSeconds($createdAt);
                            $diffStr = is_numeric($diffSeconds) ? ((string) $diffSeconds) : '0';

                            return sprintf('%s seconds', $diffStr);
                        }
                    }

                    return '0 seconds';
                }),
                TextColumn::make('output')->formatStateUsing(
                    static fn (string $state): string => (
                        (count(explode('<br />', nl2br($state))) - 1).' rows of output'
=======
                    ?Carbon $state,
                    ScheduleHistory $record,
                ): string {
                    if ($record->created_at === null || $state === null) {
                        return '';
                    }

                    if ($state->equalTo($record->created_at)) {
                        return 'Processing...';
                    }

                    return (string) $state->diffInSeconds($record->created_at) . ' seconds';
                }),
                TextColumn::make('output')->formatStateUsing(
                    static fn(string $state): string => (
                        (count(explode('<br />', nl2br($state))) - 1) . ' rows of output'
>>>>>>> laraxot/develop
                    ),
                ),
            ]),
            Panel::make([
                TextColumn::make('output')
                    ->extraAttributes(['class' => '!max-w-max'], true)
<<<<<<< HEAD
                    ->formatStateUsing(static fn (string $state): HtmlString => new HtmlString(nl2br(
=======
                    ->formatStateUsing(static fn(string $state): HtmlString => new HtmlString(nl2br(
>>>>>>> laraxot/develop
                        $state,
                    ))),
            ])->collapsible(),
            // ->collapsed(config('job::history_collapsed'))
        ];
    }
}
