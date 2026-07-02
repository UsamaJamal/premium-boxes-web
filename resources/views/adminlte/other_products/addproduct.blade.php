@include('adminlte/header')
  @include('adminlte/sidebarlink')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Other Product Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Other Product Form</li>
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
                <h3 class="card-title">Add Other Product</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
               <form id="basic-form" method="post" action="{{url('admin/addotherproduct')}}"enctype="multipart/form-data"
>@csrf
                <div class="card-body">
                	 <div class="form-group">
                    <label for="op_title" style="color: #0da8ca;">Title</label>
                    <input id="op_title" type="text" class="form-control"placeholder="Title" name="op_title" required>
                  </div>

                   <div class="form-group">
                    <label for="op_url" style="color: #0da8ca;">Other's Product URL</label>
                    <input id="op_url" type="text" class="form-control"placeholder="Other's Product URL" name="op_url" required>
                  </div>
                <div class="form-group">
                    <label for="op_mtitle" style="color: #0da8ca;">Meta Title</label>
                    <input id="op_mtitle" type="text" class="form-control"placeholder="Meta Title" name="op_mtitle" required>
                  </div>
                   <div class="form-group">
                    <label for="op_mdescription" style="color: #0da8ca;">Meta Description</label>
                    <input id="op_mdescription" type="text" class="form-control"placeholder="Meta Description" name="op_mdescription" required>
                  </div>
                   <div class="form-group">
                    <label for="op_mtag" style="color: #0da8ca;">Meta Tags</label>
                    <input id="op_mtag" type="text" class="form-control"placeholder="Meta Tags" name="op_mtag" required>
                  </div>
                   <div class="form-group">
                    <label style="color: #0da8ca;">Description</label>
                     <textarea class="form-control" id="ckeditor" name="ckeditor"></textarea>
                  </div>
                    <div class="form-group">
                    <label style="color: #0da8ca;">Long Description</label>
                     <textarea class="form-control" id="ckeditor1" name="long_ckeditor"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="image" style="color: #0da8ca;">Image</label>
                    <input id="image" style="padding-bottom: 35px;" type="file" class="form-control" name="image" required>
                  </div>
                    <div class="form-group">
                    <label for="op_altname" style="color: #0da8ca;">Altname</label>
                    <input id="op_altname" type="text" class="form-control"placeholder="Altname" name="op_altname" required>
                  </div>
                  <div class="form-group">
                    <label for="images" style="color:#0da8ca" >Gallery</label>
                    <input id="images" style="padding-bottom: 35px;" type="file" class="form-control cho-img"  placeholder="" name="images[]" multiple required>
                    </div>
                    <div class="form-group">



                    <label style="color:#0da8ca" >Related Product</label>
                    <select class="select2" multiple="" data-placeholder="Nothing Select"
                     data-dropdown-css-class="" style="width: 100%;" data-select2-id="26"
                      tabindex="-1" aria-hidden="true" name="related[]">
                      @foreach ($other_product as $other_product)
                      <option  value="<?php echo $other_product->other_product_id;  ?>">{{$other_product->title}}</option>
                       @endforeach
                    </select>
                  </div>
              

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" style="background-color:#0da8ca;border-color:#0da8ca;" name="submit">Add</button>
                </div>
              </form>
            </div>
           

          


          
           
         

          </div>
       
          
        </div>
        
      </div>
    </section>
 
  </div>
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