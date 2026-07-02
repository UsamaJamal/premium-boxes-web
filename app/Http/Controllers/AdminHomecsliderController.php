<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
class AdminHomecsliderController extends Controller
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
 
public function Sliderc() {

    return view ('adminlte/slider/sliderc'); 
}

public function showcSlider() {

  $data['sliderc'] = DB::table('home_sliderc')->get();

      if(count ($data)>0){

            return view('adminlte/slider/showsliderc',$data);
        }

  return view ('adminlte/slider/showsliderc'); 
    
}




public function deletecSlider($id)
      {
         DB::table('home_sliderc')->where('sliderc_id', $id)->delete();
         return redirect('admin/show_homecslider');
      }



   public function getcSlider($id) {

  $home_slider['home_sliderc'] = DB::table('home_sliderc')->get();


  $data['sliderc'] = DB::table('home_sliderc')->where('sliderc_id',$id)->get();

  

  return view ('adminlte/slider/editsliderc', $data,$home_slider);
}

 public function updatecSlider(Request $request,$id) {
     $data=[

'image_tag' => $request->get('alttag'),
'image_tag2' => $request->get('alttag2'),
'image_tag3' => $request->get('alttag3'),

  'name' => $request->get('name'),
  'name2' => $request->get('name2'),
  'name3' => $request->get('name3'),

  'link' => $request->get('link'), 
  'link2' => $request->get('link2'),
  'link3' => $request->get('link3'),

   
   
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
             
          

          
 $data['s']=DB::table('home_sliderc')->where('sliderc_id', $id)->update($data);
 // echo "<pre>";
 // print_r($data);
 //   die();
          return redirect('admin/show_homecslider');
}

public function addcSlider(Request $request) {
	$data=[


  'image_tag' => $request->get('alttag'),
  'image_tag2' => $request->get('alttag2'),
'image_tag3' => $request->get('alttag3'),

  'name' => $request->get('name'),
    'name2' => $request->get('name2'),
  'name3' => $request->get('name3'),
  
  'link' => $request->get('link'),
  'link2' => $request->get('link2'),
  'link3' => $request->get('link3'),


     
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
    
        DB::table('home_sliderc')->insert($data);
return redirect('admin/homecslider');
}





}


?>
