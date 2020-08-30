<?php

namespace App\Api;

use App\Models\Device;
use App\Models\User;

class AppCenter extends HttpClient
{
    public function __construct()
    {
        $url = config('appcenter.url');
        $owner_name = config('appcenter.owner_name');

        $base_uri = "{$url}/v0.1/apps/{$owner_name}";

        $headers = [
            'X-API-Token' => config('appcenter.api_token')
        ];

        parent::__construct($base_uri, $headers);
    }

    public function sendPushNotification($lang, $title, $body)
    {
        $platforms = ['ios', 'android'];
        $geralResponse = null;

        foreach ($platforms as $platform) {

            if ($platform === 'android') {
                $app_name = config('appcenter.app_name_android');
            } else if ($platform === 'ios') {
                $app_name = config('appcenter.app_name_ios');
            } else {
                throw new \Exception('Invalid Platform');
            }

            /*$devices = [
                "807292bb-0f5d-4e80-b4cc-a07f31378aba", // Maurício (IOS)
                "4fa857af-94d2-4cea-98fe-aae9c044373f" // Larissa (Android)
            ];*/

            $devices = Device::
            where('platform', $platform)
                //->where('locale', $lang)
                ->pluck('device_id')->toArray();
            $limit = 100;

            if (count($devices) > $limit) {
                $result = null;

                foreach (array_chunk($devices, $limit) as $item) {
                    $data = [
                        "notification_target" => [
                            "type" => "devices_target",
                            "devices" => $item
                        ],
                        "notification_content" => [
                            "name" => $title,
                            "title" => $title,
                            "body" => $body
                        ]
                    ];

                    $response = $this->post("{$app_name}/push/notifications", $data);

                    if ($response) {
                        $result = $response;
                    }
                }

                $geralResponse = $result;
            }

            $data = [
                "notification_target" => [
                    "type" => "devices_target",
                    "devices" => $devices
                ],
                "notification_content" => [
                    "name" => $title,
                    "title" => $title,
                    "body" => $body
                ]
            ];

            $response = $this->post("{$app_name}/push/notifications", $data);

            if ($response) {
                $geralResponse = $response;
            }
        }

        return $geralResponse;
    }

    public function sendPushNotificationForUser(User $user, $title, $body, $lang = 'pt')
    {
        $platforms = ['ios', 'android'];

        foreach ($platforms as $platform) {
            if ($platform === 'android') {
                $app_name = config('appcenter.app_name_android');
            } else if ($platform === 'ios') {
                $app_name = config('appcenter.app_name_ios');
            } else {
                throw new \Exception('Invalid Platform');
            }

            $devices = $user->devices()
                ->where('platform', $platform)
                ->pluck('device_id')->toArray();

            if (count($devices) > 0) {
                $limit = 100;

                if (count($devices) > $limit) {
                    foreach (array_chunk($devices, $limit) as $item) {
                        $data = [
                            "notification_target" => [
                                "type" => "devices_target",
                                "devices" => $item
                            ],
                            "notification_content" => [
                                "name" => $title,
                                "title" => $title,
                                "body" => $body
                            ]
                        ];

                        $this->post("{$app_name}/push/notifications", $data);
                    }
                    return true;
                }

                $data = [
                    "notification_target" => [
                        "type" => "devices_target",
                        "devices" => $devices
                    ],
                    "notification_content" => [
                        "name" => $title,
                        "title" => $title,
                        "body" => $body
                    ]
                ];

                return $this->post("{$app_name}/push/notifications", $data);
            }
        }
    }

    public function getPushNotifications($platform)
    {
        if ($platform == 'android') {
            $app_name = config('appcenter.app_name_android');
        } else if ($platform === 'ios') {
            $app_name = config('appcenter.app_name_ios');
        } else {
            throw new \Exception('Invalid Platform');
        }

        $response = $this->get("{$app_name}/push/notifications");

        if ($response) {
            return $response;
        }

        return null;
    }
}
