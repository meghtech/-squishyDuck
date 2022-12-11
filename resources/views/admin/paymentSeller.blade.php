
@extends('layouts.admin')
@push('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
<style>
.card-header i{
    margin-right: 5px;
}
</style>
@endpush
@section('content')
 <!-- Dashboard Content
  ================================================== -->
  <div class="dashboard-content-container" data-simplebar>
    <div class="dashboard-content-inner" style="background-color: #fff;">
      
      <!-- Dashboard Headline -->
      <div class="dashboard-headline">
        <h3>Manage Buyer</h3>

        <!-- Breadcrumbs -->
        <nav id="breadcrumbs" class="dark">
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Dashboard</a></li>
            <li>Manage Seller</li>
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
          <div class="dashboard-box margin-top-0" style="padding: 10px">

            <!-- Headline -->
            <div class="headline">
              <h3><i class="icon-material-outline-supervisor-account"></i> Seller</h3>
              <!-- Breadcrumbs -->
              
            </div>

            <div class="content">
        <table id="example" class="hover" style="width:100%">
        <thead>
            <tr>
                <th>No.</th>
                <th>Seller Name</th>
                <th>Email</th>
                <th>Order Status</th>
                <th>Service</th>
                <th>Paid Total</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
@forelse($paymentSeller as $key => $v)
            <tr>
              <td>{{ $key+1}}</td>
              <td>{{$v->seller->name}}</td>
              <td>{{$v->seller->email}}</td>
              <td>
                @if($v->order->status == 1)
                <span class="badge badge-danger">Complated</span>
                @else
                <span class="badge badge-danger">OnGoing</span>
                @endif
              </td>
              <td>{{$v->order->gig->title}}</td>
              <td>{{   $v->paid_amount - $v->paid_amount * 15 / 100}}</td>
              <td>
                @if($v->paymentType == 1)
                    <a href="#" class="badge badge-primary">Paid</a>
                @else
                <a href="{{route('seller.paymentGive', $v->id)}}" class="badge badge-danger">Unpaid</a>
                @endif    
              </td>
            </tr>
            @empty
            <tr>
              <td>There Are no Data</td>
            </tr>
@endforelse
        </tbody>

    </table>
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
@push('js')
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script> 
$(document).ready(function() {
    $('#example').DataTable();
} ); 
</script>
@endpush