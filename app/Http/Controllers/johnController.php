<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class johnController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
 /*   public function __construct()  //login required
    {
        $this->middleware('auth');
    } */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('john');
    }
}
