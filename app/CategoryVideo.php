<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryVideo extends Model
{
    protected $guarded = ['id'];
    protected $table = 'category_videos';
}
