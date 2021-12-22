@extends('layouts.customer')
@push('css')
<link href="{{asset('bootstrap/calender/style.css')}}" rel="stylesheet">
<style>
    .card-header i {
        margin-right: 5px;
    }
</style>
@endpush
@section('content')
<!-- Dashboard Content
  ================================================== -->
<div class="dashboard-content-container incoming-request" data-simplebar>
    <div class="dashboard-content-inner" style="background-color: #f2f2f2;">
        <!-- Dashboard Headline -->
        <div class="dashboard-headline">
            <h3 class="text-left col-4 d-inline">Schedule</h3>
            <div class="col-8 ml-5 text-right d-inline-block pr-0">
                <a href="#" class="apply-now-button col-2 ml-4 mb-0 d-inline" style="padding: 12px 20px;"><i class="fa fa-repeat"></i> Refresh</a>
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

                <div class="input-with-icon">
                    <input id="autocomplete-input" type="text" placeholder="Search a service or customer...">
                    <i style="font-size: 30px;" class="textchat-page-dark icon-material-outline-search"></i>
                </div>
                <div class="mt-5 row p-0 m-0">
                    <div class="col-7 p-0">
                        <div class="app" style="height:auto">
                            <div class="app__main">
                                <div class="calendar">
                                    <div id="calendar"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-1 p-0"></div>
                    <div class="col-4 p-0 schedule-view">
                        <div id="date-selected"></div>
                        <div id="schedule-list"></div>
                    </div>
                </div>
            </div>
        </div>
        <input type="hidden" id="authUserId" value="{{Auth::guard('customer')->user()->id}}">
        <input type="hidden" id="clickedDate">
        <input type="hidden" id="scheduleList">
        @foreach ($scheduleDates as $key=>$date)
            <input type="hidden" name="appointedDates[]" value="{{$date}}">
        @endforeach
        <!-- Row / End -->

        <!-- Footer -->
        <div class="dashboard-footer-spacer">
        </div>
        @include('layouts.small-footer')
        <!-- Footer / End -->

    </div>
</div>
<!-- Dashboard Content / End -->
@endsection
@push('js')
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{asset('bootstrap/calender/ViewScheduleScript.js')}}"></script>
@endpush