@include('web/header')

<style>
    .breadcrumb-area {
    background-color: #f3f3f3;
    padding: 30px 0;
}
.breadcrumb-area .breadcrumb-content .nav {
    background: transparent;
    padding: 0 0 0 0;
    margin: 0;
    font-size: 14px;
}
.breadcrumb-area .breadcrumb-content .nav li {
    color: #146cda;
    line-height: 20px;
}
.breadcrumb-area .breadcrumb-content .nav li a {
    display: inline-block;
    position: relative;
    color: #47494a;
}
.mtb-60px {
    margin: 60px 0;
}
.ml-auto, .mx-auto {
    margin-left: auto!important;
}

.mr-auto, .mx-auto {
    margin-right: auto!important;
}
.panel-group .panel {
    margin-bottom: 0;
    overflow: hidden;
    border-radius: 4px;
}

.single-my-account {
    margin-bottom: 20px;
    border: 1px solid #ebebeb;
}
.panel-default>.panel-heading {
    color: #333;
    background-color: #234376;
    border-color: #234376;
}

.panel-group .panel-heading {
    border-bottom: 0;
}
.panel-heading {
    padding: 10px 15px;
    border-bottom: 1px solid transparent;
    border-top-right-radius: 3px;
    border-top-left-radius: 3px;
}
.single-my-account h3.panel-title {
    background-color: #49d8f7;
    border-bottom: 1px solid #49d8f7;
    color: #1d1d1d;
    font-size: 14px;
    font-weight: 700;
    margin: 0;
    position: relative;
    text-transform: uppercase;
    line-height: 2;
}
.single-my-account h3.panel-title span {
    color: #ffffff;
    font-size: 14px;
    left: 20px;
    position: absolute;
    top: 16px;
}
.single-my-account h3.panel-title a {
    color: #ffffff;
    display: block;
    padding: 16px 55px;
    position: relative;
    font-weight: 500;
    font-size: 14px;
}
.single-my-account h3.panel-title a:before {
    content: "";
    display: inline-block;
    font-family: "Ionicons";
    font-size: 14px;
    position: absolute;
    right: 10px;
    top: 50%;
    margin-top: -14px;
}
.show {
    display: block!important;
}
.panel-default>.panel-heading+.panel-collapse .panel-body {
    border-top-color: #ddd;
}

.panel-group .panel-heading+.panel-collapse .panel-body {
    border-top: 1px solid #ddd;
}
.panel-body {
    padding: 15px;
}
.single-my-account .myaccount-info-wrapper {
    padding: 30px 20px;
    background-color: #fff;
}
.single-my-account .myaccount-info-wrapper .account-info-wrapper {
    border-bottom: 1px solid #eaeaea;
    margin-bottom: 28px;
    padding-bottom: 30px;
}
.single-my-account .myaccount-info-wrapper .account-info-wrapper h4 {
    font-size: 14px;
    margin: 0;
    text-transform: uppercase;
    color: #234376;
    font-weight: 700;
}
.single-my-account .myaccount-info-wrapper .account-info-wrapper h5 {
    font-size: 14px;
    letter-spacing: 0.2px;
    margin-top: 7px;
    font-weight: 600;
    color: #234376;
}
.single-my-account .myaccount-info-wrapper .billing-info {
    margin-bottom: 20px;
}
.single-my-account .myaccount-info-wrapper .billing-info label {
    color: #234376;
    font-size: 14px;
    text-transform: capitalize;
}
.single-my-account .myaccount-info-wrapper .billing-info input {
    background: transparent none repeat scroll 0 0;
    border: 1px solid #ebebeb;
    color: #888;
    height: 40px;
    padding: 0 15px;
    width: 100%;
    outline: none;
}
.single-my-account .myaccount-info-wrapper .billing-back-btn {
    display: flex;
    justify-content: space-between;
    margin-top: 26px;
    align-items: center;
}

@media screen and (max-width:768px){
     .mob-p-r-14 {
         padding-right:14px !important;
     }
     .mob-p-l-15 {
         padding-left:15px !important;
     }
 }
