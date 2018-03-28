<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function success($code = 200, $msg = '请求成功', $data = null)
    {
        return response()->json(
            [
                'status' => 1,
                'code'   => $code,
                'msg'    => $msg,
                'data'   => $data
            ]
        );
    }

    public function error($code = 200, $msg = '请求失败', $data = [])
    {
        return response()->json(
            [
                'status' => 0,
                'code'   => $code,
                'msg'    => $msg,
                'data'   => $data
            ]
        );
    }
}
