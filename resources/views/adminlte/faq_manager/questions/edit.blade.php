@include('adminlte/header')
@include('adminlte/sidebarlink')

<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Edit FAQ Question</h1>
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
              <h3 class="card-title">Question Details</h3>
            </div>
            <form action="{{ url('admin/faq-manager/questions/update/'.$question->id) }}" method="POST">
              @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="faq_category_id">Category</label>
                  <select name="faq_category_id" class="form-control" required>
                    <option value="">Select Category</option>
                    @foreach($categories as $cat)
                      <option value="{{ $cat->id }}" {{ $question->faq_category_id == $cat->id ? 'selected' : '' }}>{{ $cat->name }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="question">Question</label>
                  <input type="text" name="question" class="form-control" id="question" value="{{ $question->question }}" required>
                </div>
                <div class="form-group">
                  <label for="answer">Answer</label>
                  <textarea name="answer" class="form-control" id="answer" rows="5" required>{{ $question->answer }}</textarea>
                </div>
                <div class="form-group">
                  <label for="status">Status</label>
                  <select name="status" class="form-control" required>
                    <option value="1" {{ $question->status == 1 ? 'selected' : '' }}>Active</option>
                    <option value="0" {{ $question->status == 0 ? 'selected' : '' }}>Inactive</option>
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
