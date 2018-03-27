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
    public function login(Request $request,JWTAuth $JWTAuth)
    {

        $credentials = $request->only('account','password');
        if (Auth::guard('admin')->attempt($credentials)) {
            $user = Admin::where('account', $credentials['account'])->first();
            $token = $JWTAuth->fromUser($user);
        } else {
            dd(333);
        }


        try {
            if (! $token = JWTAuth::attempt($credentials)) {
                return response()->json(['error' => 'invalid_credentials'], 401);
            }
        } catch (JWTException $e) {
            return response()->json(['error' => 'could_not_create_token'], 500);
        }

        ;
        return ['user'=> $user->toArray(), 'token' => $token];
    }
}
