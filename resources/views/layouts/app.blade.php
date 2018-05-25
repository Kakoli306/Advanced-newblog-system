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

    <link href="{{asset('public/frontEnd/')}}/common-css/bootstrap.css" rel="stylesheet">

    <link href="{{asset('public/frontEnd/')}}/common-css/ionicons.css" rel="stylesheet">


    <link href="{{asset('public/backend/')}}/blog-sidebar/css/styles.css" rel="stylesheet">

    <link href="{{asset('public/backend/')}}/blog-sidebar/css/responsive.css" rel="stylesheet">

</head>
<body>



@include('frontEnd.layouts.header')

<div class="slider display-table center-text">
    <h1 class="title display-table-cell"><b>BLOG</b></h1>
</div><!-- slider -->

@yield('content')

<footer>

    <div class="container">
        <div class="row">

            <div class="col-lg-4 col-md-6">
                <div class="footer-section">



                </div><!-- footer-section -->
            </div><!-- col-lg-4 col-md-6 -->

            <div class="col-lg-4 col-md-6">
                <div class="footer-section">
                    <h4 class="title"><b>Login With Admin</b></h4>


                        <li><a href="#">DESIGN</a></li>

                </div><!-- footer-section -->
            </div><!-- col-lg-4 col-md-6 -->



        </div><!-- row -->
    </div><!-- container -->
</footer>


<!-- SCIPTS -->

<script src="{{asset('public/frontEnd/') }}/common-js/jquery-3.1.1.min.js"></script>

<script src="{{asset('public/frontEnd/')}}/common-js/tether.min.js"></script>

<script src="{{asset('public/frontEnd/')}}/common-js/bootstrap.js"></script>

<script src="{{asset('public/frontEnd/')}}/common-js/scripts.js"></script>

</body>
</html>
