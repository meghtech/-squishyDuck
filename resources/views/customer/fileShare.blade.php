@extends('layouts.customer')
@section('content')
<!-- Dashboard Content
	================================================== -->
	<div class="dashboard-content-container" data-simplebar>
		<div class="dashboard-content-inner" >
			
			<!-- Dashboard Headline -->
			<div class="dashboard-headline">
				<h3>Manage File Share</h3>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs" class="dark">
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">Dashboard</a></li>
						<li>Manage Orders</li>
					</ul>
				</nav>
			</div>
	
			<!-- Row -->
			<div class="row">

				<!-- Dashboard Box -->
				<div class="col-xl-12">
					<div class="dashboard-box margin-top-0">
						<div class="headline">
							<h3><i class="icon-material-outline-business-center"></i> Manage File Share</h3>
						</div>
					</div>
				</div>
				<div class="col-md-12" style="margin-top:30px">
			<form action="{{route('file.shareStore')}}" enctype="multipart/form-data" method="post">
							@csrf
					<div class="row">
			<input type="hidden" name="seller_id" value="{{$id}}">
			<input type="hidden" name="customer_id" value="{{auth()->id()}}">
						<div class="col-md-10">
					<div class="uploadButton margin-top-30">
											<input class="uploadButton-input" name="file" type="file"  id="upload">
											<label class="uploadButton-button ripple-effect" for="upload">Upload Files</label>
											<span class="uploadButton-file-name">Images or documents that might be helpful in describing your job</span>
										</div>
						</div>
						<div class="col-md-2">
					<button type="submit" class="button ripple-effect big margin-top-30"><i class="icon-feather-plus"></i>Send</button>
						</div>
					</div>
</form>
				</div>
				<div class="col-md-12" style="margin-top:30px">
					<div class="card">
					<div class="card-body">
						<div class="item">
							<table width="100%">
		
							@foreach($getFile as $v)
								<tr class="tableRow margin-bottom-8">
									<td width="20%">
										@isset($v->customer->profile)
										 <div class="message-avatar"><i class="status-icon status-online"></i><img src="{{asset('storage/upload/profile')}}/{{$v->customer->profile}}" alt="" /></div>
										@endisset

										@isset($v->seller->profile)
										 <div class="message-avatar"><i class="status-icon status-online"></i><img src="{{asset('content')}}/images/user-avatar-small-01.jpg" alt="" /></div>
										@endisset
									

									</td>
									<td>
									
							{{ $v->created_at->diffForHumans() }}
										

									</td>
									<td width="20%">
									

									
									<a href="{{route('download.file', $v->id)}}" class=" button button-sliding-icon padding-0">Download<i class="icon-material-outline-arrow-right-alt"></i></a>

									</td>
								</tr>
								@endforeach
							</table>
						</div>
					</div>
				</div>
				</div>

			</div>
			<!-- Row / End -->

			<!-- Footer -->
			<div class="dashboard-footer-spacer"></div>
			<div class="small-footer margin-top-15">
				<div class="small-footer-copyrights">
					 © 2021 <strong>Squishy Duck</strong>. All Rights Reserved.
				</div>
				<ul class="footer-social-links">
					<li>
						<a href="#" title="Facebook" data-tippy-placement="top">
							<i class="icon-brand-facebook-f"></i>
						</a>
					</li>
					<li>
						<a href="#" title="Twitter" data-tippy-placement="top">
							<i class="icon-brand-twitter"></i>
						</a>
					</li>
					<li>
						<a href="#" title="Google Plus" data-tippy-placement="top">
							<i class="icon-brand-google-plus-g"></i>
						</a>
					</li>
					<li>
						<a href="#" title="LinkedIn" data-tippy-placement="top">
							<i class="icon-brand-linkedin-in"></i>
						</a>
					</li>
				</ul>
				<div class="clearfix"></div>
			</div>
			<!-- Footer / End -->

		</div>
	</div>
	<!-- Dashboard Content / End -->

	<!-- Bid Acceptance Popup
================================================== -->
<div id="small-dialog-1" class="zoom-anim-dialog mfp-hide dialog-with-tabs">
<!--Tabs -->
	<div class="sign-in-form">

		<ul class="popup-tabs-nav">
			<li><a href="#tab1">Accept Order</a></li>
		</ul>

		<div class="popup-tabs-container">

			<!-- Tab -->
			<div class="popup-tab-content" id="tab">
				
				<!-- Welcome Text -->
				<div class="welcome-text">
					<div class="bid-acceptance margin-top-15">
						Done
					</div>

				</div>

				<form action="{{route('order.acceptBuyer')}}" method="post">
					@csrf
					<input type="hidden" name="id" id="customOffer_id">
					<div class="radio">
						<input id="radio-1" name="radio" type="radio" required>
						<label for="radio-1"><span class="radio-label"></span>  I have read and agree to the Terms and Conditions</label>
					</div>
				

				<!-- Button -->
				<button class="margin-top-15 button full-width button-sliding-icon ripple-effect" type="submit">Accept <i class="icon-material-outline-arrow-right-alt"></i></button>
</form>
			</div>

		</div>
	</div>
</div>
<!-- Bid Acceptance Popup / End -->
@endsection
@push('js')

<script>
	$('.getCustomerId').on('click', function(){
		var customer_id = $(this).data("id");

		$('#customOffer_id').val(customer_id);

	});

</script>

@endpush

