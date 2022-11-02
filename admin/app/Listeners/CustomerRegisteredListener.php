<?php

namespace App\Listeners;

use App\Mail\RegisterCustomerMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class CustomerRegisteredListener implements ShouldQueue
{
    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        Mail::to($event->customer->email)->send(new RegisterCustomerMail($event->customer));
    }
}
