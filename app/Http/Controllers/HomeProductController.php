<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeProductController extends Controller
{
    public function index($categories, $products)
    {
        return view('home-page.product-home', [
            'categories' => $categories,
            'products' => $products
        ]);
    }
}
