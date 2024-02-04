<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = ['id'];
    protected $table = 'products';
    protected $with = ['images'];
    
    public function variants()
    {
        return $this->hasMany(Variant::class);
    }
    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function getVariantAttributesWithDetails($attributeNames = [])
    {
        $variantAttributes = ProductVariantAttribute::whereIn('variant_id', $this->variants->pluck('id'))
            ->whereHas('attribute', function ($query) use ($attributeNames) {
                if (!empty($attributeNames)) {
                    $query->whereIn('name', $attributeNames);
                }
            })
            ->with(['attribute', 'variant'])
            ->get();

        // Applying a custom unique check
        $uniqueVariantAttributes = $variantAttributes->unique(function ($item) {
            return $item->attribute->name . '_' . $item->value;
        });

        return $uniqueVariantAttributes->values()->map(function ($variantAttribute) {
            return [
                'variant_id' => $variantAttribute->variant_id,
                'attribute_name' => $variantAttribute->attribute->name,
                'attribute_value' => $variantAttribute->value,
                'price' => $variantAttribute->variant->price,
                'sku' => $variantAttribute->variant->sku,
                'sale_price' => $variantAttribute->variant->sale_price ?? null,
            ];
        });
    }

    // public function getVariantAttributesWithDetails($attributeNames = [])
    // {
    //     $variantAttributes = ProductVariantAttribute::whereIn('variant_id', $this->variants->pluck('id'))
    //         ->whereHas('attribute', function ($query) use ($attributeNames) {
    //             if (!empty($attributeNames)) {
    //                 $query->whereIn('name', $attributeNames);
    //             }
    //         })
    //         ->with(['attribute', 'variant'])
    //         ->get();

    //     return $variantAttributes->map(function ($variantAttribute) {
    //         return [
    //             'variant_id' => $variantAttribute->variant_id,
    //             'attribute_name' => $variantAttribute->attribute->name,
    //             'attribute_value' => $variantAttribute->value,
    //             'price' => $variantAttribute->variant->price,
    //             'sale_price' => $variantAttribute->variant->sale_price ?? null,
    //         ];
    //     });
    // }



}
