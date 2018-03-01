<?php
/**
 * @author 马雄飞 <xiongfei.ma@pactera.com>
 * @date   2018/2/12 下午2:08
 */

namespace App\Repositories\Eloquent;

/**
 * Trait BaseRepository
 *
 * @package App\Repositories\Eloquent
 */
trait BaseRepository
{
    /**
     * get all the records
     *
     * @return mixed
     *
     * @author 马雄飞 <xiongfei.ma@pactera.com>
     * @date   2018-02-12 14:09:38
     */
    public function all()
    {
        return $this->model->get();
    }

    /**
     * 分页
     * @param int    $number
     * @param string $sort
     * @param string $sortColumn
     *
     * @return mixed
     *
     * @author 马雄飞 <xiongfei.ma@pactera.com>
     * @date 2018年02月12日14:22:11
     */
    public function page($number = 10, $sort = 'desc', $sortColumn = 'created_at')
    {
        return $this->model->orderBy($sortColumn, $sort)->paginate($number);
    }

    public function store($data)
    {
        $model = $this->model->fill($data);
        return $model->save();
    }

    public function findRecord($id)
    {
        return $this->model->find($id);
    }
}