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
            <h1>Authors</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Authors</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          
          @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
          @endif

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">All Authors</h3>
              <a href="{{ url('admin/authors/create') }}" class="btn btn-primary float-right">Add New Author</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
         <th>Id</th>
         <th>Name</th>
         <th>Profile Image</th>
         <th>Email</th>
         <th>Edit</th>
         <th>Delete</th>
       </tr>
                 </thead>
                 <tbody>
                
                   @foreach ($authors as $author)              
             <tr>
       <td>{{$author->id}}</td>
       <td>{{$author->name}}</td>
       <td>
           @if($author->profile_image)
           <img style="height:50px; width:50px; border-radius: 50%;" src="{{ url('uploads/authors/'.$author->profile_image) }}">
           @endif
       </td>
       <td>{{$author->email}}</td>
       <td><a href="{{ url('admin/authors/edit/'.$author->id) }}"><button type="button" class="btn btn-block btn-info">Edit</button></a></td>
       <td><a href="{{ url('admin/authors/delete/'.$author->id) }}" onclick="return confirm('Are you sure?')"><button type="button" class="btn btn-block btn-danger">Delete</button></a></td>
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
 @include('adminlte/footer')
