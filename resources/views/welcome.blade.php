<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta property="og:url" content="{{isset($meta['url']) ? $meta['url'] : 'http://martialarts.am/' }}" />
        <meta property="og:type" content="article" />
        <meta property="og:title" content="{{isset($meta['title']) ? $meta['title'] : 'Docando martial arts' }}" />
        <meta property="og:description" content="{{isset($meta['description']) ? $meta['description'] : 'Combination of Karate and Tricking' }}" />
        <meta property="og:image" content="{{isset($meta['image']) ? $meta['image'] : '/img/footer_logo.png' }}" />
        
        <title>@yield('title')</title>
        <link rel="stylesheet" href="/css/font-awesome.css">
        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/animate.css">
        <link rel="stylesheet" href="/css/prettyPhoto.css">
        <link href="/css/style.css" rel="stylesheet">
        <link href="/css/responsive.css" rel="stylesheet">

        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
    <div class="addthis_inline_share_toolbox"></div>
        @if (Route::getCurrentRoute()->getName() == 'service' || Request::path() == 'images' || Route::getCurrentRoute()->getName() == 'image')
            @include('users.headerinpages')
        @else
            @include('users.header')
        @endif
        @yield('content')
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCWpgFJDJJkgFS0XsgPZGlMChqkB1aafb4&callback=initialize" async defer></script>
        @include('users.footer')
        @include('users.scripts')
        <!-- Go to www.addthis.com/dashboard to customize your tools --> <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-58d664ca8ecc2ba6"></script>
    </body>
</html>
