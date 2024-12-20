<!DOCTYPE html>
<html lang="{{app()->getLocale()}}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Untree.co">


    <meta name="description" content="@if(isset($meta_desc)) {{$meta_desc}} @endif"/>
    <meta name="keywords" content="@if(isset($meta_keys)) {{$meta_keys}} @endif"/>

    <link href="{{asset('https://fonts.googleapis.com/css?family=Cormorant+Garamond:400,500i,700|Roboto:300,400,500,700&display=swap')}}"
          rel="stylesheet">

    <link rel="stylesheet" href="{{asset('/site/css/css/vendor/icomoon/style.css')}}">
    <link rel="stylesheet" href="{{asset('/site/css/css/vendor/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('/site/css/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('/site/css/css/scss/style.scss')}}">
    <link rel="stylesheet" href="{{asset('/site/css/sonCss/style.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('/site/css/sonCss/flaticon.css')}}" type="text/css">

    <link rel="stylesheet" href="{{asset('/site/css/sonCss/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('/site/css/sonCss/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('/site/css/sonCss/flaticon.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('/site/css/sonCss/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('/site/css/sonCss/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('/site/css/sonCss/jquery-ui.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('/site/css/sonCss/magnific-popup.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('/site/css/sonCss/slicknav.min.css')}}" type="text/css">


    <!-- deluxe -->
    <link rel="stylesheet" href="{{asset('/site/css/deluxeCss/style.css')}}">

    <!--    <link rel="stylesheet" href="deluxeCss/open-iconic-bootstrap.min.css">-->
    <!--    <link rel="stylesheet" href="deluxeCss/animate.css">-->

    <!--    <link rel="stylesheet" href="deluxeCss/owl.carousel.min.css">-->
    <!--    <link rel="stylesheet" href="deluxeCss/owl.theme.default.min.css">-->
    <!--    <link rel="stylesheet" href="deluxeCss/magnific-popup.css">-->

    <!--    <link rel="stylesheet" href="deluxeCss/aos.css">-->

    <!--    <link rel="stylesheet" href="deluxeCss/ionicons.min.css">-->

    <link rel="stylesheet" href="{{asset('/site/css/deluxeCss/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('/site/css/deluxeCss/jquery.timepicker.css')}}">


    <!--    <link rel="stylesheet" href="deluxeCss/flaticon.css">-->
    <!--    <link rel="stylesheet" href="deluxeCss/icomoon.css">-->
    <link rel="stylesheet" href="{{asset('/site/css/css/css/MyStyle.css')}}">
    <title>{{__('messages.title')}}</title>
</head>

<body>

<div id="untree_co--overlayer"></div>
<div class="loader">
    <div class="spinner-border text-primary" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>

<nav class="untree_co--site-mobile-menu">
    <div class="close-wrap d-flex">
        <a href="#" class="d-flex ml-auto js-menu-toggle">
            <span class="close-label">Close</span>
            <div class="close-times">
                <span class="bar1"></span>
                <span class="bar2"></span>
            </div>
        </a>
    </div>
    <div class="site-mobile-inner"></div>
</nav>
