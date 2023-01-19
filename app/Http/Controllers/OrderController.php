<?php

namespace App\Http\Controllers;

use App\Models\Order;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        return Order::all();
    }

    public function store(Request $request)
    {
        return Order::create([
            'delivery_address' => $request->delivery_address,
            'amount'=> $request->amount,
            'shipping_fee'=> $request->shipping_fee,
            'payment_method'=> $request->payment_method,

        ]);
    }



    public function update(Request $request, $id)
    {
        return Order::find($id)->update(
            [
                'delivery_address' => $request->delivery_address,
                'amount'=> $request->amount,
                'shipping_fee'=> $request->shipping_fee,
                'payment_method'=> $request->payment_method,
            ]
        );
    }

    public function destroy(Order $order)
    {
        $order->delete();
    }

    public function show(Order $order)
    {
        return $order;
    }
}
