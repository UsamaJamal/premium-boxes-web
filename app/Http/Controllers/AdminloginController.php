<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
class AdminloginController extends Controller
{
public function view(){
return view('adminlte/adminlogin');
}
public function dashboardlogin(Request $request)
 {
     Session::flash('login_successfully', 'Login Successfully !');
	
    $username = $request->get('adminuser');
    $password = $request->get('adminpassword');
    $checkLogin = DB::table('dashboard_login')->where(['username'=>$username,'password'=>$password])->get();
     if(count($checkLogin) >0)
    {
        if ($checkLogin[0]->status==1){
                Session::put('admin_user_name',$checkLogin[0]->username);
                Session::put('admin_user_password',$checkLogin[0]->password);
                
                Session::put('status',$checkLogin[0]->status);
                
                return redirect('admin/dashboard')->with('success', 'Login Successfully!');
            }
            else{
                Session::flash('error', 'Wrong Details');
                return redirect('admin/login');
            }
    }
     else{
          Session::flash('error', 'Name or Password do not match');
          return redirect('admin/login');
        }
    }
    public function changepassword(){
$dashboard['dashboard'] = DB::table('dashboard_login')->get();
      return view ('adminlte/changepassword',$dashboard);
    }
    public function updatepassword(Request $request){
     $oldpassword = $request->get('oldpassword');
     $checkLogin = DB::table('dashboard_login')->get();
    $var= $checkLogin[0]->password;
  if ($var==$oldpassword) {
    Session::flash('password_update', 'Password Update Successfully !');
          $data=[

           'password' => $request->get('newpassword'),

          ];
         }
         else {
          Session::flash('password_error', 'Old Password do not match');
          return redirect('changepassword');
         }
      DB::table('dashboard_login')->update($data);
      
      return redirect('changepassword');   
    }
    public function dashboardlogout(Request $request){
      Session::forget('user_name');
      Session::forget('password'); 
        Session::forget('status');
      return redirect('admin/login');
    }
}


?>

