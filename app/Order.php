<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded = ['id'];
    protected $table = 'orders';
    protected $with = ['order_details', 'customer', 'payment_method'];   

    public function order_details()
    {
        return $this->hasMany(OrderDetail::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function payment_method()
    {
        return $this->belongsTo(PaymentMethod::class);   
    }
}
