<?php

namespace App\Http\Controllers\Admin;

use App\Attribute;
use App\Category;
use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::whereNull('parent_id')->get();
        $products = Product::with(['images', 'variants', 'category'])->get();
        // dd($products);
        return view('admin.product.index', compact('categories', 'products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::whereNull('parent_id')->get();
        return view('admin.product.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::beginTransaction();

        try {
            $product = Product::create([
                'name' => $request->name,
                'description' => $request->description,
                'category_id' => $request->category_id,
                'has_variants' => $request->isVariation == 'on' ? true : false,
            ]);

            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $image) {
                    $path = $image->store('public/products');
                    $product->images()->create(['path' => Storage::url($path)]);
                }
            }

            if ($request->isVariation && $request->has('variation')) {
                foreach ($request->input('variation.sku', []) as $index => $sku) {
                    $color = $request->input("variation.color.$index") ?? null;
                    $size = $request->input("variation.size.$index") ?? null;

                    $variant = $product->variants()->create([
                        'sku' => $sku ?? Str::random(5),
                        'price' => $request->input("variation.price.$index") ?? 0,
                        'sale_price' => $request->input("variation.sale_price.$index") ?? null,
                        'quantity' => $request->input("variation.quantity.$index") ?? 0,
                    ]);

                    if ($color) {
                        $colorAttributeId = Attribute::where('name', 'color')->first()->id ?? null;
                        if ($colorAttributeId) {
                            $variant->attributes()->attach($colorAttributeId, ['value' => $color]);
                        }
                    }

                    if ($size) {
                        $sizeAttributeId = Attribute::where('name', 'size')->first()->id ?? null;
                        if ($sizeAttributeId) {
                            $variant->attributes()->attach($sizeAttributeId, ['value' => $size]);
                        }
                    }
                    $this->attachAttributeToVariant($variant, 'color', $request->input("variation.color.$index"));
                    $this->attachAttributeToVariant($variant, 'size', $request->input("variation.size.$index"));
                }
            } else {
                $variant = $product->variants()->create([
                    'sku' => $request->input('sku') ?? Str::random(5),
                    'price' => $request->input('price'),
                    'sale_price' => $request->input('sale_price') ?? null,
                    'quantity' => $request->input('quantity'),
                ]);
            }

            DB::commit();
            return redirect()->route('product.index');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find(decrypt($id));
        $product->delete();
        return redirect()->back();
    }
    private function attachAttributeToVariant($variant, $attributeName, $value)
    {
        if (!is_null($value)) {
            $attribute = Attribute::firstOrCreate(['name' => $attributeName]);
            $variant->attributes()->attach($attribute->id, ['value' => $value]);
        }
    }
}
