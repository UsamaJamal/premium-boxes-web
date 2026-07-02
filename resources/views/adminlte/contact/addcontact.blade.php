@include ('adminlte/header')
@include('adminlte/sidebarlink')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Add Contact</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#" style="color: #2d3379;">Home</a></li>
              <li class="breadcrumb-item active" style="color: #d55034;">Add Contact</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
      <div class="c-body">
        <main class="c-main">
          <div class="container-fluid">
            <div class="fade-in">
              <div class="card">
                <div class="card-header"><!-- <a href="table">Manage</a>&nbsp;|&nbsp;<a href="projects">Add</a> -->
                  <h5>Add Contact</h5>
                </div>
                <div class="card-body">
                  
              </div>
            

        <form method="post" action="{{url('admin/insertcontact').'/'}}" enctype="multipart/form-data">
        @csrf
    <div class="card" style="width: 66%; margin-left: 15px;">
      <div class="card-header header-2">Add About Data</div>
        <div class="card-body">
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">About Text</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" value="" placeholder="" name="about" required="">
            </div>
          </div>
      </div>
    </div>

    <div class="card" style="width: 66%; margin-left: 15px;">
      <div class="card-header header-2">Add Logo</div>
        <div class="card-body">
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Image</label>
            <div class="col-sm-9">
              <input type="file" class="form-control" value="" placeholder="" name="photo" required="">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Alt Name</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" value="" placeholder="" name="alt" required="">
            </div>
          </div>
      </div>
    </div>

    <div class="card" style="width: 66%; margin-left: 15px;">
      <div class="card-header header-2">Add Contact Data</div>
        <div class="card-body">
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Phone</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" value="" placeholder="" name="phone" required="">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Email</label>
            <div class="col-sm-9">
              <input type="email" class="form-control" value="" placeholder="" name="email" required="">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Address</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" value="" placeholder="" name="address" required="">
            </div>
          </div>
          </div>
      </div>

      <div class="card" style="width: 66%; margin-left: 15px;">
      <div class="card-header header-2">Add Social Links</div>
        <div class="card-body">
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Twitter</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" value="" placeholder="" name="twitter" required="">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Facebook</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" value="" placeholder="" name="facebook" required="">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Instagram</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" value="" placeholder="" name="instagram" required="">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Printerest</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" value="" placeholder="" name="printerest" required="">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Linked In</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" value="" placeholder="" name="linkedin" required="">
            </div>
          </div>
          </div>
      </div>
    
      <div class="card" style="width: 66%; margin-left: 15px;">
      <div class="card-header header-2">Add Quick Links</div>
        <div class="card-body">
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Title</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" value="" placeholder="" name="title" required="">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">URL</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" value="" placeholder="" name="url" required="">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Date</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" value="" placeholder="" name="date" required="">
            </div>
          </div>
          </div>
      </div>
  

    
  
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submitslider" class="save first">Save</button>

<script type="text/javascript">

  document.querySelector(".first").addEventListener('click', function(){
  Swal.fire({
  position: 'top-end',
  icon: 'success',
  title: 'Your work has been saved',
  showConfirmButton: false,
  timer: 2000
});
});
  

</script>
    </div>
  </div>
  
</form>


              
              </div>
              
            </div>
          </div>
        </main>
        
@include ('adminlte/footer')
