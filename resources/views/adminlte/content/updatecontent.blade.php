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
            <h1>Update Content</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}" style="color: #234376;">Home</a></li>
              <li class="breadcrumb-item active" style="color: #49d8f7;">Update Content</li>
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
                <h5>Update Content</h5>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                  
              </div>
              <!-- form start -->
               <form id="basic-form" method="post" action="{{url('admin/updatecontent'.'/'.$content[0]->id)}}" enctype="multipart/form-data"
>@csrf
            
<div class="card" style="width: 66%; margin-left: 15px;">
                  <div class="card-header header-2">Update Content Data</div>
                  <div class="card-body">
                 <div class="form-group row">
                    <label for="title" class="col-sm-3 col-form-label">Heading 1</label>
                    <div class="col-sm-9">
                    <input id="title" type="text" class="form-control" name="heading1" value="{{$content[0]->heading1}}" required>
                  </div>
                  </div>
                  
                  <div class="form-group row">
                    <label for="title" class="col-sm-3 col-form-label">Heading 2</label>
                    <div class="col-sm-9">
                    <input id="title" type="text" class="form-control" name="heading2" value="{{$content[0]->heading2}}" required>
                  </div>
                  </div>
                  
                  <div class="form-group row">
                    <label for="title" class="col-sm-3 col-form-label">Heading 3</label>
                    <div class="col-sm-9">
                    <input id="title" type="text" class="form-control" name="heading3" value="{{$content[0]->heading3}}" required>
                  </div>
                  </div>
                  
                  <div class="form-group row">
                    <label for="title" class="col-sm-3 col-form-label">Heading 4</label>
                    <div class="col-sm-9">
                    <input id="title" type="text" class="form-control" name="heading4" value="{{$content[0]->heading4}}" required>
                  </div>
                  </div>
                  
                  <div class="form-group row">
                    <label for="title" class="col-sm-3 col-form-label">Text</label>
                    <div class="col-sm-9">
                    <input id="title" type="text" class="form-control" name="text" value="{{$content[0]->text}}" required>
                  </div>
                  </div>
                

                </div>

                 <!-- <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Description</label>
                     <textarea class="form-control" id="ckeditor" name="ckeditor">
                       
                     </textarea>
                  </div> -->

                



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
