<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Http\Requests\UserRequest;

class creatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $user = User::find($id);
        $creations = DB::table('nft')
            ->where('creator_id', $id)
            ->get();

        $collections = DB::table('nft')
            ->where('owner_id', $id)
            ->get();

        return view('creator.profile', $user)->with('creations', $creations)
            ->with('collections', $collections);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);


        return view('creator.profile_edit', $user);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $req, $id)
    {
        if ($req->hasFile('image')) {
            $file = $req->file('image');
            $image_name = rand() . '.' . $file->extension();
            if ($file->move('upload', $image_name)) {
                $user = User::find($id);
                $user->name = $req->name;
                $user->phone = $req->phone;
                $user->profileImage = $image_name;
                if ($user->save()) {
                    return redirect('/creator/profile/settings/' . $id . '');
                } else {
                    return back();
                }
            }
        } else {
            return redirect('/creator/profile/{userid}');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
