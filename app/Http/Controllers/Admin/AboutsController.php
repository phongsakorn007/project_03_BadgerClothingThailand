<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Abouts;
use Illuminate\Http\Request;
use Image;
use File;
use Illuminate\Support\Str;
class AboutsController extends Controller
{
    public function index(){
        $abouts = Abouts::Paginate(4);
        return view('admin.abouts.index',compact('abouts'));
    }

    public function createform(){
        return view('admin.abouts.create');
    }

    public function insert(Request $request){
        $abouts = new Abouts();
        $abouts->name = $request->name;
        $abouts->detail = $request->detail;
        $abouts->image = $request->image;
        if ($request->hasFile('image')) {
            $filename = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();   //025G025365.jpg
            $request->file('image')->move(public_path() . '/admin/upload/abouts/', $filename);
            Image::make(public_path() . '/admin/upload/abouts/' . $filename);
            $abouts->image = $filename;
        } else {
            $abouts->image = 'nopic.jpg';
        }
        $abouts->save();
        return redirect()->route('abouts.index');
}
    public function edit($id){
        $abouts = Abouts::find($id);
        return view('admin.abouts.edit',compact('abouts'));
    }
    public function update(Request $request,$id){
        $abouts = Abouts::find($id);
        $abouts->name = $request->name;
        $abouts->detail = $request->detail;
        $abouts->update();
        // toast('แก้ไขข้อมูลสำเร็จ','success');
        return redirect()->route('abouts.index');
    }
    public function delete($id){
        $abouts = Abouts::find($id);
        if ($abouts->image != 'nopic.jpg') {
            File::delete(public_path() . '/admin/upload/abouts/' . $abouts->image);
        }
        $abouts->delete();
        return redirect()->route('abouts.index');
    }
}