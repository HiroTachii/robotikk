<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'ViewController@home')->name('home');
Route::get('/github', 'ViewController@github')->name('github');
Route::get('/discord', 'ViewController@discord')->name('discord');

Route::get('/me', function () {
    return "hey";
});
/*
|--------------------------------------------------------------------------
| Auth Routes
|--------------------------------------------------------------------------
|
| Here are all the routes associated with authenticating
|
| All the form submission routes can be found inside the api routes
| file.
|
*/
Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::get('/reset', 'ViewController@reset')->name('reset');
Route::get('/reset/{token}', 'AuthController@verify');

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Routes related to authenticating a user
|
*/

Route::prefix('api/v1/user')->group(function () {
    Route::post('register', 'Auth\RegisterController@register')->name('api.register');
    Route::post('login', 'Auth\LoginController@login')->name('api.login');
    ROute::post('logout', 'Auth\LoginController@logout')->name('api.logout');
});
