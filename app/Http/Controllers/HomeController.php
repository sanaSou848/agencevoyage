<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Local;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*public function __construct()
    {
        $this->middleware('auth');
    }*/

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $locals = Local::all();
        
        return view('Client.index',compact('locals',$locals));
    }
}
