<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\JWTAuth;

class LoginController extends Controller
{
    public function login(Request $request, JWTAuth $JWTAuth)
    {
        $credentials = $request->only('account', 'password');
        try {
            if (!Auth::guard('admin')->attempt($credentials)) {
                throw new JWTException('user validate filed', 601);
            }
            $user = Admin::where('account', $credentials['account'])->first();
            if (!$token = $JWTAuth->fromUser($user)) {
                throw new JWTException('could_not_create_token', 401);
            }

            return $this->success(200, '成功', ['data' => $user->toArray(), 'tokekn' => $token]);

        } catch (JWTException $e) {
            return $this->error($e->getCode(), $e->getMessage(), null);
        }
    }
}
