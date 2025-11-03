<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\CartProduct;
use App\Models\ProductModel;

class CartController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        if (! $user) {
            return redirect()->route('login');
        }

        $cart = Cart::firstOrCreate(['user_id' => $user->id]);
        $cart->load(['products.product']);

        return view('cart', ['cart' => $cart]);
    }

    public function add(Request $request)
    {
        $request->validate([
            'product_id' => 'required|integer|exists:products,id',
            'quantity' => 'nullable|integer|min:1',
        ]);

        $user = auth()->user();
        if (! $user) {
            return redirect()->route('login');
        }

        $product = ProductModel::findOrFail($request->product_id);
        $quantity = $request->input('quantity', 1);

        $cart = Cart::firstOrCreate(['user_id' => $user->id]);

        $cartProduct = CartProduct::where('cart_id', $cart->id)
            ->where('product_id', $product->id)
            ->first();

        if ($cartProduct) {
            $cartProduct->quantity += $quantity;
            $cartProduct->price = $product->price;
            $cartProduct->save();
        } else {
            CartProduct::create([
                'cart_id' => $cart->id,
                'product_id' => $product->id,
                'quantity' => $quantity,
                'price' => $product->price,
            ]);
        }

        return redirect()->back()->with('success', 'Product added to cart');
    }

    public function update(Request $request)
    {
        $request->validate([
            'id' => 'required|integer|exists:cart_products,id',
            'quantity' => 'required|integer|min:1',
        ]);

        $cartProduct = CartProduct::findOrFail($request->id);
        $cartProduct->quantity = $request->quantity;
        $cartProduct->save();

        return redirect()->route('cart')->with('success', 'Cart updated');
    }

    public function remove(Request $request)
    {
        $request->validate([
            'id' => 'required|integer|exists:cart_products,id',
        ]);

        $cartProduct = CartProduct::findOrFail($request->id);
        $cartProduct->delete();

        return redirect()->route('cart')->with('success', 'Item removed');
    }
}
