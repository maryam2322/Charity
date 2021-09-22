@include("layouts.header")
<div class="main">
    <!-- Sign up form -->
    <section class="signup">
        <div class="containerr">
            <div class="signup-content">
                <div class="signup-form" dir="rtl">
                    <h2 class="form-title">ثبت نام</h2>
                    <form action="/register" class="register-form" id="register-form" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="name" id="name" placeholder="نام خود  را وارد کنبد." required/>
                            <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                        </div>
                        <div class="form-group">
                            <label for="phone"><i class="zmdi zmdi-phone"></i></label>
                            <input type="text" name="phone" id="phone" placeholder="تلفن همراه خود را وارد کنبد." required/>
                        </div>
                        <div class="form-group">
                            <label for="text"><i class="zmdi zmdi-code"></i></label>
                            <input type="text" name="nationalCode" id="national-code" placeholder="کد ملی خود را وارد کنید." required/>
                        </div>
                        <div class="form-group">
                            <label for="email"><i class="zmdi zmdi-email"></i></label>
                            <input type="email" name="email" id="email" placeholder="ایمیل خود را وارد کنید." required/>
                        </div>
                        <div class="form-group">
                            <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                            <input type="password" name="password" id="pass" placeholder="رمز مورد نظر را وارد کنید." required/>
                        </div>
                        <div class="form-group">
                            <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                            <input type="password" name="repass" id="re_pass" placeholder="رمز خود را تکرار کنید."/>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" required/>
                            <label for="agree-term" class="label-agree-term"><span><span></span></span>من با شرایط ضمیمه شده موافق هستم. <a href="#" class="term-service">شرایط و ضوابط</a></label>
                        </div>
                        <div class="form-group form-button">
                            <input type="submit" name="signup" id="signup" class="form-submit" value="ثبت نام"/>
                        </div>
                    </form>
                </div>
                <div class="signup-image">
                    <img src="/assets/images/signup/register.jpg" alt="">
                    <a href="/login" class="signup-image-link">من قبلا ثبت نام کرده ام.</a>
                </div>
            </div>
        </div>
    </section>


</div>
<!-- JS -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="js/main.js"></script>

@include("layouts.footer")
