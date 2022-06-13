@extends('layouts.customer')

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
        .box{
            box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
            margin:auto; width:50rem; height:30rem; background:white;
            border-radius:10px;
            padding: 10px;
            /* position: relative; */
             display: flex;
            flex-wrap: wrap;
            align-items: center;
  justify-content: center;
             flex-direction: column;
        }
    </style>
@endpush

@section('content')
    <!-- Dashboard Content
	================================================== -->
    <div class="dashboard-content-container service" data-simplebar>
        <div class="dashboard-content-inner" >
            <div class="d-flex flex-row justify-content-between">
                <h2>Post Service</h2>
                <nav id="breadcrumbs" class="dark" style="z-index: 50; position: static;">
                    <ul>
                        <li><a href="../">Home</a></li>
                        <li><a href="../buyer/dashboard">Dashboard</a></li>
                        <li>Post Service</li>
                    </ul>
                </nav>
            </div>

            <div class="listings-container grid-layout margin-top-35">
                <div class="box">
                    <i class="fa fa-user-circle" style="font-size:10rem;margin-bottom:2rem"></i>
                    <div >
                        <h2><a href={{route('buyer.redirectToSignup')}} class="btn btn-primary btn-lg" style="color:white">Signup</a> as a freelancer to post</h2>
                    </div>
                </div>
                        
            </div>

        </div>
        <div class="ml-4 mr-4 pl-3 pr-3">
            @include('layouts.small-footer')
        </div>
    </div>
    <!-- Dashboard Content / End -->
@endsection
