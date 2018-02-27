@extends('home.layout.app')
@section('content')
    <div class="row" style="padding-top: 60px">
        <div class="col-md-9 post-content mb-50">
            <!-- large post -->
            <article class="entry-item large-post">

                <div class="entry-header">
                    {{--<a href="#" class="entry-category">Lifestyle</a>--}}
                    <h1 class="entry-title">{{ $article->title }}</h1>
                </div>

                <div class="entry-img">
                    <img src="{{ asset('home/mg/featured_post.jpg') }}" alt="">
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
                                        <span>分类：<a href="{{ route('home.category',['id'=>$article->category->id]) }}">{{ $article->category->name }}</a></span>
                                    </li>
                                    <li class="entry-comments">
                                        <span>评论：<a href="{{ route('home.article.show',['id' => $article->id.'#comments']) }}">{{ $article->comments_count }} 回复</a></span>
                                    </li>
                                </ul>

                                <div class="social-icons right">
                                    <div class="social-share" data-sites="qzone, qq, weibo,wechat, douban" data-wechat-qrcode-title="打开微信扫一扫"></div>
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
                                @inject('commentsPresenter','App\Repositories\Presenter\CommentsPresenter')
                                <ul class="comment-list">
                                {!! $commentsPresenter->comments($article->comments->toArray()) !!}
                                </ul>
                            </div> <!--  end comments -->
                            @if(auth()->check())
                                <div class="comment-form mt-60">
                                    <div class="heading-lines mb-30">
                                        <h3 class="heading small">留言评论</h3>
                                    </div>
                                    <form id="form" method="post" action="{{ route('home.article.comment') }}">
                                        <input type="hidden" name="id" value="{{ $article->id }}">
                                        <input type="hidden" name="parent_id" value="0">
                                        {{ csrf_field() }}
                                        <div class="row row-16">
                                            <div class="col-md-12">
                                                <textarea name="content" id="comment" placeholder="" rows="8"></textarea>
                                            </div>
                                        </div>

                                        <input type="submit" class="btn btn-lg btn-color mt-20" value="留言评论" id="submit-comment">
                                    </form>
                                </div>
                                @else
                                <a href="{{ route('home.login') }}" class="btn btn-lg btn-color mt-20">登录并留言评论</a>
                        @endif
                            <!-- Leave a Comment -->


                        </div>
                    </div>
                </div>
            </article> <!-- end large post -->
        </div> <!-- end col -->
        <!-- Sidebar -->
        @include('home.layout.sidebar')
    </div>
@endsection
@section('js')
    <script>
        var submitContact = $('#submit-comment'),
            message = $('#msg');

        submitContact.on('click', function(e){
            $('#form').submit();
            /*e.preventDefault();

            var $this = $(this);

            $.ajax({
                type: "POST",
                url: '{{ route('home.article.comment') }}',
                dataType: 'json',
                cache: false,
                data: $('#form').serialize(),
                success: function(data) {

                   /!* if(data.info !== 'error'){
                        $this.parents('form').find('input[type=text],input[type=email],textarea,select').filter(':visible').val('');
                        message.hide().removeClass('success').removeClass('error').addClass('success').html(data.msg).fadeIn('slow').delay(5000).fadeOut('slow');
                    } else {
                        message.hide().removeClass('success').removeClass('error').addClass('error').html(data.msg).fadeIn('slow').delay(5000).fadeOut('slow');
                    }*!/
                }
            });*/
        });

        $('.reply-comment').on('click',function(){
            $("#comment").attr('placeholder','回复'+$('.comment-author').html());
            $("#form").find("input[name='parent_id']").val($(this).data('id'));
        })
    </script>
@endsection