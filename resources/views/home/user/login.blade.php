@extends('home.layout.app')
@section('content')
    <div class="row" style="padding-top: 60px">
            <form id="login-form" method="post" action="{{ route('home.sign') }}">
                {{ csrf_field() }}
                <div class="col-md-4 col-md-offset-4">
                    <input name="account" id="account" type="text" placeholder="账号*">
                </div>
                <div class="col-md-4 col-md-offset-4">
                    <input name="password" id="password" type="password" placeholder="密码*">
                </div>

                <div class="col-md-4 col-md-offset-4">
                    <input type="submit" class="btn btn-lg btn-color mt-20" value="登录">
                </div>
            </form>
        </div>
@endsection

