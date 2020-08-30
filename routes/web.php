<?php

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/home', function () {
    return redirect()->route('home');
});

Auth::routes(['register' => false]);

Route::group([
    'prefix' => 'admin',
    'as' => 'admin.',
    'namespace' => 'Admin',
    'middleware' => ['auth', 'auth.checkrole:'.\App\Models\Role::ADMIN]
], function () {

    Route::get('', 'HomeController@index')->name('index');
    Route::post('', 'HomeController@index')->name('graphicPerformace');

    Route::get('devices/datatable', 'DeviceController@datatable')->name('devices.datatable');
    Route::resource('devices', 'DeviceController');

    Route::resource('terms', 'TermsController');

    Route::get('users/datatable', 'UserController@datatable')->name('users.datatable');
    Route::resource('users', 'UserController');

    Route::get('clients/datatable', 'ClientController@datatable')->name('clients.datatable');
    Route::resource('clients', 'ClientController');

    Route::get('employees/datatable', 'EmployeeController@datatable')->name('employees.datatable');
    Route::resource('employees', 'EmployeeController');

    Route::get('notifications/datatable', 'NotificationController@datatable')->name('notifications.datatable');
    Route::resource('notifications', 'NotificationController', ['except' => ['edit', 'update', 'destroy']]);

    Route::resource('oauth_clients', 'OauthClientController');

    Route::get('profile', 'ProfileController@edit')->name('profile.edit');
    Route::post('profile', 'ProfileController@update')->name('profile.update');
});
