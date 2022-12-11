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
<a href="{{url('/seller/services/create')}}" class="button ripple-effect" style="float: right;
    margin-top: 20px;
    margin-right: 20px;">Create</a>
						<div class="content">
							<ul class="dashboard-box-list">
								@forelse($gigs as $gig)
								<li>
									<!-- Job Listing -->
									<div class="job-listing">
										<!-- Job Listing Details -->
										<div class="job-listing-details">

											<!-- Logo -->
											<a style="margin-right: 17px;" class="job-listing-company-logo">
												<img src="{{asset('storage/upload/Gig')}}/{{$gig->image}}" alt="">
											</a>

											<!-- Details -->
											<div class="job-listing-description">
												<h3 class="job-listing-title"><a href="#">{{$gig->title}}	</a>


												</h3>
													@if($gig->status == 1)
													<span class="badge badge-primary">Active</span>
													@elseif($gig->status == 2)
													<span class="badge badge-info">Deactive</span>
													@endif

												<!-- Job Listing Footer -->
												<div class="job-listing-footer">
													<ul>
														<li><i class="icon-material-outline-location-on"></i> ${{$gig->price}}</li>
														<li><i class="icon-material-outline-access-time"></i> {{$gig->totalDay}} days</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									<!-- Buttons -->
									<div class="buttons-to-right">
										<a href="{{route('services.edit', $gig->id)}}" class="button blue ripple-effect ico" title="Edit" data-tippy-placement="left"><i class="icon-feather-edit"></i></a>

										<a href="{{route('services.status', $gig->id)}}" class="button red ripple-effect ico" title="Remove" data-tippy-placement="left"><i class="icon-material-outline-autorenew"></i></a>
									
									</div>
								</li>
								@empty	
								<li><strong>No Data Found</strong></li>
								@endforelse
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

@endsection