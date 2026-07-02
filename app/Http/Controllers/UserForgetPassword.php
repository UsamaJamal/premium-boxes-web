<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use DB; 
use Carbon\Carbon; 
use Session;
use Mail; 
use Illuminate\Mail\Message;
use Illuminate\Support\Facades\Password;

class UserForgetPassword extends Controller
{
  public function getEmail()
  {
     $data['meta_title'] = "login";
     $data['meta_description'] = "login";
     $data['meta_tags'] = "login";
       $data['all_category'] = DB::table('add_category')->where('parent_category',0)->where('status',1)->get();
    $data['sub_category_link'] = DB::table('add_category')->where('status',1)->get();
    $data['all_product'] = DB::table('product')->where('status',1)->get(); 
    $data['dynamic'] = DB::table('dynamic')->get();
    $data['contact'] = DB::table('contact')->get();

     return view('web.customauth.passwords.email',$data);
  }

  public function forgot_randcode (Request $request) {
    $email = $request->input('email');
    $checkLogin = DB::table('user_login')->get();
    $useremail=$checkLogin[0]->email;
    //  echo "<pre>";
    // print_r($useremail);
    // die();
    Session::flash('pricing','Your Query Submmited Our Sale Representer Contact Your Soon !');
          $subject='pricing';
    if($useremail == $email) {
     $randomfun = rand(0,1000);   
     $data=[
         
          'random' => $randomfun,

         ];
          DB::table('user_login')->where('email',$useremail)->update($data);
          
        //   echo "------------------ We have e-mailed your password reset verification code! ------------------";
         
          Mail::send('web.customauth.verify', ['token' => $randomfun], function($message) use($request){
            $message->to($request->email);
            $message->subject('Reset Password Notification');
        });
   $data['meta_title'] = "safj";
    $data['meta_description'] = "login";
     $data['meta_tags'] = "login";
     $data['all_category'] = DB::table('add_category')->where('parent_category',0)->where('status',1)->get();
    $data['sub_category_link'] = DB::table('add_category')->where('status',1)->get();
    $data['all_product'] = DB::table('product')->where('status',1)->get(); 
    $data['dynamic'] = DB::table('dynamic')->get();
    $data['contact'] = DB::table('contact')->get();

      return view('web.customauth.verifiynumber',$data);
      return back()->with('message', 'We have e-mailed your password reset link!');

    }
    else {
        Session::flash('email not found','Email was not found !');
        return redirect('user/forget-password');
     
    }
   
 }

 public function postEmail(Request $request)

  {
       $data['meta_title'] = "safj";
        $data['meta_description'] = "login";
     $data['meta_tags'] = "login";
    $request->validate([
        'username' => 'required|email|exists:login',
    ]);

    $token = str_random(64);

   
      DB::table('password_resets')->insert(
          ['email' => $request->email, 'token' => $token, 'created_at' => Carbon::now()]
      );

      Mail::send('web.customauth.verify', ['token' => $token], function($message) use($request){
          $message->to($request->username);
          $message->subject('Reset Password Notification');
      });

      return back()->with('message', 'We have e-mailed your password reset link!');
  }
}
