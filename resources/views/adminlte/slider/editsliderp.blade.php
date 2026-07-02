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
                <h5>Edit Home Product Banner</h5>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                  
              </div>
              <!-- form start -->
               <form id="basic-form" method="post" action="{{url('admin/update_homepslider'.'/'.$sliderp[0]->sliderp_id).'/'}}" enctype="multipart/form-data"
>@csrf
            

             <input type="hidden" name="oldimage" value="{{$sliderp[0]->image}}">
              <input type="hidden" name="oldimage2" value="{{$sliderp[0]->image2}}">
               <input type="hidden" name="oldimage3" value="{{$sliderp[0]->image3}}">
                <input type="hidden" name="oldimage4" value="{{$sliderp[0]->image4}}">



                  <div class="card" style="width: 66%; margin-left: 15px;">
    <div class="card-header header-2">Update Product Banner</div>
    <div class="card-body">

                   <div class="form-group row">
                    <label for="blogtitle" class="col-sm-3 col-form-label">Image</label>
                    <div class="col-sm-9">
                    <input style="padding-bottom: 35px;" type="file" class="form-control" name="image" >
                  </div>
                  </div>

                 <div class="form-group row">
                    <img style="height:130px; width:450px;" src="{{url('images/'.$sliderp[0]->image)}}">
                  </div>
                  
                 <div class="form-group row">
                    <label for="homemtitle" class="col-sm-3 col-form-label">Alt Tag</label>
                    <div class="col-sm-9">
                    <input id="homemtitle" type="text" class="form-control"placeholder="Alt Tag" name="alttag" value="{{$sliderp[0]->image_tag}}"  >
                  </div>
                  </div>
                    <div class="form-group row">
                    <label for="homemtitle" class="col-sm-3 col-form-label">Name</label>
                    <div class="col-sm-9">
                    <input id="homemtitle" type="text" class="form-control"placeholder="Name" name="name" value="{{$sliderp[0]->name}}" >
                  </div>
                  </div>
                   <div class="form-group row">
                    <label for="homemtitle" class="col-sm-3 col-form-label">Link</label>
                    <div class="col-sm-9">
                    <input id="homemtitle" type="text" class="form-control"placeholder="Link" name="link" value="{{$sliderp[0]->link}}" >
                  </div>
                  </div>
                    <div class="form-group row">
                    <label for="image" class="col-sm-3 col-form-label">Image2</label>
                    <div class="col-sm-9">
                    <input id="image" style="padding-bottom: 35px;" type="file" class="form-control" name="image2" >
                  </div>
                  </div>
                  <div class="form-group row">
                    <img style="height:130px; width:450px;" src="{{url('images/'.$sliderp[0]->image2)}}">
                  </div>
                    <div class="form-group row">
                    <label for="homemtitle" class="col-sm-3 col-form-label">Alt Tag2</label>
                    <div class="col-sm-9">
                    <input id="homemtitle" type="text" class="form-control"placeholder="Alt Tag2" name="alttag2" value="{{$sliderp[0]->image_tag2}}">
                  </div>
                  </div>
                     <div class="form-group row">
                    <label for="homemtitle" class="col-sm-3 col-form-label">Name2</label>
                    <div class="col-sm-9">
                    <input id="homemtitle" type="text" class="form-control"placeholder="Name2" name="name2" value="{{$sliderp[0]->name2}}" >
                  </div>
                  </div>
                    <div class="form-group row">
                    <label for="homemtitle" class="col-sm-3 col-form-label">Link2</label>
                    <div class="col-sm-9">
                    <input id="homemtitle" type="text" class="form-control"placeholder="Link2" name="link2" value="{{$sliderp[0]->link2}}" >
                  </div>
                  </div>
                    <div class="form-group row">
                    <label for="image" class="col-sm-3 col-form-label">Image3</label>
                    <div class="col-sm-9">
                    <input id="image" style="padding-bottom: 35px;" type="file" class="form-control" name="image3" >
                  </div>
                  </div>
                  <div class="form-group row">
                    <img style="height:130px; width:450px;" src="{{url('images/'.$sliderp[0]->image3)}}">
                  </div>
                    <div class="form-group row">
                    <label for="homemtitle" class="col-sm-3 col-form-label">Alt Tag3</label>
                    <div class="col-sm-9">
                    <input id="homemtitle" type="text" class="form-control"placeholder="Alt Tag3" name="alttag3" value="{{$sliderp[0]->image_tag3}}" >
                  </div>
                  </div>
                  <div class="form-group row">
                    <label for="homemtitle" class="col-sm-3 col-form-label">Name3</label>
                    <div class="col-sm-9">
                    <input id="homemtitle" type="text" class="form-control"placeholder="Name3" name="name3" value="{{$sliderp[0]->name3}}" >
                  </div>
                  </div>
                  <div class="form-group row">
                    <label for="homemtitle" class="col-sm-3 col-form-label">Link3</label>
                    <div class="col-sm-9">
                    <input id="homemtitle" type="text" class="form-control"placeholder="Link3" name="link3" value="{{$sliderp[0]->link3}}" >
                  </div>
                  </div>
                    <div class="form-group row">
                    <label for="image" class="col-sm-3 col-form-label">Image4</label>
                    <div class="col-sm-9">
                    <input id="image" style="padding-bottom: 35px;" type="file" class="form-control" name="image4" >
                  </div>
                  </div>
<div class="form-group row">
                    <img style="height:130px; width:450px;" src="{{url('images/'.$sliderp[0]->image4)}}">
                  </div>
                  <div class="form-group row">
                    <label for="homemtitle" class="col-sm-3 col-form-label">Alt Tag4</label>
                    <div class="col-sm-9">
                    <input id="homemtitle" type="text" class="form-control"placeholder="Alt Tag4" name="alttag4" value="{{$sliderp[0]->image_tag4}}"  >
                  </div>
                  </div>
                 
                   <div class="form-group row">
                    <label for="homemtitle" class="col-sm-3 col-form-label">Name4</label>
                    <div class="col-sm-9">
                    <input id="homemtitle" type="text" class="form-control"placeholder="Name4" name="name4" value="{{$sliderp[0]->name4}}"  >
                  </div>
                  </div>
                 
                 
                   
                   <div class="form-group row">
                    <label for="homemtitle" class="col-sm-3 col-form-label">Link4</label>
                    <div class="col-sm-9">
                    <input id="homemtitle" type="text" class="form-control"placeholder="Link4" name="link4" value="{{$sliderp[0]->link4}}" >
                  </div>
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
