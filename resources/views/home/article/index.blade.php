@extends('home.layout.app')

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
                        <img src="{{ $article->img_url }}" alt="">
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
                                    <span>分类：<a href="{{ route('home.category.index',['id'=>$article->category->id]) }}">{{ $article->category->name }}</a></span>
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
                                <a href="#">
                                    <i class="fa fa-instagram"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-facebook"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-twitter"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-pinterest-p"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-heart"></i>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </article> <!-- end large post -->
        @endforeach
        <div class="row mt-20">
            <div class="col-md-12 text-center">
                <a href="#" class="btn btn-md btn-stroke" id="load-more">Load More</a>
            </div>
        </div>
    </div> <!-- end col -->
    <!-- Sidebar -->
    @include('home.layout.sidebar')
    </div>
@endsection