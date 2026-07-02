<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
class ContactController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware(function ($request, $next){
    //     if(!Session::has('admin_user_name') || !Session::has('admin_user_password')){
    //         return redirect('admin/login'); 
    //     }
    //     return $next($request);
    //     });
    // }
 
 public function Contact() {
    $meta = DB::table('contact_tags')->get();

    $data['meta_title']= $meta[0]->meta_title;
     $data['meta_description']= $meta[0]->meta_description;
     $data['meta_tags']= $meta[0]->meta_tags;
    
    $data['contact_tags'] = DB::table('contact_tags')->get();
    $data['all_category'] = DB::table('add_category')->where('parent_category',0)->where('status',1)->get();
    $data['sub_category_link'] = DB::table('add_category')->where('status',1)->get();
    $data['all_product'] = DB::table('product')->where('status',1)->get(); 
    $data['sub_category_link'] = DB::table('add_category')->where('status',1)->get();
    $data['all_product'] = DB::table('product')->where('status',1)->get();
    $data['blog_main_banner'] = DB::table('blog_banner')->get();
    $data['dynamic'] = DB::table('dynamic')->get();
     $data['value']= DB::table('dynamic')->where('status',1)->where('page_url','contact-us')->get();
    $data['contact'] = DB::table('contact')->get();
    return view ('web/contact/contact',$data); 
}



}


?>
