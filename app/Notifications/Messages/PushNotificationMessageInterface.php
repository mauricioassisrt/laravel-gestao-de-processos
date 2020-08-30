<?php

namespace App\Notifications\Messages;

use App\Models\User;

interface PushNotificationMessageInterface
{
    public function __construct(User $user);
    public function title(string $title) : PushNotificationMessageInterface;
    public function body(string $body) : PushNotificationMessageInterface;
    public function send();
}
