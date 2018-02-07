<?php

namespace App\Models;


class Comment extends Base
{
    protected $fillable = ['article_id','parent_id','user_id','content'];

    public function article()
    {
        return $this->belongsTo('App\Models\Article');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
