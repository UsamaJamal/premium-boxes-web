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
                <h3 class="card-title">Edit Term & Condition</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
               <form id="basic-form" method="post" action="{{url('admin/update_termcon')}}" enctype="multipart/form-data"
>@csrf
            

             <input type="hidden" name="oldimage" value="{{$termcon[0]->image}}">

             

                <div class="card-body">
                  

                    <div class="form-group">
                    <label for="tcmtitle" style="color: #5c89b5;">Meta Title</label>
                    <input id="tcmtitle" type="text" class="form-control"placeholder="Meta Title" name="tcmtitle" value="{{$termcon[0]->meta_title}}" required>
                  </div>

                  <div class="form-group">
                    <label for="tcmtags" style="color: #5c89b5;">Meta Tags</label>
                    <input id="tcmtags" type="text" class="form-control"placeholder="Meta Tags" name="tcmtags" value="{{$termcon[0]->meta_tags}}" required>
                  </div>

                  <div class="form-group">
                    <label for="tcmdescrioption" style="color: #5c89b5;">Meta Description</label>
                    <input id="tcmdescrioption" type="text" class="form-control"placeholder="Meta Description" name="tcmdescrioption" value="{{$termcon[0]->meta_description}}" required>
                  </div>

                   <div class="form-group">
                    <label style="color: #5c89b5;">Image</label>
                    <input style="padding-bottom: 35px;" type="file" class="form-control" name="image" >
                  </div>

                 <div class="form-group">
                    <img style="height:130px; width:450px;" src="{{url('images/'.$termcon[0]->image)}}">
                  </div>
                  

                

                 <div class="form-group">
                    <label style="color: #5c89b5;">Description</label>
                     <textarea class="form-control" id="ckeditor" name="ckeditor">
                       <?Php echo $termcon[0]->description ?>
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

<!-- jQuery -->
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
