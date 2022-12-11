@extends('layouts.admin')
@push('css')
	<style>
		.fun-fact1 {
	background-color: #fff;
	box-shadow: 0 2px 6px rgba(0,0,0,0.08);
	border-radius: 4px;
	padding: 25px;
	margin-right: 30px;
	margin-bottom: 30px;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
	flex: 1 1 calc(25% - 30px);
    height: auto;
    cursor: default;
    transition: 0.3s;
}
.fun-fact-text1 {
    flex: 1;
    margin-right: 20px;
}
.fun-fact-icon1 {
    border-radius: 4px;
    background-color: rgba(0,0,0,0.04);
    flex: 0 0 100px;
    height: 100px;
    display: flex;
    text-align: center;
}
.fun-fact-icon1 i {
    font-size: 48px;
    align-self: center;
    margin: 0 auto;
    color: #08abc5;
}

	</style>
@endpush
@section('content')


	<!-- Dashboard Content
	================================================== -->
	<div class="dashboard-content-container" data-simplebar>
		<div class="dashboard-content-inner" >
			
			<!-- Dashboard Headline -->
			<div class="dashboard-headline">
				<h3>Hey John</h3>
				<span>We are glad to see you again!</span>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs" class="dark">
					<ul>
						<li><a href="#">Home</a></li>
						<li>Dashboard</li>
					</ul>
				</nav>
			</div>

			<div class="row">
				<div class="col-md-4">
				<div class="fun-fact1" data-fun-fact-color="#36bd78">
					<div class="fun-fact-text1">
						<span>Ongoing Project</span>
						<h4>{{$data['sellerOn']}}</h4>
					</div>
					<div class="fun-fact-icon1"><i class="icon-material-outline-gavel"></i></div>
				</div>
				</div>
				<div class="col-md-4">
					<div class="fun-fact1" data-fun-fact-color="#36bd78">
					<div class="fun-fact-text1">
						<span>Complete Project</span>
						<h4>{{$data['sellerOrder']}}</h4>
					</div>
					<div class="fun-fact-icon1"><i class="icon-material-outline-gavel"></i></div>
				</div>
				</div>
				<div class="col-md-4">
					<div class="fun-fact1" data-fun-fact-color="#efa80f">
					<div class="fun-fact-text1">
						<span>Reviews</span>
						<h4>{{$data['sellerReview']}}</h4>
					</div>
					<div class="fun-fact-icon1"><i class="icon-material-outline-rate-review"></i></div>
				</div>
				</div>	
				<div class="col-md-4">
					<div class="fun-fact1" data-fun-fact-color="#2a41e6">
					<div class="fun-fact-text1">
						<span>This Month Earning</span>
						<h4>${{$data['monthlySells'] / 100}}</h4>
					</div>
					<div class="fun-fact-icon1"><i class="icon-feather-trending-up"></i></div>
				</div>
				</div>
				<div class="col-md-4">
					<div class="fun-fact1" data-fun-fact-color="#2a41e6">
					<div class="fun-fact-text1">
						<span>Todays Earning</span>
						<h4>${{$data['dailySells'] / 100}}</h4>
					</div>
					<div class="fun-fact-icon1"><i class="icon-feather-trending-up"></i></div>
				</div>
				</div>
			</div>
	



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