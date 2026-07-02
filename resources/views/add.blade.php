<!DOCTYPE html>
<html>
<head>
	<title>sdas</title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.10.1/sweetalert2.min.css">
 

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
<!-- jQuery library -->

<!-- Latest compiled JavaScript -->

<style>
	.swal2-confirm {
		display: none !important;
	}
</style>
</head>
 <body style="padding: 50px;">
 	@if(Session::has('login_successfully'))
                    
                    <center>
                    
                    <div style="  margin: -25px 0px 0px 99px;" class='alert alert-success'> {{ Session::get('login_successfully') }}</div>
                    </center>
                    
                    @endif
 <div style="float:right;">

 	<a href="{{'logout'}}">
 		<button class="btn btn-primary" type="submit" name="submit">LogOut</button>
 	</a>
 </div>
 <div class="container">
 	<div class="row">
 		<!-- <div class="col-md-4">
 			<img src="images/CBD-Boxes.jpg">
 		</div> -->
 		<div class="col-md-12">

      <div class="card">
      	<div class="card-body">
      		<form method="post" action="{{url('add_data')}}"
enctype="multipart/form-data"
style="padding: 20px;"
> 

@csrf

                <div class="card-body container" style="padding: 20px;">

                
                 
                   <div class="form-group">
                    <label style="color:#5c89b5;">Name</label>
                   <input style="width:40% !important;" type="text" class="form-control"id="name" placeholder="Name" name="name">
                  </div>

                   <div class="form-group">
                    <label style="color:#5c89b5;">Category URL</label>
                   <input style="width:40% !important;" type="text" class="form-control"id="" placeholder="Category URL" name="categoryurl">
                  </div>

                  <div class="form-group">
                    <label style="color:#5c89b5">Meta Title</label>
                    <input style="width:40% !important;" type="text" class="form-control"id="" placeholder="Meta Title" name="mtitle">
                  </div>

                   <div class="form-group">
                    <label style="color:#5c89b5">Meta Description</label>
                    <input style="width:40% !important;" type="text" class="form-control"id="" placeholder="Meta Description" name="mdescription">
                  </div>

                   <div class="form-group">
                    <label style="color:#5c89b5">Meta Tags</label>
                    <input style="width:40% !important;" type="text" class="form-control"id="" placeholder="Meta Tags" name="mtags">
                  </div>

                   <div class="form-group">
                    <label style="color:#5c89b5" >Image</label>
                    <input style="width:40% !important;" type="file" class="form-control cho-img"  placeholder="" name="image">
                    </div>

                    <div class="form-group">
                    <label style="color:#5c89b5" >Multiple Image</label>
                    <input style="width:40% !important;" type="file" class="form-control cho-img"  placeholder="" name="images[]" multiple>
                    </div>
                  
  

                           <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </div>

                  </div>
          
               
	
    </form>
      	</div>
      </div>

 			
 		</div>
 	</div>
 </div>

<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
    		<th>Id</th>
    		<th>Name</th>
    		<th>Mult-Images</th>
    		<th>Meta Title</th>
    		<th>Meta Tags</th>
    		<th>Image</th>
    		<th>Edit</th>
    		<th>Delete</th>

    	</tr>
        </thead>
        <tbody> 
        @foreach ($data as $value)              
            <tr>
    	<td>{{$value->id}}</td>
    	<td>{{$value->name}}</td>
    	<td>
<?php 

    		$images = json_decode($value->images); 
    foreach ($images as $images) {?>
    	<img style="height:50px; width:50px;" src="{{'images/'.$images}}"/>	
   <?php }
?>    	
 
    	</td>
    	<td>{{$value->meta_title}}</td>
    	<td>{{$value->meta_tags}}</td>
    	<td><img style="height:50px; width:50px;" src="{{'images/'.$value->image}}"></td>
    	<td><a href="#">
    		<button class="btn btn-primary" data-link="{{url('edit_data'.'/'.$value->id)}}" id="butonedit">Edit</button>
    	</a></td>
    	<td><a href="#"><button class="btn btn-danger" data-link="{{url('delete_data'.'/'.$value->id)}}" id="butondelete">Delete</button></a></td>
</tr>
@endforeach
        </tbody>
       
    </table>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js" integrity="sha384-LtrjvnR4Twt/qOuYxE721u19sVFLVSA4hf/rRt6PrZTmiPltdZcI7q7PXQBYTKyf" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" 
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.10.1/sweetalert2.min.js"
     integrity="sha512-geFV99KIlNElg1jwzHE6caxE2tLBEw5l+e2cTRPJz273bbiQqpEuqvQzGAmJTdMfUJjoSDXkaUInwjiIz1HfqA=="
      crossorigin="anonymous"></script>
    <script>
    $(document).ready(function() {
    $('#example').DataTable();
});
    </script>
    <script>
    	$('table').on('click','#butonedit',function() {
    		Swal.fire({
  icon: 'warning',
  title: 'You want to Edit ',
  text: '',
  html:'<br>'+'<a href="'+$(this).attr("data-link") +'"><button class="btn btn-primary">' + 'Edit' + '</button></a>'
})   		
    	})
    </script>
        <script>
    	$('table').on('click','#butondelete',function() {
    		Swal.fire({
  icon: 'warning',
  title: 'Are you sure You want to Delete',
  text: '',
  html:'<br>'+'<a href="'+$(this).attr("data-link")+'"><button class="btn btn-danger">' + 'Delete' + '</button></a>'
})   		
    	})
    </script>
  </body>
</html>