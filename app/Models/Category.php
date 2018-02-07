<?php

namespace App\Models;


class Category extends Base
{
    protected $fillable = ['parent_id' ,'name' ,'description' ,'sort'];

    public function article()
    {
        return $this->hasMany('App\Models\Article');
    }
}
