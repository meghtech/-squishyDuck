@extends('layouts.seller')
@section('content')

<!-- Titlebar
================================================== -->
<div class="single-page-header" data-background-image="images/single-job.jpg">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="single-page-header-inner">
                    <div class="left-side">
                        <div class="header-image">
                            <a href="single-company-profile.html">
                                <img src="{{asset('/content/images/service/'.json_decode($data->photos, true)[0])}}" alt="">
                            </a>
                        </div>
                        <div class="header-details">
                            <h3>{{ $data->title }}</h3><i style="font-size:14px;" class="ml-2 icon-material-outline-access-time"></i>1 day
                            <div>
                                <img class="bg-md-cyan border rounded-circle" alt="user" height="30px" width="30px">
                                <span class="text-md-cyan" style="font-size:18px">{{ $data->userSeller->name }}</span>
                            </div>
                            <!-- <h5><a href="url('/user')/John Doe">John Doe</a></h5> -->
                            <ul>
                                <li>
                                    <div class="star-rating" data-rating="4.0"></div>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="right-side">
                        <span class="bookmark-icon"></span>
                        <div class="salary-box">
                            <div class="salary-type text-center">Price</div>
                            <div class="salary-amount text-success">${{ $data->price }}</div>
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
        <div class="col-xl-8 col-lg-8 content-right-offset">

        @if($data->type != 'service')
            <div class="single-page-section">
                <p class="margin-bottom-25">Condition: <span class="text-success">{{ $data->condition }}</span></p>
                <p>{{ $data->size }}</p>
            </div>
        @endif

            <div class="single-page-section">
                <h3 class="margin-bottom-25">Item Description</h3>
                <p>
                   {{ $data->description }}
                </p>
            </div>



            {{-- <div class="single-page-section">
                <h3 class="margin-bottom-25">Similar Jobs</h3>

                <!-- Listings Container -->
                <div class="listings-container grid-layout">
                    <!-- Job Listing -->
                    <a href="{{ route('seller.market.detail', 'office-chair-for-sale') }}" class="job-listing">
                            <!-- Job Listing Details -->
                            <div class="job-listing-details">
                                <!-- Logo -->
                                <div class="job-listing-company-logo">
                                    <img src="{{asset('storage/upload/Gig/Gig-1619457919.png')}}" alt="">
                                </div>
                            </div>
                            <!-- Job Listing Footer -->
                            <div class="job-listing-footer">
                                <span class="bookmark-icon"></span>
                                <ul>
                                    <li>
                                        <h5>Do Web Design &amp; Development</h5>
                                    </li>
                                    <li>
                                        <h3 class="text-success">$123.00</h3>
                                    </li>
                                    <br>
                                </ul>
                            </div>
                            <div style="background-color:#f9f9f9; padding-left:30px">
                                <img class="bg-md-cyan border rounded-circle" alt="user" height="30px" width="30px">
                                <span class="text-md-cyan" style="font-size:14px">John Doe</span>
                                <p class="d-inline" style="float:right; padding-right:25px; color:gray; font-size:14px;">More Details <i class="fa fa-angle-right"></i></p>
                                <p style="font-size:10px; padding-left:35px; margin-top:-10px;color:gray;"><i class="icon-material-outline-access-time"></i>1 day</p>
                            </div>
                    </a>
                    <a href="{{ route('seller.market.detail', 'office-chair-for-sale') }}" class="job-listing">
                            <!-- Job Listing Details -->
                            <div class="job-listing-details">
                                <!-- Logo -->
                                <div class="job-listing-company-logo">
                                    <img src="{{asset('storage/upload/Gig/Gig-1619457919.png')}}" alt="">
                                </div>
                            </div>
                            <!-- Job Listing Footer -->
                            <div class="job-listing-footer">
                                <span class="bookmark-icon"></span>
                                <ul>
                                    <li>
                                        <h5>Do Web Design &amp; Development</h5>
                                    </li>
                                    <li>
                                        <h3 class="text-success">$123.00</h3>
                                    </li>
                                    <br>
                                </ul>
                            </div>
                            <div style="background-color:#f9f9f9; padding-left:30px">
                                <img class="bg-md-cyan border rounded-circle" alt="user" height="30px" width="30px">
                                <span class="text-md-cyan" style="font-size:14px">John Doe</span>
                                <p class="d-inline" style="float:right; padding-right:25px; color:gray; font-size:14px;">More Details <i class="fa fa-angle-right"></i></p>
                                <p style="font-size:10px; padding-left:35px; margin-top:-10px;color:gray;"><i class="icon-material-outline-access-time"></i>1 day</p>
                            </div>
                    </a>
                </div>
                <!-- Listings Container / End -->

            </div> --}}
        </div>


        <!-- Sidebar -->
        <div class="col-xl-4 col-lg-4">
            <div class="sidebar-container">
                @if(Request::is('seller*'))
                    <a href="{{ route('sellerChat', [$data->user_id, 'seller']) }}" class="apply-now-button btn-md-cyan">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                        class="bi bi-envelope" viewBox="0 0 16 16">
                        <path
                            d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z" />
                    </svg> Message User</a>
                @endif
                {{-- @if(Auth::user()->id != $data->user_id) --}}
                <a href="{{ route('seller.createSchedule',$data->id) }}" class="apply-now-button">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-calendar" viewBox="0 0 16 16">
                    <path
                        d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
                </svg> Schedule</a>
                {{-- @endif --}}
                <!-- Sidebar Widget -->
                <div class="sidebar-widget">
                    <div class="job-overview">
                        <div class="job-overview-headline">Availability</div>
                        <div class="job-overview-inner">
                            <ul>
                                <li>
                                    <i class="icon-material-outline-access-time"></i>
                                    <span>7:00am - 6:00pm</span>
                                    <h5>Mon - Fri</h5>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Widget -->
                <div class="sidebar-widget">

                    <!-- Copy URL -->
                    <div class="copy-url">
                        <input id="copy-url" type="text" value="" class="with-border">
                        <button class="copy-url-button ripple-effect" data-clipboard-target="#copy-url"
                            title="Copy to Clipboard" data-tippy-placement="top"><i
                                class="icon-material-outline-file-copy"></i></button>
                    </div>

                    <!-- Share Buttons -->
                    <div class="share-buttons margin-top-25">
                        <div class="share-buttons-trigger"><i class="icon-feather-share-2"></i></div>
                        <div class="share-buttons-content">
                            <span>Interesting? <strong>Share It!</strong></span>
                            <ul class="share-buttons-icons">
                                <li><a href="#" data-button-color="#3b5998" title="Share on Facebook"
                                        data-tippy-placement="top"><i class="icon-brand-facebook-f"></i></a></li>
                                <li><a href="#" data-button-color="#1da1f2" title="Share on Twitter"
                                        data-tippy-placement="top"><i class="icon-brand-twitter"></i></a></li>
                                <li><a href="#" data-button-color="#dd4b39" title="Share on Google Plus"
                                        data-tippy-placement="top"><i class="icon-brand-google-plus-g"></i></a></li>
                                <li><a href="#" data-button-color="#0077b5" title="Share on LinkedIn"
                                        data-tippy-placement="top"><i class="icon-brand-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>

