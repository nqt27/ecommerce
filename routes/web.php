<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
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
Route::get('/', function () {
    return view('home');
});
Route::get('/adminPage-layout', function () {
    return view('admin.adminPage-layout');
});
Route::get('/', [CategoryController::class, 'index']);

Route::get('/adminPage-layout', function () {
    return view('admin.List-Category');
});

