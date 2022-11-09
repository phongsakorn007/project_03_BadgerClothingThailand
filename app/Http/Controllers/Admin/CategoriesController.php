<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index(){
        $categories = Categories::Paginate(4);
        return view('admin.categories.index',compact('categories'));
    }

    public function createform(){
        return view('admin.categories.create');
    }

    public function insert(Request $request){
        $categories = new Categories();
        $categories->name = $request->name;
        $categories->save();
        return redirect()->route('categories.index');
    }
    public function edit($id){
        $categories = Categories::find($id);
        return view('admin.categories.edit',compact('categories'));
    }
    public function update(Request $request,$id){
        $categories = Categories::find($id);
        $categories->name = $request->name;
        $categories->update();
        // toast('แก้ไขข้อมูลสำเร็จ','success');
        return redirect()->route('categories.index');
    }
    public function delete($id){
        $categories = Categories::find($id);
        $categories->delete();
        return redirect()->route('categories.index');
    }
}
