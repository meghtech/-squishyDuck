
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
    <div class="row margin-bottom-30">
        <!-- Dashboard Box -->
        <div class="col-xl-12">
          <div class="row">
            <div class="col-md-8">
              <div class="widget">
                <ul>
                  <li>Name:</li>
                  <li>Email:</li>
                  <li>Phone:</li>
                  <li>Address:</li>
                  <li>Address:</li>
                  <li>stripe_acc:</li>
                </ul>
              </div>
          </div>
          <div class="col-md-4">
                  <div class="avatar-wrapper" data-tippy-placement="bottom" data-tippy="" data-original-title="Change Avatar">
                    <img class="profile-pic" src="{{asset('content')}}/images/user-avatar-placeholder.png" alt="">
                    
                  </div>
          </div>

          <div class="col-md-3 margin-bottom-30 margin-top-30">
              <div class="widget">
                <div class="widget-content-items">
                  <span>Total Sevices</span>
                  <h4>2</h4>
                </div>
                <div class="widget-icon" style="background-color: rgba(54, 189, 120, 0.07);"><i class="icon-material-outline-gavel" style="color: rgb(54, 189, 120);"></i></div>
              </div>
          </div> 
          <div class="col-md-3 margin-bottom-30 margin-top-30">
              <div class="widget">
                <div class="widget-content-items">
                  <span>Reviews</span>
                  <h4>2</h4>
                </div>
                <div class="widget-icon" style="background-color: rgba(54, 189, 120, 0.07);"><i class="icon-material-outline-gavel" style="color: rgb(54, 189, 120);"></i></div>
              </div>
          </div>
           <div class="col-md-3 margin-bottom-30 margin-top-30">
              <div class="widget">
                <div class="widget-content-items">
                  <span>Total Earning</span>
                  <h4>2</h4>
                </div>
                <div class="widget-icon" style="background-color: rgba(54, 189, 120, 0.07);"><i class="icon-material-outline-gavel" style="color: rgb(54, 189, 120);"></i></div>
              </div>
          </div>
          <div class="col-md-3 margin-bottom-30 margin-top-30">
              <div class="widget">
                <div class="widget-content-items">
                  <span> Cancels Order</span>
                  <h4>2</h4>
                </div>
                <div class="widget-icon" style="background-color: rgba(54, 189, 120, 0.07);"><i class="icon-material-outline-gavel" style="color: rgb(54, 189, 120);"></i></div>
              </div>
          </div>


          </div>
        </div>
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
              <h3><i class="icon-material-outline-supervisor-account"></i>  Seller</h3>
              <!-- Breadcrumbs -->
              
            </div>


            <div class="content">
        <table id="example" class="hover" style="width:100%">
        <thead>
            <tr>
                <th>No.</th>
                <th>Title</th>
                <th>Order Price</th>
                <th>Recives Price</th>
                <th>Day Left</th>
                <th>Status</th>
                <th>Create At</th>
                <th>Pay</th>
            </tr>
        </thead>
        <tbody>
          <tr>
            <td>01</td>
            <td>Lorem ipsum dolor sit, amet.</td>
            <td>200</td>
            <td>170</td>
            <td>2days</td>
            <td>Ongoning</td>
            <td>3days Ago</td>
            <td>dfsdf</td>
          </tr>
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