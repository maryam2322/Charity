<!DOCTYPE html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <title> خیریه مهر </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootsrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-rtl.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/prettyPhoto.css">


    <!-- Owl carousel -->
    <link rel="stylesheet" href="/assets/css/owl.carousel.css">

    <!-- Template main Css -->
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/table.css">
    <!-- Modernizr -->
    <script src="/assets/js/modernizr-2.6.2.min.js"></script>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <style>
        .drop-btn {
            background-color: #04AA6D;
            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;
        }

        .drop-down {
            position: relative;
            display: inline-block;
        }

        .drop-down-content {
            display: none;
            position: absolute;
            background-color: rebeccapurple;
            min-width: 160px;
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
            z-index: 100;
        }

        .drop-down-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .drop-down-content a:hover {background-color: #ddd;}

        .drop-down:hover .drop-down-content {display: flex;flex-direction: column}

        .drop-down:hover .drop-btn {background-color: #3e8e41;}
    </style>
</head>

<body>

<header>
    <div class="topnav" id="myTopnav">

{{--        <img src="/assets/images/logo.png" style="width: 60px; height: 60px; margin-right: 25vw;position: fixed;left: 0;top: 0 " alt="">--}}
        <a href="/">صفحه اصلی</a>
        <a href="/signup">ورود / ثبت نام</a>
        <a href="/contact">ارتباط با ما</a>
        <a href="/about">درباره ما</a>
        @if(auth()->check())

{{--            <div class="drop-down">--}}
{{--                <a class="drop-btn" data-toggle="dropdown" href="#">گزارشات</a>--}}
{{--                <div class="drop-down-content">--}}
                    <a href="/myPayment">گزارش پرداخت های من</a>
{{--                    <a href="/report">گزارش پرداخت به تفکیک موضوع</a>--}}
{{--                    <a href="/monthlyreport">گزارش پرداخت ماهیانه</a>--}}
{{--                    <a href="/yearlyreport">گزارش پرداخت سالیانه</a>--}}
{{--                </div>--}}
{{--            </div>--}}
            <a href="/logout">خروج از سیستم</a>
        @endif
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div>
</header>

<script>
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }
</script>

{{--<script>--}}
{{--    function myFunction() {--}}
{{--        var x = document.getElementById("myTopnav");--}}
{{--        if (x.className === "navbar-main") {--}}
{{--            x.className += " responsive";--}}
{{--        } else {--}}
{{--            x.className = "navbar-main";--}}
{{--        }--}}
{{--    }--}}
{{--</script>--}}
