<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Product;
use App\Attribute;
use App\AttributeValue;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categories = Category::all();
        $attributes = Attribute::all();
        $attributesValues = AttributeValue::all();
        $products = Product::all();
        return view('admin.dashboard')->with('categories', $categories)
        ->with('products', $products)
        ->with('attributes', $attributes)
        ->with('attributesValues', $attributesValues);
    }
}
