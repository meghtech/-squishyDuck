@if(Auth::guard('seller')->check())
    @extends('layouts.seller')
@else
    @extends('layouts.customer')
@endif



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
            <div class="d-flex flex-row justify-content-between">
        <h2>Report Incident</h2>
        <nav id="breadcrumbs" class="dark" style="z-index: 50; position: static;">
            <ul>
                <li><a href="../">Home</a></li>
                <li><a href="../buyer/dashboard">Dashboard</a></li>
                <li>Report Incident</li>
            </ul>
        </nav>
    </div>
            
<form action="{{route('mailReport')}}" method="POST">
    @csrf
            <section v-if="section == 'first'">
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <input type="text" placeholder="Subject" name="subject" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <textarea name="message" cols="30" rows="10" class="with-border" placeholder="Type here..." required></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <p class="text-center text-danger">If this is an emergency please call 9-1-1 immediately</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 text-center">
                        <button class="btn btn-md-cyan bt-lg" style="padding: 10px; padding-left:25px; padding-right:25px; font-size:20px">Send Email</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 mt-3">
                        <p class="text-center"><i class="fa fa-envelope"></i><b> squishyduck@contact.com</b></p>
                    </div>
                </div>
            </section>      
            </form>     

        </div>
        <div class="ml-4 mr-4 pl-3 pr-3">
            @include('layouts.small-footer')
        </div>
    </div>
    <!-- Dashboard Content / End -->
@endsection
