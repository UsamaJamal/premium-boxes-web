@include('adminlte/header')
  @include('adminlte/sidebarlink')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Blog Banner Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}" style="color: #234376;">Home</a></li>
              <li class="breadcrumb-item active" style="color: #49d8f7;">Blog Banner Form</li>
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
                <h5>Add Blog Banner</h5>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                  
              </div>
              <!-- form start -->
               <form id="basic-form" method="post" action="{{url('admin/addbanner')}}"enctype="multipart/form-data"
>@csrf
                <div class="card" style="width: 66%; margin-left: 15px;">
    <div class="card-header header-2">Add Banner</div>
    <div class="card-body">

                  <div class="form-group row">
                    <label for="image" class="col-sm-3 col-form-label">Image</label>
                    <div class="col-sm-9">
                    <input id="image" style="padding-bottom: 35px;" type="file" class="form-control" name="image" required>
                  </div>
                  </div>

               <div class="form-group row">
                    <label for="banneraname" class="col-sm-3 col-form-label">AltName</label>

                    <div class="col-sm-9">
                    <input id="banneraname" type="text" class="form-control"placeholder="AltName" name="banneraname" required>
                  </div>
                  </div>

</div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="save" name="submit">Add</button>
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