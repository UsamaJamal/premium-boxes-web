@include('adminlte/header')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
@include('adminlte/sidebarlink')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Author</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Author</li>
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
                <h3 class="card-title">Edit Author</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="POST" action="{{ url('admin/authors/update/'.$author->id) }}" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <label>Name *</label>
                      <input type="text" name="name" class="form-control" required value="{{ $author->name }}" placeholder="Enter name">
                    </div>
                    <div class="col-md-6 form-group">
                      <label>Slug *</label>
                      <input type="text" name="slug" class="form-control" required value="{{ $author->slug }}" placeholder="Enter slug">
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" value="{{ $author->email }}" placeholder="Enter email">
                  </div>
                  
                  <div class="form-group">
                    <label>Bio</label>
                    <textarea name="bio" class="form-control" rows="4" placeholder="Enter bio">{{ $author->bio }}</textarea>
                  </div>

                  <div class="form-group">
                    <label>Profile Image</label>
                    <input type="file" name="profile_image" class="form-control" accept="image/*">
                    @if($author->profile_image)
                    <div class="mt-3">
                        <img style="height:100px; width:100px; border-radius:50%;" src="{{ url('uploads/authors/'.$author->profile_image) }}">
                    </div>
                    @endif
                  </div>

                  <hr>
                  <h4>Social Links</h4>
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <label><i class="fab fa-facebook"></i> Facebook</label>
                      <input type="text" name="facebook" class="form-control" value="{{ $author->facebook }}" placeholder="Facebook URL">
                    </div>
                    <div class="col-md-6 form-group">
                      <label><i class="fab fa-twitter"></i> Twitter</label>
                      <input type="text" name="twitter" class="form-control" value="{{ $author->twitter }}" placeholder="Twitter URL">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <label><i class="fab fa-linkedin"></i> LinkedIn</label>
                      <input type="text" name="linkedin" class="form-control" value="{{ $author->linkedin }}" placeholder="LinkedIn URL">
                    </div>
                    <div class="col-md-6 form-group">
                      <label><i class="fab fa-instagram"></i> Instagram</label>
                      <input type="text" name="instagram" class="form-control" value="{{ $author->instagram }}" placeholder="Instagram URL">
                    </div>
                  </div>
                  <div class="form-group">
                    <label><i class="fas fa-globe"></i> Website</label>
                    <input type="text" name="website" class="form-control" value="{{ $author->website }}" placeholder="Website URL">
                  </div>

                  <hr>
                  <h4>Assign Blogs to This Author</h4>
                  <div class="form-group">
                    <label>Select Blogs</label>
                    <div style="max-height: 300px; overflow-y: auto; border: 1px solid #ccc; padding: 10px; border-radius: 5px;">
                      @foreach($blogs as $blog)
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="blogs[]" value="{{ $blog->blog_id }}" id="blog_{{ $blog->blog_id }}" @if(in_array($blog->blog_id, $assigned_blogs)) checked @endif>
                        <label class="form-check-label" for="blog_{{ $blog->blog_id }}">
                          {{ $blog->blog_title }}
                        </label>
                      </div>
                      @endforeach
                    </div>
                    <small class="text-muted">Select blogs that this author has written</small>
                  </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer text-right">
                  <a href="{{ url('admin/authors') }}" class="btn btn-default mr-2">Close</a>
                  <button type="submit" class="btn btn-primary">Update Author</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@include('adminlte/footer')
