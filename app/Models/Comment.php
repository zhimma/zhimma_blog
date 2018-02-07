<?php

namespace App\Models;


class Comment extends Base
{
    protected $fillable = ['article_id','parent_id','user_id','content'];
}
