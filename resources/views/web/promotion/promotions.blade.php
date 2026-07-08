@include('web/header')
 <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="" style="text-align: center;">
                <h3 style="margin: 20px 0px 10px 0px;">"We Make Every Purchase Special"</h3>
                <h4 style="margin: 10px 0px 40px 0px;">* Limited Time Offer *<br><small>Valid Till December 31st, 2021</small></h4>
            </div>
        </div>
        <input type="hidden" name="id" value="{{$promotion[0]->promotions_id}}">
           @foreach($promotion as $promotion)
        <div class="col-md-12">
            <div class="pricing-s1" style="margin-bottom: 50px;text-align: center;border: 1px solid #234376; border-top:none; background: #234376;margin-bottom: 50px;box-shadow: 5px 0px 15px 5px #234376;">
<div class="" style="display:none;">{{$promotion->alt_tag}}</div> 
<div class="top">
<h2 class="pack-title" style="display:none;">{{$promotion->url}}   </h2>
<h2 class="pack-title-image" style="display:none;">{{url('images/'.$promotion->image)}}</h2>
 <p class="price"><span  style="display:none;" class="currency">id</span> <b style="display:none;" class="pack-price">{{$promotion->promotions_id}}</b></p>
</div>               
<img src="{{url('images/'.$promotion->image)}}" alt="{{ strtolower(str_replace('-', ' ', $promotion->alt_tag)) }}" style="display: block; max-width: 100%; height: auto;"/ title="{{ ucwords(strtolower(str_replace('-', ' ', $promotion->alt_tag))) }}">
               
<a href="javascript:;" class="pack-ordernow btn btn-custom text-center" rel="f033ab37c30201f73f142449d037028d" style="color: #fff;background-color: #49d8f7;border-color: #49d8f7;margin: 10px 0px 8px 0px;">Order Now </a>
            </div>
        </div>
        @endforeach
    </div>
</div>



<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2  class="modal-title" id="exampleModalLongTitle"></h2>
        <h4> </h4>
        <button type="button" class="modal-close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container">
            <div class="row">
                <div class="col-md-12" id="theDiv">
                  
                </div>
                <div class="col-md-12">
                   <form action="{{url('promotion-mail').'/'}}" method="post" id="promotionform">
                                    @csrf
      <input type="hidden" id="p-name" name="p-name" value="">
      
    <input type="hidden" id="image" name="image" value="">
      
       <input type="hidden" id="p-price" name="p-price" value="">
  <div class="form-group">
      <div class="modal-text">
    <h5 style="display:none;" class="modal-title" id="exampleModalLongTitle"></h5>
        <h6 style="display:none;" class="modal-title2"> </h6>
        <h2 class="modal-title3" style="display:none;"></h2>
        </div>
  </div>
 <div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control" id="" placeholder="Name" name="name" required>
  </div>
  
  <div class="form-group">
    <label>Email Address</label>
    <input type="email" class="form-control" id="" placeholder="Email Address" name="email" required>
  </div>
  
   <div class="form-group">
    <label>Phone Number</label>
    <input type="text" class="form-control" id="" placeholder="Phone Number" name="contact" required>
  </div>
    <div class="form-group">
    <label>Message</label>
    <textarea class="form-control" row="3" name="message"></textarea>
  </div>
           <div class="form-group">
   <div class="g-recaptcha" id="recapchaheader" required></div>
  </div>
<div class="modal-footer">

        <button type="submit" class="btn btn-View-All-promotion" style="font-weight:400;">Submit</button></form>
      </div>
</form>
                </div>
            </div>
        </div>
      </div>
      
    </div>
  </div>
</div>
       
        
            <!-- section close -->

@include('web/footer')
    <script type="text/javascript">
        $(document).on("click", ".pack-ordernow", function (p) {
            
            //$("#exampleModalCenter").fadeIn();
            var t = $(this).closest(".pricing-s1").find(".top .pack-title").html(),
                a = $(this).closest(".pricing-s1").find(".top .pack-price").html(),
                i = $(this).closest(".pricing-s1").find(".top .pack-title-image").html(),
                o = $(this).attr("rel");
            $("#popupform input#popuppackage").val(""),
            $(".modal-text h5").empty(),
            $(".modal-text h6").empty(),
            $("#theDiv").empty(),
            $('input[name="p-name"]').val(""),
            $('input[name="p-price"]').val(""),
            $('input[name="image"]').val(""),
            //alert(t+" "+a+" "+o);
            $("#popupform input#popuppackage").val(o),
            $(".modal-text h5").append(t),
    
             $('#theDiv').append('<img id="theImg" src="'+i+'" style="width:100%; height:auto;"  />')
            $(".modal-text h6").append("In Just <span>" + a + " </span>"),
            $('input[name="p-name"]').val(t),
            $('input[name="p-price"]').val(a),
           $('input[name="image"]').val(i),
            $("#exampleModalCenter").modal('show');
            }),$(document).on("click", ".modal-close", function (p) {
        $("#exampleModalCenter").modal('hide');});
    </script>


 
 
 
 
 
