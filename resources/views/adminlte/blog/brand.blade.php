@include('adminlte/header')
  @include('adminlte/sidebarlink')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Brand</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#" style="color: #2d3379;">Home</a></li>
              <li class="breadcrumb-item active" style="color: #d55034;">Add Brand</li>
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
                <h5>Add Brand</h5>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
         <div class="card-body">
                  
              </div>
               <form id="basic-form" method="post" action="{{url('admin/addbrand').'/'}}"enctype="multipart/form-data"
>@csrf

               <div class="card" style="width: 66%; margin-left: 15px;">
    <div class="card-header header-2">Add Brand Data</div>
    <div class="card-body">
   
  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Brand URL</label>
                    <div class="col-sm-9">
                    <input id="blogurl" type="text" class="form-control"placeholder="Brand URL" name="brandurl" required>
                  </div>
                  </div>

  </div>
</div>

  

              <div class="card" style="width: 66%; margin-left: 15px;">
              <div class="card-header header-2">Add Image</div>
              <div class="card-body">
              <div class="form-group row">

                    <label class="col-sm-3 col-form-label">Image</label>
                    <div class="col-sm-9">
                    <div class="input-group">
                                    <div class="custom-file">
                                      <input type="file" class="custom-file-input" id="exampleInputFile" name="image">
                                      <label class="custom-file-label form-control" for="exampleInputFile" style="width: 100%;">Choose file</label>
                    </div>
                    </div>
                     <img src="#" id="blah" class="img-view" width="445" height="200">              
                  </div>
                    
                  </div>

               <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Alttag</label>
                    <div class="col-sm-9">
                    <input id="blogalttag" type="text" class="form-control"placeholder="Alttag" name="brandalttag" required>
                  </div>
                  </div>
                </div>
              </div>
            

                 
            
              <div class="card-body">
            

   
               
                <!-- /.card-body -->

                <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="save" name="offersubmit">Save</button>

<script type="text/javascript">

  document.querySelector(".save").addEventListener('click', function(){
  Swal.fire({
  position: 'top-end',
  icon: 'success',
  title: 'Your work has been saved',
  showConfirmButton: false,
  timer: 2000
});
});
  

</script>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
<script>
$(document).ready(function() {
$("#basic-form").validate();
});
</script>
@include('adminlte/footer')