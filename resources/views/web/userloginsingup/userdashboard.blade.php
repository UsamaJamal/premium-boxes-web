@include('web/header')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css">
  <style>
  .dt-buttons .dt-button  {
    background-color: #234376;
    color:#fff;
    border:none;
  }/* removed hover: .dt-buttons .dt-button:hover { ... } */
  .global-plan-trigger
  {
      color:#fff;
  }

  </style>
 <!-- DataTables -->
 <section class="dashboard-section">
 @if(Session::has('password_updates'))
                    
                    <center>
                    
                    <div  class='alert alert-success'> {{ Session::get('password_updates') }}</div>
                    </center>
                    
                    @endif
                    @if(Session::has('password_updates_error'))
                    
                    <center>
                    
                    <div  class='alert alert-danger'> {{ Session::get('password_updates_error') }}</div>
                    </center>
                    
                    @endif
                    @if(Session::has('oldpassword'))
                    
                    <center>
                    
                    <div  class='alert alert-danger'> {{ Session::get('oldpassword') }}</div>
                    </center>
                    
                    @endif
 @if(Session::has('password_update'))
                    
                    <center>
                    
                    <div  class='alert alert-success'> {{ Session::get('password_update') }}</div>
                    </center>
                    
                    @endif

     <div class="container">
         <div class="">
             <div class="">
                 <div class="dashboard-pad">
                     <div class="">
                         <div class="row">
                             <div class="login-user col-md-1  col-lg-1 align-self-center ml-lg-5 ml-md-4 mr-md-5 mx-auto">
                                 <img class="dashboard-img" src="{{url('images/'. Session::get('web-image') )}}" height="100" alt-name="" >
                             </div>
                                <div class="col-md-9 col-lg-3 pl-md-0   ml-lg-0  ml-md-4" style="padding-top: 23px;">
                                    <h4 class="mob_txt_center" style="margin-bottom: 3px;">
                                    @if(Session::has('web-user-name'))
                                   Welcome {{ Session::get('web-user-name') }}
                   
                    
                    @endif
                                </h4>
                                    <p class="mar-bot-p mob_txt_center">Member Since
                                        
                                    @if(Session::has('web-date'))
                                   {{ Session::get('web-date') }}
                   
                    
                    @endif
                                
                                </p>
                                    <p class="mob_txt_center mob-center "><span><a href="#" style="text-decoration: none;font-size: 13px;" onclick="openCity(event, 'Profile')">Edit Profile</a></span><span>|</span><span><a href="#" style="text-decoration: none;font-size: 13px;" onclick="openCity(event, 'Password')">Changed Password</a></span></p>
                                </div>
                         </div>
                     </div>
                     
                 </div>
                
                    <div class="tab">
                        <button class="tablinks" onclick="openCity(event, 'Dashboard')" id="defaultOpen">Dashboard</button>
                        <button class="tablinks" onclick="openCity(event, 'Profile')">Manage Profile</button>
                        <button class="tablinks" onclick="openCity(event, 'Setting')">Account Setting</button>
                        <button class="tablinks" onclick="openCity(event, 'Password')">Update Password</button>
                        <button class="tablinks" onclick="openCity(event, 'Payment')"><a href="{{url('userlogout')}}/">Logout</a></button>
                      </div>
                      <!-- show message for user -->
                      <!-- show message for user -->
                          <div id="Dashboard" class="tabcontent mob_overf-x">
                      <div class="txt-cen-padd">
                            <h3>My Dashboard</h3>
                        </div>
                      
                        <!-- data table -->
                        <table class="table display nowrap" id="example" style=" width:100%" cellspacing="0">
  <thead>
      <tr>
                <th>#</th>
                <th>Invoice</th>
                <th>Purchase Order</th>
                <th>Billing Name</th>
                <th>Payment Status</th>
                <th>CSR</th>
                <th>Pay With</th>
                <th>Action</th>
            </tr>
  </thead>
  <tbody>

  </tbody>
    <tfoot>
            <tr>
            <th>#</th>
                <th>Invoice</th>
                <th>Purchase Order</th>
                <th>Billing Name</th>
                <th>Payment Status</th>
                <th>CSR</th>
                <th>Pay With</th>
                <th>Action</th>
            </tr>
        </tfoot>
