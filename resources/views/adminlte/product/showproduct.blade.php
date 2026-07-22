@include ('adminlte/tablescripts')
@include('adminlte/header')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('adminlte/sidebarlink')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Product</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Product</li>
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
              <h3 class="card-title">Show Product</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            <form action="{{url('admin/delete_multiple_products')}}" method="POST" id="multiDeleteForm">
              @csrf
              <button type="submit" class="btn btn-danger mb-3" onclick="return confirm('Are you sure you want to delete selected products?');">Delete Selected</button>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
        <th><input type="checkbox" id="selectAll"></th>
        <th>Sr</th>
        <th>Title</th>
        <th>Description</th>
        <th>Image</th>
        <th>Edit</th>
        <th>Delete</th>

      </tr>
                </thead>
                <tbody>
                  
                  <?php $sr=0; foreach ($product as $product){ $sr++; ?>              
            <tr>
      <td><input type="checkbox" name="ids[]" value="{{$product->product_id}}" class="selectItem"></td>
      <td>{{$sr}}</td>
      <td>{{$product->title}}</td>
      <td>{{$product->meta_description}}</td>

      <td><img style="height:50px; width:50px;" src="{{url('images/'.$product->image)}}"></td>
      <td><a href="#">
        <button type="button" class="btn btn-primary editdata"style="background-color:#0da8ca;border-color:#0da8ca;" data-uid="<?php echo $product->product_id;?>">Edit</button>
      </a></td>
     
      <td><a href="#">
      <button type="button" class="btn btn-danger deleteButton" data-uid="<?php echo $product->product_id;?>">Delete</button>
      </a></td>
</tr>
<?php } ?>
                </tbody>
                
              </table>
            </form>
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

      $('.deleteButton').click(function(e){
      e.preventDefault();
     $product_id=$(this).attr('data-uid');
  
    $src = "{{url('admin/delete_product/')}}"+'/'+$product_id;
    
       swal.fire({

            title: "Are You Sure, you want to Delete the Product ?",
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

          $('.editdata').click(function(e){
          e.preventDefault();
          $id=$(this).attr('data-uid');
          $src = "{{url('admin/editproduct/')}}"+'/'+$id;
            
           swal.fire({

title:"Are you Sure you want to Edit this Product",
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
    $("#selectAll").click(function(){
      $("input[class=selectItem]").prop('checked', $(this).prop('checked'));
    });

    $("#example1").DataTable({
        "stateSave": true,
        "columnDefs": [
            { "orderable": false, "targets": 0 }
        ]
    });
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