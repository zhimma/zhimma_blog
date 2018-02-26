<?php
/**
 * @author 马雄飞 <xiongfei.ma@pactera.com>
 * @date   2018/2/12 下午2:10
 */

namespace App\Repositories\Eloquent;

use App\Models\Category;
use App\Models\User;

/**
 *
 *
 * @package App\Repositories\Eloquent
 */
class CategoryRepository
{
    use BaseRepository;

    protected $model;

    /**
     * UserRepository constructor.
     *
     * @param Category $category
     */
    public function __construct(Category $category)
    {
        $this->model = $category;
    }

}