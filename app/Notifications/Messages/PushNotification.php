<?php

namespace App\Notifications\Messages;

use App\Api\AppCenter;
use App\Models\User;

class PushNotification implements PushNotificationMessageInterface
{
    protected $title;
    protected $body;
    /**
     * @var User
     */
    private $user;
    private $appCenterApi;

    public function __construct(User $user)
    {
        $this->user = $user;
        $this->appCenterApi = new AppCenter();
    }

    public function title(string $title) : PushNotificationMessageInterface
    {
        $this->title = $title;
        return $this;
    }

    public function body(string $body) : PushNotificationMessageInterface
    {
        $this->body = $body;
        return $this;
    }

    public function send()
    {
        return $this->appCenterApi->sendPushNotificationForUser($this->user, $this->title, $this->body);
    }
}
