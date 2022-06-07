
@extends('layouts.customer')
@push('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
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
    <div class="dashboard-content-inner" style="background-color: #f2f2f2;" id="app">
    <div class="d-flex flex-row justify-content-between">
        <h2></h2>
        <nav id="breadcrumbs" class="dark" style="z-index: 50; position: static;">
            <ul>
                <li><a href="../">Home</a></li>
                <li><a href="../buyer/dashboard">Dashboard</a></li>
                <li>Manage</li>
            </ul>
        </nav>
    </div>

        <!-- Dashboard Headline -->
        <div class="dashboard-headline row">
            <p class="text-left col-4 h2 text-dark d-inline" id="marketTab" style="cursor:pointer" @click="changeTab('market')">Manage Inventory</p>
            <p class="text-left col-4 h4 d-inline" id="listingTab" style="cursor:pointer" @click="changeTab('listing')">Manage Listings</p>
            <div class="col-5 ml-5 text-right d-inline-block pr-0">
                <a href="{{ route('buyer.manageItems') }}" class="apply-now-button mb-0 d-inline" style="padding: 12px 20px;"><i class="fa fa-repeat"></i> Refresh</a>
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
                <div class="dashboard-box margin-top-0">
                        <table v-if="renderComponent" id="example" class="basic-table">
                            <thead>
                                <tr>
                                    <th>Item Name</th>
                                    <th>List Date</th>
                                    <th>Status</th>
                                    <th>Price</th>
                                    <th>Buyer/Contact</th>
                                    <th>Scheduled Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="(data, index) in datas">
                                    <td class="pr-0 pl-0">@{{data.title}}</td>
                                    <td>@{{format_date(data.created_at)}}</td>
                                    <td>
                                        <select @change="updateData(data.id, index, $event)" :class="{'text-success':data.status==2, 'text-warning': data.status==1}">
                                            <option :selected="data.status==0" value="0">Item Listed</option>
                                            <option value="1" :selected="data.status==1">Sale Scheduled</option>
                                            <option value="2" :selected="data.status==2">Payment Received</option>
                                        </select>
                                    </td>
                                    <td>@{{data.price}}</td>
                                    <td></td>
                                    <td></td>
                                </tr>
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
<script src="{{ asset('js/app.js') }}"></script>
<script>
    new Vue({
        el: '#app',
        data: {
            renderComponent: true,
            datas: '',
            dataType: 'market',
            orderConfirmed: 0,
            paymentConfirmed: 0,
        },
        methods: {

            forceRerender() {
                // Remove component from the DOM
                this.renderComponent = false;
                this.$nextTick(() => {
                    // Add the component back in
                    this.renderComponent = true;
                });
            },

            changeTab(type){
                this.dataType != type ? this.dataType = type : '';
                var marketTab = document.getElementById('marketTab');
                var listingTab = document.getElementById('listingTab');
                if(this.dataType == 'market'){
                    marketTab.classList.remove("h4");
                    marketTab.classList.add("h2", "text-dark");
                    listingTab.classList.remove("h2", "text-dark");
                    listingTab.classList.add("h4");
                } else {
                    marketTab.classList.remove("h2", "text-dark");
                    marketTab.classList.add("h4");
                    listingTab.classList.remove("h4");
                    listingTab.classList.add("h2", "text-dark");
                }
                var getData = {
                    method: 'post',
                    url: '/buyer/manageItemData',
                    data: {
                        type: type,
                        id: @json(Auth::user()->id),
                    }
                };
                axios(getData).then((response) => {
                    this.datas = response.data;
                    this.forceRerender();
                }).catch((e) => {
                    console.log(e)
                })

            },

            format_date(value){
                return moment(String(value)).format('MM/DD/YYYY');
            },
            updateData(id, index, event){
                var value =  event.target.value;
                var update = {
                    method: 'post',
                    url: '/buyer/updateInventory',
                    data: {
                        status: value,
                        id: id,
                    }
                };
                axios(update).then((response) => {
                    this.datas[index] = response.data;
                    this.forceRerender();
                })
            }
        },
        mounted() {
            this.datas = @json($inventory);
        },
    });
</script>
@endsection
@push('js')
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

@endpush