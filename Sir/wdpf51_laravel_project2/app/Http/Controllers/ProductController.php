<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Category;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::latest()->paginate(20);
        $cats = Category::orderBy('cat_name', 'ASC')->get();
        //$data['products'] = Product::orderBy('id', 'DESC')->get();
        //$products = Product::orderBy('id', 'DESC')->get();
        return view("backend.product.index", compact('products', 'cats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cats = Category::orderBy('cat_name', 'ASC')->get();
        return view("backend.product.create", compact('cats'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation = $request->validate([
            'product_name' => 'required',
            'product_details' => 'min:5|max:200',
            'product_price' => 'required',
            'product_category' => 'required',
            'product_stock' => 'required',
<<<<<<< HEAD
<<<<<<< HEAD
            'product_image' => 'image|mimes:png,jpg|max:2048'
        ]);
        $imageName = time() . '.' .
            $request->product_image->extension();
        $request->product_image->move(public_path('product_photos'), $imageName);
=======
            'product_image' => 'mimes:png,jpg,pdf|max:2048',
        ]);
>>>>>>> 5fcc0c847dd2a4b85939cd433f5d54480e14c383
=======
            'product_image' => 'mimes:png,jpg,pdf|max:2048',
        ]);
>>>>>>> 6ad1373cf4a43c53c7fd261570bcbb7cae2a1bc9
        $product = new Product;
        $product->product_name = $request->product_name;
        $product->product_details = $request->product_details;
        $product->product_price = $request->product_price;
        $product->product_category = $request->product_category;
        $product->product_stock = $request->product_stock;
<<<<<<< HEAD
<<<<<<< HEAD
        // $product->product_image = $request->product_image;
        $product->product_image = $imageName;
=======
=======
>>>>>>> 6ad1373cf4a43c53c7fd261570bcbb7cae2a1bc9
        if ($request->product_image) {
            $imageName = time() . '.' . $request->product_image->extension();
            $request->product_image->move(public_path('product_photos'), $imageName);
            $product->product_image =  $imageName;
        } else {
            $product->product_image =  '';
        }
        $product->save();
        return redirect('products')->with('msg', "Product Added");
<<<<<<< HEAD
>>>>>>> 5fcc0c847dd2a4b85939cd433f5d54480e14c383
=======
>>>>>>> 6ad1373cf4a43c53c7fd261570bcbb7cae2a1bc9
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
<<<<<<< HEAD
<<<<<<< HEAD
        //
=======

        return view("backend.product.single", compact('product'));
>>>>>>> 5fcc0c847dd2a4b85939cd433f5d54480e14c383
=======

        return view("backend.product.single", compact('product'));
>>>>>>> 6ad1373cf4a43c53c7fd261570bcbb7cae2a1bc9
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
<<<<<<< HEAD
<<<<<<< HEAD
        // echo "Hello";
        // echo $product->id;
        $cats = Category::orderBy('cat_name', 'ASC')->get();
        return view("backend.product.edit", compact('product', 'cats'));
=======
        //
>>>>>>> 5fcc0c847dd2a4b85939cd433f5d54480e14c383
=======
        //
>>>>>>> 6ad1373cf4a43c53c7fd261570bcbb7cae2a1bc9
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
<<<<<<< HEAD
<<<<<<< HEAD
        echo "Update";


        $validation = $request->validate([
            'product_name' => 'required',
            'product_details' => 'min:5|max:200',
            'product_price' => 'required',
            'product_category' => 'required',
            'product_stock' => 'required',
            'product_image' => 'image|mimes:png,jpg|max:2048'
        ]);
        $imageName = time() . '.' .
            $request->product_image->extension();
        $request->product_image->move(public_path('product_photos'), $imageName);
        $product = new Product;
        $product->product_name = $request->product_name;
        $product->product_details = $request->product_details;
        $product->product_price = $request->product_price;
        $product->product_category = $request->product_category;
        $product->product_stock = $request->product_stock;
        // $product->product_image = $request->product_image;
        $product->product_image = $imageName;
        $product->save();
        return redirect('products')->with('msg', "Product Added");
=======
        //
>>>>>>> 5fcc0c847dd2a4b85939cd433f5d54480e14c383
=======
        //
>>>>>>> 6ad1373cf4a43c53c7fd261570bcbb7cae2a1bc9
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
<<<<<<< HEAD
<<<<<<< HEAD
        echo $product->id;
        $product->delete();
        return redirect('products')->with('msg', 'Product deleted');
=======
        //
>>>>>>> 5fcc0c847dd2a4b85939cd433f5d54480e14c383
=======
        //
>>>>>>> 6ad1373cf4a43c53c7fd261570bcbb7cae2a1bc9
    }
}
