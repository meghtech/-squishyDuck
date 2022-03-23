@extends('layouts.seller')
@section('content')
	<!-- Dashboard Content
	================================================== -->
	<div class="dashboard-content-container" data-simplebar>
		<div class="dashboard-content-inner" >
			
			<!-- Dashboard Headline -->
			<div class="dashboard-headline">
				<h3>Settings</h3>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs" class="dark">
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">Dashboard</a></li>
						<li>Settings</li>
					</ul>
				</nav>
			</div>
	
			<!-- Row -->
			<div class="row">
				<div class="col-md-12">
					@if ($errors->any())
						    <div class="alert alert-danger">
						        <ul>
						            @foreach ($errors->all() as $error)
						                <li>{{ $error }}</li>
						            @endforeach
						        </ul>
						    </div>
						@endif
				</div>

					<form action="{{route('sellerSetting.save')}}" method="post"  enctype="multipart/form-data">
						@csrf
				<!-- Dashboard Box -->
				<div class="col-xl-12">
					<div class="dashboard-box margin-top-0">
<input type="hidden" name="seller_id" value="{{$sellerInfo->id}}">
						<!-- Headline -->
						<div class="headline">
							<h3><i class="icon-material-outline-account-circle"></i> My Account</h3>
						</div>

						<div class="content with-padding padding-bottom-0">

							<div class="row">

								<div class="col-auto">
									<div class="avatar-wrapper" data-tippy-placement="bottom" title="Change Avatar">
										
										<img class="profile-pic" src="{{asset('content/images')}}/{{$sellerInfo->profile}}" alt="" />
										<div class="upload-button"></div>
										<input class="file-upload" name="profile" type="file"/>
										<!-- <input type="file" name="profile"> -->
									</div>
								</div>

								<div class="col">
									<div class="row">

										<div class="col-xl-6">
											<div class="submit-field">
												<h5>Full Name</h5>
												<input type="text" name="name" class="with-border" value="{{$sellerInfo->name}}">
											</div>
										</div>

										<div class="col-xl-6">
											<div class="submit-field">
												<h5>Email</h5>
												<input type="text" name="email" class="with-border" value="{{$sellerInfo->email}}">
											</div>
										</div>

									</div>
								</div>
							</div>

						</div>
					</div>
				</div>

				<!-- Dashboard Box -->
				<div class="col-xl-12">
					<div class="dashboard-box">

						<!-- Headline -->
						<div class="headline">
							<h3><i class="icon-material-outline-face"></i> My Profile</h3>
						</div>

						<div class="content">
							<ul class="fields-ul">
							<li>
								<div class="row">
									<div class="col-xl-12">
										<div class="submit-field">
											<div class="bidding-widget">
												<!-- Headline -->
												<span class="bidding-detail">Set your <strong>minimal hourly rate</strong></span>

												<!-- Slider -->
												<div class="bidding-value margin-bottom-10">$<span id="biddingVal"></span></div>
												<input class="bidding-slider" name="hour_rate" type="text" value="{{$sellerInfo->hour_rate}}" data-slider-handle="custom" data-slider-currency="$" data-slider-min="5" data-slider-max="150" data-slider-value="{{$sellerInfo->hour_rate}}" data-slider-step="1" data-slider-tooltip="hide" />
											</div>
										</div>
									</div>

								
								</div>
							</li>
							<li>
								<div class="row">
									<div class="col-xl-6">
										<div class="submit-field">
											<h5>Tagline</h5>
											<input type="text" name="tagline" class="with-border" value="{{$sellerInfo->tagline}}">
										</div>
									</div>

									<div class="col-xl-6">
										<div class="submit-field">
											<h5>Nationality</h5>
											<input type="text" name="country" class="with-border" value="{{$sellerInfo->country}}">
										</div>
									</div>

									<div class="col-xl-12">
										<div class="submit-field">
											<h5>Introduce Yourself</h5>
											<textarea name="about" cols="30" rows="5" class="with-border">{{$sellerInfo->about}}</textarea>
										</div>
									</div>

								</div>
							</li>
						</ul>
						</div>
					</div>
				</div>
				<div class="col-xl-12">
					<button type="submit" class="button ripple-effect big margin-top-30">Save Changes</button>
				</div>
					</form>

			 <form action="{{url('/seller/change-password')}}" method="post">
        @csrf
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
					<div id="test1" class="dashboard-box">

						<!-- Headline -->
						<div class="headline">
							<h3><i class="icon-material-outline-lock"></i> Password & Security</h3>
						</div>

						<div class="content with-padding">
							<div class="row">
								<div class="col-xl-4">
									<div class="submit-field">
										<h5>Current Password</h5>
										<input type="password" name="old_password"class="with-border">
									</div>
								</div>

								<div class="col-xl-4">
									<div class="submit-field">
										<h5>New Password</h5>
										<input type="password" name="password" class="with-border">
									</div>
								</div>

								<div class="col-xl-4">
									<div class="submit-field">
										<h5>Repeat New Password</h5>
										<input name="password_confirmation"  type="password" class="with-border">
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
				
				<!-- Button -->
				<div class="col-xl-12">
					<button type="submit" class="button ripple-effect big margin-top-30">Save Changes</button>
				</div>

						
					</form>
			</div>
			<!-- Row / End -->

			<!-- Footer -->
			<div class="dashboard-footer-spacer"></div>
			<div class="small-footer margin-top-15">
				<div class="small-footer-copyrights">
					© 2018 <strong>Hireo</strong>. All Rights Reserved.
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
@endsection