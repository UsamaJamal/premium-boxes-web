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
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Form</li>
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
            <div class="card card-primary">
              <div class="card-header" style="background-color:#9a8800;">
                <h3 class="card-title">Edit Other Product</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
               <form id="basic-form" method="post" action="{{url('admin/update_otherproduct'.'/'.$otherprodata[0]->other_product_id)}}" enctype="multipart/form-data">



               	 <input type="hidden" name="id" value="{{$otherprodata[0]->other_product_id}}">
               	      <input type="hidden" name="oldimage" value="{{$otherprodata[0]->image}}">
<?php
      if (!empty($other_product_data[0]->images)) {?>
<?php foreach(json_decode($other_product_data[0]->images) as $imagegallery){ ?>
  <input type="hidden" name="oldgallery[]" value="<?php echo $imagegallery;?>">
<?php }} ?>
               
               	@csrf

               <div class="card-body">
                	 <div class="form-group">
                    <label for="op_title" style="color: #0da8ca;">Title</label>
                    <input id="op_title" type="text" class="form-control"placeholder="Title" name="op_title"  value="{{$otherprodata[0]->title}}" required>
                  </div>

                   <div class="form-group">
                    <label for="op_url" style="color: #0da8ca;">Other's Product URL</label>
                    <input id="op_url" type="text" class="form-control"placeholder="Other's Product URL" name="op_url" value="{{$otherprodata[0]->other_produrl}}" required>
                  </div>
                <div class="form-group">
                    <label for="op_mtitle" style="color: #0da8ca;">Meta Title</label>
                    <input id="op_mtitle" type="text" class="form-control"placeholder="Meta Title" name="op_mtitle" value="{{$otherprodata[0]->meta_title}}" required>
                  </div>
                   <div class="form-group">
                    <label for="op_mdescription" style="color: #0da8ca;">Meta Description</label>
                    <input id="op_mdescription" type="text" class="form-control"placeholder="Meta Description" name="op_mdescription" value="{{$otherprodata[0]->meta_description}}" required>
                  </div>
                   <div class="form-group">
                    <label for="op_mtag" style="color: #0da8ca;">Meta Tags</label>
                    <input id="op_mtag" type="text" class="form-control"placeholder="Meta Tags" name="op_mtag"
                    value="{{$otherprodata[0]->meta_tags}}" required>
                  </div>
                   <div class="form-group">
                    <label style="color: #0da8ca;">Description</label>
                     <textarea class="form-control" id="ckeditor" name="ckeditor">
                     	<?php echo $otherprodata[0]->description?>
                     </textarea>
                  </div>
                    <div class="form-group">
                    <label style="color: #0da8ca;">Long Description</label>
                     <textarea class="form-control" id="ckeditor1" name="long_ckeditor">
                     	<?php echo $otherprodata[0]->long_description?>
                     </textarea>
                  </div>
                  <div class="form-group">
                    <label style="color: #0da8ca;">Image</label>
                    <input style="padding-bottom: 35px;" type="file" class="form-control" name="image">
                  </div>
                   <div>
                     <img style="height:50px; width:50px;" src="{{url('images/'.$otherprodata[0]->image)}}">
                  </div>
                    <div class="form-group">
                    <label for="op_altname" style="color: #0da8ca;">Altname</label>
                    <input id="op_altname" type="text" class="form-control"placeholder="Altname" name="op_altname" value="{{$otherprodata[0]->altname}}">
                  </div>
                  <div class="form-group">
                    <label style="color:#0da8ca" >Gallery</label>
                    <input style="padding-bottom: 35px;" type="file" class="form-control cho-img"  placeholder="" name="images[]" multiple>
                    </div>
                     <div>
                  <?php 

        $images = json_decode($otherprodata[0]->images); 

    foreach ($images as $images) {?>
      <img style="height:50px; width:50px;border-radius: 50%;" src="{{url('images/'.$images)}}"/> 
 
     <a href="{{url('admin/del_galery_otherproduct/'.$images.'/'.$otherprodata[0]->other_product_id)}}">
                        
                        <button type="button" class="btn btn-danger" >Delete</button>
                      </a>
   <?php }
?> 
                </div>
                  <div class="form-group">

                    <label style="color:#0da8ca" >Related Product</label>
                    <select id="related" name="related[]" class="select2" multiple="" 
                  data-placeholder="Nothing Select" data-dropdown-css-class="" 
                  style="width: 100%;" data-select2-id="26" tabindex="-1" aria-hidden="true"> 
                  <?php $temp=json_decode($otherprodata[0]->related_product); 
                    if(!empty($other_product_data)){ foreach ($other_product_data as $index){?>
                        <option value="<?php echo $index->other_product_id;  ?>" <?php  if(!empty($temp)){foreach ($temp as $key => $keyvalue) {
                            if($keyvalue==$index->other_product_id){echo"selected";}
                        }} ?>><?php echo $index->title; ?></option>
                    <?php } }?>
                   </select>
                  </div>
              

                </div>
                <!-- /.card-body -->


                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" style="background-color:#0da8ca;border-color:#0da8ca;" name="submit">Update</button>
                </div>
              </form>
            </div>
           
          </div>
       
          
        </div>
        
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- <script 
src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>-->
<!-- <script>
  $(document).ready(function(){
    $(#user).select2({
      placeholder : "Nothing selected";
    });
  });
</script>  -->
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
</script>
@include('adminlte/footer')
