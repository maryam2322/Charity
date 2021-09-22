@include("layouts.header")
<div class="main">
    <!-- ِDonation form -->
    <section class="signup">
        <div class="containerr">
            <div class="signup-content">
                <div class="signup-form">
                    <h2 class="form-title">کمک مالی ❤ </h2>
                    <form method="post" class="register-form" action='/pay-store'>
                        @csrf
                        @method('post')
                        <div class="form-group">
                            <input type="text" name="price" id="price" placeholder="مبلغ مورد نظر خود را وارد کنید."
                                   dir="rtl" required/>
                        </div>
                        <div class="form-group">
                            <input type="text" name="nationalCode" id="national-code"
                                   placeholder="کدملی خود را وارد کنید." dir="rtl" required/>
                        </div>
                        <div class="container mb-auto">
                            <select name="PayFor" id="payFor" class="custom-control">
                                <option selected>انتخاب کنید</option>
                                <option class="text-right" value="صدقه">صدقه</option>
                                <option class="text-right" value="زکات">خمس و زکات</option>
                                <option class="text-right" value="فطریه">تحصیل</option>
                                <option class="text-right" value="جهیزیه">جهیزیه</option>
                                <option class="text-right" value="درمان">درمان</option>
                                <option class="text-right" value="جهیزیه">آزادی زندانیان</option>
                            </select>
                        </div>

                        <div class="form-group form-button">
                            <input type="submit" name="pay-online" id="pay-online" class="form-submit"
                                   value="تکمیل فرایند پرداخت"/>
                        </div>
                    </form>
                </div>
                <div class="signup-image">
                    <img src="/assets/images/signup//help.jpg" alt="">
                </div>
            </div>
        </div>
    </section>
</div>
<!-- JS -->
<script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
<script src="vendor/jquery/jquery.min.js"></script>
<script src="js/main.js"></script>
@include("layouts.footer")
