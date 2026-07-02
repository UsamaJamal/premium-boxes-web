<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Session;
class UserLoginController extends Controller
{

    public function userLOgin(Request $request)
    {
        Session::flash('login_successfully', 'Login Successfully !');
       
       $username = $request->get('name-user');
       $password = $request->get('password-user');
      
       $checkLogin = DB::table('user_login')->where(['user_username'=>$username,'password'=>$password])->get();
    //    print_r($checkLogin);
    //    die();
        if(count($checkLogin) >0)
       {
           if ($checkLogin[0]->status==1){
                   Session::put('web-user-name',$checkLogin[0]->user_username);
                   Session::put('web-user-password',$checkLogin[0]->password);
                   Session::put('web-status',$checkLogin[0]->status);
                   Session::put('web-fname',$checkLogin[0]->first_name);
                   Session::put('web-lname',$checkLogin[0]->last_name);
                   Session::put('web-num',$checkLogin[0]->mobile_number);
                   Session::put('web-image',$checkLogin[0]->image);
                   Session::put('web-email',$checkLogin[0]->email);
                   Session::put('web-date',$checkLogin[0]->date);
                   
                   return redirect('user-dashboard')->with('success', 'Login Successfully!');
               }
               else{
                   Session::flash('error', 'Wrong Details');
                   return redirect('user-login');
               }
           
       }
        else{
             Session::flash('error', 'Name or Password do not match');
             return redirect('user-login');
           }
   // echo "<pre>";print_r($checkLogin);
   // die();
   // return redirect ('dashboard');
      
       }

       public function addUser(Request $request) {
       
        $data=[
    
     'first_name' => $request->get('fname'),
     'last_name' => $request->get('lname'),
      'user_username' => $request->get('uname'),
      'email' => $request->get('email'),
       'password' => $request->get('password'),
       'mobile_number' => $request->get('mnumber'),
       'date' => date('d-m-Y'),    
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
    $data['image']=''; 
}
$pass = $request->get('password');
$c_pass = $request->get('cpassword');

if ($pass == $c_pass) {
      
    Session::flash('success', 'User Registration successfully !!'); 

    DB::table('user_login')->insert($data);
    return redirect('user-register');
    }
    else {
      if ($pass != $c_pass) {
       Session::flash('error', 'Password and Confirm Password does not match');
       }
    }
            return redirect('user-register');
    }


}

?>