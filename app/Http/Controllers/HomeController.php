<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Contact;
class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categories = Category::all();
        return view('home')->with('categories', $categories);
    }

    public function sendContact(Request $request)
    {
        $contact = new Contact;
        return view('home')->with('categories', $categories);
    }
    public function productCategory($id)
    {
        $categories = Category::all();
        $category = Category::find($id);
        return view('category')->with('categories', $categories)
        ->with('category', $category);
    }
}
