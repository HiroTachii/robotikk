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
    return "Dashboard.";
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
$this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
$this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
$this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
$this->get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');

Route::get('/me', 'HomeController@index')->name('dashboard');

Route::prefix('api/v1/user')->group(function () {
    Route::post('/register', 'Auth\RegisterController@register')->name('api.register');
    Route::post('/login', 'Auth\LoginController@doLogin')->name('api.login');
    Route::post('/logout', 'Auth\LoginController@logout')->name('api.logout');
    Route::post('/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('api.email');
    Route::post('/reset', 'Auth\ResetPasswordController@reset')->name('api.reset');
});
