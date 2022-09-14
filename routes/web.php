<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/about',function(){
//     return "หน้าเกี่ยวกับเรา";
// });


Route::view('/','promotepage.home')->name('home');
Route::get('/category', [App\Http\Controllers\CategoryController::class, 'index'])->name('promotepage.category');
Route::get('/single-product', [App\Http\Controllers\SingleProductController::class, 'index'])->name('promotepage.single-product');
Route::get('/checkout', [App\Http\Controllers\CheckoutController::class, 'index'])->name('promotepage.checkout');
Route::get('/cart', [App\Http\Controllers\CartController::class, 'index'])->name('promotepage.cart');
Route::get('/confirmation', [App\Http\Controllers\ConfirmationController::class, 'index'])->name('promotepage.confirmation');
Route::get('/blog', [App\Http\Controllers\BlogController::class, 'index'])->name('promotepage.blog');
Route::get('/single-blog', [App\Http\Controllers\SingleBlogController::class, 'index'])->name('promotepage.single-blog');



Auth::routes();

//profile
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//admin index
Route::get('/admin/index',[HomeController::class, 'admin'])->name('admin');

//user
Route::get('/admin/user/index',[UserController::class,'index'])->name('user.index');
Route::get('/admin/user/edit/{id}',[UserController::class,'edit'])->name('user.edit');
Route::post('/admin/user/update/{id}',[UserController::class,'update'])->name('user.update');
Route::get('/admin/user/delete/{id}',[UserController::class,'delete'])->name('user.delete');

//category
Route::get('/admin/category/index',[CategoryController::class,'index'])->name('category.index');
Route::get('/admin/category/create',[CategoryController::class,'createform'])->name('category.create');

//product
Route::get('/admin/product/index',[ProductController::class,'index'])->name('product.index');
Route::get('/admin/product/create',[ProductController::class,'createform'])->name('product.create');







//จาร Deer
//Route::view('/','promotepage.home')->name('home');