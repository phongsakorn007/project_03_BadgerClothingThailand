<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Products;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $products = Products::all();
        return view('promotepage.home',compact('products'));
    }

    public function category(){
        $category = Products::all();
        return view('promotepage.category',compact('category'));
    }

    public function singleproduct(){
        $singleproduct = Products::all();
        return view('promotepage.single-product',compact('singleproduct'));
    }

    public function checkout(){
        $checkout = Products::all();
        return view('promotepage.checkout',compact('checkout'));
    }

    public function cart(){
        $cart = Products::all();
        return view('promotepage.cart',compact('cart'));
    }

    public function confirmation(){
        $confirmation = Products::all();
        return view('promotepage.confirmation',compact('confirmation'));
    }

    public function blog(){
        $blog = Products::all();
        return view('promotepage.blog',compact('blog'));
    }

    public function singleblog(){
        $singleblog = Products::all();
        return view('promotepage.single-blog',compact('singleblog'));
    }

    

   
}