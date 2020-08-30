<?php

namespace App\Notifications\Insterfaces;

interface PushNotificationInterface
{
    public function toPush($notifiable);
}
