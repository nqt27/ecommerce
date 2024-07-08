<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
<<<<<<< HEAD
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;

=======
>>>>>>> dat
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

<<<<<<< HEAD

Route::get('/', function (CategoryController $categoryController, ProductController $productController) {
    $categories = $categoryController->index();
    $products = $productController->index();

    return app(HomeController::class)->index($categories, $products);
});
=======
Route::get('/', function () {
    return view('home');
});
Route::get('/adminPage-layout', function () {
    return view('admin.adminPage-layout');
});
Route::get('/', [CategoryController::class, 'index']);
<<<<<<< HEAD
>>>>>>> 92cb416bfe1268d194f884954133c2c2e79ed127
=======


Route::get('/adminPage-layout', function () {
    return view('admin.List-Category');
});

<<<<<<< HEAD
>>>>>>> dat
=======
// Route::get('/adminPage-layout', function () {
//     return view('admin.create-category');
// });

>>>>>>> dat
