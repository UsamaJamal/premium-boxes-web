<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
class AdminShowonHomeController extends Controller
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
    public function product_delete($id) { 
       DB::table('product')->where('product_id', $id)->delete();
         return redirect('admin/showproduct');
    }
 
	public function updateShowHome(Request $request,$id) {
    // $id= $request->post('id');

		 $data=[
            'image_tag' => $request->get('altname'),
            'show_cat_id' => $request->get('productcategory'),
            'status' => $request->post('status'),
 ];
 if($request->hasfile('image')){
                    $file=$request->file('image');
                    $extension=$file->getClientOriginalName();
                    $filename=$extension;
                    $file->move('images/',$filename);
                    $data['image']=$filename;

             }
             else{
                $data['image']=$request->input('oldimage');
             }

                
        $data['s']=DB::table('home_show_category_product')->where('show_id', $id)->update($data);
                 // echo "<pre>";
                 // print_r($data);
                 // die();
          return redirect('admin/show_onhome');
	}
	

public function ShowHome() {
   
 $data['addcategory'] = DB::table('add_category')->get(); 
    return view ('adminlte/showonhome/showonhome',$data); 
}
public function addShowHome(Request $request) {
  $data=[
 'image_tag' => $request->get('altname'),
 'show_cat_id' => $request->get('category_id'),
 'status' => $request->post('status'),
 
];
if($request->hasfile('image')){
    $file=$request->file('image');
    $extension=$file->getClientOriginalName();
    $filename = str_replace(' ', '-', $extension);
    $file->move('images/',$filename);
    $data['image']=$filename;
} 
else
{
return  $request;
$data->image=''; 

}

// echo "<prev>";
// print_r($data);
// die();
DB::table('home_show_category_product')->insert($data);
return redirect('admin/showhome'); 
   } 

   public function showonHome() {

  $data['onhome'] = DB::table('home_show_category_product')->get();

      if(count ($data)>0){

            return view('adminlte/showonhome/showcatpro',$data);
        }

  return view ('adminlte/showonhome/showcatpro'); 
    
}     
       public function getShowHome($id) {
      $data['category_data'] = DB::table('add_category')->get();
      $data['editshowonhome'] = DB::table('home_show_category_product')->where('show_id',$id)->get();

       	 // echo "<pre>";
       	 // print_r($data['value']);
       	 // die();
            return view ('adminlte/showonhome/editshowonhome',$data);

       }



}?>