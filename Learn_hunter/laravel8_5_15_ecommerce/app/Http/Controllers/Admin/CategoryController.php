<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategoryController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    //Show Category Methods
    public function index()
    {
        // $data = DB::table('categories')->get(); //Query builder
        $data = Category::all(); //Eloquent ORM
        return view('admin.category.category.index', compact('data'));
    }
    //Category store method
    public function store(Request $request)
    {
        $validated = $request->validate([
            'category_name' => 'required|unique:categories|max:55',
        ]);
        //query builder
        // $data = array();
        // $data['category_name'] = $request->category_name;
        // $data['category_slug'] = Str::slug($request->category_name, '-');
        // DB::table('categories')->insert($data);
        //Eloquent ORM

        Category::insert([
            'category_name' => $request->category_name,
            'category_slug' => Str::slug($request->category_name, '-')
        ]);
        $notification = array('messege' => 'Category Inserted', 'alert-type' => 'success');
        return redirect()->back()->with($notification);
    }

    //destory
    public function destory($id)
    {
        //query builder
        // DB::table('categories')->where('id', $id)->delete();

        //Eloquent ORM

        $category = Category::find($id);
        $category->delete();
        $notification = array('messege' => 'Category Deleted', 'alert-type' => 'success');
        return redirect()->back()->with($notification);
    }
}
