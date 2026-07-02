@include('adminlte/header')
@include('adminlte/sidebarlink')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Footer Settings</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Update Footer Content</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" action="{{ url('admin/update-footer-settings') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        
                        <h4>1. Social Media Links</h4>
                        <div class="form-group">
                            <label>Facebook URL</label>
                            <input type="text" name="facebook_url" class="form-control" value="{{ $settings->facebook_url ?? '' }}">
                        </div>
                        <div class="form-group">
                            <label>Twitter URL</label>
                            <input type="text" name="twitter_url" class="form-control" value="{{ $settings->twitter_url ?? '' }}">
                        </div>
                        <div class="form-group">
                            <label>Instagram URL</label>
                            <input type="text" name="instagram_url" class="form-control" value="{{ $settings->instagram_url ?? '' }}">
                        </div>
                        <div class="form-group">
                            <label>Pinterest URL</label>
                            <input type="text" name="pinterest_url" class="form-control" value="{{ $settings->pinterest_url ?? '' }}">
                        </div>
                        <div class="form-group">
                            <label>LinkedIn URL</label>
                            <input type="text" name="linkedin_url" class="form-control" value="{{ $settings->linkedin_url ?? '' }}">
                        </div>

                        <hr>
                        <h4>2. Logo Upload</h4>
                        <div class="form-group">
                            <label>Footer Logo</label>
                            <input type="file" name="logo" class="form-control">
                            @if(!empty($settings->logo))
                                <br>
                                <img src="{{ asset($settings->logo) }}" alt="Current Logo" style="max-height: 80px; background: #333; padding: 10px; border-radius: 5px;">
                            @endif
                        </div>

                        <hr>
                        <h4>3. Hot Categories</h4>
                        <div class="form-group">
                            <label>Select Categories to show in footer</label>
                            @php
                                $selected_cats = !empty($settings->hot_categories) ? json_decode($settings->hot_categories, true) : [];
                            @endphp
                            <select name="hot_categories[]" class="form-control select2" multiple="multiple" style="width: 100%; height: 200px;">
                                @foreach($categories as $cat)
                                    <option value="{{ $cat->cat_id }}" {{ in_array($cat->cat_id, $selected_cats) ? 'selected' : '' }}>
                                        {{ $cat->name }}
                                    </option>
                                @endforeach
                            </select>
                            <small class="text-muted">Hold Ctrl (Windows) or Command (Mac) to select multiple.</small>
                        </div>

                        <hr>
                        <h4>4. Products</h4>
                        <div class="form-group">
                            <label>Select Products to show in footer</label>
                            @php
                                $selected_prods = !empty($settings->footer_products) ? json_decode($settings->footer_products, true) : [];
                            @endphp
                            <select name="footer_products[]" class="form-control select2" multiple="multiple" style="width: 100%; height: 200px;">
                                @foreach($products as $prod)
                                    <option value="{{ $prod->product_id }}" {{ in_array($prod->product_id, $selected_prods) ? 'selected' : '' }}>
                                        {{ $prod->title }}
                                    </option>
                                @endforeach
                            </select>
                            <small class="text-muted">Hold Ctrl (Windows) or Command (Mac) to select multiple.</small>
                        </div>

                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Save Footer Settings</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>

@include('adminlte/footer')
