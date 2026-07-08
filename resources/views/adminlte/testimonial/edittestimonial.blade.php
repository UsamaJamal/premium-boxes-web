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
                <h5>Edit Testimonial</h5>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                  
              </div>
              <!-- form start -->
               <form id="basic-form" method="post" action="{{url('admin/update_testimonial'.'/'.$testimonial[0]->testimonial_id )}}" enctype="multipart/form-data"
>@csrf
            

             <input type="hidden" name="oldimage" value="{{$testimonial[0]->image}}">

              <div class="card" style="width: 66%; margin-left: 15px;">
    <div class="card-header header-2">Update Testimonial Data</div>
    <div class="card-body">
                  <div class="form-group row">
                    <label for="name" class="col-sm-3 col-form-label">Name</label>
                    <div class="col-sm-9">
                    <input id="name" type="text" class="form-control" placeholder="Name" name="name" value="{{$testimonial[0]->name}}" required>
                  </div>
                  </div>  
                  <div class="form-group row">
                    <label for="profilelink" class="col-sm-3 col-form-label">Profile Link</label>
                    <div class="col-sm-9">
                    <input id="profilelink" type="text" class="form-control" placeholder="Profile Link" value="{{$testimonial[0]->profile_link}}" name="profilelink" required>
                  </div>
                  </div> 
                  <div class="form-group row">
                    <label for="star_rating" class="col-sm-3 col-form-label">Star Rating</label>
                    <div class="col-sm-9">
                    <input id="star_rating" type="text" class="form-control" placeholder="Star Rating" value="{{$testimonial[0]->star_rating}}" name="star_rating">
                  </div>
                  </div> 
                  <div class="form-group row">
                    <label for="comment" class="col-sm-3 col-form-label">Comments</label>
                    <div class="col-sm-9">
                    <input id="comment" type="text" class="form-control" placeholder="Comments" value="{{$testimonial[0]->comment}}" name="comment" required>
                  </div>
                  </div> 
                
                </div>
              </div>

<div class="card" style="width: 66%; margin-left: 15px;">
    <div class="card-header header-2">Update Image</div>
    <div class="card-body">
                   <div class="form-group row">
                    <label for="image" class="col-sm-3 col-form-label">Image</label>
                    <div class="col-sm-9">
                    <input id="image" style="padding-bottom: 35px;" type="file" class="form-control" name="image">
                  </div>
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
  <!-- /.content-wrapper -->
 

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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
<script>
$(document).ready(function() {
$("#basic-form").validate();
});
</script>
@include('adminlte/footer')
