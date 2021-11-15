<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\OTP;
use App\Models\OTPPhone;
use App\Models\Transaction;
use App\Models\Rating;
use App\Models\P2PState;
use App\Models\WalletFundingRequest;
use App\Mail\OTPMail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;
use Twilio\Rest\Client;
use Illuminate\Support\Facades\Http;
use DateTime;

class RateController extends Controller
{
    public function addforeignuserrate(Request $request)
    {
       
        //We check if user has a pending offer first
        $offer_exists = Transaction::where('fu_id', auth()->user()->user_id)->where('is_taken', 0)->first();

        if($offer_exists == null)
        {
            $check_virtual_account_record = true;

            if($check_virtual_account_record)
            {
                $transaction_id = 'TX'.time();
                $transaction = new Transaction();
                $transaction->transaction_id = $transaction_id;
                $transaction->fu_id = auth()->user()->user_id;
                $transaction->rate = $request->rate;
                $transaction->amount = $request->max_amount;
                $transaction->payment_type = $request->payment_type;
                $inserted = $transaction->save();

                $data3 = [
                    'rate' => $request->rate,
                    'min_amount' => $request->min_amount,
                    'max_amount' => $request->max_amount,
                ];
    
                $updated3 = User::where('user_id', auth()->user()->user_id)->update($data3);

                return redirect('/dashboard/p2p/foreign/3')->with('success_body', 'Your rate has been added/updated successfully');
            }
            else
            {
                return response()->json(['check_virtual_account_record' => false]);
            }

            return response()->json(['check_virtual_account_record' => true]);
        }
        else
        {
           

            $data2 = [
                'rate' => $request->rate,
                'amount' => $request->max_amount,
            ];

            $updated2 = Transaction::where('fu_id', auth()->user()->user_id)->where('is_taken', 0)->update($data2);


            $data3 = [
                'rate' => $request->rate,
                'min_amount' => $request->min_amount,
                'max_amount' => $request->max_amount,
            ];

            $updated3 = User::where('user_id', auth()->user()->user_id)->update($data3);


            return redirect('/dashboard/p2p/foreign/3')->with('success_body', 'Your rate has been added/updated successfully');

        }
                
    }

    public function luupdaterate(Request $request)
    {
        $data = [
            'rate' => $request->rate,
            'amount' => $request->amount
        ];

        $updated = Transaction::where('is_taken', 0)->where('lu_id', auth()->user()->user_id)->update($data);

        if($updated > 0)
        {
            return back()->with('success', 'Rate updated successfully');
        }
        else
        {
            return back()->with('error', 'Error occurred! Refresh page and try again');
        }
    }

}
