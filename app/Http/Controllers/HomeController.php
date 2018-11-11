<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modules;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    public function modules()
    {
        $modules = modules::all();
        return view('modules.index');
    }
    public function maps(){
        return view("mapas.index");
    }
}
