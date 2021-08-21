<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wallet;


class accountController extends Controller
{
    public function index($id)
    {
        $wallet = Wallet::find($id);
        return view('creator.account', $wallet);
    }
}
