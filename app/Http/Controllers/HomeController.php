<?php

namespace App\Http\Controllers;

use App\Banner;
use App\Category;
use App\CategoryVideo;
use App\InstagramFeed;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::where('status', 'publish')->with(['variants', 'images', 'category'])->get();
        $newProducts = Product::where('status', 'publish')->with(['images', 'variants', 'category'])->where('is_new', 1)->get();
        $saleProducts = Product::where('status', 'publish')->with(['images', 'variants', 'category'])->where('is_sale', 1)->get();
        $outstandingProducts = Product::where('status', 'publish')->with(['images', 'variants', 'category'])->where('is_outstanding', 1)->get();
        $categories = Category::whereNull('parent_id')->get();
        $banners = Cache::remember('banner', 60 * 60, function () {
            return Banner::orderBy('order')->get();
            //cache để lưu lại cái biến đó trong 1 khoảng thời gian, hết thời gian nó gọi lại tiếp cái hàm trong {};
        });
        $instagramFeeds = Cache::remember('instagram_feed', 60 * 60, function () {
            return InstagramFeed::all();
            //cache để lưu lại cái biến đó trong 1 khoảng thời gian, hết thời gian nó gọi lại tiếp cái hàm trong {};
        });
        $categoryVideos = Cache::remember('category_video', 60 * 60, function () {
            return CategoryVideo::all();
            //cache để lưu lại cái biến đó trong 1 khoảng thời gian, hết thời gian nó gọi lại tiếp cái hàm trong {};
        });
        return view('fe.home', compact('products', 'newProducts', 'saleProducts', 'outstandingProducts', 'categories', 'banners', 'instagramFeeds', 'categoryVideos'));
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
        $product_same_category = Product::with(['images', 'variants', 'category'])->where('category_id', $product->category_id)->limit(4)->get();

        return view('fe.feature.product.detail', compact('product', 'product_same_category'));
    }
    public function cart()
    {
        return view('fe.feature.cart.index');
    }
    public function checkout()
    {
        $cityRequest = Http::withOptions(['verify' => false])->get("https://vnprovinces.pythonanywhere.com/api/provinces/?basic=true&limit=100");
        $cities = $cityRequest->json();
        return view('fe.feature.checkout.index', compact('cities'));
    }
}
