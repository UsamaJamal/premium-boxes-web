<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
class AdminCategoryController extends Controller
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
 

   public function deleteData($id)
      {
         DB::table('add_category')->where('cat_id', $id)->delete();
         return redirect('admin/showcategory');
      }

  public function updateCategory(Request $request,$id) {
   
     $data=[

 'name' => $request->post('name'),
 'category_url' => str_replace(' ','-',strtolower($request->post('categoryurl'))),
  'meta_title' => $request->post('mtitle'),
   'meta_description' => $request->post('mdescription'),
   'meta_tags' => $request->post('mtags'),
   'description' => $request->post('ckeditor'),
   'parent_category' => $request->post('parentcategory'),
   'status' => $request->post('status'),
   'show_home' => $request->post('show_home'),
];

// print_r($data);
// die();


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

             if($request->hasfile('bimage')){
                    $file=$request->file('bimage');
                    $extension=$file->getClientOriginalName();
                    $filename=$extension;
                    $file->move('images/',$filename);
                    $data['bimage']=$filename;

             }
             else{
                $data['bimage']=$request->input('oldbaner');
             }

             if($request->hasfile('icon')){
              $file=$request->file('icon');
              $extension=$file->getClientOriginalName();
              $filename=$extension;
              $file->move('images/',$filename);
              $data['icon']=$filename;

       }
       else{
          $data['icon']=$request->input('oldfav-icon');
       }

              



 $data['s']=DB::table('add_category')->where('cat_id', $id)->update($data);
 // echo "<pre>";
 // print_r($data);
 //   die();
          return redirect('admin/showcategory');
}

public function category() {
 $data['data'] = DB::table('add_category')->get();

 
    return view ('adminlte/category/category',$data); 
}

public function getCategory($id) {
  $category_data['category_data'] = DB::table('add_category')->get();


  $data['value'] = DB::table('add_category')->where('cat_id',$id)->get();
// echo "<pre>";
//   print_r($data['value']);
//   die();

  return view ('adminlte/category/editcategory', $data,$category_data);
}


public function showCategory() {

  $data['data'] = DB::table('add_category')->get();

      if(count ($data)>0){

            return view('adminlte/category/showcategory',$data);
        }

  return view ('adminlte/category/showcategory'); 
    
}


public function addcategory(Request $request) {
 
  $data=[

 'name' => $request->post('name'), 
 'category_url' => str_replace(' ','-',strtolower($request->post('categoryurl'))),
  'meta_title' => $request->post('mtitle'),
   'meta_description' => $request->post('mdescription'),
   'meta_tags' => $request->post('mtags'),
   'description' => $request->post('ckeditor'),
   'image' => $request->post('image'),
   'icon' => $request->post('icon'),
   'bimage' => $request->post('bimage'),
   'parent_category' => $request->post('parentcategory'),
   'status' => $request->post('status'),
   'show_home' => $request->post('show_home'),
   
   
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

        if($request->hasfile('bimage')){
                    $file=$request->file('bimage');
                    $extension=$file->getClientOriginalName();
                    $filename= time(). '.' . $extension;
                    $file->move('images/',$filename);
                    $data['bimage']=$filename;
             } 
             else
        {
             $data['image']=''; 

        }

        if($request->hasfile('icon')){
          $file=$request->file('icon');
          $extension=$file->getClientOriginalName();
          $filename= time(). '.' . $extension;
          $file->move('images/',$filename);
          $data['icon']=$filename;
   } 
   else
{
   $data['image']=''; 

}
        
        DB::table('add_category')->insert($data);
return redirect('admin/category');

}

}


?>
