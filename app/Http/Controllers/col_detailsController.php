<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class col_detailsController extends Controller
{
    public function getDetails($id){
        
        $item = DB::table('nft')
                ->where('id', $id)->first();
        return view('collector.details')->with('item', $item);

    }
}
