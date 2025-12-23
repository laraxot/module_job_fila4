<?php

declare(strict_types=1);

namespace Modules\Job\Filament\Resources\JobResource\Pages;

<<<<<<< HEAD
use Filament\Resources\Pages\Page;
use Modules\Job\Filament\Resources\JobResource;

class BoardJobs extends Page
=======
use Modules\Job\Filament\Resources\JobResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseResourcePage;

class BoardJobs extends XotBaseResourcePage
>>>>>>> laraxot/develop
{
    protected static string $resource = JobResource::class;
}
