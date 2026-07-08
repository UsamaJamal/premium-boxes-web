@include('adminlte/header')

  <!-- Main Sidebar Container -->
  @include('adminlte/sidebarlink')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}" style="color: #234376;">Home</a></li>
              <li class="breadcrumb-item active" style="color: #49d8f7;">Edit Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
  <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card">
              <div class="card-header">
                <h5>Edit Product</h5>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                  
              </div>
              <!-- form start -->
               <form id="basic-form" method="post" action="{{url('admin/update_product'.'/'.$pro[0]->product_id)}}" enctype="multipart/form-data"
>@csrf
<input type="hidden" name="catid" value="{{$pro[0]->cat_id}}">
 <input type="hidden" name="id" value="{{$pro[0]->product_id}}">
             <input type="hidden" name="oldimage" value="{{$pro[0]->image}}">
<?php
      if (!empty($pro[0]->images)) {?>
<?php foreach(json_decode($pro[0]->images) as $imagegallery){ ?>
  <input type="hidden" name="oldgallery[]" value="<?php echo $imagegallery;?>">
<?php }} ?>
                
                <div class="card" style="width: 66%; margin-left: 15px;">
    <div class="card-header header-2">Update Product Data</div>
    <div class="card-body">
                    <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Title</label>
                    <div class="col-sm-9">
                    <input id="title" type="text" class="form-control"placeholder="Title" name="title"
                    value="{{$pro[0]->title}}" required>
                  </div>
                  </div>

                  

              <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Product URl</label>
                    <div class="col-sm-9">
                    <input id="producturl" type="text" class="form-control"placeholder="Product URl" name="producturl"value="{{$pro[0]->url}}" required>
                  </div>
                  </div>
                </div>
              </div>

                 <div class="card" style="width: 66%; margin-left: 15px;">
    <div class="card-header header-2">Add Meta Data</div>
    <div class="card-body">
                   <div class="form-group row">
                    <label for="metatitle" class="col-sm-3 col-form-label">Meta Title</label>
                    <div class="col-sm-9">
                    <input id="metatitle" type="text" class="form-control"placeholder="Meta Title" name="metatitle" value="{{$pro[0]->meta_title}}" required>
                  </div>
                  </div>

                  <div class="form-group row">
                    <label for="metadescription" class="col-sm-3 col-form-label">Meta Description</label>
                    <div class="col-sm-9">
                    <input id="metadescription" type="text" class="form-control"placeholder="Meta Description" name="metadescription" value="{{$pro[0]->meta_description}}" required>
                  </div>
                  </div>

                  <div class="form-group row">
                    <label for="metatags" class="col-sm-3 col-form-label">Meta Tags</label>
                    <div class="col-sm-9">
                    <input id="metatags" type="text" class="form-control"placeholder="Meta Tags" name="metatags" value="{{$pro[0]->meta_tags}}" required>
                  </div>
                  </div>
                </div>
              </div>

              <div class="card" style="width: 66%; margin-left: 15px;">
    <div class="card-header header-2">Update Descripiton</div>
    <div class="card-body">

                   <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Description</label>
                    <div class="col-sm-12">
                     <textarea class="form-control" id="ckeditor" name="ckeditor">
                     	 <?php echo $pro[0]->description?>
                     </textarea>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Long Description</label>
                    <div class="col-sm-12">
                     <textarea class="form-control" id="long_ckeditor" name="long_ckeditor">
                     	<?php echo $pro[0]->long_description?>
                     </textarea>
                   </div>
                  </div>
                </div>
              </div>

              <div class="card" style="width: 66%; margin-left: 15px;">
    <div class="card-header header-2">Update Image</div>
    <div class="card-body">

                   <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Image</label>
                    <div class="col-sm-9">
                    <input style="padding-bottom: 35px;" type="file" class="form-control" name="image">
                  </div>
                  </div>
                  <div>
                     <img style="height:50px; width:50px;" src="{{url('images/'.$pro[0]->image)}}">
                  </div>

                  <div class="form-group row">
                    <label  for="altname" class="col-sm-3 col-form-label">Altname</label>
                    <div class="col-sm-9">
                    <input id="altname" type="text" class="form-control"placeholder="Altname" name="altname"
                    value="{{$pro[0]->altname}}" required>
                  </div>
                  </div>

                   

                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Gallery</label>
                    <div class="col-sm-9">
                    <input style="padding-bottom: 35px;" type="file" class="form-control cho-img"  placeholder="" name="images[]" multiple>
                  </div>
                    </div>
                <div>
                  <?php 

        $images = json_decode($pro[0]->images); 
        if(!empty($images)){  foreach ($images as $images) {?>
      <img style="height:50px; width:50px;border-radius: 50%;" src="{{url('images/'.$images)}}"/> 
 
     <a href="{{url('del_galery_image/'.$images.'/'.$pro[0]->product_id)}}">
                        
                        <button type="button" class="btn btn-danger" style="float:none;width:auto;height:auto;display:inline;">Delete</button>
                      </a>
   <?php } }
?> 
                </div>
              </div>
            </div>

            <div class="card" style="width: 66%; margin-left: 15px;">
    <div class="card-header header-2">Other</div>
    <div class="card-body">
