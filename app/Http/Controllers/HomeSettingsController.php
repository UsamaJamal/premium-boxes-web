<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
class HomeSettingsController extends Controller
{
	public function __construct()
    {
        $this->middleware(function ($request, $next){
        if(!Session::has('admin_user_name') || !Session::has('admin_user_password')){
            return redirect('admin/login'); 
        }
        return $next($request);
        });
    }

    function addcontent()
    {
      return view('adminlte/content/addcontent');
    }

    function insertcontent(Request $req)
    {


      $data = [

          'heading1' => $req->input('heading1'),
          'heading2' => $req->input('heading2'),
          'heading3' => $req->input('heading3'),
          'heading4' => $req->input('heading4'),
          'text' => $req->input('text'),
      ];
      
      DB::table('home_content')->insert($data);

      return redirect('admin/addcontent');
    }

    function showcontent()
    {
        $data['content'] = DB::table('home_content')->get();

        return view('adminlte/content/showcontent',$data);
    }
    
      function homecontent()
    {
        $data['homecontent'] = DB::table('home_page_content')->get();

        return view('adminlte/content/homecontent',$data);
    }

    function deletecontent($id)
    {
      $data = DB::table('home_content')->where('id', $id)->delete();
      return redirect('admin/showcontent');
    }

    function editcontent($id)
    {
      $data['content'] = DB::table('home_content')->where('id', $id)->get();
      return view('adminlte/content/updatecontent',$data);
    }
    
     function edithomecontent($id)
    {
      $data['home_page_content'] = DB::table('home_page_content')->where('content_id', $id)->get();
      return view('adminlte/content/updatehomecontent',$data);
      

    }

    function updatecontent(Request $req,$id)
    {
        //$data = $req->input($id);
     
        $upd = [
          
          'heading1' => $req->input('heading1'),
          'heading2' => $req->input('heading2'),
          'heading3' => $req->input('heading3'),
          'heading4' => $req->input('heading4'),
          'text' => $req->input('text'),

        ];
         
        DB::table('home_content')->where('id',$id)->update($upd);
        
        return redirect('admin/showcontent');
    }
    
       function updatehomecontent(Request $req,$id)
    {
        //$data = $req->input($id);
     
        $upd = [
          
          'description' => $req->input('ckeditor'),

        ];
         
        DB::table('home_page_content')->where('content_id',$id)->update($upd);
        
        return redirect('admin/homecontent');
    }

}

?>