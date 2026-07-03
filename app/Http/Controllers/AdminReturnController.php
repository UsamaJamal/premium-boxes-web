<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
class AdminReturnController extends Controller
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
 
public function Return() {

    return view ('adminlte/staticpage/returnpage/return'); 
}

public function addReturn(Request $request) {
	$data=[

 'meta_title' => $request->get('rpmtitle'),
 'meta_description' => $request->get('rpmdescrioption'),
  'meta_tags' => $request->get('rpmtags'),
   
   'description' => $request->get('ckeditor'),
     
];

if($request->hasfile('image')){
    $file=$request->file('image');
    $extension=$file->getClientOriginalName();
    $filename= time(). '.' . $extension;
    $file->move('images/',$filename);
    $data['image']=$filename;
} 
else {
    $data['image']=''; 
}
 
        DB::table('return_page')->insert($data);
return redirect('admin/return');
}

public function showReturn() {

    $data['return'] = DB::table('return_page')->get();
  
        if(count ($data)>0){
  
              return view('adminlte/staticpage/returnpage/showreturn',$data);
          }
  
    return view ('adminlte/staticpage/returnpage/showreturn'); 
      
  }
  public function getReturn() {

    $return_data['return_data'] = DB::table('return_page')->get();
  
  
    $data['return'] = DB::table('return_page')->get();
  
    
  
    return view ('adminlte/staticpage/returnpage/editreturn', $data,$return_data);
  }
  public function updateReturn(Request $request) {
    $data=[

'meta_title' => $request->get('rpmtitle'),
'meta_description' => $request->get('rpmdescrioption'),
 'meta_tags' => $request->get('rpmtags'),
  
  'description' => $request->get('ckeditor'), 
  
  
];




if($request->hasfile('image')){
   $file=$request->file('image');
   $extension=$file->getClientOriginalName();
   $filename=$extension;
   $file->move('images/',$filename);
   $data['image']=$filename;
}
else{
   $data['image']=$request->input('oldimage') ?? '';
}

         
$data['s']=DB::table('return_page')->update($data);
// echo "<pre>";
// print_r($data);
//   die();
         return redirect('admin/edit_return');
}
public function deleteReturn($id)
      {
         DB::table('return_page')->where('rp_id', $id)->delete();
         return redirect('admin/show_return');
      }
}


?>
