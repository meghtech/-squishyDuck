@extends('layouts.customer')
@section('content')
<!-- Dashboard Content
	================================================== -->
	<div class="dashboard-content-container" data-simplebar>
		<div class="dashboard-content-inner" >
			
			<!-- Dashboard Headline -->
			<div class="dashboard-headline">
				<h3>Manage Orders</h3>

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

						<!-- Headline -->
						<div class="headline">
							<h3><i class="icon-material-outline-business-center"></i> My Order Listings</h3>
						</div>

						<div class="content">
							<ul class="dashboard-box-list">
								@isset($allorder)
								@foreach($allorder as $v)

								<li>
									<!-- Job Listing -->
									<div class="job-listing">

										<!-- Job Listing Details -->
										<div class="job-listing-details">

											<!-- Logo -->
											<a href="#" class="job-listing-company-logo">
												<img src="{{asset('content')}}/images/company-logo-05.png" alt="">
											</a>

											<!-- Details -->
											<div class="job-listing-description">
												<h3 class="job-listing-title" style="margin-bottom: 5px">
													@isset($v->gig->title)
														{{$v->gig->title}}
													@endisset
								
						<span class="badge badge-danger">Ongoing Project</span>
													</h3>

												<!-- Job Listing Footer -->
												<div class="job-listing-footer">
													<ul>
														<li><i class="icon-material-outline-date-range"></i> {!! LeftDays($v->date_accept, $v->totalDay) !!} </li>
														<li>
															@if($v->payment_status == 1)
															<span class="paid">Paid</span>
															@else
															<span class="paid">UnPaid</span>
															@endif
														</li>
													
													</ul>
												</div>
											</div>
										</div>
									</div>

									<!-- Buttons -->
									<div class="buttons-to-right always-visible">
										<a href="#small-dialog-1" data-id="{{$v->id}}"  class="popup-with-zoom-anim button ripple-effect getCustomerId"><i class="icon-material-outline-supervisor-account"></i> Accept Order</a>
									</div>
								</li>
								@endforeach
								@endisset
							</ul>
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

