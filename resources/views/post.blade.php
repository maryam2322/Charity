@include('layouts.header')


<!-- Carousel-->
<div id="homeCarousel" class="carousel slide carousel-home" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#homeCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#homeCarousel" data-slide-to="1"></li>
        <li data-target="#homeCarousel" data-slide-to="2"></li>
    </ol>

    <div class="carousel-inner" role="listbox">

        <div class="item active">

            <img style="width: 1900px;height: 600px" src="/assets/images/slider/slider-01.jpg" alt="">

            <div class="container">

                <div class="carousel-caption">

                    <h2 class="carousel-title bounceInDown animated slow ">با کمک مالی خود آینده این کودکان را
                        تامین کنیم</h2>
                    <a href="/pay-online" class="btn btn-lg bottn-secondary hidden-xs bounceInUp animated slow"
                       data-toggle="modal">کمک آنلاین</a>
                </div>
                <!-- /.carousel-caption -->
            </div>
        </div>
        <!-- /.item -->
        <div class="item ">

            <img style="width: 1900px;height: 600px" src="/assets/images/slider/slider-02.jpg" alt="">

            <div class="container">

                <div class="carousel-caption">

                    <h2 class="carousel-title bounceInDown animated slow">با کمک های خود یک زندگی را جان دوباره ببخشیم
                    </h2>
                    <a href="/pay-online" class="btn btn-lg bottn-secondary hidden-xs bounceInUp animated"
                       data-toggle="modal">کمک آنلاین</a>

                </div> <!-- /.carousel-caption -->

            </div>

        </div> <!-- /.item -->


        <div class="item ">

            <img style="width: 1900px;height:600px" src="/assets/images/slider/slider-03.jpg" alt="">

            <div class="container">

                <div class="carousel-caption">

                    <h2 class="carousel-title bounceInDown animated slow">با کمک یکدیگر می توانیم زندگی آن ها را بهبود
                        بخشیم.</h2>
                    <a href="/pay-online" class="btn btn-lg bottn-secondary hidden-xs bounceInUp animated slow"
                       data-toggle="modal">کمک آنلاین</a>

                </div> <!-- /.carousel-caption -->

            </div>

        </div> <!-- /.item -->

    </div>

    <a class="left carousel-control" href="#homeCarousel" role="button" data-slide="prev">
        <span class="fa fa-angle-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>

    <a class="right carousel-control" href="#homeCarousel" role="button" data-slide="next">
        <span class="fa fa-angle-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>

</div>
<!-- /.carousel -->

<h2 class="title-style-1">آنچه در مهر میگذرد<span class="title-under"></span></h2>

<div class="section-home about-us fadeIn animated" dir="rtl">

    <div class="container">

        <div class="row" dir="rtl">
            @foreach($posts as $post)
                <div class="col-md-3 col-sm-6" dir="rtl">

                    <div class="about-us-col" dir="rtl">

                        <div class="col-icon-wrapper">
                            <img src="/assets/images/icons/make-donation-icon.png" alt="">
                        </div>
                        <h3 class="col-title">{{$post->title}}</h3>
                        <div class="col-details">

                            <p>{{$post->content}}</p>

                        </div>
                        <a href="/post/{{$post->slug}}" class="btn bottn-primary"> ادامه مطلب </a>

                    </div>

                </div>
            @endforeach


        </div>

    </div>

</div> <!-- /.about-us -->

<div class="section-home home-reasons">

    <div class="container">
        <div class="row">

            <div class="col-md-6">
                <div class="reasons-col animate-onscroll fadeIn">

                    <img class="img-reasons" src="/assets/images/reasons/donation-01.jfif" alt="">

                    <div class="reasons-titles">

                        <h3 class="reasons-title">زندگی ببخشیم</h3>
                        <h5 class="reason-subtitle">ما انسان هستیم</h5>

                    </div>

                    <div class="on-hover hidden-xs">
                        <p>
                            کودکان بهبود یافته آن دسته از کودکان تحت حمایت مهر هستند که پس از طی مراحل درمان بهبود یافته
                            و
                            مدتی از قطع درمان آنها می گذرد.
                            کودکان بهبود یافته همچنان با مهر در ارتباط و تحت حمایت های مهر هستند و برای اطمینان از سلامت
                            کامل آنها، آزمایش هایی به صورت دوره‌ای انجام می دهند. بسیاری از این کودکان امروز جوانانی
                            موفق
                            هستند که خود از یاوران پر انرژی مهر محسوب می شوند و همواره موفقیت و شادی هایشان را با دوستان
                            خود
                            در مهر سهیم می شوند.
                        </p>
                    </div>
                </div>

            </div>

            <div class="col-md-6">
                <div class="reasons-col animate-onscroll fadeIn">

                    <img class="img-reasons" src="/assets/images/reasons/donation-02.jpg" alt="">

                    <div class="reasons-titles">

                        <h3 class="reasons-title">دلی را شاد کنیم</h3>
                        <h5 class="reason-subtitle">ما انسان هستیم</h5>

                    </div>

                    <div class="on-hover hidden-xs">

                        <p>
                            خمس و زکات از دستورهای اسلامی و یکی از فروع دین است و در مورد چیزهایی وضع شده که انسان آن‌ها
                            را با
                            کمک طبیعت به وجود می‌آورد، آن هم طبیعت سهل و ساده؛ یعنی انسان به نسبت، کار کمی انجام داده و
                            طبیعت کار بیشتر را انجام می‌دهد و محصول را به سادگی در اختیار انسان می‌گذارد.با پرداخت خمس و
                            زکات و صدقه شما عزیزان مهر می تواند دل چندین شهروند را شاد کند.
                        </p>
                    </div>


                </div>

            </div>
        </div>

    </div>


