@extends('layouts.rider')
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
          <div class="card mb-3">
            <div class="card-header">
              <i class="fa fa-table"></i> All Order Information
       
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Name</th>
                      <th>Delivery Status</th>
                      <th>action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($order  as $key => $v_order)
                <tr>
                  <td>{{$key+1}}</td>
                  <td>{{$v_order->customer_name}}</td>
                  <td>
                    @if($v_order->deliveryStatus == 1)
                    <span class="badge badge-pill badge-dark">Delivery</span>
                    @elseif($v_order->deliveryStatus == 2)
                    <span class="badge badge-pill badge-danger">Cancelled</span>
                    @else
                    <span class="badge badge-pill badge-info">On The Way</span>
                    @endif
                  </td>

                  <td>
                      <a href="{{url('/rider/order-view')}}/{{$v_order->id}}" class="btn btn-dark">
                              <i class="fa fa-eye" aria-hidden="true"></i>
                            </a>    
                             <button class="btn btn-info checkStatus" data-id="{{$v_order->id}}" data-toggle="modal" data-target="#checkStatus">
                            <i class="fa fa-check-square-o" aria-hidden="true"></i>

                          </button> 
                            <a href="{{url('/rider/order-view')}}/{{$v_order->id}}" class="btn btn-primary">
                           <i class="fa fa-map" aria-hidden="true"></i>

                            </a> 
                  </td>
                </tr>
                @endforeach
                  </tbody>
                </table>
              </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div>
          <!-- /tables-->
          </div>
          <!-- /container-fluid-->
           </div>
        <!-- /container-wrapper-->

        <!-- Modal check status-->
<div class="modal fade" id="checkStatus" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Reservation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{url('rider/deliveryStatus')}}" method="POST">
        @csrf
        <div class="modal-body">
      <div class="form-group">
        <label for="">Reservation Status</label>
        <select name="status" class="form-control" id="">
          <option value="0">On The Way</option>
          <option value="1">Delivery</option>
          <option value="2">cancelled</option>
        </select>
      </div>
      <input type="hidden" name="reserID" id="reserID" value="">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>
@endsection
@push('js')
            <script src="{{asset('content/admin')}}/js/admin-datatables.js"></script>
         <script type="text/javascript">
          $(document).ready(function(){

            $('.details').on('click', function(){
          $('#details').modal('show');

            });  
            $('.checkStatus').on('click', function(){
          $('#checkStatus').modal('show');

            });  

             $('.customModalHide').on('click', function(){
          $('#exampleModal').modal('hide');
          $("#addform")[0].reset();

            });


           });
        </script>

          <script>


       $('body').on('click', '.checkStatus', function () {
        var id = $(this).data("id");

        $('#reserID').val(id);

       });

 

  </script>
@endpush