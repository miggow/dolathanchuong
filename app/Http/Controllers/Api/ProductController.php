<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getVariants($productId)
    {
        $product = Product::with(['variants', 'variants.attributes'])->find($productId);

        if (!$product) {
            return response()->json(['message' => 'Product not found'], 404);
        }

        $variantDetails = $product->variants->map(function ($variant) {
            return [
                'variant_id' => $variant->id,
                'sku' => $variant->sku,
                'price' => number_format($variant->price, 0,'.', ''),
                'sale_price' => number_format($variant->sale_price, 0,'.', ''),
                'quantity' => $variant->quantity,
                'attributes' => $variant->attributes->pluck('pivot.value', 'name')
            ];
        });

        return response()->json([
            'product_id' => $product->id,
            'product_name' => $product->name,
            'variants' => $variantDetails
        ]);
    }
}
