<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Attribute;
class AttributeController extends Controller
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
        return view('admin.inc.attributes.addAttributes');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attribute = new Attribute;
        $attribute->name = $request->input('name');
        $res = $attribute->save();
        if($res){
            $status = 'Thêm Thành Công'; 
        }else {
            $status = 'Thêm Thất Bại';
        }
        return redirect('admin')->with('status',  $status);      
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
        $attribute = Attribute::find($id);
        return view('admin.inc.attributes.modifyAttributes')->with('attribute', $attribute);
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
        $attribute = Attribute::find($id);
        $attribute->name = $request->input('name');
        $res = $attribute->update();
        if($res){
            $status = 'Sửa Thành Công'; 
        }else {
            $status = 'Sửa Thất Bại';
        }
        return redirect('admin')->with('status',  $status);     
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $res = Attribute::destroy($id);
        if($res){
            $status = 'Xóa Thành Công'; 
        }else {
            $status = 'Xóa Thất Bại';
        }
        return redirect('admin')->with('status',  $status);
    }
}
