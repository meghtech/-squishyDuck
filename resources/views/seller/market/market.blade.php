@extends('layouts.seller')
@section('content')

	<!-- Dashboard Content
	================================================== -->
	<div class="container-fluid full-page-content-inner">
		<div class="row">
            <div class="col-sm-3 col-md-3 col-lg-3 bg-light">
                <div class="col-12 pt-5">
                    <p>Price</p>
                    <select name="sortByPrice" id="sortByPrice">
                        <option value="0" selected>Lowest to Highest</option>
                        <option value="1">Highest to Lowest</option>
                    </select>
                </div>
                <div class="col-12 pt-2">
                    <p>Rating</p>
                    <div class="stars">
                        <form class="ml-7 ml-lg-4">
                            <input class="star star-5" id="star-5" type="radio" name="star" />
                            <label class="star star-5" for="star-5"></label>

                            <input class="star star-4" id="star-4" type="radio" name="star" />
                            <label class="star star-4" for="star-4"></label>

                            <input class="star star-3" id="star-3" type="radio" name="star" />
                            <label class="star star-3" for="star-3"></label>

                            <input class="star star-2" id="star-2" type="radio" name="star" />
                            <label class="star star-2" for="star-2"></label>

                            <input class="star star-1" id="star-1" type="radio" name="star" />
                            <label class="star star-1" for="star-1"></label>
                        </form>
                        <button type="button" class="btn btn-navy ml-6 mb-4 pl-5 pr-5">Apply</button>
                    </div>
                </div>
                <div class="col-12 mt-4 mb-4">
                    <div class="input-with-icon">
                            <input id="autocomplete-input" type="text" placeholder="Search City of Zip Code">
                            <i style="font-size: 25px;" class="text-dark icon-material-outline-search"></i>
                    </div>
                </div>
            </div>
            <div class="col-sm-9 col-md-9 col-lg-9 bg-white">
                    <div class="col-12 pt-5 pb-4">
                        <div class="input-with-icon">
                            <input id="autocomplete-input" type="text" placeholder="What are you looking for?">
                            <i style="font-size: 25px;" class="text-dark icon-material-outline-search"></i>
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
    @include('layouts.large-footer')
@endsection