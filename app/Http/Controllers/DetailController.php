<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
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
