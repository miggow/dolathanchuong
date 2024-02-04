<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $guarded = ['id'];
    protected $table = 'order_details';
    protected $with = ['variant'];

    public function variant()
    {
        return $this->belongsTo(Variant::class);
    }

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
