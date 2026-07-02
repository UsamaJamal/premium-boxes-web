<?php 

namespace App\Http\Controllers; 
use Illuminate\Http\Request; 
use DB; 
use App\User; 
use Hash; 
use Carbon\Carbon; 
use Session;
use Mail; 
use App\Mail\newpassword;
use Illuminate\Mail\Message;
use Illuminate\Support\Facades\Password;

class ResetPasswordController extends Controller { 

  public function getPassword($token) { 

     return view('adminlte.customauth.passwords.resetviaemail', ['token' => $token]);
  }

  public function updatePassword(Request $request)
  {

  $upd=[
      // 'email' => 'required|email|exists:login',
      // 'password' => 'required|string|min:6|confirmed',
      // 'password_confirmation' => 'required',

      'username' => $request->input('email'),
                   
   'password' => $request->input('password')

  ];

print_r($upd);
$random = $request->token;
echo $random;
//die();

$update = DB::table('dashboard_login')->where('random' , $request->token)->update($upd);
print_r($update);
  // $updatePassword = DB::table('login')
  //                     ->where(['email' => $request->email, 'random' => $request->token])
  //                     ->first();



    return redirect('/admin/login')->with('message', 'Your password has been changed!');

  }
  public function updateverifyCode(Request $request) {
    $random = $request->input('random');
   
    $checkLogin = DB::table('dashboard_login')->where(['random'=>$random])->get();
     if(count($checkLogin) >0)
    {
        if ($checkLogin[0]->status==1){
               
                return view('adminlte/customauth/passwords/reset')->with('success', 'Login Successfully!');
                
            }
            else{
                Session::flash('error', 'Wrong Details');
                return redirect('admin/forget-password');
            }
    }
     else{
          Session::flash('error', 'Email Verify Code not match');
          return redirect('admin/forget-password');
        }
  }
  public function updatepass(Request $request) {
    $email = $request->input('email');
    $checkLogin = DB::table('dashboard_login')->get();
    $var= $checkLogin[0]->username;
    if ($var==$email) {
      Session::flash('password_update', 'Password Update Successfully !');
            $data=[
  
             'password' => $request->get('password'),
  
            ];
           }
           else {
            Session::flash('password_error', 'Email does not exist');
            return redirect('admin/verify-code');
           }
           DB::table('dashboard_login')->update($data);
      
           return redirect('admin/login');   
  
  }
  public function updateverifyPassword(Request $request)
  {
     $random = $request->input('random');
  $upd=[          
   'password' => $request->input('password')
  ];
  print_r($upd);
print_r($upd);
$random = $request->token;
echo $random;
$update = DB::table('dashboard_login')->where('random' , $request->random)->update($upd);
echo $update;

  if(!$update){
      return back()->withInput()->with('error', 'Invalid token!');
      }
      else{
return redirect('/admin/login')->with('message', 'Your password has been changed!');
}

// }

// else
// {
//   echo "try again";
// }
print_r($update);
  // $updatePassword = DB::table('login')
  //                     ->where(['email' => $request->email, 'random' => $request->token])
  //                     ->first();



    // $user = User::where('email', $request->email)
    //             ->update(['password' => $request->password]);
    //             echo "Not updated";
    //             die();
    // DB::table('login')->where(['email'=> $request->email])->delete();

    

  }
}