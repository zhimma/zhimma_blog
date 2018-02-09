<!-- Fullscreen search -->
<div class="search-wrap">
    <div class="search-inner">
        <div class="search-cell">
            <form method="get">
                <div class="search-field-holder">
                    <input type="search" class="form-control main-search-input" placeholder="Search for">
                    <div class="search-submit-icon"><i class="icon icon_search"></i></div>
                    <input type="submit" class="search-submit" value="search">
                </div>
            </form>
        </div>
    </div>
    <i class="icon icon_close search-close" id="search-close"></i>
</div> <!-- end fullscreen search -->
<nav class="navbar navbar-fixed-top">
    <div class="navigation">
        <div class="container relative">

            <div class="row">

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div> <!-- end navbar-header -->


                <!-- side menu -->
                <div class="side-menu nav-left hidden-sm hidden-xs">
                    <div class="nav-inner">
                        <div class="nav-search-wrap hidden-sm hidden-xs">
                            <a href="#" class="nav-search search-trigger">
                                <i class="icon icon_search"></i>
                            </a>
                        </div>
                    </div>
                </div> <!-- end side menu -->

                <div class="col-md-12 nav-wrap">
                    <div class="collapse navbar-collapse text-center" id="navbar-collapse">
                        <ul class="nav navbar-nav">
                            <li><a href="/">主页</a></li>
                            <li><a href="/article">文章</a></li>
                            <li><a href="/about">关于</a></li>
                            <li><a href="/contact">联系我</a></li>
                            <li id="mobile-search" class="hidden-lg hidden-md">
                                <form method="get" class="mobile-search">
                                    <input type="search" class="form-control" placeholder="Search...">
                                    <button type="submit" class="search-button">
                                        <i class="icon icon_search"></i>
                                    </button>
                                </form>
                            </li>
                            <ul class="nav navbar-nav pull-right">
                                <li><a href="#">Link</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Action</a></li>
                                        <li><a href="#">Another action</a></li>
                                        <li><a href="#">Something else here</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="#">Separated link</a></li>
                                    </ul>
                                </li>
                            </ul>

                        </ul> <!-- end menu -->


                    </div> <!-- end collapse -->
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div> <!-- end container -->
    </div> <!-- end navigation -->
</nav> <!-- end navbar -->