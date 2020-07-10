<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::resource('users','UserController');

Route::group([
    'prefix' => 'users',
], function() {
    Route::post('{user}/profile-picture', 'UserController@profilePicture');
});