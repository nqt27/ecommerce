<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin.ListCategory');
    }
    public function create(){
        return view('admin.CreateCategory');
    }

   
}