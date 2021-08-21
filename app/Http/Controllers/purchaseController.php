<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class purchaseController extends Controller
{

    public function verifyPurchase(Request $req, $id){
        
        $email = $req->session()->get('useremail');
        $offeredValue = $req->givenvalue;

        //fetching user details
        $user = DB::table('user')
                ->where( 'email', $email)->first();
        
        //fetching selected items details
        $item = DB::table('nft')
                ->where('id', $id)->first();

        if($offeredValue >= ($item->value)){

            //updating purchase information
            DB::table('nft')
                ->where( 'id', $id)
                ->update([
                        'owner_id' => $user->id,
                        'value' => $offeredValue
                ]);
            
            //update into collectors collections
            
            DB::table('collection')
            ->insert(
                [
                    'id' => $item->id,
                    'name' => $item->name,
                    'value' => $item->value,
                    'image' => $item->image,
                    'token' => $item->token,
                    'creator' => 'Mr Bean'
                    ]
            );

            //update the wallet
            $bal = DB::table('wallet')
            ->where('id', $user->id)->first();
        
        $balance = ($bal->balance) - $offeredValue;

            DB::table('wallet')
                ->where( 'id', '3')
                ->update([
                        'balance' => $balance,
                        'last_token' => $item->token
                ]);

            $message = 'Congratulations! You have successfully collected the item. Go to MyCollection Page to see you Collections. Thank You.';
            return view('collector.dashboard')->with('msg', $message);


        }
        else{
            $message = 'Sorry Your Offred Price is not accepted. Thank You.';
            return view('collector.dashboard')->with('msg', $message);
        }
        //return view('collector.details')->with('item', $item);

    }
}
