<?php

namespace App\Http\Controllers;

use App\Models\ActivityLogs;
use App\Models\DuesPayment;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DuesPaymentController extends Controller
{

    //    verify payStack payments
    public function verify($reference)
    {

        ActivityLogs::create([
            'user_id' => auth()->id(),
            'user_name' => auth()->user()->index_number,
            'description' => 'Paid dues successfully',
            'time' => Carbon::now(),
        ]);


        $SECRET_KEY = env('SECRET_KEY');

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.paystack.co/transaction/verify/$reference",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "Authorization: Bearer $SECRET_KEY",
                "Cache-Control: no-cache",
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            $response = json_decode($response);
            $phone = auth()->user()->contact;
            $smsinvoice = 'CS-DMS#'.mt_rand(10, 1000000);

            DuesPayment::create([
                'dues_id' => $response->data->metadata->csdms->dues_index,
                'invoice_number' => $smsinvoice,
                'type_of_payment' => $response->data->channel,
                'student_id' => $response->data->metadata->csdms->user_id,
                'phone_number' => $response->data->metadata->csdms->phone_number,
                'reference_number' => $response->data->reference,
                'dues_for_level' => $response->data->metadata->csdms->dues_year,
                'amount' => ($response->data->amount / 100)
            ]);

            $message = 'Dear ' . auth()->user()->name .
                ', \nYou have successfully paid your departmental dues for the  '.$response->data->metadata->csdms->dues_year.
            ' academic year';
            SMSController::sendSMS($phone, $message);

            return response()->json(['status' => 'success', 'message' => 'Payment made successfully!']);
        }

        return false;
    }
}
