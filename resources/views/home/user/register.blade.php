@extends('home.layout.app')
@section('content')
        <div class="row" >
            <form id="form" method="post" action="#">
                <div class="col-md-4 col-md-offset-4">
                    <input name="account" id="account" type="text" placeholder="账号*">
                </div>
                <div class="col-md-4 col-md-offset-4">
                    <input name="name" id="name" type="password" placeholder="密码*">
                </div>
                <div class="col-md-4 col-md-offset-4">
                    <input name="password_confirmation" id="password_confirmation" type="password" placeholder="重复密码*">
                </div>
                <div class="col-md-4 col-md-offset-4">
                    <input name="email" id="email" type="email" placeholder="联系邮箱*">
                </div>
                <div class="col-md-4 col-md-offset-4">
                    <input type="submit" class="btn btn-lg btn-color mt-20" value="提交注册" id="submit-message">
                </div>
            </form>
        </div>
@endsection

