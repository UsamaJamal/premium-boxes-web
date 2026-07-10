<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
class AdminPrivacyPolicyController extends Controller
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
 
public function PrivacyPolicy() {

    return view ('adminlte/staticpage/privacypolicy/privacypolicy'); 
}

public function addPrivacyPolicy(Request $request) {
	$data=[

 'meta_title' => $request->get('ppmtitle'),
 'meta_description' => $request->get('ppmdescrioption'),
  'meta_tags' => $request->get('ppmtags'),
   
   'description' => $request->get('ckeditor'),
     
];

if($request->hasfile('image')){
    $file=$request->file('image');
    $extension=$file->getClientOriginalName();
    $filename = str_replace(' ', '-', $extension);
    $file->move('images/',$filename);
    $data['image']=$filename;
} 
else {
    $data['image']=''; 
}
 
        DB::table('privacy_policy')->insert($data);
return redirect('admin/privacy_policy');
}
public function showPrivacyPolicy() {

    $data['privacypolicy'] = DB::table('privacy_policy')->get();
  
        if(count ($data)>0){
  
              return view('adminlte/staticpage/privacypolicy/showprivacypolicy',$data);
          }
  
    return view ('adminlte/staticpage/privacypolicy/showprivacypolicy'); 
      
  }
  public function getPrivacyPolicy() {

    $privacypolicy_data['privacypolicy_data'] = DB::table('privacy_policy')->get();
  
  
    $data['privacypolicy'] = DB::table('privacy_policy')->get();
  
    
  
    return view ('adminlte/staticpage/privacypolicy/editprivacypolicy', $data,$privacypolicy_data);
  }

  public function updatePrivacyPolicy(Request $request) {
    $data=[

'meta_title' => $request->get('ppmtitle'),
'meta_description' => $request->get('ppmdescrioption'),
 'meta_tags' => $request->get('ppmtags'),
  
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

         
$data['s']=DB::table('privacy_policy')->update($data);
// echo "<pre>";
// print_r($data);
//   die();
         return redirect('admin/editprivacy_policy');
}
public function deletePrivacyPolicy($id)
      {
         DB::table('privacy_policy')->where('pp_id', $id)->delete();
         return redirect('admin/showprivacy_policy');
      }
}


?>
