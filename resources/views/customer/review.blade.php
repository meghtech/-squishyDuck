@extends('layouts.customer')
@section('content')
	<!-- Dashboard Content
	================================================== -->
	<div class="dashboard-content-container" data-simplebar>
		<div class="dashboard-content-inner" >
			
			<!-- Dashboard Headline -->
			<div class="dashboard-headline">
				<h3>Reviews</h3>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs" class="dark">
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">Dashboard</a></li>
						<li>Reviews</li>
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
							<h3><i class="icon-material-outline-business"></i> Rate Bidder</h3>
						</div>

						<div class="content">
							<ul class="dashboard-box-list">

								@isset($order)
								@foreach($order as $v)
								<li>
									<div class="boxed-list-item">
										<!-- Content -->
										<div class="item-content">
											<h4>{{$v->gig->title}}</h4>
											<span class="company-not-rated margin-bottom-5">Not Rated</span>
										</div>
									</div>

									<a href="#small-dialog-2" data-id="{{$v->id}}" class="popup-with-zoom-anim button ripple-effect margin-top-5 margin-bottom-10 getCustomerId"><i class="icon-material-outline-thumb-up"></i> Leave a Review</a>
								</li>
								@endforeach
								@endisset
							@isset($reviews)
							@foreach($reviews as $review)
								<li>
									<div class="boxed-list-item">
										<!-- Content -->
										<div class="item-content">
											<h4>{{$review->gig->title}}</h4>
											<div class="item-details margin-top-10">
												<div class="star-rating" data-rating="5.0"></div>
												<div class="detail-item"><i class="icon-material-outline-date-range"></i> May 2018</div>
											</div>
											<div class="item-description">
												<p>{{$review->msg}}</p>
											</div>
										</div>
									</div>
								</li>

								@endforeach
								@endisset
							</ul>
						</div>
					</div>

					<!-- Pagination -->
					<div class="clearfix"></div>
					<div class="pagination-container margin-top-40 margin-bottom-0">
						<nav class="pagination">
							<ul>
								<li><a href="#" class="ripple-effect current-page">1</a></li>
								<li><a href="#" class="ripple-effect">2</a></li>
								<li><a href="#" class="ripple-effect">3</a></li>
								<li class="pagination-arrow"><a href="#" class="ripple-effect"><i class="icon-material-outline-keyboard-arrow-right"></i></a></li>
							</ul>
						</nav>
					</div>
					<div class="clearfix"></div>
					<!-- Pagination / End -->

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
<div id="small-dialog-2" class="zoom-anim-dialog mfp-hide dialog-with-tabs">

	<!--Tabs -->
	<div class="sign-in-form">

		<ul class="popup-tabs-nav">
			<li><a href="#tab1">Accept Offer</a></li>
		</ul>

		<div class="popup-tabs-container">

			<!-- Tab -->
			<div class="popup-tab-content" id="tab">

				<form action="{{route('buyer.review')}}" method="post">
					@csrf
					<input type="hidden" name="order_id" id="order_id">
					<div class="feedback-yes-no">
						<strong>Your Rating</strong>
							<div class="bidding-widget">
										
												<!-- Slider -->
												<div class="bidding-value margin-bottom-10">
													<i class="icon-material-baseline-star-border"></i><span id="biddingVal"></span></div>
												<input class="bidding-slider" name="rating" type="text" value="5" data-slider-handle="custom" data-slider-min="1" data-slider-max="5" data-slider-value="5" data-slider-step="1" data-slider-tooltip="hide" />
											</div>
					</div>

					<textarea class="with-border" placeholder="Comment" name="msg" id="message2" cols="7" required></textarea>
				

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

		$('#order_id').val(customer_id);

	});
</script>

@endpush