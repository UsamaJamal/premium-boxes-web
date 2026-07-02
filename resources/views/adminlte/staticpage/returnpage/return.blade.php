
  

@include('adminlte/header')
  @include('adminlte/sidebarlink')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Return Page Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Return Page Form</li>
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
              <div class="card-header">
                <h3 class="card-title">Add Return Page</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
               <form method="post" action="{{url('admin/add_return')}}"enctype="multipart/form-data"
>@csrf
                <div class="card-body">
                	
                  <div class="form-group">
                    <label style="color: #5c89b5;">Meta Title</label>
                    <input type="text" class="form-control"placeholder="Meta Title" name="rpmtitle">
                  </div>

                  <div class="form-group">
                    <label style="color: #5c89b5;">Meta Tags</label>
                    <input type="text" class="form-control"placeholder="Meta Tags" name="rpmtags">
                  </div>

                  <div class="form-group">
                    <label style="color: #5c89b5;">Meta Description</label>
                    <input type="text" class="form-control"placeholder="Meta Description" name="rpmdescrioption">
                  </div>

                   <div class="form-group">
                    <label style="color: #5c89b5;">Image</label>
                    <input style="padding-bottom: 35px;" type="file" class="form-control" name="image">
                  </div>

                

                 <div class="form-group">
                    <label style="color: #5c89b5;">Description</label>
                     <textarea class="form-control" id="ckeditor" name="ckeditor"></textarea>
                  </div>

                 


                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="submit">Add</button>
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

  @include('adminlte/footer')