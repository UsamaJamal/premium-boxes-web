
@include('adminlte/header')
  @include('adminlte/sidebarlink')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Popular Category Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Popular Category Form</li>
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
                <h3 class="card-title">Add Popular Category</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
               <form method="post" action="{{url('admin/add_popularcategory').'/'}}"enctype="multipart/form-data"
>@csrf
<input type="hidden" name="category_id"  value="{{$addcategory[0]->cat_id}}">
                <div class="card-body">
               


                  <div class="form-group">
                    <label style="color:#5c89b5" >Popular Category</label>
                    <select class="select2" multiple="" data-placeholder="Nothing Select"
                     data-dropdown-css-class="" style="width: 100%;" data-select2-id="26"
                      tabindex="-1" aria-hidden="true" name="popular[]">
                      @foreach ($addcategory as $value) 
                      <option  value="<?php echo $value->cat_id;?>">{{$value->name}}</option>
                       @endforeach
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
  @include('adminlte/footer')