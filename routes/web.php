<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


                         // Adim Controller Start


Route::get('admin/dashboard', 'AdminDashboardController@view');
Route::get('admin/login', 'AdminloginController@view');
Route::post('admin/check_login', 'AdminloginController@dashboardlogin');
Route::get('dlogout', 'AdminloginController@dashboardlogout');

Route::get('del_galery_image/{name}/{id}','AdminProductController@del_galery_image');

Route::get('changepassword', 'AdminloginController@changepassword');

Route::post('admin/updatepassword', 'AdminloginController@updatepassword');


// Route::get('admin/dashboard', 'AdminController@adminlt');

// Route::get('admin/logout', 'loginController@logout');

// Route::post('admin', 'loginController@adminLogin');



// All Category page and  Controller of Category (Route)

Route::get('admin/category','AdminCategoryController@category');

Route::post('admin/addcategory','AdminCategoryController@addcategory');

Route::get('admin/showcategory','AdminCategoryController@showCategory');

Route::get('admin/editcategory/{cat_id}','AdminCategoryController@getCategory');

Route::post('admin/update_category/{cat_id}', 'AdminCategoryController@updateCategory');

Route::get('admin/delete_category/{cat_id}', 'AdminCategoryController@deleteData');

// All Category page and  Controller of Category (Route)

// All Product page and  Controller of Product (Route)
Route::get('admin/product','AdminProductController@product');

Route::post('admin/addproduct','AdminProductController@addproduct');

Route::get('admin/showproduct','AdminProductController@showProduct');

Route::get('admin/editproduct/{product_id}','AdminProductController@getProduct');

Route::post('admin/update_product/{product_id}', 'AdminProductController@updateProduct');

Route::get('admin/delete_product/{product_id}', 'AdminProductController@product_delete');

// All Product page and  Controller of Product (Route)

// Product Reviews Admin Routes
Route::get('admin/reviews','AdminReviewController@index');
Route::get('admin/approve-review/{id}','AdminReviewController@approve');
Route::get('admin/delete-review/{id}','AdminReviewController@delete');
// Product Reviews Admin Routes

// reset password (Route)

// Route::get('admin/forget-password', 'ForgetPassword@getEmail');
// Route::post('admin/forget-password', 'ForgetPassword@forgot_randcode');
// Route::get('/{token}/reset-password', 'ResetPasswordController@getPassword');
// Route::post('/reset-password', 'ResetPasswordController@updatePassword');
// Route::post('admin/verify-code', 'ResetPasswordController@updateverifyCode');
// Route::post('/verify-password', 'ResetPasswordController@updateverifyPassword');
// Route::post('admin/reset-code', 'ResetPasswordController@updatepass');

// reset password (Route)
// All promotions Controller of Blogs (Route)

// All promotions Controller of Blogs (Route)
Route::get('admin/promotions','AdminBlogController@Promotions');

Route::post('admin/addpromotions','AdminBlogController@addPromotions');

Route::get('admin/showpromotions','AdminBlogController@showPromotions');

Route::get('admin/editpromotions/{promotions_id}','AdminBlogController@getPromotions');

Route::post('admin/update_promotions/{promotions_id}', 'AdminBlogController@updatePromotions');

Route::get('admin/delete_promotions/{promotions_id}', 'AdminBlogController@deletePromotions');
// All brands Controller of Blogs (Route)

Route::get('admin/brand','AdminBlogController@Brand');

Route::post('admin/addbrand','AdminBlogController@addBrand');

Route::get('admin/showbrand','AdminBlogController@showBrand');

Route::get('admin/editbrand/{brand_id}','AdminBlogController@getBrand');

Route::post('admin/update_brand/{brand_id}', 'AdminBlogController@updateBrand');

Route::get('admin/delete_brand/{brand_id}', 'AdminBlogController@deleteBrand');
// All brands Controller of Blogs (Route)

// All Blogs page and  Controller of Blogs (Route)
Route::get('admin/blog','AdminBlogController@blog');

Route::post('admin/addblog','AdminBlogController@addBlog');

Route::get('admin/showblog','AdminBlogController@showBlog');

Route::get('admin/editblog/{blog_id}','AdminBlogController@getBlog');

