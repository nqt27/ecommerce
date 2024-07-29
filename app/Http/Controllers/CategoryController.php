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
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        $path = 'storage/' . $request->file('image')->store('image', 'public');
        // Tạo sản phẩm mới
        $category = new Category;
        $category->name = $request->input('name');
        $category->image = $path;

        $category->save();
        // Redirect về trang chủ hoặc trang danh sách sản phẩm
        return redirect()->route('admin')->with('success', 'Product added successfully.');
    }
}
