<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class col_homeController extends Controller
{
    public function index()
    {
        //return view('Collector.home');
    }

    public function getItems(Request $req)
    {

        if ($req->session()->has('useremail')) {
            $item = DB::table('nft')->get();
            return view('collector.home')->with('nfts', $item);
        } else {
            return redirect('/login')->with('msg', 'You Have to login First!');
        }
    }
}
