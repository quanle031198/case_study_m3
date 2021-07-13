<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductlineController;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('product')->group(function () {
    Route::get('/', [ProductController::class, 'index'])->name('product.list');
    Route::get('/create', [ProductController::class, 'create'])->name('product.create');
    Route::post('/create', [ProductController::class, 'store'])->name('product.store');
    Route::get('/{id}/edit/', [ProductController::class, 'edit'])->name('product.edit');
    Route::post('/{id}/edit/', [ProductController::class, 'update'])->name('product.update');
    Route::get('/{id}/delete/', [ProductController::class, 'delete'])->name('product.delete');
    Route::post('/{id}/delete/', [ProductController::class, 'destroy'])->name('product.destroy');
    Route::get('/search', [ProductController::class, 'search'])->name('product.search');
    Route::get('/{id}/detail', [ProductController::class, 'detail'])->name('product.detail');

});
Route::prefix('product-line')->group(function () {
    Route::get('/', [ProductlineController::class, 'index'])->name('product-line.list');
    Route::get('/create', [ProductlineController::class, 'create'])->name('product-line.create');
    Route::post('/create', [ProductlineController::class, 'store'])->name('product-line.store');
    Route::get('/{id}/edit/', [ProductlineController::class, 'edit'])->name('product-line.edit');
    Route::post('/{id}/edit/', [ProductlineController::class, 'update'])->name('product-line.update');
    Route::get('/{id}/delete/', [ProductlineController::class, 'delete'])->name('product-line.delete');
    Route::post('/{id}/delete/', [ProductlineController::class, 'destroy'])->name('product-line.destroy');
    Route::get('/search', [ProductlineController::class, 'search'])->name('product-line.search');



});
Route::prefix('product-image')->group(function () {
    Route::get('/', [ImageController::class, 'index'])->name('product-image.list');
    Route::get('/create', [ImageController::class, 'create'])->name('product-image.create');
    Route::post('/create', [ImageController::class, 'store'])->name('product-image.store');
    Route::get('/{id}/edit/', [ImageController::class, 'edit'])->name('product-image.edit');
    Route::post('/{id}/edit/', [ImageController::class, 'update'])->name('product-image.update');
    Route::get('/{id}/delete/', [ImageController::class, 'delete'])->name('product-image.delete');
    Route::post('/{id}/delete/', [ImageController::class, 'destroy'])->name('product-image.destroy');
    Route::get('/search', [ImageController::class, 'search'])->name('product-image.search');



});

Route::prefix('order')->group(function () {
    Route::get('/', [OrderController::class, 'index'])->name('order.index');
});



Route::get('/admin', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('role');



Route::group(['middleware' => 'preventBackHistory'],function(){
    Auth::routes();

    Route::get('/home', function () {
        return view('backend.layouts.home');
    });
    
  });