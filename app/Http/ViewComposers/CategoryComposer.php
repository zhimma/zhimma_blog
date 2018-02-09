<?php

namespace App\Http\ViewComposers;
use App\Models\Category;
use Illuminate\View\View;

/**
 * 分类视图数据分享
 *
 * @package App\Http\ViewComposers
 */
class CategoryComposer{

    protected $category;

    public function __construct(Category $category)
    {
        $this->category = $category;
    }

    public function compose(View $view)
    {
        $view->with('categories',$this->category->withCount('articles')->get());
    }
}