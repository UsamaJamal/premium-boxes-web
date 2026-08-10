@include('adminlte/header')
@include('adminlte/sidebarlink')

<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Edit FAQ Category</h1>
        </div>
      </div>
    </div>
  </section>

  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Category Details</h3>
            </div>
            <form action="{{ url('admin/faq-manager/categories/update/'.$category->id) }}" method="POST">
              @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" name="name" class="form-control" id="name" value="{{ $category->name }}" required>
                </div>
                <div class="form-group">
                  <label for="status">Status</label>
                  <select name="status" class="form-control" required>
                    <option value="1" {{ $category->status == 1 ? 'selected' : '' }}>Active</option>
                    <option value="0" {{ $category->status == 0 ? 'selected' : '' }}>Inactive</option>
                  </select>
                </div>
              </div>
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Update</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

@include('adminlte/footer')
