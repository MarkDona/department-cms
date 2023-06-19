<?php

namespace App\Http\Controllers;

use App\Models\Dues;
use App\Models\DuesPayment;
use App\Models\NoticeBoard;
use App\Models\Student;
use App\Models\User;
use Carbon\Carbon;
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
        $fetch_trans = DuesPayment::all()->where('student_id', auth()->user()->index_number);
        return view('pages.dues_payment.index', compact('fetch_dues','fetch_trans'));
    }

    public function get_noticeboard()
    {
        $get_notices = NoticeBoard::all()->where('end_date','>',Carbon::today());
//        dd($get_notices);
        return view('pages.noticeboard.index', compact('get_notices'));
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
//        $data['departments'] = [];
//
//        $data['department_staff'] = CURLOPT_URL([], "https://erp.htu.edu.gh/hr/api/staff_directory/department_staff?d=dept-ict", "GET");
//        if (gettype($data['department_staff']) == "string") {
//            $data['department_staff'] = [];
//        }
//        dd($data['department_staff']);

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://erp.htu.edu.gh/hr/api/staff_directory/department_staff?d=dept-compsci",// your preferred link
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_TIMEOUT => 30000,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                // Set Here Your Requesred Headers
                'Content-Type: application/json',
            ),
        ));
        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {

            $vandek= (json_decode($response));
//            dd($vandek);

        }

//        dd($jsonData);
//            'https://directory.htu.edu.gh/compsci';

        $research_gate = 'https://www.researchgate.net/profile/';
        $staffs = $vandek;

        return view('pages.staff.index', compact('staffs','research_gate'));
    }

}
