<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
class AboutController extends Controller
{
  
 
 public function About() {
    $meta = DB::table('about_us')->get();

    $data['meta_title']= $meta[0]->meta_title;
    $data['meta_description']= $meta[0]->meta_description;
     $data['meta_tags']= $meta[0]->meta_tags;
    $data['all_category'] = DB::table('add_category')->where('parent_category',0)->where('status',1)->get();
    $data['sub_category_link'] = DB::table('add_category')->where('status',1)->get();
    $data['all_product'] = DB::table('product')->where('status',1)->get();
    $data['sub_category_link'] = DB::table('add_category')->where('status',1)->get();
    $data['all_product'] = DB::table('product')->where('status',1)->get(); 
    $data['about'] = DB::table('about_us')->get();
    $data['blog_main_banner'] = DB::table('blog_banner')->get();
    $data['dynamic'] = DB::table('dynamic')->get();
     $data['value']= DB::table('dynamic')->where('status',1)->where('page_url','about-us')->get();
    $data['contact'] = DB::table('contact')->get();
  
    return view ('web/about/about',$data); 
}

public function DeliveryInformation() {
    $meta = DB::table('delivery_information')->get();

    $data['meta_title']= $meta[0]->meta_title;
    $data['all_category'] = DB::table('add_category')->where('parent_category',0)->where('status',1)->get();
    $data['sub_category_link'] = DB::table('add_category')->where('status',1)->get();
    $data['all_product'] = DB::table('product')->where('status',1)->get();
    $data['sub_category_link'] = DB::table('add_category')->where('status',1)->get();
    $data['all_product'] = DB::table('product')->where('status',1)->get(); 
    $data['delivery_information'] = DB::table('delivery_information')->get();
  
    return view ('web/delivery/deliveryinformation',$data); 
}

public function PrivacyPolicy() {
    $meta = DB::table('privacy_policy')->get();

    $data['meta_title']= $meta[0]->meta_title;
    $data['all_category'] = DB::table('add_category')->where('parent_category',0)->where('status',1)->get();
    $data['sub_category_link'] = DB::table('add_category')->where('status',1)->get();
    $data['all_product'] = DB::table('product')->where('status',1)->get();
    $data['sub_category_link'] = DB::table('add_category')->where('status',1)->get();
    $data['all_product'] = DB::table('product')->where('status',1)->get(); 
    $data['privacy_policy'] = DB::table('privacy_policy')->get();
  
    return view ('web/privacypolicy/privacypolicy',$data); 
}
public function TermServices() {
    $meta = DB::table('term_condition')->get();

    $data['meta_title']= $meta[0]->meta_title;
    $data['all_category'] = DB::table('add_category')->where('parent_category',0)->where('status',1)->get();
    $data['sub_category_link'] = DB::table('add_category')->where('status',1)->get();
    $data['all_product'] = DB::table('product')->where('status',1)->get();
    $data['sub_category_link'] = DB::table('add_category')->where('status',1)->get();
    $data['all_product'] = DB::table('product')->where('status',1)->get(); 
    $data['term_condition'] = DB::table('term_condition')->get();
  
    return view ('web/termservice/termservice',$data); 
}
public function ReturnPolicy() {
    $meta = DB::table('return_page')->get();

    $data['meta_title']= $meta[0]->meta_title;
    $data['all_category'] = DB::table('add_category')->where('parent_category',0)->where('status',1)->get();
    $data['sub_category_link'] = DB::table('add_category')->where('status',1)->get();
    $data['all_product'] = DB::table('product')->where('status',1)->get();
    $data['sub_category_link'] = DB::table('add_category')->where('status',1)->get();
    $data['all_product'] = DB::table('product')->where('status',1)->get(); 
    $data['return_page'] = DB::table('return_page')->get();
  
    return view ('web/returnpolicy/returnpolicy',$data); 
}
public function FAQuestion() {
    $meta = DB::table('frequently_ask_question')->get();

    $data['meta_title']= $meta[0]->meta_title;
    $data['all_category'] = DB::table('add_category')->where('parent_category',0)->where('status',1)->get();
    $data['sub_category_link'] = DB::table('add_category')->where('status',1)->get();
    $data['all_product'] = DB::table('product')->where('status',1)->get();
    $data['sub_category_link'] = DB::table('add_category')->where('status',1)->get();
    $data['all_product'] = DB::table('product')->where('status',1)->get(); 
    $data['frequently_ask_question'] = DB::table('frequently_ask_question')->get();
  
    return view ('web/faquestion/faskquestion',$data); 
}

}


?>