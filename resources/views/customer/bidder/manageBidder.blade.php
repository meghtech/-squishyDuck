@extends('layouts.customer')
@section('content')

	<!-- Dashboard Content
	================================================== -->
	<div class="dashboard-content-container" data-simplebar>
		<div class="dashboard-content-inner" >
			
			<!-- Dashboard Headline -->
			<div class="dashboard-headline">
				<h3>Manage Bidders</h3>
				<span class="margin-top-7">Bids List <a href="#"></a></span>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs" class="dark">
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">Dashboard</a></li>
						<li>Manage Bidders</li>
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
							<h3><i class="icon-material-outline-supervisor-account"></i> @isset($bids){{$bids->count()}}@endisset Bidders</h3>
							<div class="sort-by">
								<select class="selectpicker hide-tick">
									<option>Highest First</option>
									<option>Lowest First</option>
									<option>Fastest First</option>
								</select>
							</div>
						</div>

						<div class="content">
							<ul class="dashboard-box-list">
								@isset($bids)
								@foreach($bids as $bid)
								<li>
									<!-- Overview -->
									<div class="freelancer-overview manage-candidates">
										<div class="freelancer-overview-inner">

											<!-- Avatar -->
											<div class="freelancer-avatar">
												<div class="verified-badge"></div>
												<a href="#"><img src="images/user-avatar-big-02.jpg" alt=""></a>
											</div>

											<!-- Name -->
											<div class="freelancer-name">

												<h4><a href="#">@isset($bid->seller->name) {{$bid->seller->name}} @endisset<img class="flag" src="images/flags/de.svg" alt="" title="Germany" data-tippy-placement="top"></a></h4>

												<!-- Details -->
												<span class="freelancer-detail-item"><a href="#"><i class="icon-feather-mail"></i>
													{{$bid->des}}
												</a></span>

												<!-- Rating -->
												<!-- <div class="freelancer-rating">
													<div class="star-rating" data-rating="5.0"></div>
												</div> -->

												<!-- Bid Details -->
												<ul class="dashboard-task-info bid-info">
													<li><strong>${{$bid->amount}}</strong><span>Fixed Price</span></li>
													<li><strong>{{$bid->totalDay}} Days</strong><span>Delivery Time</span></li>
												</ul>

												<!-- Buttons -->
												<div class="buttons-to-right always-visible margin-top-25 margin-bottom-0">
													<a href="#small-dialog-1" data-id="{{$bid->id}}"  class="popup-with-zoom-anim button ripple-effect getCustomerId"><i class="icon-material-outline-check"></i> Accept Offer</a>
													<a href="#small-dialog-2" data-id="{{$bid->seller_id}}" class="popup-with-zoom-anim button dark ripple-effect getBidMsg"><i class="icon-feather-mail"></i> Send Message</a>
													
												</div>
											</div>
										</div>
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
			<li><a href="#tab1">Accept Offer</a></li>
		</ul>

		<div class="popup-tabs-container">

			<!-- Tab -->
			<div class="popup-tab-content" id="tab">
				
				<!-- Welcome Text -->
				<div class="welcome-text">
					<h3>Accept Offer From David</h3>
					<div class="bid-acceptance margin-top-15">
						$3200 + 15%
					</div> <br>
					<div class="bid-acceptance margin-top-15">
						Total = $3200 
					</div>

				</div>

				<form action="{{route('order.acceptBider')}}" method="post">
					@csrf
					<input type="text" name="bid_id" id="customOffer_id">
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


<!-- Send Direct Message Popup
================================================== -->
<div id="small-dialog-2" class="zoom-anim-dialog mfp-hide dialog-with-tabs">

	<!--Tabs -->
	<div class="sign-in-form">

		<ul class="popup-tabs-nav">
			<li><a href="#tab2">Send Message</a></li>
		</ul>

		<div class="popup-tabs-container">
			<!-- Tab -->
			<form action="{{route('bidderSendMsg')}}" method="post">

				@csrf

				<input type="hidden" name="receiver_id" id="getBidMsg">
		
				<input type="hidden" name="user_id" value="{{auth()->id()}}">

			<div class="popup-tab-content" id="tab2">			
				<!-- Welcome Text -->
				<div class="welcome-text">
					<h3>Direct Message</h3>
				</div>
				<!-- Form -->
				<!-- <form action="#" method="post" id="send-pm"> -->
					<textarea name="msg" cols="10" placeholder="Message" class="with-border" required></textarea>
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

		$('#customOffer_id').val(customer_id);

	});
	$('.getBidMsg').on('click', function(){
		var customer_id = $(this).data("id");

		$('#getBidMsg').val(customer_id);

	});
</script>

@endpush