
  <!-- /.navbar -->
@include ('adminlte/tablescripts')
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
            <h1>Category</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}" style="color: #234376;">Home</a></li>
              <li class="breadcrumb-item active" style="color: #49d8f7;">Category</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          
          <!-- /.card -->

          <div class="card">
            <div class="card-header">
              <h5>Show Category</h5>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Image</th>
        <th>Edit</th>
        <th>Delete</th>

      </tr>
                </thead>
                <tbody>
                <?php $sr=0; foreach ($data as $value){ $sr++; ?> 
                              
            <tr>
            <td>{{$sr}}</td>
      <td>
        {{$value->name}}
        <?php if($value->parent_category == 0 || $value->parent_category == -1): ?>
          <span class="badge badge-success" style="margin-left: 5px;">Parent</span>
        <?php endif; ?>
      </td>
      <td><img style="height:50px; width:50px;" src="{{url('images/'.$value->image)}}"></td>
      <td><a href="#">
        <button class="btn btn-primary editdata" style="background-color:#0da8ca;border-color:#0da8ca;" data-uid="<?php echo $value->cat_id;?>">Edit</button>
      </a></td>
      <td><a href="#">
      <button class="btn btn-danger deleteButton" data-uid="<?php echo $value->cat_id;?>">Delete</button>
      </a></td>
</tr>
<?php } ?>
                </tbody>
                
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
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

<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script type="text/javascript">
     $(document).ready(function () {

      $('.deleteButton').click(function(){
     
     $product_id=$(this).attr('data-uid');
  
    $src = "{{url('admin/delete_category/')}}"+'/'+$product_id;
    
       swal.fire({

            title: "Are You Sure, you want to Delete the Category ?",
            type: "warning",
            showCancelButton: true,
            confirmButtonText: 'Ok',
            confirmButtonColor: '#A10C1A'
            }).then((ok) => {
     if (ok.value) {
 
       window.location = $src;
     }
      else
                    {console.log('cancelled');}
     });

      });

          $('.editdata').click(function(){
          
          $id=$(this).attr('data-uid');
          $src = "{{url('admin/editcategory/')}}"+'/'+$id;
            
           swal.fire({

title:"Are you Sure you want to Edit this Category",
type:"warning",
showCancelButton:true,
confirmButtonText:'next',

           }).then((ok)=>{
            if(ok.value){

                window.location=$src;
            }
             else
             {
                console.log("error");
             }

          });
    });  
  });


 </script>

<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>
    
@include('adminlte/footer')
