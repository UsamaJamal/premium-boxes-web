<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
class HomePageSettingController extends Controller
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
 

public function PopularCategory() {
   
    $data['addcategory'] = DB::table('add_category')->get();  
    
       return view ('adminlte\homesetting\popularcategory',$data); 
   }

   public function addPopularCategory(Request $request) {

    $data=[
   'category_get' => json_encode($request->post('popular')),
  ];
  DB::table('popular_category')->insert($data);
  return redirect('admin/popularcategory'); 
     } 

    

      public function getPopularCategory() {
        $data['category_data'] = DB::table('add_category')->get();
  
              $data['popular_category'] = DB::table('popular_category')->get();
              // echo "<pre>";
              // print_r($data['value']);
              // die();
              return view ('adminlte/homesetting/editpopularcategory',$data);
  
         }


         public function updatePopularCategory(Request $request) {
            // $id= $request->post('id');
        
                 $data=[
         
         'category_get' => json_encode($request->post('popular')),
         ];
        
                        
                $data['s']=DB::table('popular_category')->update($data);
                  return redirect('admin/edit_popularcategory');
            }


            public function PopularProduct() {
   
                $data['product'] = DB::table('product')->get();  
                
                   return view ('adminlte/homesetting/popularproduct',$data); 
               }
            
               public function addPopularProduct(Request $request) {
            
                $data=[
               'product_get' => json_encode($request->post('pop_product')),
              ];
              DB::table('popular_product')->insert($data);
              return redirect('admin/popularproduct'); 
                 } 
            
                
            
                  public function getPopularProduct() {
                    $data['product'] = DB::table('product')->get();
              
                          $data['popular_product'] = DB::table('popular_product')->get();
                          // echo "<pre>";
                          // print_r($data['value']);
                          // die();
                          return view ('adminlte/homesetting/editpopularproduct',$data);
              
                     }
            
            
                     public function updatePopularProduct(Request $request) {
                        // $id= $request->post('id');
                    
                             $data=[
                     
                     'product_get' => json_encode($request->post('pop_product')),
                     ];
                    
                                    
                            $data['s']=DB::table('popular_product')->update($data);
                              return redirect('admin/edit_popularproduct');
                        }
            
                                 
      
}


?>
