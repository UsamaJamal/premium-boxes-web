<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
class ProductController extends Controller
{
    
    
    public function error(){
    $data['meta_title'] ='404';
    $data['meta_tags'] = '404';
    $data['meta_description'] = '404';
     $data['dynamic'] = DB::table('dynamic')->get();
    $data['contact'] = DB::table('contact')->get();
       $data['viewonweb'] = DB::table('home_page_content')->get();
    
   $data['testimonial'] = DB::table('testimonila')->get();
   
    $data['home_tab'] = DB::table('home_show_category_product')->get();

   
    $data['home_banner'] = DB::table('home_slider')->get();

    $data['home_content'] = DB::table('home_content')->get();  

    $data['popular_category_data'] = DB::table('popular_category')->get(); 

    $data['popular_product_data'] = DB::table('popular_product')->get(); 

    $data['social_post_data'] = DB::table('socialpost')->get(); 

    $data['show_on_home_category'] = DB::table('add_category')->get();

    $data['value'] = DB::table('add_category')->where('status',1)->get();

    $data['all_category'] = DB::table('add_category')->where('parent_category',0)->where('status',1)->get();
    $data['sub_category_link'] = DB::table('add_category')->where('parent_category','!=',0)->where('status',1)->get();
    $data['all_product'] = DB::table('product')->where('status',1)->get();
    $data['products'] = DB::table('product')->where('status',1)->paginate(8); 
    $data['all_category_popular'] = DB::table('add_category')->where('status',1)->get();
    $data['show_home_1'] = DB::table('home_sliderp')->limit(4)->get();
     $data['show_home_2'] = DB::table('home_sliderc')->orderBy('sliderc_id', 'DESC')->get();
    return view('web/404',$data);
    
    }
    
