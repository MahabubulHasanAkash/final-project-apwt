<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ArtType;

class artTypeController extends Controller
{
    public function index()
    {
        $artTypes = ArtType::all();        
        return view ('admin.artType')->with('artTypeList',$artTypes);
    }

    public function insert(Request $req)
    {
        DB::table('artType')->insert(
            array(
                't_name' => $req->t_name,
                
            )
        );
        return redirect('/admin/artType');
    }

    public function update()
    {
        
    }

    public function delete(Request $req, $t_id)
    {
        DB::table('artType')
            ->where('t_id', $t_id)
            ->delete();
        
        return redirect('admin/artType');
    }

    public function searchArtType(Request $req)
    {
        $artTypes = DB::table('ArtType')
            ->where('t_name', 'like', $req->search . '%')
            ->get();
        return view('admin.artType')->with("artTypeList", $artTypes);
    }
}
