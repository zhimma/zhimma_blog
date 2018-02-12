<?php

namespace App\Models;

/**
 *
 *
 * @package App\Models
 */
class Article extends Base
{
    /**
     * @var array
     */
    protected $fillable = ['category_id', 'image_url', 'category_id', 'title', 'content'];

    /**
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     *
     * @author 马雄飞 <xiongfei.ma@pactera.com>
     * @date
     */
    public function tags()
    {
        return $this->belongsToMany('App\Models\Tag')->withTimestamps();
    }

    /**
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     *
     * @author 马雄飞 <xiongfei.ma@pactera.com>
     * @date
     */
    public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    }

    /**
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     *
     * @author 马雄飞 <xiongfei.ma@pactera.com>
     * @date
     */
    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }
}