Route::post('admin/update_blog/{blog_id}', 'AdminBlogController@updateBlog');

Route::get('admin/delete_blog/{blog_id}', 'AdminBlogController@deleteBlog');

Route::get('admin/blogbanner','AdminBlogController@blogBanner');

Route::post('admin/addbanner','AdminBlogController@addBanner');

Route::get('admin/showbanner','AdminBlogController@showBanner');

Route::get('admin/editbanner/{blog_banner_id}','AdminBlogController@getBanner');

Route::post('admin/update_banner/{blog_banner_id}', 'AdminBlogController@updateBanner');

Route::get('admin/delete_banner/{blog_banner_id}', 'AdminBlogController@deleteBanner');
// All Blogs page and  Controller of Blogs (Route)
// All Tags and Controller of All Tags





// All Tags and Controller of All Tags
// About Us page and  Controller of StaticPage (Route)
Route::get('admin/about','AdminAboutController@about');

Route::post('admin/addabout','AdminAboutController@addAbout');

Route::get('admin/showabout','AdminAboutController@showAbout');

Route::get('admin/editabout','AdminAboutController@getAbout');

Route::post('admin/update_about', 'AdminAboutController@updateAbout');

// About Us page and  Controller of StaticPage (Route)
Route::get('admin/delete_about/{about_id}', 'AdminAboutController@deleteAbout');
// About Us page and  Controller of StaticPage (Route)

// Home FAQs Admin Routes
Route::get('admin/homefaqs', 'AdminHomeFaqController@index');
Route::get('admin/addhomefaq', 'AdminHomeFaqController@add_view');
Route::post('admin/addhomefaq', 'AdminHomeFaqController@add');
Route::get('admin/edithomefaq/{id}', 'AdminHomeFaqController@edit');
Route::post('admin/update_homefaq/{id}', 'AdminHomeFaqController@update');
Route::get('admin/delete_homefaq/{id}', 'AdminHomeFaqController@delete');
// Home FAQs Admin Routes

// Dimensions
Route::get('admin/adddimension','DimensionPageController@adddimension');
Route::post('admin/insertdimension','DimensionPageController@insertdimension');
Route::get('admin/showdimension','DimensionPageController@showdimension');
Route::get('admin/deletedimension/{id}','DimensionPageController@deletedimension');
Route::get('admin/editdimension/{id}','DimensionPageController@editdimension');
Route::post('admin/updatedimension/{id}','DimensionPageController@updatedimension');
// Dimensions

// Content
Route::get('admin/addcontent','HomeSettingsController@addcontent');
Route::post('admin/insertcontent','HomeSettingsController@insertcontent');
Route::get('admin/showcontent','HomeSettingsController@showcontent');

Route::get('admin/homecontent','HomeSettingsController@homecontent');
Route::get('admin/edithomecontent/{id}','HomeSettingsController@edithomecontent');
Route::post('admin/updatehomecontent/{id}','HomeSettingsController@updatehomecontent');

Route::get('admin/deletecontent/{id}','HomeSettingsController@deletecontent');
Route::get('admin/editcontent/{id}','HomeSettingsController@editcontent');
Route::post('admin/updatecontent/{id}','HomeSettingsController@updatecontent');

// Content

// Frequently Asked Question and  Controller of StaticPage (Route)

// Home Banner and  Controller of Home Banner (Route)
Route::get('admin/homeslider','AdminHomesliderController@Slider');

Route::post('admin/add_homeslider','AdminHomesliderController@addSlider');

Route::get('admin/show_homeslider','AdminHomesliderController@showSlider');

Route::get('admin/edit_homeslider/{slider_id}','AdminHomesliderController@getSlider');

Route::post('admin/update_homeslider/{slider_id}', 'AdminHomesliderController@updateSlider');

Route::get('admin/delete_homeslider/{slider_id}', 'AdminHomesliderController@deleteSlider');
// Home Banner and  Controller of Home Banner (Route)

// Home Banner P and  Controller of Home Banner (Route)
Route::get('admin/homepslider','AdminHomepsliderController@Sliderp');

Route::post('admin/add_homepslider','AdminHomepsliderController@addpSlider');

