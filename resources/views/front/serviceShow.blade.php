@extends('layouts.website')
@section('content')
<div class="full-page-container">

	<div class="full-page-sidebar">
		<div class="full-page-sidebar-inner" data-simplebar>
<form action="{{route('search.store')}}" method="post">
	@csrf
			<div class="sidebar-container">			

				<!-- Salary -->
				<div class="sidebar-widget">
					<h3>Budget</h3>
					<div class="margin-top-55"></div>

					<!-- Range Slider -->
					<input class="range-slider" name="searchQuery1" type="text" value="" data-slider-currency="$"  data-slider-max="2000" data-slider-step="10" data-slider-value="[10,15000]"/>
				</div>


			</div>
			<!-- Sidebar Container / End -->

			<!-- Search Button -->
			<div class="sidebar-search-button-container">
				<button type="submit" class="button ripple-effect">Search</button>
			</div>
			<!-- Search Button / End-->

</form>
		</div>
	</div>
	<!-- Full Page Sidebar / End -->
	
	<!-- Full Page Content -->
	<div class="full-page-content-container" data-simplebar>
		<div class="full-page-content-inner">
			@isset($category)
			<h3 class="page-title">{{$category->name}} Results({{$category->gigs_count}})</h3>
			@endisset
			@isset($getGig)
			<h3 class="page-title">Search Results({{$getGig->count()}})</h3>
			@endisset
			<div class="listings-container grid-layout margin-top-35">

				@if(isset($category))
					@foreach($category->gigs as $v_cat)
				

				<!-- Job Listing -->
				<a href="{{url('/service-details')}}/{{$v_cat->slug}}" class="job-listing">

					<!-- Job Listing Details -->
					<div class="job-listing-details">
						<!-- Logo -->
						<div class="job-listing-company-logo">

						
							<img src="{{asset('content/website/img')}}/{{$v_cat->image}}" alt="">
						</div>

						<!-- Details -->
						<div class="job-listing-description">
							
							
						</div>
					</div>
					<?php 


					 ?>

					<!-- Job Listing Footer -->
					<div class="job-listing-footer">
						<h4 class="job-listing-company">{{$v_cat->seller->user_name}} <span class="verified-badge" title="Verified Employer" data-tippy-placement="top"></span></h4><span class="bookmark-icon"></span>
						<ul>
							<li><h5 class="job-listing-title">{{$v_cat->title}}</h5></li>
					<!-- 		<li><i class="icon-material-outline-location-on"></i> San Francissco</li>
							<li><i class="icon-material-outline-business-center"></i> Full Time</li> -->
							<li><i class="icon-material-outline-account-balance-wallet"></i> ${{$v_cat->price}}</li>
							<li><i class="icon-material-outline-access-time"></i> {{$v_cat->totalDay}} days</li>
						</ul>
					</div>
				</a>	
				@endforeach
			@endif

			@if(isset($getGig))
					@foreach($getGig as $v_cat)
				

				<!-- Job Listing -->
				<a href="{{url('/service-details')}}/{{$v_cat->slug}}" class="job-listing">

					<!-- Job Listing Details -->
					<div class="job-listing-details">
						<!-- Logo -->
						<div class="job-listing-company-logo">
							<img src="{{asset('storage/upload/Gig')}}/{{$v_cat->image}}" alt="">
						</div>

						<!-- Details -->
						<div class="job-listing-description">
							
							
						</div>
					</div>
					<?php 


					 ?>

					<!-- Job Listing Footer -->
					<div class="job-listing-footer">
						<h4 class="job-listing-company">{{$v_cat->seller->user_name}} <span class="verified-badge" title="Verified Employer" data-tippy-placement="top"></span></h4><span class="bookmark-icon"></span>
						<ul>
							<li><h5 class="job-listing-title">{{$v_cat->title}}</h5></li>
					<!-- 		<li><i class="icon-material-outline-location-on"></i> San Francissco</li>
							<li><i class="icon-material-outline-business-center"></i> Full Time</li> -->
							<li><i class="icon-material-outline-account-balance-wallet"></i> ${{$v_cat->price}}</li>
							<li><i class="icon-material-outline-access-time"></i> {{$v_cat->totalDay}} days</li>
						</ul>
					</div>
				</a>	
				@endforeach
			@endif

			</div>

			<!-- Pagination -->
			<div class="clearfix"></div>
		<!-- 	<div class="pagination-container margin-top-20 margin-bottom-20">
				<nav class="pagination">
					<ul>
						<li class="pagination-arrow"><a href="#" class="ripple-effect"><i class="icon-material-outline-keyboard-arrow-left"></i></a></li>
						<li><a href="#" class="ripple-effect">1</a></li>
						<li><a href="#" class="ripple-effect current-page">2</a></li>
						<li><a href="#" class="ripple-effect">3</a></li>
						<li><a href="#" class="ripple-effect">4</a></li>
						<li class="pagination-arrow"><a href="#" class="ripple-effect"><i class="icon-material-outline-keyboard-arrow-right"></i></a></li>
					</ul>
				</nav>
			</div> -->
			<div class="clearfix"></div>
			<!-- Pagination / End -->


		</div>
	</div>
	<!-- Full Page Content / End -->
</div>


@endsection