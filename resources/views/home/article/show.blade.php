@extends('home.layout.app')

@section('content')
    <div class="row">

    <div class="col-md-9 post-content mb-50">
        <!-- large post -->
        <article class="entry-item large-post">

            <div class="entry-header">
                {{--<a href="#" class="entry-category">Lifestyle</a>--}}
                <h1 class="entry-title">{{ $article->title }}</h1>
            </div>

            <div class="entry-img">
                <img src="img/featured_post.jpg" alt="">
            </div>

            <div class="entry-wrap">
                <div class="entry">

                    <div class="entry-content">
                        <div class="article">
                            {{ $article->content }}
                        </div>

                        <!-- tags -->
                        <div class="entry-tags tags mb-50 mt-40 clearfix">
                            @foreach($article->tags->pluck('name') as $tag)
                            <a href="#">{{ $tag }}</a>
                            @endforeach
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
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-pinterest-p"></i></a>
                                <a href="#"><i class="fa fa-heart"></i></a>
                            </div>
                        </div>

                        <!-- entry author -->
                        <div class="entry-author-box clearfix">
                            <img src="img/author.jpg" class="author-img" alt="img">
                            <div class="author-info">
                                <h6 class="author-name"><a href="#">Alexis Ran</a></h6>
                                <p class="mb-0">Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quisma bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus itaet.
                                </p>
                                <div class="social-icons">
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-pinterest-p"></i></a>
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                </div>
                            </div>
                        </div>

                        <!-- related posts -->
                        <div class="related-posts mt-40">
                            <div class="heading-lines mb-30">
                                <h3 class="heading small">Related Posts</h3>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <article class="entry-item">
                                        <div class="entry-img">
                                            <a href="blog-single.html">
                                                <img src="img/post_1.jpg" alt="">
                                            </a>
                                        </div>
                                        <h4 class="entry-title">
                                            <a href="blog-single.html">Missing the Bahamas</a>
                                        </h4>
                                        <div class="entry-meta-wrap clearfix">
                                            <ul class="entry-meta">
                                                <li class="entry-date">
                                                    <a href="#">August 30, 2016</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>

                                <div class="col-sm-4">
                                    <article class="entry-item">
                                        <div class="entry-img">
                                            <a href="blog-single.html">
                                                <img src="img/post_2.jpg" alt="">
                                            </a>
                                        </div>
                                        <h4 class="entry-title">
                                            <a href="blog-single.html">Revolve in Mexico</a>
                                        </h4>
                                        <div class="entry-meta-wrap clearfix">
                                            <ul class="entry-meta">
                                                <li class="entry-date">
                                                    <a href="#">August 30, 2016</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-sm-4">
                                    <article class="entry-item">
                                        <div class="entry-img">
                                            <a href="blog-single.html">
                                                <img src="img/post_3.jpg" alt="">
                                            </a>
                                        </div>
                                        <h4 class="entry-title">
                                            <a href="blog-single.html">Exploring Redwood</a>
                                        </h4>
                                        <div class="entry-meta-wrap clearfix">
                                            <ul class="entry-meta">
                                                <li class="entry-date">
                                                    <a href="#">August 30, 2016</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>

                        <!-- Comments -->
                        <div class="entry-comments mt-20">
                            <div class="heading-lines mb-30">
                                <h3 class="heading small">3 comments</h3>
                            </div>

                            <ul class="comment-list">
                                <li>
                                    <div class="comment-body">
                                        <img src="img/comment_1.jpg" class="comment-avatar" alt="">
                                        <div class="comment-content">
                                            <span class="comment-author">Joeby Ragpa</span>
                                            <span class="comment-date">August 6, 2016 at 12:48 pm</span>
                                            <p>This template is so awesome. I didn’t expect so many features inside. E-commerce pages are very useful, you can launch your online store in few seconds. I will rate 5 stars.</p>
                                            <a href="#">Reply</a>
                                        </div>
                                    </div>

                                    <ul class="comment-reply">
                                        <li>
                                            <div class="comment-body">
                                                <img src="img/comment_2.jpg" class="comment-avatar" alt="">
                                                <div class="comment-content">
                                                    <span class="comment-author">Alexander Samokhin</span>
                                                    <span class="comment-date">August 6, 2016 at 12:48 pm</span>
                                                    <p>This template is so awesome. I didn’t expect so many features inside. E-commerce pages are very useful, you can launch your online store in few seconds. I will rate 5 stars.</p>
                                                    <a href="#">Reply</a>
                                                </div>
                                            </div>
                                        </li> <!-- end reply comment -->
                                    </ul>

                                </li> <!-- end 1-2 comment -->

                                <li>
                                    <div class="comment-body">
                                        <img src="img/comment_3.jpg" class="comment-avatar" alt="">
                                        <div class="comment-content">
                                            <span class="comment-author">Christopher Robins</span>
                                            <span class="comment-date">May 6, 2014 at 12:48 pm</span>
                                            <p>This template is so awesome. I didn’t expect so many features inside. E-commerce pages are very useful, you can launch your online store in few seconds. I will rate 5 stars.</p>
                                            <a href="#">Reply</a>
                                        </div>
                                    </div>
                                </li> <!-- end 3 comment -->

                            </ul>
                        </div> <!--  end comments -->

                        <!-- Leave a Comment -->
                        <div class="comment-form mt-60">
                            <div class="heading-lines mb-30">
                                <h3 class="heading small">Leave a Comment</h3>
                            </div>
                            <form id="form" method="post" action="#">
                                <div class="row row-16">
                                    <div class="col-md-4">
                                        <input name="name" id="name" type="text" placeholder="Name*">
                                    </div>
                                    <div class="col-md-4">
                                        <input name="mail" id="mail" type="email" placeholder="E-mail*">
                                    </div>
                                    <div class="col-md-4">
                                        <input name="Website" id="Website" type="text" placeholder="Website">
                                    </div>
                                    <div class="col-md-12">
                                        <textarea name="comment" id="comment" placeholder="Comment" rows="8"></textarea>
                                    </div>
                                </div>

                                <input type="submit" class="btn btn-lg btn-color mt-20" value="Post Comment" id="submit-message">
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </article> <!-- end large post -->
    </div> <!-- end col -->
    <!-- Sidebar -->
    @include('home.layout.sidebar')
    </div>
@endsection