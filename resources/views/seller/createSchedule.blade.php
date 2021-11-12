
@extends('layouts.seller')
@push('css')
    <link href="{{asset('bootstrap/calender/style.css')}}" rel="stylesheet">
@endpush
@section('content')
    <div class="col-xl-8 col-lg-8 offset-xl-2 offset-lg-2">
        <section id="contact" class="margin-bottom-60">
            <form method="POST" name="contactform" id="contactform" action="{{ route('saveSchedule')}}" autocomplete="on">
                @csrf
                <div class="col-12" id="myContent2" style="display: block">
                    <div class="pt-lg-5">
                        <label for="usr">Description</label>
                        <textarea class="with-border" name="msg" cols="40" rows="10" id="comments" placeholder="Write a message..." spellcheck="true" required="required"></textarea>
                    </div>
                    <div class="text-center">
                        <a class="submit button margin-top-15 px-lg-5 text-white" id="submit" onclick="myfunction()">Next</a>
                    </div>
                </div>
                <div class="pt-lg-5" id="myContent" style="display: none">
                    <div class="col-6 float-left">
                        <div class="app">
                            <div class="app__main">
                                <div class="calendar">
                                    <div id="calendar"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 float-left">
                        <div class="mb-3">
                            <input type="hidden" id="selectedDate" name="date" value="">
                            <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                            <input type="hidden" name="product_id" value="{{$id}}">
                            <label for="exampleFormControlInput1" class="form-label">Select Timeframe</label>
                            <select class="form-select" name="morningTime" aria-label="Default select example">
                                <option selected>Morning Times</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                            <br>
                            <select class="form-select" name="afternoonTime" aria-label="Default select example">
                                <option selected>Afternoon Times</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Address</label>
                            <input type="text" class="form-control" name="address" id="exampleFormControlInput1" placeholder="Street Address">
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" name="city" placeholder="Denver">
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-success px-lg-5" style="background: #0DAD4F">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-calendar" viewBox="0 0 16 16">
                                <path
                                    d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
                            </svg> Schedule
                        </button>
                    </div>
                </div>
            </form>
        </section>
    </div>
    @include('layouts.large-footer')
@endsection
@push('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="{{asset('bootstrap/calender/script.js')}}"></script>
    <script>
        function myfunction() {
            var x = document.getElementById('myContent');
            var y = document.getElementById('myContent2');
            if (x.style.display === 'none') {
                x.style.display = 'block';
                y.style.display = 'none';
            } else {
                x.style.display = 'none';
            }
        }
    </script>
@endpush
