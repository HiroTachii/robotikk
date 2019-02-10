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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Routes related to authenticating a user
|
*/

Route::group(['middleware' => ['web']], function () {
    Route::prefix('/v1/user')->group(function () {
        Route::post('/register', 'Auth\RegisterController@register')->name('api.register');
        Route::post('/login', 'Auth\LoginController@login')->name('api.login');
        Route::post('/logout', 'Auth\LoginController@logout')->name('api.logout');
        Route::post('/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('api.email');
        Route::post('/reset', 'Auth\ResetPasswordController@reset')->name('api.reset');
    });
});
