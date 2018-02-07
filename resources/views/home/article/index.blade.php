@extends('home.layout.app')

@section('content')
    <div class="row">
    <!-- post content -->
    <div class="col-md-9 post-content mb-50">
        <!-- large post -->
        @foreach($articles as $article)
            <article class="entry-item large-post">

                <div class="entry-header">
                    {{--<a href="#" class="entry-category">{{ $article->created_at }}</a>--}}
                    <h2 class="entry-title">
                        <a href="{{ route('home.article.show',['id' => $article->id]) }}">{{ $article->title }}</a>
                    </h2>
                </div>

                <div class="entry-img">
                    <a href="blog-single.html">
                        <img src="{{ asset('home/img/featured_post.jpg') }}" alt="">
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
                                    <a href="#">August 30, 2016</a>
                                </li>
                                <li class="entry-comments">
                                    <a href="blog-single.html">2 Comments</a>
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