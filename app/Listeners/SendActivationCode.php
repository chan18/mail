<?php

namespace App\Listeners;

use App\Events\UserRegisteredEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

use Log;

class SendActivationCode
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  UserRegisteredEvent  $event
     * @return void
     */
    public function handle(UserRegisteredEvent $event)
    {
        \Log::info('activation', ['user' => $event->user]);

        \Mail::send('welcome',['data'=> $event->user],function ($message) {
            $message->from('me@mail.com','Chandra kanth');
            $message->to('chandu-43f79b@inbox.mailtrap.io');
        });
    }
}
