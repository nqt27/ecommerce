<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index($categories, $products)
    {
        return view('home', [
            'categories' => $categories,
            'products' => $products
        ]);
    }
}
