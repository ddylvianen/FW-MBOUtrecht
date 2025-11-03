<?php

namespace App\Http\Controllers;

use App\Models\Wishlist;
use App\Models\ProductModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    /**
     * Display the user's wishlist
     */
    public function index()
    {
        $wishlistItems = Wishlist::where('user_id', Auth::id())
            ->with('product')
            ->get();
            
        return view('wishlist', compact('wishlistItems'));
    }
    
    /**
     * Add a product to the wishlist
     */
    public function add(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id'
        ]);
        
        // Check if product exists
        $product = ProductModel::findOrFail($request->product_id);
        
        // Try to create wishlist item, if it already exists, ignore
        try {
            Wishlist::create([
                'user_id' => Auth::id(),
                'product_id' => $request->product_id,
            ]);
            
            return redirect()->back()->with('success', 'Product toegevoegd aan wishlist!');
        } catch (\Exception $e) {
            // If duplicate entry
            return redirect()->back()->with('info', 'Product staat al in je wishlist.');
        }
    }
    
    /**
     * Remove a product from the wishlist
     */
    public function remove(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id'
        ]);
        
        Wishlist::where('user_id', Auth::id())
            ->where('product_id', $request->product_id)
            ->delete();
            
        return redirect()->back()->with('success', 'Product verwijderd uit wishlist!');
    }
}
