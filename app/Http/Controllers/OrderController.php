<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Order;
use App\Models\CartProduct;

class OrderController extends Controller
{
    public function index(){
        return '';
    }

    public function store(Request $request)
    {
        $user = auth()->user();
        if (! $user) {
            return redirect()->route('login');
        }

        $cart = Cart::where('user_id', $user->id)->first();
        if (! $cart) {
            return redirect()->route('checkout.error')
                ->with('error', 'Your cart is empty')
                ->with('error_details', 'You need to add items to your cart before placing an order.');
        }

        $cart->load('products.product');

        if ($cart->products->isEmpty()) {
            return redirect()->route('checkout.error')
                ->with('error', 'Your cart is empty')
                ->with('error_details', 'You need to add items to your cart before placing an order.');
        }

        try {
            $total = 0;
            foreach ($cart->products as $item) {
                // Check if product still exists and has stock
                if (!$item->product) {
                    return redirect()->route('checkout.error')
                        ->with('error', 'Some products in your cart are no longer available')
                        ->with('error_details', 'Please remove unavailable items from your cart and try again.');
                }
                
                if ($item->product->stock < $item->quantity) {
                    return redirect()->route('checkout.error')
                        ->with('error', 'Insufficient stock for ' . $item->product->name)
                        ->with('error_details', 'Only ' . $item->product->stock . ' items available. Please adjust your cart.');
                }
                
                $total += ($item->price * $item->quantity);
            }

            $order = Order::create([
                'user_id' => $user->id,
                'cart_id' => $cart->id,
                'total_amount' => $total,
                'price' => $total,
                'status' => 'processing',
            ]);

            // Update product stock
            foreach ($cart->products as $item) {
                if ($item->product) {
                    $item->product->decrement('stock', $item->quantity);
                }
                $item->delete();
            }

            return redirect()->route('checkout.success')->with('order', $order);
            
        } catch (\Exception $e) {
            return redirect()->route('checkout.error')
                ->with('error', 'Order processing failed')
                ->with('error_details', 'An error occurred while processing your order. Please try again or contact support.');
        }
    }
    
    public function success()
    {
        if (!session()->has('order') && !session()->has('_old_input')) {
            return redirect()->route('cart');
        }
        
        $order = session('order');
        return view('checkout.success', compact('order'));
    }
    
    public function error()
    {
        return view('checkout.error');
    }
}
