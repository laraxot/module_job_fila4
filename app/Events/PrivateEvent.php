<?php

declare(strict_types=1);

namespace Modules\Job\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class PrivateEvent implements ShouldBroadcast
{
    use Dispatchable;
    use InteractsWithSockets;
    use SerializesModels;

    /**
     * Create a new event instance.
     *
     * @return void
     */
<<<<<<< HEAD
    public function __construct(
        public string $message,
    ) {}
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function __construct(
        public string $message,
    ) {}
=======
    public function __construct(public string $message) {}
>>>>>>> a12f125f4a (.)
=======
    public function __construct(
        public string $message,
    ) {}
>>>>>>> b93ef594b4 (.)
=======
    public function __construct(public string $message) {}
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)

    /**
     * Get the channels the event should broadcast on.
     */
    public function broadcastOn(): Channel
    {
<<<<<<< HEAD
        return new PrivateChannel('private.' . auth()->id());
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return new PrivateChannel('private.' . auth()->id());
=======
        return new PrivateChannel('private.'.auth()->id());
>>>>>>> a12f125f4a (.)
=======
        return new PrivateChannel('private.' . auth()->id());
>>>>>>> b93ef594b4 (.)
=======
        return new PrivateChannel('private.'.auth()->id());
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
    }
}
