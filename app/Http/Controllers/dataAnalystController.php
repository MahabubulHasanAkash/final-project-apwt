<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class dataAnalystController extends Controller
{
    public function index()
    {
       
    }

    public function signup()
    {
        return view ('admin.addDataAnalyst');
    }

    public function view()
    {
        $dataAnalysts = User::where('usertype', 'dataAnalyst')->get();
          
        return view ('admin.viewDataAnalyst')->with('dataAnalystList',$dataAnalysts);
        
    }
}
