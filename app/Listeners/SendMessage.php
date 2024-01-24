<?php

namespace App\Listeners;

use App\Events\ProjectCreated;
use App\Mail\MyMailSend;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMessage
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(ProjectCreated $event): void
    {
        Mail::to('kolomoher@gmail.com')->send(new MyMailSend()); // send email
    }
}
