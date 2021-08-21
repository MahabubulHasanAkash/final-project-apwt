<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CollectionController extends Controller
{
    public function index()
    {
        //

    }

    public function getCollection(Request $req)
    {

        $cllection = DB::table('collection')->get();
        return view('collector.myCollection')->with('collection', $cllection);
    }
}
