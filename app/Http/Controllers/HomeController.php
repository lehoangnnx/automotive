<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Category;
use App\Contact;
use App\Product;
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
        try{
            $contact = new Contact;
            $contact->name = $request->input('name');
            $contact->phone = $request->input('phone');
            $contact->email = $request->input('email');
            $contact->content = $request->input('content');
            $contact->save();
        } catch(\Throwable $th){

        }
        return redirect()->back();
    }

    public function productCategory($id)
    {
        $categories = Category::all();
        $category = Category::find($id);
        return view('category')->with('categories', $categories)
        ->with('category', $category);
    }
}
