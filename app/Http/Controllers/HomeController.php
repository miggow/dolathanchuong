<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::with(['variants', 'images', 'category'])->get();
        $carts = [];
        if(Auth::check())
        {
            $carts = Cart::where('user_id', Auth::id())->get();
        }
        return view('fe.home',compact('products', 'carts'));
    }
    public function product(Request $request)
    {
        $products = Product::with(['images', 'variants', 'category']);
        if($request->search)
        {
            $products = $products->where('name', 'like', '%'.$request->search.'%');
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
