<?php

    $cat = App\Models\Category::where('status',1)->get();
    $general = App\Models\General::find(1)->first();

 ?>

<!doctype html>
<html lang="en">
<head>

<!-- Basic Page Needs
================================================== -->
<title>{{$general->title}}</title>

@isset($general->metaTag)
{!! $general->metaTag !!}
@endisset

<link rel="icon" type="image/png" sizes="32x32" href="{{asset('storage/upload/logo')}}/{{$general->fav_icon}}" />



<!-- CSS
================================================== -->
<link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('content')}}/css/style.css">
<link rel="stylesheet" href="{{asset('content')}}/css/colors/blue.css">
@livewireStyles
</head>
<body>

<!-- Wrapper -->
<div id="wrapper">

<!-- Header Container
================================================== -->
<header id="header-container" class="fullwidth">

    <!-- Header -->
    <div id="header">
        <div class="container">

            <!-- Left Side Content -->
            <div class="left-side">

                <!-- Logo -->
                <div id="logo">
                    <a href="{{url('/')}}"><img src="{{asset('content')}}/images/ff.png" data-sticky-logo="{{asset('content')}}/images/ff.png" data-transparent-logo="{{asset('content')}}/images/ff.png" alt=""></a>
                </div>

                <!-- Main Navigation -->
                <nav id="navigation">
                    <ul id="responsive">
                        @foreach($cat as $v_cat)
                        <li><a href="{{url('/buyer')}}/{{$v_cat->slug}}">{{$v_cat->name}}</a>
                        </li>
                        
                        @endforeach
                        {{-- <li><a href="{{url('/service-show/buy')}}">Market</a>
                        <li><a href="{{url('/service-show')}}/{{$v_cat->slug}}">{{$v_cat->name}}</a> --}}
                    </ul>
                </nav>
                <div class="clearfix"></div>
                <!-- Main Navigation / End -->

            </div>
            <!-- Left Side Content / End -->


            <!-- Right Side Content / End -->
            <div class="right-side">


                <!-- User Menu -->
                <div class="header-widget">

                    <!-- Messages -->
                    <div class="header-notifications user-menu">



                      @if(Auth::guard('customer')->check())
                        <div class="header-notifications-trigger">
                            <a href="#" style="font-size: 14px!important"><i class="icon-feather-log-in"></i>Profile</a>
                        </div>

                        <div class="header-notifications-dropdown">

                            <!-- User Status -->
                            <div class="user-status">

                                @isset(Auth::guard('customer')->user()->name)
                                <!-- User Name / Avatar -->
                                <div class="user-details">
                                    <div class="user-avatar status-online"><img src="{{asset('content/images')}}/{{ Auth::guard('customer')->user()->profile  }}" alt=""></div>
                                    <div class="user-name">
                                  {{ Auth::guard('customer')->user()->name  }}
                                         <span>Buyer</span>
                                    </div>
                                </div>
                                  @endisset

                        </div>


                        <ul class="user-menu-small-nav">
                            <li><a href="{{url('/buyer/dashboard')}}"><i class="icon-material-outline-dashboard"></i> Dashboard</a></li>
                            <li><a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="icon-material-outline-power-settings-new"></i> Logout</a></li>
                        </ul>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                        </div>
                       @elseif(Auth::guard('seller')->check())
                         <div class="header-notifications-trigger">
                            <a href="#" style="font-size: 14px!important"><i class="icon-feather-log-in"></i>Profile</a>
                        </div>

                         <div class="header-notifications-dropdown">

                            <!-- User Status -->
                            <div class="user-status">

                                @isset(Auth::guard('seller')->user()->name)
                                <!-- User Name / Avatar -->
                                <div class="user-details">
                                    <div class="user-avatar status-online"><img src="{{asset('content/images')}}/{{ Auth::guard('seller')->user()->profile  }}" alt=""></div>
                                    <div class="user-name">
                                  {{ Auth::guard('seller')->user()->name  }}
                                         <span>Freelancer</span>
                                    </div>
                                </div>
                                  @endisset

                        </div>


                        <ul class="user-menu-small-nav">
                            <li><a href="{{url('/seller/dashboard')}}"><i class="icon-material-outline-dashboard"></i> Dashboard</a></li>

                            <li><a href="{{url('/buyer-job-post')}}"><i class="icon-material-outline-dashboard"></i> Buyer Request</a></li>

                            <li><a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="icon-material-outline-power-settings-new"></i> Logout</a></li>
                        </ul>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                        </div>
                        @elseif(Auth::guard('admin')->check())
                              <div class="header-notifications-trigger">
                            <a href="#" style="font-size: 14px!important"><i class="icon-feather-log-in"></i>Profile</a>
                        </div>
 <div class="header-notifications-dropdown">




                        <ul class="user-menu-small-nav">
                            <li><a href="{{url('/admin/dashboard')}}"><i class="icon-material-outline-dashboard"></i> Dashboard</a></li>



                            <li><a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="icon-material-outline-power-settings-new"></i> Logout</a></li>
                        </ul>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                        </div>
                        @else
                        <div class="header-notifications-trigger">
                            <a href="#" style="font-size: 14px!important"><i class="icon-feather-log-in"></i>  Log In / Register</a>
                        </div>
                           <!-- Dropdown -->
                        <div class="header-notifications-dropdown">
                        <ul class="user-menu-small-nav">
                            <li><a href="{{url('/seller')}}"><i class="icon-material-outline-dashboard"></i> Login as Freelancer</a></li>
                            <li><a href="{{url('/buyer')}}"><i class="icon-material-outline-settings"></i>Login as Buyer</a></li>
                            <li><a href="{{url('/register')}}"><i class="icon-material-outline-settings"></i> Create Account</a></li>
                        </ul>
                        @endif
                    </div>

                </div>
                <!-- User Menu / End -->

                <!-- Mobile Navigation Button -->
                <span class="mmenu-trigger">
                    <button class="hamburger hamburger--collapse" type="button">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </span>

            </div>
            <!-- Right Side Content / End -->

        </div>
    </div>
    <!-- Header / End -->

