<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use DB; 
use Carbon\Carbon; 
use Session;
use Mail; 
use Illuminate\Mail\Message;
use Illuminate\Support\Facades\Password;

class ForgetPassword extends Controller
{
  public function getEmail()
  {

     return view('adminlte.customauth.passwords.email');
  }

  public function forgot_randcode (Request $request) {

    $email = $request->input('email');
   
     
    $checkLogin = DB::table('dashboard_login')->get();
   
    $useremail=$checkLogin[0]->username;
    Session::flash('pricing','Your Query Submmited Our Sale Representer Contact Your Soon !');
          $subject='pricing';
    if($useremail == $email) {
     $randomfun = rand(0,1000);   
     $data=[
         
          'random' => $randomfun,

         ];
          DB::table('dashboard_login')->update($data);
          
         
          Mail::send('adminlte.customauth.verify', ['token' => $randomfun], function($message) use($request){
            $message->to($request->email);
            $message->subject('Reset Password Notification');
        });
  

      return view('adminlte.customauth.verifiynumber');

     return back()->with('message', 'We have e-mailed your password reset link!');

    }
    else {
        Session::flash('email-error','Email was not found !');
     return redirect('admin/forget-password');
    }
   
 }

 public function postEmail(Request $request)
  {
    $request->validate([
        'username' => 'required|email|exists:login',
    ]);

    $token = str_random(64);

   
      DB::table('password_resets')->insert(
          ['email' => $request->email, 'token' => $token, 'created_at' => Carbon::now()]
      );

      Mail::send('adminlte.customauth.verify', ['token' => $token], function($message) use($request){
          $message->to($request->username);
          $message->subject('Reset Password Notification');
      });

      return back()->with('message', 'We have e-mailed your password reset link!');
  }
}
