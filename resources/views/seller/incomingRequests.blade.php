@extends('layouts.seller')
@push('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
<style>
    .card-header i {
        margin-right: 5px;
    }
</style>
@endpush
@section('content')
<?php
  $getGeneral = \App\Models\General::find(1);
 ?>
<!-- Dashboard Content
  ================================================== -->
<div class="dashboard-content-container incoming-request" data-simplebar>
    <div class="dashboard-content-inner" style="background-color: #f2f2f2;">

        <!-- Dashboard Headline -->
        <div class="dashboard-headline d-flex row-h1 flex-row justify-content-between">
            <h3>Incoming Requests</h3>
            <nav id="breadcrumbs" class="dark" style="z-index: 50; position: static;">
                <ul>
                    <li><a href="../">Home</a></li>
                    <li><a href="../seller/dashboard">Dashboard</a></li>
                    <li>Incoming Requests</li>
                </ul>
            </nav>
        </div>
        <div class="d-flex row-h1 flex-row justify-content-end mb-4">
            <button  type="button" class="btn btn-lg btn-success mr-2"> <i class="fa fa-plus-circle"></i> Accept</button>
            <button onclick="reload()" type="button" class="btn btn-lg btn-dark"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" style="width:12px; height:12px">
            <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" />
            </svg>
            Refresh</button>
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
                <div class="dashboard-box margin-top-0">
                        <table id="example" class="basic-table">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Price</th>
                                    <th>Schedule Date</th>
                                    <th>Customer</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($requests as $request)
                                <tr>
                                    <td>{{$request->listing->title}}</td>
                                    <td>${{$request->amount}}</td>
                                    <td><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-calendar mr-2" viewBox="0 0 16 16">
                                            <path
                                                d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
                                        </svg> {{ date('m/d/Y', strtotime($request->schedule_date)) }}</td>
                                    <td>{{$request->customer1 ? $request->customer1->name : $request->customer2->name}}</td>
                                    <td class="text-center"><input type="checkbox" name="action" id="action"></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
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
    <script>
        function reload(){
            console.log('reload')
            location.reload();
        }
    </script>

@endpush