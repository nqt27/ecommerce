<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
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



Route::get('/', function (CategoryController $categoryController, ProductController $productController) {
    $categories = $categoryController->index();
    $products = $productController->index();

    return app(HomeController::class)->index($categories, $products);
});

//admin page
Route::get('/admin/ListCategory', [AdminController::class, 'index'])->name('admin.ListCategory');
Route::get('/admin/CreateCategory', [AdminController::class, 'create'])->name('admin.CreateCategory');

