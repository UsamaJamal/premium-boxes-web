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
            <h1>Product Reviews</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}" style="color: #234376;">Home</a></li>
              <li class="breadcrumb-item active" style="color: #49d8f7;">Product Reviews</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

          @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
          @endif

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Manage Product Reviews</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Review ID</th>
                    <th>Product</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Rating</th>
                    <th>Review Text</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($reviews as $review)
                  <tr>
                    <td>{{ $review->id }}</td>
                    <td>{{ $review->product_title }}</td>
                    <td>{{ $review->name }}</td>
                    <td>{{ $review->email }}</td>
                    <td>{{ $review->rating }} / 5</td>
                    <td>{{ Str::limit($review->review_text, 50) }}</td>
                    <td>
                        @if($review->status == 1)
                            <span class="badge badge-success">Approved</span>
                        @else
                            <span class="badge badge-warning">Pending</span>
                        @endif
                    </td>
                    <td>
                        @if($review->status == 0)
                            <a href="{{ url('admin/approve-review/'.$review->id) }}" class="btn btn-sm btn-success">Approve</a>
                        @endif
                        <a href="{{ url('admin/delete-review/'.$review->id) }}" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this review?');">Delete</a>
                    </td>
                  </tr>
                  @endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Review ID</th>
                    <th>Product</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Rating</th>
                    <th>Review Text</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  @include('adminlte/footer')
