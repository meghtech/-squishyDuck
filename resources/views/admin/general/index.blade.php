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
    @if(isset($setting))
    <form action="{{url('/admin/generalSave')}}" method="post" enctype="multipart/form-data">
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
              <input type="hidden" name="id" value="{{$setting->id}}">
                <div class="box_general padding_bottom">
                    <div class="header_box version_2">
                        <h2><i class="fa fa-file"></i>General Information</h2>
                    </div>
                   <div class="card">
                       <div class="card-body">
                            <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>{{ __('Website Title')}} </label>
                                <input type="text" name="title" value="{{$setting->title}}" class="form-control" placeholder="Category Name">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>{{ __('Website Meta Tags')}} </label>
                                <textarea name="metaTag" class="form-control" id="" cols="30" rows="10">
                                    {{$setting->metaTag}}
                                </textarea>
                          </div>
                        </div> 
                    </div>
                       </div>
                   </div>

                    <div class="card" style="margin-top: 30px">
                        
                       <div class="card-body">
                        <h6 class="card-title ">
                            <b>Social Media Links</b>
                        </h6>
                            <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>{{ __('Facebook Account Links')}} </label>
                                <input type="text" name="fb" value="{{$setting->fb}}" class="form-control" placeholder="Enter Facebook Account Links">
                            </div>
                        </div> <div class="col-md-4">
                            <div class="form-group">
                                <label>{{ __('Instagram Account Links')}} </label>
                                <input type="text" name="insta" value="{{$setting->insta}}" class="form-control" placeholder="Enter Instagram Account Links">
                            </div>
                        </div> <div class="col-md-4">
                            <div class="form-group">
                                <label>{{ __('Twitter Account Links')}} </label>
                                <input type="text" name="twitter" value="{{$setting->twitter}}" class="form-control" placeholder="Enter Twitter Account Links">
                            </div>
                        </div>
                     
                    </div>
                       </div>
                   </div>

                   
                    <div class="card" style="margin-top: 30px">
                        
                       <div class="card-body">
                        <h6 class="card-title ">
                            <b>All Logo And Favicon</b>
                        </h6>
                            <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>{{ __('Website Logo')}} </label>
                                <input type="file" name="logo" class="form-control" placeholder="Category Name">
                            </div>
                        </div> <div class="col-md-4">
                            <div class="form-group">
                                <label>{{ __('Website Favicon')}} </label>
                                <input type="file" name="favicon" class="form-control" placeholder="Category Name">
                            </div>
                        </div> <div class="col-md-4">
                            <div class="form-group">
                                <label>{{ __('Website Footer Logo')}} </label>
                                <input type="file" name="footerlogo" class="form-control" placeholder="Category Name">
                            </div>
                        </div>
                     
                    </div>
                       </div>
                   </div>


                    <div class="card" style="margin-top: 30px">
                        
                       <div class="card-body">
                        <h6 class="card-title ">
                            <b>Information Address</b>
                        </h6>
                            <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>{{ __('Phone Number')}} </label>
                                <input type="text" name="phone" value="{{$setting->phone}}" class="form-control" placeholder="Category Name">
                            </div>
                        </div> <div class="col-md-6">
                            <div class="form-group">
                                <label>{{ __('Website Email')}} </label>
                                <input type="text" name="email" value="{{$setting->email}}" class="form-control" placeholder="Category Name">
                            </div>
                        </div> 
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>{{ __('Our Schedules')}} </label>

                                <textarea name="schedules"  class="form-control" id="" cols="30" rows="10">{!!$setting->schedules!!}</textarea>
                            </div>
                        </div> 
                         <div class="col-md-6">
                            <div class="form-group">
                                <label>{{ __('Our Address')}} </label>

                                <textarea name="address" class="form-control" id="" cols="30" rows="10">
                                  {!!$setting->address!!}
                                </textarea>
                            </div>
                        </div>
                     
                    </div>
                       </div>
                   </div>
                  

                    
                       
                </div>
                <!-- /box_general-->
                
                    
                </div>

                <p style="margin-left:2rem">
                   <button type="submit" class="btn_1 medium">Update</button>
                </p>
              </div>
              <!-- /.container-fluid-->
          </form>
               </div>
            <!-- /.container-wrapper-->
    @endif
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
@endpush