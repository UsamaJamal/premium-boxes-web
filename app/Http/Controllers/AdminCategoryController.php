<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Schema;
class AdminCategoryController extends Controller
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
 

   public function deleteData($id)
      {
         DB::table('category_faqs')->where('category_id', $id)->delete();
         DB::table('add_category')->where('cat_id', $id)->delete();
         return redirect('admin/showcategory');
      }

  public function updateCategory(Request $request,$id) {
   
     $data=[

 'name' => $request->post('name'),
 'category_url' => str_replace(' ','-',strtolower($request->post('categoryurl'))),
  'meta_title' => $request->post('mtitle'),
   'meta_description' => $request->post('mdescription'),
   'meta_tags' => $request->post('mtags'),
	   'description' => $request->post('ckeditor'),
   'parent_category' => $request->post('parentcategory'),
   'status' => $request->post('status'),
   'show_home' => $request->post('show_home'),
   'hero_title' => $request->post('hero_title'),
   'hero_desc' => $request->post('hero_desc'),
   'schema' => $request->post('schema'),
   'why_choose_title' => $request->post('why_choose_title'),
   'why_choose_desc' => $request->post('why_choose_desc'),
   'image_badge' => $request->post('image_badge'),
   'feature_title' => $request->post('feature_title'),
   'feature_description' => $request->post('feature_description'),
	   'show_in_nav' => $request->has('show_in_nav') ? 1 : 0,
	];
    if (Schema::hasColumn('add_category', 'robots')) {
        $data['robots'] = $request->post('robots');
    }

// print_r($data);
// die();


if($request->hasfile('image')){
                    $file=$request->file('image');
                    $extension=str_replace(' ', '-', $file->getClientOriginalName());
                    $filename= $extension;
                    $file->move('images/',$filename);
                    $data['image']=$filename;

             }
             else{
                $data['image']=$request->input('oldimage');
             }

             if($request->hasfile('bimage')){
                    $file=$request->file('bimage');
                    $extension=str_replace(' ', '-', $file->getClientOriginalName());
                    $filename= $extension;
                    $file->move('images/',$filename);
                    $data['bimage']=$filename;

             }
             else{
                $data['bimage']=$request->input('oldbaner');
             }

             if($request->hasfile('hero_image')){
                    $file=$request->file('hero_image');
                    $extension=str_replace(' ', '-', $file->getClientOriginalName());
                    $filename= $extension;
                    $file->move('images/',$filename);
                    $data['hero_image']=$filename;
             }
             else{
                $data['hero_image']=$request->input('old_hero_image');
             }

             if($request->hasfile('icon')){
              $file=$request->file('icon');
              $filename= str_replace(' ', '-', $file->getClientOriginalName());
              $file->move('images/',$filename);
              $data['icon']=$filename;

       }
       else{
           if ($request->input('remove_icon') == '1') {
               $data['icon'] = null;
           } else {
               $data['icon']=$request->input('oldfav-icon');
           }
       }

              if($request->hasfile('feature_product')){
                     $file=$request->file('feature_product');
                     $filename=str_replace(' ', '-', $file->getClientOriginalName());
                     $file->move('images/',$filename);
                     $data['feature_product']=$filename;
              }
              else{
                 if($request->input('remove_feature_product') == '1') {
                     $data['feature_product'] = null;
                 } else {
                     $data['feature_product']=$request->input('old_feature_product');
                 }
              }

              if($request->hasfile('why_choose_img')){
                     $file=$request->file('why_choose_img');
                     $extension=str_replace(' ', '-', $file->getClientOriginalName());
                     $filename= $extension;
                     $file->move('images/',$filename);
                     $data['why_choose_img']=$filename;
              }
              else{
                 if($request->input('remove_why_choose_img') == 1) {
                     $data['why_choose_img'] = '';
                 } else {
                     $data['why_choose_img'] = $request->input('old_why_choose_img');
                 }
              }



 $data['s']=DB::table('add_category')->where('cat_id', $id)->update($data);

        // Process FAQs
        $faqQuestions = $request->input('faq_question');
        $faqAnswers = $request->input('faq_answer');
        
        file_put_contents(public_path('faq_debug.txt'), print_r($_POST, true));

        \Log::info('FAQ Data from Form:', ['q' => $faqQuestions, 'a' => $faqAnswers]);

        // Delete existing FAQs
        DB::table('category_faqs')->where('category_id', $id)->delete();
        
        if (!empty($faqQuestions) && is_array($faqQuestions)) {
            $faqData = [];
            foreach ($faqQuestions as $index => $question) {
                if (!empty($question) && !empty($faqAnswers[$index])) {
                    $faqData[] = [
                        'category_id' => $id,
                        'question' => $question,
                        'answer' => $faqAnswers[$index],
                        'created_at' => now(),
                        'updated_at' => now()
                    ];
                }
            }
            \Log::info('Inserting FAQs:', $faqData);
            if (count($faqData) > 0) {
                DB::table('category_faqs')->insert($faqData);
            }
        }

          return redirect('admin/showcategory');
}

