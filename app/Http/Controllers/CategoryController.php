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
    public function destroy($id)
    {
        // Tìm sản phẩm bằng ID
        $category = Category::where('id', $id)->first();
        // Xóa sản phẩm
        $category->delete();

        // Redirect lại trang danh sách sản phẩm với thông báo thành công
        return redirect()->route('admin.cate')->with('success', 'Product deleted successfully.');
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $category = Category::findOrFail($id);
        if ($request->hasFile('image')) {
            // Store the new image
            $path = 'storage/' . $request->file('image')->store('image', 'public');

            // Update the image path in the database
            $category->image = $path;
        }


        $category->name = $request->input('name');
        // Cập nhật các trường khác nếu cần

        $category->save();

        return redirect()->route('admin.category')->with('success', 'Product updated successfully.');
    }
}
