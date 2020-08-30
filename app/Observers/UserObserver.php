<?php

namespace App\Observers;

use App\Mail\UserCreatedMail;
use App\Models\User;
use Illuminate\Support\Facades\Mail;

class UserObserver
{
    public function created(User $model)
    {
        $mail = new UserCreatedMail($model);
        $mail->to($model->email);
        Mail::send($mail);
    }
}
