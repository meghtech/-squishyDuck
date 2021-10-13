@extends('layouts.website')
@section('content')

<!-- Titlebar
================================================== -->
<div class="single-page-header" data-background-image="images/single-job.jpg">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="single-page-header-inner">
					<div class="left-side">
						<div class="header-image"><a href="single-company-profile.html"><img src="{{asset('content')}}/images/company-logo-03a.png" alt=""></a></div>
						<div class="header-details">
							<h3>{{$gig->title}}</h3>
							<h5><a href="{{url('/user')}}/{{$gig->seller->user_name}}">{{$gig->seller->name}}</a></h5>
							<ul>
								<li><div class="star-rating" data-rating="4.9"></div></li>
							
							</ul>
						</div>
					</div>
					<div class="right-side">
						<div class="salary-box">
							<div class="salary-type">Service Budget</div>
							<div class="salary-amount">${{$gig->price}}</div>
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

			<div class="single-page-section">
				<h3 class="margin-bottom-25">Service Description</h3>
				<p>
					{!! $gig->description !!}
				</p>
			</div>



			<div class="single-page-section">
				<h3 class="margin-bottom-25">Similar Jobs</h3>

				<!-- Listings Container -->
				<div class="listings-container grid-layout">
					@isset($gigRandom)
						@foreach($gigRandom as $gigV)
							<!-- Job Listing -->
							<a href="{{url('/service-details')}}/{{$gigV->slug}}" class="job-listing">

								<!-- Job Listing Details -->
								<div class="job-listing-details">
									<!-- Logo -->
									<div class="job-listing-company-logo">
										<img src="{{asset('storage/upload/Gig')}}/{{$gigV->image}}" alt="">
									</div>
								</div>

							
					<!-- Job Listing Footer -->
					<div class="job-listing-footer">
						<h4 class="job-listing-company">{{$gigV->seller->user_name}} <span class="verified-badge" title="Verified Employer" data-tippy-placement="top"></span></h4><span class="bookmark-icon"></span>
						<ul>
							<li><h5 class="job-listing-title">{{$gigV->title}}</h5></li>
					<!-- 		<li><i class="icon-material-outline-location-on"></i> San Francissco</li>
							<li><i class="icon-material-outline-business-center"></i> Full Time</li> -->
							<li><i class="icon-material-outline-account-balance-wallet"></i> ${{$gigV->price}}</li>
							<li><i class="icon-material-outline-access-time"></i> {{$gigV->totalDay}} days</li>
						</ul>
					</div>
							</a>
						@endforeach
					@endisset
		
					</div>
					<!-- Listings Container / End -->

				</div>
		</div>
		

		<!-- Sidebar -->
		<div class="col-xl-4 col-lg-4">
			<div class="sidebar-container">

				<?php 

				// $seller = Seller::where('id', $gig->id)->first();

				 ?>
				<a href="{{url('/user')}}/{{$gig->seller->user_name}}" class="apply-now-button ">Contact<i class="icon-material-outline-arrow-right-alt"></i></a>
				<!-- Sidebar Widget -->
				<div class="sidebar-widget">
					<div class="job-overview">
						<div class="job-overview-headline">Service Summary</div>
						<div class="job-overview-inner">
							<ul>
								<li>
									<i class="icon-material-outline-access-time"></i>
									<span>Delivery Time</span>
									<h5>{{$gig->totalDay}}Day Delivery</h5>
								</li>
							</ul>
						</div>
					</div>
				</div>

				<!-- Sidebar Widget -->
				<div class="sidebar-widget">
				
					<!-- Copy URL -->
					<div class="copy-url">
						<input id="copy-url" type="text" value="" class="with-border">
						<button class="copy-url-button ripple-effect" data-clipboard-target="#copy-url" title="Copy to Clipboard" data-tippy-placement="top"><i class="icon-material-outline-file-copy"></i></button>
					</div>

					<!-- Share Buttons -->
					<div class="share-buttons margin-top-25">
						<div class="share-buttons-trigger"><i class="icon-feather-share-2"></i></div>
						<div class="share-buttons-content">
							<span>Interesting? <strong>Share It!</strong></span>
							<ul class="share-buttons-icons">
								<li><a href="#" data-button-color="#3b5998" title="Share on Facebook" data-tippy-placement="top"><i class="icon-brand-facebook-f"></i></a></li>
								<li><a href="#" data-button-color="#1da1f2" title="Share on Twitter" data-tippy-placement="top"><i class="icon-brand-twitter"></i></a></li>
								<li><a href="#" data-button-color="#dd4b39" title="Share on Google Plus" data-tippy-placement="top"><i class="icon-brand-google-plus-g"></i></a></li>
								<li><a href="#" data-button-color="#0077b5" title="Share on LinkedIn" data-tippy-placement="top"><i class="icon-brand-linkedin-in"></i></a></li>
							</ul>
						</div>
					</div>
				</div>

			</div>
		</div>

	</div>
