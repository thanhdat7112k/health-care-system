<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ScheduleDoneMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $schedule;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($schedule)
    {
        $this->schedule = $schedule;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.schedules.done')
                    ->with([
                        'schedule' => $this->schedule
                    ]);
    }
}
