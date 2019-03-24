<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Product;
use App\ProductListImages;
use File;
use Illuminate\Http\Request;

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

        return view('admin.inc.cars.addCars')
            ->with('categories', $categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $product = new Product;
            $product->categories_id = $request->get('categories_id');
            $product->name = $request->input('name');
            $product->price = $request->input('price');
            $product->discriptions = $request->input('discriptions');
            $product->specification_descriptions = $request->input('specification_descriptions');
            if ($request->hasfile('image')) {
                // File này có thực, bắt đầu đổi tên và move
                $fileExtension = $request->file('image')->getClientOriginalExtension(); // Lấy . của file

                // Filename cực shock để khỏi bị trùng
                $fileName = time() . "_" . rand(0, 9999999) . "_" . md5(rand(0, 9999999)) . "." . $fileExtension;

                // Thư mục upload
                $uploadPath = public_path('/uploads'); // Thư mục upload

                // Bắt đầu chuyển file vào thư mục
                $request->file('image')->move($uploadPath, $fileName);

                // Save DB

                $product->images = $fileName;
            }
            if ($request->hasfile('specification_images')) {
                // File này có thực, bắt đầu đổi tên và move
                $fileExtension = $request->file('specification_images')->getClientOriginalExtension(); // Lấy . của file

                // Filename cực shock để khỏi bị trùng
                $fileName = time() . "_" . rand(0, 9999999) . "_" . md5(rand(0, 9999999)) . "." . $fileExtension;

                // Thư mục upload
                $uploadPath = public_path('/uploads'); // Thư mục upload

                // Bắt đầu chuyển file vào thư mục
                $request->file('specification_images')->move($uploadPath, $fileName);

                // Save DB
                $product->specification_images = $fileName;
            }
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
           
            if ($res) {
                $status = 'Thêm Thành Công';
            } else {
                $status = 'Thêm Thất Bại';
            }
        } catch (\Throwable $th) {
            $status = 'Thêm Thất Bại';
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
        return view('admin.inc.cars.modifyCars')->with('product', $product)
            ->with('categories', $categories)
            ->with('productListImages', $productListImages);
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
        try {
            $destinationPath = 'uploads/';
            // Save DB
            $product = Product::find($id);
            $product->categories_id = $request->get('categories_id');
            $product->name = $request->input('name');
            $product->price = $request->input('price');
            $product->discriptions = $request->input('discriptions');
            $product->specification_descriptions = $request->input('specification_descriptions');

            if ($request->hasfile('image')) {
                // Xoa File
                File::delete($destinationPath . $product->images);
                // File này có thực, bắt đầu đổi tên và move
                $fileExtension = $request->file('image')->getClientOriginalExtension(); // Lấy . của file

                // Filename cực shock để khỏi bị trùng
                $fileName = time() . "_" . rand(0, 9999999) . "_" . md5(rand(0, 9999999)) . "." . $fileExtension;

                // Thư mục upload
                $uploadPath = public_path('/uploads'); // Thư mục upload

                // Bắt đầu chuyển file vào thư mục
                $request->file('image')->move($uploadPath, $fileName);

                $product->images = $fileName;
            }
            if ($request->hasfile('specification_images')) {
                // Xoa File
                File::delete($destinationPath . $product->specification_images);
                // File này có thực, bắt đầu đổi tên và move
                $fileExtension = $request->file('specification_images')->getClientOriginalExtension(); // Lấy . của file

                // Filename cực shock để khỏi bị trùng
                $fileName = time() . "_" . rand(0, 9999999) . "_" . md5(rand(0, 9999999)) . "." . $fileExtension;

                // Thư mục upload
                $uploadPath = public_path('/uploads'); // Thư mục upload

                // Bắt đầu chuyển file vào thư mục
                $request->file('specification_images')->move($uploadPath, $fileName);

                $product->images = $fileName;
            }

            if ($request->hasfile('listImages')) {
                $productListImages = ProductListImages::where('products_id', $id)->get();

                foreach ($productListImages as $item) {
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

            if ($res) {
                $status = 'Sửa Thành Công';
            } else {
                $status = 'Sửa Thất Bại';
            }
        } catch (\Throwable $th) {
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
