<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function chicken()
    {
        return view('Chickenhut');
    }
    public function raj()
    {
        return view('Rajdarbar');
    }
    public function burger()
    {
        return view('Burger');
    }
    public function ice()
    {
        return view('Ice');
    }
    public function mex()
    {
        return view('Mexicano');
    }
    public function fish()
    {
        return view('Fish');
    }
}
