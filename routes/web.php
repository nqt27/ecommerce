<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomeProductController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;






Route::get('/', function (CategoryController $categoryController, ProductController $productController) {
    $categories = $categoryController->index();
    $products = $productController->index();
    return app(HomeController::class)->index($categories, $products);
})->name('home');
Route::get('/home-product', function (CategoryController $categoryController, ProductController $productController) {
    $categories = $categoryController->index();
    $products = $productController->index();
    return app(HomeProductController::class)->index($categories, $products);
})->name('home-product');


Route::get('/home-product/{id}', [ProductController::class, 'show'])->name('products.show');

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
Route::delete('/admin/Product/{id}', [ProductController::class, 'destroy'])->name('products.destroy');
Route::put('/admin/Product/{id}', [ProductController::class, 'update'])->name('products.update');

Route::middleware(['auth'])->group(function () {
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
});
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.login');

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
