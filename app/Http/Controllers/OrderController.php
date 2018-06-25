<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function make(Request $request)
    {
        $order = new Order();

        $order->name = $request->get('name');
        $order->phone = $request->get('phone');
        $order->page_id = $request->get('page_id');

        $order->save();

        return redirect()->back()->with('status', 'Order Created!');
    }
}
