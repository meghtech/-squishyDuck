@extends('layouts.customer')
@section('content')



	<!-- Dashboard Content
	================================================== -->
	<div class="dashboard-content-container" data-simplebar>
		<div class="dashboard-content-inner" >
			
			<!-- Dashboard Headline -->
			<div class="dashboard-headline">
				<h3>My Active Bids</h3>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs" class="dark">
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">Dashboard</a></li>
						<li>My Active Bids</li>
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
							<h3><i class="icon-material-outline-gavel"></i> Job Post List</h3>
						</div>
<a href="#small-dialog-2" class="popup-with-zoom-anim button dark" data-tippy-placement="top" style="float: right;
    margin-top: 20px;
    margin-right: 20px;">Create</a>
						<div class="content">
							<ul class="dashboard-box-list">
								@foreach($jobpost as $v_jobPost)
								<li>
									<!-- Job Listing -->
									<div class="job-listing width-adjustment">

										<!-- Job Listing Details -->
										<div class="job-listing-details">

											<!-- Details -->
											<div class="job-listing-description">
												<h3 class="job-listing-title"><a href="#">{{$v_jobPost->des}} 
													@if($v_jobPost->status == 1)
													<span class="paid">Active</span>
													@else
													<span class="paid">Deactivated</span>
													@endif
												</a></h3>
											</div>
										</div>
									</div>
									
									<!-- Task Details -->
									<ul class="dashboard-task-info">
										<li><strong>${{$v_jobPost->amount}}</strong><span>Budget</span></li>
										<li><strong>{{$v_jobPost->totalDay}} Days</strong><span>Delivery Time</span></li>
									</ul>

									<!-- Buttons -->
									<div class="buttons-to-right always-visible">

										<a href="{{url('buyer/manage-bidder')}}/{{$v_jobPost->id}}"" class="button dark " title="Show Bidder"><i class="icon-feather-eye"></i></a>

										<a href="{{route('job.jobPostDelete', $v_jobPost->id)}}" class="button red ripple-effect ico" title="Deactivated Bid" data-tippy-placement="top"><i class="icon-feather-trash-2"></i></a>
									</div>
								</li>
								@endforeach
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
================================================== -->
<div id="small-dialog-2" class="zoom-anim-dialog mfp-hide dialog-with-tabs">

	<!--Tabs -->
	<div class="sign-in-form">

		<ul class="popup-tabs-nav">
			<li><a href="#tab">Create Job Post</a></li>
		</ul>

		<div class="popup-tabs-container">
<form action="{{route('job.postSave')}}" method="post">
	@csrf
			<!-- Tab -->
			<div class="popup-tab-content" id="tab">
						
					<!-- Bidding -->
					<div class="bidding-widget">
						<div class="submit-field">
								<h5>Job Post Description</h5>
								<textarea name="des" id="" cols="30" rows="6" style="border: 1px solid"></textarea>
						</div>
						<!-- Fields -->
						<div class="bidding-fields">
							<div class="bidding-field">
								<div class="submit-field">
								<h5>Category Name</h5>
										<select name="category_id" id="" class="form-control">
											@foreach($category as $cat)
											<option value="{{$cat->id}}">{{$cat->name}}</option>
											@endforeach
										</select>
									</div>
							</div>
						</div>
						<div class="bidding-fields">
							<div class="bidding-field">
								<div class="submit-field">
									<h5>Total Days</h5>
										<input type="number" name="totalDay" id="getNumberMain" class="with-border" placeholder="Enter Total Day">
								</div>
							</div>
						</div>
						<div class="bidding-fields">
							<div class="bidding-field">
								<div class="submit-field">
									<h5>Project Budget</h5>
										<input type="number" name="amount" class="with-border" placeholder="Enter Amount">
									</div>
							</div>
						</div>
					</div>
				<input type="hidden" name="customer_id" value="{{auth()->id()}}">
				<!-- Button -->
				<button class="button full-width button-sliding-icon ripple-effect" type="submit">Save Changes <i class="icon-material-outline-arrow-right-alt"></i></button>

			</div>
</form>
		</div>
	</div>
</div>
<!-- Edit Bid Popup / End -->


<!-- Edit Bid Popup
================================================== -->
<div id="small-dialog" class="zoom-anim-dialog mfp-hide dialog-with-tabs">

	<!--Tabs -->
	<div class="sign-in-form">

		<ul class="popup-tabs-nav">
			<li><a href="#tab">Edit Bid</a></li>
		</ul>

		<div class="popup-tabs-container">

			<!-- Tab -->
			<div class="popup-tab-content" id="tab">
						
					<!-- Bidding -->
					<div class="bidding-widget">
								<div class="submit-field">
										<h5>Job Post Description</h5>
										<textarea name="" id="" cols="30" rows="10"></textarea>
									</div>

						<!-- Fields -->
						<div class="bidding-fields">
							<div class="bidding-field">
								<div class="submit-field">
										<input type="number" class="with-border" placeholder="Enter Amount">
									</div>
							</div>
							<div class="bidding-field">
								<select class="selectpicker default with-border" title="Select days">
									<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
											<option value="11">11</option>
											<option value="12">12</option>
											<option value="13">13</option>
											<option value="14">14</option>
											<option value="15">15</option>
											<option value="16">16</option>
											<option value="17">17</option>
											<option value="18">18</option>
											<option value="19">19</option>
											<option value="20">20</option>
											<option value="21">21</option>
											<option value="22">22</option>
											<option value="23">23</option>
											<option value="24">24</option>
											<option value="25">25</option>
											<option value="26">26</option>
											<option value="27">27</option>
											<option value="28">28</option>
											<option value="29">29</option>
											<option value="20">20</option>
											<option value="30">30</option>
								</select>
							</div>
						</div>
				</div>
				
				<!-- Button -->
				<button class="button full-width button-sliding-icon ripple-effect" type="submit">Save Changes <i class="icon-material-outline-arrow-right-alt"></i></button>

			</div>

		</div>
	</div>
</div>
<!-- Edit Bid Popup / End -->




@endsection

@push('js')

<script>
	document.getElementById("getNumberMain").addEventListener('keyup', function(){
			var getValue = document.getElementById("getNumberMain").value;
			if(getValue >= 31){
				alert('Project Timeline Max 30 Days')
			document.getElementById("getNumberMain").value = null;
			}
		});


</script>
@endpush