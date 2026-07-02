<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;

class Sitemap extends Controller 
{
 
    public function index()
    {


 

        $que = 'SELECT * FROM tbl_product';
        $blog='SELECT * FROM  tbl_blog';
        $data['blog_data']=$this->db->query($blog)->result_array();
        $data['product_detail'] = $this->db->query($que)->result_array();
         
 

        header("Content-Type: text/xml;charset=iso-8859-1");
         
        $this->load->view('sitemap.xml', $data);
    }


    public function html_map(){

        $data['parent_category']=$this->Web_Model->get_parent_category();
 
       $this->load->view('sitemap',$data);
    }

    public function rebots(){
 

        
        $this->load->view('robots.txt');
    }


    public function image_sitemap(){



  
        $que = 'SELECT * FROM tbl_product';
        $data['product_detail'] = $this->db->query($que)->result_array();
        
         $blog='SELECT * FROM  tbl_blog';
        $data['blog_data']=$this->db->query($blog)->result_array();

        $image_sitemap='SELECT * FROM tbl_slider';
        $data['image_sitemap']=$this->db->query($image_sitemap)->result_array();

        $client_image='SELECT * FROM add_client';
        $data['client']=$this->db->query($client_image)->result_array();


     header("Content-Type: text/xml;charset=iso-8859-1");
     $this->load->view('image-sitemap.xml',$data);
    }
}

