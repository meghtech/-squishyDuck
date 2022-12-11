<?php

    $general = App\Models\General::find(1)->first();

 ?>
<!doctype html>
<html lang="en">
<head>

<!-- Basic Page Needs
================================================== -->
<title>Squishy Duck</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">


<link rel="icon" type="image/png" sizes="32x32" href="{{asset('storage/upload/logo')}}/{{$general->fav_icon}}" />

<!-- CSS
================================================== -->
<link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('content')}}/css/style.css">
<link rel="stylesheet" href="{{asset('content')}}/css/colors/blue.css">
@stack('css')
@livewireStyles
</head>
<body class="gray">

<!-- Wrapper -->
<div id="wrapper">

<!-- Header Container
================================================== -->
<header id="header-container" class="fullwidth dashboard-header not-sticky">

  <!-- Header -->
  <div id="header">
    <div class="container">

      <!-- Left Side Content -->
      <div class="left-side">

        <!-- Logo -->
        <div id="logo">
          <a href="{{url('/admin/dashboard')}}"><img src="{{asset('content')}}/images/ff.png" alt=""></a>
        </div>


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
            <div class="header-notifications-trigger">
              <a href="#"><div class="user-avatar status-online"><img src="{{asset('content/images')}}/user-avatar-small-01.jpg" alt=""></div></a>
            </div>

            <div class="header-notifications-dropdown">

                            <!-- User Status -->
                            <div class="user-status">

                                @isset(Auth::guard('admin')->user()->name)
                                <!-- User Name / Avatar -->
                                <div class="user-details">
                                    <div class="user-avatar status-online"><img src="{{asset('content/images')}}/user-avatar-small-01.jpg" alt=""></div>
                                    <div class="user-name">
                                  {{ Auth::guard('admin')->user()->name  }}
                                         <span>Admin</span>
                                    </div>
                                </div>
                                  @endisset

                        </div>


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

<!-- Dashboard Container -->
<div class="dashboard-container">

  <!-- Dashboard Sidebar
  ================================================== -->
  <div class="dashboard-sidebar">
    <div class="dashboard-sidebar-inner" data-simplebar>
      <div class="dashboard-nav-container">

        <!-- Responsive Navigation Trigger -->
        <a href="#" class="dashboard-responsive-nav-trigger">
          <span class="hamburger hamburger--collapse" >
            <span class="hamburger-box">
              <span class="hamburger-inner"></span>
            </span>
          </span>
          <span class="trigger-title">Dashboard Navigation</span>
        </a>

        <!-- Navigation -->
        <div class="dashboard-nav">
          <div class="dashboard-nav-inner">

            <ul data-submenu-title="Start">
              <li class="active"><a href="{{url('/admin/dashboard')}}"><i class="icon-material-outline-dashboard"></i> Dashboard</a></li>
              <li><a href="{{url('/admin/order')}}"><i class="icon-material-outline-question-answer"></i> Order</a></li>

              <li><a href="{{url('/admin/msg-list')}}"><i class="icon-material-outline-question-answer"></i> Messages</a></li>
              <li><a href="{{url('/admin/category')}}"><i class="icon-material-outline-question-answer"></i> Manage Category <span class="nav-tag">2</span></a></li>
            </ul>

            <ul data-submenu-title="Manage Buyer and Seller">

              <li class="active-submenu"><a href="#"><i class="icon-material-outline-assignment"></i>Manage Users</a>
                <ul>
                  <li><a href="{{url('/admin/manage-buyer')}}">Manage Buyer <span class="nav-tag">2</span></a></li>
                  <li><a href="{{url('/admin/manage-seller')}}">Manage Seller</a></li>
                </ul>
              </li>
               <li class="active-submenu"><a href="#"><i class="icon-material-outline-assignment"></i>Manage Payment</a>
                <ul>
                  <li><a href="{{route('payment.buyer')}}">Payment Get Buyer<span class="nav-tag">2</span></a></li>
                  <li><a href="{{route('payment.seller')}}">Paid Seller</a></li>
                </ul>
              </li>


            </ul>


            <ul data-submenu-title="Account">

             <li class="active-submenu"><a href="#"><i class="icon-material-outline-assignment"></i>General Settings</a>
                <ul>
                  <li><a href="{{url('/admin/general')}}">Website Setting<span class="nav-tag">2</span></a></li>
                  <li><a href="{{url('/admin/terms')}}">Term And Condition</a></li>
                </ul>
              </li>

            </ul>

          </div>
        </div>
        <!-- Navigation / End -->

      </div>
    </div>
  </div>
  <!-- Dashboard Sidebar / End -->

 @yield('content')
</div>
<!-- Dashboard Container / End -->

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

<!-- Chart.js // documentation: http://www.chartjs.org/docs/latest/ -->
<script src="js/chart.min.js"></script>
<script>
  Chart.defaults.global.defaultFontFamily = "Nunito";
  Chart.defaults.global.defaultFontColor = '#888';
  Chart.defaults.global.defaultFontSize = '14';

  var ctx = document.getElementById('chart').getContext('2d');

  var chart = new Chart(ctx, {
    type: 'line',

    // The data for our dataset
    data: {
      labels: ["January", "February", "March", "April", "May", "June"],
      // Information about the dataset
        datasets: [{
        label: "Views",
        backgroundColor: 'rgba(42,65,232,0.08)',
        borderColor: '#2a41e8',
        borderWidth: "3",
        data: [196,132,215,362,210,252],
        pointRadius: 5,
        pointHoverRadius:5,
        pointHitRadius: 10,
        pointBackgroundColor: "#fff",
        pointHoverBackgroundColor: "#fff",
        pointBorderWidth: "2",
      }]
    },

    // Configuration options
    options: {

        layout: {
          padding: 10,
        },

      legend: { display: false },
      title:  { display: false },

      scales: {
        yAxes: [{
          scaleLabel: {
            display: false
          },
          gridLines: {
             borderDash: [6, 10],
             color: "#d8d8d8",
             lineWidth: 1,
                },
        }],
        xAxes: [{
          scaleLabel: { display: false },
          gridLines:  { display: false },
        }],
      },

        tooltips: {
          backgroundColor: '#333',
          titleFontSize: 13,
          titleFontColor: '#fff',
          bodyFontColor: '#fff',
          bodyFontSize: 13,
          displayColors: false,
          xPadding: 10,
          yPadding: 10,
          intersect: false
        }
    },


});

</script>
  @stack('js')
 @livewireScripts
</body>
</html>
