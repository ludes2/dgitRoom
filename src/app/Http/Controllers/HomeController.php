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
        $viewData = $this->loadViewData();
        return view('home', $viewData);
    }

    public function welcome()
    {
        $viewData = $this->loadViewData();
        return view('welcome', $viewData);
    }


}