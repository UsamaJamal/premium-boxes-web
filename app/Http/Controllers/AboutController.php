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

    $data['meta_title']= $meta[0]->meta_title ?? 'Privacy Policy';
    $data['meta_description'] = $meta[0]->meta_description ?? '';
    $data['meta_tags'] = $meta[0]->meta_tags ?? '';
    
    $data['all_category'] = DB::table('add_category')->where('parent_category',0)->where('status',1)->get();
    $data['sub_category_link'] = DB::table('add_category')->where('status',1)->get();
    $data['all_product'] = DB::table('product')->where('status',1)->get();
    $data['privacy_policy'] = DB::table('privacy_policy')->get();
    
    $data['dynamic'] = DB::table('dynamic')->get();
    $data['contact'] = DB::table('contact')->get();
  
    return view ('web/privacypolicy/privacypolicy',$data); 
}
public function TermServices() {
    $meta = DB::table('term_condition')->get();

    $data['meta_title']= $meta[0]->meta_title ?? 'Terms and Services';
    $data['meta_description'] = $meta[0]->meta_description ?? '';
    $data['meta_tags'] = $meta[0]->meta_tags ?? '';
    
    $data['all_category'] = DB::table('add_category')->where('parent_category',0)->where('status',1)->get();
    $data['sub_category_link'] = DB::table('add_category')->where('status',1)->get();
    $data['all_product'] = DB::table('product')->where('status',1)->get();
    $data['term_condition'] = DB::table('term_condition')->get();
    
    $data['dynamic'] = DB::table('dynamic')->get();
    $data['contact'] = DB::table('contact')->get();
  
    return view ('web/termservice/termservice',$data); 
}
public function ReturnPolicy() {
    $meta = DB::table('return_page')->get();

    $data['meta_title']= $meta[0]->meta_title ?? 'Return Policy';
    $data['meta_description'] = $meta[0]->meta_description ?? '';
    $data['meta_tags'] = $meta[0]->meta_tags ?? '';
    
    $data['all_category'] = DB::table('add_category')->where('parent_category',0)->where('status',1)->get();
    $data['sub_category_link'] = DB::table('add_category')->where('status',1)->get();
    $data['all_product'] = DB::table('product')->where('status',1)->get();
    $data['return_page'] = DB::table('return_page')->get();
    
    $data['dynamic'] = DB::table('dynamic')->get();
    $data['contact'] = DB::table('contact')->get();
  
    return view ('web/returnpolicy/returnpolicy',$data); 
}
public function FAQuestion() {
    $meta = DB::table('frequently_ask_question')->get();

    $data['meta_title']= $meta[0]->meta_title;
    $data['meta_description']= $meta[0]->meta_description;
    $data['meta_tags']= $meta[0]->meta_tags;
    $data['all_category'] = DB::table('add_category')->where('parent_category',0)->where('status',1)->get();
    $data['sub_category_link'] = DB::table('add_category')->where('status',1)->get();
    $data['all_product'] = DB::table('product')->where('status',1)->get();
    $data['sub_category_link'] = DB::table('add_category')->where('status',1)->get();
    $data['all_product'] = DB::table('product')->where('status',1)->get(); 
    $data['frequently_ask_question'] = DB::table('frequently_ask_question')->get();
    $data['dynamic'] = DB::table('dynamic')->get();
    $data['contact'] = DB::table('contact')->get();
  
    return view ('web/faquestion/faskquestion',$data); 
}
public function SitemapHTML() {
    $meta = DB::table('about_us')->get();
    $data['meta_title'] = 'Sitemap';
    $data['meta_description'] = 'Sitemap of Premium Boxes';
    $data['meta_tags'] = 'sitemap, premium boxes';
    
    $data['all_category'] = DB::table('add_category')->where('parent_category',0)->where('status',1)->get();
    $data['sub_category_link'] = DB::table('add_category')->where('status',1)->get();
    $data['all_product'] = DB::table('product')->where('status',1)->get();
    
    // Fetch data for sitemap
    $data['dynamic_pages'] = DB::table('dynamic')->where('status',1)->get();
    $data['top_categories'] = DB::table('add_category')
        ->where('parent_category',0)
        ->where('status',1)
        ->whereNotIn('name', ['Box by Material', 'Box by Style', 'Box by Industry'])
        ->get();
    
    // We will group subcategories by their parent_category
    $sub_cats = DB::table('add_category')->where('parent_category','!=',0)->where('status',1)->get();
    $grouped_sub_cats = [];
    foreach($sub_cats as $sub) {
        $grouped_sub_cats[$sub->parent_category][] = $sub;
    }
    $data['grouped_sub_cats'] = $grouped_sub_cats;
    
    // We will group products by their category
    $prods = DB::table('product')->where('status',1)->get();
    $grouped_prods = [];
    foreach($prods as $p) {
        $grouped_prods[$p->cat_id][] = $p;
    }
    $data['grouped_prods'] = $grouped_prods;
    
    $data['blogs'] = DB::table('blog')->where('status',1)->get();
    
    return view('web.sitemap.html', $data);
}

}
?>