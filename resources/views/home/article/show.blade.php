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
                            @foreach($article->tags as $value)
                                <a href="{{ route('home.tag.index',['id'=>$value->id]) }}">{{ $value->name }}</a>
                            @endforeach
                        </div>

                        <div class="entry-meta-wrap clearfix">
                            <ul class="entry-meta">
                                <li class="entry-date">
                                    <span>分类：<a href="{{ route('home.category.index',['id'=>$article->category->id]) }}">{{ $article->category->name }}</a></span>
                                </li>
                                <li class="entry-comments">
                                    <span>评论：<a href="{{ route('home.article.show',['id' => $article->id.'#comments']) }}">{{ $article->comments_count }} 回复</a></span>
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
                        <div class="entry-comments mt-20" id="comments">
                            <div class="heading-lines mb-30">
                                <h3 class="heading small">{{ $article->comments_count }} 回复</h3>
                            </div>

                            <ul class="comment-list">
                                @foreach(list_to_tree_key($article->comments->toArray(),'id','parent_id') as $comment)
                                    <li>
                                        <div class="comment-body">
                                            <img src="img/comment_1.jpg" class="comment-avatar" alt="">
                                            <div class="comment-content">
                                                <span class="comment-author">{{ $comment['user_id'] }}</span>
                                                <span class="comment-date">{{ $comment['created_at'] }}</span>
                                                <p>{{ $comment['content'] }}</p>
                                                <a href="#">回复</a>
                                            </div>
                                        </div>
                                        @if(!empty($comment['_child']))
                                            <ul class="comment-reply">
                                                @foreach($comment['_child'] as $var)
                                                    <li>
                                                        <div class="comment-body">
                                                            <img src="img/comment_2.jpg" class="comment-avatar" alt="">
                                                            <div class="comment-content">
                                                                <span class="comment-author">{{ $var['user_id'] }}</span>
                                                                <span class="comment-date">{{ $var['created_at'] }}</span>
                                                                <p>{{ $var['content'] }}</p>
                                                                <a href="#">回复</a>
                                                            </div>
                                                        </div>
                                                    </li> <!-- end reply comment -->
                                                @endforeach
                                            </ul>
                                        @endif
                                    </li>
                                @endforeach
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