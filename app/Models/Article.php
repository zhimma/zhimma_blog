<?php

namespace App\Models;

class Article extends Base
{
    protected $fillable = ['category_id' ,'image_url' ,'category_id' ,'title' ,'content' ];

    public function tags()
    {
        return $this->belongsToMany('App\Models\Tag')->withTimestamps();
    }
}
