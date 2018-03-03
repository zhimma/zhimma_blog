@extends('home.layout.app')
@section('title')
    - 重置密码
@stop
@section('content')
    <div class="row" style="padding-top: 60px">
        <form id="resetPassword-form" method="post" action="{{ route('home.resetPassword.sendEmail') }}">
            {{ csrf_field() }}
            <div class="col-md-4 col-md-offset-4">
                <input name="email" id="email" type="text" placeholder="输入注册邮箱*">
            </div>
            <div class="col-md-4 col-md-offset-4">
                <button type="button" class="btn btn-lg btn-color mt-20">发送验证码</button>
                <a href="{{ route('home.login') }}" class="mt-40 pull-right">去登录</a>
            </div>
        </form>
    </div>
@endsection
@section('js')
    <script>
        $("button").on('click', function () {
            $.ajax({
                type: "POST",
                url: '{{ route('home.resetPassword.sendEmail') }}',
                dataType: 'json',
                data: $('#resetPassword-form').serialize(),
                success: function (data) {
                    alert(data.msg);
                    window.location.reload();
                }
            })
        });
    </script>
@endsection

