@extends('layouts.seller')
@section('content')

	<!-- Dashboard Content
	================================================== -->
	<div class="dashboard-content-container" data-simplebar>
		<div class="dashboard-content-inner" >
			
			<!-- Dashboard Headline -->
			<div class="dashboard-headline">
				<h3>Bookmarks</h3>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs" class="dark">
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">Dashboard</a></li>
						<li>Bookmarks</li>
					</ul>
				</nav>
			</div>
	
			<!-- Row -->
			<div class="row">

				<!-- Dashboard Box -->
				<div class="col-xl-12">
					 @if (session('status'))
						    <div class="alert alert-success">
						        {{ session('status') }}
						    </div>
						@endif
					<div class="dashboard-box margin-top-0">

						<!-- Headline -->
						<div class="headline">
							<h3><i class="icon-material-outline-business-center"></i> All Services</h3>

						</div>

						<div class="content">
							<ul class="dashboard-box-list">
							@foreach($getCustomer as $v_cus)
							<?php 

$customer = $v_cus->customer_id;
$getCus = \App\Models\Customer::where('id', $customer)->first();

 ?>
								<li>
									<!-- Job Listing -->
									<div class="job-listing">
										<!-- Job Listing Details -->
										<div class="job-listing-details">

											<!-- Logo -->
											<a style="margin-right: 17px;" class="job-listing-company-logo">
												<img src="{{asset('storage/upload/profile')}}/{{$getCus->profile}}" alt="">
											</a>

											<!-- Details -->
											<div class="job-listing-description">
										<h3 class="job-listing-title"><a href="#">{{$getCus->name}}</a></h3>

										
											</div>
										</div>
									</div>
									<!-- Buttons -->
									<div class="buttons-to-right">
										<a href="#small-dialog-2" class="button blue ripple-effect ico popup-with-zoom-anim getCustomerId" data-id="{{$getCus->id}}" title="Custom Offer" data-tippy-placement="left"><i class="icon-feather-edit"></i></a>
									
									</div>
								</li>
							@endforeach
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
<!-- Send Direct Message Popup
================================================== -->
<div id="small-dialog-2" class="zoom-anim-dialog mfp-hide dialog-with-tabs">

	<!--Tabs -->
	<div class="sign-in-form">

		<ul class="popup-tabs-nav">
			<li><a href="#tab2">Create Custom Offer</a></li>
		</ul>

		<div class="popup-tabs-container">
			<!-- Tab -->
			<form action="{{route('storeCustom.offer')}}" method="post">

				@csrf
				<input type="hidden" name="seller_id" value="{{auth()->id()}}">
				<input type="hidden" name="customer_id" id="customer_id">

			<div class="popup-tab-content" id="tab2">			
				<div class="form-group">
					<label for="">Services </label>
					<select name="gig_id" id="">
						@foreach($getGig as $v_getGig)
						<option value="{{$v_getGig->id}}">{{$v_getGig->title}}</option>
						@endforeach
					</select>
				</div>

				<div class="form-group">
					<label for="">Project Days</label>
					<input type="number" name="totalDay" placeholder="It not might be more then 30 days">
				</div>
				<div class="form-group">
					<label for="">Amount</label>
					<input type="number" name="amount">
				</div>

				<!-- Form -->
				<!-- <form action="#" method="post" id="send-pm"> -->
					<textarea name="des" cols="10" placeholder="Message" class="with-border" required></textarea>
				<!-- </form> -->
				<!-- Button -->
				<button class="button full-width button-sliding-icon ripple-effect" type="submit">Send <i class="icon-material-outline-arrow-right-alt"></i></button>
			</div>

			</form>
		</div>
	</div>
</div>
<!-- Send Direct Message Popup / End -->
@endsection

@push('js')

<script>
	$('.getCustomerId').on('click', function(){
		var customer_id = $(this).data("id");

		$('#customer_id').val(customer_id);

	});
</script>

@endpush