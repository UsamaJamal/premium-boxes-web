 
  <!-- Main Sidebar Container -->

 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{url('admin/dashboard')}}" class="brand-link">
      <img src="{{url('admin/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Premium Boxes</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="d-flex">
        <div class="image">
          <img src="" class="img-circle elevation-2" alt="">
        </div>
        <div class="info">
          <a href="#" class="d-block"></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="{{url('admin/dashboard')}}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
            
          </li>
         <li class="nav-header">Dashboard</li>
             
         
         
          
         
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle"></i>
              <p>
              Category
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('admin/category')}}" class="nav-link">
                  
                  <p>Add Category</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('admin/showcategory')}}" class="nav-link">
                  
                  <p>Show Category</p>
                </a>
              </li>
             
            </ul>
          </li>

           <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
           
            <i class="nav-icon far fa-circle"></i>
              <p>
              Product
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('admin/product')}}" class="nav-link">
                  
                  <p>Add Product</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('admin/showproduct')}}" class="nav-link">
                  
                  <p>Show Product</p>
                </a>
              </li>
             
            </ul>
          </li>

           <li class="nav-item">
            <a href="{{url('admin/reviews')}}" class="nav-link">
              <i class="nav-icon far fa-circle"></i>
              <p>
              Product Reviews
              </p>
            </a>
          </li>


<!-- Home Tab -->
<li class="nav-header">Brands & Promotions</li>
              <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle"></i>
              <p>
              Brands
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('admin/brand')}}" class="nav-link">
                  
                  <p>Add Brands</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('admin/showbrand')}}" class="nav-link">
                  
                  <p>Show Brands</p>
                </a>
              </li>
             
            
             
            </ul>
          </li>
          <!--Promotions-->
                 <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle"></i>
              <p>
              Promotions
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('admin/promotions')}}" class="nav-link">
                  
                  <p>Add Promotions</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('admin/showpromotions')}}" class="nav-link">
                  
                  <p>Show Promotions</p>
                </a>
              </li>
             
            
             
            </ul>
          </li>
          <!-- Authors Tab -->
          <li class="nav-item">
            <a href="{{ url('admin/authors') }}" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>Authors</p>
            </a>
          </li>
          
          <!-- Home Tab -->
<li class="nav-header">Blogs</li>
              <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle"></i>
              <p>
              Blogs
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('admin/blog')}}" class="nav-link">
                  
                  <p>Add Blog</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('admin/showblog')}}" class="nav-link">
                  
                  <p>Show Blogs</p>
                </a>
              </li>
              <!-- <li class="nav-item">
                <a href="{{url('admin/blogbanner')}}" class="nav-link">
                  
                  <p>Add Blog Banner</p>
                </a>
              </li> -->
              <li class="nav-item">
                <a href="{{url('admin/showbanner')}}" class="nav-link">
                  
                  <p>Show Blog Banner</p>
                </a>
              </li>
             
            </ul>
          </li>
         
          <li class="nav-header">Home Page Settings</li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle"></i>
              <p>
              Home Page Setting
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
           
              <!-- <li class="nav-item">
                <a href="{{url('admin/popularcategory')}}" class="nav-link">
                  
                  <p>Add Popular Category</p>
                </a>
              </li> -->
              <li class="nav-item">
                <a href="{{url('admin/edit_popularcategory')}}" class="nav-link">
                  
                  <p>Update Content</p>
                </a>
              </li>
              
              
              <!-- <li class="nav-item">-->
              <!--  <a href="{{url('admin/popularproduct')}}" class="nav-link">-->
                  
              <!--    <p>Add Popular Product</p>-->
              <!--  </a>-->
              <!--</li>-->
             <!-- <li class="nav-item">-->
             <!--  <a href="{{url('admin/edit_popularproduct')}}" class="nav-link">-->
                  
             <!--   <p>Edit Popular Product</p>-->
             <!--  </a>-->
             <!--</li>-->
             
            </ul>
          </li>
          
          
          
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle"></i>
              <p>
              Home Page Content
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('admin/homecontent')}}" class="nav-link">
                  
                  <p>Home Content</p>
                </a>
              </li>
             
            </ul>
          </li>
          
          <li class="nav-item">
            <a href="{{url('admin/homefaqs')}}" class="nav-link">
              <i class="nav-icon far fa-circle"></i>
              <p>
              Home FAQs
              </p>
            </a>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle"></i>
              <p>
              Home Banner
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('admin/homeslider')}}" class="nav-link">
                  
                  <p>Add Home Banner</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('admin/show_homeslider')}}" class="nav-link">
                  
                  <p>Show Home Banner</p>
                </a>
              </li>
             
            </ul>
          </li>
          
                <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle"></i>
              <p>
              Home Product Banner
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <!--<a href="{{url('admin/homepslider')}}" class="nav-link">-->
                  
                <!--  <p>Add Home Product Banner</p>-->
                <!--</a>-->
              </li>
              <li class="nav-item">
                <a href="{{url('admin/show_homepslider')}}" class="nav-link">
                  
                  <p>Show Home Product Banner</p>
                </a>
              </li>
             
            </ul>
          </li>
          
                  <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle"></i>
              <p>
              Home Category Banner
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('admin/homecslider')}}" class="nav-link">
                  
                  <p>Add Home Category Banner</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('admin/show_homecslider')}}" class="nav-link">
                  
                  <p>Show Home Category Banner</p>
                </a>
              </li>
             
            </ul>
          </li>
         
         <li class="nav-header">Others</li>

         <!-- about -->
         <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle"></i>
              <p>
              About
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
               <li class="nav-item">
                <a href="{{url('admin/editabout')}}" class="nav-link">
                  
                  <p>Show About us</p>
                </a>
              </li>        
            </ul>
          </li>
          <!-- about -->

         <!-- contact -->
         <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle"></i>
              <p>
              Contact
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <!-- <li class="nav-item">
                <a href="{{url('admin/addcontact')}}" class="nav-link">
                  
                  <p>Add Contact</p>
                </a>
              </li> -->
              <li class="nav-item">
                <a href="{{url('admin/showcontact')}}" class="nav-link">
                  
                  <p>Show Contact</p>
                </a>
              </li>
             
            </ul>
          </li>
          <!-- contact -->

          <!-- Dimension -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle"></i>
              <p>
              Dimensions
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('admin/adddimension')}}" class="nav-link">
                  
                  <p>Add Dimension</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('admin/showdimension')}}" class="nav-link">
                  
                  <p>Show Dimensions</p>
                </a>
              </li>
             
            </ul>
          </li>
          <!-- Dimension -->

         <!-- Testimonial -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle"></i>
              <p>
              Testimonial
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('admin/testimonial')}}" class="nav-link">
                  
                  <p>Add Testimonial</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('admin/show_testimonial')}}" class="nav-link">
                  
                  <p>Show Testimonial</p>
                </a>
              </li>
             
            </ul>
          </li>
          <!-- Testimonial -->

          <!-- Dynamic -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle"></i>
              <p>
              Dynamic Page
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('admin/addpage')}}" class="nav-link">
                  
                  <p>Add Page</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('admin/showpage')}}" class="nav-link">
                  
                  <p>Show Pages</p>
                </a>
              </li>
             
            </ul>
          </li>
          <!-- Footer Settings -->
          <li class="nav-item">
            <a href="{{url('admin/footer-settings')}}" class="nav-link">
              <i class="nav-icon far fa-circle"></i>
              <p>
              Footer Settings
              </p>
            </a>
          </li>
          <!-- dynamic -->
        
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
