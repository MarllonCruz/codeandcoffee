<?php

namespace App\Console\Commands;

use App\Notifications\NotificationSlack as Slack;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Notification;

class NotificationSlack extends Command
{
    protected $signature = 'slack:notification';

    protected $description = 'Command description';

    // public function __construct(private readonly Slack $slack)
    // {
    // }

    public function handle(): void
    {
        Notification::route('slack', config('notifications.slack.channels.notification'))
            ->notify(new Slack());
        
        dd('Success...');
    }
}
