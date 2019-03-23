<?php

namespace App\Http\Controllers\Admin;

use App\AttributeValue;
use App\Category;
use App\Http\Controllers\Controller;
use App\Product;
use App\ProductAttribute;
use App\ProductListImages;
use File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $attributesValues = AttributeValue::all();
        return view('admin.inc.cars.addCars')
            ->with('categories', $categories)
            ->with('attributesValues', $attributesValues);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $rules = ['image' => 'image|max:2048'];
        $posts = ['image' => $request->file('image')];

        // Validator để kiểm tra
        $valid = Validator::make($posts, $rules);

        // Kiểm tra nếu có lỗi
        if ($valid->fails()) {
            // Có lỗi, redirect trở lại
            return redirect()->back()->withInput();
        } else {
            // Ko có lỗi, kiểm tra nếu file đã dc upload
            if ($request->file('image')->isValid()) {
                // File này có thực, bắt đầu đổi tên và move
                $fileExtension = $request->file('image')->getClientOriginalExtension(); // Lấy . của file

                // Filename cực shock để khỏi bị trùng
                $fileName = time() . "_" . rand(0, 9999999) . "_" . md5(rand(0, 9999999)) . "." . $fileExtension;

                // Thư mục upload
                $uploadPath = public_path('/uploads'); // Thư mục upload

                // Bắt đầu chuyển file vào thư mục
                $request->file('image')->move($uploadPath, $fileName);

                // Save DB
                $product = new Product;
                $product->categories_id = $request->get('categories_id');
                $product->name = $request->input('name');
                $product->price = $request->input('price');
                $product->discriptions = $request->input('discriptions');
                $product->images = $fileName;
                $res = $product->save();
                if ($request->hasfile('listImages')) {
                    foreach ($request->file('listImages') as $file) {
                        $name = time() . "_" . rand(0, 9999999) . "_" . md5(rand(0, 9999999)) . "."
                        . $file->getClientOriginalExtension();
                        $file->move(public_path('/uploads'), $name);
                        $productListImages = new ProductListImages;
                        $productListImages->products_id = $product->id;
                        $productListImages->images = $name;
                        $productListImages->save();
                    }
                }
                $attributesValues = $request->get('attributes_values');
                foreach ($attributesValues as $item) {
                    $productAttribute = new ProductAttribute;
                    $productAttribute->products_id = $product->id;
                    $productAttribute->attributes_values_id = $item;
                    $productAttribute->save();
                }
                if ($res) {
                    $status = 'Thêm Thành Công';
                } else {
                    $status = 'Thêm Thất Bại';
                }
            } else {
                $status = 'Thêm Thất Bại';
            }
        }

        return redirect('admin')->with('status', $status);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $categories = Category::all();
        $productListImages = ProductListImages::where('products_id', $product->id)->get();
        $attributesValues = AttributeValue::all();
        return view('admin.inc.cars.modifyCars')->with('product', $product)
            ->with('categories', $categories)
            ->with('productListImages', $productListImages)
            ->with('attributesValues', $attributesValues);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = ['image' => 'image|max:2048'];
        $posts = ['image' => $request->file('image')];

        // Save DB
        $product = Product::find($id);
        $product->categories_id = $request->get('categories_id');
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->discriptions = $request->input('discriptions');

        // Validator để kiểm tra
        $valid = Validator::make($posts, $rules);
        if ($request->hasfile('image')) {
            // Kiểm tra nếu có lỗi
            if ($valid->fails()) {
                // Có lỗi, redirect trở lại
                return redirect()->back()->withInput();
            } else {
                // Xoa File
                $destinationPath = 'uploads/';
                File::delete($destinationPath . $product->images);
                // Ko có lỗi, kiểm tra nếu file đã dc upload
                if ($request->file('image')->isValid()) {
                    // File này có thực, bắt đầu đổi tên và move
                    $fileExtension = $request->file('image')->getClientOriginalExtension(); // Lấy . của file

                    // Filename cực shock để khỏi bị trùng
                    $fileName = time() . "_" . rand(0, 9999999) . "_" . md5(rand(0, 9999999)) . "." . $fileExtension;

                    // Thư mục upload
                    $uploadPath = public_path('/uploads'); // Thư mục upload

                    // Bắt đầu chuyển file vào thư mục
                    $request->file('image')->move($uploadPath, $fileName);

                    $product->images = $fileName;
                } else {
                    $status = 'Thêm Thất Bại';
                }
            }
        }

        if ($request->hasfile('listImages')) {
            $productListImages = ProductListImages::where('products_id', $id)->get();

            foreach ($productListImages as $item) {
                $destinationPath = 'uploads/';
                File::delete($destinationPath . $item->images);
            }
            ProductListImages::where('products_id', $id)->delete();
            foreach ($request->file('listImages') as $file) {
                $name = time() . "_" . rand(0, 9999999) . "_" . md5(rand(0, 9999999)) . "."
                . $file->getClientOriginalExtension();
                $file->move(public_path('/uploads'), $name);
                $productListImages = new ProductListImages;
                $productListImages->products_id = $product->id;
                $productListImages->images = $name;
                $productListImages->save();
            }
        }
        $res = $product->save();
        ProductAttribute::where('products_id', $product->id)->delete();
        $attributesValues = $request->get('attributes_values');
        if ($attributesValues) {
            foreach ($attributesValues as $item) {
                $productAttribute = new ProductAttribute;
                $productAttribute->products_id = $product->id;
                $productAttribute->attributes_values_id = $item;
                $productAttribute->save();
            }
        }
        if ($res) {
            $status = 'Sửa Thành Công';
        } else {
            $status = 'Sửa Thất Bại';
        }
        return redirect('admin')->with('status', $status);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $res = Product::destroy($id);
            if ($res) {
                $status = 'Xóa Thành Công';
            } else {
                $status = 'Xóa Thất Bại';
            }
        } catch (\Throwable $th) {
            $status = 'Xóa Thất Bại';
        }

        return redirect('admin')->with('status', $status);
    }
}
