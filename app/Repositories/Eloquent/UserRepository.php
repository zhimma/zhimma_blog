<?php
/**
 * @author 马雄飞 <xiongfei.ma@pactera.com>
 * @date   2018/2/12 下午2:10
 */

namespace App\Repositories\Eloquent;

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
     *
     * @param $data
     *
     * @return bool
     *
     * @author 马雄飞 <xiongfei.ma@pactera.com>
     * @date   2018年02月25日15:03:36
     */
    public function registerUser($data)
    {

        $this->model->fill($data);
        $this->model->password = bcrypt($data['password']);
        if ($this->model->save()) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * 根据条件获取数据
     * @param $map
     *
     * @return mixed
     *
     * @author 马雄飞 <xiongfei.ma@pactera.com>
     * @date 2018年02月25日18:51:23
     */
    public function getUserByWhere($map)
    {
        return $this->model->where($map)->first();
    }

    /**
     * 根据条件更新数据
     * @param $where
     * @param $data
     *
     * @return mixed
     *
     * @author 马雄飞 <xiongfei.ma@pactera.com>
     * @date 2018-02-25 18:51:40
     */
    public function updateFiledByWhere($where, $data)
    {
        if($this->model->where($where)->update($data)){
           return $this->getUserByWhere($data);
        }
        return false;
    }


}