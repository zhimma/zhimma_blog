@extends('home.layout.app')
@section('content')
        <div class="row" style="padding-top: 60px">
            @if (count($errors) > 0)
                <div class="alert alert-danger col-md-4 col-md-offset-4 alert-important">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form id="register" method="post" action="{{ route('home.registerStore') }}">
                {{ csrf_field() }}
                <div class="col-md-4 col-md-offset-4">
                    <input name="account" id="account" type="text" placeholder="账号*">
                </div>
                <div class="col-md-4 col-md-offset-4">
                    <input name="password" id="name" type="password" placeholder="密码*">
                </div>
                <div class="col-md-4 col-md-offset-4">
                    <input name="password_confirmation" id="password_confirmation" type="password" placeholder="重复密码*">
                </div>
                <div class="col-md-4 col-md-offset-4">
                    <input name="email" id="email" type="email" placeholder="联系邮箱*">
                </div>
                <div class="col-md-4 col-md-offset-4">
                    <input type="submit" class="btn btn-lg btn-color mt-20" value="提交注册" id="submit-register">
                </div>
            </form>
        </div>
@endsection

