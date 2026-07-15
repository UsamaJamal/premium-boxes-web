
@include('adminlte/header')
@include('adminlte/sidebarlink')
  <!-- Main Sidebar Container -->
 

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
                <h5>Edit Category</h5>
              </div>

              <div class="card-body">
                  
              </div>
              <!-- /.card-header -->
              <!-- form start -->
               <form id="basic-form" method="post" action="{{url('admin/update_category'.'/'.$value[0]->cat_id)}}" enctype="multipart/form-data"
>@csrf

            <input type="hidden" name="oldbaner" value="{{$value[0]->bimage}}">

            <input type="hidden" name="oldfav-icon" value="{{$value[0]->icon}}">

             <input type="hidden" name="oldimage" value="{{$value[0]->image}}">
             <input type="hidden" name="old_hero_image" value="{{$value[0]->hero_image}}">
             <input type="hidden" name="old_feature_product" value="{{$value[0]->feature_product}}">

             <input type="hidden" name="old_parent_cat" value="{{$value[0]->parent_category}}">

                <div class="card" style="width: 66%; margin-left: 15px;">
    <div class="card-header header-2">Update Category Data</div>
    <div class="card-body">
                   <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Name</label>
                    <div class="col-sm-9">
                    <input id="name" type="text" class="form-control"placeholder="Name" name="name" value="{{$value[0]->name}}" required>
                  </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Category URL</label>
                    <div class="col-sm-9">
                    <input id="categoryurl" type="text" class="form-control"placeholder="Category URL" name="categoryurl" value="{{$value[0]->category_url}}" required>
                  </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Description</label>
                    <div class="col-sm-12">
                     <textarea class="form-control" id="ckeditor" name="ckeditor" >
                     <?php echo $value[0]->description ?>
                       
                     </textarea>
                   </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Hero Title</label>
                    <div class="col-sm-9">
                    <input id="hero_title" type="text" class="form-control" placeholder="Hero Title" name="hero_title" value="{{$value[0]->hero_title}}">
                  </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Hero Description</label>
                    <div class="col-sm-9">
                     <textarea class="form-control" rows="4" id="hero_desc" name="hero_desc" placeholder="Hero Description">{{$value[0]->hero_desc}}</textarea>
                   </div>
                  </div>
                </div>
              </div>
              <div class="card" style="width: 66%; margin-left: 15px;">
              <div class="card-header header-2">Update Meta Data</div>
              <div class="card-body">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Meta Title</label>
                    <div class="col-sm-9">
                    <input id="mtitle" type="text" class="form-control"placeholder="Meta Title" name="mtitle" value="{{$value[0]->meta_title}}" required>
                  </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Meta Description</label>
                    <div class="col-sm-9">
                    <input id="mdescription" type="text" class="form-control"placeholder="Meta Description" name="mdescription" value="{{$value[0]->meta_description}}" required>
                  </div>
                  </div>


                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Meta Tags</label>
                    <div class="col-sm-9">
                    <input id="mtags" type="text" class="form-control"placeholder="Meta Tags" name="mtags" value="{{$value[0]->meta_tags}}" required>
                  </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Robots Tag</label>
                    <div class="col-sm-9">
                    <input id="robots" type="text" class="form-control" placeholder="e.g. index, follow" name="robots" value="{{ $value[0]->robots ?? 'index, follow' }}">
                  </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Image Badge Text</label>
                    <div class="col-sm-9">
                    <input id="image_badge" type="text" class="form-control" placeholder="E.g., silver, gold foil" name="image_badge" value="{{$value[0]->image_badge}}">
                  </div>
                  </div>
                </div>
              </div>
                   

                    

                  <div class="card" style="width: 66%; margin-left: 15px;">
              <div class="card-header header-2">Update Image</div>
              <div class="card-body">
                   <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Image</label>
                    <div class="col-sm-9">
                    <input style="padding-bottom: 35px;" type="file" class="form-control" name="image">
                    @if($value[0]->image)
                        <div class="mt-2">
                            <img src="{{ asset('images/'.$value[0]->image) }}" width="100" alt="Current Image">
                        </div>
                    @endif
                  </div>
                  </div>

               <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Category Banner</label>
                    <div class="col-sm-9">
                    <input style="padding-bottom: 35px;" type="file" class="form-control" name="bimage">
                    @if($value[0]->bimage)
                        <div class="mt-2">
                            <img src="{{ asset('images/'.$value[0]->bimage) }}" width="100" alt="Current Banner">
                        </div>
                    @endif
                  </div>
                  </div>

                <div class="form-group row">
                     <label class="col-sm-3 col-form-label">Feature Image</label>
                     <div class="col-sm-9">
                     <input style="padding-bottom: 35px;" type="file" class="form-control" name="feature_product">
                     @if($value[0]->feature_product)
                        <div class="mt-2">
                            <img src="{{ asset('images/'.$value[0]->feature_product) }}" width="100" alt="Current Feature Image">
                            <div class="mt-2">
                                <label><input type="checkbox" name="remove_feature_product" value="1"> Remove Feature Image</label>
                            </div>
                        </div>
                     @endif
                   </div>
                   </div>

                   <div class="form-group row">
                     <label class="col-sm-3 col-form-label">Feature Title</label>
                     <div class="col-sm-9">
                     <input type="text" class="form-control" name="feature_title" value="{{$value[0]->feature_title}}" placeholder="E.g. Jewellery & Watches">
                   </div>
                   </div>

                   <div class="form-group row">
                     <label class="col-sm-3 col-form-label">Feature Description</label>
                     <div class="col-sm-9">
                     <textarea id="feature_description" class="form-control" name="feature_description" rows="2" placeholder="Brief 2-line description...">{{$value[0]->feature_description}}</textarea>
                   </div>
                   </div>

                <div class="form-group row">
                     <label class="col-sm-3 col-form-label">Nav Icon</label>
                     <div class="col-sm-9">
                     <input style="padding-bottom: 35px;" type="file" class="form-control" name="icon">
                     @if($value[0]->icon)
                        <div class="mt-2">
                            <img src="{{ asset('images/'.$value[0]->icon) }}" width="100" alt="Current Nav Icon" style="display: block; margin-bottom: 10px;">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remove_icon" value="1" id="remove_icon">
                                <label class="form-check-label text-danger" for="remove_icon">
                                    Remove Icon
                                </label>
                            </div>
                        </div>
                     @endif
                   </div>
                   </div>

                <div class="form-group row">
                     <label class="col-sm-3 col-form-label">Schema (JSON-LD)</label>
                     <div class="col-sm-9">
                       <textarea class="form-control" name="schema" rows="5" placeholder="<script type='application/ld+json'>...</script>">{{ $value[0]->schema ?? '' }}</textarea>
                     </div>
                   </div>

                <div class="form-group row">
                     <label class="col-sm-3 col-form-label">Hero Image</label>
                     <div class="col-sm-9">
                     <input style="padding-bottom: 35px;" type="file" class="form-control" name="hero_image">
                     @if($value[0]->hero_image)
                        <div class="mt-2">
                            <img src="{{ asset('images/'.$value[0]->hero_image) }}" width="100" alt="Current Hero Image">
                        </div>
                    @endif
                   </div>
                   </div>
                 </div>
               </div>

              <div class="card" style="width: 66%; margin-left: 15px;">
              <div class="card-header header-2">Other</div>
              <div class="card-body">

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Parent Category</label>
                    <div class="col-sm-9">
                    <select type="text" class="form-control" id="" placeholder="" 
                    name="parentcategory" value="0">
                     <option value="0">Parent
                  </option>
                   @foreach ($category_data as $category) 
                  
                    <option  value="{{$category->cat_id}}"

                   <?php if($category->cat_id == $value[0]->parent_category){echo "selected";} ?> >

                    {{$category->name}}</option>

                    @endforeach

                 
                  <!-- @foreach ($category_data as $category) 
                  <option  value="{{$category->cat_id}}">{{$category->name}}</option>
                  @endforeach
                 -->
                
           
                  </select>
                </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Status</label>
                    <div class="col-sm-9">
                    <select type="text" class="form-control"id="" placeholder="" 
                    name="status">
                  
                
                    <option <?php if($value[0]->status==1){echo "selected";} ?> value="1">Active</option>
                  <option <?php if($value[0]->status==0){echo "selected";} ?> value="0">Disable</option>
                 
                  
           
                  </select>
                </div>
                  </div>
                  
                      <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Show on Home</label>
                    <div class="col-sm-9">
                    <select type="text" class="form-control"id="" placeholder="" 
                    name="show_home">
                  
                  <option <?php if($value[0]->show_home==0){echo "selected";} ?> value="0">Select</option>
                  <option <?php if($value[0]->show_home==1){echo "selected";} ?> value="1">Section 2</option>

                 
                  
           
                  </select>
                </div>
                  </div>

                  <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Show in Nav</label>
                      <div class="col-sm-9">
                          <div class="form-check" style="margin-top: 10px;">
                              <input class="form-check-input" type="checkbox" name="show_in_nav" id="show_in_nav" value="1" {{ isset($value[0]->show_in_nav) && $value[0]->show_in_nav == 1 ? 'checked' : '' }}>
                              <label class="form-check-label" for="show_in_nav">
                                  Show this category in the navigation menu
                              </label>
                          </div>
                      </div>
                  </div>
                  
                    </div>
                  
                </div>

              <!-- Products Section Header (Category Page) -->
              <div class="card" style="width: 66%; margin-left: 15px;">
                  <div class="card-header header-2">Products Section Header (Category Page)</div>
                  <div class="card-body">
                      <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Products Heading</label>
                          <div class="col-sm-9">
                              <input type="text" class="form-control" name="products_heading" value="{{$value[0]->products_heading ?? ''}}" placeholder="e.g. Premium Gift Boxes Solutions">
                          </div>
                      </div>
                      <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Products Paragraph</label>
                          <div class="col-sm-9">
                              <textarea id="products_description" class="form-control" name="products_description" rows="3" placeholder="Enter description or HTML above products list...">{{$value[0]->products_description ?? ''}}</textarea>
                          </div>
                      </div>
                  </div>
              </div>

              <!-- Why Choose Section -->
              <div class="card" style="width: 66%; margin-left: 15px;">
                  <div class="card-header header-2">Why Choose Section</div>
                  <div class="card-body">
                      <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Why Choose Title</label>
                          <div class="col-sm-9">
                              <input type="text" class="form-control" name="why_choose_title" value="{{$value[0]->why_choose_title}}" placeholder="e.g. Why Choose Lid & Base?">
                          </div>
                      </div>
                      <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Why Choose Description</label>
                          <div class="col-sm-9">
                              <textarea id="why_choose_desc" class="form-control" name="why_choose_desc" rows="4" placeholder="Enter description...">{{$value[0]->why_choose_desc}}</textarea>
                          </div>
                      </div>
                      <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Why Choose Image</label>
                          <div class="col-sm-9">
                              <input type="file" class="form-control" name="why_choose_img">
                              @if($value[0]->why_choose_img)
                                  <div class="mt-2">
                                      <img src="{{url('images/'.$value[0]->why_choose_img)}}" style="max-width: 100px; margin-top: 10px; display: block; margin-bottom: 10px;">
                                      <div class="form-check">
                                          <input class="form-check-input" type="checkbox" name="remove_why_choose_img" value="1" id="remove_why_choose_img">
                                          <label class="form-check-label text-danger" for="remove_why_choose_img">
                                              Remove Image
                                          </label>
                                      </div>
                                  </div>
                                  <input type="hidden" name="old_why_choose_img" value="{{$value[0]->why_choose_img}}">
                              @endif
                          </div>
                      </div>
                  </div>
              </div>

              <!-- FAQs Section -->
              <div class="card" style="width: 66%; margin-left: 15px;">
                  <div class="card-header header-2">Frequently Asked Questions (FAQs)</div>
                  <div class="card-body" id="faq-container">
                      @if(isset($faqs) && count($faqs) > 0)
                          @foreach($faqs as $faq)
                          <div class="faq-item" style="border:1px solid #eee; padding: 15px; margin-bottom: 15px; position:relative;">
                              <div class="form-group row">
                                  <label class="col-sm-3 col-form-label">Question</label>
                                  <div class="col-sm-9">
                                      <input type="text" class="form-control" name="faq_question[]" value="{{$faq->question}}" placeholder="Enter FAQ Question">
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label class="col-sm-3 col-form-label">Answer</label>
                                  <div class="col-sm-9">
                                      <textarea class="form-control" name="faq_answer[]" rows="3" placeholder="Enter FAQ Answer">{{$faq->answer}}</textarea>
                                  </div>
                              </div>
                              <div class="text-right">
                                  <button type="button" class="btn btn-danger btn-sm" onclick="removeFaqRow(this)">Remove FAQ</button>
                              </div>
                          </div>
                          @endforeach
                      @endif
                  </div>
                  <div class="card-footer">
                      <button type="button" class="btn btn-success btn-sm" onclick="addFaqRow()">Add Another FAQ</button>
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
<!-- ./wrapper -->

<!-- jQuery -->

<script src="{{URL::asset('ckeditor/ckeditor.js')}}"></script>
<script>
    CKEDITOR.replace('ckeditor', {
        filebrowserUploadUrl: "{{URL::asset('ckeditor/ck_upload.php')}}",
        filebrowserUploadMethod: 'form'
    });
    CKEDITOR.replace('hero_desc', {
        filebrowserUploadUrl: "{{URL::asset('ckeditor/ck_upload.php')}}",
        filebrowserUploadMethod: 'form'
    });
    CKEDITOR.replace('feature_description', {
        filebrowserUploadUrl: "{{URL::asset('ckeditor/ck_upload.php')}}",
        filebrowserUploadMethod: 'form'
    });
    CKEDITOR.replace('why_choose_desc', {
        filebrowserUploadUrl: "{{URL::asset('ckeditor/ck_upload.php')}}",
        filebrowserUploadMethod: 'form'
    });
    CKEDITOR.replace('products_description', {
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
