<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>

    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">

    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:300,400%7COpen+Sans:400,400i,700%7CLibre+Baskerville:400i' rel='stylesheet'>

    <!-- Css -->
    <link rel="stylesheet" href="{{ asset('home/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('home/css/font-icons.css') }}" />
    <link rel="stylesheet" href="{{ asset('home/css/sliders.css') }}" />
    <link rel="stylesheet" href="{{ asset('home/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('home/css/responsive.css') }}" />
    <link rel="stylesheet" href="{{ asset('home/css/spacings.css') }}" />
    <link rel="stylesheet" href="{{ asset('home/css/animate.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('plugins/share-js/dist/css/share.min.css') }}" />

</head>

<body class="relative">

<!-- Preloader -->
<div class="loader-mask">
    <div class="loader">
        <div></div>
        <div></div>
    </div>
</div>

<div class="main-wrapper oh">

    <header class="nav-type-1 dark-nav">
        @include('home.layout.nav')
    </header>

    <section class="header-wrap hero-section bg-light">
        <div class="container">
            <div class="logo-container text-center">
                <div class="logo-wrap">
                    <a href="index.html">
                        <img class="logo-dark" src="{{ asset('home/img/logo_dark_big.png') }}" alt="logo">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="content-wrapper oh">
        <section class="content blog-standard">
            <div class="container relative">
                    @yield('content')
            </div> <!-- end container -->
        </section> <!-- end content -->
        <!-- Instagram Feed -->
        <div class="instagram-feed text-center">
            <h3 class="heading uppercase">Instagram</h3>
            <h5 class="heading uppercase mb-30">follow @soho</h5>
            <ul id="instafeed-row"></ul>
        </div>
        {{--<div class="widget-social">--}}
            {{--<div class="social-icons text-center">--}}
                {{--<a href="#">--}}
                    {{--<i class="fa fa-instagram"></i>--}}
                    {{--<span>instagram</span>--}}
                {{--</a>--}}
                {{--<a href="#">--}}
                    {{--<i class="fa fa-facebook"></i>--}}
                    {{--<span>facebook</span>--}}
                {{--</a>--}}
                {{--<a href="#">--}}
                    {{--<i class="fa fa-twitter"></i>--}}
                    {{--<span>twitter</span>--}}
                {{--</a>--}}
                {{--<a href="#">--}}
                    {{--<i class="fa fa-pinterest-p"></i>--}}
                    {{--<span>pinterest</span>--}}
                {{--</a>--}}
                {{--<a href="#">--}}
                    {{--<i class="fa fa-rss"></i>--}}
                    {{--<span>rss</span>--}}
                {{--</a>--}}
            {{--</div>--}}
        {{--</div>--}}
        <!-- Footer Type-1 -->
       @include('home.layout.footer')
        <div id="back-to-top">
            <a href="#top"><i class="fa fa-angle-up"></i></a>
        </div>

    </div> <!-- end content wrapper -->
</div> <!-- end main wrapper -->

<!-- jQuery Scripts -->
<script type="text/javascript" src="{{ asset('home/js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('home/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('home/js/plugins.js') }}"></script>
<!--<script type="text/javascript" src="js/twitterFetcher_min.js"></script>-->
<script type="text/javascript" src="{{ asset('home/js/scripts.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/share-js/dist/js/social-share.min.js') }}"></script>

<!-- Instafeed -->

</body>
</html>
