<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Verified;
use Illuminate\Contracts\Auth\MustVerifyEmail;

class SendEmailConfirmationNotification
{
    /**
     * Handle the event.
     *
     * @param  \Illuminate\Auth\Events\Registered  $event
     * @return void
     */
    public function handle(Verified $event)
    {
        if ($event->user instanceof MustVerifyEmail && $event->user->hasVerifiedEmail()) {
            $event->user->sendEmailConfirmationNotification();
        }
    }
}
