<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
class DimensionPageController extends Controller
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

    function adddimension()
    {
      return view('adminlte/dimension/adddimension');
    }

    function insertdimension(Request $req)
    {


      $data = [

          'title' => $req->input('title'),
          'specification' => $req->input('specification'),
      ];
      
      DB::table('dimension')->insert($data);

      return redirect('admin/adddimension');
    }

    function showdimension()
    {
        $data['dimension'] = DB::table('dimension')->get();

        return view('adminlte/dimension/showdimension',$data);
    }

    function deletedimension($id)
    {
      $data = DB::table('dimension')->where('id', $id)->delete();
      return redirect('admin/showdimension');
    }

    function editdimension($id)
    {
      $data['dimension'] = DB::table('dimension')->where('id', $id)->get();
      return view('adminlte/dimension/updatedimension',$data);
      

    }

    function updatedimension(Request $req,$id)
    {
        //$data = $req->input($id);
     
        $upd = [
          
          'title' => $req->input('title'),
          'specification' => $req->input('specification'),

        ];
         
        DB::table('dimension')->where('id',$id)->update($upd);
        
        return redirect('admin/showdimension');
    }

}

?>