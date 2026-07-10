<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
class AdminOtherproductController extends Controller
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

  public function deleteOproduct($id)
      {
         DB::table('other_procuct')->where('other_product_id', $id)->delete();
         return redirect('admin/showotherproduct');

         

      }
  public function updateotherProduct(Request $request,$id) {

     $data=[

'title' => $request->get('op_title'),
'other_produrl' => $request->get('op_url'),
 'meta_title' => $request->get('op_mtitle'),
 'meta_description' => $request->get('op_mdescription'),
 'meta_tags' => $request->get('op_mtag'),
 'description' => $request->get('ckeditor'),
 'long_description' => $request->get('long_ckeditor'),
 'altname' => $request->get('op_altname'),
 'related_product' => json_encode($request->get('related')), 

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


                       if($request->hasfile('images'))
                 {
                    foreach($request->file('images') as $image)
                    {
                        $name=$image->getClientOriginalName();
                        $image->move('images/', $name);  
                        $temp_gallery[] = $name;  
                    }
                    if($request->input('oldgallery')){
                    $data['images']=json_encode(array_merge($request->input('oldgallery'),$temp_gallery));
                    }else {
                        $data['images']=json_encode($temp_gallery);
                    }
                 }
                
                 $data['s']= DB::table('other_procuct')->where('other_product_id', $id)->update($data);
                 
          return redirect('admin/showotherproduct');

}





        public function del_galery_otherproduct($name,$id){
if (!empty($id)) {
       $exData = DB::table('other_procuct')->where('other_product_id', $id)->get();
        $exData = json_decode(json_encode($exData), true);
       
       $exImages = json_decode($exData[0]['images']);
       $newImages = array_diff($exImages, array($name));
      
 $data=[
        'images'=>json_encode($newImages),
            ];
       DB::table('other_procuct')->where('other_product_id',$id)->update($data);
       return  redirect('admin/editotherproduct/'.$id);
 }

 else{

echo "image  already deleted";

 }
    }
  
public function getProduct($id) {
  $other_product_data['other_product_data'] = DB::table('other_procuct')->get();

    $data['otherprodata'] = DB::table('other_procuct')->where('other_product_id',$id)->get();

         return view ('adminlte/other_products/editotherproduct',$data,$other_product_data);

}



 public function showOtherproduct() {
   $data['othproduct'] = DB::table('other_procuct')->get();

      if(count ($data)>0){

            return view('adminlte/other_products/showotherproduct',$data);
        }

  return view ('adminlte/other_products/showotherproduct'); 
 }

public function otherProduct() {
 $data['other_product'] = DB::table('other_procuct')->get();

 
    return view ('adminlte/other_products/addproduct',$data); 
}
public function addOtherproduct(Request $request) {
$data=[

 'title' => $request->get('op_title'),
 'other_produrl' => $request->get('op_url'),
 'meta_title' => $request->get('op_mtitle'),
 'meta_description' => $request->get('op_mdescription'),
 'meta_tags' => $request->get('op_mtag'),
 'description' => $request->get('ckeditor'),
 'long_description' => $request->get('long_ckeditor'),
 'image' => $request->get('image'),
 'altname' => $request->get('op_altname'),
 'related_product' => json_encode($request->post('related')),  
];
if($request->hasfile('image')){
                    $file=$request->file('image');
                    $extension=$file->getClientOriginalName();
                    $filename = str_replace(' ', '-', $extension);
                    $file->move('images/',$filename);
                    $data['image']=$filename;
             }   
                     if($request->hasfile('images'))
         {

            foreach($request->file('images') as $image)
            {
                $name=$image->getClientOriginalName();
                $image->move('images/', $name);  
                $dae[] = $name;  
            }


         }
          else
        {
            return  $request;
            $data->image=''; 

        }
        $data['images'] = json_encode($dae);
// echo "<prev>";
// print_r($data);
// die();
DB::table('other_procuct')->insert($data);
return redirect('admin/otherproduct');
}

}


?>
