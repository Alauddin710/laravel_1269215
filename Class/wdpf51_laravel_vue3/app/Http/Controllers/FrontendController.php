<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    public function index()
    {
        return view('front');
    }

    public function allProducts()
    {
        $products =  Product::limit(10)->get();
        // $products[] = Auth::user()->id;
        return response()->json($products);
    }
}
