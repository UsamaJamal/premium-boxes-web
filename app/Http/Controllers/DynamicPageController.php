<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
class DynamicPageController extends Controller
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

    function addpage()
    {
      return view('adminlte/dynamic/addpage');
    }

    function insertpage(Request $req)
    {
	    $data = [

	        'page_title' => $req->input('page_title'),
	        'page_url' => str_replace(' ','-',strtolower($req->input('page_url'))),
	        'heading' => $req->input('heading'),
	        'long_desc' => $req->input('long_desc'),
	        'm_title' => $req->input('m_title'),
	        'm_des' => $req->input('m_des'),
	        'm_tag' => $req->input('m_tag'),
	        'alt' => $req->input('alt'),
	        'position' => $req->input('position'),
	        'status' => $req->input('status'),
	        'appearance' => $req->input('appearance'),
	    ];

	    if($req->hasfile('photo'))
	    {
	        $file=$req->file('photo');
	        $extension=$file->getClientoriginalExtension();
	        $filename = str_replace(' ', '-', $extension);
	        $file->move('uploads',$filename);
	        $data['image']=$filename;
	    }
	    else
	    {
	        $data['image']=''; 
	    }
      

	    DB::table('dynamic')->insert($data);

	    return redirect('admin/addpage');
    }

    function showpage()
    {
      	$data['dynamic'] = DB::table('dynamic')->get();

      	return view('adminlte/dynamic/showpage',$data);
    }

    function deletepage($id)
    {
      $data = DB::table('dynamic')->where('id', $id)->delete();
      // /$data->delete();
      // DB::Table('my_blog')->where('id',$data)->delete();
      return redirect('admin/showpage');
    }

    function editpage($id)
    {
      $data['dynamic'] = DB::table('dynamic')->where('id', $id)->get();
      return view('adminlte/dynamic/updatepage',$data);
      

    }

    function updatepage(Request $req,$id)
    {

      
        $data = $req->input($id);
     
        $upd = [
          
          	'page_title' => $req->input('page_title'),
	        'page_url' => str_replace(' ','-',strtolower($req->input('page_url'))),
	        'heading' => $req->input('heading'),
	        'long_desc' => $req->input('long_desc'),
	        'm_title' => $req->input('m_title'),
	        'm_des' => $req->input('m_des'),
	        'm_tag' => $req->input('m_tag'),
	        'alt' => $req->input('alt'),
	        'position' => $req->input('position'),
	        'status' => $req->input('status'),
	        'appearance' => $req->input('appearance'),
         

        ];
            if($req->hasfile('photo')){
                    $file=$req->file('photo');
                    $extension=$file->getClientOriginalName();
                    $filename = str_replace(' ', '-', $extension);
                    $file->move('uploads',$filename);
                    $upd['image']=$filename;

            }
            else{
                $upd['image']=$req->input('image1');
            }
            
         

        DB::table('dynamic')->where('id',$id)->update($upd);
        
        return redirect('admin/showpage');
    }


}

?>