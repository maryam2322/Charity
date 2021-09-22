@extends('layouts.main')

@section('content')
<div class="page-heading text-center">

    <div class="container zoomIn animated">

        <h1 class="page-title">ارتباط با ما<span class="title-under"></span></h1>

    </div>

</div>

<div class="main-container fadeIn animated" dir="rtl">

    <div class="container">
        <p class="text-right">
            با استفاده از فرم زیر نظر و انتقادات خود را برای ما ارسال کنید.
        </p>
        <div class="row">
            <div class="col-md-4 col-md-offset-1 col-contact">

                <h2 class="text-right">ارتباط با مهر</h2>
                <p>
                    <b>مهر</b>مجموعه ای که در جهت کمک و بهبود زندگی هم میهنان خود با همکاری خیرین محترم تلاش می کند.
                </p>
                <div class="contact-items">
                    <ul class="list-unstyled contact-items-list">
                        <li class="contact-item"> <span class="contact-icon"> <i class="fa fa-map-marker"></i></span>  تهران ...</li>
                        <li class="contact-item"> <span class="contact-icon"> <i class="fa fa-phone"></i></span>  021-00000000</li>
                        <li class="contact-item"> <span class="contact-icon"> <i class="fa fa-envelope"></i></span>  Mehrcharity@gmail.com</li>
                    </ul>
                </div>
            </div>

            <div class="col-md-7 col-sm-12 col-form">

                <h2 class="text-center">ارسال پیام<span class="title-under"></span></h2>

                <form action="/contact/store" class="contact-form " method="post">
                    @csrf
                    <div class="row">

                        <div class="form-group col-md-6">
                            <input type="email" name="email" class="form-control" placeholder="ایمیل*" required>
                        </div>

                        <div class="form-group col-md-6">
                            <input type="text" name="name" class="form-control" placeholder="نام*" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <textarea name="message" rows="5" class="form-control" placeholder="پیام موردنظر*" required></textarea>
                    </div>

                    <div class="form-group alerts">

                        <div class="alert alert-success" role="alert">

                        </div>

                        <div class="alert alert-danger" role="alert">

                        </div>

                    </div>

                    <div><button class="btn" type="submit">ارسال</button></div>

                    <div class="clearfix"></div>

                </form>

            </div>
            @include('resources.error')

        </div> <!-- /.row -->
    </div>
</div>
@endsection
