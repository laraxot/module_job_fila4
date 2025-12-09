<?php

declare(strict_types=1);

namespace Modules\Job\Filament\Pages;

use Filament\Pages\Page;
use Modules\Xot\Filament\Traits\NavigationLabelTrait;

class JobMonitor extends Page
{
    use NavigationLabelTrait;

<<<<<<< HEAD
    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-computer-desktop';

    protected string $view = 'job::filament.pages.job-monitor';
=======
<<<<<<< HEAD
    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-computer-desktop';

    protected string $view = 'job::filament.pages.job-monitor';
=======
    protected static ?string $navigationIcon = 'heroicon-o-computer-desktop';

    protected static string $view = 'job::filament.pages.job-monitor';
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)

    // public function mount(): void {
    //     $user = auth()->user();
    //     if(!$user->hasRole('super-admin')){
    //         redirect('/admin');
    //     }
    // }
}
