@include ('adminlte/header')
@include('adminlte/sidebarlink')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Update Header & Footer</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}" style="color: #234376;">Home</a></li>
              <li class="breadcrumb-item active" style="color: #49d8f7;">Update Header & Footer</li>
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
                  <h5>Update Header & Footer</h5>
                </div>
                <div class="card-body">
                  
              </div>
              

        <form method="post" action="{{url('admin/updatepage/'.$dynamic['0']->id)}}" enctype="multipart/form-data">
          @csrf
          <input type="hidden" value="{{$dynamic['0']->id}}" name="id">
          
    
  
  
  <div class="card" style="width: 66%; margin-left: 15px;">
    <div class="card-header header-2">Update Header Data</div>
    <div class="card-body">
  
  <div class="form-group row">
    <label class="col-sm-3 col-form-label">Name</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" value="{{$dynamic['0']->page_title}}"  placeholder="" name="page_title">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-sm-3 col-form-label">URL</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" value="{{$dynamic['0']->page_url}}"  placeholder="" name="page_url">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-sm-3 col-form-label">Page Heading</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" value="{{$dynamic['0']->heading}}"  placeholder="" name="heading">
    </div>
  </div>
  
  <div class="form-group row">
    <label class="col-sm-3 col-form-label" for="ckeditor">Long Description</label>
                    <div class="col-sm-12">
                     <textarea class="form-control" id="ckeditor" name="long_desc">
                       <?php echo $dynamic['0']->long_desc; ?>
                     </textarea>
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
      <input type="text" class="form-control" value="{{$dynamic['0']->m_title}}" placeholder="" name="m_title">
    </div>
  </div>
  
  <div class="form-group row">
    <label class="col-sm-3 col-form-label">Meta Description</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" value="{{$dynamic['0']->m_des}}" placeholder="" name="m_des">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-sm-3 col-form-label">Meta Tags</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" value="{{$dynamic['0']->m_tag}}" placeholder="" name="m_tag">
    </div>
  </div>
  </div>
  </div>

<div class="card" style="width: 66%; margin-left: 15px;">
    <div class="card-header header-2">Add Banner</div>
    <div class="card-body">
    <div class="form-group row">
    <label class="col-sm-3 col-form-label">Image</label>
    <div class="col-sm-9">
      <input type="hidden" value="{{$dynamic['0']->image}}" name="image1"><div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="photo">
                        <label class="custom-file-label form-control" for="exampleInputFile" style="width: 100%;">Choose file</label>
</div>
</div>
       
      
      
      <img class="img-view" id="blah" width="445" height="200" src="{{url('uploads/'.$dynamic['0']->image)}}">
      
    </div>
  </div>
  <div class="form-group row">
    <label class="col-sm-3 col-form-label">Image Tag</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" value="{{$dynamic['0']->alt}}" placeholder=""  name="alt">
    </div>
  </div>
 
 
  </div>
</div>

<div class="card" style="width: 66%; margin-left: 15px;">
    <div class="card-header header-2">Page Settings</div>
    <div class="card-body">
  <div class="form-group row">
    <label class="col-sm-3 col-form-label">Position</label>
    <div class="col-sm-9">
      <input type="number" class="form-control" value="{{$dynamic['0']->position}}" placeholder="" name="position">
    </div>
  </div>
  
  <div class="form-group row">
    <label class="col-sm-3 col-form-label">Status</label>
    <div class="col-sm-9">
      <input type="radio" id="male" name="status" value="1" <?php if($dynamic['0']->status=="1"){ echo "checked"; }?> class="radio">
  <label for="male" style="color: grey;">Active</label><br>
  <input type="radio" id="female" name="status" value="0" <?php if($dynamic['0']->status=="0") { echo "checked"; }?> class="radio">
  <label for="female" style="color: grey;">Disable</label><br>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-sm-3 col-form-label" for="appearance">Appearance</label>
    <div class="col-sm-9">
      <select id="cars" name="appearance" class="form-control" required>
    <option value="0" <?php if($dynamic['0']->appearance==0){echo "selected";} ?>>--Nothing Selected--</option>
    <option value="1" <?php if($dynamic['0']->appearance==1){echo "selected";} ?>>Header</option>
    <option value="2" <?php if($dynamic['0']->appearance==2){echo "selected";} ?>>Footer - Services</option>
    <option value="3" <?php if($dynamic['0']->appearance==3){echo "selected";} ?>>Footer - Shipper</option>
   
</select>
    </div>
  </div>
  </div>
  </div>
    
    
  
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="save" name="updatedhomebanner">Update</button>

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
@include ('adminlte/footer')

