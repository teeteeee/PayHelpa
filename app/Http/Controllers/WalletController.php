<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WalletFundingRequest;
use App\Models\WalletFundingResponse;
use App\Models\User;
use App\Models\Transaction;
use Illuminate\Support\Facades\Validator;

class WalletController extends Controller
{
    public function settlementnotification(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'settlementId' => 'required',
            'sessionId' => 'required',
            'accountNumber' => 'required',
            'transactionAmount' => 'required',

        ]);

        if($validator->fails())
        {
            return response()->json(['errors' => $validator->errors()->getMessages()], 400);
        }

        $auth_header_value = $request->header('X-Auth-Signature');

        $capitalized_value = strtoupper($auth_header_value);


        if($capitalized_value != 'BE09BEE831CF262226B426E39BD1092AF84DC63076D4174FAC78A2261F9A3D6E59744983B8326B69CDF2963FE314DFC89635CFA37A40596508DD6EAAB09402C7')
        {
            return response()->json(['requestSuccessful' => true, 'sessionId' => $request->sessionId, 'responseMessage' => 'rejected transaction', 'responseCode' => '02']);
        }

        $sesion_id_exists = WalletFundingRequest::where('settlement_id', $request->settlementId)->first();

        if($sesion_id_exists != null)
        {
            return response()->json(['requestSuccessful' => true, 'sessionId' => $request->sessionId, 'responseMessage' => 'duplicate transaction', 'responseCode' => '01']);
        }

        //$account_number_exists = WalletFundingRequest::where('account_number', $request->accountNumber)->first(); 
        $account_number_exists = User::where('reserved_account_number', $request->accountNumber)->first(); 
        //return response()->json($request->all());
        //return response()->json($account_number_exists);
        if($account_number_exists == null)
        {
            return response()->json(['requestSuccessful' => true, 'sessionId' => $request->sessionId, 'responseMessage' => 'rejected transaction', 'responseCode' => '02']);
        } 
        else
        {
            //Get previous balance
            $user = User::where('user_id', $account_number_exists->user_id)->first();
           
            $current_balance = $user->wallet;
           
            $new_balance = $current_balance + $request->transactionAmount;

            //Update wallet here
            $data = [
                'wallet' => $new_balance,
            ];

            $updated = User::where('user_id', $account_number_exists->user_id)->update($data);

            $data2 = [
                'settlement_id' => $request->settlementId
            ];

            $updated2 = WalletFundingRequest::where('account_number', $request->accountNumber)->update($data2);

            $data3 = [
                'is_payment_confirmed' => 1
            ];

           $updated3 = Transaction::where('transaction_id', $account_number_exists->transaction_id)->update($data3);

            //Create history log
            $inserted = WalletFundingResponse::create([
                'user_id' => $account_number_exists->user_id,
                'account_number' => $request->accountNumber,
                'amount' => $request->transactionAmount,
                'settlement_id' =>  $request->settlementId          
            ]);

            return response()->json(['requestSuccessful' => true, 'sessionId' => $request->sessionId, 'responseMessage' => 'success', 'responseCode' => '00']);
        }
        
    }
}
