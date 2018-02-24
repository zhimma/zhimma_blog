<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function __construct()
    {

    }

    public function login()
    {
        return view('home.user.login');
    }

    public function sign()
    {

    }

    public function register()
    {
        return view('home.user.register');
    }

    public function store()
    {

    }
}
