<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = ['id'];
    protected $table = 'categories';
    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }
    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function getTotalProductCountAttribute()
    {
        $count = $this->products()->count();
        $this->children->each(function ($child) use (&$count) {
            $count += $child->getTotalProductCountAttribute();
        });

        return $count;
    }

}
