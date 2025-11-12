<?php

declare(strict_types=1);

namespace Modules\Job\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Modules\Job\Models\Task;

class TaskCompleted extends Notification implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
<<<<<<< HEAD
    public function __construct(
        private readonly string $output,
    ) {}
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function __construct(
        private readonly string $output,
    ) {}
=======
    public function __construct(private readonly string $output) {}
>>>>>>> a12f125f4a (.)
=======
    public function __construct(
        private readonly string $output,
    ) {}
>>>>>>> b93ef594b4 (.)
=======
    public function __construct(private readonly string $output) {}
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)

    /**
     * Get the notification's delivery channels.
     */
    // public function via(mixed $notifiable): array {
    public function via(Task $notifiable): array
    {
        $channels = [];
        if ($notifiable->notification_email_address) {
            $channels[] = 'mail';
        }

        if ($notifiable->notification_phone_number) {
            $channels[] = 'nexmo';
        }

        if ($notifiable->notification_slack_webhook !== '' && $notifiable->notification_slack_webhook !== '0') {
            $channels[] = 'slack';
        }

        return $channels;
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(Task $task): MailMessage
    {
<<<<<<< HEAD
        return new MailMessage()
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return new MailMessage()
=======
        return (new MailMessage)
>>>>>>> a12f125f4a (.)
=======
        return new MailMessage()
>>>>>>> b93ef594b4 (.)
=======
        return (new MailMessage)
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
            ->subject($task->description)
            ->greeting('Hi,')
            ->line(sprintf('%s just finished running.', $task->description))
            ->line($this->output);
    }

    /*
     * Get the Nexmo / SMS representation of the notification.
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 548bbd3 (.)
     *
     * public function toNexmo(mixed $notifiable): NexmoMessage
     * {
     * return (new NexmoMessage())
     * ->content($notifiable->description.' just finished running.');
     * }
     */
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 548bbd3 (.)
    /*
     * Get the Slack representation of the notification.
     *
     * public function toSlack(mixed $notifiable): SlackMessage
     * {
     * return (new SlackMessage())
     * ->content(config('app.name'))
     * ->attachment(function (SlackAttachment $attachment) use ($notifiable) {
     * $attachment
     * ->title('Totem Task')
     * ->content($notifiable->description.' just finished running.');
     * });
     * }
     */
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop

    public function toNexmo(mixed $notifiable): NexmoMessage
    {
        return (new NexmoMessage())
            ->content($notifiable->description.' just finished running.');
    }
    */

    /*
     * Get the Slack representation of the notification.

    public function toSlack(mixed $notifiable): SlackMessage
    {
        return (new SlackMessage())
            ->content(config('app.name'))
            ->attachment(function (SlackAttachment $attachment) use ($notifiable) {
                $attachment
                    ->title('Totem Task')
                    ->content($notifiable->description.' just finished running.');
            });
    }
    */
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
    /*
     * Get the Slack representation of the notification.
     *
     * public function toSlack(mixed $notifiable): SlackMessage
     * {
     * return (new SlackMessage())
     * ->content(config('app.name'))
     * ->attachment(function (SlackAttachment $attachment) use ($notifiable) {
     * $attachment
     * ->title('Totem Task')
     * ->content($notifiable->description.' just finished running.');
     * });
     * }
     */
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
}
