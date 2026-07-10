<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
class AdminProductController extends Controller
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
 
	public function updateProduct(Request $request,$id) {
    // $id= $request->post('id');

		 $data=[

'title' => $request->post('title'),
 'url' => str_replace(' ','-',strtolower($request->post('producturl'))),
 'meta_description' => $request->post('metadescription'),
 'meta_tags' => $request->post('metatags'),
 'meta_title' => $request->post('metatitle'),
 'description' => $request->post('ckeditor'),
 'long_description' => $request->post('long_ckeditor'),
 'altname' => $request->post('altname'), 
 'cat_id' => $request->post('productcategory'), 
 'status' => $request->post('status'),
 'show_home' => $request->post('show_home'),
 'related_product' => json_encode($request->post('related')),
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
                
        $data['s']=DB::table('product')->where('product_id', $id)->update($data);
                 // echo "<pre>";
                 // print_r($data);
                 // die();

        // Process FAQs
        $faqQuestions = $request->input('faq_question');
        $faqAnswers = $request->input('faq_answer');
        
        // Delete existing FAQs
        DB::table('product_faqs')->where('product_id', $id)->delete();
        
        if (!empty($faqQuestions) && is_array($faqQuestions)) {
            $faqData = [];
            foreach ($faqQuestions as $index => $question) {
                if (!empty($question) && !empty($faqAnswers[$index])) {
                    $faqData[] = [
                        'product_id' => $id,
                        'question' => $question,
                        'answer' => $faqAnswers[$index],
                        'created_at' => now(),
                        'updated_at' => now()
                    ];
                }
            }
            if (count($faqData) > 0) {
                DB::table('product_faqs')->insert($faqData);
            }
        }

          return redirect('admin/showproduct');
	}
	

public function product() {
   
 $data['addcategory'] = DB::table('add_category')->get();

 $data['product'] = DB::table('product')->get();
 $data['value'] = DB::table('product')->get();


 
    return view ('adminlte/product/product',$data); 
}
public function addproduct(Request $request) {
  $data=[

 'title' => $request->get('title'),
 'url' => str_replace(' ','-',strtolower($request->get('producturl'))),
 'meta_description' => $request->get('metadescription'),
 'meta_tags' => $request->get('metatags'),
 'meta_title' => $request->get('metatitle'),
 'description' => $request->get('ckeditor'),
 'long_description' => $request->get('long_ckeditor'),
 'image' => $request->get('image'),
 'altname' => $request->get('altname'),
 'cat_id' => $request->get('category_id'),
 'status' => $request->post('status'),
 'show_home' => $request->post('show_home'),
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
// print_r($data);
// die();
$product_id = DB::table('product')->insertGetId($data);

        // Process FAQs
        $faqQuestions = $request->input('faq_question');
        $faqAnswers = $request->input('faq_answer');
        
        if (!empty($faqQuestions) && is_array($faqQuestions)) {
            $faqData = [];
            foreach ($faqQuestions as $index => $question) {
                if (!empty($question) && !empty($faqAnswers[$index])) {
                    $faqData[] = [
                        'product_id' => $product_id,
                        'question' => $question,
                        'answer' => $faqAnswers[$index],
                        'created_at' => now(),
                        'updated_at' => now()
                    ];
                }
            }
            if (count($faqData) > 0) {
                DB::table('product_faqs')->insert($faqData);
            }
        }

return redirect('admin/product'); 
   } 

   public function showProduct() {

  $data['product'] = DB::table('product')->get();

      if(count ($data)>0){

            return view('adminlte/product/showproduct',$data);
        }

  return view ('adminlte/product/showproduct'); 
    
}     
       public function getProduct($id) {
      $data['category_data'] = DB::table('add_category')->get();


       	$data['value'] = DB::table('product')->get();

       	 $data['pro'] = DB::table('product')->where('product_id',$id)->get();
         $data['faqs'] = DB::table('product_faqs')->where('product_id', $id)->get();
       	 // echo "<pre>";
       	 // print_r($data['value']);
       	 // die();
       	 return view ('adminlte/product/editproduct',$data);

       }
       public function del_galery_image($name,$id){
        if (!empty($id)) {
               $exData = DB::table('product')->where('product_id', $id)->get();
                $exData = json_decode(json_encode($exData), true);
        
               $exImages = json_decode($exData[0]['images']);
             $exImages  = json_decode(json_encode( $exImages), true);
               $newImages = array_diff($exImages, array($name));
              
         $data=[
                'images'=>json_encode($newImages),
                    ];
               DB::table('product')->where('product_id',$id)->update($data);
               return  redirect('admin/editproduct/'.$id);
         }
         else{
        echo "image  already deleted";
         }
            }  


}?>