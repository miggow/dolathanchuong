<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    protected $guarded = ['id'];
    protected $table = 'attributes';
    public function variants()
    {
        return $this->belongsToMany(Variant::class, 'product_variant_attributes');
    }
}
