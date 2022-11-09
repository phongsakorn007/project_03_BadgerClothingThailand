<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Products;
use App\Models\Categories;
use Illuminate\Http\Request;
use Image;
use File;
use Illuminate\Support\Str;
class ProductsController extends Controller
{
    public function index(){
        $products = Products::Paginate(4);
        return view('admin.products.index',compact('products'));
    }

    public function createform(){
        $categories = Categories::all();
        return view('admin.products.create',compact('categories'));
    }
    
    public function insert(Request $request){
        $products = new Products();
        $products->name = $request->name;
        $products->description = $request->description;
        $products->price = $request->price;
        $products->category_id = $request->category_id;
        if ($request->hasFile('image')) {
            $filename = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();   //025G025365.jpg
            $request->file('image')->move(public_path() . '/admin/upload/product/', $filename);
            Image::make(public_path() . '/admin/upload/product/' . $filename);
            $products->image = $filename;
        } else {
            $products->image = 'nopic.jpg';
        }
        $products->save();
        return redirect()->route('products.index');
    }

    public function edit($id){
        $products = Products::find($id);
        $categories = Categories::all();
        return view('admin.products.edit',compact('products','categories'));
    }

    public function update(Request $request,$id){
        if ($request->hasFile('image')) {
            $products = Products::find($id);
             // ลบรูปภาพ
            if ($products->image != 'nopic.jpg') {
                File::delete(public_path() . '/admin/upload/product/' . $products->image);
            }
            //เพิ่มรูปภาพ
            $filename = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();   //025G025365.jpg
            $request->file('image')->move(public_path() . '/admin/upload/product/', $filename);
            Image::make(public_path() . '/admin/upload/product/' . $filename);
            $products->image = $filename;
            //เพิ่มฟิล์ดในกรณีที่มีรูปภาพ
            $products->name = $request->name;
            $products->price = $request->price;
            $products->description = $request->description;
            $products->category_id = $request->category_id;

        } else{
    
        $products = Products::find($id);
        $products->name = $request->name;
        $products->price = $request->price;
        $products->description = $request->description;
        $products->category_id = $request->category_id;
        $products->save();

        }

        $products->save();
        // toast('แก้ไขข้อมูลสำเร็จ','success');
        return redirect()->route('products.index');
    }
    public function delete($id){
        $products = Products::find($id);
        if ($products->image != 'nopic.jpg') {
            File::delete(public_path() . '/admin/upload/product/' . $products->image);
        }
        $products->delete();
        return redirect()->route('products.index');
    }
}