</div>

<!-- Sign In Popup
================================================== -->
<div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide dialog-with-tabs">

	<!--Tabs -->
	<div class="sign-in-form">

		<ul class="popup-tabs-nav">
			<li><a href="#login">Log In</a></li>
			<li><a href="#register">Register</a></li>
		</ul>

		<div class="popup-tabs-container">

			<!-- Login -->
			<div class="popup-tab-content" id="login">
				
				<!-- Welcome Text -->
				<div class="welcome-text">
					<h3>We're glad to see you again!</h3>
					<span>Don't have an account? <a href="#" class="register-tab">Sign Up!</a></span>
				</div>
					
				<!-- Form -->
				<form method="post" id="login-form">
					<div class="input-with-icon-left">
						<i class="icon-material-baseline-mail-outline"></i>
						<input type="text" class="input-text with-border" name="emailaddress" id="emailaddress" placeholder="Email Address" required/>
					</div>

					<div class="input-with-icon-left">
						<i class="icon-material-outline-lock"></i>
						<input type="password" class="input-text with-border" name="password" id="password" placeholder="Password" required/>
					</div>
					<a href="#" class="forgot-password">Forgot Password?</a>
				</form>
				
				<!-- Button -->
				<button class="button full-width button-sliding-icon ripple-effect" type="submit" form="login-form">Log In <i class="icon-material-outline-arrow-right-alt"></i></button>
				

			</div>

			<!-- Register -->
			<div class="popup-tab-content" id="register">
				
				<!-- Welcome Text -->
				<div class="welcome-text">
					<h3>Let's create your Buyer account!</h3>
				</div>
					
				<!-- Form -->
				<form method="post" id="register-account-form">
					<div class="input-with-icon-left">
						<i class="icon-material-baseline-mail-outline"></i>
						<input type="text" class="input-text with-border" name="emailaddress-register" id="emailaddress-register" placeholder="Email Address" required/>
					</div>

					<div class="input-with-icon-left" title="Should be at least 8 characters long" data-tippy-placement="bottom">
						<i class="icon-material-outline-lock"></i>
						<input type="password" class="input-text with-border" name="password-register" id="password-register" placeholder="Password" required/>
					</div>

					<div class="input-with-icon-left">
						<i class="icon-material-outline-lock"></i>
						<input type="password" class="input-text with-border" name="password-repeat-register" id="password-repeat-register" placeholder="Repeat Password" required/>
					</div>
				</form>
				
				<!-- Button -->
				<button class="margin-top-10 button full-width button-sliding-icon ripple-effect" type="submit" form="register-account-form">Register <i class="icon-material-outline-arrow-right-alt"></i></button>
				

			</div>

		</div>
	</div>
</div>
<!-- Sign In Popup / End -->

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
			<div class="popup-tab-content" id="tab2">
				
				<!-- Welcome Text -->
				<div class="welcome-text">
					<h3>Direct Message To David</h3>
				</div>
					
				<!-- Form -->
				<!-- <form action="#" method="post" id="send-pm"> -->
					<textarea name="textarea" cols="10" placeholder="Message" class="with-border" required></textarea>
				<!-- </form> -->
				
				<!-- Button -->
				<button class="button full-width button-sliding-icon ripple-effect" type="submit" form="send-pm">Send <i class="icon-material-outline-arrow-right-alt"></i></button>

			</div>

		</div>
	</div>
</div>
<!-- Send Direct Message Popup / End -->





@endsection