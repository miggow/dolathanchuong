<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HomeSite extends Model
{
    protected $guarded = ['id'];
    protected $table = "home_sites";
}
