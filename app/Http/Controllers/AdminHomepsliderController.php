<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
class AdminHomepsliderController extends Controller
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
 
public function Sliderp() {

    return view ('adminlte/slider/sliderp'); 
}

public function showpSlider() {

  $data['sliderp'] = DB::table('home_sliderp')->get();

      if(count ($data)>0){

            return view('adminlte/slider/showsliderp',$data);
        }

  return view ('adminlte/slider/showsliderp'); 
    
}




public function deletepSlider($id)
      {
         DB::table('home_sliderp')->where('sliderp_id', $id)->delete();
         return redirect('admin/show_homepslider');
      }



   public function getpSlider($id) {

  $home_slider['home_sliderp'] = DB::table('home_sliderp')->get();


  $data['sliderp'] = DB::table('home_sliderp')->where('sliderp_id',$id)->get();

  

  return view ('adminlte/slider/editsliderp', $data,$home_slider);
}

 public function updatepSlider(Request $request,$id) {
     $data=[

'image_tag' => $request->get('alttag'),
'image_tag2' => $request->get('alttag2'),
'image_tag3' => $request->get('alttag3'),
'image_tag4' => $request->get('alttag4'),
  'name' => $request->get('name'),
  'name2' => $request->get('name2'),
  'name3' => $request->get('name3'),
  'name4' => $request->get('name4'),
  'link' => $request->get('link'), 
  'link2' => $request->get('link2'),
  'link3' => $request->get('link3'),
  'link4' => $request->get('link4'),
   
   
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
             
             if($request->hasfile('image2')){
                    $file=$request->file('image2');
                    $extension=$file->getClientOriginalName();
                    $filename=$extension;
                    $file->move('images/',$filename);
                    $data['image2']=$filename;

             }
             else{
                $data['image2']=$request->input('oldimage2');
             }
             
                if($request->hasfile('image3')){
                    $file=$request->file('image3');
                    $extension=$file->getClientOriginalName();
                    $filename=$extension;
                    $file->move('images/',$filename);
                    $data['image3']=$filename;

             }
             else{
                $data['image3']=$request->input('oldimage3');
             }
             
                if($request->hasfile('image4')){
                    $file=$request->file('image4');
                    $extension=$file->getClientOriginalName();
                    $filename=$extension;
                    $file->move('images/',$filename);
                    $data['image4']=$filename;

             }
             else{
                $data['image4']=$request->input('oldimage4');
             }

          
 $data['s']=DB::table('home_sliderp')->where('sliderp_id', $id)->update($data);
 // echo "<pre>";
 // print_r($data);
 //   die();
          return redirect('admin/show_homepslider');
}

public function addpSlider(Request $request) {
	$data=[


  'image_tag' => $request->get('alttag'),
  'image_tag2' => $request->get('alttag2'),
'image_tag3' => $request->get('alttag3'),
'image_tag4' => $request->get('alttag4'),
  'name' => $request->get('name'),
    'name2' => $request->get('name2'),
  'name3' => $request->get('name3'),
  'name4' => $request->get('name4'),
  'link' => $request->get('link'),
  'link2' => $request->get('link2'),
  'link3' => $request->get('link3'),
  'link4' => $request->get('link4'),

     
];

if($request->hasfile('image')){
                    $file=$request->file('image');
                    $extension=$file->getClientOriginalName();
                    $filename= time(). '.' . $extension;
                    $file->move('images/',$filename);
                    $data['image']=$filename;
             } 
             else
        {
             $data['image']=''; 

        }
 
 if($request->hasfile('image2')){
                    $file=$request->file('image2');
                    $extension=$file->getClientOriginalName();
                    $filename= time(). '.' . $extension;
                    $file->move('images/',$filename);
                    $data['image2']=$filename;
             } 
             else
        {
             $data['image2']=''; 

        }
        if($request->hasfile('image3')){
                    $file=$request->file('image3');
                    $extension=$file->getClientOriginalName();
                    $filename= time(). '.' . $extension;
                    $file->move('images/',$filename);
                    $data['image3']=$filename;
             } 
             else
        {
             $data['image3']=''; 

        }
        if($request->hasfile('image4')){
                    $file=$request->file('image4');
                    $extension=$file->getClientOriginalName();
                    $filename= time(). '.' . $extension;
                    $file->move('images/',$filename);
                    $data['image4']=$filename;
             } 
             else
        {
             $data['image4']=''; 

        }
        DB::table('home_sliderp')->insert($data);
return redirect('admin/homepslider');
}





}


?>
