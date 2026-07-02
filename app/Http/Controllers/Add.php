<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
class Add extends Controller
{
	public function __construct()
    {
        $this->middleware(function ($request, $next){
        if(!Session::has('user_name') || !Session::has('password')){
            return redirect('/'); 
        }
        return $next($request);
        });
    }
 
    public function index()
    {
    	$data['data'] = DB::table('data')->get();
    	if(count ($data)>0){
            return view('add',$data);
        }
       
  
        return view('add');
    }


    public function add_method(Request $request)
    {     
 $message = ['name.required'=>'Name already has taken'];

 $this->validate($request,[
 	'name' =>'required|unique:data||min:4',],$message);
$data=[

 'name' => $request->get('name'),
 'meta_tags' => $request->get('mdescription'),
 'meta_description' => $request->get('mtags'),
 'meta_title' => $request->get('mtitle'),
 'category_url' => $request->get('categoryurl'),
 'image' => $request->get('image'),
];
     $request->session()->flash('message','name already....');
     
 if($request->hasfile('image')){
                    $file=$request->file('image');
                    $extension=$file->getClientOriginalName();
                    $filename= time(). '.' . $extension;
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

DB::table('data')->insert($data);
return redirect('home');
         
    // $users = DB::select('select * from student_details');    

     }

    public function getData()
    {

    	 // echo "<pre>";
    	// $data['data'] = DB::table('data')->get();
    	// if(count ($data)>0){
     //        return view('add',$data);
     //    }
     //    else
     //    {
     //        return view('add');
     //    }
         // print_r($data);
         // die();
         //  return view('add',$data);
    	 
    }
     public function delData($id)
      {
      	 DB::table('data')->where('id', $id)->delete();
      	 return redirect('/');

      	 

      }
        public  function updateData(Request $request,$id){

$data=[

 'name' => $request->get('name'),
 'meta_tags' => $request->get('mdescription'),
 'meta_description' => $request->get('mtags'),
  'meta_title' => $request->get('mtitle'),
 'category_url' => $request->get('categoryurl'),
 'image' => $request->get('image'),
 

];
if($request->hasfile('image')){
                    $file=$request->file('image');
                    $extension=$file->getClientOriginalName();
                    $filename= time(). '.' . $extension;
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


 $data['s']=DB::table('data')->where('id', $id)->update($data);

        	return redirect('/');
        	  }


        public static function getuserData($id){
                   
  $data['value'] = DB::table('data')->where('id',$id)->get();
  return view ('edit_data', $data);
         
              // echo "<pre>";
              // print_r($data);
              //  die();

  }
}
?>