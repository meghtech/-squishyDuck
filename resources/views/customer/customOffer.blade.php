@extends('layouts.customer')
@push('css')
<style>
	.job-listing-description ul {
		list-style: none;
	}.job-listing-description ul li{
		display: inline-block;
	}
</style>
@endpush
@section('content')

<?php 
	
	$getSetting = \App\Models\General::find(1);

 ?>

	<!-- Dashboard Content
	================================================== -->
	<div class="dashboard-content-container" data-simplebar>
		<div class="dashboard-content-inner" >
			
			<!-- Dashboard Headline -->
			<div class="dashboard-headline">
				<h3>Custom Offer</h3>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs" class="dark">
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">Dashboard</a></li>
						<li>Custom Offer</li>
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
							<h3><i class="icon-material-outline-business-center"></i> All Custom Offer</h3>

						</div>

						<div class="content">
							<ul class="dashboard-box-list">
							@foreach($getCustomOffer as $v_cus)
							<?php 

$gig = $v_cus->gig_id; 
$getCus = \App\Models\Gig::where('id', $gig)->first();

$seller = $v_cus->seller_id; 
$getSeller = \App\Models\Seller::where('id', $seller)->first();

 ?>
								<li>
									<!-- Job Listing -->
									<div class="job-listing">
										<!-- Job Listing Details -->
										<div class="job-listing-details">

											<!-- Logo -->
											<a style="margin-right: 17px;" class="job-listing-company-logo">
												@isset($getSeller)
												<img src="{{asset('storage/upload/profile')}}/{{$getSeller->profile}}" alt="">
												@endisset
											</a>

											<!-- Details -->
											<div class="job-listing-description">
										<h3 class="job-listing-title"><a href="#">{{$getCus->title}}</a></h3>
										<ul>
											<!-- <li><span class="paid">Paid</span></li> -->
											<li>Amount: {{$v_cus->amount}}</li>
											<li>DateLine: {{$v_cus->totalDay}} days</li>
										</ul>
										
											</div>
										</div>
									</div>
									<!-- Buttons -->
									<div class="buttons-to-right">
										<a href="#small-dialog-1" class="button blue ripple-effect ico popup-with-zoom-anim getCustomerId" data-id="[{{$v_cus->id}},{{$v_cus->amount}}]" title="Custom Offer" data-tippy-placement="left"><i class="icon-feather-edit"></i></a>
									
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
<!-- Bid Acceptance Popup
================================================== -->
<div id="small-dialog-1" class="zoom-anim-dialog mfp-hide dialog-with-tabs">

	<!--Tabs -->
	<div class="sign-in-form">

		<ul class="popup-tabs-nav">
			<li><a href="#tab1">Accept Offer</a></li>
		</ul>

		<div class="popup-tabs-container">

			<!-- Tab -->
			<div class="popup-tab-content" id="tab">
				
				<!-- Welcome Text -->
				<div class="welcome-text">
					<h3>Accept Offer From David</h3>
					<div class="bid-acceptance margin-top-15" id="getTotal">
					
					</div> <br>
					<div class="bid-acceptance margin-top-15" id="getGrandTotal">
						
					</div>

				</div>

				<form action="{{route('customOrder.store')}}" method="post">
					@csrf
					<input type="hidden" name="custom_id" id="customOffer_id">
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

		var subTotal = customer_id[1];
		var buyerCom = "{{$getSetting->buyer_com}}";
			buyerCom = parseFloat(buyerCom);

// $getSetting
		var totalldd = "$" + customer_id[1] + "+" + "{{$getSetting->buyer_com}}"+"%";
		var percentice =(subTotal*buyerCom) / 100;
		var grandtotalldd = subTotal+percentice;


		$('#customOffer_id').val(customer_id[0]);
		$('#getTotal').text(totalldd);
		$('#getGrandTotal').text(grandtotalldd);

	});
</script>

@endpush