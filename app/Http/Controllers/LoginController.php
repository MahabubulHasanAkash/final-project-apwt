<?php

namespace App\Http\Controllers;

use App\Models\AnalitycsUser;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (session()->has('userid')) {

            return redirect('/analitycs/members/list');
        }
        return view('pages.login');
    }

    public function login(Request $request)
    {
        $email = $request->email;
        $user = AnalitycsUser::where('email', $email)->get();
        if ($user->count() > 0) {
            $request->session()->put('userid', $user[0]['id']);
            $request->session()->put('user', $user[0]);
            return redirect('/analitycs/members/list');
        } else {
            return redirect('/analitycs/login');
        }
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
     * @param  \App\Models\AnalitycsUser  $analitycsUser
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $email = $request->email;
        return AnalitycsUser::where('email', $email)->get();
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AnalitycsUser  $analitycsUser
     * @return \Illuminate\Http\Response
     */
    public function edit(AnalitycsUser $analitycsUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AnalitycsUser  $analitycsUser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AnalitycsUser $analitycsUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AnalitycsUser  $analitycsUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(AnalitycsUser $analitycsUser)
    {
        //
    }
}