<div class="form-group row">
                    <label class="col-sm-3 col-form-label">Related Product</label>
                    <div class="col-sm-9">
                    <select id="related" name="related[]" class="select2" multiple="" data-placeholder="Nothing Select" data-dropdown-css-class="" style="width: 100%;" data-select2-id="26" tabindex="-1" aria-hidden="true"> 
                    <?php $temp=json_decode($pro[0]->related_product); 
                    if(!empty($value)){ foreach ($value as $index){?>
                        <option value="<?php echo $index->product_id;  ?>" 
                        <?php  if(!empty($temp)){foreach ($temp as $key => $keyvalue) {
                            if($keyvalue==$index->product_id){echo"selected";}
                        }} ?>><?php echo $index->title; ?></option>
                    <?php } }?>
                   </select>
                 </div>
                  </div>
              

               


                   <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Product Category</label>
                    <div class="col-sm-9">
                    <select type="text" class="form-control"id="" placeholder="" 
                    name="productcategory">
                  <option value="0">--select a Category--
                  </option>
                   @foreach ($category_data as $index) 
                  
                  <option  value="{{$index->cat_id}}" <?php if($index->cat_id == $pro[0]->cat_id){echo "selected";} ?> >

                    {{$index->name}}</option>
                  @endforeach

          
           
                  </select>
                </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Status</label>
                    <div class="col-sm-9">
                    <select type="text" class="form-control"id="" placeholder="" 
                    name="status">
                  
                
                  <option <?php if($pro[0]->status==1){echo "selected";} ?> value="1">Active</option>
                  <option <?php if($pro[0]->status==0){echo "selected";} ?> value="0">Disable</option>
                 
                  
           
                  </select>
                </div>
                  </div>
                  
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Show on Home</label>
                    <div class="col-sm-9">
                    <select type="text" class="form-control"id="" placeholder="" 
                    name="show_home">
                  
                  <option <?php if($pro[0]->show_home==0){echo "selected";} ?> value="0">No</option>
                  <option <?php if($pro[0]->show_home==1){echo "selected";} ?> value="1">Yes</option>

                 
                  
           
                  </select>
                </div>
                  </div>
              <!-- FAQs Section -->
              <div class="card" style="width: 66%; margin-left: 15px;">
                  <div class="card-header header-2">Frequently Asked Questions (FAQs)</div>
                  <div class="card-body" id="faq-container">
                      @if(isset($faqs) && count($faqs) > 0)
                          @foreach($faqs as $faq)
                          <div class="faq-item" style="border:1px solid #eee; padding: 15px; margin-bottom: 15px; position:relative;">
                              <div class="form-group row">
                                  <label class="col-sm-3 col-form-label">Question</label>
                                  <div class="col-sm-9">
                                      <input type="text" class="form-control" name="faq_question[]" value="{{$faq->question}}" placeholder="Enter FAQ Question">
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label class="col-sm-3 col-form-label">Answer</label>
                                  <div class="col-sm-9">
                                      <textarea class="form-control" name="faq_answer[]" rows="3" placeholder="Enter FAQ Answer">{{$faq->answer}}</textarea>
                                  </div>
                              </div>
                              <div class="text-right">
                                  <button type="button" class="btn btn-danger btn-sm" onclick="removeFaqRow(this)">Remove FAQ</button>
                              </div>
                          </div>
                          @endforeach
                      @endif
                  </div>
                  <div class="card-footer">
                      <button type="button" class="btn btn-success btn-sm" onclick="addFaqRow()">Add Another FAQ</button>
                  </div>
              </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="save" name="submit">Update</button>
                </div>
              </form>
            </div>
           

          


          
           
         

          </div>
       
          
        </div>
        
      </div>
    </section>
    <!-- /.content -->
  </div>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<script src="{{URL::asset('ckeditor/ckeditor.js')}}"></script>
<script>
    CKEDITOR.replace('ckeditor', {
        filebrowserUploadUrl: "{{URL::asset('ckeditor/ck_upload.php')}}",
        filebrowserUploadMethod: 'form'
    });
</script>
<script>
    CKEDITOR.replace('long_ckeditor', {
        filebrowserUploadUrl: "{{URL::asset('ckeditor/ck_upload.php')}}",
        filebrowserUploadMethod: 'form'
    });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
<script>
$(document).ready(function() {
$("#basic-form").validate();
});

function addFaqRow() {
    var faqHtml = '<div class="faq-item" style="border:1px solid #eee; padding: 15px; margin-bottom: 15px; position:relative;">' +
                      '<div class="form-group row">' +
                          '<label class="col-sm-3 col-form-label">Question</label>' +
                          '<div class="col-sm-9">' +
                              '<input type="text" class="form-control" name="faq_question[]" placeholder="Enter FAQ Question">' +
                          '</div>' +
                      '</div>' +
                      '<div class="form-group row">' +
                          '<label class="col-sm-3 col-form-label">Answer</label>' +
                          '<div class="col-sm-9">' +
                              '<textarea class="form-control" name="faq_answer[]" rows="3" placeholder="Enter FAQ Answer"></textarea>' +
                          '</div>' +
                      '</div>' +
                      '<div class="text-right">' +
                          '<button type="button" class="btn btn-danger btn-sm" onclick="removeFaqRow(this)">Remove FAQ</button>' +
                      '</div>' +
                  '</div>';
    $('#faq-container').append(faqHtml);
}

function removeFaqRow(btn) {
    $(btn).closest('.faq-item').remove();
}
</script>
@include('adminlte/footer')
