<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    public function index()
    {
        $cart = session()->get('cart', []);
        return view('cart', compact('cart'));
    }

    // // public function addToCart(Request $request, $id)
    // // {
    // //     $product = Product::find($id);

    // //     if (!$product) {
    // //         abort(404);
    // //     }

    // //     $cart = session()->get('cart', []);

    // //     // Nếu sản phẩm đã tồn tại trong giỏ hàng thì tăng số lượng
    // //     if (isset($cart[$id])) {
    // //         $cart[$id]['quantity']++;
    // //     } else {
    // //         // Nếu sản phẩm chưa tồn tại trong giỏ hàng thì thêm mới
    // //         $cart[$id] = [
    // //             "name" => $product->name,
    // //             "quantity" => 1,
    // //             "price" => $product->price,
    // //             "image" => $product->image
    // //         ];
    // //     }

    // //     session()->put('cart', $cart);

    // //     return redirect()->back()->with('success', 'Product added to cart successfully!');
    // // }

    // // public function updateCart(Request $request)
    // // {
    // //     if ($request->id && $request->quantity) {
    // //         $cart = session()->get('cart');
    // //         $cart[$request->id]["quantity"] = $request->quantity;
    // //         session()->put('cart', $cart);
    // //         session()->flash('success', 'Cart updated successfully');
    // //     }
    // // }

    // // public function removeFromCart(Request $request)
    // // {
    // //     if ($request->id) {
    // //         $cart = session()->get('cart');
    // //         if (isset($cart[$request->id])) {
    // //             unset($cart[$request->id]);
    // //             session()->put('cart', $cart);
    // //         }
    // //         session()->flash('success', 'Product removed successfully');
    // //     }
    // }
}
