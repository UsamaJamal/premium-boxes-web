@include ('adminlte/header')
@include ('adminlte/tablescripts')
@include('adminlte/sidebarlink')

<style type="text/css">
  
</style>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Show Contact</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}" style="color: #234376;">Home</a></li>
              <li class="breadcrumb-item active" style="color: #49d8f7;">Show Contact</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
      <div class="c-body">
        <main class="c-main">
          <div class="container-fluid">
            <div class="fade-in">
              <div class="card">
                <div class="card-header" style="color: #49d8f7; background-color: #234376;">
                  <h5>Show Contact</h5>
                 <!--  <div class="top-header-button">
                    <a href="{{url('admin/addhomebanner')}}">
                    <button class="btn-top btn-primary">Add Bid</button></a>
                  </div> -->
                </div>
                <div class="card-body">
                  
              </div>
              <script type="text/javascript">
                $(document).ready(function() {
    $('#example').DataTable();
} );
              </script>
        

<center>

      
      

       <table id="example1" class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>Sr. #</th>
                
                <th>About</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
          <?php
          $sr=0;
          foreach($contact as $i) { 
          $sr++;
          ?>
            <tr>
                <th scope="row"><?php echo $sr; ?></th>
                
                <td>{{$i->about}}</td>
                 
                
                <td><button type="submit" data-upid="{{$i->id}}" class="edit" name="updatehomeslider">EDIT</button></td>
                <td><button type="submit" data-uid="{{$i->id}}" class="delete" name="deleteblogbanner">DELETE</button></td>
               
            </tr>
            <?php } ?>
            
        </tbody>
        
    </table>

<script type="text/javascript">
 $(document).ready(function () 
 {

    $('.delete').click(function()
    {
     
      $product_id=$(this).attr('data-uid');
     
      $src = "{{url('admin/deletecontact')}}"+'/'+$product_id;
    
      swal.fire(
      {

            title: "Are You Sure, you want to Delete this Item ?",
            type: "warning",
            showCancelButton: true,
            cancelButtonColor: '#d33',
            confirmButtonText: 'Delete',
            confirmButtonColor: '#3085d6'
            }).then((ok) => 
            {
              if (ok.value) {
 
              window.location = $src;
            }
            else
            {
              console.log('cancelled');
            }
      
            });

    });
  });

 $(document).ready(function () {

      $('.edit').click(function(){
     
     $pro_id=$(this).attr('data-upid');
     
    $src = "{{url('admin/editcontact')}}"+'/'+$pro_id;
    
       swal.fire({

            title: "Are You Sure, you want to Update?",
            type: "warning",
            showCancelButton: true,
            cancelButtonColor: '#d33',
            confirmButtonText: 'Update',
            confirmButtonColor: '#3085d6'
            }).then((ok) => {
     if (ok.value) {
 
       window.location = $src;
     }
      else
                    {console.log('cancelled');}
     });


     



      });
    });


   
</script>
              
              </div>
              
            </div>
          </div>
        </main>
@include ('adminlte/footer')