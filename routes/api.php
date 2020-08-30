<?php

Route::group(['namespace' => 'Api'], function () {

    Route::name('login')->post('login', 'Auth\AuthController@login');
    Route::name('refresh')->post('refresh', 'Auth\AuthController@refresh');
    Route::name('register')->post('register', 'Auth\AuthController@register');
    Route::post('forgot/password', 'Auth\ForgotPasswordController')->name('forgot.password');

    Route::post('contact-form', 'ContactFormController@store');
    Route::resource('terms', 'TermController', ['only' => ['index', 'show']]);

    // ROTAS AUTENTICADAS
    Route::group(['middleware' => ['auth:api']], function () {
        Route::name('logout')->post('logout', 'Auth\AuthController@logout');
        Route::name('me')->get('me', 'Auth\AuthController@me');
        Route::name('me.update')->post('me/update', 'Auth\AuthController@update');

        Route::resource('devices', 'DeviceController', ['only' => ['store']]);
    });
});
