<?php

namespace App\Http\Controllers;
use App\Models\ProductModel;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index()
    {
        $products = ProductModel::paginate(12);
        return view('products.index', compact('products'));
    }

    public function show($id)
    {
        $product = ProductModel::with('categories')->findOrFail($id);
        return view('products.show', compact('product'));
    }
}
