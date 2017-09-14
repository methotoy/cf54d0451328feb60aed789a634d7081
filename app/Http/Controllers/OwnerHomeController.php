<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OwnerHomeController extends Controller
{
	/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('owner');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	return view("owner.home");
    }
}
