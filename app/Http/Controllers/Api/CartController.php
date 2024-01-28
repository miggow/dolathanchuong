<?php

namespace App\Http\Controllers\Api;

use App\Cart;
use App\Http\Controllers\Controller;
use App\Product;
use App\Variant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        // Validate the request
        $validated = $request->validate([
            'variant_id' => 'required|exists:variants,id',
            'quantity' => 'required|integer|min:1'
        ]);
        try {
            $variant = Variant::find($request->variant_id);
            $cart = session('cart');
            if (isset($cart[$variant->id])) {
                if ($cart[$variant->id]['quantity'] < $variant->quantity) {
                    $cart[$variant->id]['quantity'] += $request->quantity;
                } else {
                    return response()->json(['message' => "Vượt số lượng trong kho"]);
                }
            } else {
                $cart[$variant->id] = [
                    'variant_id' => $variant->id,
                    'image' => $variant->product->images[0]->path,
                    'name' => $variant->product->name,
                    'sku' => $variant->sku,
                    'price' => $variant->price,
                    'sale_price' => $variant->sale_price,
                    'quantity' => $request->quantity,
                ];
            }
            session()->put('cart', $cart);
            session()->save();
            return response()->json(['message' => 'Added to Cart', 'cartItem' => $cart[$variant->id]]);
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()]);
        }
    }
    public function removeFromCart($cartId)
    {
        try {
            session()->pull('cart.' . $cartId);
            session()->save();
            return response()->json(['message' => 'Cart item removed successfully']);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Cart item not found' . $e->getMessage()], 404);
        }
    }
}
