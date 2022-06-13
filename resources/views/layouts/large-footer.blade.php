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
                                            <a href="#" target="_blank" title="Facebook" data-tippy-placement="bottom" data-tippy-theme="light">
                                                <i class="icon-brand-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank" title="Twitter" data-tippy-placement="bottom" data-tippy-theme="light">
                                                <i class="icon-brand-twitter"></i>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#" target="_blank" title="LinkedIn" data-tippy-placement="bottom" data-tippy-theme="light">
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
                    © {{date('Y')}} <strong>Squishy Duck</strong>. All Rights Reserved.
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Copyrights / End -->

</div>