@extends('layouts.seller')

@push('css')

    <style>
        .alert {
            position: relative;
            padding: .75rem 1.25rem;
            margin-bottom: 1rem;
            border: 1px solid transparent;
            border-radius: .25rem;
        }
        .alert-primary {
            color: #f7f7f7;
            background-color: #006171;
            border-color: #b8daff;
        }
    </style>
@endpush

@section('content')
    <!-- Dashboard Content
	================================================== -->
    <div class="dashboard-content-container service" data-simplebar>
        <div class="dashboard-content-inner" >
            <!-- Dashboard Headline -->
            <div class="row mb-4 p-0">
                <h2 class="col-md-6 col-sm-12 text-left">Services</h2>
                <h4 class="col-md-5 col-sm-12 text-right pr-2 ml-5">
                    <a href="{{ route('seller.createService') }}" style="color:gray">New Service</a>
                </h4>
                <a href="{{ route('seller.createService') }}">
                    <div class="col-md-1 col-sm-12 p-0 text-center" style="max-height:20px; max-width:20px; border:1px solid #28a745; border-radius:4px;">
                        <i class="fa fa-plus text-success" style="font-size: 10px; vertical-align: middle; margin-top: -9.5px; margin-left: -1px; padding: 5px;"></i>
                    </div>
                </a>
            </div>

            <div class="input-with-icon">
                <input id="autocomplete-input" type="text" placeholder="Search service...">
                <i style="font-size: 25px;" class="text-dark icon-material-outline-search"></i>
            </div>
            <!-- Fun Facts Container -->

            <div class="listings-container grid-layout margin-top-35">
                <!-- Job Listing -->
                @foreach($data as $s_data)
                    <a href="{{ route('seller.market.detail', $s_data->id) }}" class="job-listing p-0">
                        <!-- Job Listing Details -->
                        <div class="job-listing-details">
                            <!-- Logo -->
                            <div class="job-listing-company-logo">
                                <img src="{{asset('/content/images/service/'.\GuzzleHttp\json_decode($s_data->photos, true)[0])}}" alt="">
                            </div>
                        </div>
                        <!-- Job Listing Footer -->
                        <div class="job-listing-footer">
                            <span class="bookmark-icon"></span>
                            <ul>
                                <li>
                                    <h5>{{ $s_data->title }}</h5>
                                </li>
                                <li>
                                    <h3 class="text-success d-inline">{{ $s_data->price }}</h3><span style="font-size: 22px;"> /hr</span>
                                </li>
                                <li class="d-block">
                                    <p style="font-size: 12px;" class="d-inline"><i class="icon-material-outline-access-time"></i>1 day</p>
                                    <p class="d-inline" style="float:right; padding-right:25px; color:gray; font-size:14px;">More Details <i class="fa fa-angle-right"></i></p>
                                </li>
                                <br>
                            </ul>
                        </div>
                    </a>
                @endforeach
            </div>

        </div>
        <div class="ml-4 mr-4 pl-3 pr-3">
            @include('layouts.small-footer')
        </div>
    </div>
    <!-- Dashboard Content / End -->
@endsection
