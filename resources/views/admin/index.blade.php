<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>

    <!--=========================*
                Met Data
    *===========================-->
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Gelr Bootstrap 4 Admin Template">

    <title>پنل ادمین</title>

    <link rel="shortcut icon" type="image/x-icon" href={{asset("images/admin/favicon.png")}}>
    <link rel="stylesheet" href={{asset("css/admin/bootstrap.min.css")}}>
    <link rel="stylesheet" href={{asset("css/admin/style.css")}}>
    <link href={{asset("css/admin/owl.carousel.min.css")}} rel="stylesheet" type="text/css">
    <link href={{asset("css/admin/owl.theme.default.min.css")}} rel="stylesheet" type="text/css">
    <link rel="stylesheet" href={{asset("css/admin/font-awesome.min.css")}}>
    <link rel="stylesheet" href={{asset("css/admin/themify-icons.css")}}>
    <link href={{asset("css/admin/ionicons.min.css")}} rel="stylesheet" />
    <link href={{asset("css/admin/et-line.css")}} rel="stylesheet" />
    <link href={{asset("css/admin/feather.css")}} rel="stylesheet" />
    <link href={{asset("css/admin/flag-icon.min.css")}} rel="stylesheet" />
    <link rel="stylesheet" href={{asset("css/admin/slicknav.min.css")}}>
    <script src={{asset("js/admin/modernizr-2.8.3.min.js")}}></script>
    <link rel="stylesheet" href={{asset("css/admin/metisMenu.css")}}>
    <link rel="stylesheet" href={{asset("css/admin/perfect-scrollbar.min.css")}}>
    <link href={{asset("css/admin/flag-icon.min.css")}} rel="stylesheet" />
    <link rel="stylesheet" href={{asset("css/admin/slicknav.min.css")}}>




    <!--=========================*
            Google Fonts
    *===========================-->

    <!-- Montserrat USE: font-family: 'Montserrat', sans-serif;-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900"
        rel="stylesheet">
<script src="http://kit.fontawesome.com/yourcode.js"></script>
    <!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>

<body>
    <!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

    <div class="vz_main_sec">
        @include('admin.section.header')
        @yield('content')
    </div>

    <!--=========================*
            Scripts
*===========================-->

    <!-- Jquery Js -->
    <script src="{{asset("js/admin/jquery.min.js")}}"></script>
    <!-- bootstrap 4 js -->
    <script src="{{asset("js/admin/popper.min.js")}}"></script>
    <script src="{{asset("js/admin/bootstrap.min.js")}}"></script>
    <!-- Owl Carousel Js -->
    <script src="{{asset("js/admin/owl.carousel.min.js")}}"></script>
    <!-- Metis Menu Js -->
    <script src="{{asset("js/admin/metisMenu.min.js")}}"></script>
    <!-- SlimScroll Js -->
    <script src="{{asset("js/admin/jquery.slimscroll.min.js")}}"></script>
    <!-- Slick Nav -->
    <script src="{{asset("js/admin/jquery.slicknav.min.js")}}"></script>

    <!--Home Script-->
    <script src="{{asset("js/admin/home.js")}}"></script>

    <!--Perfect Scrollbar-->
    <script src="{{asset("js/admin/perfect-scrollbar.min.js")}}"></script>
    <!-- Main Js -->
    <script src="{{asset("js/admin/main.js")}}"></script>


</body>

</html>
