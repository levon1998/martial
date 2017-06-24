<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html">Martial arts admin panel <small>v1</small></a>
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
                    <a href="{{url(env('url') . 'logout')}}"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
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
                    <a href="{{url(env('url'))}}"><i class="fa fa-dashboard fa-fw"></i> Dashboard </a>
                </li>
                <li>
                    <a href="{{url(env('url').'home-texts')}}"><i class="fa fa-bar-chart-o fa-fw"></i> Home text </a>
                </li>
                <li>
                    <a href="{{url(env('url').'about-texts')}}"><i class="fa fa-table fa-fw"></i> About text </a>
                </li>
                <li>
                    <a><i class="fa fa-edit fa-fw"></i> Services <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="{{url(env('url').'add-services')}}">Add Service</a>
                        </li>
                        <li>
                            <a href="{{url(env('url').'all-services')}}">All Services</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a><i class="fa fa-wrench fa-fw"></i> Team <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="{{url(env('url').'teams')}}">Add Team Member</a>
                        </li>
                        <li>
                            <a href="{{url(env('url').'all-team')}}">All Team Members</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a><i class="fa fa-sitemap fa-fw"></i> News <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="{{url(env('url').'news ')}}">Add News</a>
                        </li>
                        <li>
                            <a href="{{url(env('url').'all-news')}}">All News</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a><i class="fa fa-sitemap fa-fw"></i> Price <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="{{url(env('url').'prices ')}}">Add Price</a>
                        </li>
                        <li>
                            <a href="{{url(env('url').'all-prices')}}">All Prices</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{url(env('url').'subscribes')}}"><i class="fa fa-sitemap fa-fw"></i> Subscribes  </a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-sitemap fa-fw"></i> Contacts  </a>
                </li>
            </ul>
        </div>
        <!-- /.sidebar-collapse -->
    </div>
    <!-- /.navbar-static-side -->
</nav>