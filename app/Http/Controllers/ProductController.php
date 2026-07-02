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
        $data['search_text'] = $_POST['query'] ?? '';
        
        $data['search_categories'] = DB::table('add_category')
            ->where('name', 'LIKE', '%' . $data['search_text'] . '%')
            ->where('status', 1)
            ->get();
            
        $data['search_products'] = DB::table('product')
            ->where('title', 'LIKE', '%' . $data['search_text'] . '%')
            ->where('status', 1)
            ->get();
            
        $data['search_blogs'] = DB::table('blog')
            ->where('blog_title', 'LIKE', '%' . $data['search_text'] . '%')
            ->where('status', 1)
            ->get();
        
        $data['all_category'] = DB::table('add_category')->where('parent_category',0)->where('status',1)->get();
        $data['sub_category'] = DB::table('add_category')->where('parent_category','!=',0)->where('status',1)->get();
        $data['sub_category_link'] = DB::table('add_category')->where('status',1)->get();
        $data['all_product'] = DB::table('product')->where('status',1)->get();
        
        $meta = DB::table('dynamic')->where('page_url','search')->get();
        if(count($meta) > 0) {
            $data['meta_title'] = $meta[0]->m_title;
            $data['meta_tags'] = $meta[0]->m_tag;
            $data['meta_description'] = $meta[0]->m_des;
        } else {
            $data['meta_title'] = 'Search Results';
            $data['meta_tags'] = '';
            $data['meta_description'] = '';
        }
  
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
                $data['product_faqs'] = DB::table('product_faqs')->where('product_id', $data['product'][0]->product_id)->get();
                $data['reviews'] = DB::table('product_reviews')->where('product_id', $data['product'][0]->product_id)->where('status', 1)->orderBy('id', 'desc')->get();
                
        //   print_r($data['meta_description']);
        //   die();
        
                return view ('web/product/productdetails', $data);
                
                 }
                 else{
                     
                 $data['value'] = DB::table('add_category')->where('category_url',$url)->where('status',1)->get();

                if (in_array($url, ['box-by-material', 'box-by-style', 'box-by-industry'])) {
                    $data['all_category'] = DB::table('add_category')->where('parent_category',0)->where('status',1)->get();
                    $data['sub_category_link'] = DB::table('add_category')->where('status',1)->get();
                    $data['all_product'] = DB::table('product')->where('status',1)->get();
                    $data['contact'] = DB::table('contact')->get();
                    
                    if(count($data['value'])>0) {
                        $data['meta'] = DB::table('add_category')->where('category_url',$url)->get();
                        $data['meta_title']=  $data['value'][0]->meta_title;
                        $data['meta_tags'] = $data['meta']['0']->meta_tags;
                        $data['meta_description'] = $data['meta']['0']->meta_description;
                    } else {
                        $data['meta_title'] = ucfirst(str_replace('-', ' ', $url));
                        $data['meta_tags'] = ucfirst(str_replace('-', ' ', $url));
                        $data['meta_description'] = ucfirst(str_replace('-', ' ', $url));
                    }
                    
                    if (count($data['value']) > 0) {
                        $data['faqs'] = DB::table('category_faqs')->where('category_id', $data['value'][0]->cat_id)->get();
                    } else {
                        $data['faqs'] = [];
                    }
                    
                    $data['slug'] = $url;
                    return view('web/categories/allcategories', $data);
                }
                
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
                      
                      $data['parent_cat'] = null;
                      if ($data['value'][0]->parent_category != 0) {
                          $data['parent_cat'] = DB::table('add_category')->where('cat_id', $data['value'][0]->parent_category)->first();
                      }
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
                    $data['faqs'] = DB::table('category_faqs')->where('category_id', $data['value'][0]->cat_id)->get();
                    $data['slug'] = $url;
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

    public function submitReview(Request $request)
    {
        $request->validate([
            'product_id' => 'required|integer',
            'rating' => 'required|integer|min:1|max:5',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'review_text' => 'required|string'
        ]);

        DB::table('product_reviews')->insert([
            'product_id' => $request->input('product_id'),
            'rating' => $request->input('rating'),
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'review_text' => $request->input('review_text'),
            'status' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        return redirect()->back()->with('review_success', 'Your review has been submitted successfully and is pending approval.');
    }

}

?>
