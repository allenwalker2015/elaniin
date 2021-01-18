<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['prefix' => 'auth'], function () {
    Route::post('login', 'AuthController@login');
    Route::post('signup', 'AuthController@signUp');
    Route::group(['middleware' => 'auth:api'], function () {
        Route::get('logout', 'AuthController@logout');
        Route::get('user', 'AuthController@user');
    });
});

Route::group(['prefix' => 'product', 'middleware' => 'auth:api'], function () {
    Route::get('list', 'ProductsController@list');
    Route::post('/store', 'ProductsController@create');
    Route::get('/{product}', 'ProductsController@read');
    Route::post('/{product}', 'ProductsController@update');
    Route::delete('/{product}', 'ProductsController@delete');
});

Route::group(['prefix' => 'user', 'middleware' => 'auth:api'], function () {
    Route::get('list', 'UsersController@list');
    Route::post('/store', 'UsersController@create');
    Route::get('/{user}', 'UsersController@read');
    Route::post('/{user}', 'UsersController@update');
    Route::delete('/{user}', 'UsersController@delete');
});

Route::group(['prefix' => 'password'], function () {
    Route::post('sendResetMail', 'ForgotPasswordController@sendResetEmail');
    Route::get('passReset', 'ForgotPasswordController@resetForm')->name('password.reset');
    Route::post('resetPassword', 'ForgotPasswordController@resetPassword');
});
