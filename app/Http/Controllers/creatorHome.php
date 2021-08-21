<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nft;
use Illuminate\Support\Facades\DB;

class creatorHome extends Controller
{
    public function index()
    {
        $nfts = Nft::all();
        return view('creator.home')->with("nfts", $nfts);
    }

    public function search(Request $req)
    {

        $nfts = DB::table('nft')
            ->where('name', 'like', $req->search . '%')
            ->get();
        return view('creator.home')->with("nfts", $nfts);
    }
}
