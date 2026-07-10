<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
class AdminBlogController extends Controller
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

 // blog slider or banner section 
 public function updateBanner(Request $request,$id) {
     $data=[

    'altname' => $request->get('banneraname'), 
  
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

          
 $data['s']=DB::table('blog_banner')->where('blog_banner_id', $id)->update($data);

          return redirect('admin/showbanner');
}

       public function getBanner($id) {

  $banner_data['banner_data'] = DB::table('blog_banner')->get();


  $data['banner'] = DB::table('blog_banner')->where('blog_banner_id',$id)->get();

  

  return view ('adminlte/blog/editbanner', $data,$banner_data);
}
public function showBanner() {

  $data['banner'] = DB::table('blog_banner')->get();

      if(count ($data)>0){

            return view('adminlte/blog/showbanner',$data);
        }

  return view ('adminlte/blog/showbanner'); 
    
}


public function deleteBanner($id)
      {
         DB::table('blog_banner')->where('blog_banner_id', $id)->delete();
         return redirect('admin/showbanner');
      }

public function blogBanner() {

    return view ('adminlte/blog/blogbanner'); 
}

public function addBanner(Request $request) {

    $data=[
   'image' => $request->get('image'),
   'altname' => $request->get('banneraname'),
     
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
 
        DB::table('blog_banner')->insert($data);
return redirect('admin/blogbanner'); 
}

 
    // Brand controller with function
    public function Brand() {

    return view ('adminlte/blog/brand'); 
}
public function addBrand(Request $request) {
	$data=[
 'url' => str_replace(' ','-',strtolower($request->get('brandurl'))),
    'alt_tag' => $request->get('brandalttag'),  

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
           
            $data['image']=''; 

        }
 
        DB::table('brand')->insert($data);
return redirect('admin/brand');
}

public function showBrand() {

  $data['brand'] = DB::table('brand')->get();

      if(count ($data)>0){

            return view('adminlte/blog/showbrand',$data);
        }

  return view ('adminlte/blog/showbrand'); 
    
}

public function deleteBrand($id)
      {
         DB::table('brand')->where('brand_id', $id)->delete();
         return redirect('admin/showbrand');
      }
      
         public function getBrand($id) {

  $blog_data['brand_data'] = DB::table('brand')->get();


  $data['brand'] = DB::table('brand')->where('brand_id',$id)->get();

  

  return view ('adminlte/blog/editbrand', $data,$blog_data);
}

 public function updateBrand(Request $request,$id) {
     $data=[

 'url' => str_replace(' ','-',strtolower($request->get('brandurl'))),
    'alt_tag' => $request->get('brandalttag'), 
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

          
 $data['s']=DB::table('brand')->where('brand_id', $id)->update($data);
 // echo "<pre>";
 // print_r($data);
 //   die();
          return redirect('admin/showbrand');
}
     // Brand controller with function
     
 // blog slider or banner section 
public function blog() {

    return view ('adminlte/blog/blog'); 
}
public function showBlog() {

  $data['blog'] = DB::table('blog')->get();

      if(count ($data)>0){

            return view('adminlte/blog/showblog',$data);
        }

  return view ('adminlte/blog/showblog'); 
    
}




public function deleteBlog($id)
      {
         DB::table('blog')->where('blog_id', $id)->delete();
         return redirect('admin/showblog');
      }



   public function getBlog($id) {

  $blog_data['blog_data'] = DB::table('blog')->get();


  $data['blog'] = DB::table('blog')->where('blog_id',$id)->get();

  

  return view ('adminlte/blog/editblog', $data,$blog_data);
}

 public function updateBlog(Request $request,$id) {
     $data=[

 'blog_title' => $request->get('blogtitle'),
 'blog_url' => str_replace(' ','-',strtolower($request->get('blogurl'))),
  'meta_title' => $request->get('blogmtitle'),
   'meta_description' => $request->get('blogmdescrioption'),
   'meta_tags' => $request->get('blogmtags'),
   'author_name' => $request->get('bloganame'),
   'author_description' => $request->get('author_description'),
   'tag_cloud' => $request->get('blogtcloud'),
   'long_description' => $request->get('ckeditor'),
    'alt_tag' => $request->get('blogalttag'), 
    'status' => $request->get('status'),
    'set_home' => $request->get('set_home') ?? 0,
    'schema' => $request->get('schema'),
   
   
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

          
 $data['s']=DB::table('blog')->where('blog_id', $id)->update($data);
 // echo "<pre>";
 // print_r($data);
 //   die();
          return redirect('admin/showblog');
}

public function addBlog(Request $request) {
	$data=[

 'blog_title' => $request->get('blogtitle'),
 'blog_url' => str_replace(' ','-',strtolower($request->get('blogurl'))),
  'meta_title' => $request->get('blogmtitle'),
   'meta_description' => $request->get('blogmdescrioption'),
   'meta_tags' => $request->get('blogmtags'),
   'author_name' => $request->get('bloganame'),
   'author_description' => $request->get('author_description'),
   'tag_cloud' => $request->get('blogtcloud'),
   'long_description' => $request->get('ckeditor'),
   'image' => $request->get('image'),
    'alt_tag' => $request->get('blogalttag'),  
    'date' => date('Y-m-d'), 
    'status' => $request->post('status'),
    'set_home' => $request->post('set_home') ?? 0,
    'schema' => $request->get('schema'),
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
 
        DB::table('blog')->insert($data);
return redirect('admin/blog');
}
































    // promotions controller with function
    public function Promotions() {

    return view ('adminlte/blog/promotions'); 
}
public function addPromotions(Request $request) {
	$data=[
 'url' => str_replace(' ','-',strtolower($request->input('promotionsurl'))),
    'alt_tag' => $request->input('promotionsalttag'),  

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
           
            $data['image']=''; 

        }
 
        DB::table('promotions')->insert($data);
return redirect('admin/promotions');
}

public function showPromotions() {

  $data['promotions'] = DB::table('promotions')->get();

      if(count ($data)>0){

            return view('adminlte/blog/showpromotions',$data);
        }

  return view ('adminlte/blog/showpromotions'); 
    
}

public function deletePromotions($id)
      {
         DB::table('promotions')->where('promotions_id', $id)->delete();
         return redirect('admin/showpromotions');
      }
      
         public function getPromotions($id) {

  $data['promotions'] = DB::table('promotions')->where('promotions_id',$id)->get();

//   print_r($data);
//   die();

  return view ('adminlte/blog/editpromotions', $data);
}

 public function updatePromotions(Request $request,$id) {
     $data=[

 'url' => str_replace(' ','-',strtolower($request->input('promotionsurl'))),
    'alt_tag' => $request->input('promotionsalttag'), 
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

          
 $data['s']=DB::table('promotions')->where('promotions_id', $id)->update($data);
 // echo "<pre>";
 // print_r($data);
 //   die();
          return redirect('admin/showpromotions');
}
     // Brand controller with function



}


?>
