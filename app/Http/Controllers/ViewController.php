<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{

    public function home()
    {
        return view('home');
    }

    public function login()
    {
        return view('user.login');
    }

    public function logout()
    {
        return view('user.logout');
    }

    public function discord()
    {
        return redirect('https://discord.gg/cXNynzh');
    }

}
