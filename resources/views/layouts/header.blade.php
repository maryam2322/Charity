<!DOCTYPE html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <title> خیریه مهر </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootsrap -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/bootstrap-rtl.css">
    <link rel="stylesheet" href="/assets/css/bootstrap.css">
    <link rel="stylesheet" href="/assets/css/prettyPhoto.css">


    <!-- Owl carousel -->
    <link rel="stylesheet" href="/assets/css/owl.carousel.css">

    <!-- Template main Css -->
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/table.css">
    <!-- Modernizr -->
    <script src="/assets/js/modernizr-2.6.2.min.js"></script>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">


</head>

<body>
<header class="main-header">

    <div class="navbar-main">

        <ul style="display: flex; justify-content: space-evenly; justify-items: center;align-content: center;align-items: center;align-items: center; list-style: none">

            <img src="/assets/images/logo.png" style="width: 60px; height: 60px" alt="">

            <li>
                <a href="/signup">ورود / ثبت نام</a>
            </li>

            <li>
                <a href="/">صفحه اصلی</a>
            </li>

{{--            <li class="nav-item dropdown">--}}
{{--                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">روش های کمک به مهر</a>--}}
{{--                <div class="dropdown-menu">--}}
{{--                    <a class="dropdown-item" href="#">1/</a>--}}
{{--                    <a class="dropdown-item" href="#">2/</a>--}}
{{--                </div>--}}
{{--            </li>--}}

{{--            <li>--}}
{{--                <a href="/role">دسترسی</a>--}}
{{--            </li>--}}

            <li>
                <a href="/gallery">تصاویر</a>
            </li>

            <li>
                <a href="/about">درباره ما</a>
            </li>

            <li>
                <a href="/contact">ارتباط با ما</a>
            </li>

        @if(auth()->check())

                <li class="dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">گزارشات</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="/myPayment">گزارش پرداخت های من</a>
                        <a class="dropdown-item" href="/report">گزارش پرداخت به تفکیک موضوع</a>
                        <a class="dropdown-item" href="/monthlyreport">گزارش پرداخت ماهیانه</a>
                        <a class="dropdown-item" href="/yearlyreport">گزارش پرداخت سالیانه</a>
                    </div>
                </li>
                <li>
                    <a href="/logout">خروج از سیستم</a>
                </li>

            @endif
        </ul>

    </div>

</header> <!-- /. main-header -->
