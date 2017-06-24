<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta property="og:url" content="http://martialarts.am/" />
        <meta property="og:type" content="article" />
        <meta property="og:title" content="Docando martial arts " />
        <meta property="og:description" content="Combination of Karate and Tricking" />
        <meta property="og:image" content="/img/footer_logo.png" />
        
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
        @if (Route::getCurrentRoute()->getName() == 'service')
            @include('users.headerinpages')
        @else
            @include('users.header')
        @endif
        @yield('content')
        @include('users.footer')
        @include('users.scripts')
    </body>
</html>
