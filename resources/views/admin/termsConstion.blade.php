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
				<h3>Post a Service</h3>
				<!-- Breadcrumbs -->
				<nav id="breadcrumbs" class="dark">
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">Dashboard</a></li>
						<li>Post a Service</li>
					</ul>
				</nav>
			</div>
			  @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
	<form action="{{ route('terms.save')}}" method="post" enctype="multipart/form-data">
    @csrf

<input type="hidden" name="seller_id" value="{{auth()->id()}}">




			<!-- Row -->
			<div class="row">

				<!-- Dashboard Box -->
				<div class="col-xl-12">
					@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
					<div class="dashboard-box margin-top-0">

						<!-- Headline -->
						<div class="headline">
							<h3><i class="icon-feather-folder-plus"></i> Service Submission Form</h3>
						</div>

						<div class="content with-padding padding-bottom-10">
							<div class="row">

								<div class="col-xl-12">
									<div class="submit-field">
										<h5>Job Description</h5>
										<textarea name="description" id="summernote"  cols="30" rows="20">{{$general->tNc}}</textarea>
									
									</div>
								</div>

								<div class="col-xl-12">
									<div class="submit-field">
										<input type="hidden" name="title" class="with-border" value="">
									</div>
								</div>

								<div class="col-xl-4">
									<div class="submit-field">
										<input type="hidden" name="totalDay" class="with-border" value="" id="getNumberMain">
									</div>
								</div>




							</div>
						</div>
					</div>
				</div>

				<div class="col-xl-12">
					<button type="submit" class="button ripple-effect big margin-top-30"><i class="icon-feather-plus" style="text-decoration: none;"></i>Update</button>
				</div>

			</div>
			<!-- Row / End -->
		</form>



		</div>
	</div>
	<!-- Dashboard Content / End -->

@endsection

@push('js')
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>


<script>
	document.getElementById("getNumberMain").addEventListener('keyup', function(){
			var getValue = document.getElementById("getNumberMain").value;
			if(getValue >= 31){
				alert('Project Timeline Max 30 Days')
			document.getElementById("getNumberMain").value = null;
			}
		});

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