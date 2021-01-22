<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class P1C2Controller extends Controller
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
        return view('p1c2');
    }
}