<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
class AdminHomesliderController extends Controller
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
 
public function Slider() {

    return view ('adminlte/slider/slider'); 
}

public function showSlider() {

  $data['slider'] = DB::table('home_slider')->get();

      if(count ($data)>0){

            return view('adminlte/slider/showslider',$data);
        }

  return view ('adminlte/slider/showslider'); 
    
}




public function deleteSlider($id)
      {
         DB::table('home_slider')->where('slider_id', $id)->delete();
         return redirect('admin/show_homeslider');
      }



   public function getSlider($id) {

  $home_slider['home_slider'] = DB::table('home_slider')->get();


  $data['slider'] = DB::table('home_slider')->where('slider_id',$id)->get();

  

  return view ('adminlte/slider/editslider', $data,$home_slider);
}

 public function updateSlider(Request $request,$id) {
     $data=[

  'image_tag' => $request->get('homemtitle') ?? '',
  'meta_title' => $request->get('homemtitle') ?? '',
 'meta_description' => $request->get('homemdescrioption') ?? '',
  'meta_tags' => $request->get('homemtags') ?? '',
  'heading_1' => $request->get('homeheading1') ?? '',
  'heading_2' => $request->get('homeheading2') ?? '',
  'heading_3' => $request->get('homeheading3') ?? '',
  'link' => $request->get('homelink') ?? '',
   'description' => $request->get('ckeditor') ?? '', 
   
   
];




if($request->hasfile('image')){
                    $file=$request->file('image');
                    $extension=$file->getClientOriginalName();
                    $filename = str_replace(' ', '-', $extension);
                    $file->move('images/',$filename);
                    $data['image']=$filename;

             }
             else{
                $data['image']=$request->input('oldimage');
             }

          
 $data['s']=DB::table('home_slider')->where('slider_id', $id)->update($data);
 // echo "<pre>";
 // print_r($data);
 //   die();
          return redirect('admin/show_homeslider');
}

public function addSlider(Request $request) {
	$data=[

  'heading_1' => $request->get('homeheading1') ?? '',
  'image_tag' => $request->get('imagetag') ?? '',
  'link' => $request->get('homelink') ?? '',
  'description' => $request->get('ckeditor') ?? '',
     
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
 
        DB::table('home_slider')->insert($data);
return redirect('admin/homeslider');
}





}


?>
