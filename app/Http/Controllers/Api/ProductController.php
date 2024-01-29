<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
                'price' => number_format($variant->price, 0, '.', ''),
                'sale_price' => number_format($variant->sale_price, 0, '.', ''),
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

    public function updateProductType(Request $request, $id)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'type' => 'required',
                'check' => 'required',
            ],
        );

        if ($validator->fails()) {
            return response()->json(["message" => $validator->errors()->toJson()]);
        }

        $product = Product::find($id);
        if ($request->type == "is_new") $product->is_new = $request->check;
        if ($request->type == "is_sale") $product->is_sale = $request->check;
        if ($request->type == "is_outstanding") $product->is_outstanding = $request->check;
        $product->save();
        return response()->json(['message' => "$product->name updated successfully"]);
    }


    public function updateProductStatus(Request $request, $id)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'status' => 'required',
            ],
        );

        if ($validator->fails()) {
            return response()->json(["message" => $validator->errors()->toJson()]);
        }

        $product = Product::find($id);
        $product->status = $request->status;
        $product->save();
        return response()->json(['message' => "$product->name updated successfully"]);
    }
}
