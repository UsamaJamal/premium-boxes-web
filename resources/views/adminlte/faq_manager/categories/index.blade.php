@include('adminlte/header')
@include('adminlte/sidebarlink')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>FAQ Categories</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Home</a></li>
            <li class="breadcrumb-item active">FAQ Categories</li>
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

          <div class="card mb-4">
            <div class="card-header">
              <h3 class="card-title">FAQ Page SEO Settings</h3>
            </div>
            <div class="card-body">
              <form action="{{ url('admin/faq-manager/seo') }}" method="POST">
                @csrf
                <div class="form-group">
                  <label for="meta_title">Meta Title</label>
                  <input type="text" name="meta_title" class="form-control" value="{{ $faq_seo->meta_title ?? '' }}" placeholder="Enter Meta Title">
                </div>
                <div class="form-group">
                  <label for="meta_description">Meta Description</label>
                  <textarea name="meta_description" class="form-control" rows="3" placeholder="Enter Meta Description">{{ $faq_seo->meta_description ?? '' }}</textarea>
                </div>
                <div class="form-group">
                  <label for="meta_keywords">Meta Keywords</label>
                  <input type="text" name="meta_keywords" class="form-control" value="{{ $faq_seo->meta_tags ?? '' }}" placeholder="Enter Meta Keywords (comma separated)">
                </div>
                <div class="form-group">
                  <label for="meta_robots">Meta Robots (Robot Tag)</label>
                  <input type="text" name="meta_robots" class="form-control" value="{{ $faq_seo->meta_robots ?? '' }}" placeholder="e.g., index, follow">
                </div>
                <div class="form-group">
                  <label for="schema">Schema Markup</label>
                  <textarea name="schema" class="form-control" rows="5" placeholder="Paste Schema Markup (JSON-LD)">{{ $faq_seo->schema ?? '' }}</textarea>
                </div>
                
                <hr class="mt-4 mb-4">
                <h4 class="mb-3">FAQ Page Display Text</h4>
                <div class="form-group">
                  <label for="page_title">Page Title (White text)</label>
                  <input type="text" name="page_title" class="form-control" value="{{ $faq_seo->page_title ?? 'Answers to Every' }}" placeholder="Answers to Every">
                </div>
                <div class="form-group">
                  <label for="page_subtitle">Page Subtitle (Gold text)</label>
                  <input type="text" name="page_subtitle" class="form-control" value="{{ $faq_seo->page_subtitle ?? 'Packaging Question' }}" placeholder="Packaging Question">
                </div>
                <div class="form-group">
                  <label for="page_description">Page Description</label>
                  <textarea name="page_description" class="form-control" rows="3" placeholder="Find clear guidance on custom rigid boxes...">{{ $faq_seo->page_description ?? 'Find clear guidance on custom rigid boxes, materials, finishes, pricing, production timelines, and shipping all in one place.' }}</textarea>
                </div>
                
                <button type="submit" class="btn btn-primary mt-2">Save Settings</button>
              </form>
            </div>
          </div>

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Manage Categories</h3>
              <a href="{{ url('admin/faq-manager/categories/create') }}" class="btn btn-primary float-right">Add New Category</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Status</th>
                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($categories as $cat)
                <tr>
                  <td>{{ $cat->id }}</td>
                  <td>{{ $cat->name }}</td>
                  <td>{{ $cat->status ? 'Active' : 'Inactive' }}</td>
                  <td>
                    <a href="{{ url('admin/faq-manager/categories/edit/'.$cat->id) }}" class="btn btn-sm btn-info">Edit</a>
                    <a href="{{ url('admin/faq-manager/categories/delete/'.$cat->id) }}" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this category and all its questions?')">Delete</a>
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