Route::get('admin/show_homepslider','AdminHomepsliderController@showpSlider');

Route::get('admin/edit_homepslider/{slider_id}','AdminHomepsliderController@getpSlider');

Route::post('admin/update_homepslider/{slider_id}', 'AdminHomepsliderController@updatepSlider');

Route::get('admin/delete_homepslider/{slider_id}', 'AdminHomepsliderController@deletepSlider');
// Home Banner P and  Controller of Home Banner (Route)

// Home Banner C and  Controller of Home Banner (Route)
Route::get('admin/homecslider','AdminHomecsliderController@Sliderc');

Route::post('admin/add_homecslider','AdminHomecsliderController@addcSlider');

Route::get('admin/show_homecslider','AdminHomecsliderController@showcSlider');

Route::get('admin/edit_homecslider/{slider_id}','AdminHomecsliderController@getcSlider');

Route::post('admin/update_homecslider/{slider_id}', 'AdminHomecsliderController@updatecSlider');

Route::get('admin/delete_homecslider/{slider_id}', 'AdminHomecsliderController@deletecSlider');
// Home Banner and  Controller of Home Banner (Route)

// Home Setting C Banner and  Controller of Home Setting Banner (Route)

                    //  popular category

Route::get('admin/popularcategory', 'HomePageSettingController@PopularCategory');

Route::post('admin/add_popularcategory','HomePageSettingController@addPopularCategory');

Route::get('admin/edit_popularcategory','HomePageSettingController@getPopularCategory');

Route::post('admin/update_popularcategory', 'HomePageSettingController@updatePopularCategory');

                     // popular category

                                         //  popular Product

Route::get('admin/popularproduct', 'HomePageSettingController@PopularProduct');

Route::post('admin/add_popularproduct','HomePageSettingController@addPopularProduct');

Route::get('admin/edit_popularproduct','HomePageSettingController@getPopularProduct');

Route::post('admin/update_popularproduct', 'HomePageSettingController@updatePopularProduct');

                     // popular Product
// dynamic pages
Route::get('admin/addpage','DynamicPageController@addpage');
Route::post('admin/insertpage','DynamicPageController@insertpage');
Route::get('admin/showpage','DynamicPageController@showpage');
Route::get('admin/deletepage/{id}','DynamicPageController@deletepage');
Route::get('admin/editpage/{id}','DynamicPageController@editpage');
Route::post('admin/updatepage/{id}','DynamicPageController@updatepage');
// dynamic pages

// contact
Route::get('admin/addcontact','ContactPageController@addcontact');
Route::post('admin/insertcontact','ContactPageController@insertcontact');
Route::get('admin/showcontact','ContactPageController@showcontact');
Route::get('admin/deletecontact/{id}','ContactPageController@deletecontact');
Route::get('admin/editcontact/{id}','ContactPageController@editcontact');
Route::post('admin/updatecontact/{id}','ContactPageController@updatecontact');
// contact

                     // Testimonial and  Controller of Testimonial (Route)
Route::get('admin/testimonial','AdminTestimonialController@Testimonial');

Route::post('admin/add_testimonial','AdminTestimonialController@addTestimonial');

Route::get('admin/show_testimonial','AdminTestimonialController@showTestimonial');

Route::get('admin/edit_testimonial/{testimonial_id}','AdminTestimonialController@getTestimonial');

Route::post('admin/update_testimonial/{testimonial_id}', 'AdminTestimonialController@updateTestimonial');

Route::get('admin/delete_testimonial/{testimonial_id}', 'AdminTestimonialController@deleteTestimonial');
// Testimonial and  Controller of Testimonial (Route)
Route::get('admin/forgot_password','ForgotPasswordController@Forgot');
Route::post('admin/forgot_password','ForgotPasswordController@Password');

// Home Setting Banner and  Controller of Home Setting Banner (Route)

// Footer Settings
Route::get('admin/footer-settings', 'FooterSettingsController@edit');
Route::post('admin/update-footer-settings', 'FooterSettingsController@update');

                    //  Admin Controller End
                    
                        //  Route::get('image-sitemap.xml', function() {
                        //     $view = view('web/imagesitemap');
                        //     return Response::make($view)->header('Content-Type', 'text/xml');
                        //      });
                    // Web Controller Start
                //    paypal route 
                Route::get('pay', 'PaymentController@index');
