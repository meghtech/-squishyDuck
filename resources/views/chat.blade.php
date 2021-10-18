@extends('layouts.seller')
@section('content')
<!-- Chat Content
	================================================== -->
	<div class="container-fluid full-page-content-inner pt-0 pl-0 pr-0 chat-page" style="max-height:100%; max-width:100%;">
        <section class="col-sm-12 col-md-3 col-lg-3 pl-0 pr-0 pb-5" style="background-color:black; color:white;float:left;">
                <div class="col-12 col-md-3 col-lg-3 mt-4 mb-4 search-message"  style="position:fixed;">
                    <div class="input-with-icon">
                            <input id="autocomplete-input" type="text" placeholder="Search Messages ...">
                            <i style="font-size: 25px;" class="text-dark icon-material-outline-search"></i>
                    </div>
                </div>
                <div class="chat-list">
                    @for ($i = 0; $i<100; $i++)
                        <div class="col-sm-12 chat-to-list row m-0 p-3 pl-4 {{$i == 0 ? 'selected-chat': ''}}">
                            <div class="user-avatar status-online d-inline m-0"><img src="{{ asset('storage/upload/profile') }}" alt=""></div>
                            <div class="col-8 col-sm-7 pr-0">
                                <h4 class="text-white"><b>{{$i}} John Doe</b></h4>
                                <h5 class="text-white">Did you receive the payment?</h5>
                            </div>
                            <div class="col-2 col-sm-2 ml-3">
                                <h5 class="text-gray">Yesterday</h5>
                            </div>
                        </div>
                    @endfor

                </div>
        </section>
        <section class="col-sm-12 col-md-9 col-lg-9 pr-0 pl-0 bg-white" style="float:right;">
                <div class="col-12 m-0 mt-3 mb-0 chat-top-section row pr-0">
                    <div class="col-10 mb-3">
                        <span class="d-inline-block bookmark-icon"></span><h3 class="d-inline-block ml-3"><b>John Doe</b></h3>
                    </div>
                    <div class="col-2">

                    </div>
                </div>
                <div class="container-fluid" style="overflow-y:scroll;max-height:59.3vh; background-color:#ccc">
                    @for ($i = 0; $i<100; $i++)
                        <div class="col-sm-12 row m-0 p-3 pl-4">
                            <div class="user-avatar status-online d-inline m-0 mt-2"><img src="{{ asset('storage/upload/profile') }}" alt=""></div>
                            <div class="col-10 col-sm-10 pr-0">
                                <h5 class="text-black d-inline mr-4"><b>{{$i}} John Doe</b></h5><span class="text-gray" style="font-size:.8rem">11:54 AM</span>
                                <h6 class="text-black">Did you receive the payment?</h6>
                            </div>
                        </div>
                    @endfor
                </div>
                <div style="width:92%; margin-left:40px; margin-bottom:0">
                    @include('layouts.small-footer')
                </div>
            </section>
	</div>
	<!-- Chat Content / End -->



@endsection