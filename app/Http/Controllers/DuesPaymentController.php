<?php

namespace App\Http\Controllers;

use App\Models\DuesPayment;
use Illuminate\Http\Request;

class DuesPaymentController extends Controller
{

    //    verify payStack payments
    public function verify($reference)
    {
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
                'user_id' => auth()->id(),
                'invoice_number' => $smsinvoice,
                'type_of_payment' => $response->data->channel,
                'phone_number' => $response->data->metadata->birth->contact,
                'reference_number' => $response->data->reference,
                'status' => "SUCCESSFUL",
                'used' => "NOT USED",
                'amount' => ($response->data->amount / 100),
                'paid_by' => auth()->user()->name
            ]);

            $message = 'Dear ' . auth()->user()->name .
                ', \nYou have bought a voucher for birth certificate registration. Your Voucher number is '
                . $smsinvoice . '.
You can log into the WBBRS portal to complete your birth certificate registration.
WBBRS we serve you better';
            SMSController::sendSMS($phone, $message);

            return response()->json(['status' => 'success', 'message' => 'Payment made successfully!']);
        }

        return false;
    }
}
