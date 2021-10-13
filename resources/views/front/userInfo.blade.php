@extends('layouts.website')
@section('content')

<!-- Titlebar
================================================== -->
<div class="single-page-header freelancer-header" data-background-image="images/single-freelancer.jpg">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="single-page-header-inner">
					<div class="left-side">
						<div class="header-image freelancer-avatar">
								@if(isset($seller))
								<img src="{{asset('storage/upload/profile')}}/{{$seller->profile}}" alt="">
								@elseif(isset($buyer))
								<img src="{{asset('storage/upload/profile')}}/{{$buyer->profile}}" alt="">
								@endif
							

						</div>
						<div class="header-details">
							<h3>

								@if(isset($seller))
								{{$seller->name}}
								@elseif(isset($buyer))
								{{$buyer->name}}
								@endif
								@isset($seller)
								<span>{{$seller->tagline}} </span></h3>
								@endisset
							<ul>
								@if(isset($seller))
								<li><div class="star-rating" 
									data-rating="{{round($data['getAvarage'], 1)}}"></div></li>
								<li style="font-size: 14px">
									{{$seller->country}}
								</li>
								@elseif(isset($buyer))
								<li style="font-size: 14px">
									{{$buyer->country}}
								</li>
								@endif
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- Page Content
================================================== -->
<div class="container">
	<div class="row">
		
		<!-- Content -->
		<div class="col-xl-8 col-lg-8 content-right-offset">
			
			<!-- Page Content -->
			<div class="single-page-section">
				<h3 class="margin-bottom-25">About</h3>

								@if(isset($seller))
								<p>{{$seller->about}}</p>
								@elseif(isset($buyer))
								<p>{{$buyer->about}}</p>
								@endif

			</div>

@if(isset($seller))
			<!-- Boxed List -->
			<div class="boxed-list margin-bottom-60">
				<div class="boxed-list-headline">
					<h3><i class="icon-material-outline-thumb-up"></i> Work History and Feedback</h3>
				</div>
				<ul class="boxed-list-ul">
					@forelse($buyerReview as $vr)

					<?php 
					$date = \Carbon\Carbon::parse($vr->created_at, 'UTC');
					 ?>
					<li>
						<div class="boxed-list-item">
							<!-- Content -->
							<div class="item-content">
								<h4><span>@ {{$vr->customer->name}}</span></h4>
								<div class="item-details margin-top-10">
									<div class="star-rating" data-rating="{{$vr->rating}}"></div>
									<div class="detail-item"><i class="icon-material-outline-date-range"></i>
{{$date->isoFormat('MMMM Do YYYY')}} </div>


								</div>
								<div class="item-description">
									<p>{{$vr->msg}} </p>
								</div>
							</div>
						</div>
					</li>
					@empty
					<li>
						<div class="boxed-list-item">
							<!-- Content -->
							<div class="item-content">
								<div class="item-description">
									<p>No Reviews</p>
								</div>
							</div>
						</div>
					</li>
					@endforelse

				</ul>

				<!-- Pagination -->
				<div class="clearfix"></div>
				<div class="pagination-container margin-top-40 margin-bottom-10">
					<nav class="pagination">
						<ul>
							<li><a href="#" class="ripple-effect current-page">1</a></li>
							<li><a href="#" class="ripple-effect">2</a></li>
							<li class="pagination-arrow"><a href="#" class="ripple-effect"><i class="icon-material-outline-keyboard-arrow-right"></i></a></li>
						</ul>
					</nav>
				</div>
				<div class="clearfix"></div>
				<!-- Pagination / End -->

			</div>
			<!-- Boxed List / End -->
	@endif

		</div>
	

		<!-- Sidebar -->
		<div class="col-xl-4 col-lg-4">
			<div class="sidebar-container">
				
				<!-- Profile Overview -->
				<div class="profile-overview">
					@isset($seller)
					<div class="overview-item"><strong>${{$seller->hour_rate}}</strong><span>Hourly Rate</span></div>
					@endisset
					<div class="overview-item"><strong>53</strong><span>Jobs Done</span></div>
					<div class="overview-item"><strong>22</strong><span>Rehired</span></div>
				</div>
				@auth

				<?php 

				 	$selleruser = auth()->id();
                    $customeruser = auth()->id();

                    $getSeller = \App\Models\Seller::where('id', $selleruser)->exists();
                    $getCustomer = \App\Models\Customer::where('id', $customeruser)->exists();
				 ?>

				 @if($getCustomer)
				<!-- Button -->
				<a href="#small-dialog-2" class="apply-now-button popup-with-zoom-anim margin-bottom-50">Mesage<i class="icon-material-outline-arrow-right-alt"></i></a>
				@else
				<a class="apply-now-button popup-with-zoom-anim margin-bottom-50">You Need To Buyer Account<i class="icon-material-outline-arrow-right-alt"></i></a>
				@endif
				@endauth
			</div>
		</div>

	</div>
</div>


<!-- Spacer -->
<div class="margin-top-15"></div>
<!-- Spacer / End-->

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
			<form action="{{url('sendMsg')}}" method="post">

				@csrf

				@if(isset($seller))
				<input type="hidden" name="receiver_id" value="{{$seller->id}}">
				@endif
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