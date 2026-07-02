<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
class BlogController extends Controller
{
  public function BlogSearch() {
    $search_text = $_GET['blogquery']; 
    $data['searchblog'] = DB::table('blog')->where('blog_title','LIKE','%'.$search_text.'%')->get();
    $data['all_category'] = DB::table('add_category')->where('parent_category',0)->where('status',1)->get();
    $data['sub_category_link'] = DB::table('add_category')->where('status',1)->get();
    $data['all_product'] = DB::table('product')->where('status',1)->get(); 
    $data['all_blog'] = DB::table('blog')->where('status',1)->paginate(5); 
    $data['blog_main_banner'] = DB::table('blog_banner')->get();
    $data['top_blog'] = DB::table('blog')->orderBy('blog_id','desc')->limit(4)->get();
     $data['meta'] = DB::table('dynamic')->where('page_url','/')->get();
    $data['meta_title'] = $data['meta']['0']->m_title;
    $data['meta_tags'] = $data['meta']['0']->m_tag;
    $data['meta_description'] = $data['meta']['0']->m_des;
 
    $data['dynamic'] = DB::table('dynamic')->get();
      $data['contact'] = DB::table('contact')->get();
      return view ('web/blog/blogsearch',$data);
   
   
  }
//  search function 
   public function Blog() {
   $data['meta'] = DB::table('dynamic')->where('page_url','/')->get();
    $data['meta_title'] = $data['meta']['0']->m_title;
    $data['meta_tags'] = $data['meta']['0']->m_tag;
    $data['meta_description'] = $data['meta']['0']->m_des;
    $data['all_category'] = DB::table('add_category')->where('parent_category',0)->where('status',1)->get();
    $data['sub_category_link'] = DB::table('add_category')->where('status',1)->get();
    $data['all_product'] = DB::table('product')->where('status',1)->get(); 
    $data['all_blog'] = DB::table('blog')->where('status',1)->get(); 
    $data['blog_main_banner'] = DB::table('blog_banner')->get();
    $data['top_blog'] = DB::table('blog')->orderBy('blog_id','desc')->limit(4)->get(); 
    $data['dynamic'] = DB::table('dynamic')->get();
    $data['contact'] = DB::table('contact')->get();
      return view ('web/blog/blog',$data);
  }
  public function SingleBlogPage($url) {
    $data['blog_single_value'] = DB::table('blog')->where('blog_url',$url)->where('status',1)->get();
    $data['all_category'] = DB::table('add_category')->where('parent_category',0)->where('status',1)->get();
    $data['sub_category_link'] = DB::table('add_category')->where('status',1)->get();
    $data['all_product'] = DB::table('product')->where('status',1)->get(); 
    $data['all_blog'] = DB::table('blog')->where('status',1)->get(); 
    $data['top_blog'] = DB::table('blog')->orderBy('blog_id','desc')->limit(4)->get(); 
    $data['blog_main_banner'] = DB::table('blog_banner')->get(); 
    $data['meta_title']= $data['blog_single_value'][0]->meta_title;
      return view ('web/blog/singleblog',$data);
  }
  
}

?>
