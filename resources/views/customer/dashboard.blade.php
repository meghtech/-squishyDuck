@extends('layouts.customer')
@section('content')


	<!-- Dashboard Content
	================================================== -->
	<div class="dashboard-content-container" data-simplebar>
		<div class="dashboard-content-inner" >

			<!-- Dashboard Headline -->
			<div class="dashboard-headline">
				<h3>Hey {{$getUser->name}}</h3>
				<span>We are glad to see you again!</span>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs" class="dark">
					<ul>
						<li><a href="#">Home</a></li>
						<li>Dashboard</li>
					</ul>
				</nav>
			</div>

			<!-- Fun Facts Container -->
			<div class="fun-facts-container">
				<div class="fun-fact" data-fun-fact-color="#36bd78">
					<div class="fun-fact-text">
						<span>Inventory</span>
						<h4>{{$data['inventory']}}</h4>
					</div>
					<div class="fun-fact-icon"><i class="icon-material-outline-gavel"></i></div>
				</div>
				<div class="fun-fact" data-fun-fact-color="#36bd78">
					<div class="fun-fact-text">
						<span>Listings</span>
						<h4>{{$data['listing']}}</h4>
					</div>
					<div class="fun-fact-icon"><span><svg xmlns="http://www.w3.org/2000/svg" width="114" height="114" viewBox="0 0 114 114">
						<g id="Group_153" data-name="Group 153" transform="translate(-1186 -429)">
						  <rect id="Rectangle_83" data-name="Rectangle 83" width="114" height="114" rx="4" transform="translate(1186 429)" fill="#fef1f1"/>
						  <g id="home" transform="translate(1216.207 459.206)">
							<path id="Path_139" data-name="Path 139" d="M52.344,26.205,27.382,1.244a.832.832,0,0,0-1.177,0L1.244,26.205a.832.832,0,0,0,.588,1.42h4.16V47.6H5.16a.832.832,0,0,0-.832.832v3.328a.832.832,0,0,0,.832.832H48.427a.832.832,0,0,0,.832-.832V48.427a.832.832,0,0,0-.832-.832H47.6V27.626h4.16a.832.832,0,0,0,.588-1.42ZM47.6,50.923H5.992V49.259H47.6ZM22.633,47.6H12.649V32.618h9.985Zm1.664,0V31.786a.832.832,0,0,0-.832-.832H11.817a.832.832,0,0,0-.832.832V47.6H7.656V27.138L26.794,8,45.931,27.138V47.6Zm22.81-21.633L27.382,6.236a.832.832,0,0,0-1.177,0L6.48,25.962H3.841L26.794,3.009,49.747,25.962Z" transform="translate(0 0)" fill="#b81b7f"/>
							<path id="Path_140" data-name="Path 140" d="M36.649,24.824a5.824,5.824,0,1,0-5.824,5.824A5.824,5.824,0,0,0,36.649,24.824Zm-9.985,0a4.16,4.16,0,1,1,4.16,4.16A4.16,4.16,0,0,1,26.664,24.824Z" transform="translate(-4.031 -3.023)" fill="#b81b7f"/>
							<path id="Path_141" data-name="Path 141" d="M48.473,37H31.832a.832.832,0,0,0-.832.832V49.481a.832.832,0,0,0,.832.832H48.473a.832.832,0,0,0,.832-.832V37.832A.832.832,0,0,0,48.473,37Zm-.832,5.824H40.985v-4.16h6.656Zm-8.321-4.16v4.16H32.664v-4.16Zm-6.656,5.824h6.656v4.16H32.664Zm8.321,4.16v-4.16h6.656v4.16Z" transform="translate(-5.038 -6.046)" fill="#b81b7f"/>
							<rect id="Rectangle_168" data-name="Rectangle 168" height="2.62" transform="translate(16.012 37.575)" fill="#b81b7f"/>
						  </g>
						</g>
					  </svg>
					  </span></div>
				</div>
				<div class="fun-fact" data-fun-fact-color="#efa80f">
					<div class="fun-fact-text">
						<span>Incoming Requests</span>
						<h4>{{$data['incommingRq']}}</h4>
					</div>
					<div class="fun-fact-icon"><i class="icon-material-outline-rate-review"></i></div>
				</div>

				<div class="fun-fact" data-fun-fact-color="#efa80f">
					<div class="fun-fact-text">
						<span>Schedule</span>
						<h4>{{$data['schedule']}}</h4>
					</div>
					<div class="fun-fact-icon"><i class="icon-material-outline-rate-review"></i></div>
				</div>

				<!-- Last one has to be hidden below 1600px, sorry :( -->
				<div class="fun-fact" data-fun-fact-color="#2a41e6">
					<div class="fun-fact-text">
						<span>This Month Earning</span>
						<h4>{{ $data['thisMonthEarning'] }}</h4>
					</div>
					<div class="fun-fact-icon"><i class="icon-feather-trending-up"></i></div>
				</div>

				<div class="fun-fact" data-fun-fact-color="#efa80f">
                    <div class="fun-fact-text">
                        <span>Recent Orders</span>
                        <h4>{{$data['recentOrder']}}</h4>
                    </div>
                    <div class="fun-fact-icon"><i class="icon-material-outline-rate-review"></i></div>
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