<!-- Sign In Popup
================================================== -->
<div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide dialog-with-tabs">

    <!--Tabs -->
    <div class="sign-in-form">

        <ul class="popup-tabs-nav">
            <li><a href="#login">Log In</a></li>
            <li><a href="#register">Register</a></li>
        </ul>

        <div class="popup-tabs-container">

            <!-- Login -->
            <div class="popup-tab-content" id="login">

                <!-- Welcome Text -->
                <div class="welcome-text">
                    <h3>We're glad to see you again!</h3>
                    <span>Don't have an account? <a  href="{{ route("register")  }}"  class="register-tab">Sign Up!</a></span>
                </div>

                <!-- Form -->
                <form method="post" id="login-form">
                    <div class="input-with-icon-left">
                        <i class="icon-material-baseline-mail-outline"></i>
                        <input type="text" class="input-text with-border" name="emailaddress" id="emailaddress"
                            placeholder="Email Address" required />
                    </div>

                    <div class="input-with-icon-left">
                        <i class="icon-material-outline-lock"></i>
                        <input type="password" class="input-text with-border" name="password" id="password"
                            placeholder="Password" required />
                    </div>
                    <a href="#" class="forgot-password">Forgot Password?</a>
                </form>

                <!-- Button -->
                <button class="button full-width button-sliding-icon ripple-effect" type="submit" form="login-form">Log
                    In <i class="icon-material-outline-arrow-right-alt"></i></button>


            </div>

            <!-- Register -->
            <div class="popup-tab-content" id="register">

                <!-- Welcome Text -->
                <div class="welcome-text">
                    <h3>Let's create your Buyer account!</h3>
                </div>

                <!-- Form -->
                <form method="post" id="register-account-form">
                    <div class="input-with-icon-left">
                        <i class="icon-material-baseline-mail-outline"></i>
                        <input type="text" class="input-text with-border" name="emailaddress-register"
                            id="emailaddress-register" placeholder="Email Address" required />
                    </div>

                    <div class="input-with-icon-left" title="Should be at least 8 characters long"
                        data-tippy-placement="bottom">
                        <i class="icon-material-outline-lock"></i>
                        <input type="password" class="input-text with-border" name="password-register"
                            id="password-register" placeholder="Password" required />
                    </div>

                    <div class="input-with-icon-left">
                        <i class="icon-material-outline-lock"></i>
                        <input type="password" class="input-text with-border" name="password-repeat-register"
                            id="password-repeat-register" placeholder="Repeat Password" required />
                    </div>
                </form>

                <!-- Button -->
                <button class="margin-top-10 button full-width button-sliding-icon ripple-effect" type="submit"
                    form="register-account-form">Register <i class="icon-material-outline-arrow-right-alt"></i></button>


            </div>

        </div>
    </div>
</div>
<!-- Sign In Popup / End -->

<!-- Send Direct Message Popup
================================================== -->
<div id="small-dialog-2" class="zoom-anim-dialog mfp-hide dialog-with-tabs">

    <!--Tabs -->
    <div class="sign-in-form">

        <ul class="popup-tabs-nav">
            <li><a href="#tab2">Send Message</a></li>
        </ul>

        <div class="popup-tabs-container">

            <!-- Tab -->
            <div class="popup-tab-content" id="tab2">

                <!-- Welcome Text -->
                <div class="welcome-text">
                    <h3>Direct Message To David</h3>
                </div>

                <!-- Form -->
                <!-- <form action="#" method="post" id="send-pm"> -->
                <textarea name="textarea" cols="10" placeholder="Message" class="with-border" required></textarea>
                <!-- </form> -->

                <!-- Button -->
                <button class="button full-width button-sliding-icon ripple-effect" type="submit" form="send-pm">Send <i
                        class="icon-material-outline-arrow-right-alt"></i></button>

            </div>

        </div>
    </div>
</div>
<!-- Send Direct Message Popup / End -->
@include('layouts.large-footer')

@endsection
