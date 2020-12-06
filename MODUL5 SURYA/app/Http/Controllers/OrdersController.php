<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;

class OrdersController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('/Orders/index', ['products' => $products]);
    }
    public function show(Order $id)
    {
        $orders = Order::find($id);
        return view('/Orders/store', ['orders' => $orders]);
    }
    public function history()
    {
        $orders = Order::all();
        return view('/Orders/history', ['orders' => $orders]);
    }

    
    public function store(Request $request)
    {
        Orders::create($request->all());
        return view('/Orders/index');
    }
}

?>