@extends('layouts.admin')
@push('css')
<style>
.card-header i{
    margin-right: 5px;
}
</style>
@endpush
@section('content')
  <!-- /Navigation-->
  <div class="content-wrapper">
        <div class="container-fluid">
          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Tables</li>
          </ol>
            <!-- Example DataTables Card-->
               @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

              @if (count($errors) > 0)
                 <div class = "alert alert-danger">
                    <ul>
                       @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                       @endforeach
                    </ul>
                 </div>
              @endif
          <div class="card mb-3" ">
            <div class="card-header">
              <i class="fa fa-table"></i> Order  Information
            </div>


          <div class="card-body" style="padding: 20px">
              <div class="row">
              <div class="col-md-6">
                <div class="card">
                  <div class="card-header bg-info" style="color: #fff;font-weight: 700">
                    <i class="fa fa-table"></i>Customer Information
                  </div>
                  <div class="card-body">
                     <div class="table-responsive">
                                            <table class="table table-borderless table-hover table-sm" >
                                                <tbody>
                                                <tr>
                                                    <th class="45%" width="45%">{{ __('Order ID') }}</th>
                                                    <td width="10%">:</td>
                                                    <td class="45%" width="45%"></td>
                                                </tr>
                                                <tr>
                                                    <th width="45%">{{ __('Total Product') }}</th>
                                                    <td width="10%">:</td>
                                                    <td width="45%">{{$getOrder->totalQty}}</td>
                                                </tr>
                                                <tr>
                                                    <th width="45%">{{ __('Total Cost') }}</th>
                                                    <td width="10%">:</td>
                                                    <td width="45%">{{$getOrder->pay_amount}}</td>
                                                </tr>
                                                <tr>
                                                    <th width="45%">{{ __('Ordered Date') }}</th>
                                                    <td width="10%">:</td>
                                                    <td width="45%">{{$getOrder->date}}</td>
                                                </tr>
                                                <tr>
                                                    <th width="45%">{{ __('Payment Method') }}</th>
                                                    <td width="10%">:</td>
                                                    <td width="45%">{{$getOrder->payment_method}}</td>
                                                </tr>
                                      
                                              
                                                <tr>
                                                    <th width="45%">{{ __('Transaction ID') }}</th>
                                                    <td width="10%">:</td>
                                                    <td width="45%">{{$getOrder->txnid}}</td>
                                                </tr>                         
                                                

                                                  <tr>
                                                    <th width="45%">{{ __('Payment Status') }}</th>
                                                    <th width="10%">:</th>
                                                    <td width="45%"><span class='badge badge-danger'>Unpaid</span><span class='badge badge-success'>Paid</span>"</td>
                                                    </tr>
                                            
                                           

                                                </tbody>
                                            </table>
                                        </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="row">
                  <div class="col-md-12">
                    <div class="card">
                  <div class="card-header bg-info" style="color: #fff;font-weight: 700">
                    <i class="fa fa-table"></i>Customer Information
                  </div>
                  <div class="card-body">
                     <div class="table-responsive">
                                            <table class="table table-borderless table-hover table-sm" >
                                                <tbody>
                                                <tr>
                                                    <th class="45%" width="45%">{{ __('Customer Name') }}</th>
                                                    <td width="10%">:</td>
                                                    <td class="45%" width="45%">{{$getOrder->customer_name}}</td>
                                                </tr>
                                                <tr>
                                                    <th width="45%">{{ __('Customer Number') }}</th>
                                                    <td width="10%">:</td>
                                                    <td width="45%">{{$getOrder->customer_phone}}</td>
                                                </tr>
                                                <tr>
                                                    <th width="45%">{{ __('Customer Email') }}</th>
                                                    <td width="10%">:</td>
                                                    <td width="45%">{{$getOrder->customer_email}}</td>
                                                </tr>
                                                <tr>
                                                    <th width="45%">{{ __('Customer Addresss') }}</th>
                                                    <td width="10%">:</td>
                                                    <td width="45%">{{$getOrder->customer_address}}</td>
                                                </tr>
                                              
                
                                             
                                              
                                                </tbody>
                                            </table>
                                        </div>
                  </div>
                </div>
                  </div>
                    <div class="col-md-12">
                    <div class="card">
                  <div class="card-header bg-info" style="color: #fff;font-weight: 700">
                    <i class="fa fa-table"></i>Order Pick or Delivery Information
                  </div>
                  <div class="card-body">
                     <div class="table-responsive">
                                            <table class="table table-borderless table-hover table-sm" >
                                                <tbody>
                                                <tr>
                                                    <th class="45%" width="45%">{{ __('Order Type') }}</th>
                                                    <td width="10%">:</td>
                                                    <td class="45%" width="45%"><span class="badge badge-pill badge-danger">{{$getOrder->order_method}}</span></td>
                                                </tr>
                                                <tr>
                                                    <th width="45%">{{ __('Order Pick/Delivery Time') }}</th>
                                                    <td width="10%">:</td>
                                                    <td width="45%">{{$getOrder->time}}</td>
                                                </tr>
                                                <tr>
                                                    <th width="45%">{{ __('Order Date') }}</th>
                                                    <td width="10%">:</td>
                                                    <td width="45%">{{$getOrder->date}}</td>
                                                    
                                                </tr>
                                              
                
                                             
                                              
                                                </tbody>
                                            </table>
                                        </div>
                  </div>
                </div>
                  </div>
                </div>  
              </div>
              <div class="col-md-12">
                 <div class="card">
                  <div class="card-header bg-info" style="color: #fff;font-weight: 700">
                    <i class="fa fa-table"></i>Orders Products Information
                  </div>
                  <div class="card-body">
                     <div class="table-responsive">
                                            <table class="table  table-hover" >
                                              <thead>
                                                <th>No.</th>
                                                <th>Product Name</th>
                                                <th>Product Qty</th>
                                                <th>Product Details</th>
                                                <th>Product Price</th>
                                                <th>Product Image</th>
                                              </thead>
                                                <tbody>
                                                 
                                                </tbody>
                                            </table>
                                        </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

           
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div>
          <!-- /tables-->
          </div>
          <!-- /container-fluid-->
           </div>
        <!-- /container-wrapper-->
@endsection
@push('js')
        <script src="{{asset('content/admin')}}/js/admin-datatables.js"></script>
@endpush