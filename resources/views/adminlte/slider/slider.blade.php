@include('adminlte/header')
  @include('adminlte/sidebarlink')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Home Banner</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('admin/dashboard')" style="color: #234376;">Home</a></li>
              <li class="breadcrumb-item active" style="color: #49d8f7;">Home Banner</li>
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
                <h5>Home Banner</h5>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <div class="card-body">
                  
              </div>
               <form id="basic-form" method="post" action="{{url('admin/add_homeslider')}}"enctype="multipart/form-data"
>@csrf
               <!--  
                <div class="form-group row">
                    <label for="homelink" class="col-sm-3 col-form-label">Link</label>
                    <input id="homelink" type="text" class="form-control"placeholder="Link" name="homelink" required>
                  </div>  
                
                  <div class="form-group row">
                    <label for="homeheading1" class="col-sm-3 col-form-label">Heading 1</label>
                    <input id="homeheading1" type="text" class="form-control"placeholder="Heading 1" name="homeheading1" required>
                  </div>

                  <div class="form-group row">
                    <label for="homeheading2" class="col-sm-3 col-form-label">Heading 2</label>
                    <input id="homeheading2" type="text" class="form-control"placeholder="Heading 2" name="homeheading2" required>
                  </div>

                  <div class="form-group row">
                    <label for="homeheading3" class="col-sm-3 col-form-label">Heading 3</label>
                    <input id="homeheading3" type="text" class="form-control"placeholder="Heading 3" name="homeheading3" required>
                  </div>

                  

                  <div class="form-group row">
                    <label for="homemtags" class="col-sm-3 col-form-label">Meta Tags</label>
                    <input id="homemtags" type="text" class="form-control"placeholder="Meta Tags" name="homemtags" required>
                  </div>

                  <div class="form-group row">
                    <label for="homemdescrioption" class="col-sm-3 col-form-label">Meta Description</label>
                    <input id="homemdescrioption" type="text" class="form-control"placeholder="Meta Description" name="homemdescrioption" required>
                  </div> -->
                <div class="card" style="width: 66%; margin-left: 15px;">
                  <div class="card-header header-2">Add Page Data</div>
                  <div class="card-body">
                   <div class="form-group row">
                    <label for="image" class="col-sm-3 col-form-label">Image</label>
                    <div class="col-sm-9">
                    <input id="image" style="padding-bottom: 35px;" type="file" class="form-control" name="image" required>
                  </div>
                  </div>
                  <div class="form-group row">
                    <label for="homemtitle" class="col-sm-3 col-form-label">Alt Tag</label>
                    <div class="col-sm-9">
                    <input id="homemtitle" type="text" class="form-control"placeholder="Alt Tag" name="imagetag" required>
                  </div>
                  </div>
                  <div class="form-group row">
                    <label for="" class="col-sm-3 col-form-label">Link</label>
                    <div class="col-sm-9">
                    <input id="homemtitle" type="text" class="form-control"placeholder="Link" name="homelink" required>
                  </div>
                  </div>
                  
                  <div class="form-group row">
                    <label for="homeheading1" class="col-sm-3 col-form-label">Title</label>
                    <div class="col-sm-9">
                      <input id="homeheading1" type="text" class="form-control" placeholder="Title" name="homeheading1" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Description</label>
                    <div class="col-sm-9">
                      <textarea class="form-control" id="ckeditor" name="ckeditor" placeholder="Description" rows="4" required></textarea>
                    </div>
                  </div>
                </div>

                

                 <!--  -->

                 


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