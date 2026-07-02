 <html>
 <body>
 	 
 <form method="post" action="{{url('update_data'.'/'.$value[0]->id)}}" enctype="multipart/form-data"> 

@csrf
             <input type="hidden" name="id" value="{{$value[0]->id}}">  
                <div class="card-body">

                
                  <div class="form-group">
                    <label style="color:#5c89b5">Name</label>
                    <input type="text" class="form-control"id="" placeholder="Meta Title" name="name"
                    value=" {{$value[0]->name}}">
                  </div>

                   <div class="form-group">
                    <label style="color:#5c89b5;">Category URL</label>
                   <input style="width:40% !important;" type="text" class="form-control"id="" placeholder="Category URL" name="categoryurl" value=" {{$value[0]->category_url}}">
                  </div>

                  <div class="form-group">
                    <label style="color:#5c89b5">Meta Title</label>
                    <input style="width:40% !important;" type="text" class="form-control"id="" placeholder="Meta Title" name="mtitle" value=" {{$value[0]->meta_title}}">
                  </div>

                   <div class="form-group">
                    <label style="color:#5c89b5">Meta Description</label>
                    <input type="text" class="form-control"id="" placeholder="Meta Description" name="mdescription" value=" {{$value[0]->meta_description}}">
                  </div>
                   <div class="form-group">
                    <label style="color:#5c89b5">Meta Tags</label>
                    <input type="text" class="form-control"id="" placeholder="Meta Tags" name="mtags"
                    value=" {{$value[0]->meta_tags}}">
                  </div>

                   <div class="form-group">
                    <label style="color:#5c89b5" >Image</label>
                    <input  type="file" class="form-control cho-img"  placeholder="" name="image"
                     value=" {{$value[0]->image}}">
                    </div>

                    <div class="form-group">
                    <label style="color:#5c89b5" >Multiple Image</label>
                    <input type="file" class="form-control cho-img"  placeholder="" name="images[]" multiple
                      value=" {{$value[0]->images}}">
                    </div>
                  
  

                           <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="submit">Update</button>
                </div>

                  </div>
          
               
	
    </form>
</body>
</html>
