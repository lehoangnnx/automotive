<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use Illuminate\Support\Facades\DB;

class DetailController extends Controller
{
    public function index($id)
    {
        $product = Product::find($id);
        $categories = Category::all();
       
        return view('detail')->with('categories', $categories)
        ->with('product', $product);
    }
}
