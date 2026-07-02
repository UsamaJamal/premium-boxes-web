<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
class AdminDeliveryPolicyController extends Controller
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
 
public function DeliveryPolicy() {

    return view ('adminlte/staticpage/deliveryinformation/deliverypolicy'); 
}
public function addDeliveryPolicy(Request $request) {
	$data=[

 'meta_title' => $request->get('dpmtitle'),
 'meta_description' => $request->get('dpmdescrioption'),
  'meta_tags' => $request->get('dpmtags'),
   
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
 
        DB::table('delivery_information')->insert($data);
return redirect('admin/delivery_information');
}

public function showDeliveryPolicy() {

    $data['delivery_information'] = DB::table('delivery_information')->get();
  
        if(count ($data)>0){
  
              return view('adminlte/staticpage/deliveryinformation/showdeliverypolicy',$data);
          }
  
    return view ('adminlte/staticpage/deliveryinformation/showdeliverypolicy'); 
      
  }

  public function getDeliveryPolicy() {

    $delivery_information_data['delivery_information_data'] = DB::table('about_us')->get();
  
  
    $data['delivery_information'] = DB::table('delivery_information')->get();
  
    
  
    return view ('adminlte/staticpage/deliveryinformation/editdeliverypolicy', $data,$delivery_information_data);
  }
  public function updateDeliveryPolicy(Request $request) {
    $data=[

'meta_title' => $request->get('dpmtitle'),
'meta_description' => $request->get('dpmdescrioption'),
 'meta_tags' => $request->get('dpmtags'),
  
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

         
$data['s']=DB::table('delivery_information')->update($data);
// echo "<pre>";
// print_r($data);
//   die();
         return redirect('admin/edit_delivery_information');
}
public function deleteDeliveryPolicy($id)
      {
         DB::table('delivery_information')->where('dp_id', $id)->delete();
         return redirect('admin/show_delivery_information');
      }
}


?>
