<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <!-- Bootstrap Core CSS -->
    <link href="/sm-admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
</head>
<body style="background-image: url(/img/bg22.jpg)">
    @yield('content')
</div>
</bodystyle>
<!-- jQuery -->
<script src="/sm-admin/vendor/jquery/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="/sm-admin/vendor/bootstrap/js/bootstrap.min.js"></script>
</html>
