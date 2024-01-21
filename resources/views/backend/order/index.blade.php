@extends('backend.layouts.main')

@section('content')
<div class="row">
    <div class="col-lg-12 mb-4 order-0"> 
        <div class="card">
            <div class="card-body">
                <div class="d-flex flex-wrap justify-content-between align-items-center mb-3">
                    <div class="d-flex flex-column justify-content-center">
                        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Orders/</span> All</h4>
                    </div>
                </div>
            
                <div class="row">
                    <div class="col-lg-12">
                      @if(session()->has('permission'))
                        <div class="alert alert-danger">
                          {{ session('permission') }}
                        </div>
                      @endif
                        <div class="table-responsive text-nowrap">
                            <table class="table card-table">
                              <thead>
                                <tr>
                                  <th>ORDER</th>
                                  <th>TOTAL</th>
                                  <th>FEES</th>
                                  <th>STATUS</th>
                                  <th>PAYMENT CHANNEL</th>
                                  <th>CUSTOMER</th>
                                  <th>DATE</th>
                                </tr>
                              </thead>
                              <tbody class="table-border-bottom-0">
                                @forelse ($orders as $order)
                                <tr>
                                    <td><a href="{{ route('orders.detail',$order->id) }}" style="text-decoration:underline;">{{ '#'.$order->id }}</a></td>
                                    
                                    <td>{{ '₦' . $order->total - $order->discount }}</td>
                                    <td>{{ '₦' . $order->fees }}</td>
                                    <td><span class="badge {{ App\Http\Controllers\OrderController::statusClass($order->order_status) }} me-1">{{ $order->order_status }}</span></td>
                                    <td>{{ $order->payment_method == 'COD' ? 'Cash on Delivery' : $order->payment_method }}</td>
                                    <td>{{ $order->recipient_name }}</td>
                                    <td><span class="">{{ $order->created_at->toDayDateTimeString() }}</span></td>
                                </tr>
                                @empty
                                    <tr>
                                        <td>You don't have any orders yet!</td>
                                    </tr>   
                                @endforelse
                              </tbody>
                            </table>
                          </div>
                    </div>
                </div>    
            </div>
        </div>
    </div>
</div>
@endsection