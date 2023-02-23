<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('front');
    }

    public function allProducts()
    {
        $products =  Product::all();
        return response()->json($products);
    }
}
