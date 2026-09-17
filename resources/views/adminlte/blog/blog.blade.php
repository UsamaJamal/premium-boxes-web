@include('adminlte/header')
  @include('adminlte/sidebarlink')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Blog</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#" style="color: #2d3379;">Home</a></li>
              <li class="breadcrumb-item active" style="color: #d55034;">Add Blog</li>
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
                <h5>Add Blog</h5>
              </div>
              <!-- /.card-header -->

              <!-- ✅ Flash Messages -->
              @if(session('success'))
              <div class="alert alert-success alert-dismissible fade show mx-3 mt-3" role="alert" style="border-left: 5px solid #28a745; font-weight:600;">
                  <i class="fas fa-check-circle mr-1"></i> {{ session('success') }}
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span>&times;</span></button>
              </div>
              @endif
              @if(session('error'))
              <div class="alert alert-danger alert-dismissible fade show mx-3 mt-3" role="alert" style="border-left: 5px solid #dc3545; font-weight:600;">
                  <i class="fas fa-exclamation-triangle mr-1"></i> {{ session('error') }}
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span>&times;</span></button>
              </div>
              @endif
              @if($errors->any())
              <div class="alert alert-danger mx-3 mt-3" style="border-left: 5px solid #dc3545;">
                  <strong>❌ Validation Errors:</strong>
                  <ul class="mb-0 mt-1">
                      @foreach($errors->all() as $err)
                          <li>{{ $err }}</li>
                      @endforeach
                  </ul>
              </div>
              @endif
              <!-- /.Flash Messages -->

              <!-- form start -->
               <form id="basic-form" method="post" action="{{url('admin/addblog')}}" enctype="multipart/form-data">@csrf

               <div class="card" style="width: 66%; margin-left: 15px;">
    <div class="card-header header-2">Add Blog Data</div>
    <div class="card-body">
    <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Blog Title</label>
                    <div class="col-sm-9">
                    <input id="blogtitle" type="text" class="form-control" placeholder="Blog Title" name="blogtitle" value="{{ old('blogtitle') }}" required>
                  </div>
  </div>
  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Blog URL</label>
                    <div class="col-sm-9">
                    <input id="blogurl" type="text" class="form-control" placeholder="Blog URL" name="blogurl" value="{{ old('blogurl') }}" required>
                  </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Long Description</label>
                    <div class="col-sm-12">
                     <textarea class="form-control" id="ckeditor" name="ckeditor" ></textarea>
                   </div>
                  </div>
 
 
  </div>
</div>

            <div class="card" style="width: 66%; margin-left: 15px;">
    <div class="card-header header-2">Add Meta Data</div>
    <div class="card-body">
    <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Meta Title</label>
                    <div class="col-sm-9">
                    <input id="blogmtitle" type="text" class="form-control" placeholder="Meta Title" name="blogmtitle" value="{{ old('blogmtitle') }}" required>
                  </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Meta Description</label>
                    <div class="col-sm-9">
                    <input id="blogmdescrioption" type="text" class="form-control" placeholder="Meta Description" name="blogmdescrioption" value="{{ old('blogmdescrioption') }}" required>
                  </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Meta Tags</label>
                    <div class="col-sm-9">
                    <input id="blogmtags" type="text" class="form-control" placeholder="Meta Tags" name="blogmtags" value="{{ old('blogmtags') }}" required>
                  </div>
                  </div>
                </div>
              </div>

              <div class="card" style="width: 66%; margin-left: 15px;">
              <div class="card-header header-2">Add Image</div>
              <div class="card-body">
              <div class="form-group row">

                    <label class="col-sm-3 col-form-label">Image</label>
                    <div class="col-sm-9">
                    <div class="input-group">
                                    <div class="custom-file">
                                      <input type="file" class="custom-file-input" id="exampleInputFile" name="image">
                                      <label class="custom-file-label form-control" for="exampleInputFile" style="width: 100%;">Choose file</label>
                    </div>
                    </div>
                     <img src="#" id="blah" class="img-view" width="445" height="200">              
                  </div>
                    
                  </div>

               <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Alttag</label>
                    <div class="col-sm-9">
                    <input id="blogalttag" type="text" class="form-control" placeholder="Alttag" name="blogalttag" value="{{ old('blogalttag') }}" required>
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
                    <input id="bloganame" type="text" class="form-control" placeholder="Author Name (optional)" name="bloganame" value="{{ old('bloganame') }}">
                  </div>
                  </div>

                  <div class="form-group row">
                    <label for="author_description" class="col-sm-3 col-form-label">Author Description</label>
                    <div class="col-sm-9">
                    <textarea id="author_description" class="form-control" placeholder="Author Description" name="author_description" rows="3" required>{{ old('author_description') }}</textarea>
                  </div>
                  </div>

                   <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Tag Cloud</label>
                    <div class="col-sm-9">
                    <input id="blogtcloud" type="text" class="form-control" placeholder="Tag Cloud" name="blogtcloud" value="{{ old('blogtcloud') }}" required>
                  </div>
                  </div>


                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Publication Status</label>
                    <div class="col-sm-9">
                    <select type="text" class="form-control" id="status" placeholder="" 
                    name="status">
                      <option value="0" selected>Draft</option>
                      <option value="1">Publish</option>
                  </select>
                  </div>
</div>

                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Set as Home Blog</label>
                    <div class="col-sm-9">
                    <select class="form-control" id="set_home" name="set_home">
                      <option value="0">No</option>
                      <option value="1">Yes</option>
                    </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Schema</label>
                    <div class="col-sm-9">
                       <textarea class="form-control" name="schema" rows="5" placeholder="<script type='application/ld+json'>..."></textarea>
                    </div>
                  </div>
               
                <!-- /.card-body -->

                <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-success btn-lg" name="offersubmit" style="min-width:150px;">
          <i class="fas fa-save mr-1"></i> Save Blog
      </button>
    </div>
              </form>
               </div>
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
        filebrowserUploadMethod: 'form',
        allowedContent: true,
        protectedSource: [ /<style[\s\S]*?<\/style>/gi ]
    });
    CKEDITOR.replace('author_description', {
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
