<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announcement;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;




class announcementController extends Controller
{
    public function index()
    {
        // $a_id = $req->session()->get('id');
        $announcements = Announcement::all();        
        return view ('admin.announcement')->with('announcementList',$announcements);
    }
    public function insert(Request $req)
    {
        
        // DB::table('announcement')          
        // ->insert(['title' => $req->title, 'details' => $req->details ]);
        
        // return redirect()->route('admin.announcement');
        DB::table('announcement')->insert(
            array(
                'title' => $req->title,
                'details' => $req->details,
                
                
            )
        );
        return redirect('/admin/announcement');
    

    }


    public function view(Request $req)
    {
        
       
        $announcements = Announcement::all();
        // $admins = DB::table('user')->where('usertype', 'admin')->first();
        
        return view ('admin.announcement')->with('announcementList',$announcements);
    }

    public function edit(Request $req, $id)
    {
        
        // DB::table('announcement')          
        // ->insert(['title' => $req->title, 'details' => $req->details ]);
        
        // return redirect()->route('admin.announcement');

        // DB::table('announcement')
        //     ->where('id', $id)
        //     ->update();
            
        
         return redirect('/admin/announcement');

    }

    public function delete(Request $req, $id)
    {
        
        // DB::table('announcement')          
        // ->insert(['title' => $req->title, 'details' => $req->details ]);
        
        //return redirect()->route('admin.announcement');
        DB::table('announcement')
            ->where('id', $id)
            ->delete();
        
        return redirect('admin/announcement');
    

    }
    public function commonView()
    {
        $announcements = Announcement::all();
        
        return view ('Announcement')->with('announcementList',$announcements);
    }
}
