@extends('layouts.website')
@section('content')

<!-- Titlebar
================================================== -->
<div class="single-page-header" data-background-image="images/single-task.jpg">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="single-page-header-inner">
					<div class="left-side">
						<div class="header-details">
							<!-- <h3>All Buyer Job Post</h3> -->
							<h3>Fulfill or bid on active buyer requests</h3>
						</div>
					</div>
					<div class="right-side">
						<div class="salary-box">
							<div class="salary-amount">{{$jobPost->count()}}</div>
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
		<div class="col-xl-12 col-lg-12 content-right-offset">
			@if (session('status'))
						    <div class="alert alert-success">
						        {{ session('status') }}
						    </div>
						@endif
			<!-- Description -->
			<div class="single-page-section">
				<div class="card">
					<div class="card-body">
						<div class="item">
							<table width="100%">
								<tr style="text-align: center;" class="margin-bottom-8">
									<th>No.</th>
									<th width="60%">Post Title</th>
									<th>Days</th>
									<th>Amount</th>
									<th>Action</th>
								</tr>
								@foreach($jobPost as $key=>$v_jobPost)
								<tr class="tableRow margin-bottom-8">
									<td>{{$key+1}}</td>
									<td>
										
										<p>{{$v_jobPost->des}}</p>
									</td>
									<td>{{$v_jobPost->totalDay}} days</td>
									<td>${{$v_jobPost->amount}}</td>
									<td>
									<!-- 	<button class="button button-sliding-icon ripple-effect padding-0">View<i class="icon-feather-eye"></i></button> -->


									<?php 

							$seller_id = auth()->id();
							$bidderCHeck = App\Models\BidderPost::where('seller_id', $seller_id)
														->where('job_post_id', $v_jobPost->id)
														->exists();		

									 ?>




									@if($bidderCHeck)
									<a href="#" class="popup-with-zoom-anim button button-sliding-icon ripple-effect padding-0">Bid Request Send<i class="icon-material-outline-arrow-right-alt"></i></a>
									@else
						<a href="#small-dialog-2" data-id="{{$v_jobPost->id}}" class="popup-with-zoom-anim button button-sliding-icon ripple-effect padding-0 getBider">Bid  <i class="icon-material-outline-arrow-right-alt"></i></a>
									@endif
									</td>
								</tr>
								@endforeach
							</table>
						</div>
					</div>
				</div>
			</div>

			

			<div class="clearfix"></div>
			
			
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
			<li><a href="#tab2">Send Bid</a></li>
		</ul>

		<div class="popup-tabs-container">

			<!-- Tab -->
			<div class="popup-tab-content" id="tab2">
				<!-- Form -->
				<form action="{{route('bid.request')}}" method="post" id="send-pm">
					@csrf
					<textarea name="des" cols="10" rows="10" placeholder="Bid Request" class="with-border" required></textarea>
					<div class="bidding-fields">
							<div class="bidding-field">
								<div class="submit-field">
									<h5>Total Days</h5>
										<input type="number" name="totalDay" id="getNumberMain" class="with-border" placeholder="Enter Total Day">
								</div>
							</div>
						</div>
						<div class="bidding-fields">
							<h5>Services</h5>
							<select name="gig_id" class="selectpicker with-border" data-size="7" title="Select Category">
								@isset($getGig)
							@foreach($getGig as $v_getGig)
							<option value="{{$v_getGig->id}}">{{$v_getGig->title}}</option>
							@endforeach
							@endisset
							</select>
						</div>
						<div class="bidding-fields">
							<div class="bidding-field">
								<div class="submit-field">
									<h5>Project Budget</h5>
										<input type="number" name="amount" class="with-border" placeholder="Enter Amount">
									</div>
							</div>
						</div>
						<input type="hidden" name="seller_id" value="{{auth()->id()}}">
						<input type="hidden" name="job_post_id" id="jobPost_id">
				</form>
				
				<!-- Button -->
				<button class="button full-width button-sliding-icon ripple-effect" type="submit" form="send-pm">Send <i class="icon-material-outline-arrow-right-alt"></i></button>

			</div>

		</div>
	</div>
</div>
<!-- Send Direct Message Popup / End -->
@endsection

@push('js')

<script>


			// A $( document ).ready() block.
$( document ).ready(function() {
		$('.getBider').on('click', function(){
		var getCustomer = $(this).data('id');
		$('#jobPost_id').val(getCustomer);
		// console.log(getCustomer);
		});
});
</script>
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