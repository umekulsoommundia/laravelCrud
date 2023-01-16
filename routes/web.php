<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productController;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('login', function () {
    return view('adminPages.login');
});

Route::get('addProduct', function () {
    return view('adminPages.addProduct');
});

Route::get('productTable', function () {
    return view('adminPages.productTable');
});
route::post('addProduct',[ProductController::class,'productSend']);


route::get('showProduct',[ProductController::class,'show']);

route::get('edit/{id}',[ProductController::class,'edit']);


route::post('update/{id}',[ProductController::class,'update']);

route::get('delete/{id}',[ProductController::class,'delete']);

Route::post('edit/edit', [productController::class, 'update']);