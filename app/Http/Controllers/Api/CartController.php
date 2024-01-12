<?php

namespace App\Http\Controllers\Api;

use App\Cart;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        // Validate the request
        $validated = $request->validate([
            'variant_id' => 'required|exists:variants,id',
            'quantity' => 'required|integer|min:1'
        ]);

        $cartItem = Cart::create([
            'user_id' => auth()->id(),
            'variant_id' => $validated['variant_id'],
            'quantity' => $validated['quantity']
        ]);

        return response()->json(['message' => 'Added to Cart', 'cartItem' => $cartItem]);
    }
    public function removeFromCart($cartId)
    {
        $cartItem = Cart::find($cartId);

        if ($cartItem) {
            $cartItem->delete();
            return response()->json(['message' => 'Cart item removed successfully']);
        }

        return response()->json(['message' => 'Cart item not found'], 404);
    }

}
