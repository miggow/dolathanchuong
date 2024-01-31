<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        return view('admin.order.index', compact('orders'));
    }

    public function show($id)
    {
        $orderDetail = Order::find($id);
        return view('admin.order.order-detail', compact('orderDetail'));
    }

    public function update(Request $request, $id)
    {
        $order = Order::find($id);
        $order->fill(['status' => $request->status]);
        $order->save();
        return redirect()->back();
    }
}
