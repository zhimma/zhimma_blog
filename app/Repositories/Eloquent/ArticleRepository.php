<?php
/**
 * @author 马雄飞 <xiongfei.ma@pactera.com>
 * @date   2018/2/12 下午2:10
 */

namespace App\Repositories\Eloquent;
use App\Models\Article;

/**
 *
 *
 * @package App\Repositories\Eloquent
 */
class ArticleRepository
{
    use BaseRepository;

    protected $model;

    /**
     * ArticleRepository constructor.
     *
     * @param Article $article
     */
    public function __construct(Article $article)
    {
        $this->model = $article;
    }



}