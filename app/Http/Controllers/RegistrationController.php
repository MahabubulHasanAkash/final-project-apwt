<?php

namespace App\Http\Controllers;

use App\Models\AnalitycsUser;
use App\Models\Role;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = AnalitycsUser::with('roles')->get();
        return view('pages.member.members', ['users' => $users]);
    }

    public function index_api()
    {
        $users = AnalitycsUser::with('roles')->get();
        return ['users' => $users];
    }

    public function create()
    {
        $roles = Role::get();
        return view('pages.member.create', ['roles' => $roles]);
    }

    public function roles()
    {
        $roles = Role::get();
        return ['roles' => $roles];
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'password' => 'required',
            'conpassword' => 'required'
        ]);

        $image = $request->file('file');
        $imageName = time() . '.' . $image->extension();
        $image->move(public_path('images'), $imageName);

        $user = new AnalitycsUser;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->address = $request->address;
        $user->phone = $request->phone;
        $user->image = $imageName;
        $user->password = $request->password;
        $user->roles_id = $request->role;

        $user->save();

        return redirect('/analitycs/members/list');
    }

    public function store_api(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'password' => 'required',
            'conpassword' => 'required'
        ]);

        $image = $request->file('file');
        $imageName = time() . '.' . $image->extension();
        $image->move(public_path('images'), $imageName);

        $user = new AnalitycsUser;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->address = $request->address;
        $user->phone = $request->phone;
        $user->image = $imageName;
        $user->password = $request->password;
        $user->roles_id = $request->role;

        $user->save();

        return true;
    }







    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AnalitycsUser  $analitycsUser
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = AnalitycsUser::find($id);
        $roles = Role::get();
        return view('pages.member.update', ['user' => $user, 'roles' => $roles]);
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'email' => 'required',
        ]);


        $image = $request->file('file');

        if ($image) {
            $image = $request->file('file');
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path('images'), $imageName);
        }

        $user = AnalitycsUser::find($request->id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->address = $request->address;
        $user->phone = $request->phone;
        if ($image) {
            $user->image = $imageName;
        }
        $user->roles_id = $request->role;

        $user->save();

        // $request->session()->put('userid', $user['id']);
        // $request->session()->put('user', $user);

        return redirect('/analitycs/members/list');
    }

    public function delete($id)
    {
        $user = AnalitycsUser::find($id);
        try {
            unlink(public_path('images') . '/' . $user->image);
        } catch (\Exception $e) {
        }

        $user->delete();
        return redirect('/analitycs/members/list');
    }

    public function logout()
    {
        echo 'logout';
        if (session()->has('userid')) {
            session()->pull('userid');
            session()->pull('user');
        }

        return redirect('/analitycs/login');
    }
}
