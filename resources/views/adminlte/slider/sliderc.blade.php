@include('adminlte/header')
  @include('adminlte/sidebarlink')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Home Category Banner</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('admin/dashboard')" style="color: #234376;">Home</a></li>
              <li class="breadcrumb-item active" style="color: #49d8f7;">Home Category Banner</li>
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
                <h5>Home Category Banner</h5>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <div class="card-body">
                  
              </div>
               <form id="basic-form" method="post" action="{{url('admin/add_homecslider')}}"enctype="multipart/form-data"
>@csrf

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
                    <input id="homemtitle" type="text" class="form-control"placeholder="Alt Tag" name="alttag"  required>
                  </div>
                  </div>
                    <div class="form-group row">
                    <label for="homemtitle" class="col-sm-3 col-form-label">Name</label>
                    <div class="col-sm-9">
                    <input id="homemtitle" type="text" class="form-control"placeholder="Name" name="name"  required>
                  </div>
                  </div>
                   <div class="form-group row">
                    <label for="homemtitle" class="col-sm-3 col-form-label">Link</label>
                    <div class="col-sm-9">
                    <input id="homemtitle" type="text" class="form-control"placeholder="Link" name="link"  required>
                  </div>
                  </div>
                    <div class="form-group row">
                    <label for="image" class="col-sm-3 col-form-label">Image2</label>
                    <div class="col-sm-9">
                    <input id="image" style="padding-bottom: 35px;" type="file" class="form-control" name="image2" required>
                  </div>
                  </div>
                    <div class="form-group row">
                    <label for="homemtitle" class="col-sm-3 col-form-label">Alt Tag2</label>
                    <div class="col-sm-9">
                    <input id="homemtitle" type="text" class="form-control"placeholder="Alt Tag2" name="alttag2"  required>
                  </div>
                  </div>
                     <div class="form-group row">
                    <label for="homemtitle" class="col-sm-3 col-form-label">Name2</label>
                    <div class="col-sm-9">
                    <input id="homemtitle" type="text" class="form-control"placeholder="Name2" name="name2"  required>
                  </div>
                  </div>
                    <div class="form-group row">
                    <label for="homemtitle" class="col-sm-3 col-form-label">Link2</label>
                    <div class="col-sm-9">
                    <input id="homemtitle" type="text" class="form-control"placeholder="Link2" name="link2"  required>
                  </div>
                  </div>
                    <div class="form-group row">
                    <label for="image" class="col-sm-3 col-form-label">Image3</label>
                    <div class="col-sm-9">
                    <input id="image" style="padding-bottom: 35px;" type="file" class="form-control" name="image3" required>
                  </div>
                  </div>
                    <div class="form-group row">
                    <label for="homemtitle" class="col-sm-3 col-form-label">Alt Tag3</label>
                    <div class="col-sm-9">
                    <input id="homemtitle" type="text" class="form-control"placeholder="Alt Tag3" name="alttag3"  required>
                  </div>
                  </div>
                  <div class="form-group row">
                    <label for="homemtitle" class="col-sm-3 col-form-label">Name3</label>
                    <div class="col-sm-9">
                    <input id="homemtitle" type="text" class="form-control"placeholder="Name3" name="name3"  required>
                  </div>
                  </div>
                  <div class="form-group row">
                    <label for="homemtitle" class="col-sm-3 col-form-label">Link3</label>
                    <div class="col-sm-9">
                    <input id="homemtitle" type="text" class="form-control"placeholder="Link3" name="link3"  required>
                  </div>
                  </div>
                  
                
                 
                </div>

<!-- <div class="form-group row">
                    <label  class="col-sm-3 col-form-label">Description</label>
                     <textarea class="form-control" id="ckeditor" name="ckeditor"></textarea>
                  </div> -->

                

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