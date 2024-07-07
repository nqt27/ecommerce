<?php
namespace App\Http\Controllers;


use Illuminate\Routing\Controller;
use App\Models\Category; 

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all(); // Lấy tất cả các sản phẩm từ bảng products

        return view('home', ['categories' => $categories]);
    }
}
