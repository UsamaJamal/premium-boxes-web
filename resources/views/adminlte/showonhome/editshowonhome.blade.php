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
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Form</li>
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
                <h3 class="card-title">Edit Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
<form id="basic-form" method="post" action="{{url('admin/update_showhome'.'/'.$editshowonhome[0]->show_id)}}" enctype="multipart/form-data"
>@csrf
<input type="hidden" name="catid" value="{{$editshowonhome[0]->show_cat_id}}">
             <input type="hidden" name="oldimage" value="{{$editshowonhome[0]->image}}">

  
 
	
 
                <div class="card-body">
                


                   <div class="form-group">
                    <label style="color: #5c89b5;">Image</label>
                    <input style="padding-bottom: 35px;" type="file" class="form-control" name="image">
                  </div>
                  <div>
                     <img style="height:50px; width:50px;" src="{{url('images/'.$editshowonhome[0]->image)}}">
                  </div>

                  <div class="form-group">
                    <label  for="altname" style="color: #5c89b5;">Altname</label>
                    <input id="altname" type="text" class="form-control"placeholder="Altname" name="altname"
                    value="{{$editshowonhome[0]->image_tag}}" required>
                  </div>

               
               


                   <div class="form-group">
                    <label style="color:#5c89b5">Category/Product</label>
                    <select type="text" class="form-control"id="" placeholder="" 
                    name="productcategory">
                  <option value="0">--select a Category--
                  </option>
                   @foreach ($category_data as $index) 
                  
                  <option  value="{{$index->cat_id}}" <?php if($index->cat_id == $editshowonhome[0]->show_cat_id){echo "selected";} ?> >

                    {{$index->name}}</option>
                  @endforeach

          
           
                  </select>
                  </div>

                  <div class="form-group">
                    <label style="color:#5c89b5">Status</label>
                    <select type="text" class="form-control"id="" placeholder="" 
                    name="status">
                  
                
                  <option <?php if($editshowonhome[0]->status==1){echo "selected";} ?> value="1">Active</option>
                  <option <?php if($editshowonhome[0]->status==0){echo "selected";} ?> value="0">Disable</option>
                 
                  
           
                  </select>
                  </div>
                 

                 

             

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="submit">Update</button>
                </div>
              </form>
            </div>
           

          


          
           
         

          </div>
       
          
        </div>
        
      </div>
    </section>
    <!-- /.content -->
  </div>

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
