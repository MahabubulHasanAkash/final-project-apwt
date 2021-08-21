<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\SignupRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class auth extends Controller
{

    public function index()
    {
        if (session('userid') != null) {
            if (session('usertype') == 'creator')
                return redirect("/creator/home");
            else if (session('usertype') == 'collector')
                return view('collector.dashboard');
            else if (session('usertype') == 'admin')
                return redirect("/admin/home");
        } else
            return view('auth.login');
    }

    public function verifylogin(LoginRequest $req)
    {

        $userCount = DB::table('user')
            ->where('email', $req->email)
            ->count();
        if ($userCount > 0) {
            $user = DB::table('user')
                ->where('email', $req->email)
                ->first();
            if (password_verify($req->password, $user->password)) {
                $usertype =  $user->usertype;
                $req->session()->put('userid', $user->id);
                $req->session()->put('useremail', $req->email);
                $req->session()->put('id', $user->id);
                $req->session()->put('name', $user->name);
                $req->session()->put('usertype', $usertype);
                $req->session()->put('phone', $user->phone);
                $req->session()->put('profileImage', $user->profileImage);
                return redirect('/' . $usertype . '/home');
            } else {
                $req->session()->flash('msg', 'Wrong Credentials');
                return redirect('/login');
            }
        } else {
            $req->session()->flash('msg', 'Please register first');
            return redirect('/login');
        }
    }

    public function logout(Request $req)
    {
        $req->session()->flush();
        return redirect('/login');
    }
}
