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
        // if user is admin direct to admin dashboard
        if (auth()->user()->hasRole('admin')) {
            return redirect()->route('admin.parts.index');
        }
        else {
            return redirect()->route('builder');
        }

        // return view('home');
    }
}
