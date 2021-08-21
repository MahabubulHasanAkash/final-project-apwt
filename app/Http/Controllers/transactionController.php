<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class transactionController extends Controller
{
    public function index($id)
    {
        $wallet = DB::table('wallet')
            ->where('id', $id)
            ->get()
            ->first();
        $transactions = DB::table('ledger')
            ->where('senderKey', $wallet->accountKey)
            ->get();
        return view('creator.transactions')->with('transactions', $transactions);
    }
}
