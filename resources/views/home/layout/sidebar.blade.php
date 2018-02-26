<aside class="col-md-3 sidebar">
    <div class="widget about-blog text-center">
        <div class="heading-lines">
            <h3 class="widget-title heading">关于我</h3>
        </div>
        <img src="{{ asset('home/img/about_me.jpg') }}" alt="">
        <p class="mb-20 mt-30">A personal diary of wanderlust and an overflowing wardrobe. Live with passion.</p>
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
                <li class="entry-li">
                    <article class="post-small clearfix">
                        <div class="entry-img">
                            <a href="blog-single.html">
                                <img src="{{ asset('home/img/recent_1.jpg') }}" alt="">
                            </a>
                        </div>
                        <div class="entry">
                            <h3 class="entry-title"><a href="magazine-single-article.html">Best Beaches in Sydney</a></h3>
                            <ul class="entry-meta list-inline">
                                <li class="entry-date">
                                    <a href="#">19 Mar, 2016</a>
                                </li>
                            </ul>
                        </div>
                    </article>
                </li>
                <li class="entry-li">
                    <article class="post-small clearfix">
                        <div class="entry-img">
                            <a href="blog-single.html">
                                <img src="{{ asset('home/img/recent_2.jpg') }}" alt="">
                            </a>
                        </div>
                        <div class="entry">
                            <h3 class="entry-title"><a href="magazine-single-article.html">First Summer Ice Cream</a></h3>
                            <ul class="entry-meta list-inline">
                                <li class="entry-date">
                                    <a href="#">16 Mar, 2016</a>
                                </li>
                            </ul>
                        </div>
                    </article>
                </li>
                <li class="entry-li">
                    <article class="post-small clearfix">
                        <div class="entry-img">
                            <a href="blog-single.html">
                                <img src="{{ asset('home/img/recent_3.jpg') }}" alt="">
                            </a>
                        </div>
                        <div class="entry">
                            <h3 class="entry-title"><a href="magazine-single-article.html">Best Hat for Travel</a></h3>
                            <ul class="entry-meta list-inline">
                                <li class="entry-date">
                                    <a href="#">16 Mar, 2016</a>
                                </li>
                            </ul>
                        </div>
                    </article>
                </li>
                <li class="entry-li">
                    <article class="post-small clearfix">
                        <div class="entry-img">
                            <a href="blog-single.html">
                                <img src="{{ asset('home/img/recent_4.jpg') }}" alt="">
                            </a>
                        </div>
                        <div class="entry">
                            <h3 class="entry-title"><a href="magazine-single-article.html">New Look is Arrived</a></h3>
                            <ul class="entry-meta list-inline">
                                <li class="entry-date">
                                    <a href="#">16 Mar, 2016</a>
                                </li>
                            </ul>
                        </div>
                    </article>
                </li>
            </ul>
        </div>
    </div>

    <!-- Latest Tweets -->
    <div class="widget categories">
        <div class="heading-lines">
            <h3 class="widget-title heading">联系我</h3>
        </div>
        <div class="twitter-slider text-center">
            <i class="fa fa-twitter twitter-icon"></i>
            <a href="#">@deothemes</a>
            <div id="tweets"></div>
        </div>
    </div>

</aside> <!-- end sidebar -->