</header>
<div class="clearfix"></div>
<!-- Header Container / End -->

    @yield('content')

 <!-- Footer
================================================== -->
<div id="footer">

    <!-- Footer Top Section -->
    <div class="footer-top-section">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">

                    <!-- Footer Rows Container -->
                    <div class="footer-rows-container">

                        <!-- Left Side -->
                        <div class="footer-rows-left">
                            <div class="footer-row">
                                <div class="footer-row-inner footer-logo">
                                    <img src="{{asset('content')}}/images/ff.png" alt="">
                                </div>
                            </div>
                        </div>

                        <!-- Right Side -->
                        <div class="footer-rows-right">

                            <!-- Social Icons -->
                            <div class="footer-row">
                                <div class="footer-row-inner">
                                    <ul class="footer-social-links">
                                        <li>
                                            <a href="{{$general->fa}}" target="_blank" title="Facebook" data-tippy-placement="bottom" data-tippy-theme="light">
                                                <i class="icon-brand-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{$general->tw}}" target="_blank" title="Twitter" data-tippy-placement="bottom" data-tippy-theme="light">
                                                <i class="icon-brand-twitter"></i>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{$general->lin}}" target="_blank" title="LinkedIn" data-tippy-placement="bottom" data-tippy-theme="light">
                                                <i class="icon-brand-linkedin-in"></i>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- Footer Rows Container / End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Top Section / End -->

    <!-- Footer Middle Section -->
    <div class="footer-middle-section">
        <div class="container">
            <div class="row">
                @if(Auth::guard('seller')->check())
                <!-- Links -->
                <div class="col-xl-2 col-lg-2 col-md-3">
                    <div class="footer-links">
                        <h3>For Candidates</h3>
                        <ul>
                            <li><a href="#"><span>Duck It</span></a></li>
                        </ul>
                    </div>
                </div>
                @endif
                @if(Auth::guard('customer')->check())
                <!-- Links -->
                <div class="col-xl-2 col-lg-2 col-md-3">
                    <div class="footer-links">
                        <h3>For Buyer</h3>
                        <ul>
                            <li><a href="{{url('/buyer/job-post')}}"><span>Duck It</span></a></li>
                        </ul>
                    </div>
                </div>
                @endif

                <!-- Links -->
                <div class="col-xl-2 col-lg-2 col-md-3">
                    <div class="footer-links">
                        <h3>Helpful Links</h3>
                        <ul>
                            <li><a href="{{url('/contact-us')}}"><span>Contact Us</span></a></li>
                            <li><a href="{{url('/term-and-condition')}}"><span>Terms And Condition</span></a></li>
                        </ul>
                    </div>
                </div>

                <!-- Links -->
                <div class="col-xl-2 col-lg-2 col-md-3">
                    <div class="footer-links">
                        <h3>Account</h3>
                        <ul>
                            @guest
                            <li><a href="{{url('register')}}"><span>Create Account</span></a></li>
                            @else
                                @if(Auth::guard('customer')->check())
                                    <li>
                                        <a href="{{url('/buyer/dashboard')}}"><span>My Account</span></a>
                                    </li>
                                @elseif(Auth::guard('seller')->check())
                                <li>
                                    <a href="{{url('/seller/dashboard')}}"><span>My Account</span></a>
                                </li>
                                 @endif
                            @endguest
                        </ul>
                    </div>
                </div>

                <!-- Newsletter -->
                <div class="col-xl-4 col-lg-4 col-md-12">
                    <h3><i class="icon-feather-mail"></i> Sign Up For a Newsletter</h3>
                    <p>Weekly breaking news, analysis and cutting edge advices on job searching.</p>
                    <form action="#" method="get" class="newsletter">
                        <input type="text" name="fname" placeholder="Enter your email address">
                        <button type="submit"><i class="icon-feather-arrow-right"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Middle Section / End -->

    <!-- Footer Copyrights -->
    <div class="footer-bottom-section">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    © 2021 <strong>Squishy Duck</strong>. All Rights Reserved.
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Copyrights / End -->

