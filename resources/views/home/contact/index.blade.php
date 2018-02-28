@extends('home.layout.app')
@section('content')
    <div class="text-center" style="padding-top: 60px">
        <h1 class="heading underline-title uppercase">联系我</h1>
    </div>
    <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
            <img src="{{ asset('home/img/contact.jpg') }}" class="img-fw mb-30" alt="">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger col-md-4 col-md-offset-4 alert-important">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
            </div>
            <!-- contact form -->
            <div class="contact-form mt-30">
                <form id="contact-form" action="{{ route('home.contact.store') }}" method="post">
                    {{ csrf_field() }}
                    <div class="row row-16">
                        <div class="col-md-4">
                            <input name="name" id="name" type="text" placeholder="姓名">
                        </div>
                        <div class="col-md-4">
                            <input name="email" id="email" type="email" placeholder="邮箱">
                        </div>
                        <div class="col-md-4">
                            <input name="subject" id="subject" type="text" placeholder="个人网站">
                        </div>
                        <div class="col-md-12">
                            <textarea name="content" id="content" placeholder="留言给我" rows="8"></textarea>
                        </div>
                    </div>

                    <input type="submit" class="btn btn-lg btn-color mt-20" value="Send" id="submit-message">
                </form>
            </div>

        </div>
    </div> <!-- end row -->
@endsection