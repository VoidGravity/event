<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ticket extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     * 
     */

    public $userid;
    public $eventid;
    public $ReservationId;
    public function __construct($userid, $eventid, $ReservationId)
    {
        $this->userid = $userid;
        $this->eventid = $eventid;
        $this->ReservationId = $ReservationId;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Ticket')
            ->view('front.ticket')->with([
                'userid' => $this->userid,
                'eventid' => $this->eventid,
                'ReservationId' => $this->ReservationId,
            ]);
    }
}