// route for processing payment

// route for check status of the payment

                // paypal route 
Route::get('all-categories','HomeController@AllCategories');
Route::get('/','HomeController@Home');

Route::get('about-us','AboutController@About');

// Route::get('delivery-information','AboutController@DeliveryInformation');

Route::get('privacy-policy','AboutController@PrivacyPolicy');
Route::get('terms-services','AboutController@TermServices');
Route::get('return-policy','AboutController@ReturnPolicy');

// Forgot Password (Route)

Route::get('user/forget-password', 'UserForgetPassword@getEmail');
Route::post('user/forget-password', 'UserForgetPassword@forgot_randcode');
Route::get('/{token}/reset-password', 'UserResetPasswordController@getPassword');
Route::post('/reset-password', 'UserResetPasswordController@updatePassword');
Route::post('/verify-code', 'UserResetPasswordController@updateverifyCode');
Route::post('/verify-password', 'UserResetPasswordController@updateverifyPassword');
Route::post('user/reset-code', 'UserResetPasswordController@updatepass');

// Forgot Password (Route)


Route::post('search','ProductController@Search');

Route::get('blog-search','BlogController@BlogSearch');
Route::get('author/{name}', 'BlogController@AuthorPage');

Route::get('contact-us','ContactController@Contact');

Route::get('track-your-order','HomeController@TrackOrder');

Route::get('request-quote','HomeController@RequestQuote');
// Start route for mail
Route::post('/callback', 'HomeController@callBack');

Route::post('promotion-mail', 'HomeController@PromotionMail');

Route::post('contact-mail', 'HomeController@contact_mail');

Route::post('subscribe-email', 'HomeController@subscribe_email');

Route::post('product-mail', 'HomeController@product_mail');

Route::post('track-your-orders', 'HomeController@TrackOrdermail');

Route::post('frequently-asked-questions', 'HomeController@TrackOrdermail');
Route::get('frequently-asked-questions', 'AboutController@FAQuestion');

Route::post('req_quote_mail', 'HomeController@req_quote_mail');
// End route for mail
 // User Login
 Route::get('user-register','HomeController@UserLogin');

 Route::post('add_user','UserLoginController@addUser');

 Route::get('user-login','HomeController@UserLoginPage');

 Route::post('user_login','UserLoginController@userLOgin');

 Route::get('userlogout', 'UserLogin@UserLogout');

 Route::get('userchangepassword', 'UserLogin@chnangeUserPassword');

 

 Route::get('user-dashboard','UserLogin@userDashboard');

 Route::get('user-edit-form','HomeController@userEditForm');


// Sitemap
Route::get('sitemap.xml', function() {
$view = view('web/sitemap/sitemap');
return Response::make($view)->header('Content-Type', 'text/xml');
});



//     Route::get('image-sitemap.xml', function() {
//     $view = view('web/sitemap/sitemap');
//     return Response::make($view)->header('Content-Type', 'text/xml');
// });

// image Sitemap
   Route::get('image-sitemap.xml', function() {
        $view = view('web/imagesitemap');
        return Response::make($view)->header('Content-Type', 'text/xml');
    });

// Sitemap
 // User Login
 Route::get('404.php','HomeController@error_page');
 
  Route::get('promotion','HomeController@HomePromotions');
  
 Route::get('other_product','OtherProductController@OtherProduct');

 Route::get('otherproduct/{link}','OtherProductController@SingleOtherProductPage');

Route::get('our-products','HomeController@AllProducts');

Route::get('categories','HomeController@Categories');

Route::get('our-blog','BlogController@Blog');

 Route::post('user-info-update','UserLogin@EditUserInfo');

Route::get('blog/{link}','BlogController@SingleBlogPage');

Route::post('updatepassword', 'UserLogin@updateUserPassword');

Route::post('submit-review', 'ProductController@submitReview');

Route::get('/{any}','ProductController@Product');

Route::post('user-image-update','UserLogin@EditUserImage');


                    // Web Controller End

