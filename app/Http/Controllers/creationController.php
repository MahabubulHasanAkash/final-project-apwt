<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreationRequest;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\DB;
use App\Models\Creation;

class creationController extends Controller
{
    public function index($id)
    {
        $creation = Creation::find($id);
        return view("creator.creation", $creation);
    }

    public function sendindex()
    {
        return view('creator.add_creation');
    }


    public function addindex()
    {
        return view('creator.sell_creation');
    }

    public function storeCreation(CreationRequest $req, $id)
    {
        if ($req->hasFile('image')) {
            $file = $req->file('image');
            $image_name = rand() . '.' . $file->extension();
            if ($file->move('upload', $image_name)) {
                DB::table('creation')->insert(
                    array(
                        'name' => $req->name,
                        'description' => $req->desc,
                        'edition' => $req->edition,
                        'image' => $image_name,
                        'type' => $req->type,
                        'creator_id' => $id,
                    )
                );

                $creation_id = DB::table('creation')
                    ->where('image', $image_name)
                    ->get('id')
                    ->first();


                DB::table('auction')->insert(
                    array(
                        'creation_id' => $creation_id->id,
                        'creator_id' => $id,
                    )
                );
                $req->session()->put('mxvalue', 0);
                return back();
            }
        }
    }


    public function sellCreation(CreationRequest $req, $id)
    {


        if ($req->hasFile('image')) {
            $file = $req->file('image');
            $image_name = rand() . '.' . $file->extension();
            if ($file->move('upload', $image_name)) {
                DB::table('creation')->insert(
                    array(
                        'name' => $req->name,
                        'description' => $req->desc,
                        'edition' => $req->edition,
                        'image' => $image_name,
                        'type' => $req->type,
                        'creator_id' => $id,
                    )
                );

                $creation_id = DB::table('creation')
                    ->where('image', $image_name)
                    ->get('id')
                    ->first();


                DB::table('store')->insert(
                    array(
                        'creation_id' => $creation_id->id,
                        'creator_id' => $id,
                        'value' => $req->value,
                    )
                );
                $req->session()->put('mxvalue', 0);
                return back();
            }
        }
    }
}
