<?php

namespace App\Http\Controllers;

use App\Models\Dues;
use App\Models\Student;
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
        $fetch_dues = Dues::all()->first();
        return view('pages.dues_payment.index', compact('fetch_dues'));
    }

    public function get_noticeboard()
    {
        return view('pages.noticeboard.index');
    }

    public function get_bio_data()
    {
        $my_data = Student::all()->where('index_number',auth()->user()->index_number)->first();
//        dd($my_data->index_number);
       return view('pages.student.index', compact('my_data'));
    }
}
