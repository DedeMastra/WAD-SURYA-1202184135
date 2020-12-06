<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('/Products/index', ['products' => $products]);
    }
    public function insert()
    {
        return view('/Products/insert');
    }
    public function update(Product $id)
    {
        return view('/Products/update', ['id' => $id]);
    }

    
    public function store(Request $request)
    {
        // dd($request);
        Product::create($request->all());
        $products = Product::all();
        return view('/Products/index', ['products' => $products]);
    }
}

?>