</div>
<!-- Footer / End -->

</div>
<!-- Wrapper / End -->


<!-- Scripts
================================================== -->
<script src="{{asset('content')}}/js/jquery-3.3.1.min.js"></script>
<script src="{{asset('content')}}/js/jquery-migrate-3.0.0.min.js"></script>
<script src="{{asset('content')}}/js/mmenu.min.js"></script>
<script src="{{asset('content')}}/js/tippy.all.min.js"></script>
<script src="{{asset('content')}}/js/simplebar.min.js"></script>
<script src="{{asset('content')}}/js/bootstrap-slider.min.js"></script>
<script src="{{asset('content')}}/js/bootstrap-select.min.js"></script>
<script src="{{asset('content')}}/js/snackbar.js"></script>
<script src="{{asset('content')}}/js/clipboard.min.js"></script>
<script src="{{asset('content')}}/js/counterup.min.js"></script>
<script src="{{asset('content')}}/js/magnific-popup.min.js"></script>
<script src="{{asset('content')}}/js/slick.min.js"></script>
<script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('content')}}/js/custom.js"></script>

<!-- Snackbar // documentation: https://www.polonel.com/snackbar/ -->
<script>
// Snackbar for user status switcher
$('#snackbar-user-status label').click(function() {
    Snackbar.show({
        text: 'Your status has been changed!',
        pos: 'bottom-center',
        showAction: false,
        actionText: "Dismiss",
        duration: 3000,
        textColor: '#fff',
        backgroundColor: '#383838'
    });
});
</script>


<!-- Google Autocomplete -->
<script>
    function initAutocomplete() {
         var options = {
          types: ['(cities)'],
          // componentRestrictions: {country: "us"}
         };

         var input = document.getElementById('autocomplete-input');
         var autocomplete = new google.maps.places.Autocomplete(input, options);
    }

    // Autocomplete adjustment for homepage
    if ($('.intro-banner-search-form')[0]) {
        setTimeout(function(){
            $(".pac-container").prependTo(".intro-search-field.with-autocomplete");
        }, 300);
    }

</script>

@stack('js')
@livewireScripts
</body>
</html>
