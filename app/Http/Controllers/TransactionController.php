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
use App\Notifications\PaymentConfirmed;
use App\Notifications\PhoneVerified;
use App\Notifications\AccountVerifying;
use Illuminate\Support\Facades\Notification;

class TransactionController extends Controller
{

    public function futradetransaction(Request $request)
    {
     
        //return $request->all();
        $validator = Validator::make($request->all(), [
            'transaction_id' => 'required',
        ]);

        if ($validator->fails()) 
        {
            return back()->with('error', 'Error occurred! Refresh page and try again');
        }

        $transaction = Transaction::where('transaction_id', $request->transaction_id)->first();

        if(!empty($transaction))
        {
            
            $data = [
                    
                    'fu_id' => auth()->user()->user_id,
                    'is_taken' => 1,
         
                ];

            $updated = Transaction::where('transaction_id', $request->transaction_id)->update($data);

            if($updated > 0)
            {
                return redirect('/dashboard/transaction/'.$request->transaction_id.'/details')->with('success', 'Transaction accepted successfully');
            }
            else
            {
                return back()->with('error', 'Error occurred! Refresh page and try again');
            }

        }
        else
        {
            return back()->with('error', 'Error occurred! Refresh page and try again');
        }
    }

    public function updatefutransactionstatustoongoing(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'transaction_id' => 'required',
        ]);

        if ($validator->fails()) 
        {
            return back()->with('error', 'Error occurred! Refresh page and try again');
        }

        $data = [
            'status' => 1,
        ];

        $updated = Transaction::where('transaction_id', $request->transaction_id)->update($data);

        if($updated > 0)
        {
            return back()->with('success', 'Transaction status updated successfully');
        }
        else
        {
            return back()->with('error', 'Error occurred! Refresh page and try again');
        }
    }


      public function updatefutransactionstatus2(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'transaction_id' => 'required',
        ]);

        if ($validator->fails()) 
        {
            return back()->with('error', 'Error occurred! Refresh page and try again');
        }

        $data = [
            'status' => 2,
        ];

        $updated = Transaction::where('transaction_id', $request->transaction_id)->update($data);

        if($updated > 0)
        {
            return back()->with('success', 'Transaction status has been updated successfully');
        }
        else
        {
            return back()->with('error', 'Error occurred! Refresh page and try again');
        }
    }


    public function uploadreceiptfu(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'receipt' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'transaction_id' => 'required'
        ]);


        if($validator->fails())
        {
            return back()->with('error', $validator->messages());
        }
       
        if ($request->hasFile('receipt')) 
        {
            $file = $request->file('receipt');
            
            $receiptfileName = time().uniqid().'.'.$request->receipt->extension();
            
            $path = $file->storeAs('uploads/transaction_receipts', $receiptfileName, 's3');
        
            $data = [
                'transaction_receipt' => $receiptfileName
            ];

            $updated = Transaction::where('transaction_id', $request->transaction_id)->update($data);

            if($updated > 0)
            {
                return response()->json(['submitted' => 1]);
            }
            else
            {
                return response()->json(['submitted' => 0]);
            }
        
        }
       
    }

    public function transactioncreatelu(Request $request)
    {
        $offer_id = $request->offer_id;

        $fu_offer = FUOffer::where('offer_id', $offer_id)->first();

        $transaction_id = 'TX'.time();
        $transaction = new Transaction();
        $transaction->transaction_id = $transaction_id;
        $transaction->offer_id = $offer_id;
        $transaction->fu_id = $fu_offer->user_id;
        $transaction->lu_id = auth()->user()->user_id;
        $transaction->rate = $fu_offer->rate;
        $transaction->amount = $request->amount;
        $transaction->fu_rating = $fu_offer->rating;
        $transaction->lu_rating = auth()->user()->rating;
        $transaction->payment_type = $request->payment_type;
        $inserted = $transaction->save();

        $senderEmail = User::where('user_id', $user_id)->select('email')->first();
        $FUsenderEmail = User::where('user_id', '=', $fu_offer->user_id)->get('email');
        
        $senderEmail->notify(new PaymentConfirmed());
        $FUsenderEmail->notify(new PaymentConfirmed());


        return response()->json(['transaction_id' => $transaction_id]);
    }

    public function cardpaylu(Request $request)
    {
       
        //Check a record here that the LU who connected has actually transfered funds to his virtual account. if confirmed, create transaction
        //For let just create the transaction in the database 

        $fu_offer = FUOffer::where('offer_id', $request->offer_id)->first();

        $transaction_id = 'TX'.time();
        $transaction = Transaction::create([
            'transaction_id' => $transaction_id,
            'offer_id' => $request->offer_id,
            'fu_id' => $fu_offer->user_id,
            'lu_id' => auth()->user()->user_id,
            'rate' => $fu_offer->rate,
            'amount' => $request->amount,
            'subject' => $request->subject,
            'website_link' => $request->website,
            'description' => $request->description,
            'payment_type' => 'Bank transfer',
            
        ]);

        if(!empty($transaction))
        {
            return response()->json(['transaction_succeed' => true, 'transaction_id' => $transaction->transaction_id]);
        }
        else
        {
            return response()->json(['transaction_succeed' => false]);
        }
    }


    public function cardpayluinputrate(Request $request)
    {
        
        // At this point here, we need to check if the LU payment was successful or not.
        //Pending when a system for payment will be available, we will just query the LUOffer for a matching record

        //We check if user has a pending offer first
        $offer_exists = Transaction::where('lu_id', auth()->user()->user_id)->where('is_taken', 0)->first();

        if($offer_exists == null)
        {
            $check_virtual_account_record = true;

            if( $check_virtual_account_record)
            {
            
                $transaction_id = 'TX'.time();
                $transaction = new Transaction();
                $transaction->transaction_id = $transaction_id;
                $transaction->lu_id = auth()->user()->user_id;
                $transaction->rate = $request->rate;
                $transaction->amount = $request->amount;
                $transaction->payment_type = $request->payment_type;
                $inserted = $transaction->save();
            }
            else
            {
                return response()->json(['check_virtual_account_record' => false]);
            }

            return response()->json(['check_virtual_account_record' => true]);
        }
        else
        {
            return response()->json(['pending_offer_exists' => true]);
        }
        
    }

    public function banktransferlurate(Request $request)
    {

        // $validator = Validator::make($request->all(), [
        //     'transaction_how_to_doc' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // ]);


        // if($validator->fails())
        // {
        //     return response()->json(['errors' => $validator->messages()], 400);
        // }

        //Check a record here that the LU who connected has actually transfered funds to his virtual account. 
        //If the record exists that means that the Lu has made a valid offer, then we can create his offer

        // $check_virtual_account_record = true;


        //We check if user has a pending offer first
        $offer_exists = Transaction::where('lu_id', auth()->user()->user_id)->where('is_taken', 0)->first();

        if($offer_exists == null)
        {
            
                $transaction_id = 'TX'.time();
                $transaction = new Transaction();
                $transaction->transaction_id = $transaction_id;
                $transaction->lu_id = auth()->user()->user_id;
                $transaction->rate = $request->rate;
                $transaction->amount = $request->amount;
                $transaction->payment_type = 'bank transfer';
                $transaction->subject = $request->subject;
                $transaction->website_link = $request->website_link;
                $transaction->description = $request->description;
                $inserted = $transaction->save();

                if($inserted > 0)
                {
                     // Send Email here to LU //


                     //Notification::send(new PaymentConfirmed()); 


                     // Send Email here to LU //

                    if ($request->hasFile('transaction_how_to_doc')) 
                    {
                    //     $file = $request->file('transaction_how_to_doc');
                            
                    //     $docFileName = time().uniqid().'.'.$request->transaction_how_to_doc->extension();
    
                    //     $file->storeAs('uploads/transaction_how_to_docs', $docFileName, 's3');
    
                    //     $datadoc = [
                    //         'transaction_how_to_doc' =>  $docFileName . '.png',
                    //     ];


                    //    $updated = Transaction::where('transaction_id', $transaction_id)->update($datadoc);

                    }

                    $wfr = new WalletFundingRequest();
                    $wfr->user_id = auth()->user()->user_id;
                    $wfr->transaction_id = $transaction_id;
                    $wfr->account_number = $request->account_number;
                    $inserted2 = $wfr->save();
                    return response()->json(['inserted' => true, 'transaction_id' => $transaction_id]);
                }
                
        }
        else
        {
            $data2 = [
                'rate' => $request->rate,
                'amount' => $request->amount,
            ];
    
            $updated = Transaction::where('is_taken', 0)->where('lu_id', auth()->user()->user_id)->update($data2);

            return response()->json(['pending_offer_exists' => true]);
        }

        
    }

    public function confirmbanktransferconnectlu(Request $request)
    {
        //Check a record here that the LU who connected has actually transfered funds to his virtual account. if confirmed, create transaction
        //For let just create the transaction in the database 


           $data = [
                'lu_id' => auth()->user()->user_id,
                'amount_requested' => $request->amount_requested,
                'subject' => $request->subject,
                'website_link' => $request->website,
                'description' => $request->description,
                'payment_type' => 'Bank transfer',
                
            ];


            $updated = Transaction::where('transaction_id', $request->transaction_id)->update($data);

           


            if($updated > 0)
            {
               // Notification::send(new PaymentConfirmed()); 

                //Create a fresh Transaction for the Foreign User

                $transaction = Transaction::where('transaction_id', $request->transaction_id)->first();

                if($transaction->amount > $request->amount_requested)
                {
                    $amount_new = $transaction->amount - $request->amount_requested;
                    $transaction_id_new = 'TX'.time();

                    $transaction = Transaction::create([
                        'transaction_id' => $transaction_id_new,
                        'fu_id' => $transaction->fu_id,
                        'rate' => $transaction->rate,
                        'amount' => $amount_new
                            
                    ]);

                    $datax = [
                        'max_amount' => $amount_new,
                    ];

                    $updated = User::where('user_id', $transaction->fu_id)->update($datax);
                }

                //Notification::send(new PaymentConfirmed());
               
                return response()->json(['transaction_succeed' => true, 'transaction_id' => $request->transaction_id]);
            }
            else
            {
                return response()->json(['transaction_succeed' => false]);
            }

    }

    public function generatedynamicaccountnumber(Request $request)
    {
        // try 
        // {
        //     // $response = Http::withHeaders([
        //     //     'X-Auth-Signature' => 'BE09BEE831CF262226B426E39BD1092AF84DC63076D4174FAC78A2261F9A3D6E59744983B8326B69CDF2963FE314DFC89635CFA37A40596508DD6EAAB09402C7',
        //     //     'Client-Id' => 'dGVzdF9Qcm92aWR1cw=='
        //     // ])->post('http://154.113.16.142:8088/appdevapi/api/PiPCreateDynamicAccountNumber', [
        //     //     'account_name' => 'PayHelpa',
        //     // ]);

               
    
        // } catch (\Throwable $th) 
        // {
        //     throw $th;
        // }

       
        //Store P2P state

       
        $user = User::where('user_id', auth()->user()->user_id)->first();

        if($user != null)
        {
            $reserved_account_number = $user->reserved_account_number;

            return response()->json(['status' => true, 'account_number' => $reserved_account_number]);
        }
        else
        {
          
            return response()->json(['status' => false, 'account_number' => null]);
        }

       
        
    }

}
