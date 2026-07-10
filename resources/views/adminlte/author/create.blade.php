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
            <h1>Add Author</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Author</li>
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
                <h3 class="card-title">Add Author</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="POST" action="{{ url('admin/authors/store') }}" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <label>Name *</label>
                      <input type="text" name="name" class="form-control" required placeholder="Enter name">
                    </div>
                    <div class="col-md-6 form-group">
                      <label>Slug *</label>
                      <input type="text" name="slug" class="form-control" required placeholder="Enter slug">
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Enter email">
                  </div>
                  
                  <div class="form-group">
                    <label>Bio</label>
                    <textarea name="bio" class="form-control" rows="4" placeholder="Enter bio"></textarea>
                  </div>

                  <div class="form-group">
                    <label>Profile Image</label>
                    <input type="file" name="profile_image" class="form-control" accept="image/*">
                  </div>

                  <hr>
                  <h4>Social Links</h4>
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <label>Facebook</label>
                      <input type="text" name="facebook" class="form-control" placeholder="Facebook URL">
                    </div>
                    <div class="col-md-6 form-group">
                      <label>Twitter</label>
                      <input type="text" name="twitter" class="form-control" placeholder="Twitter URL">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <label>LinkedIn</label>
                      <input type="text" name="linkedin" class="form-control" placeholder="LinkedIn URL">
                    </div>
                    <div class="col-md-6 form-group">
                      <label>Instagram</label>
                      <input type="text" name="instagram" class="form-control" placeholder="Instagram URL">
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Website</label>
                    <input type="text" name="website" class="form-control" placeholder="Website URL">
                  </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Add Author</button>
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
