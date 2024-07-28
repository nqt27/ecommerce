<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\CartItem;
use Illuminate\Support\Facades\Auth;


class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        $product = Product::findOrFail($request->product_id);

        $cart = Cart::firstOrCreate([
            'user_id' => Auth::id()
        ]);

        $cartItem = $cart->items()->updateOrCreate(
            ['product_id' => $product->id],
            ['quantity' => $request->quantity]
        );

        return response()->json(['message' => 'Product added to cart']);
    }

    public function viewCart()
    {
        $cart = Cart::where('user_id', Auth::id())->with('items.products')->first();
        
        return view('cart', compact('cart'));
    }

    public function removeFromCart(Request $request)
    {
        $cartItem = CartItem::findOrFail($request->cart_item_id);
        $cartItem->delete();

        return response()->json(['message' => 'Product removed from cart']);
    }

    public function updateCart(Request $request)
    {
        $cartItem = CartItem::findOrFail($request->cart_item_id);
        $cartItem->update(['quantity' => $request->quantity]);

        return response()->json(['message' => 'Cart updated']);
    }
}
