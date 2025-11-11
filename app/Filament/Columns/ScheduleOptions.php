<?php

declare(strict_types=1);

namespace Modules\Job\Filament\Columns;

use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Model;

final class ScheduleOptions extends TextColumn
{
    protected bool $withValue = true;

    public function withValue(): static
    {
        $this->withValue = true;

        return $this;
    }

    public function withoutValue(): static
    {
        $this->withValue = false;

        return $this;
    }

    /**
     * @return array<int, string>
     */
    public function getTags(): array
    {
        $record = $this->getRecord();

        if (
            ! $record instanceof Model
            || ! method_exists($record, 'getOptions')
        ) {
            return parent::getTags();
        }

        if (! $this->withValue) {
            return parent::getTags();
        }

        $options = $record->getOptions();

        if (! is_array($options)) {
            return parent::getTags();
        }

        return array_values(
            array_map(
                static fn ($option): string => (string) $option,
                $options,
            ),
        );
    }
}
