<?php

namespace App\Http\Controllers\Home;

use App\Http\Requests\UserLoginRequest;
use App\Http\Requests\UserRegisterRequest;
use App\Http\Controllers\Controller;
use App\Repositories\Eloquent\UserRepository;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Mail;
use Naux\Mail\SendCloudTemplate;

class UserController extends Controller
{
    protected $user;

    public function __construct(UserRepository $user)
    {
        $this->user = $user;
    }

    public function login()
    {

        if (!Cache::has('referer')) {
            Cache::forever('referer', request()->server('HTTP_REFERER'));
        }
        return view('home.user.login');
    }

    /**
     * 登录
     * @param UserLoginRequest $request
     *
     * @return $this|\Illuminate\Http\RedirectResponse
     *
     * @author 马雄飞 <xiongfei.ma@pactera.com>
     * @date 2018年02月26日22:18:45
     */
    public function sign(UserLoginRequest $request)
    {

        if (Auth::attempt([
                              'account'      => $request->input('account'),
                              'password'     => $request->input('password'),
                              'is_confirmed' => 1
                          ])) {
            flash('登录成功');
            if (Cache::has('referer')) {
                $redirect = Cache::get('referer');
                Cache::forget('referer');
                return redirect()->to($redirect);
            }
            return redirect()->route('home.index');
        }else{
            flash('登录失败，请检查用户名和密码是否匹配获邮箱是否激活');
            return back()->withInput();
        }

    }

    /**
     * 注册
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     *
     * @author 马雄飞 <xiongfei.ma@pactera.com>
     * @date   2018-02-25 21:27:44
     */
    public function register()
    {

        Cache::put('referer', request()->server('HTTP_REFERER'));

        return view('home.user.register');
    }

    /**\
     * 注册用户
     *
     * @param UserRegisterRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse
     *
     * @author 马雄飞 <xiongfei.ma@pactera.com>
     * @date   2018-02-25 19:25:49
     */
    public function store(UserRegisterRequest $request)
    {

        $confirmCode = str_random(48);
        if ($this->user->registerUser(array_merge($request->all(), ['confirm_code' => $confirmCode, 'nickname' => $request->input(['account'])]))) {
            $data = [
                'name' => $request->input('account'),
                'url'  => route('home.emailActive', ['confirm_code' => $confirmCode]),
            ];
            $template = new SendCloudTemplate('user_email_validate', $data);

            Mail::raw($template, function ($message) use ($request) {
                $message->from('ma5694@zhimma.com', '太棒了！收到zhimma.com的第一封邮件啦');
                $message->to($request->input('email'));
            });
            flash('注册成功,请激活邮箱后登录')->success();

            return redirect()->route('home.login');
        }
        flash('注册出错了')->error();
    }

    /**
     * 激活邮箱
     *
     * @return \Illuminate\Http\RedirectResponse
     *
     * @author 马雄飞 <xiongfei.ma@pactera.com>
     * @date   2018年02月25日21:27:17
     */
    public function active()
    {
        $confirm_code = request('confirm_code');
        if ($result = $this->user->updateFiledByWhere(
            ['confirm_code' => $confirm_code], ['is_confirmed' => 1, 'confirm_code' => str_random(48)]
        )) {
            flash('邮箱验证成功');
            auth()->loginUsingId($result->id);
            if (Cache::has('referer')) {
                return redirect()->to(Cache::get('referer'));
            }
        } else {
            flash('邮箱验证失败')->error();
        }

        return redirect()->route('home.index');

    }

    /**
     * 退出登录
     *
     * @return \Illuminate\Http\RedirectResponse
     *
     * @author 马雄飞 <xiongfei.ma@pactera.com>
     * @date   2018年02月25日21:29:39
     */
    public function logout()
    {
        auth()->logout();

        return redirect()->route('home.index');
    }
}
