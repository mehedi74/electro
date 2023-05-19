<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class OrderController extends Controller
{
    public function manageOrder()
    {

        return view('admin.order.index', ['orders' => Order::all()]);
    }

    public function viewOrderDetails($id)
    {
        $order = Order::where('id', $id)->first();
        $orderDetailsById = OrderDetail::where('order_id', $id)->get();
        return view('admin.order.details', compact('order', 'orderDetailsById'));
    }

    public function invoice($id)
    {
        $order = Order::where('id', $id)->first();
        $products_by_orderid = OrderDetail::where('order_id', $id)->get();
        return view('admin.order.invoice', compact('order', 'products_by_orderid'));
    }

    public function invoiceDownload($id)
    {
        $order = Order::where('id', $id)->first();
        $products_by_orderid = OrderDetail::where('order_id', $id)->get();
        $data = ['order' => $order, 'products_by_orderid' => $products_by_orderid];
        $pdf = Pdf::loadView('admin.order.invoice', $data);
        return $pdf->download('admin.order.invoice.pdf');
    }
}
