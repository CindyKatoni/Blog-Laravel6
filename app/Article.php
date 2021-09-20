<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    // public function getRouteKeyName()
    // {
    //     return slug;
    // }

    protected $fillable = ['title', 'excerpt', 'body'];

    //use guarded when you dont want laravel to guard anything
    // protected $guarded = [];
}
