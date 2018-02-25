<?php

namespace App\Http\Controllers\Home;

use App\Http\Requests\UserRequest;
use App\Http\Controllers\Controller;
use App\Repositories\Eloquent\UserRepository;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Mail;
use Naux\Mail\SendCloudTemplate;
use Overtrue\LaravelSendCloud\SendCloud;

class UserController extends Controller
{
    protected $user;

    public function __construct(UserRepository $user)
    {
        $this->user = $user;
    }

    public function login()
    {
        if(!Cache::has('referer')){
            Cache::put('referer',request()->server('HTTP_REFERER'));
        }
        return view('home.user.login');
    }

    public function sign()
    {
        dd(request());
    }

    public function register()
    {
        Cache::put('referer',request()->server('HTTP_REFERER'));
        return view('home.user.register');
    }

    public function store(UserRequest $request)
    {

        $confirmCode = str_random(48);
        if($this->user->registerUser(array_merge($request->all(),['confirm_code'=>$confirmCode]))){
            $data = [
                'name' => $request->input('account'),
                'url' => route('home.emailActive',['confirm_code'=>$confirmCode]),
            ];
            $template = new SendCloudTemplate('zhimma_email_active', $data);

            Mail::raw($template, function ($message) use($request) {
                $message->from('mma5694@gmail.com', '太棒了！收到zhimma.com的第一封邮件啦');
                $message->to($request->input('email'));
            });

            flash('注册成功,请激活邮箱后登录')->success();
            return redirect()->route('home.login');
        }
    }

    public function active()
    {
        dd(request()->all());
    }
}
