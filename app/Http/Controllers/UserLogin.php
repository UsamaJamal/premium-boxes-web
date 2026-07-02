<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Session;
class UserLogin extends Controller
{
  public function __construct()
    {
        $this->middleware(function ($request, $next){
        if(!Session::has('web-user-name') || !Session::has('web-user-password')){
            return redirect('user-login'); 
        }
        return $next($request);
        });
    }
    public function userDashboard() {
        $data['meta_title']= "Dashboard";
        $data['meta_tags']= "";
        $data['meta_description']= "";
        $data['contact'] = DB::table('contact')->get();
        $data['dynamic'] = DB::table('dynamic')->get();
        $data['all_category'] = DB::table('add_category')->where('parent_category',0)->where('status',1)->get();
        $data['sub_category_link'] = DB::table('add_category')->where('status',1)->get();
        $data['all_product'] = DB::table('product')->where('status',1)->get();
       
        return view ('web/userloginsingup/userdashboard',$data); 
    }
 public function UserLogout(Request $request){
        Session::forget('web-user-name');
        Session::forget('web-user-password'); 
          Session::forget('status');
        return redirect('/');
      }

      public function chnangeUserPassword(){
        $data['all_category'] = DB::table('add_category')->where('parent_category',0)->where('status',1)->get();
        $data['sub_category_link'] = DB::table('add_category')->where('status',1)->get();
        $data['all_product'] = DB::table('product')->where('status',1)->get(); 
        $data['all_user'] = DB::table('user_login')->where('status',1)->get();
         return view ('web/userloginsingup/changepassword', $data);
            }

            public function updateUserPassword (Request $request){

$email =  Session::get('web-email'); 
                $oldpassword = $request->get('oldpassword');
     
                $checkLogin = DB::table('user_login')->get();              
               
               $var= $checkLogin[0]->password;
                
             if ($var==$oldpassword) {
                Session::flash('password_updates', 'Password Update Successfully !');
                     $data=[
           
                      'password' => $request->get('newpassword'),
           
                     ];

                    }
                    else {
                        Session::flash('password_updates_error', 'Old Password do not match');
                        return redirect ('user-dashboard');
                    }
              
                    $data['s']=DB::table('user_login')->where('email',$email)->update($data);
                 
             return redirect('user-dashboard');
              
               }
    
    
    public function EditUserInfo(Request $request) {
        $email =  Session::get('web-email');
        $data=[
   
            'first_name' => $request->get('fname'),
            'last_name' => $request->get('lname'),
             'user_username' => $request->get('uname'),
              'mobile_number' => $request->get('unumber'),
              'email' => $request->get('uemail'),
   ];
           
    $data['s']=DB::table('user_login')->where('email',$email)->update($data);
   
             return redirect('user-login')->with('infoupdate', 'Your Information have been update Please Login Again!');
   }
      public function EditUserImage(Request $request) {
 $email =  Session::get('web-email'); 
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
           
    $data['s']=DB::table('user_login')->where('email',$email)->update($data);
   
             return redirect('user-login')->with('infoupdate', 'Your Information have been update Please Login Again!');
   }
}
?>
