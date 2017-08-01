<?php

Route::group([
    'namespace'     =>  'AccessManager\Auth\Http\Controllers',
], function(){

    Route::get('login', [
        'as'    =>  'login.get',
        'uses'  =>  'LoginController@getLogin',
    ]);

    Route::post('login', [
        'as'    =>  'login.post',
        'uses'  =>  'LoginController@postLogin',
    ]);
    
});