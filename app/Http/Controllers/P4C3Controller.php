<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class P4C3Controller extends Controller
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
        return view('p4c3');
    }
}