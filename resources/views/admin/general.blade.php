
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
    <div class="dashboard-content-inner" >
      
      <!-- Dashboard Headline -->
      <div class="dashboard-headline">
        <h3>Settings</h3>

        <!-- Breadcrumbs -->
        <nav id="breadcrumbs" class="dark">
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Dashboard</a></li>
            <li>Settings</li>
          </ul>
        </nav>
      </div>
      @isset($general)
  <form action="{{route('general.save')}}" method="post" enctype="multipart/form-data">
    @csrf
  
      <!-- Row -->
      <div class="row">

        <!-- Dashboard Box -->
        <div class="col-xl-12">
          <div class="dashboard-box margin-top-0">

            <!-- Headline -->
            <div class="headline">
              <h3><i class="icon-material-outline-account-circle"></i> My Account</h3>
            </div>

            <div class="content with-padding padding-bottom-0">

              <div class="row">
              <div class="col-4">
                  <h5>Logo</h5>
                  <div class="avatar-wrapper" data-tippy-placement="bottom" title="Change Avatar">
                    <img class="profile-pic"  src="images/user-avatar-placeholder.png" alt="" />
                    <div class="upload-button"></div>
                    <input class="file-upload" name="logo" type="file" accept="image/*"/>
                  </div>
                </div>
                <div class="col-4">
                  <h5>Banner</h5>
                  
                    <input class="form-control" name="banner" type="file" accept="image/*"/>
         
                </div> 
                 <div class="col-4">
                  <h5>Fav Icon</h5>
                  
                    <input class="form-control" name="fav_icon" type="file" accept="image/*"/>
         
                </div>
              </div>
              <div class="row">

                <div class="col">
                  <div class="row">

                    <div class="col-xl-4">
                      <div class="submit-field">
                        <h5>Facebook Account</h5>
                        <input type="text" name="fa" class="with-border" value="{{$general->fa}}">
                      </div>
                    </div>  
                    <div class="col-xl-4">
                      <div class="submit-field">
                        <h5>Twitter Account</h5>
                        <input type="text" name="tw" class="with-border" value="{{$general->tw}}">
                      </div>
                    </div>
                    <div class="col-xl-4">
                      <div class="submit-field">
                        <h5>Linkdin Account</h5>
                        <input type="text" name="lin" class="with-border" value="{{$general->lin}}">
                      </div>
                    </div>

                    <div class="col-xl-6">
                      <div class="submit-field">
                        <h5>STRIPE_SECRET </h5>
                        <input type="text" name="stripe_scret" class="with-border" value="{{$general->stripe_scret}}">
                      </div>
                    </div>
                    <div class="col-xl-6">
                      <div class="submit-field">
                        <h5>STRIPE_KEY </h5>
                        <input type="text" name="stripe_pub" class="with-border" value="{{$general->stripe_pub}}">
                      </div>
                    </div>
                    <div class="col-xl-6">
                      <div class="submit-field">
                        <h5>Buyer Commision</h5>
                        <input type="text" name="buyer_com" class="with-border" value="{{$general->buyer_com}}">
                      </div>
                    </div>
                       <div class="col-xl-6">
                      <div class="submit-field">
                        <h5>Seller Commision</h5>
                        <input type="text" name="seller_com" class="with-border" value="{{$general->seller_com}}">
                      </div>
                    </div>

                  </div>
                </div>
              </div>



            </div>
          </div>
        </div>


  <!-- Dashboard Box -->
        <div class="col-xl-12">
          <div class="dashboard-box">

            <!-- Headline -->
            <div class="headline">
              <h3><i class="icon-material-outline-face"></i>Website Content</h3>
            </div>

            <div class="content">
              <ul class="fields-ul">
              <li>
                <div class="row">
                  <div class="col-xl-12">
                    <div class="submit-field">
                      <h5>Sub Header <small>[each line Break use this <br>]</small></h5>
                      <input type="text" name="address" class="with-border" value="{{$general->address}}">
                    </div>
                  </div> 

                  <div class="col-xl-6">
                    <div class="submit-field">
                      <h5>Sub Header</h5>
                      <input type="text" name="sub_header" class="with-border" value="{{$general->sub_header}}">
                    </div>
                  </div> 
                  <div class="col-xl-6">
                    <div class="submit-field">
                      <h5>Sub Title</h5>
                      <input type="text" name="sub_title" class="with-border" value="{{$general->sub_title}}">
                    </div>
                  </div>  
                  <div class="col-xl-6">
                    <div class="submit-field">
                      <h5>Search Title</h5>
                      <input type="text" name="search_title" class="with-border" value="{{$general->search_title}}">
                    </div>
                  </div> 
                   <div class="col-xl-6">
                    <div class="submit-field">
                      <h5>Inside Input Box</h5>
                      <input type="text" name="inside_input" class="with-border" value="{{$general->inside_input}}">
                    </div>
                  </div>

                </div>
              </li>
            </ul>
            </div>
          </div>
        </div>




        <!-- Dashboard Box -->
        <div class="col-xl-12">
          <div class="dashboard-box">

            <!-- Headline -->
            <div class="headline">
              <h3><i class="icon-material-outline-face"></i>SEO</h3>
            </div>

            <div class="content">
              <ul class="fields-ul">
              <li>
                <div class="row">
                  <div class="col-xl-6">
                    <div class="submit-field">
                      <h5>Title</h5>
                      <input type="text" name="title" class="with-border" value="{{$general->title}}">
                    </div>
                  </div>

                  <div class="col-xl-12">
                    <div class="submit-field">
                      <h5>Meta Tags</h5>
                      <textarea cols="30" name="metaTag" rows="5" class="with-border">
                        {{$general->metaTag}}
                      </textarea>
                    </div>
                  </div>

                </div>
              </li>
            </ul>
            </div>
          </div>
        </div>

        
        <!-- Button -->
        <div class="col-xl-12">
          <button type="submit" class="button ripple-effect big margin-top-30">Save Changes</button>
        </div>

      </div>
      <!-- Row / End -->
</form>
@endisset
      <!-- Footer -->
      <div class="dashboard-footer-spacer"></div>
      <div class="small-footer margin-top-15">
        <div class="small-footer-copyrights">
          © 2021 <strong></strong>. All Rights Reserved.
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