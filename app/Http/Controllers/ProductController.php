<?php

namespace App\Http\Controllers;


use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        return Product::all();
    }
    public function store(Request $request)
    {
        // Validate dữ liệu
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'description' => 'nullable|string',
            'category_id' => 'required|exists:categories,id',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        $path = 'storage/' . $request->file('image')->store('image', 'public');
        // Tạo sản phẩm mới
        $product = new Product;
        $product->name = $request->input('name');
        $product->image = $path;
        $product->price = $request->input('price');
        $product->description = $request->input('description');
        $product->category_id = $request->input('category_id');
        $product->save();
        // Redirect về trang chủ hoặc trang danh sách sản phẩm
        return redirect()->route('admin')->with('success', 'Product added successfully.');
    }
    public function destroy($id)
    {
        // Tìm sản phẩm bằng ID
        $product = Product::where('id', $id)->first();
        // Xóa sản phẩm
        $product->delete();

        // Redirect lại trang danh sách sản phẩm với thông báo thành công
        return redirect()->route('admin.product')->with('success', 'Product deleted successfully.');
    }
    public function show($id)
    {
        $product = Product::where('id', $id)->first();

        if (!$product) {
            return redirect()->back()->with('error', 'Product not found.');
        }

        return view('home-page.product-detail', ['product' => $product, 'products' => Product::take(4)->get()]);
    }
}
