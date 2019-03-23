<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Attribute;
use App\AttributeValue;
class AttributeValueController extends Controller
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
        $attributes = Attribute::all();
        return view('admin.inc.attributesValues.addAttributesValues')
        ->with('attributes', $attributes);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attributeValue = new AttributeValue;
        $attributeValue->attributes_id = $request->get('attribute_id');
        $attributeValue->name = $request->input('name');
        $res = $attributeValue->save();
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
        $attributes = Attribute::all();
        $attributeValue = AttributeValue::find($id);
        return view('admin.inc.attributesValues.modifyAttributesValues')
        ->with('attributes', $attributes)
        ->with('attributeValue', $attributeValue);
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
        $attributeValue = AttributeValue::find($id);
        $attributeValue->attributes_id = $request->get('attribute_id');
        $attributeValue->name = $request->input('name');
        $res = $attributeValue->update();
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
        $res = AttributeValue::destroy($id);
        if($res){
            $status = 'Xóa Thành Công'; 
        }else {
            $status = 'Xóa Thất Bại';
        }
        return redirect('admin')->with('status',  $status);
    }
}
