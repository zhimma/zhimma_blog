@extends('home.layout.app')
@section('title')
    - 重置密码
@stop
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
        <form id="resetPassword-form" method="post" action="{{ route('home.resetPassword.update') }}">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="PUT">
            <input type="hidden" name="confirm_code" value="{{ $user->confirm_code }}">
            <div class="col-md-4 col-md-offset-4">
                <input name="email" id="email" type="text" value="{{ $user->email }}" readonly>
            </div>
            <div class="col-md-4 col-md-offset-4">
                <input name="password" id="password" type="password" placeholder="请输入密码*">
            </div>
            <div class="col-md-4 col-md-offset-4">
                <input name="password_confirmation" id="password_confirmation" type="password" placeholder="请输入重复密码*">
            </div>
            <div class="col-md-4 col-md-offset-4">
                <button type="submit" class="btn btn-lg btn-color mt-20">修改密码</button>
                <a href="{{ route('home.login') }}" class="mt-40 pull-right">去登录</a>
            </div>
        </form>
    </div>
@endsection
@section('js')
@endsection

