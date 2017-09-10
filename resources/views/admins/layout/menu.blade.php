<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{url('/')}}">Martial arts admin panel <small>v1</small></a>
    </div>
    <!-- /.navbar-header -->

    <ul class="nav navbar-top-links navbar-right">
        <!-- /.dropdown -->
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li>
                    <a href="{{url(env('url') . 'logout')}}"><i class="fa fa-sign-out fa-fw"></i> Ելք</a>
                </li>
            </ul>
            <!-- /.dropdown-user -->
        </li>
        <!-- /.dropdown -->
    </ul>
    <!-- /.navbar-top-links -->

    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li>
                    <a href="{{url(env('url'))}}"><i class="fa fa-dashboard fa-fw"></i> Ստատիստիկա </a>
                </li>
                <li>
                    <a href="{{url(env('url').'home-texts')}}"><i class="fa fa-sitemap fa-fw"></i> Սլայդեր </a>
                </li>
                <li>
                    <a href="{{url(env('url').'about-texts')}}"><i class="fa fa-sitemap fa-fw"></i> Մեր Մասին </a>
                </li>
                <li>
                    <a><i class="fa fa-sitemap fa-fw"></i> Ծառայություներ <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="{{url(env('url').'add-services')}}">Ավելացնել</a>
                        </li>
                        <li>
                            <a href="{{url(env('url').'all-services')}}">Ծառայություների ցուցակ</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a><i class="fa fa-sitemap fa-fw"></i> Թիմ <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="{{url(env('url').'teams')}}">Ավելացնել Նոր Անդամ</a>
                        </li>
                        <li>
                            <a href="{{url(env('url').'all-team')}}">Անդամների Ցուցակ</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a><i class="fa fa-sitemap fa-fw"></i> Նորություներ <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="{{url(env('url').'news ')}}">Ավելացնել</a>
                        </li>
                        <li>
                            <a href="{{url(env('url').'all-news')}}">Նորություների Ցուցակ</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a><i class="fa fa-sitemap fa-fw"></i> Գներ <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="{{url(env('url').'prices ')}}">Ավելացնել</a>
                        </li>
                        <li>
                            <a href="{{url(env('url').'all-prices')}}">Գների Ցուցակ</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a><i class="fa fa-sitemap fa-fw"></i> Նկարներ <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="{{url(env('url').'add-folder ')}}">Ավելացնել Տիրույթ</a>
                        </li>
                        <li>
                            <a href="{{url(env('url').'add-image')}}">Ավելացնել նկարներ</a>
                        </li>
                        <li>
                            <a href="{{url(env('url').'all-folders')}}">Նկարներ</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{url(env('url').'contact-user')}}"><i class="fa fa-sitemap fa-fw"></i> Կոնտակտներ  </a>
                </li>
            </ul>
        </div>
        <!-- /.sidebar-collapse -->
    </div>
    <!-- /.navbar-static-side -->
</nav>