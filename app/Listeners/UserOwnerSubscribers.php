<?php

namespace App\Listeners;

use App\Events\UserSubscribers;
use App\Mail\UserSubscribedMessage;
use Illuminate\Support\Facades\DB;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;

class UserOwnerSubscribers
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
     * @param  object  $event
     * @return void
     */
    public function handle( UserSubscribers $event)
    {
        DB::table('newsletters')->insert([
            'email' => $event->email
        ]);
        
        Mail::to($event->email)->send(new UserSubscribedMessage($event));
    }
}
