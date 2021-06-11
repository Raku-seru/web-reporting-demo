<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
Use App\Report;

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
        If(Auth::check() && Auth::user()->is_admin) {
            $report = Report::all();
            return view('adminhome', compact('report'));
        } else {
            $report = Report::where( 'user_id' == Auth::id() );
            return view('home', compact('report'));
        }
        
    }
}
