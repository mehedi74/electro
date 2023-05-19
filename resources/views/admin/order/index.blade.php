@extends('admin.master')
@section('title')
    Orders
@endsection
@section('body')
    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header" data-original-title>
                <h2><i class="fa fa-first-order"></i><span class="break"></span>Orders</h2>
                <div class="box-icon">
                    <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                    <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                    <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                <table class="table table-striped table-bordered bootstrap-datatable datatable">
                    <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Customer Name</th>
                        <th>Total Amount</th>
                        <th>Order Date & Time</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($orders as $order)
                        <tr>
                            <td>{{$order->id}}</td>
                            <td class="center">{{$order->customer->name}}</td>
                            <td class="center">	&#2547;{{$order->total}}</td>
                            <td class="center">{{\Carbon\Carbon::parse($order->created_at)->format('Md,Y - h:iA')}}</td>

                            <td class="center">
                                @if($order->status==1)
                                <span class="label label-success">Active</span>
                                @else
                                <span class="label label-danger">Unactive</span>
                                @endif
                            </td>
                            <td class="center">
                                @if($order->status==1)
                                <a class="btn btn-danger" href="#">
                                    <i class="halflings-icon white thumbs-down"></i>
                                </a>
                                @else
                                <a class="btn btn-success" href="#">
                                    <i class="halflings-icon white thumbs-up"></i>
                                </a>
                                @endif
                                <a class="btn btn-info" href="{{route('order.details',['id'=>$order->id])}}">
                                    <i class="halflings-icon white edit"></i>
                                </a>
                                <a class="btn btn-danger" href="#" id="delete">
                                    <i class="halflings-icon white trash"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>

                </table>
            </div>
        </div><!--/span-->

    </div><!--/row-->
@endsection
