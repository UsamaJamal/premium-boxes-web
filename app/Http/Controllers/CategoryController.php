<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
class CategoryController extends Controller
{

   public function Category($url) {  
  $data['value'] = DB::table('add_category')->where('category_url',$url)->where('status',1)->get();
  $data['all_category'] = DB::table('add_category')->where('parent_category',0)->where('status',1)->get();
  $data['sub'] = DB::table('add_category')->where('parent_category',$data['value'][0]->cat_id)->where('status',1)->get();
  $data['all_product'] = DB::table('product')->where('status',1)->get(); 
  $data['sub_category_link'] = DB::table('add_category')->where('status',1)->get();

  
//   return view ('web/category/category',$data);
}

 




}


?>
