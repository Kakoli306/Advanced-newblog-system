<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">


    <!-- Font -->

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">


    <!-- Stylesheets -->

    <link href="{{asset('public/frontEnd/') }}/common-css/bootstrap.css" rel="stylesheet">

    <link href="{{asset('public/frontEnd/') }}/common-css/ionicons.css" rel="stylesheet">


    <!-- Font -->

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">




    <link href="{{asset('public/frontEnd/') }}/single-post-2/css/responsive.css" rel="stylesheet">
    <link href="{{asset('public/frontEnd/') }}/single-post-2/css/styles.css" rel="stylesheet">

</head>
<body >

<!-- Single post 2 -->
<!-- Stylesheets -->







@include('frontEnd.layouts.header')



<div class="slider display-table center-text">
    <h1 class="title display-table-cell"><b>BLOG</b></h1>
</div><!-- slider -->

@yield('content')

@include('frontEnd.layouts.footer')


<!-- SCIPTS -->

<script src="{{asset('public/frontEnd/') }}/common-js/jquery-3.1.1.min.js"></script>

<script src="{{asset('public/frontEnd/') }}/common-js/tether.min.js"></script>

<script src="{{asset('public/frontEnd/') }}/common-js/bootstrap.js"></script>

<script src="{{asset('public/frontEnd/') }}/common-js/scripts.js"></script>

</body>
</html>
