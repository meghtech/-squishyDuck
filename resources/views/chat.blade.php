@extends('layouts.seller')
@section('content')
<!-- Chat Content
	================================================== -->
	<div class="container-fluid full-page-content-inner">
		<div class="row">
            <div class="col-sm-3 col-md-3 col-lg-3 pl-0 pr-0" style="background-color:black; color:white;">
                <div class="col-12 mt-4 mb-4 search-message">
                    <div class="input-with-icon">
                            <input id="autocomplete-input" type="text" placeholder="Search Messages ...">
                            <i style="font-size: 25px;" class="text-dark icon-material-outline-search"></i>
                    </div>
                </div>
                <div class="col-12 chat-to-list">
                        <div class="user-avatar status-online"><img src="{{ asset('storage/upload/profile') }}" alt=""></div>
                </div>
            </div>
            <div class="col-sm-9 col-md-9 col-lg-9 pr-0 pl-0 bg-white">
                <div class="col-12 m-0 mt-4 mb-4 chat-top-section row">
                    <div class="col-10 mb-3">
                        <span class="d-inline-block bookmark-icon"></span><h3 class="d-inline-block">John Doe</h3>
                    </div>
                    <div class="col-2">

                    </div>
                </div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <p class="float-left">Buy Results</p>
                                <p class="float-right">Page 1 of 10 <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="gray" class="bi bi-caret-right-fill"
                                        viewBox="0 0 14 14">
                                        <path
                                            d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                                    </svg>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="listings-container grid-layout margin-top-35">
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
                                        <h5>DO Web Design &amp; Develop</h5>
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
                                <p class="d-inline" style="float:right; padding-right:25px; color:gray; font-size:14px;">More Details <i class="fa fa-greater-than"></i></p>
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
                                        <h5>DO Web Design &amp; Develop</h5>
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
                                <p class="d-inline" style="float:right; padding-right:25px; color:gray; font-size:14px;">More Details <i class="fa fa-greater-than"></i></p>
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
                                        <h5>DO Web Design &amp; Develop</h5>
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
                                <p class="d-inline" style="float:right; padding-right:25px; color:gray; font-size:14px;">More Details <i class="fa fa-greater-than"></i></p>
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
                                        <h5>DO Web Design &amp; Develop</h5>
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
                                <p class="d-inline" style="float:right; padding-right:25px; color:gray; font-size:14px;">More Details <i class="fa fa-greater-than"></i></p>
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
                                        <h5>DO Web Design &amp; Develop</h5>
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
                                <p class="d-inline" style="float:right; padding-right:25px; color:gray; font-size:14px;">More Details <i class="fa fa-greater-than"></i></p>
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
                                        <h5>DO Web Design &amp; Develop</h5>
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
                                <p class="d-inline" style="float:right; padding-right:25px; color:gray; font-size:14px;">More Details <i class="fa fa-greater-than"></i></p>
                                <p style="font-size:10px; padding-left:35px; margin-top:-10px;color:gray;"><i class="icon-material-outline-access-time"></i>1 day</p>
                            </div>
                        </a>
                    </div>
                </div>
        </div>
	</div>
	<!-- Chat Content / End -->



@endsection