<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        $cats = Category::orderBy('category_name', 'ASC')->get();
        return view('backend.product.index', compact('products', 'cats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cats = Category::orderBy('category_name', 'ASC')->get(); // category table theke anbe
        return view("backend.product.create", compact('cats')); // from show korbe product createer jonno
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validationer jonno 
        $validation = $request->validate([
            'pr_name' => 'required',
            'pr_details' => 'min:5|max:200',
            'pr_price' => 'required',
            'pr_category' => 'required',
            'pr_stock' => 'required',
            'pr_image' => 'mimes:png,jpg,pdf|max:2048',
        ]);
        $product = new Product();
        // bam paser ta database name and dan passer ta from name
        $product->product_name = $request->pr_name;
        $product->product_details = $request->pr_details;
        $product->product_price = $request->pr_price;
        $product->product_category = $request->pr_category;
        $product->product_stock = $request->pr_stock;
        // $product->product_image = $request->pr_image;

        if ($request->pr_image) {
            $imageName = time() . '.' . $request->pr_image->extension();
            // $requeste pr_image holo form name, and sokol request holo form name
            $request->pr_image->move(public_path('product_photos'), $imageName);
            $product->product_image =  $imageName;
        } else {
            $product->product_image =  '';
        }
        $product->save();
        return redirect('products')->with('msg', "Product Added");
        // $product->save();
        // return redirect('/products');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('backend.product.single', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        echo "Product Edit";
        $cats = Category::orderBy('category_name', 'ASC')->get();
        return view('backend.product.edit', compact('product', 'cats'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        // ai code tuko stor method theke copy kore niea asa hoice
        // validationer jonno 
        $validation = $request->validate([
            'pr_name' => 'required',
            'pr_details' => 'min:5|max:200',
            'pr_price' => 'required',
            'pr_category' => 'required',
            'pr_stock' => 'required',
            'pr_image' => 'mimes:png,jpg,pdf|max:2048',
        ]);

        // bam paser ta database name and dan passer ta from name
        $product->product_name = $request->pr_name;
        $product->product_details = $request->pr_details;
        $product->product_price = $request->pr_price;
        $product->product_category = $request->pr_category;
        $product->product_stock = $request->pr_stock;


        if ($request->pr_image) {
            $imageName = time() . '.' . $request->pr_image->extension();
            // $requeste pr_image holo form name, and sokol request holo form name
            $request->pr_image->move(public_path('product_photos'), $imageName);
            $product->product_image =  $imageName;
        }
        $product->update();
        return redirect('products')->with('msg', "Product Update");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect('products')->with('msg', 'Product Deleted');
    }
}
