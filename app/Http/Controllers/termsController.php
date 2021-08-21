<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Terms;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class termsController extends Controller
{
    public function view (Request $req)
    {
    
        $terms = Terms::all();
        
        return view ('admin.terms')->with('termList',$terms);

    }
    public function update(Request $req)
    {
        
        DB::table('terms')
            ->where('id',1)
            ->update(['terms' => $req->terms]);
        
       return redirect('admin/terms');
    }

    public function commonView()
    {
        $terms = Terms::all();
        
        return view ('Terms')->with('termList',$terms);
    }
}
