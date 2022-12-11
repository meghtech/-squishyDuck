@extends('layouts.seller') @section('content') @push('css')
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

            <div class="col-md-4">
                <div class="dashboard-box child-box-in-row" style="margin-top: 0!important">
                    <div class="msgSideBar">
                        <div class="headline">
                            <h3><i class="icon-material-outline-note-add"></i>About</h3>
                        </div>

                        <div class="imageRount" style="margin-top: 10px;">
                            <img src="{{asset('content')}}/images/user-avatar-small-01.jpg" alt="" />
                            <p>
                                <a href=""><b>USer Name</b></a>
                            </p>
                        </div>

                        <ul class="onGoingProject">
                            <li>
                                <b>From: Count Name</b>
                            </li>
                        </ul>
                    </div>
                    <div class="msgSideBar">
                        <div class="headline">
                            <h3><i class="icon-material-outline-note-add"></i> Orders</h3>
                        </div>
<div class="content with-padding">
                        <ul class="onGoingProject">
                            <li>
                                <img src="{{asset('content')}}/images/user-avatar-small-01.jpg" alt="" width="50px" height="30px" />
                                <p>$300</p>
                                <p><span class="badge badge-info">padding</span></p>
                                <p>20 Days</p>
                            </li>
                        </ul>
                    </div>
                    </div>
                    <div class="msgSideBar">
                        <div class="headline">
                            <h3><i class="icon-material-outline-note-add"></i>Project Files</h3>
                        </div>

                        <div class="content with-padding">
                            <!-- Note -->
                            <div class="dashboard-note">
                                <div class="note-footer">
                                    <span class="note-priority high">Download</span>
                                    <div class="note-buttons">
                                        <a href="#" title="Remove" data-tippy-placement="top"><i class="icon-feather-trash-2"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="add-note-button">
                            <a href="#small-dialog" class="popup-with-zoom-anim button full-width button-sliding-icon">Add Note <i class="icon-material-outline-arrow-right-alt"></i></a>
                        </div>
                    </div>
                </div>
            </div>
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
