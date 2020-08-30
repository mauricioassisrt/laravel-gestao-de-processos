<?php

namespace App\Observers;

use App\Models\Notification;

class NotificationObserver
{
    public function created(Notification $model)
    {
        $api = new \App\Api\AppCenter();
        $response = $api->sendPushNotification($model->locale, $model->title, $model->description);

        if ($response && $response->notification_id) {
            $model->notification_id = $response->notification_id;
            $model->status_id = Notification::STATUS_SENT_APP_CENTER;
            flash()->success('Notificação enviada para AppCenter');
        } else {
            $model->status_id = Notification::STATUS_ERROR_TO_SENT_APP_CENTER;
            flash()->error('Ocorreu algum erro ao enviar notificação para AppCenter');
        }

        $model->save();
    }
}
