<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{
    public function show()
    {
        $products = Product::all();
        return view('index', compact('products'));
    }
}
