<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

}
