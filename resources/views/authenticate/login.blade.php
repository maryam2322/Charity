@include("layouts.header")
<div class="main">
    <!-- Sing in  Form -->
    <section class="sign-in">
        <div class="containerr">
            <div class="signin-content">
                <div class="signin-image">
                    <figure><img src="/assets/images/signup /login.jpg" alt=""></figure>
                    <a href="/signup" class="signup-image-link">ساخت حساب کاربری</a>
                </div>

                <div class="signin-form" dir="rtl">
                    <h2 class="form-title">ورود</h2>
                    <form method="POST" action="/login/signin" class="register-form" id="login-form">
                        @csrf
                        @method('post')
                        <div class="form-group">
                            <label for="text"><i class="zmdi zmdi-code national"></i></label>
                            <input type="text" name="nationalCode" id="your_code" placeholder="کد ملی" required/>
                        </div>
                        <div class="form-group">
                            <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                            <input type="password" name="password" id="your_pass" placeholder="رمز" required/>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="remember-me" id="remember-me" class="agree-term"/>
                            <label for="remember-me" class="label-agree-term"><span><span></span></span>مرا به خاطر
                                بسپار.</label>
                        </div>
                        <div class="form-group form-button">
                            <input type="submit" name="signin" id="signin" class="form-submit"
                                   value="ورود به حساب کاربری"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- JS -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="js/main.js"></script>
@include("layouts.footer")
