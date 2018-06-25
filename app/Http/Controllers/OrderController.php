<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateOrderRequest;
use App\Order;

class OrderController extends Controller
{
    public function make(CreateOrderRequest $request)
    {
        $order = new Order();

        $order->name = $request->get('name');
        $order->phone = $request->get('phone');
        $order->page_id = $request->get('page_id');

        $order->save();


    }
}
