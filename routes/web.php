<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Authentication\LoginController;
use App\Http\Controllers\Authentication\RegisterController;


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

Route::get('/admin', function (CategoryController $categoryController, ProductController $productController) {
    $categories = $categoryController->index();
    $products = $productController->index();

    return app(AdminController::class)->index($categories, $products);
})->name('admin');

Route::get('/admin/category', function (CategoryController $categoryController) {
    $categories = $categoryController->index();
    return app(AdminController::class)->category($categories);
})->name('admin.cate');

Route::get('/admin/product', function (ProductController $productController) {
    $products = $productController->index();
    return app(AdminController::class)->product($products);
})->name('admin.product');

Route::get('/admin/addCate', function (CategoryController $categoryController) {
    $categories = $categoryController->index();
    return app(AdminController::class)->addCategory($categories);
})->name('admin.addCate');
Route::post('/admin/addCate', [CategoryController::class, 'store'])->name('categories.store');

Route::get('/admin/addProduct', function (ProductController $productController) {
    $products = $productController->index();
    return app(AdminController::class)->addProduct($products);
})->name('admin.addProduct');
Route::post('/admin/Product', [ProductController::class, 'store'])->name('products.store');
