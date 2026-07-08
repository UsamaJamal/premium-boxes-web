@include('adminlte/header')
  @include('adminlte/sidebarlink')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Testimonial</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}" style="color: #234376;">Home</a></li>
              <li class="breadcrumb-item active" style="color: #49d8f7;">Testimonial</li>
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
                <h5>Testimonial</h5>
              </div>

              <div class="card-body">
                  
              </div>
              <!-- /.card-header -->
              <!-- form start -->
               <form id="basic-form" method="post" action="{{url('admin/add_testimonial')}}"enctype="multipart/form-data"
>@csrf
              <div class="card" style="width: 66%; margin-left: 15px;">
    <div class="card-header header-2">Add Testimonial Data</div>
    <div class="card-body">
                <div class="form-group row">
                    <label for="name" class="col-sm-3 col-form-label">Name</label>
                    <div class="col-sm-9">
                    <input id="name" type="text" class="form-control" placeholder="Name" name="name" required>
                  </div>
                  </div>  
                  <div class="form-group row">
                    <label for="profilelink" class="col-sm-3 col-form-label">Profile Link</label>
                    <div class="col-sm-9">
                    <input id="profilelink" type="text" class="form-control" placeholder="Profile Link" name="profilelink" required>
                  </div>
                  </div> 
                  <div class="form-group row">
                    <label for="star_rating" class="col-sm-3 col-form-label">Star Rating</label>
                    <div class="col-sm-9">
                    <input id="star_rating" type="text" class="form-control" placeholder="Star Rating" name="star_rating">
                  </div>
                  </div> 
                   
                  <div class="form-group row">
                    <label for="comment" class="col-sm-3 col-form-label">Comments</label>
                    <div class="col-sm-9">
                    <input id="comment" type="text" class="form-control" placeholder="Comments" name="comment" required>
                  </div>
                  </div> 

                </div>
              </div>

<div class="card" style="width: 66%; margin-left: 15px;">
    <div class="card-header header-2">Add Image</div>
    <div class="card-body">
              <div class="form-group row">
                    <label for="image" class="col-sm-3 col-form-label">Image</label>
                    <div class="col-sm-9">
                    <input id="image" style="padding-bottom: 35px;" type="file" class="form-control" name="image" required>
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