</style>
@if(Session::has('trackorder'))
                    
                    <center>
                    <div  class='alert alert-success'> {{ Session::get('trackorder') }} </div>
                    </center>
                    
                    @endif
    <div class="container-fluid" style=" margin-bottom: 5px;">
    <div class="row">
    <div class="col-md-9 ml-auto mr-auto" style="padding-right: 6px;">
   
   <h3 style="padding: 20px 0px;">Track Your Order</h3>
          </div>


    </div>
    </div>



    <div class="container-fluid" style=" margin-bottom: 5px;">
    <div class="row">
    <div class="col-md-6 ml-auto mob-p-r-14" style="padding-right: 6px;">
    <a href="https://tools.usps.com/go/TrackConfirmAction_input" target="_blank" title="" onclick="aa()">
     <img height="200" width="100%" ;="" src="{{URL::asset('web/img/usa postal.jpg')}}" alt="fedex" title="Fedex">
    </a>
          </div>


           <div class="col-md-3 mr-auto mob-p-l-15" style="padding-left: 0px;">
    <a href="https://www.ups.com/track?loc=en_US&amp;requester=ST/" target="_blank"  onclick="aa1()" title="">
     <img height="200" width="100%" ;="" src="{{URL::asset('web/img/UPS.jpg')}}" alt="ups" title="Ups">
    </a>
            </div>
    </div>
    </div>

    <div class="container-fluid">
    <div class="row">
    <div class="col-md-3 ml-auto mob-p-r-14" style="padding-right: 6px;">
    <a href="https://www.fedex.com/en-us/tracking.html" target="_blank" onclick="aa2()" title="">
     <img height="200" width="100%" ;="" src="{{URL::asset('web/img/fedexss.jpg')}}" alt="usps" title="Usps">
                                        </a>
          </div>


           <div class="col-md-6 mr-auto mob-p-l-15" style="padding-left: 0px;">
           <a href="https://www.dhl.com/en/express/tracking/tracking_tools.html" target="_blank" onclick="aa3()" title=""> 
           <img height="200" width="100%" ;="" src="{{URL::asset('web/img/dhl 2.jpg')}}" alt="dhl" title="Dhl">
                                        </a>
            </div>
    </div>
    </div>

            <!-- account area start -->
            <div class="checkout-area mtb-60px">
                <div class="container-fluid">
                    <div class="row">
                        <div class="ml-auto mr-auto col-lg-9">
                            <div class="checkout-wrapper">
                                <div id="faq" class="panel-group">
                                    <div class="panel panel-default single-my-account">
                             <div class="panel-heading my-account-title">
                                            <h3 class="panel-title"><span></span> <a data-toggle="collapse" data-parent="#faq" href="#my-account-1">Track your order</a></h3>
                                        </div>
        <div id="my-account-1" class="panel-collapse collapse show">
                                            <div class="panel-body">
                                    <div class="myaccount-info-wrapper">
                                      <!--<div class="account-info-wrapper">-->
                                      <!--           <h4>My Account Information</h4>-->
                                      <!--         <h5>Your Personal Details</h5>-->
                                      <!--              </div>-->
                          <form class="" action="{{url('track-your-orders')}}" method="post" id="quoteform"  enctype="multipart/form-data" style="display:inline-flex;">
      <input type="hidden" name="_token" value="{!! csrf_token() !!}">                         
               <div class="row">
                                
                           <!--<div class="col-lg-6 col-md-6">-->
                           <!--            <div class="billing-info">-->
                           <!--               <label>Name</label>-->
                           <!-- <input type="text" name="name" required />-->
                           <!--                                 </div>-->
                           <!--                             </div>-->
                        <!--   <div class="col-lg-6 col-md-6">-->
                        <!--       <div class="billing-info">-->
                        <!--                <label>Phone</label>-->
                        <!--<input type="text" name="phone" required />-->
                        <!--                                    </div>-->
                        <!--                                </div>-->
                         <!--  <div class="col-lg-12 col-md-12">-->
                         <!--       <div class="billing-info">-->
                         <!--         <label>Email</label>-->
                         <!--<input type="email" name="email" required />-->
                         <!--                                   </div>-->
                         <!--                               </div>-->
                           <!--<div class="col-lg-6 col-md-6">-->
                           <!--    <div class="billing-info">-->
                           <!--          <label>Your Order Name</label>-->
                           <!--   <input type="text" name="ordername" required />-->
                           <!--                                 </div>-->
                           <!--                             </div>-->
                           <!--<div class="col-lg-6 col-md-6">-->
                           <!--            <div class="billing-info">-->
                           <!--           <label>Your Order ID</label>-->
                           <!--  <input type="text" name="orderid" required/>-->
                           <!--                                 </div>-->
                           <!--                             </div>-->
  <!--                         <div class="col-lg-12 col-md-12">-->
  <!--                                    <div class="billing-info">-->
  <!--                                      <label>Message</label>-->
  <!--<textarea id="contact-message" placeholder="Type Your Message" name="message" rows="6" cols="30" class="form-control" required=""> </textarea>-->
  <!--                                                          </div>-->
  <!--                                                      </div>-->
                                                        <div class="col-md-6 form-group align-self-center">
                                            <!-- <center> -->
                                            
                                                <!---->
                                                    
                                                 
                                            <!-- </center> -->
                                        </div>
                                                         <div class="billing-back-btn">
                                                        
                        <div class="billing-btn">
 <!--<button type="submit" name="submit" class="btn-view-2" style="background-color:#234376;color:#fff !important;">Continue</button>-->
                                                        </div>
                                                    </div>
                 </div>
                          
                                                    
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- account area end -->

<script>
function aa() {
  alert("We are redirecting you to the third Party Website.");
}
function aa1() {
  alert("We are redirecting you to the third Party Website.");
}
function aa2() {
  alert("We are redirecting you to the third Party Website.");
}function aa3() {
  alert("We are redirecting you to the third Party Website.");
}
</script>

@include('web/footer')
