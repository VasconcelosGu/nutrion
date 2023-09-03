<?php

namespace App\Http\Controllers;

use App\Imports\ProductImport;
use App\Models\Product;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ProductController extends Controller
{
    public function index(Product $product)
    {
        $products = $product->all();
        return view('calculo-calorias', compact('products'));
    }

    public function importarProdutos(Request $request)
    {

        Excel::import(new ProductImport, $request->file('produtos'), null, \Maatwebsite\Excel\Excel::XLSX);

        return redirect('/');
    }
}
