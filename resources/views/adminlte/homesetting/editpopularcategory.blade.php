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
              <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}" style="color: #234376;">Home</a></li>
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
                <h5>Edit Popular Category</h5>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                  
              </div>
              <!-- form start -->
               <form method="post" action="{{url('admin/update_popularcategory')}}" enctype="multipart/form-data"
>@csrf
<input type="hidden" name="catid" value="{{$popular_category[0]->popcat_id}}">
 
             
               <div class="card" style="width: 66%; margin-left: 15px;">
    <div class="card-header header-2">Add Page Data</div>
    <div class="card-body">
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Popular Category</label>
                    <div class="col-sm-9">
                    <select id="related" name="popular[]" class="select2" multiple="" data-placeholder="Nothing Select" data-dropdown-css-class="" style="width: 100%;" data-select2-id="26" tabindex="-1" aria-hidden="true"> 
                    <?php $temp=json_decode($popular_category[0]->category_get); 
                    if(!empty($category_data)){ foreach ($category_data as $index){?>
                        <option value="<?php echo $index->cat_id;  ?>" 
                        <?php  if(!empty($temp)){foreach ($temp as $key => $keyvalue) {
                            if($keyvalue==$index->cat_id){echo"selected";}
                        }} ?>><?php echo $index->name; ?></option>
                    <?php } }?>
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
@include('adminlte/footer')
