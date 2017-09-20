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