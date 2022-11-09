<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contents;
use Illuminate\Http\Request;
use Image;
use File;
use Illuminate\Support\Str;
class ContentsController extends Controller
{
    public function index(){
        $contents = Contents::Paginate(4);
        return view('admin.contents.index',compact('contents'));
    }

    public function createform(){
        return view('admin.contents.create');
    }

    public function insert(Request $request){
        $contents = new Contents();
        $contents->name = $request->name;
        $contents->detail = $request->detail;
        $contents->image = $request->image;
        if ($request->hasFile('image')) {
            $filename = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();   //025G025365.jpg
            $request->file('image')->move(public_path() . '/admin/upload/contents/', $filename);
            Image::make(public_path() . '/admin/upload/contents/' . $filename);
            $contents->image = $filename;
        } else {
            $contents->image = 'nopic.jpg';
        }
        $contents->save();
        return redirect()->route('contents.index');

    }
    public function edit($id){
        $contents = contents::find($id);
        return view('admin.contents.edit',compact('contents'));
    }
    
    public function update(Request $request,$id){
        $contents = contents::find($id);
        $contents->name = $request->name;
        $contents->detail = $request->detail;
        $contents->update();
        // toast('แก้ไขข้อมูลสำเร็จ','success');
        return redirect()->route('contents.index');
    }
    public function delete($id){
        $contents = Contents::find($id);
        if ($contents->image != 'nopic.jpg') {
            File::delete(public_path() . '/admin/upload/contents/' . $contents->image);
        }
        $contents->delete();
        return redirect()->route('contents.index');
    }
}
