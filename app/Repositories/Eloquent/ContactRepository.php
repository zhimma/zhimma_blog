<?php
/**
 * @author 马雄飞 <xiongfei.ma@pactera.com>
 * @date   2018/2/12 下午2:10
 */

namespace App\Repositories\Eloquent;

use App\Models\Contact;

/**
 *
 *
 * @package App\Repositories\Eloquent
 */
class ContactRepository
{
    use BaseRepository;

    protected $model;

    /**
     * UserRepository constructor.
     *
     * @param Contact $contact
     */
    public function __construct(Contact $contact)
    {
        $this->model = $contact;
    }
}