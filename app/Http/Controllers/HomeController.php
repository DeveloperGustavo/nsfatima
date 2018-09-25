<?php

namespace App\Http\Controllers;

use App\People;
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $people = People::orderBy('nome')->paginate(5);
        return view('home')
            ->with('people', $people);
    }

}
