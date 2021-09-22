<footer class="main-footer">
    <div class="footer-main">
        <div class="container">
            <div class="row">

                <div class="col-md-4">
                    <div class="footer-col">

                        <h4 class="footer-title">درباره ما<span class="title-under"></span></h4>

                        <div class="footer-content">

                            <p>
                                <strong>موسسه مهر </strong>مجموعه ای است که با کمک های مردمی و لطف خیرین تلاش در جهت
                                همیاری هم میهنان عزیز برای زندگی بهتر دارد.
                            </p>
                            <p>
                                شما هموطنان مهربان می توانید با کمک های در این خیریه شریک حال خوب هم نوعانتان باشید.
                            </p>

                        </div>

                    </div>

                </div>

                <div class="col-md-4">

                    <div class="footer-col">

                        <h4 class="footer-title">خبر روز موسسه مهر <span class="title-under"></span></h4>

                        <div class="footer-content">
                            <ul class="tweets list-unstyled">
                                <li class="tweet">

                                </li>

                                <li class="tweet">

                                </li>

                                <li class="tweet">

                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">

                    <div class="footer-col">

                        <h4 class="footer-title">ارتباط با ما<span class="title-under"></span></h4>

                        <div class="footer-content">

                            <div class="footer-form">

                                <div class="footer-form">

                                    <form action="/contact/store" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control" placeholder="نام"
                                                   required>
                                        </div>

                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control" placeholder="ایمیل"
                                                   required>
                                        </div>

                                        <div class="form-group">
                                            <textarea name="message" class="form-control" placeholder="پیام"
                                                      required></textarea>
                                        </div>

                                        <div class="form-group alerts">

                                            <div class="alert alert-success" role="alert">

                                            </div>

                                            <div class="alert alert-danger" role="alert">

                                            </div>

                                        </div>

                                        <div class="form-group">
                                            <button type="submit" class="btn btn-submit ">ارسال پیام</button>
                                        </div>
                                    </form>

                                </div>

                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>

    <div class="footer-bottom">

        <div class="container">
            <div class="row">

                <div class="col-sm-6 col-xs-12 text-left">

                    <ul class="list-unstyled list-inline">
                        <li><i class="fa fa-phone"></i><a href="#">021-00000000</a></li>
                        <li><i class="fa fa-envelope"></i><a href="#">Mehrcharity@gmail.com</a>
                        </li>
                    </ul>

                </div>

                <div class="col-sm-6 col-xs-12 text-right">
                    <ul class="list-unstyled list-inline">
                        <li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    </ul>

                </div>
            </div>
        </div>
    </div>

</footer><!-- main-footer -->


<!-- Donate Modal??? -->
<div class="modal fade" id="donateModal" tabindex="-1" role="dialog" aria-labelledby="donateModalLabel"
     aria-hidden="true">

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="donateModalLabel">کمک آنلاین</h4>
            </div>
            <div class="modal-body">

                <form class="form-donation" action="/pay-store">

                    <h3 class="title-style-1 text-center">با تشکر از حمایت شما دوست مهربان<span
                            class="title-under"></span></h3>

                    <div class="row">

                        <div class="form-group col-md-12 ">
                            <input type="text" class="form-control" id="amount"
                                   placeholder="مبلغ مورد نظر را وارد کنید.">
                        </div>

                    </div>


                    <div class="row">
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" name="lastName" placeholder="نام خانوادگی*">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" name="firstName" placeholder="نام*">
                        </div>
                    </div>


                    <div class="row">

                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" name="email" placeholder="ایمیل*">
                        </div>

                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" name="phone" placeholder="تلفن همراه">
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-md-12">
                            <textarea cols="30" rows="4" class="form-control" name="note"
                                      placeholder="پیام خود را بنویسید."></textarea>
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-md-12">
                            <button type="submit" class="btn btn-primary pull-right" name="donateNow">پرداخت</button>
                        </div>

                    </div>
                </form>

            </div>
        </div>
    </div>
</div> <!-- /.modal -->

<!-- jQuery -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="assets/js/jquery-1.11.1.min.js"><\/script>')</script>

<!-- Bootsrap javascript file -->
<script src="/assets/js/bootstrap.min.js"></script>

<!-- owl carouseljavascript file -->
<script src="/assets/js/owl.carousel.min.js"></script>

<!-- Template main javascript -->
<script src="/assets/js/main.js"></script>

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
    (function (b, o, i, l, e, r) {
        b.GoogleAnalyticsObject = l;
        b[l] || (b[l] =
            function () {
                (b[l].q = b[l].q || []).push(arguments)
            });
        b[l].l = +new Date;
        e = o.createElement(i);
        r = o.getElementsByTagName(i)[0];
        e.src = '//www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e, r)
    }(window, document, 'script', 'ga'));
    ga('create', 'UA-XXXXX-X');
    ga('send', 'pageview');
</script>

</body>
</html>