public function category() {
 $data['data'] = DB::table('add_category')->get();

 
    return view ('adminlte/category/category',$data); 
}

public function getCategory($id) {
  $category_data['category_data'] = DB::table('add_category')->get();


  $data['value'] = DB::table('add_category')->where('cat_id',$id)->get();
  $data['faqs'] = DB::table('category_faqs')->where('category_id', $id)->get();

  return view ('adminlte/category/editcategory', $data,$category_data);
}


public function showCategory() {

  $data['data'] = DB::table('add_category')->get();

      if(count ($data)>0){

            return view('adminlte/category/showcategory',$data);
        }

  return view ('adminlte/category/showcategory'); 
    
}


public function addcategory(Request $request) {
 
  $data=[

 'name' => $request->post('name'), 
 'category_url' => str_replace(' ','-',strtolower($request->post('categoryurl'))),
  'meta_title' => $request->post('mtitle'),
   'meta_description' => $request->post('mdescription'),
   'meta_tags' => $request->post('mtags'),
	   'description' => $request->post('ckeditor'),
   'image' => $request->post('image'),
   'icon' => $request->post('icon'),
   'bimage' => $request->post('bimage'),
   'parent_category' => $request->post('parentcategory'),
   'status' => $request->post('status'),
   'show_home' => $request->post('show_home'),
   'schema' => $request->post('schema'),
   'why_choose_title' => $request->post('why_choose_title'),
   'why_choose_desc' => $request->post('why_choose_desc'),
   'image_badge' => $request->post('image_badge'),
   'feature_title' => $request->post('feature_title'),
   'feature_description' => $request->post('feature_description'),
 'show_in_nav' => $request->has('show_in_nav') ? 1 : 0,
	];
    if (Schema::hasColumn('add_category', 'robots')) {
        $data['robots'] = $request->post('robots');
    }

if($request->hasfile('image')){
                    $file=$request->file('image');
                    $extension=$file->getClientOriginalName();
                    $filename= str_replace(' ', '-', $extension);
                    $file->move('images/',$filename);
                    $data['image']=$filename;
             } 
             else
        {
            $data['image']=''; 

        }

        if($request->hasfile('bimage')){
                    $file=$request->file('bimage');
                    $extension=$file->getClientOriginalName();
                    $filename= str_replace(' ', '-', $extension);
                    $file->move('images/',$filename);
                    $data['bimage']=$filename;
             } 
             else
        {
             $data['image']=''; 

        }

        if($request->hasfile('icon')){
          $file=$request->file('icon');
          $filename= str_replace(' ', '-', $file->getClientOriginalName());
          $file->move('images/',$filename);
          $data['icon']=$filename;
   } 
   else
{
   $data['image']=''; 

}

        if($request->hasfile('feature_product')){
          $file=$request->file('feature_product');
          $filename=str_replace(' ', '-', $file->getClientOriginalName());
          $file->move('images/',$filename);
          $data['feature_product']=$filename;
        }
        if($request->hasfile('why_choose_img')){
          $file=$request->file('why_choose_img');
          $extension=$file->getClientOriginalName();
          $filename= str_replace(' ', '-', $extension);
          $file->move('images/',$filename);
          $data['why_choose_img']=$filename;
        }
        
        $category_id = DB::table('add_category')->insertGetId($data);

        // Process FAQs
        $faqQuestions = $request->input('faq_question');
        $faqAnswers = $request->input('faq_answer');
        
        if (!empty($faqQuestions) && is_array($faqQuestions)) {
            $faqData = [];
            foreach ($faqQuestions as $index => $question) {
                if (!empty($question) && !empty($faqAnswers[$index])) {
                    $faqData[] = [
                        'category_id' => $category_id,
                        'question' => $question,
                        'answer' => $faqAnswers[$index],
                        'created_at' => now(),
                        'updated_at' => now()
                    ];
                }
            }
            if (count($faqData) > 0) {
                DB::table('category_faqs')->insert($faqData);
            }
        }

return redirect('admin/category');

}

}


?>
