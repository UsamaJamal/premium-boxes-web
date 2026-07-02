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
              <li class="breadcrumb-item"><a href="{{ url('admin/dashboard').'/' }}" style="color: #234376;">Home</a></li>
              <li class="breadcrumb-item active" style="color: #49d8f7;">Product Form</li>
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
                <h5>Add Product</h5>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <div class="card-body">
                  
              </div>
               <form id="basic-form" method="post" action="{{url('admin/addproduct').'/'}}"enctype="multipart/form-data"
>@csrf
<input type="hidden" name="category_id"  value="{{$addcategory[0]->cat_id}}">

                <div class="card" style="width: 66%; margin-left: 15px;">
    <div class="card-header header-2">Add Product Data</div>
    <div class="card-body">
                
                	 <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Title</label>
                    <div class="col-sm-9">
                    <input id="title" type="text" class="form-control"placeholder="Title" name="title" required>
                  </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Product URl</label>
                    <div class="col-sm-9">
                    <input id="producturl" type="text" class="form-control"placeholder="Product URl" name="producturl" required>
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
                    <input id="metatitle" type="text" class="form-control"placeholder="Meta Title" name="metatitle" required>
                  </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Meta Description</label>
                    <div class="col-sm-9">
                    <input id="metadescription" type="text" class="form-control"placeholder="Meta Description" name="metadescription" required>
                  </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Meta Tags</label>
                    <div class="col-sm-9">
                    <input id="metatags" type="text" class="form-control"placeholder="Meta Tags" name="metatags" required>
                  </div>
                  </div>

                </div>
              </div>

              <div class="card" style="width: 66%; margin-left: 15px;">
    <div class="card-header header-2">Add Page Description</div>
    <div class="card-body">

                   <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Description</label>
                    <div class="col-sm-12">
                     <textarea class="form-control" id="ckeditor" name="ckeditor"></textarea>
                   </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Long Description</label>
                    <div class="col-sm-12">
                     <textarea class="form-control" id="long_ckeditor" name="long_ckeditor"></textarea>
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
                    <input id="image" style="padding-bottom: 35px;" type="file" class="form-control" name="image" required>
                  </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Altname</label>
                    <div class="col-sm-9">
                    <input id="altname" type="text" class="form-control"placeholder="Altname" name="altname" required>
                  </div>
                  </div>

                  

                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Gallery</label>
                    <div class="col-sm-9">
                    <input id="images" style="padding-bottom: 35px;" type="file" class="form-control cho-img"  placeholder="" name="images[]" multiple required>
                  </div>
                    </div>

                  </div>
                </div>

                <div class="card" style="width: 66%; margin-left: 15px;">
    <div class="card-header header-2">Other</div>
    <div class="card-body">

                    <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Related Product</label>
                    <div class="col-sm-9">
                    <select class="select2" multiple="" data-placeholder="Nothing Select"
                     data-dropdown-css-class="" style="width: 100%;" data-select2-id="26"
                      tabindex="-1" aria-hidden="true" name="related[]">
                       @foreach ($value as $product) 
                      <option  value="<?php echo $product->product_id;  ?>">{{$product->title}}</option>
                       @endforeach
                    </select>
                  </div>
                  </div>

                   <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Product Category</label>
                    <div class="col-sm-9">
                    <select type="text" class="form-control"id="" placeholder="" 
                    name="category_id">
                  <option value="0">--select a Category--
                  </option>

                
                @foreach ($addcategory as $value) 
                 
                  <option value="{{$value->cat_id}}">{{$value->name}}</option>
                 
                  @endforeach
           
                  </select>
                </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Status</label>
                    <div class="col-sm-9">
                    <select type="text" class="form-control"id="" placeholder="" 
                    name="status">
                  
                
                  <option value="1">Active</option>
                  <option value="0">Disable</option>
                 
                  
           
                  </select>
                </div>
                  </div>
                  
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Show on Home</label>
                    <div class="col-sm-9">
                    <select type="text" class="form-control"id="" placeholder="" 
                    name="show_home">
                  
                  <option value="0">No</option>
                  <option value="1">Yes</option>
                 
                  </select>
                </div>
                  </div>
                  
                </div>
              </div>

              <!-- FAQs Section -->
              <div class="card" style="width: 66%; margin-left: 15px;">
                  <div class="card-header header-2">Frequently Asked Questions (FAQs)</div>
                  <div class="card-body" id="faq-container">
                      <!-- FAQs will be added here dynamically -->
                  </div>
                  <div class="card-footer">
                      <button type="button" class="btn btn-success btn-sm" onclick="addFaqRow()">Add FAQ</button>
                  </div>
              </div>

                 

             

             
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="save" name="submit">Add</button>
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

function addFaqRow() {
    var faqHtml = '<div class="faq-item" style="border:1px solid #eee; padding: 15px; margin-bottom: 15px; position:relative;">' +
                      '<div class="form-group row">' +
                          '<label class="col-sm-3 col-form-label">Question</label>' +
                          '<div class="col-sm-9">' +
                              '<input type="text" class="form-control" name="faq_question[]" placeholder="Enter FAQ Question">' +
                          '</div>' +
                      '</div>' +
                      '<div class="form-group row">' +
                          '<label class="col-sm-3 col-form-label">Answer</label>' +
                          '<div class="col-sm-9">' +
                              '<textarea class="form-control" name="faq_answer[]" rows="3" placeholder="Enter FAQ Answer"></textarea>' +
                          '</div>' +
                      '</div>' +
                      '<div class="text-right">' +
                          '<button type="button" class="btn btn-danger btn-sm" onclick="removeFaqRow(this)">Remove FAQ</button>' +
                      '</div>' +
                  '</div>';
    $('#faq-container').append(faqHtml);
}

function removeFaqRow(btn) {
    $(btn).closest('.faq-item').remove();
}
</script>
  @include('adminlte/footer')