<?php

use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\ProductsController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ContentsController;
use App\Http\Controllers\Admin\AboutsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndexController;
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


// Route::view('/','promotepage.home')->name('home');
// Route::get('/category', [App\Http\Controllers\CategoryController::class, 'index'])->name('promotepage.category');
// Route::get('/single-product', [App\Http\Controllers\SingleProductController::class, 'index'])->name('promotepage.single-product');
// Route::get('/checkout', [App\Http\Controllers\CheckoutController::class, 'index'])->name('promotepage.checkout');
// Route::get('/cart', [App\Http\Controllers\CartController::class, 'index'])->name('promotepage.cart');
// Route::get('/confirmation', [App\Http\Controllers\ConfirmationController::class, 'index'])->name('promotepage.confirmation');
// Route::get('/blog', [App\Http\Controllers\BlogController::class, 'index'])->name('promotepage.blog');
// Route::get('/single-blog', [App\Http\Controllers\SingleBlogController::class, 'index'])->name('promotepage.single-blog');


Route::get('/',[IndexController::class,'index'])->name('promotepage.home');
Route::get('/category',[IndexController::class,'category'])->name('promotepage.category');
Route::get('/single-product',[IndexController::class,'singleproduct'])->name('promotepage.single-product');
Route::get('/checkout',[IndexController::class,'checkout'])->name('promotepage.checkout');
Route::get('/cart',[IndexController::class,'cart'])->name('promotepage.cart');
Route::get('/confirmation',[IndexController::class,'confirmation'])->name('promotepage.confirmation');
Route::get('/blog',[IndexController::class,'blog'])->name('promotepage.blog');
Route::get('/single-blog',[IndexController::class,'singleblog'])->name('promotepage.single-blog');




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

//categories
Route::get('/admin/categories/index',[CategoriesController::class,'index'])->name('categories.index');
Route::get('/admin/categories/create',[CategoriesController::class,'createform'])->name('categories.create');
Route::post('/admin/categories/insert',[CategoriesController::class,'insert'])->name('categories.insert');
Route::get('/admin/categories/edit/{id}',[CategoriesController::class,'edit'])->name('categories.edit');
Route::post('/admin/categories/update/{id}',[CategoriesController::class,'update'])->name('categories.update');
Route::get('/admin/categories/delete/{id}',[CategoriesController::class,'delete'])->name('categories.delete');

//products
Route::get('/admin/products/index',[ProductsController::class,'index'])->name('products.index');
Route::get('/admin/products/create',[ProductsController::class,'createform'])->name('products.create');
Route::post('/admin/products/insert',[ProductsController::class,'insert'])->name('products.insert');
Route::get('/admin/products/edit/{id}',[ProductsController::class,'edit'])->name('products.edit');
Route::post('/admin/products/update/{id}',[ProductsController::class,'update'])->name('products.update');
Route::get('/admin/products/delete/{id}',[ProductsController::class,'delete'])->name('products.delete');

//contents
Route::get('/admin/contents/index',[ContentsController::class,'index'])->name('contents.index');
Route::get('/admin/contents/create',[ContentsController::class,'createform'])->name('contents.create');
Route::post('/admin/contents/insert',[ContentsController::class,'insert'])->name('contents.insert');
Route::get('/admin/contents/edit/{id}',[ContentsController::class,'edit'])->name('contents.edit');
Route::post('/admin/contents/update/{id}',[ContentsController::class,'update'])->name('contents.update');
Route::get('/admin/contents/delete/{id}',[ContentsController::class,'delete'])->name('contents.delete');

//abouts
Route::get('/admin/abouts/index',[AboutsController::class,'index'])->name('abouts.index');
Route::get('/admin/abouts/create',[AboutsController::class,'createform'])->name('abouts.create');
Route::post('/admin/abouts/insert',[AboutsController::class,'insert'])->name('abouts.insert');
Route::get('/admin/abouts/edit/{id}',[AboutsController::class,'edit'])->name('abouts.edit');
Route::post('/admin/abouts/update/{id}',[AboutsController::class,'update'])->name('abouts.update');
Route::get('/admin/abouts/delete/{id}',[AboutsController::class,'delete'])->name('abouts.delete');




//จาร Deer
//Route::view('/','promotepage.home')->name('home');