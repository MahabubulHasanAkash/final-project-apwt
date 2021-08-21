<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class authenticityController extends Controller
{
    public function authenticate(Request $req, $id)
    {

        $item = DB::table('nft')
            ->where('id', $id)->first();

        $block = DB::table('block')
            ->where('id', $id)->first();

        return view('collector.proof')
            ->with('item', $item)
            ->with('block', $block);
    }

    public function myCollectionProof($id)
    {

        $item = DB::table('collection')
            ->where('id', $id)->first();

        $block = DB::table('block')
            ->where('id', $id)->first();

        return view('collector.proof')
            ->with('item', $item)
            ->with('block', $block);
    }
}
