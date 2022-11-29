<?php

namespace App\Notifications;

use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Lang;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class VerifyEmail extends Notification
{
    /**
     * Get the notification's channels.
     *
     * @param  mixed  $notifiable
     * @return array|string
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Build the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject(Lang::getFromJson('Verify Email Address.'))
            ->line(Lang::getFromJson('Thank you for registering.'))
            ->line(Lang::getFromJson('Please access the following URL and complete this registration.'))
            ->action(
                Lang::getFromJson('Click to verify account.'),
                $this->verificationUrl($notifiable)
            )
//            ->line(Lang::getFromJson('Please paste and access URL on the web browser.'))
            ->line(Lang::getFromJson('If you do not remember the content of this email.'))
            ->line(Lang::getFromJson('You can discard this email without doing anything.'))
            ->line(Lang::getFromJson('=================================='))
            ->line(Lang::getFromJson(''))
            ->line(Lang::getFromJson('【発行元】'))
            ->line(Lang::getFromJson(''))
            ->line(Lang::getFromJson('BecenteGate（ビセンテゲート）'))
            ->line(Lang::getFromJson(''))
            ->line(Lang::getFromJson('【お問い合わせ】'))
            ->line(Lang::getFromJson(''))
            ->line(Lang::getFromJson(route('contact')))
            ->line(Lang::getFromJson(''))
            ->line(Lang::getFromJson('=================================='));
    }

    /**
     * Get the verification URL for the given notifiable.
     *
     * @param  mixed  $notifiable
     * @return string
     */
    protected function verificationUrl($notifiable)
    {
        return URL::temporarySignedRoute(
            'verification.verify', Carbon::now()->addMinutes(60), ['id' => $notifiable->getKey()]
        );
    }
}