</table>
    <!--                    <table id="example" class="display nowrap" style=" width:100%" cellspacing="0">-->
    <!--    <thead>-->
    <!--        <tr>-->
    <!--            <th>#</th>-->
    <!--            <th>Invoice</th>-->
    <!--            <th>Purchase Order</th>-->
    <!--            <th>Billing Name</th>-->
    <!--            <th>Payment Status</th>-->
    <!--            <th>CSR</th>-->
    <!--            <th>Pay With</th>-->
    <!--            <th>Action</th>-->
    <!--        </tr>-->
    <!--    </thead>-->
    <!--    <tbody>      -->
        
           
    <!--    </tbody>-->
    <!--    <tfoot>-->
    <!--        <tr>-->
    <!--        <th>#</th>-->
    <!--            <th>Invoice</th>-->
    <!--            <th>Purchase Order</th>-->
    <!--            <th>Billing Name</th>-->
    <!--            <th>Payment Status</th>-->
    <!--            <th>CSR</th>-->
    <!--            <th>Pay With</th>-->
    <!--            <th>Action</th>-->
    <!--        </tr>-->
    <!--    </tfoot>-->
    <!--</table>-->
    </div>
                        <!-- data table -->

                      <div id="Profile" class="tabcontent" style="background: rgb(242, 243, 243);">
                        <div class="txt-cen-padd">
                            <h3>My Profile</h3>
                        </div>
                     <div class="profile-form">
                  <div class="container">
                    <div class="row justify-content-center">
                      <div class="col-md-5" style="background-color:#fff;">
                      
                            <input type="hidden" name="oldimage" value="{{url('images/'. Session::get('web-image') )}}">
                            <form method="post" action="{{url('user-image-update')}}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="email" value="{{ Session::get('web-email') }}">
                            <?php $email =  Session::get('web-email'); ?>
                           
                            <div style="padding: 20px 0px 15px 0px;text-align:center;">
                                <span style="padding: 12px 0px 12px 0px;float:left;">Current Profile Image</span>
                             <img style="float: right;" class="dashboard-img" src="{{url('images/'. Session::get('web-image') )}}" alt-name="" width="50" height="50" >
                             </div>
                                <div class="form-group" style="margin-top:40px;">
                                  <label>Upload Image</label>
                                  <input type="file" class="form-control" name="image" id="exampleInputFile" required>
                                </div>
                             <div>
                                <img src="{{url('images/'. Session::get('web-image') )}}" id="blah" class="img-view" width="150" height="150">
                             </div>
                                <div class="img-upd-btn">
                                    <button type="submit" name="submit" class="global-plan-trigger-top global-plan-trigger active">Update</button>
                                </div>
                              </form>
                      </div>
                    </div>
                  </div>
                        </div>
                      </div>

                      <div id="Setting" class="tabcontent">
                        <div class="txt-cen-padd">
                            <h3>Account Setting</h3>
                        </div>
                        <input type="hidden" name="email" value="{{ Session::get('web-email') }}">
                            <?php $email =  Session::get('web-email'); ?>
                        <div class="profile-form">
                            <form method="post" action="{{url('user-info-update')}}">
                            @csrf
                            
                           
                                <div class="form-group">
                                  <label>First Name</label>
                                  <input type="text" class="form-control" name="fname" value="{{ Session::get('web-fname') }}" required>
                                  
                                </div>
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input type="text" class="form-control" name="lname" value="{{ Session::get('web-lname') }}" required>
                                    
                                  </div>
                                  <div class="form-group">
                                    <label>User Name</label>
                                    <input type="text" class="form-control" name="uname" value="{{ Session::get('web-user-name') }}" required>
                                    
                                  </div>
                                  <div class="form-group">
                                    <label>Contact Number</label>
                                    <input type="text" class="form-control" name="unumber" value="{{ Session::get('web-num') }}" required>
                                    
                                  </div>
                                  <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" class="form-control" name="uemail" value="{{ Session::get('web-email') }}" required>
                                    
                                  </div>
                                
                                <div class="img-upd-btn">
                                    <button type="submit" name="submit" class="global-plan-trigger-top global-plan-trigger active">Update</button>
                                </div>
                              </form>
                        </div>
                    
                      </div>

                      <div id="Password" class="tabcontent">
                        <div class="txt-cen-padd">
                            <h3>Update Password</h3>
                        </div>
                        <input type="hidden" name="email" value="{{ Session::get('web-email') }}">
                                <?php
$email =  Session::get('web-email');
?>
                        <div class="profile-form">
                            <form method="post" action="{{url('updatepassword')}}">
                            @csrf
                                <div class="form-group">
                                  <label>Old Password</label>
                                  <input type="password" class="form-control" name="oldpassword" required>
                                  
                                </div>
                                <div class="form-group">
                                    <label>New Password</label>
                                    <input type="password" class="form-control" name="newpassword" required>
                                    
                                  </div>
                              
                                <div class="img-upd-btn">
                                    <button type="submit" name="submit" class="global-plan-trigger-top global-plan-trigger active">Update</button>
                                </div>
                              </form>
                        </div>
                      </div>
                      
                
             </div>
         </div>
     </div>
 </section>
 <!-- ========================= User Dashboard ========================= -->   
   
@include('web/footer')
<!-- DataTables -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.print.min.js"></script>
<!-- page script -->
<script>
$(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );
</script>
<!-- DataTables -->
<script>
        function openCity(evt, cityName) {
          var i, tabcontent, tablinks;
          tabcontent = document.getElementsByClassName("tabcontent");
          for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
          }
          tablinks = document.getElementsByClassName("tablinks");
          for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
          }
          document.getElementById(cityName).style.display = "block";
          evt.currentTarget.className += " active";
        }
        
        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
        </script>
        
        <script type="text/javascript">
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
        
                reader.onload = function (e) {
                    $('#blah').attr('src', e.target.result);
                }
        
                reader.readAsDataURL(input.files[0]);
            }
        }
        
        $("#exampleInputFile").change(function(){
            readURL(this);
        });
                           
        </script>
