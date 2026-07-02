
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
            <h1>Term & Condition</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Term & Condition</li>
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
              <h3 class="card-title">Show Term & Condition</h3>
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
               
                  @foreach ($termcon as $termcon)              
            <tr>
      <td>{{$termcon->tc_id}}</td>
      <td>{{$termcon->meta_title}}</td>
      <td><img style="height:50px; width:50px;" src="{{url('images/'.$termcon->image)}}"></td>
      <td><a href="{{url('admin/edittermcon'.'/'.$termcon->tc_id)}}">
        <button class="btn btn-primary" id="butonedit">Edit</button>
      </a></td>
      <td><a href="{{url('admin/delete_termcon'.'/'.$termcon->tc_id)}}"><button class="btn btn-danger" data-link="" id="butondelete">Delete</button></a></td>
</tr>
@endforeach
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
=

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->

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
