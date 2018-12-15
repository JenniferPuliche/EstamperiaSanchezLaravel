<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cookie;

class HomeController extends Controller
{


    // public function switchMode()
    // {
    //     Cookie::queue('CookieMode', 'dark', 60);
    //     return 'dark';
    // }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.home');
    }
}
