@extends('home.layout.app')
@section('carousel')
    <div class="jumbotron">
        <div class="container">
            <h1>你好，朋友👬</h1>
            <p>这是个人博客，基于强大而优雅的Laravel框架开发</p>
            <p>Laravel是做为个人业余时间学习测试使用</p>
            <p>准备在此记录个人一些编码过程中遇到的问题</p>
            <p>和一些好的技术问章，不管是转载还是原创</p>
            <p><a class="btn btn-lg btn-color mt-20 btn-lg" target="_blank" href="https://github.com/zhimma" role="button"><i class="fa fa-github github-icon fa-2x"></i></a></p>
        </div>
    </div>
@endsection
@section('content')
    <div class="row">
    <!-- post content -->
    <div class="col-md-9 post-content mb-50">
        <!-- large post -->
        @foreach($articles as $article)
            <article class="entry-item large-post">

                <div class="entry-header">
                    <a href="#" class="entry-category">{{ $article->created_at }}</a>
                    <h2 class="entry-title">
                        <a href="{{ route('home.article.show',['id' => $article->id]) }}">{{ $article->title }}</a>
                    </h2>
                </div>

                <div class="entry-img">
                    <a href="{{ route('home.article.show',['id' => $article->id]) }}">
                        {{--<img src="{{ $article->img_url }}" alt="">--}}
                    </a>
                </div>

                <div class="entry-wrap">
                    <div class="entry">

                        <div class="entry-content">
                            {{ $article->content }}
                            <div class="text-center">
                                <a href="{{ route('home.article.show',['id' => $article->id]) }}" class="read-more underline-link">Read More</a>
                            </div>
                        </div>

                        <div class="entry-meta-wrap clearfix">
                            <ul class="entry-meta">
                                <li class="entry-date">
                                    <span>分类：<a href="{{ route('home.category',['id'=>$article->category->id]) }}">{{ $article->category->name }}</a></span>
                                </li>
                                {{--<li class="entry-date">
                                    <span>标签：
                                        @foreach($article->tags as $value)
                                            <a href="{{ route('home.tag.index',['id'=>$value->id]) }}">{{ $value->name }}</a>
                                        @endforeach
                                    </span>
                                </li>--}}
                                <li class="entry-comments">
                                    <span>评论：<a href="{{ route('home.article.show',['id' => $article->id.'#comments']) }}">{{ $article->comments_count }} 回复</a></span>
                                </li>
                            </ul>

                            <div class="social-icons right">
                                    <div class="social-share" data-sites="qzone, qq, weibo,wechat, douban" data-wechat-qrcode-title="打开微信扫一扫"></div>
                            </div>
                        </div>

                    </div>
                </div>
            </article> <!-- end large post -->
        @endforeach
        <div class="row mt-20">
            <div class="col-md-12 text-center">
                    {{ $articles->links() }}
            </div>
        </div>
    </div> <!-- end col -->
    <!-- Sidebar -->
    @include('home.layout.sidebar')
    </div>
@endsection