<?php
/**
 * @author 马雄飞 <xiongfei.ma@pactera.com>
 * @date   2018/2/12 下午2:10
 */

namespace App\Repositories\Eloquent;

use App\Models\Article;
use App\Models\User;

/**
 *
 *
 * @package App\Repositories\Eloquent
 */
class UserRepository
{
    use BaseRepository;

    protected $model;

    /**
     * UserRepository constructor.
     *
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->model = $user;
    }

    /**
     * 注册用户
     * @param $data
     *
     * @return bool
     *
     * @author 马雄飞 <xiongfei.ma@pactera.com>
     * @date 2018年02月25日15:03:36
     */
    public function registerUser($data)
    {
        $this->model->fill($data);

        if ($this->model->save()) {
            return true;
        } else {
            return false;
        }
    }


}