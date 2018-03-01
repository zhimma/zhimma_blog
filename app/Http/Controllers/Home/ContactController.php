<?php

namespace App\Http\Controllers\Home;

use App\Http\Requests\ContactRequest;
use App\Http\Controllers\Controller;
use App\Repositories\Eloquent\ContactRepository;

class ContactController extends Controller
{
    protected $contact;
    public function __construct(ContactRepository $contact)
    {
        $this->contact = $contact;
    }

    public function index()
    {
        return view('home.contact.index');
    }

    /**
     * 保存留言 
     * @param ContactRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse
     *
     * @author 马雄飞 <xiongfei.ma@pactera.com>
     * @date 2018年03月01日23:08:25
     */
    public function store(ContactRequest $request)
    {
        $data = $request->input();
        if (auth()->check()) {
            $data['user_id'] = auth()->user()->id;
        }
        $this->contact->store($data);
        flash('留言成功');
        return redirect()->back();
    }
}
