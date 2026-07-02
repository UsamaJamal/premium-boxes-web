<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
class OtherProductController extends Controller
{
   public function OtherProduct() {
    $data['other_product'] = DB::table('other_procuct')->get();
    $meta =DB::table('op_tags')->get();
    $data['meta_title']= $meta[0]->meta_title;
    $data['all_category'] = DB::table('add_category')->where('parent_category',0)->where('status',1)->get();
    $data['sub_category_link'] = DB::table('add_category')->where('status',1)->get();
    $data['all_product'] = DB::table('product')->where('status',1)->get(); 
    $data['all_blog'] = DB::table('blog')->where('status',1)->paginate(5); 
    $data['blog_main_banner'] = DB::table('blog_banner')->get();
    $data['top_blog'] = DB::table('blog')->orderBy('blog_id','desc')->limit(4)->get(); 
      // echo "<pre>";
      // print_r($data);
      // die();
      return view ('web/otherproduct/otherproduct',$data);
  }
 
}

?>
