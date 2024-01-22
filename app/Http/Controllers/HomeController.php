<?php

namespace App\Http\Controllers;

use App\Banner;
use App\Cart;
use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::with(['variants', 'images', 'category'])->get();
        $categories = Category::whereNull('parent_id')->get();
        $carts = [];
        if (Auth::check()) {
            $carts = Cart::where('user_id', Auth::id())->get();
        }
        $banners = Cache::remember('banner', 60*60, function () {
            return Banner::orderBy('order')->get();
        });
        // dd($banners);
        return view('fe.home', compact('products', 'carts', 'categories', 'banners'));
    }
    public function product(Request $request)
    {
        $products = Product::with(['images', 'variants', 'category']);
        if ($request->search) {
            $products = $products->where('name', 'like', '%' . $request->search . '%');
        }
        $products = $products->get();
        return view('fe.feature.product.index', compact('products'));
    }
    public function product_detail($id)
    {
        $product = Product::with(['variants', 'images', 'category'])->find(decrypt($id));
        return view('fe.feature.product.detail', compact('product'));
    }
    public function cart()
    {
        $carts = Cart::where('user_id', auth()->user()->id)->get();
        return view('fe.feature.cart.index', compact('carts'));
    }
}
