<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Store;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\CreationRequest;

class storeController extends Controller
{
    public function index()
    {
        $store = Store::all();
        return view('creator.store')->with("store", $store);
    }

    public function onsell($id)
    {
        $store = DB::table('store')
            ->where('creator_id', $id)
            ->get();
        return view('creator.onSell')->with("auctions", $store);
    }

    public function editsell($id)
    {
        $onsell = DB::table('store')
            ->where('id', $id)
            ->get()
            ->first();
        $creation = DB::table('creation')
            ->where('id', $onsell->creation_id)
            ->get()
            ->first();
        return view('creator.editSell')->with('creation', $creation);
    }

    public function updatsell(CreationRequest $req, $id)
    {
        $auction = DB::table('store')
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
                DB::table('store')
                    ->where('id', $auction->id)
                    ->update(
                        array(
                            'value' => $req->value,
                        )
                    );
            }
            return back();
        }
    }




    public function deletesell($id)
    {
        DB::table('store')
            ->where('id', $id)
            ->delete();
        return back();
    }
}
