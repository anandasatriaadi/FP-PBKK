<?php

namespace App\Listeners;

use App\Events\Reservation;
use App\Mail\Reservation as MailReservation;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendMailReservation
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
     * @param  \App\Events\Reservation  $event
     * @return void
     */
    public function handle(Reservation $event)
    {
        $userInfo = $event->user;
        $reservationInfo = $event->reservation;
        
        $recipients = [$userInfo->email, $reservationInfo->email];
        // dd($userInfo->email, $reservationInfo->email);
        foreach ($recipients as $recipient) {
            Mail::to($recipient)->send(new MailReservation);
        }
    }
}
