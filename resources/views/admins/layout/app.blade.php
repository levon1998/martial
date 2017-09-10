<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Bootstrap Core CSS -->
    <link href="/sm-admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>

    <!-- MetisMenu CSS -->
    <link href="/sm-admin/vendor/metisMenu/metisMenu.min.css" rel="stylesheet"/>

    <!-- Custom CSS -->
    <link href="/sm-admin/dist/css/sb-admin-2.css" rel="stylesheet"/>

    <!-- Morris Charts CSS -->
    <link href="/sm-admin/vendor/morrisjs/morris.css" rel="stylesheet"/>

    <link href="/css/adminCustom.css" rel="stylesheet"/>

    <!-- Custom Fonts -->

    <link href="/sm-admin/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="/css/font-awesome-animation.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]-->
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <!--[endif]-->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
    <script src="/sm-admin/vendor/jquery/jquery.min.js"></script>
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>

</head>
<body>
<div id="wrapper">
    @include('admins.layout.menu')
    <div id="page-wrapper">
        @include('flash::message')
        @yield('content')
    </div>
</div>
</body>
<!-- Bootstrap Core JavaScript -->
<script src="/sm-admin/vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="/sm-admin/vendor/metisMenu/metisMenu.min.js"></script>

<!-- Morris Charts JavaScript -->
<script src="/sm-admin/vendor/raphael/raphael.min.js"></script>
<script src="/sm-admin/vendor/morrisjs/morris.min.js"></script>
<script src="/sm-admin/data/morris-data.js"></script>

<!-- Custom Theme JavaScript -->
<script src="/sm-admin/dist/js/sb-admin-2.js"></script>
</html>
