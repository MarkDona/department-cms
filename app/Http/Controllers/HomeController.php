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
        return view('home');
    }

    public function get_duespayments()
    {
        return view('pages.dues_payment.index');
    }

    public function get_noticeboard()
    {
        return view('pages.noticeboard.index');
    }

    public function get_bio_data()
    {
       return view('pages.student.index');
    }
}
