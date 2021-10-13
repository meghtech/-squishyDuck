@extends('layouts.admin')
@push('css')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
@endpush
@section('content')

  <!-- Dashboard Content
  ================================================== -->
  <div class="dashboard-content-container" data-simplebar>
    <div class="dashboard-content-inner" >
      
      <!-- Dashboard Headline -->
      <div class="dashboard-headline">
        <h3>@isset($category)
          Edit
        @else
        Create 

        @endisset
      Category</h3>
        <!-- Breadcrumbs -->
        <nav id="breadcrumbs" class="dark">
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Dashboard</a></li>
            <li>Post a Job</li>
          </ul>
        </nav>
      </div>


  <form action="{{ isset($category) ?  route('category.update', $category->id) : url('admin/categorySave')}}" method="POST">
    @csrf
     @isset($category)
                                      @method('PUT')
                                    @endisset
      <!-- Row -->
      <div class="row">

        <!-- Dashboard Box -->
        <div class="col-xl-12">
          <div class="dashboard-box margin-top-0">

            <!-- Headline -->
            <div class="headline">
              <h3><i class="icon-feather-folder-plus"></i> Category Submission Form</h3>
            </div>

            <div class="content with-padding padding-bottom-10">
              <div class="row">

                <div class="col-xl-12">
                  <div class="submit-field">
                    <h5>Category Name</h5>
                    <input type="text" name="name" class="with-border" placeholder="Enter Category Name" value="{{ $category->name ?? old('name') }}">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-12">
          <button type="submit" class="button ripple-effect big margin-top-30"><i class="icon-feather-plus" style="text-decoration: none;"></i> @isset($category)
          Edit
        @else
        Create 

        @endisset Category</button>
        </div>
      </div>
</form>
      <!-- Row / End -->



    </div>
  </div>
  <!-- Dashboard Content / End -->

@endsection

@push('js')
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
<script>
  $('#summernote').summernote({
        placeholder: 'Write something cazy . . . . . . . ',
        tabsize: 2,
        height: 120,
        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['table', ['table']],
          ['insert', ['link', 'picture', 'video']],
          ['view', ['fullscreen', 'codeview', 'help']]
        ]
      });
</script>
@endpush