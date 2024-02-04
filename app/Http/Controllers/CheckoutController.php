<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Order;
use App\OrderDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CheckoutController extends Controller
{

    public function placeOrder(Request $request)
    {
        $validated = $request->validate([
            'phone' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'radio_group_delivery' => 'required',
            // 'payment_method_id' => 'required',
            'address' => 'required',
            'total' => 'required|integer',
            'ec_select_city' => 'required',
            'ec_select_district' => 'required',
            'ec_select_ward' => 'required'
        ]);
        DB::beginTransaction();
        try {
            $customer = Customer::firstOrCreate(
                ['phone' => $request->phone],
                ['customer_name' => $request->firstname . " " . $request->lastname],
            );
            $order = Order::create(
                [
                    'customer_id' => $customer->id,
                    // 'delivery_method' => $request->radio_group_delivery,
                    // 'payment_method_id' => $request->payment_method_id,
                    'note' => $request->note,
                    'address' => $request->address . " " . $request->ec_select_ward  . " " . $request->ec_select_district . " " . $request->ec_select_city,
                    'total' => $request->total,
                ]
            );
            $carts = session()->get('cart');
            foreach ($carts as $cart) {
                OrderDetail::create([
                    'variant_id' => $cart['variant_id'],
                    'order_id' => $order->id,
                    'quantity' => $cart['quantity'],
                ]);
            }
            DB::commit();
            return view('fe.feature.checkout.thank-you');
        } catch (\Exception $e) {
            DB::rollback();
            $errorMessage = $e->getMessage();
            return view('fe.feature.checkout.payment-fail', compact('errorMessage'));
        }
    }
}
