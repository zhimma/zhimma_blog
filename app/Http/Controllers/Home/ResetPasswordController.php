<?php

namespace App\Http\Controllers\Home;

use App\Repositories\Eloquent\UserRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Naux\Mail\SendCloudTemplate;

class ResetPasswordController extends Controller
{
    protected $user;

    public function __construct(UserRepository $user)
    {
        $this->user = $user;
    }

    /**
     * 重置密码  页面
     * @param $confirm_code
     *
     * @return $this
     *
     * @author 马雄飞 <xiongfei.ma@pactera.com>
     * @date 2018-03-03 18:37:05
     */
    public function index($confirm_code)
    {
        $user = $this->user->getUserByWhere(['confirm_code' => $confirm_code]);
        return view('Home.resetPassword.index')->with(compact('user'));
    }

    /**
     * 验证邮箱页面
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     *
     * @author 马雄飞 <xiongfei.ma@pactera.com>
     * @date  2018-03-03 18:37:33
     */
    public function validateEmail()
    {
        return view('Home.resetPassword.validateEmail');
    }

    /**
     * 验证邮箱  发送邮件
     * @param Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @author 马雄飞 <xiongfei.ma@pactera.com>
     * @date 2018-03-03 18:37:47
     */
    public function sendEmail(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'email' => 'required|email'
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => 0,'msg' => '请输入正确的emil']);
        }
        $email = $request->input('email');
        $userInfo = $this->user->getUserByWhere(['email' => $email]);
        if (!empty($userInfo->toArray())) {
            $data = [
                'name' => $userInfo->account,
                'url'  => route('home.resetPassword', ['confirm_code' => $userInfo->confirm_code]),
            ];
            $template = new SendCloudTemplate('user_password_reset', $data);

            Mail::raw($template, function ($message) use ($request) {
                $message->from('admin@zhimma.com', 'zhimma.com-忘记密码/修改密码');
                $message->to($request->input('email'));
            });
            return response()->json(['status' => 1,'msg' => '邮件发送成功，请去邮箱操作']);
        }else{
            return response()->json(['status' => 0,'msg' =>  '没有获取到email']);
        }

    }
}
