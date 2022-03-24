@extends('layouts.website')
@section('content')
<!-- Intro Banner
================================================== -->
@if(isset($setting))
<div class="intro-banner dark-overlay" data-background-image="{{asset('storage/upload/logo')}}/{{$setting->banner}}">
@else
<div class="intro-banner dark-overlay">
@endif

	<!-- Transparent Header Spacer -->
	<div class="transparent-header-spacer"></div>

	<div class="container">
		
		<!-- Intro Headline -->
		<div class="row">
			<div class="col-md-12">
				<div class="banner-headline">
					<h3>
						<strong>
							@isset($setting->sub_header) {{$setting->sub_header}} @endisset
						</strong>
						<br>
						<span>@isset($setting->sub_title) {{$setting->sub_title}} @endisset</span>
					</h3>
				</div>
			</div>
		</div>
		
		<!-- Search Bar -->
		<form action="{{url('/search-store')}}" method="post">
				@csrf
		<div class="row">
			<div class="col-md-12">
				<div class="intro-banner-search-form margin-top-95">
					<!-- Search Field -->
					<div class="intro-search-field">
						<label for ="intro-keywords" class="field-title ripple-effect">
							@isset($setting->search_title) {{$setting->search_title}} @endisset
						</label>
						<input id="intro-keywords" name="searchQuery" type="text" placeholder="@isset($setting->inside_input) {{$setting->inside_input}} @endisset">
					</div>
					<!-- Button -->
					<div class="intro-search-button">
						<button type="submit" class="button ripple-effect">Search</button>
					</div>
				</div>
			</div>
		</div>
		</form>

	</div>
</div>


<!-- Content
================================================== -->

<!-- Popular Job Categories -->
<div class="section margin-top-65 margin-bottom-30">
	<div class="container">
		<div class="row">

			<!-- Section Headline -->
			<div class="col-xl-12">
				<div class="section-headline centered margin-top-0 margin-bottom-45">
					<h3>Popular Categories</h3>
				</div>
			</div>


			
			
		
 @foreach($getAllCategory as $v_cat)
			<div class="col-xl-3 col-md-6">
				<!-- Photo Box -->
				<a href="{{url('/buyer')}}/{{$v_cat->slug}}" class="photo-box small" data-background-image="" style="background: #252525;">
					<div class="photo-box-content">
						<h3>{{$v_cat->name}}</h3>
						<span>{{$v_cat->gigs_count}}</span>
					</div>
				</a>
			</div>
@endforeach

			

		</div>
	</div>
</div>
<!-- Features Cities / End -->





<!-- Icon Boxes -->
<div class="section padding-top-65 padding-bottom-65">
	<div class="container">
		<div class="row">

			<div class="col-xl-12">
				<!-- Section Headline -->
				<div class="section-headline centered margin-top-0 margin-bottom-5">
					<h3>How It Works?</h3>
				</div>
			</div>
			
			<div class="col-xl-4 col-md-4">
				<!-- Icon Box -->
				<div class="icon-box with-line">
					<!-- Icon -->
					<div class="icon-box-circle">
						<div class="icon-box-circle-inner">
							<i class="icon-line-awesome-lock"></i>
							<div class="icon-box-check"><i class="icon-material-outline-check"></i></div>
						</div>
					</div>
					<h3>Create an Account</h3>
					<p>Bring to the table win-win survival strategies to ensure proactive domination going forward.</p>
				</div>
			</div>

			<div class="col-xl-4 col-md-4">
				<!-- Icon Box -->
				<div class="icon-box with-line">
					<!-- Icon -->
					<div class="icon-box-circle">
						<div class="icon-box-circle-inner">
							<i class="icon-line-awesome-legal"></i>
							<div class="icon-box-check"><i class="icon-material-outline-check"></i></div>
						</div>
					</div>
					<h3>Post a Services</h3>
					<p>Efficiently unleash cross-media information without. Quickly maximize return on investment.</p>
				</div>
			</div>

			<div class="col-xl-4 col-md-4">
				<!-- Icon Box -->
				<div class="icon-box">
					<!-- Icon -->
					<div class="icon-box-circle">
						<div class="icon-box-circle-inner">
							<i class=" icon-line-awesome-trophy"></i>
							<div class="icon-box-check"><i class="icon-material-outline-check"></i></div>
						</div>
					</div>
					<h3>Choose an Expert</h3>
					<p>Nanotechnology immersion along the information highway will close the loop on focusing solely.</p>
				</div>
			</div>

		</div>
	</div>
</div>
<!-- Icon Boxes / End -->
@endsection