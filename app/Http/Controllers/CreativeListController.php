<?php

namespace App\Http\Controllers;

use App\Models\Creative;
use Illuminate\Http\Request;

class CreativeListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // session()->pull('user');
        // session()->pull('userid');
        if (session()->has('userid')) {
            $creatives = Creative::latest()->paginate(5);
            return view('pages.creative_list', ['creatives' => $creatives]);
        }
        return redirect('/analitycs/login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.create_creative');
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
     * @param  \App\Models\Creative  $creative
     * @return \Illuminate\Http\Response
     */
    public function show(Creative $creative)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Creative  $creative
     * @return \Illuminate\Http\Response
     */
    public function edit(Creative $creative)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Creative  $creative
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Creative $creative)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Creative  $creative
     * @return \Illuminate\Http\Response
     */
    public function destroy(Creative $creative)
    {
        //
    }
}
