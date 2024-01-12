<?php

namespace App\Http\Controllers;

use App\Attribute;
use App\Product;
use App\Variant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class InventoryController extends Controller
{
    public function index($id)
    {
        $product = Product::with(['variants'])->find($id);

        return view('admin.inventory.index', compact('product'));
    }
    public function update($id, Request $request)
    {
        $variant = Variant::find($id);
        $variant->price = $request->price;
        $variant->sale_price = $request->sale_price;
        $variant->quantity = $request->quantity;
        $variant->save();
        return redirect()->back();
    }
    public function store($id, Request $request)
    {
        DB::beginTransaction();
        try {
            $product = Product::find($id);
            $variant = $product->variants()->create([
                'sku' => Str::random(5),
                'price' => $request->input('price', 0),
                'sale_price' => $request->input('sale_price', null),
                'quantity' => $request->input('quantity', 0),
            ]);
            $this->attachAttributeToVariant($variant, 'color', $request->input('color'));
            $this->attachAttributeToVariant($variant, 'size', $request->input('size'));

            DB::commit();
            return redirect()->back();
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back();
        }
    }
    private function attachAttributeToVariant($variant, $attributeName, $value)
    {
        if (!is_null($value)) {
            $attribute = Attribute::firstOrCreate(['name' => $attributeName]);
            $variant->attributes()->attach($attribute->id, ['value' => $value]);
        }
    }
    public function destroy($id)
    {
        $variant = Variant::find($id);
        $variant->delete();
        return redirect()->back();
    }
}
