<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class FontendController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('font_page', compact('products'));
    }
}
