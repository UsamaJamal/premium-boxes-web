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
              <li class="breadcrumb-item"><a href="{{ url('admin/dashboard').'/' }}" style="color: #234376;">Home</a></li>
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
                <h5>Edit Blog</h5>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                  
              </div>
              <!-- form start -->
               <form id="basic-form" method="post" action="{{url('admin/update_blog'.'/'.$blog[0]->blog_id).'/'}}" enctype="multipart/form-data"
>@csrf
            

             <input type="hidden" name="oldimage" value="{{$blog[0]->image}}">

             <div class="card" style="width: 66%; margin-left: 15px;">
    <div class="card-header header-2">Add Blog Data</div>
    <div class="card-body">
                    <div class="form-group row">
                    <label for="blogtitle" class="col-sm-3 col-form-label">Blog Title</label>
                    <div class="col-sm-9">
                    <input id="blogtitle" type="text" class="form-control"placeholder="Blog Title" name="blogtitle" value="{{$blog[0]->blog_title}}" required>
                  </div>
                  </div>

                   <div class="form-group row">
                    <label for="blogurl" class="col-sm-3 col-form-label">Blog URL</label>
                    <div class="col-sm-9">
                    <input id="blogurl" type="text" class="form-control"placeholder="Blog URL" name="blogurl"
                    value="{{$blog[0]->blog_url}}" required>
                  </div>
                  </div>

                   <div class="form-group row">
                    <label for="ckeditor" class="col-sm-3 col-form-label">Long Description</label>
                    <div class="col-sm-12">
                     <textarea class="form-control" id="ckeditor" name="ckeditor">
                       <?php echo $blog[0]->long_description ?>
                     </textarea>
                   </div>
                  </div>

                </div>
              </div>

              <div class="card" style="width: 66%; margin-left: 15px;">
    <div class="card-header header-2">Add Meta Data</div>
    <div class="card-body">

                  <div class="form-group row">
                    <label for="blogmtitle" class="col-sm-3 col-form-label">Meta Title</label>
                    <div class="col-sm-9">
                    <input id="blogmtitle" type="text" class="form-control"placeholder="Meta Title" name="blogmtitle" value="{{$blog[0]->meta_title}}" required>
                  </div>
                  </div>

                   <div class="form-group row">
                    <label for="blogmdescrioption" class="col-sm-3 col-form-label">Meta Description</label>
                    <div class="col-sm-9">
                    <input id="blogmdescrioption" type="text" class="form-control"placeholder="Meta Description" name="blogmdescrioption" value="{{$blog[0]->meta_description}}" required>
                  </div>
                  </div>

                  <div class="form-group row">
                    <label for="blogmtags" class="col-sm-3 col-form-label">Meta Tags</label>
                    <div class="col-sm-9">
                    <input id="blogmtags" type="text" class="form-control"placeholder="Meta Tags" name="blogmtags" value="{{$blog[0]->meta_tags}}" required>
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
                    <input  style="padding-bottom: 35px;" type="file" class="form-control" name="image">
                  </div>
                  </div>

               <div class="form-group row">
                    <label for="blogalttag" class="col-sm-3 col-form-label">Alttag</label>
                    <div class="col-sm-9">
                    <input id="blogalttag" type="text" class="form-control"placeholder="Alttag" name="blogalttag"value="{{$blog[0]->alt_tag}}" required>
                  </div>
                  </div>
                </div>
              </div>

              <div class="card" style="width: 66%; margin-left: 15px;">
    <div class="card-header header-2">Other</div>
    <div class="card-body">
                  <div class="form-group row">
                    <label for="bloganame" class="col-sm-3 col-form-label">Author Name</label>
                    <div class="col-sm-9">
                    <input id="bloganame" type="text" class="form-control"placeholder="Author Name" name="bloganame" value="{{$blog[0]->author_name}}" required>
                  </div>
                  </div>

                  <div class="form-group row">
                    <label for="author_description" class="col-sm-3 col-form-label">Author Description</label>
                    <div class="col-sm-9">
                    <textarea id="author_description" class="form-control" placeholder="Author Description" name="author_description" rows="3" required>{{$blog[0]->author_description ?? ''}}</textarea>
                  </div>
                  </div>

                   <div class="form-group row">
                    <label for="blogtcloud" class="col-sm-3 col-form-label">Tag Cloud</label>
                    <div class="col-sm-9">
                    <input id="blogtcloud" type="text" class="form-control"placeholder="Tag Cloud" name="blogtcloud" value="{{$blog[0]->tag_cloud}}" required>
                  </div>
                  </div>

                  <div class="form-group row">
                    <label for="blogtitle" class="col-sm-3 col-form-label">Status</label>
                    <div class="col-sm-9">
                    <select type="text" class="form-control"id="" placeholder="" 
                    name="status">
                  
                
                  <option <?php if($blog[0]->status==1){echo "selected";} ?> value="1">Active</option>
                  <option <?php if($blog[0]->status==0){echo "selected";} ?> value="0">Disable</option>
                 
                  
           
                  </select>
                </div>
                  </div>

                  <div class="form-group row">
                    <label for="set_home" class="col-sm-3 col-form-label">Set as Home Blog</label>
                    <div class="col-sm-9">
                    <select class="form-control" id="set_home" name="set_home">
                      <option <?php if($blog[0]->set_home==0){echo "selected";} ?> value="0">No</option>
                      <option <?php if($blog[0]->set_home==1){echo "selected";} ?> value="1">Yes</option>
                    </select>
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
