<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InstagramFeed extends Model
{
    protected $guarded = ['id'];
    protected $table = 'home_instagram_feeds';
}
