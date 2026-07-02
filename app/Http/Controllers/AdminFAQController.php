<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
class AdminFAQController extends Controller
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
 
public function FAQ() {

    return view ('adminlte/staticpage/faquestion/faquestion'); 
}

   public function getFAQ() {

  $data['faq_data'] = DB::table('frequently_ask_question')->get();

  return view ('adminlte/staticpage/faquestion/editfaquestion', $data);
}

 public function updateFAQ(Request $request) {
     $data=[

'meta_title' => $request->get('faqmtitle'),
 'meta_description' => $request->get('faqmdescrioption'),
  'meta_tags' => $request->get('faqmtags'),
   'description' => $request->get('ckeditor'),    
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
    
 $data['s']=DB::table('frequently_ask_question')->update($data);

          return redirect('admin/edit_faq');
}

public function addFAQ(Request $request) {
	$data=[

        'meta_title' => $request->get('faqmtitle'),
        'meta_description' => $request->get('faqmdescrioption'),
         'meta_tags' => $request->get('faqmtags'),
          'description' => $request->get('ckeditor'), 
     
];
if($request->hasfile('image')){
                    $file=$request->file('image');
                    $extension=$file->getClientOriginalName();
                    $filename= time(). '.' . $extension;
                    $file->move('images/',$filename);
                    $data['image']=$filename;
             } 
             else
        {
            return  $request;
            $data->image=''; 

        }
        DB::table('frequently_ask_question')->insert($data);
return redirect('admin/faq');
}
}

?>
