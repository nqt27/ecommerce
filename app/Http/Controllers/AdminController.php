<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index($categories, $products)
    {
        return view('admin', [
            'categories' => $categories,
            'products' => $products
        ]);
    }
   
}