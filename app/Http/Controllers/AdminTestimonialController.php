<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
class AdminTestimonialController extends Controller
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
 
public function Testimonial() {

    return view ('adminlte/testimonial/testimonial'); 
}

public function showTestimonial() {

  $data['testimonial'] = DB::table('testimonila')->get();

      if(count ($data)>0){

            return view('adminlte/testimonial/showtestimonial',$data);
        }

  return view ('adminlte/testimonial/showtestimonial'); 
    
}
public function deleteTestimonial($id)
      {
         DB::table('testimonila')->where('testimonial_id', $id)->delete();
         return redirect('admin/show_testimonial');
      }
   public function getTestimonial($id) {
  $data['testimonial'] = DB::table('testimonila')->where('testimonial_id',$id)->get();
 return view ('adminlte/testimonial/edittestimonial', $data);
}
 public function updateTestimonial(Request $request,$id) {
     $data=[
        'name' => $request->get('name'),
        'profile_link' => $request->get('profilelink'),
        'star_rating' => $request->get('star_rating'),
         'comment' => $request->get('comment'),
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
 $data['s']=DB::table('testimonila')->where('testimonial_id', $id)->update($data);
 // echo "<pre>";
 // print_r($data);
 //   die();
          return redirect('admin/show_testimonial');
}
public function addTestimonial(Request $request) {
	$data=[
  'name' => $request->get('name'),
  'profile_link' => $request->get('profilelink'),
  'star_rating' => $request->get('star_rating'),
   'comment' => $request->get('comment'),
     
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
        DB::table('testimonila')->insert($data);
return redirect('admin/testimonial');
}
}
?>
