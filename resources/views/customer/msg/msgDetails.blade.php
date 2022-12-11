@extends('layouts.customer')
 @section('content')
  @push('css')
<style>
    .msgSideBar {
      
        border-bottom: 1px solid #e4e4e4;
        box-shadow: 0 2px 8px rgb(0 0 0 / 1%);
    }
    ul.onGoingProject li {
        list-style: none;
        background: #e6e6e6;
        margin-bottom: 6px;
        padding: 13px;
    }

    ul.onGoingProject {
        padding: 5px;
    }

    .onGoingProject p {
        display: block;
        float: right;
        margin-right: 16px;
        font-size: 12px;
    }
    .imageRount {
        align-items: center;
        text-align: center;
        display: block;
        /* width: 150px; */
        /* background: red; */
        /* border-radius: 50%; */
    }

    .imageRount img {
        width: 100px;
        height: 100px;
        border-radius: 63%;
    }
</style>
@endpush

<!-- Dashboard Content
	================================================== -->
<div class="dashboard-content-container" data-simplebar>
    <div class="dashboard-content-inner">
        <!-- Dashboard Headline -->
        <div class="dashboard-headline">
            <h3>Messages</h3>

            <!-- Breadcrumbs -->
            <nav id="breadcrumbs" class="dark">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Dashboard</a></li>
                    <li>Messages</li>
                </ul>
            </nav>
        </div>

        <div class="row">
      

            @livewire('messages')

          
        </div>
        <!-- Messages Container / End -->

        <!-- Footer -->
        <div class="dashboard-footer-spacer"></div>
        <div class="small-footer margin-top-15">
            <div class="small-footer-copyrights">© 2021 <strong>Squishy Duck</strong>. All Rights Reserved.</div>
            <div class="clearfix"></div>
        </div>
        <!-- Footer / End -->
    </div>
</div>
<!-- Dashboard Content / End -->
@endsection
