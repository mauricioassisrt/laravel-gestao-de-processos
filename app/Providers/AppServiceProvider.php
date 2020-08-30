<?php

namespace App\Providers;

use App\Models\Notification;
use App\Models\User;
use App\Observers\NotificationObserver;
use App\Observers\UserObserver;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        //
        Notification::observe(NotificationObserver::class);
        User::observe(UserObserver::class);
        Schema::defaultStringLength(191);
    }

    public function register()
    {
        //
    }
}
