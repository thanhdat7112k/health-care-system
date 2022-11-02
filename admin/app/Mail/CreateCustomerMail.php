<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CreateCustomerMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $customer;
    protected $password;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($customer, $password)
    {
        $this->customer = $customer;
        $this->password = $password;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.customers.created')
                    ->with([
                        'customer' => $this->customer,
                        'password' => $this->password,
                    ]);
    }
}
