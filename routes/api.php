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
| Auth Routes
|--------------------------------------------------------------------------
|
| Routes related to authenticating a user
|
*/
Route::prefix('v1/user')->group(function () {
    Route::post('register', 'Auth\RegisterController@register')->name('api.register');
    Route::post('login', 'Auth\LoginController@login')->name('api.login');
    ROute::post('logout', 'Auth\LoginController@logout')->name('api.logout');
});
