@include('adminlte/header')
@include('adminlte/sidebarlink')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>FAQ Questions</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Home</a></li>
            <li class="breadcrumb-item active">FAQ Questions</li>
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
            <div class="alert alert-success">{{ session('success') }}</div>
          @endif

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Manage Questions</h3>
              <a href="{{ url('admin/faq-manager/questions/create') }}" class="btn btn-primary float-right">Add New Question</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Category</th>
                  <th>Question</th>
                  <th>Status</th>
                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($questions as $q)
                <tr>
                  <td>{{ $q->id }}</td>
                  <td>{{ $q->faqCategory ? $q->faqCategory->name : 'N/A' }}</td>
                  <td>{{ $q->question }}</td>
                  <td>{{ $q->status ? 'Active' : 'Inactive' }}</td>
                  <td>
                    <a href="{{ url('admin/faq-manager/questions/edit/'.$q->id) }}" class="btn btn-sm btn-info">Edit</a>
                    <a href="{{ url('admin/faq-manager/questions/delete/'.$q->id) }}" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this question?')">Delete</a>
                  </td>
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
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@include('adminlte/footer')
