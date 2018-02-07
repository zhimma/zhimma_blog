<?php

namespace App\Models;

class Tag extends Base
{
    protected $fillable = ['name' ,'description'];

    public function articles()
    {
        return $this->belongsToMany('App\Models\Article');
    }
}
