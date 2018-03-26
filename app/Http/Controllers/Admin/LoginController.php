<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\JWTAuth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        \Config::set('jwt.user', 'App\Models\Admin');
        \Config::set('auth.providers.users.model', \App\Models\Admin::class);

        $credentials = $request->only('account','password');
        try {
            if (! $token = JWTAuth::attempt($credentials)) {
                return response()->json(['error' => 'invalid_credentials'], 401);
            }
        } catch (JWTException $e) {
            return response()->json(['error' => 'could_not_create_token'], 500);
        }

        $user = Admin::where('account', $credentials['account'])->first();
        return ['user'=> $user->toArray(), 'token' => $token];
    }
}
