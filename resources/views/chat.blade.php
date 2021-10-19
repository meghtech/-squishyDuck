@extends('layouts.seller')
@section('content')
<!-- Chat Content
	================================================== -->
	<div class="container-fluid full-page-content-inner pt-0 pl-0 pr-0 chat-page" style="max-height:100%; max-width:100%;">
        <section class="col-sm-12 col-md-3 col-lg-3 pl-0 pr-0 pb-0" style="background-color:black; color:white;float:left;">
                <div class="col-12 col-md-3 col-lg-3 mt-4 mb-4 search-message"  style="position:fixed;">
                    <div class="input-with-icon">
                            <input id="autocomplete-input" type="text" placeholder="Search Messages ...">
                            <i style="font-size: 25px;" class="textchat-page-dark icon-material-outline-search"></i>
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
        <section class="col-sm-12 col-md-9 col-lg-9 pr-0 pl-0 bg-white" style="float:right;overflow:hidden;">
                <div class="col-12 m-0 mt-3 mb-0 chat-top-section row pr-0">
                    <div class="col-10 mb-3">
                        <span class="d-inline-block bookmark-icon"></span><h3 class="d-inline-block ml-3"><b>John Doe</b></h3>
                    </div>
                    <div class="col-2 text-right mt-3 pr-5">
                        <i class="fa fa-ellipsis-v" style="font-size:24px; color:#aaa;"></i>
                    </div>
                </div>
                <div class="container-fluid messages" style="">
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
                <div class="row m-0" style="width:100%; margin-bottom:0;background-color:#f2f2f2;">
                    <div class="uploadButton col-1 col-sm-1 mb-0 p-0" style="float:left;">
						<input name="image" class="uploadButton-input" type="file" accept="image/*, application/pdf" id="upload">
						<label class="uploadButton-button ripple-effect mb-0 text-center" for="upload">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="25" fill="currentColor"
                            class="bi bi-paperclip" viewBox="0 0 16 16">
                                <path
                                d="M4.5 3a2.5 2.5 0 0 1 5 0v9a1.5 1.5 0 0 1-3 0V5a.5.5 0 0 1 1 0v7a.5.5 0 0 0 1 0V3a1.5 1.5 0 1 0-3 0v9a2.5 2.5 0 0 0 5 0V5a.5.5 0 0 1 1 0v7a3.5 3.5 0 1 1-7 0V3z" />
                            </svg>
                        </label>
					</div>
                    <!-- <span class="uploadButton-file-name mb-0 col-10 col-sm-10 pl-4"></span> -->
                    <input type="text" class="message-box mb-0 col-10 col-sm-10 pl-4" style="float:left;" placeholder="Start typing ...">
                    <div class="col-1 col-sm-1 mb-0 p-0 text-center send-button">
                    <img class="mt-3" height="25px" src="{{ asset('content/images/send.svg') }}" alt="Send">
                    </div>
                </div>
                <div class="pl-4 pr-4" style="width:100%; margin-bottom:0;background-color:#f2f2f2;">
                    @include('layouts.small-footer')
                </div>
            </section>
	</div>
	<!-- Chat Content / End -->



@endsection