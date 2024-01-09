<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::with(['variants', 'images', 'category'])->get();
        return view('fe.home',compact('products'));
    }
    public function product()
    {
        $products = Product::with(['images', 'variants', 'category'])->paginate(1);
        return view('fe.feature.product.index', compact('products'));
    }
    public function product_detail($id)
    {
        $product = Product::with(['variants', 'images', 'category'])->find(decrypt($id));
        return view('fe.feature.product.detail', compact('product'));
    }
}
