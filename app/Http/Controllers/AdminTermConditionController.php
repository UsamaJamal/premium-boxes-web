<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
class AdminTermConditionController extends Controller
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
 
public function TermCondition() {

    return view('adminlte\staticpage\termcondition\termcondition');   
}
public function addTermCondition(Request $request) {
	$data=[

 'meta_title' => $request->get('tcmtitle'),
 'meta_description' => $request->get('tcmdescrioption'),
  'meta_tags' => $request->get('tcmtags'),
   
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
 
        DB::table('term_condition')->insert($data);
return redirect('admin/term_condition');
}
public function showTermCondition() {

    $data['termcon'] = DB::table('term_condition')->get();
  
        if(count ($data)>0){
  
              return view('adminlte\staticpage\termcondition\showtermcond',$data);
          }
  
    return view ('adminlte\staticpage\termcondition\showtermcond'); 
      
  }

   public function getTermCondition() {

  $termcon_data['termcon_data'] = DB::table('about_us')->get();


  $data['termcon'] = DB::table('term_condition')->get();

  

  return view ('adminlte\staticpage\termcondition\edittermcon', $data,$termcon_data);
}
public function updateTermCondition(Request $request) {
    $data=[

        'meta_title' => $request->get('tcmtitle'),
        'meta_description' => $request->get('tcmdescrioption'),
         'meta_tags' => $request->get('tcmtags'),
          
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

              
$data['s']=DB::table('term_condition')->update($data);

         return redirect('admin/edittermcon');
}
public function deleteTermCondition($id)
      {
         DB::table('term_condition')->where('tc_id', $id)->delete();
         return redirect('admin/showtermcondition');
      }

}


?>
