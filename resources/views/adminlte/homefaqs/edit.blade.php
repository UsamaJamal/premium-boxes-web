@include('adminlte/header')
@include('adminlte/sidebarlink')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Edit Home FAQ</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}" style="color: #234376;">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ url('admin/homefaqs') }}" style="color: #234376;">Home FAQs</a></li>
            <li class="breadcrumb-item active" style="color: #49d8f7;">Edit FAQ</li>
          </ol>
        </div>
      </div>
    </div>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h5>Edit FAQ #{{ $faq->id }}</h5>
            </div>
            <!-- form start -->
            <form id="basic-form" method="post" action="{{url('admin/update_homefaq/'.$faq->id)}}">
              @csrf
              <div class="card-body">
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Question</label>
                  <div class="col-sm-10">
                    <input id="question" type="text" class="form-control" value="{{ $faq->question }}" name="question" required>
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Answer</label>
                  <div class="col-sm-10">
                    <textarea id="answer" class="form-control" name="answer" rows="4" required>{{ $faq->answer }}</textarea>
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Status</label>
                  <div class="col-sm-10">
                    <select class="form-control" name="status">
                      <option value="1" {{ $faq->status == 1 ? 'selected' : '' }}>Active</option>
                      <option value="0" {{ $faq->status == 0 ? 'selected' : '' }}>Inactive</option>
                    </select>
                  </div>
                </div>
              </div>
              
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ url('admin/homefaqs') }}" class="btn btn-default">Cancel</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

@include('adminlte/footer')
