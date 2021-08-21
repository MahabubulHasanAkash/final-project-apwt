<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class walletController extends Controller
{
    public function index($id)
    {
        $user = User::find($id);
        return view('creator.wallet', $user);
    }

    public function create(Request $req, $id)
    {
        $make = $id . time();
        DB::table('wallet')->insert(
            array(
                'id' => $id,
                'balance' =>  10000000,
                'accountKey' => Hash::make($make),
            )
        );
        return redirect('creator/account');
    }
    public function collectorWallet(Request $req)
    {

        $email = $req->session()->get('useremail');

        if ($req->session()->has('useremail')) {

            $user = DB::table('wallet')
                ->where('email', $email)->first();

            return view('collector.wallet')->with('user', $user);
        } else {
            return redirect('/login')->with('msg', 'You Have to login First!');
        }
    }
}
