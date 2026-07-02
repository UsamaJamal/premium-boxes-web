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
              <div class="card-header">
                <h3 class="card-title">Edit FAQ Page</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
               <form id="basic-form" method="post" action="{{url('admin/update_faq')}}" enctype="multipart/form-data"
>@csrf
            

             <input type="hidden" name="oldimage" value="{{$faq_data[0]->image}}">
                <div class="card-body">
                    <div class="form-group">
                    <label for="aboutmtitle" style="color: #5c89b5;">Meta Title</label>
                    <input id="aboutmtitle" type="text" class="form-control"placeholder="Meta Title" name="faqmtitle" value="{{$faq_data[0]->meta_title}}" required>
                  </div>

                  <div class="form-group">
                    <label for="aboutmtags" style="color: #5c89b5;">Meta Tags</label>
                    <input id="aboutmtags" type="text" class="form-control"placeholder="Meta Tags" name="faqmtags" value="{{$faq_data[0]->meta_tags}}" required>
                  </div>

                  <div class="form-group">
                    <label for="aboutmdescrioption" style="color: #5c89b5;">Meta Description</label>
                    <input id="aboutmdescrioption" type="text" class="form-control"placeholder="Meta Description" name="faqmdescrioption" value="{{$faq_data[0]->meta_description}}" required>
                  </div>

                   <div class="form-group">
                    <label style="color: #5c89b5;">Image</label>
                    <input style="padding-bottom: 35px;" type="file" class="form-control" name="image" >
                  </div>

                 <div class="form-group">
                    <img style="height:130px; width:450px;" src="{{url('images/'.$faq_data[0]->image)}}">
                  </div>
                  

                

                 <div class="form-group">
                    <label style="color: #5c89b5;">Description</label>
                     <textarea class="form-control" id="ckeditor" name="ckeditor">
                       <?Php echo $faq_data[0]->description ?>
                     </textarea>
                  </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="submit">Update</button>
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
