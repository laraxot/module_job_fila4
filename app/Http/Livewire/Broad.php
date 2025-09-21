<?php

declare(strict_types=1);

namespace Modules\Job\Http\Livewire;

use Illuminate\Contracts\Support\Renderable;
use Livewire\Component;
use Modules\Job\Events\PublicEvent;
use Modules\Xot\Actions\GetViewAction;

class Broad extends Component
{
    /** @var array<string, string> */
    protected $listeners = [
        'echo:public,PublicEvent' => 'notifyEvent',
    ];

    public function render(): Renderable
    {
        $view = app(GetViewAction::class)->execute();

        return view($view);
    }

    public function try(): void
    {
<<<<<<< HEAD
        session()->flash('message', 'try [' . now() . ']');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        session()->flash('message', 'try [' . now() . ']');
=======
        session()->flash('message', 'try ['.now().']');
>>>>>>> a12f125f4a (.)
=======
        session()->flash('message', 'try [' . now() . ']');
>>>>>>> b93ef594b4 (.)
=======
        session()->flash('message', 'try ['.now().']');
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
        // OrderShipped::dispatch();
        // event(new PublicEvent('test'));
        PublicEvent::dispatch();
    }

    public function notifyEvent(): never
    {
<<<<<<< HEAD
        session()->flash('message', 'notifyEvent [' . now() . ']');
        dd('fine');

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        session()->flash('message', 'notifyEvent [' . now() . ']');
        dd('fine');

=======
        session()->flash('message', 'notifyEvent ['.now().']');
        dd('fine');
>>>>>>> a12f125f4a (.)
=======
        session()->flash('message', 'notifyEvent [' . now() . ']');
        dd('fine');

>>>>>>> b93ef594b4 (.)
=======
        session()->flash('message', 'notifyEvent ['.now().']');
        dd('fine');
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
        // $this->showNewOrderNotification = true;
    }
}