</div> <!-- /.home-reasons -->

<div class="section-home our-causes animate-onscroll fadeIn">

    <div class="container">

        <h2 class="title-style-1">هدف ما<span class="title-under"></span></h2>

        <div class="row">

            <div class="col-md-4 col-sm-6">

                <div class="cause">

                    <img src="/assets/images/causes/cause-money.jpg" alt="" class="cause-img">

                    <h4 class="cause-title">خمس و زکات</h4>
                    <div class="cause-details">
                        خیرین محترم با پرداخت خمس و زکات خود موسسه مهر را در جهت کمک به نیازمندان عزیز کشورمان حمایت
                        کنید.
                    </div>

                    <div class="btn-holder text-center">

                        <a href="#" class="btn bottn-primary" data-toggle="modal" data-target="#donateModal">حمایت
                            مالی</a>

                    </div>


                </div> <!-- /.cause -->

            </div>

            <div class="col-md-4 col-sm-6">

                <div class="cause">

                    <img src="/assets/images/causes/cause-education.jpg" alt="" class="cause-img">

                    <h4 class="cause-title">تحصیل</h4>
                    <div class="cause-details">
                        خیرین محترم با پرداخت کمک های مالی خود موسسه ی مهر را برای فراهم کردن شرایط تحصیل جمعی از کودکان
                        عزیزمان حمایت کنید.
                    </div>

                    <div class="btn-holder text-center">

                        <a href="#" class="btn bottn-primary" data-toggle="modal" data-target="#donateModal">حمایت
                            مالی</a>

                    </div>


                </div> <!-- /.cause -->

            </div>

            <div class="col-md-4 col-sm-6">

                <div class="cause">

                    <img src="/assets/images/causes/cause-darman.jpg" alt="" class="cause-img">

                    <h4 class="cause-title">درمان</h4>
                    <div class="cause-details">
                        خیرین محترم با پرداخت کمک های مالی خود موسسه ی مهر را برای بهبود حال بیماران
                        عزیزمان حمایت کنید.
                    </div>

                    <div class="btn-holder text-center">

                        <a href="#" class="btn bottn-primary" data-toggle="modal" data-target="#donateModal">حمایت
                            مالی</a>

                    </div>


                </div> <!-- /.cause -->

            </div>

            <div class="col-md-4 col-sm-6">

                <div class="cause">

                    <img src="/assets/images/causes/cause-dower.jpg" alt="" class="cause-img">

                    <h4 class="cause-title">جهیزیه</h4>
                    <div class="cause-details">
                        خیرین محترم با پرداخت کمک های مالی خود موسسه ی مهر را برای فراهم کردن شرایط زندگی جمعی از زوج های
                        عزیزمان حمایت کنید.
                    </div>

                    <div class="btn-holder text-center">

                        <a href="#" class="btn bottn-primary" data-toggle="modal" data-target="#donateModal">حمایت
                            مالی</a>

                    </div>


                </div> <!-- /.cause -->

            </div>

            <div class="col-md-4 col-sm-6">

                <div class="cause">

                    <img src="/assets/images/causes/cause-sadaghe.jpg" alt="" class="cause-img">

                    <h4 class="cause-title">صدقه</h4>
                    <div class="cause-details">
                        خیرین محترم با پرداخت صدقه موسسه ی مهر را برای شاد کردن جمعی از هم میهنان
                        عزیزمان حمایت کنید.
                    </div>

                    <div class="btn-holder text-center">

                        <a href="#" class="btn bottn-primary" data-toggle="modal" data-target="#donateModal">حمایت
                            مالی</a>

                    </div>


                </div> <!-- /.cause -->

            </div>

            <div class="col-md-4 col-sm-6">

                <div class="cause">

                    <img src="/assets/images/causes/cause-release.jpg" alt="" class="cause-img">

                    <h4 class="cause-title">آزادی زندانیان</h4>
                    <div class="cause-details">
                        خیرین محترم با پرداخت کمک های مالی خود موسسه ی مهر را برای باز گرداندان زندانیان
                        عزیزمان به آغوش خانواده حمایت کنید.
                    </div>

                    <div class="btn-holder text-center">

                        <a href="#" class="btn bottn-primary" data-toggle="modal" data-target="#donateModal">حمایت
                            مالی</a>

                    </div>


                </div> <!-- /.cause -->

            </div>

        </div>

    </div>

</div> <!-- /.our-causes -->


<div class="section-home our-sponsors animate-onscroll fadeIn">

    <div class="container">

        <h2 class="title-style-1">حامیان مهر <span class="title-under"></span></h2>

        <ul class="owl-carousel list-unstyled list-sponsors">
            @foreach($sponsers as $sponser)
                <li><img src="{{$sponser->image}}" alt=""></li>
            @endforeach
        </ul>

    </div>

</div> <!-- /.our-sponsors -->

@include('layouts.footer')



