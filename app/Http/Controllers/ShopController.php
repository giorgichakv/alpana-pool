<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; // <- ეს აუცილებელია

class ShopController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('shop.index', compact('products'));
    }
}
