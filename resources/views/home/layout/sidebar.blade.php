<aside class="col-md-3 sidebar">
    <div class="widget about-blog text-center">
        <div class="heading-lines">
            <h3 class="widget-title heading">关于我</h3>
        </div>
        <img src="{{ asset('home/img/about_me.jpg') }}" alt="">
        <p class="mb-20 mt-30">正在寻找灵感<i class="fa fa-wifi wifi-icon fa-2x"></i></p>
        <img src="{{ asset('home/img/signature.png') }}" alt="">
    </div>

    <!-- Newsletter -->
    {{--<div class="widget newsletter">
        <div class="heading-lines">
            <h3 class="widget-title heading">Newsletter</h3>
        </div>
        <form class="relative newsletter-form">
            <input type="email" placeholder="Your email address">
        </form>
        <input type="submit" value="Subscribe" id="submit-button" class="btn btn-lg btn-color">
    </div>--}}

    <!-- Categories -->
    <div class="widget categories">
        <div class="heading-lines">
            <h3 class="widget-title heading">分类</h3>
        </div>
        <ul class="list-dividers">
            @foreach($categories as $category)
                <li>
                    <a href="{{ route('home.category',['id' => $category->id]) }}">{{ $category->name }}</a><span>({{ $category->articles_count }})</span>
                </li>
            @endforeach
        </ul>
    </div>

    <!-- Ad banner -->
    <div class="widget custom-ad-banner">
        <a href="#">
            <img src="{{ asset('home/img/banner.jpg') }}" alt="">
        </a>
    </div>

    <!-- Recent Posts -->
    <div class="widget recent-posts">
        <div class="heading-lines">
            <h3 class="widget-title heading">最新文章</h3>
        </div>
        <div class="entry-list w-thumbs">
            <ul class="posts-list list-dividers">
                @foreach($latestArticles as $article)
                    <li class="entry-li">
                        <article class="post-small clearfix">
                            <div class="entry-img">
                                <a href="{{ route('home.article.show',['id' => $article->id]) }}">
                                    <img src="{{ asset('home/img/recent_1.jpg') }}" alt="">
                                </a>
                            </div>
                            <div class="entry">
                                <h3 class="entry-title"><a href="{{ route('home.article.show',['id' => $article->id]) }}">{{ $article->title }}</a></h3>
                                <ul class="entry-meta list-inline">
                                    <li class="entry-date">
                                        <a href="#">{{ $article->created_at }}</a>
                                    </li>
                                </ul>
                            </div>
                        </article>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

    <!-- Latest Tweets -->
    <div class="widget categories">
        <div class="heading-lines">
            <h3 class="widget-title heading">联系邮箱</h3>
        </div>
        <div class="twitter-slider text-center">
            <i class="fa fa-send send-icon"></i>
            <a href="mailto:admin@zhimma.com">admin@zhimma.com</a>
            <div id="tweets"></div>
        </div>
    </div>

</aside> <!-- end sidebar -->