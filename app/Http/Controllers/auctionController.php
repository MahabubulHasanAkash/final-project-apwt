<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;
use App\Models\Auction;
use App\Http\Requests\CreationRequest;

class auctionController extends Controller
{
    public function index()
    {
        $auctions = Auction::all();
        return view('creator.auction')->with("auctions", $auctions);
    }

    public function auction($id)
    {
        $auctions = DB::table('auction')
            ->where('creator_id', $id)
            ->get();
        return view('creator.onAuction')->with("auctions", $auctions);
    }

    public function editauction($id)
    {
        $auction = DB::table('auction')
            ->where('id', $id)
            ->get()
            ->first();
        $creation = DB::table('creation')
            ->where('id', $auction->creation_id)
            ->get()
            ->first();
        return view('creator.editAuction')->with('creation', $creation);
    }

    public function updateauction(CreationRequest $req, $id)
    {
        $auction = DB::table('auction')
            ->where('creation_id', $id)
            ->get()
            ->first();


        if ($req->hasFile('image')) {
            $file = $req->file('image');
            $image_name = rand() . '.' . $file->extension();
            if ($file->move('upload', $image_name)) {
                DB::table('creation')
                    ->where('id', $auction->creation_id)
                    ->update(
                        array(
                            'name' => $req->name,
                            'description' => $req->desc,
                            'edition' => $req->edition,
                            'image' => $image_name,
                            'type' => $req->type,
                        )
                    );
            }
            return back();
        }
    }




    public function deleteauction($id)
    {
        DB::table('auction')
            ->where('id', $id)
            ->delete();
        return back();
    }
}
