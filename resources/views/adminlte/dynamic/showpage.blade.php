@include ('adminlte/tablescripts')
@include ('adminlte/header')
@include('adminlte/sidebarlink')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Show Header & Footer</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}" style="color: #234376;">Home</a></li>
              <li class="breadcrumb-item active" style="color: #49d8f7;">Show Header & Footer</li>
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
                <div class="card-header">
                  <h5>Show Header & Footer</h5>
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
                
                <th>Page Title</th>
                <th>Page Link</th>
                <th>Appearance</th>
                <th>Status</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
          <?php
          $sr=0;
          foreach($dynamic as $i) { 
          $sr++;
          ?>
            <tr>
                <th scope="row"><?php echo $sr; ?></th>
                
                
                 <td>{{$i->page_title}}</td>
                <td>{{$i->page_url}}</td>
                <td>{{$i->appearance}}</td>
                <td>{{$i->status}}</td>
                <td><button type="submit" data-upid="{{$i->id}}" class="edit" name="updateheader">EDIT</button></td>
                <td><button type="submit" data-uid="{{$i->id}}" class="delete" name="deleteheader">DELETE</button></td>
               
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
     
      $src = "{{url('admin/deletepage')}}"+'/'+$product_id;
    
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
     
    $src = "{{url('admin/editpage')}}"+'/'+$pro_id;
    
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