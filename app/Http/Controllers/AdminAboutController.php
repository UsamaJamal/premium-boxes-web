<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
class AdminAboutController extends Controller
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
 
public function about() {

    return view ('adminlte/staticpage/whypb/aboutus'); 
}

public function showAbout() {

  $data['about'] = DB::table('about_us')->get();

      if(count ($data)>0){

            return view('adminlte/staticpage/whypb/showabout',$data);
        }

  return view ('adminlte/blog/showabout'); 
    
}




public function deleteAbout()
      {
         DB::table('about_us')->delete();
         return redirect('admin/showabout');
      }



   public function getAbout() {

  $about_data['about_data'] = DB::table('about_us')->get();


  $data['about'] = DB::table('about_us')->get();

  

  return view ('adminlte/staticpage/whypb/editabout', $data,$about_data);
}

 public function updateAbout(Request $request) {
     $data=[

'meta_title' => $request->get('aboutmtitle'),
 'meta_description' => $request->get('aboutmdescrioption'),
  'meta_tags' => $request->get('aboutmtags'),
  'heading' => $request->get('aboutheading'), 
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
                $data['image']=$request->input('oldimage');
             }

          
 $data['s']=DB::table('about_us')->update($data);
 // echo "<pre>";
 // print_r($data);
 //   die();
          return redirect('admin/editabout');
}

public function addAbout(Request $request) {
	$data=[

 'meta_title' => $request->get('aboutmtitle'),
 'meta_description' => $request->get('aboutmdescrioption'),
  'meta_tags' => $request->get('aboutmtags'),
  'heading' => $request->get('aboutheading'),
   'description' => $request->get('ckeditor'),
     
];

if($request->hasfile('image')){
                    $file=$request->file('image');
                    $extension=$file->getClientOriginalName();
                    $filename = str_replace(' ', '-', $extension);
                    $file->move('images/',$filename);
                    $data['image']=$filename;
             } 
             else
        {
            return  $request;
            $data->image=''; 

        }
 
        DB::table('about_us')->insert($data);
return redirect('admin/about');
}





}


?>
