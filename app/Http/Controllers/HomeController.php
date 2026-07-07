<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use Illuminate\Http\Request;
use DB;
use Session;
class HomeController extends Controller
{
    public function __construct()
    {
        $this->contact = DB::table('contact')->get();

    }
    public function error_page(){
     $data['all_category'] = DB::table('add_category')->where('parent_category',0)->where('status',1)->get();
    $data['sub_category_link'] = DB::table('add_category')->where('status',1)->get();
    $data['all_product'] = DB::table('product')->where('status',1)->get(); 
    $data['meta_title'] = "404";
    $data['meta_tags'] = "404" ;
    $data['meta_description'] = "404";

    $data['dynamic'] = DB::table('dynamic')->get();
    $data['contact'] = DB::table('contact')->get();

return response()->view('web/404',$data,404);
 
}
 public function Home() {
    $data['viewonweb'] = DB::table('home_page_content')->get();
    
    $data['brand'] = DB::table('brand')->get();
    
   $data['testimonial'] = DB::table('testimonila')->get();
   
    $data['home_tab'] = DB::table('home_show_category_product')->get();

   
    $data['home_banner'] = DB::table('home_slider')->get();

    $data['home_content'] = DB::table('home_content')->get();  

    $data['popular_category_data'] = DB::table('popular_category')->get(); 

    $data['popular_product_data'] = DB::table('popular_product')->get(); 

    $data['social_post_data'] = DB::table('socialpost')->get(); 

    $data['show_on_home_category'] = DB::table('add_category')->get();

    $data['value'] = DB::table('add_category')->where('status',1)->get();

    $data['all_category'] = DB::table('add_category')->where('parent_category',0)->where('status',1)->get();
    $data['sub_category_link'] = DB::table('add_category')->where('parent_category','!=',0)->where('status',1)->get();
    $data['all_product'] = DB::table('product')->where('status',1)->get();
    $data['products'] = DB::table('product')->where('status',1)->paginate(8); 
     $data['show_on_index'] = DB::table('product')->where('show_home',1)->get(); 
    $data['all_category_popular'] = DB::table('add_category')->where('status',1)->get();
    $data['show_home_1'] = DB::table('home_sliderp')->limit(4)->get();

    // Featured Categories (any category with a feature_product image)
    $data['industry_products'] = DB::table('add_category')
        ->whereNotNull('feature_product')
        ->where('feature_product', '!=', '')
        ->where('status', 1)
        ->inRandomOrder()
        ->take(8)
        ->get();

    // Box By Style products
    $style_cat = DB::table('add_category')->where('name', 'like', '%style%')->orWhere('name', 'like', '%Style%')->first();
    if ($style_cat) {
        $sub_cats_style = DB::table('add_category')->where('parent_category', $style_cat->cat_id)->pluck('cat_id')->toArray();
        $data['style_products'] = DB::table('product')->whereIn('cat_id', $sub_cats_style)->where('status', 1)->inRandomOrder()->take(8)->get();
    } else {
        $data['style_products'] = [];
    }
     $data['show_home_2'] = DB::table('home_sliderc')->orderBy('sliderc_id', 'DESC')->get();
    //  echo "<pre>";
    //  print_r($data['show_home_2']);
    //  die();
    
    $data['dynamic'] = DB::table('dynamic')->get();
    $data['contact'] = DB::table('contact')->get();
    
    $data['meta'] = DB::table('dynamic')->where('page_url','/')->get();
    $data['meta_title'] = $data['meta']['0']->m_title;
    $data['meta_tags'] = $data['meta']['0']->m_tag;
    $data['meta_description'] = $data['meta']['0']->m_des;
    
    $data['home_faqs'] = DB::table('home_faqs')->where('status',1)->get();

    $home_blogs = DB::table('blog')->where('status', 1)->where('set_home', 1)->orderBy('date', 'desc')->get();
    if ($home_blogs->isEmpty()) {
        $home_blogs = DB::table('blog')->where('status', 1)->orderBy('date', 'desc')->limit(4)->get();
    }
    $data['home_blogs'] = $home_blogs;

    return view ('web/home/index',$data);
}
public function RequestQuote() {
    
    $data['all_category'] = DB::table('add_category')->where('parent_category',0)->where('status',1)->get();
    $data['sub_category_link'] = DB::table('add_category')->where('status',1)->get();
    $data['all_product'] = DB::table('product')->where('status',1)->get(); 

    $data['meta'] = DB::table('dynamic')->where('page_url','request-quote')->get();
    $data['meta_title'] = $data['meta']['0']->m_title;
    $data['meta_tags'] = $data['meta']['0']->m_tag;
    $data['meta_description'] = $data['meta']['0']->m_des;

    $data['dynamic'] = DB::table('dynamic')->get();
    $data['contact'] = DB::table('contact')->get();
    
    return view ('web/quote/quote',$data); 
}

public function AllProducts() {
    $data['all_category'] = DB::table('add_category')->where('parent_category',0)->where('status',1)->get();
    $data['sub_category_link'] = DB::table('add_category')->where('status',1)->get();
    $data['all_product'] = DB::table('product')->where('status',1)->get();
    $data['category'] = DB::table('add_category')->where('status',1)->get(); 

    $data['meta'] = DB::table('dynamic')->where('page_url','our-products')->get();
    $data['meta_title'] = $data['meta']['0']->m_title;
    $data['meta_tags'] = $data['meta']['0']->m_tag;
    $data['meta_description'] = $data['meta']['0']->m_des;

    $data['dynamic'] = DB::table('dynamic')->get();
    $data['contact'] = DB::table('contact')->get();
    
    return view ('web/product/allproducts',$data); 
}

public function Categories() {
    
    // echo "helo";
    // die();
    // $meta = DB::table('request_quote')->get();

    // $data['meta_title']= $meta[0]->meta_title;
    // $data['all_category'] = DB::table('add_category')->where('parent_category',0)->where('status',1)->get();
    
    // $data['sub_category_link'] = DB::table('add_category')->where('status',1)->get();
    // $data['all_product'] = DB::table('product')->where('status',1)->get();
    // $data['category'] = DB::table('add_category')->where('parent_category','!=',0)->where('status',1)->get(); 

    // $data['meta'] = DB::table('dynamic')->where('page_url','categories')->get();
    // $data['meta_title'] = $data['meta']['0']->m_title;
    // $data['meta_tags'] = $data['meta']['0']->m_tag;
    // $data['meta_description'] = $data['meta']['0']->m_des;

    // $data['dynamic'] = DB::table('dynamic')->get();
    // $data['contact'] = DB::table('contact')->get();
    
    return redirect('404.php'); 
}
public function HomePromotions() {
    $data['meta_title']= "Promotions";
    $data['all_category'] = DB::table('add_category')->where('parent_category',0)->where('status',1)->get();
    $data['sub_category_link'] = DB::table('add_category')->where('status',1)->get();
    $data['all_product'] = DB::table('product')->where('status',1)->get(); 
    
    $data['meta'] = DB::table('dynamic')->where('page_url','track-your-order')->get();
    $data['meta_tags'] = "Promotions";
    $data['meta_description'] = "Promotions";
    $data['promotion'] = DB::table('promotions')->get();
    $data['dynamic'] = DB::table('dynamic')->get();
    $data['contact'] = DB::table('contact')->get();

    return view ('web/promotion/promotions',$data); 
}

public function TrackOrder() {
    $data['meta_title']= "Track Your Order";
    $data['all_category'] = DB::table('add_category')->where('parent_category',0)->where('status',1)->get();
    $data['sub_category_link'] = DB::table('add_category')->where('status',1)->get();
    $data['all_product'] = DB::table('product')->where('status',1)->get(); 
    
    $data['meta'] = DB::table('dynamic')->where('page_url','track-your-order')->get();
    $data['meta_title'] = $data['meta']['0']->m_title;
    $data['meta_tags'] = $data['meta']['0']->m_tag;
    $data['meta_description'] = $data['meta']['0']->m_des;
    
    $data['dynamic'] = DB::table('dynamic')->get();
    $data['contact'] = DB::table('contact')->get();

    return view ('web/trackorder/trackorder',$data); 
}

public function UserLogin(Request $request){
    $data['contact'] = DB::table('contact')->get();
    $data['dynamic'] = DB::table('dynamic')->get();
    $data['all_category'] = DB::table('add_category')->where('parent_category',0)->where('status',1)->get();
    $data['sub_category_link'] = DB::table('add_category')->where('status',1)->get();
    $data['all_product'] = DB::table('product')->where('status',1)->get();
    
    $data['meta'] = DB::table('dynamic')->where('page_url','user-register')->get();
    $data['meta_title'] = $data['meta']['0']->m_title;
    $data['meta_tags'] = $data['meta']['0']->m_tag;
    $data['meta_description'] = $data['meta']['0']->m_des;
    
    return view('web/userloginsingup/singup',$data);
    
}

public function UserLoginPage(Request $request){
    $data['contact'] = DB::table('contact')->get();
    $data['dynamic'] = DB::table('dynamic')->get();
    $data['all_category'] = DB::table('add_category')->where('parent_category',0)->where('status',1)->get();
    $data['sub_category_link'] = DB::table('add_category')->where('status',1)->get();
    $data['all_product'] = DB::table('product')->where('status',1)->get();
    
    $data['meta'] = DB::table('dynamic')->where('page_url','user-login')->get();
    $data['meta_title'] = $data['meta']['0']->m_title;
    $data['meta_tags'] = $data['meta']['0']->m_tag;
    $data['meta_description'] = $data['meta']['0']->m_des;
    
    return view('web/userloginsingup/login',$data);
    
}

public function userEditForm() {
    $data['all_category'] = DB::table('add_category')->where('parent_category',0)->where('status',1)->get();
    $data['sub_category_link'] = DB::table('add_category')->where('status',1)->get();
    $data['all_product'] = DB::table('product')->where('status',1)->get(); 
    $data['all_user'] = DB::table('user_login')->where('status',1)->get();
    
    $data['meta'] = DB::table('dynamic')->where('page_url','user-dashboard')->get();
    $data['meta_title'] = $data['meta']['0']->m_title;
    $data['meta_tags'] = $data['meta']['0']->m_tag;
    $data['meta_description'] = $data['meta']['0']->m_des;
    
    return view ('web/userloginsingup/edituserprofile',$data); 
}

function contact_mail(Request $request)
{
    Session::flash('contact-us','Thanks for your Intrest');
    $contact='contact';
    $data=array(
        'name'=>$request->name,
        'email'=>$request->email,
        'phone'=>$request->phone,
        'company'=>$request->company,
        'subject_query' =>$request->subject_query,
        'message'=>$request->message,
        'g-recaptcha-response' => 'required|captcha',
       
        'subject'=>$contact
    );
    // print_r($data);
    // die();
 Mail::to('support@premiumboxes.com')->send(new SendMail($data));
 return back()->with('success', 'Thank you for the inquiry, our sales representative will contact soon!');

}

function TrackOrdermail(Request $request)
{
    Session::flash('contact-us','Thanks for your Intrest');
    $contact='trackorder';
    $data=array(
        'name'=>$request->name,
        'email'=>$request->email,
        'phone'=>$request->phone,
        'ordername'=>$request->ordername,
        'orderid' =>$request->orderid,
        'message'=>$request->message,
        'g-recaptcha-response' => 'required|captcha',
       
        'subject'=>$contact
    );
    // print_r($data);
    // die();
 Mail::to('support@premiumboxes.com')->send(new SendMail($data));
 return back()->with('success', 'Thank you for the inquiry, our sales representative will contact soon!');

}
function subscribe_email(Request $request)
{
    Session::flash('category','Thanks for your Intrest');
    $subscribe='subscribe';
    $data=array(
        'email'=>$request->email,
        'subject'=>$subscribe
    );
    // print_r($data);
    // die();
 Mail::to('support@premiumboxes.com')->send(new SendMail($data));
 return back()->with('success', 'Thank you for subscription!');

}
function product_mail(Request $request)
{
    Session::flash('product','Thanks for your Intrest');
    $product='product';
    $data=array(
        'p_name'=>$request->p_first_name . ' ' . $request->p_last_name,
        'email'=>$request->p_email,
        'p_phone' =>$request->p_phone,
        'p_boxname'=>$request->p_boxname,
        'p_stock'=>$request->p_stock,
        'p_color'=>$request->p_color,
        'p_type'=>$request->p_type,
        'p_length'=>$request->p_length,
        'p_width' =>$request->p_width,
        'p_height'=>$request->p_height,
        'p_unit'=>$request->p_unit,
        'p_qty1'=>$request->p_qty1,
        'p_qty2' =>$request->p_qty2,
        'p_qty3'=>$request->p_qty3,
        'p_qty4'=>$request->p_qty4,
        'message'=>$request->message,
        'source'=>$request->source,
        'page_url'=>$request->page_url,
        'g-recaptcha-response' => 'required|captcha',
        'subject'=>$product
    );
    $this->sendQuoteEmail($data, $request->file('p_file'));
 return back()->with('success', 'Thank you for the inquiry, our sales representative will contact soon!');

}

function submitQuote(Request $request)
{
    Session::flash('request_quote', 'Thanks for your Intrest');

    $data = array(
        'p_name' => trim(($request->name ?: '') . ' ' . ($request->last_name ?: '')),
        'email' => $request->email,
        'p_phone' => $request->phone,
        'address' => $request->address,
        'company' => $request->company,
        'website' => $request->website,
        'p_boxname' => $request->product_name ?: $request->box_style,
        'p_stock' => $request->material,
        'p_color' => $request->color_options,
        'p_type' => $request->printing_options,
        'p_length' => $request->length,
        'p_width' => $request->width,
        'p_height' => $request->depth ?: $request->height,
        'p_unit' => $request->unit,
        'p_qty1' => $request->quantity,
        'p_qty2' => '',
        'p_qty3' => '',
        'p_qty4' => '',
        'message' => $request->message,
        'source' => $request->source,
        'page_url' => $request->page_url,
        'subject' => 'product'
    );

    $this->sendQuoteEmail($data, $request->file('artwork'));

    return back()->with('success', 'Thank you for the inquiry, our sales representative will contact soon!');
}

private function sendQuoteEmail($data, $file = null)
{
    $body = view('web/email/quote', array('data' => $data))->render();
    $mailHost = config('mail.host') ?: 'smtp.hostinger.com';
    $mailPort = config('mail.port') ?: 465;
    $mailEncryption = config('mail.encryption') ?: 'ssl';
    $mailUsername = config('mail.username') ?: env('MAIL_USERNAME');
    $mailPassword = config('mail.password') ?: env('MAIL_PASSWORD');
    $fromAddress = config('mail.from.address') ?: $mailUsername;
    $fromName = config('mail.from.name') ?: 'Premium Boxes';
    $quoteTo = env('QUOTE_MAIL_TO') ?: 'quote@premiumboxes.com';

    $transport = (new \Swift_SmtpTransport($mailHost, $mailPort, $mailEncryption))
        ->setUsername($mailUsername)
        ->setPassword($mailPassword)
        ->setAuthMode('login');

    $message = (new \Swift_Message('Quote Request - Premium Boxes'))
        ->setFrom(array($fromAddress => $fromName))
        ->setTo(array($quoteTo))
        ->setBody($body, 'text/html');

    if (!empty($data['email'])) {
        $message->setReplyTo(array($data['email'] => !empty($data['p_name']) ? $data['p_name'] : $data['email']));
    }

    if ($file) {
        $message->attach(\Swift_Attachment::fromPath($file->getRealPath())
            ->setFilename($file->getClientOriginalName())
            ->setContentType($file->getMimeType()));
    }

    (new \Swift_Mailer($transport))->send($message);
}


public function callBack(Request $request){
 
      Session::flash('callback','Thank you for the inquiry, our sales representative will contact soon!');
      $email = 'contact@premiumboxes.com';
      $order='callback';
      $data=array(
           'email'=>$email,
          'name'=>$request->name,
          'number'=>$request->number,
          'g-recaptcha-response' => 'required|captcha',
          'subject'=>$order
      );
// echo"<pre>";
//   print_r($data);
//     die();
Mail::to('support@premiumboxes.com')->send(new SendMail($data));

return back()->with('success','Thank you for the inquiry, our sales representative will contact soon!');
    }

public function PromotionMail(Request $request){
 
      Session::flash('Promotion','Thank you for the inquiry, our sales representative will contact soon!');
      $promotion='promotion';
      $data=array(
           'email'=>$request->email,
          'name'=>$request->name,
          'number'=>$request->contact,
          'message'=>$request->message,
          'im'=>$request->image,
        //   'g-recaptcha-response' => 'required|captcha',
          'subject'=>$promotion
      );
// echo"<pre>";
//   print_r($data);
//     die();
Mail::to('support@premiumboxes.com')->send(new SendMail($data));

return back()->with('success','Thank you for the inquiry, our sales representative will contact soon!');
    }




function req_quote_mail(Request $request)
{
    Session::flash('request_quote','Thanks for your Intrest');
    $request_quote='request_quote';
    $data=array(
        'r_name'=>$request->r_name,
        'r_number'=>$request->r_number,
        'r_email' =>$request->r_email,
        'image'=>$request->image,
        'r_boxname'=>$request->r_boxname,
        'r_stock'=>$request->r_stock,
        'r_length' =>$request->r_length,
        'r_width'=>$request->r_width,
        'r_height'=>$request->r_height,
        'r_unit'=>$request->r_unit,
        'r_qty1' =>$request->r_qty1,
        'r_qty2'=>$request->r_qty2,
        'r_color'=>$request->r_color,
        'r_type'=>$request->r_type,
        'r_message'=>$request->r_message,
        'g-recaptcha-response' => 'required|captcha',
        'subject'=>$request_quote
    );
    if($request->hasfile('image')){
        $file=$request->file('image');
        $extension=$file->getClientOriginalName();
        $filename= time(). '.' . $extension;
        $file->move('images/',$filename);
        $data['image']=$filename;
 } 
 else
{
return  $request;
$data->image=''; 
}
    print_r($data);
    die();
 Mail::to('Support@procustom.us')->send(new SendMail($data));
 return back()->with('success', 'Thank you for the inquiry, our sales representative will contact soon!');

}


}


?>
