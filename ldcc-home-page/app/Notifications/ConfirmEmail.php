<?php

namespace App\Notifications;

use Illuminate\Support\Facades\Lang;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class ConfirmEmail extends Notification
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
            ->subject(Lang::getFromJson('Membership registration is complete.'))
            ->line(Lang::getFromJson('Thank you for registering.'))
            ->line(Lang::getFromJson('We will contact you as your registration has been completed.'))
            ->line(Lang::getFromJson('Please feel free to contact us.'))
            ->line(Lang::getFromJson(''))
            ->line(Lang::getFromJson(route('home')))
            ->line(Lang::getFromJson(''))
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
}