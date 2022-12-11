@extends('layouts.admin')
@push('css')
<link href="{{asset('content/admin')}}/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
<link href="{{asset('content/admin')}}/vendor/dropzone.css" rel="stylesheet">
<link href="{{asset('content/admin')}}/css/date_picker.css" rel="stylesheet">
<!-- Your custom styles -->
<link href="{{asset('content/admin')}}/css/custom.css" rel="stylesheet">
<!-- WYSIWYG Editor -->
<link rel="stylesheet" href="{{asset('content/admin')}}/js/editor/summernote-bs4.css">
@endpush
@section('content')
    <!-- /Navigation-->
    <form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
        @csrf

    <div class="content-wrapper">
            <div class="container-fluid">
              <!-- Breadcrumbs-->
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="#">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Add listing</li>
              </ol>
              <!-- Example DataTables Card-->
               @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

              @if (count($errors) > 0)
                 <div class = "alert alert-danger">
                    <ul>
                       @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                       @endforeach
                    </ul>
                 </div>
              @endif
                <div class="box_general padding_bottom">
                    <div class="header_box version_2">
                        <h2><i class="fa fa-file"></i>Add Product Info</h2>
                    </div>
                    <div class="row">
                      <div class="col-md-8">
                        <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label> Product Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Category Name">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label> Product Description</label>
                                <textarea type="text" name="des" class="form-control" placeholder="Enter Product Description" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label> Regular Price</label>
                                <input type="text" name="offer_price" class="form-control" placeholder="200">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label> Offer Price</label>
                                <input type="text" name="regular_price" class="form-control" placeholder="200">
                            </div>
                        </div>
                        
                        </div> 
                      </div>
                      <div class="col-md-4">
                       <div class="card">
                         <div class="card-body">
                            <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                                <label>Category Name</label>
                                <select name="category_id" id="category_id" class="form-control">
                                  @foreach($category as $v_category)
                                  <option value="{{$v_category->id}}">{{$v_category->name}}</option>
                                  @endforeach
                                </select>
                            </div>
                        </div>
                          <div class="col-md-12">
                            <div class="form-group">
                                <label>Sub Category Name</label>
                                <select name="sub_category_id" id="sub_category_id" class="form-control">
                               
                                </select>
                            </div>
                        </div>
                         <div class="col-md-12">
                            <div class="form-group">
                                <label>Product Photos</label>
                                <input type="file" name="image" class="form-control">
                            </div>
                        </div>
                        </div>
                         </div>
                       </div>
                      </div>
                    </div>    
                </div>
                <!-- /box_general-->
                
                    
                </div>

                <p style="margin-left:2rem">
                   <button type="submit" class="btn_1 medium">Save</button>
                </p>
              </div>
              <!-- /.container-fluid-->
          </form>
               </div>
            <!-- /.container-wrapper-->
@endsection
@push('js')
 
        <script src="{{asset('content/admin')}}/vendor/dropzone.min.js"></script>
	<script src="{{asset('content/admin')}}/vendor/bootstrap-datepicker.js"></script>
	<script>$('input.date-pick').datepicker();</script>
	<!-- WYSIWYG Editor -->
	<script src="{{asset('content/admin')}}/js/editor/summernote-bs4.min.js"></script>
	<script>
      $('.editor').summernote({
		fontSizes: ['10', '14'],
		toolbar: [
			// [groupName, [list of button]]
			['style', ['bold', 'italic', 'underline', 'clear']],
			['font', ['strikethrough']],
			['fontsize', ['fontsize']],
			['para', ['ul', 'ol', 'paragraph']]
		  ],
        placeholder: 'Write here ....',
        tabsize: 2,
        height: 200
      });
    </script>
   <script>
      $(document).ready(function(){
        $('#category_id').change(function() {
          var category_id = $(this).val();
          // console.log(district_id);
          $.ajaxSetup({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
          });
          $.ajax({
            type:'POST',
            url:'/admin/getSubCategory',
            data: {category_id: category_id},
            success: function (data) {
              $( "#sub_category_id" ).html(data);
              // console.log(data);
            }
          });
        });
      });
    </script>

@endpush