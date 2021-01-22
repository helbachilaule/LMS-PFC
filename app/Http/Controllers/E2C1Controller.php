<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class E2C1Controller extends Controller
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
        return view('e2c1');
    }
}