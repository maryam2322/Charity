@extends('layouts.main')

@section('content')
    <div class="page-heading text-center">

        <div class="container zoomIn animated">

            <h1 class="page-title">ویرایش اطلاعات کاربری<span class="title-under"></span></h1>

        </div>

    </div>

    <div class="main-container fadeIn animated">

        <div class="container">

            <div class="row">

                <div class="col-md-7 col-sm-12 col-form">

                    <form action="/editProfile/{{$user->id}}"  method="post">
                        @csrf
                        @method('PATCH')
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name">نام</label>
                                <input type="text" name="name" class="form-control" value="{{$user->name}}" >
                            </div>
                            <div class="form-group col-md-6">
                                <label for="lastname">نام خانوادگی</label>
                                <input type="text" name="lastname" class="form-control" value="{{$user->lastname}}" >
                            </div>

                        </div>
                        <div class="form-group">
                            <label for="email">ایمیل</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{$user->lastname}}">
                        </div>
                        <div class="form-group">
                            <label for="phone">شماره تلفن</label>
                            <input type="text" class="form-control" id="phone" value="{{$user->phone}}" name="phone">
                        </div>
                        <div class="form-group">
                            <label for="password">رمز عبور</label>
                            <input type="password" class="form-control" id="password" placeholder="رمز جدید خود را وارد کنید." name="password">
                        </div>

                        <div class="form-group alerts">

                            <div class="alert alert-success" role="alert">

                            </div>

                            <div class="alert alert-danger" role="alert">

                            </div>

                        </div>

                        <div><button class="btn" type="submit">ارسال</button></div>

                        <div class="clearfix"></div>


                    </form >


                </div>

                <div class="col-md-4 col-md-offset-1 col-contact">

                    <h2 class="text-right"> راه ارتباطی ما <span class="title-under"></span></h2>
                    <p class="text-right">
                        برای اطلاع بیشتر از فعالیت های خیریه ، از طریق را های ارتباطی زیر با ما در تماس باشید
                    </p>

                    <div class="contact-items">

                        <ul class="list-unstyled contact-items-list">
                            <li class="contact-item"> <span class="contact-icon"> <i class="fa fa-map-marker"></i></span>niavaran,Tehran province</li>
                            <li class="contact-item"> <span class="contact-icon"> <i class="fa fa-phone"></i></span> 021-22180</li>

                            <li class="contact-item"> <span class="contact-icon"> <i class="fa fa-envelope"></i></span>charity@gmail.com</li>
                        </ul>
                    </div>



                </div>

            </div> <!-- /.row -->


        </div>



    </div>

    <div id="contact-map" class="contact-map">

    </div>

@endsection
