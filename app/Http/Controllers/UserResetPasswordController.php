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

class UserResetPasswordController extends Controller { 

  public function getPassword($token) { 

     return view('web.customauth.passwords.resetviaemail', ['token' => $token]);
  }

  public function updatePassword(Request $request)
  {

  $upd=[
      // 'email' => 'required|email|exists:login',
      // 'password' => 'required|string|min:6|confirmed',
      // 'password_confirmation' => 'required',

      'email' => $request->input('email'),
                   
   'password' => $request->input('password')

  ];
  print_r($upd);
  die();

print_r($upd);
$random = $request->token;
echo $random;
//die();

$update = DB::table('user_login')->where('random' , $request->token)->update($upd);
print_r($update);
  // $updatePassword = DB::table('login')
  //                     ->where(['email' => $request->email, 'random' => $request->token])
  //                     ->first();



    return redirect('user-login')->with('message', 'Your password has been changed!');

  }
  public function updateverifyCode(Request $request) {
//       echo "die1";
// die();
   $data['meta_title'] = "login";
      $data['meta_description'] = "login";
     $data['meta_tags'] = "login";
       $data['all_category'] = DB::table('add_category')->where('parent_category',0)->where('status',1)->get();
    $data['sub_category_link'] = DB::table('add_category')->where('status',1)->get();
    $data['all_product'] = DB::table('product')->where('status',1)->get(); 
    $data['dynamic'] = DB::table('dynamic')->get();
    $data['contact'] = DB::table('contact')->get();
    $random = $request->input('random');
   
    $checkLogin = DB::table('user_login')->where(['random'=>$random])->get();
     if(count($checkLogin) >0)
    {
        if ($checkLogin[0]->status==1){
               
                return view('web/customauth/passwords/reset',$data)->with('success', 'Login Successfully!');
                
            }
            else{
                Session::flash('error rand code', 'Please Enter Valid Code');
                return redirect('user/forget-password');
            }
    }
     else{
          Session::flash('error rand code', 'Please Enter Valid Code');
          return redirect('user/forget-password');
        }
  }
  public function updatepass(Request $request) {
// echo "die3";
// die();
    $email = $request->input('email');
    $checkLogin = DB::table('user_login')->get();
    $var= $checkLogin[0]->email;
    if ($var==$email) {
      Session::flash('password_update', 'Password Update Successfully !');
            $data=[
  
             'password' => $request->get('password'),
  
            ];
           }
           else {
            Session::flash('password_error', 'Email does not exist');
            return redirect('verify-code');
           }
           DB::table('user_login')->where('email',$email)->update($data);
      Session::flash('Password update msg', 'Password Update Successfully !');
           return redirect('user-login');   
  
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
$update = DB::table('user_login')->where('random' , $request->random)->update($upd);
echo $update;

  if(!$update){
      return back()->withInput()->with('error', 'Invalid token!');
      }
      else{
          
return redirect('/user-login');
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