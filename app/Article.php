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
    //use guarded when you dont want laravel to guard anything
    // protected $guarded = [];
    protected $fillable = ['title', 'excerpt', 'body'];
    
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    
    //an article has many tags
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    
}
 