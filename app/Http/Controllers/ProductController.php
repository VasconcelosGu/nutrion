<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Product $product)
    {
        $products = $product->all();
        return view('calculo-calorias', compact('products'));
    }
}
