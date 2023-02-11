<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    //Show Category Methods
    public function index()
    {
        $data = DB::table('categories')->get();
        return view('admin.category.category.index', compact('data'));
    }
}
