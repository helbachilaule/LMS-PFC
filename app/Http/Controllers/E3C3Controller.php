<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class E3C3Controller extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('e3c3');
    }
}