<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductVariantAttribute extends Model
{
    protected $guarded = ['id'];
    protected $table = 'product_variant_attributes';
    public function attribute()
    {
        return $this->belongsTo(Attribute::class);
    }
    public function variant()
    {
        return $this->belongsTo(Variant::class);
    }
}
