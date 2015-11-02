<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hightr</title>
    <link rel="shortcut icon" href="{!! asset('/facicon.ico') !!}" type="image/x-icon">
    <link href="{!! asset('/css/bootstrap.css') !!}" rel="stylesheet">

    <!-- Fonts -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    @yield('head')
</head>
<body>
<div style="width: 100%; height: 100%;">




@yield('content')

<script src="{!! asset('js/jquery-1.11.2.min.js') !!}" ></script>
<script src="{!! asset('js/bootstrap.js') !!}" ></script>

</body>
</html>