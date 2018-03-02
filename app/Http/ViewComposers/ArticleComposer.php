<?php
/**
 * @author 马雄飞 <xiongfei.ma@pactera.com>
 * @date   2018/3/2 下午10:24
 */

namespace App\Http\ViewComposers;

use App\Models\Article;
use Illuminate\Contracts\View\View;

/**
 * 文章视图共享
 *
 * @package App\Http\ViewComposers
 */
class ArticleComposer
{
    protected $article;

    public function __construct(Article $article)
    {
        $this->article = $article;
    }

    public function compose(View $view)
    {
        $view->with('latestArticles',$this->article->offset(0)->limit(4)->orderBy('created_at','desc')->get());
    }
}