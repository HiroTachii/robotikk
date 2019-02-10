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
