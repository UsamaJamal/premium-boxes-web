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
    if ($data['blog_single_value']->isEmpty()) {
        abort(404);
    }
    $data['meta'] = $data['blog_single_value'];
    $data['all_category'] = DB::table('add_category')->where('parent_category',0)->where('status',1)->get();
    $data['sub_category_link'] = DB::table('add_category')->where('status',1)->get();
    $data['all_product'] = DB::table('product')->where('status',1)->get(); 
    $data['all_blog'] = DB::table('blog')->where('status',1)->get(); 
    $data['top_blog'] = DB::table('blog')->orderBy('blog_id','desc')->limit(4)->get(); 
    $data['blog'] = $data['top_blog'];
    $data['blog_main_banner'] = DB::table('blog_banner')->get(); 
    $data['dynamic'] = DB::table('dynamic')->get();
    $data['contact'] = DB::table('contact')->get();
    $data['meta_title']= $data['blog_single_value'][0]->meta_title;
    $data['meta_tags']= $data['blog_single_value'][0]->meta_tags;
    $data['meta_description']= $data['blog_single_value'][0]->meta_description;
      return view ('web/blog/blogdetails',$data);
  }
  public function AuthorPage($name) {
    $decodedName = urldecode($name);
    $data['author_name'] = $decodedName;
    
    $authorBlogs = DB::table('blog')->where('author_name', $decodedName)->where('status', 1)->get();
    
    if ($authorBlogs->isEmpty()) {
        abort(404);
    }
    
    $data['author_description'] = $authorBlogs[0]->author_description;
    $data['blogs'] = $authorBlogs;
    
    $data['all_category'] = DB::table('add_category')->where('parent_category',0)->where('status',1)->get();
    $data['sub_category_link'] = DB::table('add_category')->where('status',1)->get();
    $data['all_product'] = DB::table('product')->where('status',1)->get(); 
    $data['top_blog'] = DB::table('blog')->orderBy('blog_id','desc')->limit(4)->get(); 
    $data['dynamic'] = DB::table('dynamic')->get();
    $data['contact'] = DB::table('contact')->get();
    
    // Default meta for author page
    $data['meta_title'] = "Posts by " . $decodedName . " | Premium Boxes";
    $data['meta_tags'] = "author, " . $decodedName . ", blog posts, premium boxes";
    $data['meta_description'] = "Read all articles written by " . $decodedName . " on Premium Boxes.";
    
    return view('web/blog/author', $data);
  }
}

?>
