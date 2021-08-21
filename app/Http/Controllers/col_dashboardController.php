<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class col_dashboardController extends Controller
{
    public function index(){

        $msz = ' ';
        return view('Collector.dashboard')->with('msg', $msz);
    }
}
