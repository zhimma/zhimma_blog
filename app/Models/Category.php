<?php

namespace App\Models;


class Category extends Base
{
    protected $fillable = ['parent_id' ,'name' ,'description' ,'sort'];

    public function articles()
    {
        return $this->hasMany('App\Models\Article');
    }
}
