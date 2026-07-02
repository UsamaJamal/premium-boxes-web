<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
class ContactPageController extends Controller
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

    function addcontact()
    {
      return view('adminlte/contact/addcontact');
    }

    function insertcontact(Request $req)
    {


      $data = [

          'about' => $req->input('about'),
          'alt' => $req->input('alt'),
          'phone' => $req->input('phone'),
          'email' => $req->input('email'),
          'address' => $req->input('address'),
          'iframe' => $req->input('iframe'),
          'twitter' => $req->input('twitter'),
          'facebook' => $req->input('facebook'),
          'instagram' => $req->input('instagram'),
          'printerest' => $req->input('printerest'),
          'linkedin' => $req->input('linkedin'),
          'title' => $req->input('title'),
          'url' => $req->input('url'),
          'date' => $req->input('date'),
      ];
      
      if($req->hasfile('photo'))
      {
          $file=$req->file('photo');
          $extension=$file->getClientoriginalExtension();
          $filename=time().rand().'.'.$extension;
          $file->move('uploads',$filename);
          $data['image']=$filename;
      }
      else
      {
          $data['image']=''; 
      }

      DB::table('contact')->insert($data);

      return redirect('admin/addcontact');
    }

    function showcontact()
    {
        $data['contact'] = DB::table('contact')->get();

        return view('adminlte/contact/showcontact',$data);
    }

    function deletecontact($id)
    {
      $data = DB::table('contact')->where('id', $id)->delete();
      return redirect('admin/showcontact');
    }

    function editcontact($id)
    {
      $data['contact'] = DB::table('contact')->where('id', $id)->get();
      return view('adminlte/contact/updatecontact',$data);
      

    }

    function updatecontact(Request $req,$id)
    {
        //$data = $req->input($id);
     
        $upd = [
          
          'about' => $req->input('about'),
          'alt' => $req->input('alt'),
          'phone' => $req->input('phone'),
          'email' => $req->input('email'),
          'address' => $req->input('address'),
          'iframe' => $req->input('iframe'),
          'twitter' => $req->input('twitter'),
          'facebook' => $req->input('facebook'),
          'instagram' => $req->input('instagram'),
          'printerest' => $req->input('printerest'),
          'linkedin' => $req->input('linkedin'),
          'title' => $req->input('title'),
          'url' => $req->input('url'),
          'date' => $req->input('date'),
         

        ];

        if($req->hasfile('photo')){
                    $file=$req->file('photo');
                    $extension=$file->getClientOriginalName();
                    $filename=time().rand().'.'.$extension;
                    $file->move('uploads',$filename);
                    $upd['image']=$filename;

            }
            else{
                $upd['image']=$req->input('image1');
            }
      
         
        DB::table('contact')->where('id',$id)->update($upd);
        
        return redirect('admin/showcontact');
    }


}

?>