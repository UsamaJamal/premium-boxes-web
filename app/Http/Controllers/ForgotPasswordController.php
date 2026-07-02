<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
class ForgotPasswordController extends Controller
{


    public function Forgot()
    {
      return view ('adminlte/security/forgot');
    }

    public function Password(Request $request)
    {
        $userget = $request->get('email');
        $user = DB::table('dashboard_login')->where(['username'=>$userget])->get();
        print_r($user);
        die();
        if(count($user) == 0)
        { 
            return redirect('admin/forgot_password')->with('error', 'Email is not exists!');
        }
    }
}


?>
