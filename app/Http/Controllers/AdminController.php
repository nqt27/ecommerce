<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index($categories, $products)
    {
        return view('admin.admin', [
            'categories' => $categories,
            'products' => $products
        ]);
    }
    public function category($categories)
    {
        return view('admin.cate', [
            'categories' => $categories
        ]);
    }
    public function product($products)
    {
        return view('admin.product', [
            'products' => $products
        ]);
    }
    public function addCategory($categories)
    {
        return view('admin.addCate', [
            'categories' => $categories
        ]);
    }
    public function addProduct($products)
    {
        return view('admin.addProduct', [
            'products' => $products
        ]);
    }
   
}