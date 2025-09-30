<?php

declare(strict_types=1);

namespace Modules\Job\Filament\Pages;

use Filament\Pages\Page;
use Modules\Xot\Filament\Pages\XotBaseDashboard;

class Dashboard extends XotBaseDashboard
{
<<<<<<< HEAD
    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-home';

    protected string $view = 'job::filament.pages.dashboard';
=======
<<<<<<< HEAD
    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-home';

    protected string $view = 'job::filament.pages.dashboard';
=======
    protected static ?string $navigationIcon = 'heroicon-o-home';

    protected static string $view = 'job::filament.pages.dashboard';
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)

    // public function mount(): void {
    //     $user = auth()->user();
    //     if(!$user->hasRole('super-admin')){
    //         redirect('/admin');
    //     }
    // }
}
