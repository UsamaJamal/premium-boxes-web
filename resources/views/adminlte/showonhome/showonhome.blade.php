@include('adminlte/header')
  @include('adminlte/sidebarlink')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Product Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Form</li>
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
                <h3 class="card-title">Add to Show on Home</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
               <form id="basic-form" method="post" action="{{url('admin/add_showhome')}}"enctype="multipart/form-data"
>@csrf
<input type="hidden" name="category_id"  value="{{$addcategory[0]->cat_id}}">
                <div class="card-body">
                 

                   <div class="form-group">
                    <label for="image" style="color: #5c89b5;">Image</label>
                    <input id="image" style="padding-bottom: 35px;" type="file" class="form-control" name="image" required>
                  </div>

                  <div class="form-group">
                    <label for="altname" style="color: #5c89b5;">Altname</label>
                    <input id="altname" type="text" class="form-control"placeholder="Altname" name="altname" required>
                  </div>


                

                   <div class="form-group">
                    <label style="color:#5c89b5">Category/Product </label>
                    <select type="text" class="form-control"id="" placeholder="" 
                    name="category_id">
                  <option value="0">--select a Category--
                  </option>

                
                @foreach ($addcategory as $value) 
                 
                  <option value="{{$value->cat_id}}">{{$value->name}}</option>
                 
                  @endforeach
           
                  </select>
                  </div>

                  <div class="form-group">
                    <label style="color:#5c89b5">Status</label>
                    <select type="text" class="form-control"id="" placeholder="" 
                    name="status">
                  
                
                  <option value="1">Active</option>
                  <option value="0">Disable</option>
                 
                  
           
                  </select>
                  </div>

                 

             

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="submit">Add</button>
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
<script>
    CKEDITOR.replace('long_ckeditor', {
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