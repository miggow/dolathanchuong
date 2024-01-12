<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $guarded = ['id'];
    protected $table  = 'carts';
    public function variant()
    {
        return $this->belongsTo(Variant::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
