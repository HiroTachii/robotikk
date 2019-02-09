<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{


    /**
     * DashboardController constructor. Requires user to be logged in
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public $redirectTo = '/login';

    /**
     * Display the dashboard
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function home()
    {
        return view('user.me');
    }

}
