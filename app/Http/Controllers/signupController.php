<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SignupRequest;
use App\Http\Requests\DataAnalystRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class signupController extends Controller
{
    public function creator_index()
    {
        return view("auth.creator_signup");
    }

    public function collector_index()
    {
        return view("auth.collector_signup");
    }

    public function creator_signup(SignupRequest $req)
    {
        DB::table('user')->insert(
            array(
                'name' => $req->name,
                'email' => strtolower($req->email),
                'password' => Hash::make($req->password),
                'usertype' => 'creator',
            )
        );
        $req->session()->flash('msg', 'Signup Successfull');
        return redirect('/login');
    }

    public function collector_signup(SignupRequest $req)
    {
        DB::table('user')->insert(
            array(
                'name' => $req->name,
                'email' => $req->email,
                'password' => Hash::make($req->password),
                'usertype' => 'collector',
            )
        );
        $req->session()->flash('msg', 'Signup Successfull');
        return redirect('/login');
    }
    public function dataAnalyst_signup(DataAnalystRequest $req)
    {
        DB::table('user')->insert(
            array(
                'name' => $req->name,
                'email' => $req->email,
                'password' => Hash::make($req->password),
                'usertype' => 'dataAnalyst',
            )
        );
        $req->session()->flash('msg', 'Signup Successfull');
        return redirect('/admin/addDataAnalyst');
    }
}
