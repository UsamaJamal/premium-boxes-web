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
                <h5>Edit Home Banner</h5>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                  
              </div>
              <!-- form start -->
               <form id="basic-form" method="post" action="{{url('admin/update_homeslider'.'/'.$slider[0]->slider_id)}}" enctype="multipart/form-data"
>@csrf
            

             <input type="hidden" name="oldimage" value="{{$slider[0]->image}}">


               <!--  

                <div class="form-group row">
                    <label for="homeheading1" class="col-sm-3 col-form-label">Heading 1</label>
                    <input id="homeheading1" type="text" class="form-control"placeholder="Heading 1" name="homeheading1" value="{{$slider[0]->heading_1}}" required>
                  </div>

                  <div class="form-group row">
                    <label for="homeheading2" class="col-sm-3 col-form-label">Heading 2</label>
                    <input id="homeheading2" type="text" class="form-control"placeholder="Heading 2" name="homeheading2" value="{{$slider[0]->heading_2}}" required>
                  </div>

                  <div class="form-group row">
                    <label for="homeheading3" class="col-sm-3 col-form-label">Heading 3</label>
                    <input id="homeheading3" type="text" class="form-control"placeholder="Heading 3" name="homeheading3" value="{{$slider[0]->heading_3}}" required>
                  </div> -->

                    

                  <!-- <div class="form-group row">
                    <label for="homemtags" class="col-sm-3 col-form-label">Meta Tags</label>
                    <input id="homemtags" type="text" class="form-control"placeholder="Meta Tags" name="homemtags" value="{{$slider[0]->meta_tags}}" required>
                  </div>

                  <div class="form-group row">
                    <label for="homemdescrioption" class="col-sm-3 col-form-label">Meta Description</label>
                    <input id="homemdescrioption" type="text" class="form-control"placeholder="Meta Description" name="homemdescrioption" value="{{$slider[0]->meta_description}}" required>
                  </div> -->

                  <div class="card" style="width: 66%; margin-left: 15px;">
    <div class="card-header header-2">Update Banner</div>
    <div class="card-body">

                   <div class="form-group row">
                    <label for="blogtitle" class="col-sm-3 col-form-label">Image</label>
                    <div class="col-sm-9">
                    <input style="padding-bottom: 35px;" type="file" class="form-control" name="image" >
                  </div>
                  </div>

                 <div class="form-group row">
                    <img style="height:130px; width:450px;" src="{{url('images/'.$slider[0]->image)}}">
                  </div>
                  
                <div class="form-group row">
                    <label for="homemtitle" class="col-sm-3 col-form-label">Alt Tag</label>
                    <div class="col-sm-9">
                    <input id="homemtitle" type="text" class="form-control"placeholder="Alt Tag" name="homemtitle" value="{{$slider[0]->meta_title}}" >
                  </div>
                  </div>
                    <div class="form-group row">
                    <label for="" class="col-sm-3 col-form-label">Link</label>
                    <div class="col-sm-9">
                    <input id="" type="text" class="form-control"placeholder="Link" name="homelink" value="{{$slider[0]->link}}" >
                  </div>
                  </div>
                  
                  <div class="form-group row">
                    <label for="homeheading1" class="col-sm-3 col-form-label">Title</label>
                    <div class="col-sm-9">
                      <input id="homeheading1" type="text" class="form-control" placeholder="Title" name="homeheading1" value="{{$slider[0]->heading_1}}" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Description</label>
                    <div class="col-sm-9">
                      <textarea class="form-control" id="ckeditor" name="ckeditor" placeholder="Description" rows="4" required>{{$slider[0]->description}}</textarea>
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
