@extends('home.layout.app')
@section('content')
        <div class="row" >
            <form id="form" method="post" action="#">
                <div class="col-md-4 col-md-offset-4">
                    <input name="name" id="name" type="text" placeholder="账号*">
                </div>
                <div class="col-md-4 col-md-offset-4">
                    <input name="password" id="password" type="password" placeholder="密码*">
                </div>

                <div class="col-md-4 col-md-offset-4">
                    <input type="submit" class="btn btn-lg btn-color mt-20" value="登录" id="submit-message">
                </div>
            </form>
        </div>
@endsection

