<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
class AdminController extends Controller
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




}


?>

