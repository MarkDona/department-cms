<?php

namespace App\Http\Controllers;

use App\Models\Dues;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

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

    public function update_biodata(Request $request)
    {
        $this->validate($request,[
            'title' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'contact' => 'required',
            'place_of_residence' => 'required',
        ]);

        $user_index = User::all()->where('id',auth()->id())->first();
        $student_id = Student::all()->where('index_number',$user_index->index_number)->first();
//        dd($student_id->id);

//dd($user_index->index_number);
        $update_profile = Student::find($student_id->id);
        $update_profile->title = $request->title;
        $update_profile->firstname = $request->firstname;
        $update_profile->lastname = $request->lastname;
        $update_profile->email = $request->email;
        $update_profile->contact = $request->contact;
        $update_profile->place_of_residence = $request->place_of_residence;
        $update_profile->gender = $request->gender;
        $update_profile->middle_name = $request->middle_name;
        $update_profile->update();

        if ($update_profile->update()){
            return response()->json(['status' => 201, 'message' => 'Profile Updated Successfully']);
        }
        return false;
    }

    public function staff_directory()
    {
        $staffs = Http::get('https://directory.htu.edu.gh/compsci');
        dd($staffs);
        return view('pages.staff.index', compact('staffs'));
    }

}
