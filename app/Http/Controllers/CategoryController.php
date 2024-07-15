<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use Illuminate\Routing\Controller;
use App\Models\Category; 

class CategoryController extends Controller
{
    public function index()
    {
        return Category::all();
    }
    public function store(Request $request)
    {
        // Validate dữ liệu
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|string',
            'role' => 'required'
        ]);
        // Tạo sản phẩm mới
        $category = new Category;
        $category->name = $request->input('name');
        $category->image = $request->input('image');
        $category->role = $request->input('role');
        $category->save();
        // Redirect về trang chủ hoặc trang danh sách sản phẩm
        return redirect()->route('admin')->with('success', 'Product added successfully.');
    }
}