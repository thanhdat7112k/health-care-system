<?php

namespace App\Events;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class ScheduleCreatedEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $schedule;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($schedule)
    {
        $this->schedule = $schedule;
    }
}
