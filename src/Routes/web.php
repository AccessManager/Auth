<?php

Route::group([
    'namespace'     =>  'AccessManager\Auth\Http\Controllers',
], function(){

    Route::get('login', [
        'as'    =>  'login',
        'uses'  =>  'LoginController@getLogin',
    ]);

    Route::post('login', [
        'as'    =>  'login.post',
        'uses'  =>  'LoginController@postLogin',
    ]);

    Route::get('logout', [
        'as'    =>  'logout',
        'uses'  =>  'LoginController@getLogout',
    ]);
});

Route::group([
    'namespace'     =>  'AccessManager\Auth\Http\Controllers',
    'prefix'        =>  'system',
    'middleware'    =>  'auth',
], function(){

    Route::get('change-password', [
        'as'    =>  'system.change-password',
        'uses'  =>  'PasswordResetController@getChangePassword',
    ]);

    Route::post('change-password', [
        'as'    =>  'system.change-password.post',
        'uses'  =>  'PasswordResetController@postChangePassword',
    ]);
});