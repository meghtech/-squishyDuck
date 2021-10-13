@extends('layouts.admin')
@section('content')
<!-- Dashboard Content
	================================================== -->
	<div class="dashboard-content-container" data-simplebar>
		<div class="dashboard-content-inner" >
			
			<!-- Dashboard Headline -->
			<div class="dashboard-headline">
				<h3>Manage Massages</h3>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs" class="dark">
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">Dashboard</a></li>
						<li>Manage Massages</li>
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
							<h3><i class="icon-material-outline-business-center"></i> My Massages Listings</h3>
						</div>

						<div class="content">
							<ul class="dashboard-box-list">
								@isset($getCon)
								@foreach($getCon as $v)

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
														{{$v->email}}
														@if($v->is_seen == 0)
						<span class="badge badge-danger">unseen</span>
														@elseif($v->is_seen == 1)
						<span class="badge badge-primary">seen</span>
						@endif

													</h3>

												<!-- Job Listing Footer -->
												<div class="job-listing-footer">
													<ul>
														<li><i class="icon-material-outline-date-range"></i> Name:{!! $v->name !!} </li>

														<li><a class="badge badge-primary" href="{{url('admin/msg-details')}}/{{$v->id}}">View</a></li>
													</ul>
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

	<!-- Edit Bid Popup

@endsection