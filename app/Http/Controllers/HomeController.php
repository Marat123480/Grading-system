<?php

namespace App\Http\Controllers;

use App\Lecture;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
$slug = Str::slug('Laravel 5 Framework', '-');
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
        $lectures = Lecture::all()->sortBy("title");

        return view('lecture', ['lectures' => $lectures]);
    }
}
