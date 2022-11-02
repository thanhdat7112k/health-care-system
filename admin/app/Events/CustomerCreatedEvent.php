<?php

namespace App\Events;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class CustomerCreatedEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $customer;
    public $password;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($customer, $password)
    {
        $this->customer = $customer;
        $this->password = $password;
    }
}
