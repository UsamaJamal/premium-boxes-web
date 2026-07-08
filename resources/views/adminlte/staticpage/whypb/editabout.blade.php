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
              <li class="breadcrumb-item"><a href="{{ url('admin/dashboard')" style="color: #234376;">Home</a></li>
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
                <h5>Edit About Page</h5>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                  
              </div>
              <!-- form start -->
               <form id="basic-form" method="post" action="{{url('admin/update_about')}}" enctype="multipart/form-data"
>@csrf
            

             <input type="hidden" name="oldimage" value="{{$about[0]->image}}">

             

              
                  <div class="card" style="width: 66%; margin-left: 15px;">
    <div class="card-header header-2">Update About Data</div>
    <div class="card-body">
                <div class="form-group row">
                    <label for="aboutheading" class="col-sm-3 col-form-label">Heading</label>
                    <div class="col-sm-9">
                    <input id="aboutheading" type="text" class="form-control"placeholder="Heading" name="aboutheading"  value="{{$about[0]->heading}}" required>
                  </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Description</label>
                    <div class="col-sm-12">
                     <textarea class="form-control" id="ckeditor" name="ckeditor">
                       <?Php echo $about[0]->description ?>
                     </textarea>
                   </div>
                  </div>
                </div>
              </div>

              <div class="card" style="width: 66%; margin-left: 15px;">
    <div class="card-header header-2">Update Meta Data</div>
    <div class="card-body">
                    <div class="form-group row">
                    <label for="aboutmtitle" class="col-sm-3 col-form-label">Meta Title</label>
                    <div class="col-sm-9">
                    <input id="aboutmtitle" type="text" class="form-control"placeholder="Meta Title" name="aboutmtitle" value="{{$about[0]->meta_title}}" required>
                  </div>
                  </div>

                  <div class="form-group row">
                    <label for="aboutmtags" class="col-sm-3 col-form-label">Meta Tags</label>
                    <div class="col-sm-9">
                    <input id="aboutmtags" type="text" class="form-control"placeholder="Meta Tags" name="aboutmtags" value="{{$about[0]->meta_tags}}" required>
                  </div>
                  </div>

                  <div class="form-group row">
                    <label for="aboutmdescrioption" class="col-sm-3 col-form-label">Meta Description</label>
                    <div class="col-sm-9">
                    <input id="aboutmdescrioption" type="text" class="form-control"placeholder="Meta Description" name="aboutmdescrioption" value="{{$about[0]->meta_description}}" required>
                  </div>
                  </div>
                </div>
              </div>

              <div class="card" style="width: 66%; margin-left: 15px;">
    <div class="card-header header-2">Update Image</div>
    <div class="card-body">

                   <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Image</label>
                    <div class="col-sm-9">
                    <input style="padding-bottom: 35px;" type="file" class="form-control" name="image" >
                  </div>
                </div>

                 <div class="form-group row">
                    <img style="height:130px; width:450px;" src="{{url('images/'.$about[0]->image)}}">
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
