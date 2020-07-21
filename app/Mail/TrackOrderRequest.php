<?php

namespace App\Mail;

use App\TrackOrder;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TrackOrderRequest extends Mailable
{
    use Queueable, SerializesModels;
    public $trackorder;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(TrackOrder $trackorder)
    {
        $this->trackorder = $trackorder;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mail.admin.track-request');
    }
}