  public function Search() {
    $data['search_text'] = $_POST['query'];
$data['check_pro']=0;
       $data['searchproduct'] = DB::table('product')->where('title','LIKE','%'.$data['search_text'].'%')->where('status',1)->get();

if(count($data['searchproduct'])<1){
  
      $data['searchproduct'] = DB::table('add_category')->where('name','LIKE','%'.$data['search_text'].'%')->where('status',1)->get();

      if(count($data['searchproduct'])>0){
        $data['check_pro']=2;
      }

}
else{
    $data['check_pro']=1;
}

//  echo "<pre>";
//  print_r($data['searchproduct']);
//  die();
    // $product['searchproduct'] = DB::table('product')->where('title','LIKE','%'.$search_text.'%')->where('status',1)->get();
      $data['all_category'] = DB::table('add_category')->where('parent_category',0)->where('status',1)->get();
      $data['sub_category'] = DB::table('add_category')->where('parent_category','!=',0)->where('status',1)->get();
      $data['sub_category_link'] = DB::table('add_category')->where('status',1)->get();
      $data['all_product'] = DB::table('product')->where('status',1)->get();
      
      $data['meta'] = DB::table('dynamic')->where('page_url','search')->get();
      $data['meta_title'] = $data['meta']['0']->m_title;
      $data['meta_tags'] = $data['meta']['0']->m_tag;
    $data['meta_description'] = $data['meta']['0']->m_des;

      $data['dynamic'] = DB::table('dynamic')->get();
      $data['contact'] = DB::table('contact')->get();

      return view ('web/search/search',$data);
   
   
  }
//  search function 
   public function Product($url) {
       $data['contact'] = DB::table('contact')->get();
       
       $data['all_category'] = DB::table('add_category')->where('parent_category',0)->where('status',1)->get();
       
       $data['sub_category_link'] = DB::table('add_category')->where('status',1)->get();
       
       $data['all_product'] = DB::table('product')->where('status',1)->get(); 
       
       $data['dynamic'] = DB::table('dynamic')->get();
       
    $data['value'] = DB::table('dynamic')->where('page_url',$url)->where('status',1)->get();
    
        if(count($data['value'])>0){
            
            $data= array();   
            
            $data['all_category'] = DB::table('add_category')->where('parent_category',0)->where('status',1)->get();
       
       $data['sub_category_link'] = DB::table('add_category')->where('status',1)->get();
       
       $data['all_product'] = DB::table('product')->where('status',1)->get(); 
            $data['meta']= DB::table('dynamic')->where('status',1)->where('page_url',$url)->get();
            $data['value']= DB::table('dynamic')->where('status',1)->where('page_url',$url)->get();
            $data['meta_title'] = $data['value']['0']->m_title;
            $data['meta_tags'] = $data['meta']['0']->m_tag;
    $data['meta_description'] = $data['meta']['0']->m_des;
            
            $data['dynamic'] = DB::table('dynamic')->get();
      $data['contact'] = DB::table('contact')->get();

            
            return view ('web/dynamic/dynamic', $data);
            
            }
            else
            {
            $data['value'] = DB::table('product')->where('url',$url)->where('status',1)->get();
            
            
            // echo "<pre>";
            // print_r($data['value']);
            // die();
            if(count($data['value'])>0){
                
                $data= array(); 
                
                $data['contact'] = DB::table('contact')->get();
                
       $data['all_category'] = DB::table('add_category')->where('parent_category',0)->where('status',1)->get();
       
       $data['sub_category_link'] = DB::table('add_category')->where('status',1)->get();
       
       $data['all_product'] = DB::table('product')->where('status',1)->get();
       
        $data['dynamic'] = DB::table('dynamic')->get();
        
                $data['product'] = DB::table('product')->where('url',$url)->get();
                // print_r($data['product']);
                // die();
                
                $data['dimension'] = DB::table('dimension')->get();
               
                 $data['meta'] = DB::table('product')->where('url',$url)->get();
                $data['meta_title'] = $data['product']['0']->meta_title;
                $data['meta_tags'] = $data['meta']['0']->meta_tags;
                $data['meta_description'] = $data['meta']['0']->meta_description;
                
        //   print_r($data['meta_description']);
        //   die();
        
                return view ('web/product/productdetails', $data);
                
                 }
                 else{
                     
                 $data['value'] = DB::table('add_category')->where('category_url',$url)->where('status',1)->get();
                
                if(count($data['value'])>0){
                    
                    $data['checkproduct']=0;
                    
                    // $data['category'] = DB::table('add_category')->where('parent_category',0)->where('status',1)->get();
                    
                    // $data['sub'] = DB::table('add_category')->where('parent_category',$data['value'][0]->cat_id)->where('status',1)->get();
                    
                    // $data['sub_product'] = DB::table('product')->where('cat_id',$data['value'][0]->cat_id)->where('status',1)->get();
                    
                    
                    
                    
                      $data['sub_category_link'] = DB::table('add_category')->where('status',1)->get();
                      $data['all_product'] = DB::table('product')->where('status',1)->get(); 
                      $data['all_category'] = DB::table('add_category')->where('parent_category',0)->where('status',1)->get();
                
                      $data['sub'] = DB::table('add_category')->where('parent_category',$data['value'][0]->cat_id)->where('status',1)->get();
                      
                      $data['sub_product'] = DB::table('product')->where('cat_id',$data['value'][0]->cat_id)->where('status',1)->get();
$data['meta'] = DB::table('add_category')->where('category_url',$url)->get();
                    $data['meta_title']=  $data['value'][0]->meta_title;
                    $data['meta_tags'] = $data['meta']['0']->meta_tags;
    $data['meta_description'] = $data['meta']['0']->meta_description;
                    
                    if(count($data['value'])<1){
                        
                        $temp = DB::table('add_category')->where('parent_category',$data['value'][0]->cat_id)->where('status',1)->get();
                        
                        if(!empty($temp)){
                            
                            foreach ($temp as $index) {
                                
                                $temp1=DB::table('product')->where('status',1)->where('cat_id',$index->cat_id)->get();
                                
                                $data['product'] =$data['product']->toBase()->merge($temp1);
                            }
                        }
                    }
                    // echo "<pre>";
                    // print_r($data['sub']);
                    // die();
                    return view('web/categories/categories', $data);
                }
                    else {
     
                        $data['value'] = DB::table('blog')->where('blog_url',$url)->where('status',1)->get();
                        
                      if(count($data['value'])>0){
                        
                        $data['value'] = DB::table('product')->where('url',$url)->where('status',1)->get();
                        
                       $data['contact'] = DB::table('contact')->get();
                       
       $data['all_category'] = DB::table('add_category')->where('parent_category',0)->where('status',1)->get();
       
       $data['sub_category_link'] = DB::table('add_category')->where('status',1)->get();
       
       $data['all_product'] = DB::table('product')->where('status',1)->get();
       
        $data['dynamic'] = DB::table('dynamic')->get();
        
                        $data['blog'] = DB::table('blog')->where('status',1)->orderBy('blog_id','DESC')->paginate(4);
                        
                        $data['meta'] = DB::table('blog')->where('blog_url',$url)->get();
                    
                        $data['meta_title'] = $data['meta']['0']->meta_title;
                        $data['meta_tags'] = $data['meta']['0']->meta_tags;
                        $data['meta_description'] = $data['meta']['0']->meta_description;
                  
                        return view ('web/blog/blogdetails', $data);
                      }
                      
                      else{
                          
                        $data['other_single_product'] = DB::table('other_procuct')->where('other_produrl',$url)->get();
                         if(count($data['value'])>0){
                        
                      $data['blog_single_value'] = DB::table('blog')->where('blog_url',$url)->where('status',1)->get();
                     
                      $data['all_blog'] = DB::table('blog')->where('status',1)->get(); 
                     
                      $data['top_blog'] = DB::table('blog')->orderBy('blog_id','desc')->limit(4)->get(); 
                      
                      $data['blog_main_banner'] = DB::table('blog_banner')->get(); 
                      
                      $data['meta_title']=  $data['other_single_product'][0]->meta_title;
                      $data['meta_tags'] = $data['other_single_product']['0']->m_tag;
                      $data['meta_description'] = $data['other_single_product']['0']->m_des;
                      
                      
                        return view ('web/otherproduct/singleotherproduct',$data);
                      }
                           else {
             return redirect ('404.php');
        
    }
                      }    
                }
                
            }
            
        }
    }


}

?>
