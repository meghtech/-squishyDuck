
@extends('layouts.seller')
@push('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
<style>
.card-header i{
    margin-right: 5px;
}
</style>
@endpush
@section('content')
<?php
  $getGeneral = \App\Models\General::find(1);
 ?>
 <!-- Dashboard Content
  ================================================== -->
  <div class="dashboard-content-container incoming-request" data-simplebar>
    <div class="dashboard-content-inner" style="background-color: #f2f2f2;">

      <!-- Dashboard Headline -->
      <div class="dashboard-headline">
        <h3>Incoming Requests</h3>

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

        <div class="input-with-icon">
          <input id="autocomplete-input" type="text" placeholder="Search a service or customer...">
                <i style="font-size: 30px;" class="textchat-page-dark icon-material-outline-search"></i>
		</div>
        <div class="dashboard-box margin-top-0">
            <div class="content">
				<table id="example" class="basic-table">
					<thead>
						<tr>
							<th>Title</th>
							<th>Price</th>
							<th>Schedule Date</th>
							<th>Customer</th>
							<th>Status</th>
						</tr>
					</thead>
					<tbody>
          <tr>
							<td>Air for sale</td>
							<td>$123</td>
							<td><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-calendar mr-2" viewBox="0 0 16 16">
                    <path
                        d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
                </svg> 9/17/2021</td>
							<td>Abigail Rechards</td>
							<td class="text-center"><input type="checkbox" name="action" id="action"></td>
						</tr>
						<tr>
							<td>Air for sale</td>
							<td>$123</td>
							<td><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-calendar mr-2" viewBox="0 0 16 16">
                    <path
                        d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
                </svg> 9/17/2021</td>
							<td>Abigail Rechards</td>
							<td><input style="height:20px;" type="checkbox" name="action" id="action"></td>
						</tr>
						<tr>
							<td>Air for sale</td>
							<td>$123</td>
							<td><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-calendar mr-2" viewBox="0 0 16 16">
                    <path
                        d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
                </svg> 9/17/2021</td>
							<td>Abigail Rechards</td>
							<td><input style="height:20px; width:50%;" type="checkbox" name="action" id="action"></td>
						</tr>
						<tr>
							<td>Air for sale</td>
							<td>$123</td>
							<td><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-calendar mr-2" viewBox="0 0 16 16">
                    <path
                        d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
                </svg> 9/17/2021</td>
							<td>Abigail Rechards</td>
							<td><input style="height:20px; width:50%;" type="checkbox" name="action" id="action"></td>
						</tr>
					</tbody>
    			</table>
            </div>
          </div>
        </div>
    </div>
      <!-- Row / End -->

      <!-- Footer -->
      <div class="dashboard-footer-spacer">
      </div>
      @include('layouts.small-footer')
      <!-- Footer / End -->

    </div>
  </div>
  <!-- Dashboard Content / End -->
@endsection
@push('js')
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

@endpush