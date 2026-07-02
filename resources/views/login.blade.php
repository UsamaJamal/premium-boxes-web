
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

 
 <div class="container">
 	<div class="row">
 		<!-- <div class="col-md-4">
 			<img src="images/CBD-Boxes.jpg">
 		</div> -->
 		<div class="col-md-6">

      

 			<div class="card">
      <div class="card-body">
        <form method="post" action="{{url('admin')}}"
enctype="multipart/form-data"
style="padding: 20px;"
> 

@csrf
@if(Session::has('error'))
                    
                    <center>
                    
                    <div style="  margin: -25px 0px 0px 99px;" class='alert alert-danger'> {{ Session::get('error') }}</div>
                    </center>
                    
                    @endif
         
  <div class="form-group">
    <label>User Name</label>
    <input type="text" class="form-control" placeholder="UserName" name="adminuser">
    
  </div>
  <div class="form-group">
    <label>Password</label>
    <input type="password" class="form-control" placeholder="Password" name="adminpassword">
  </div>
 
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
      </div>  
      </div>
               
  
 		</div>
 	</div>
 </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js" integrity="sha384-LtrjvnR4Twt/qOuYxE721u19sVFLVSA4hf/rRt6PrZTmiPltdZcI7q7PXQBYTKyf" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.10.1/sweetalert2.min.js" integrity="sha512-geFV99KIlNElg1jwzHE6caxE2tLBEw5l+e2cTRPJz273bbiQqpEuqvQzGAmJTdMfUJjoSDXkaUInwjiIz1HfqA==" crossorigin="anonymous"></script>
   
    
  </body>
</html>
