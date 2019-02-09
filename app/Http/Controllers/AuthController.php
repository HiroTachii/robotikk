<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class AuthController extends Controller
{

    use AuthenticatesUsers;

    public $redirectTo = '/user/me';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

}
