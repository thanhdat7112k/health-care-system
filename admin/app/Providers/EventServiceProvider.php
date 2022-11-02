<?php

namespace App\Providers;

use App\Events\CustomerRegisteredEvent;
use App\Events\ScheduleCreatedEvent;
use App\Listeners\CustomerRegisteredListener;
use App\Listeners\ScheduleCreatedListener;
use App\Events\CustomerCreatedEvent;
use App\Listeners\CustomerCreatedListener;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        ScheduleCreatedEvent::class => [
            ScheduleCreatedListener::class,
        ],
        CustomerCreatedEvent::class => [
            CustomerCreatedListener::class,
        ],
        CustomerRegisteredEvent::class => [
            CustomerRegisteredListener::class,
        ]
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
