@extends('layouts.main')

@section('content')
    <div class="page-heading text-center">

        <div class="container zoomIn animated">

            <h1 class="page-title">ویرایش کاربران<span class="title-under"></span></h1>

        </div>

    </div>

    <div class="main-container fadeIn animated">

        <div class="container">

            <div class="row">

                <div class="col-md-7 col-sm-12 col-form">
                        <form action="/users/{{$user->id}}"  method="post">
                            @csrf
                            @method('PATCH')
                            <div class="form-group">
                                <label for="tex">name</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{$user->name}}">
                            </div>
                            <div class="form-group">
                                <label for="text">lastname</label>
                                <input type="text" class="form-control" id="lastname" name="lastname" value="{{$user->lastname}}">
                            </div>
                            <div class="form-group">
                                <label for="email">email</label>
                                <input type="email" class="form-control" id="email" name="email" value="{{$user->email}}">
                                <div class="form-group">
                            <div class="form-group">
                                <label for="phone">phone</label>
                                <input type="text" class="form-control" id="phone" name="phone" value="{{$user->phone}}">
                                <div class="form-group">
                                    <select name="role_id" id="role_id" class="form-control">
                                        @foreach($role as $roles)
                                            <option
                                                @if($user->role_id == $roles->id)
                                                selected
                                                @endif
                                                value="{{$roles->id}}">{{$roles->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group alerts">

                                    <div class="alert alert-success" role="alert">

                                    </div>

                                    <div class="alert alert-danger" role="alert">

                                    </div>

                                </div>

                                <div><button class="btn" type="submit">submit</button></div>

                                <div class="clearfix"></div>

                            </div>
                                </div>
                            </div>
                        </form >


                </div>


                <div class="col-md-4 col-md-offset-1 col-contact">

                    <h2 class="title-style-2"> SADAKA CONTACTS <span class="title-under"></span></h2>
                    <p>
                        <b>Sadaka</b> ipsum dolor sit amet, consectetur adipiscing elit. Ut at eros rutrum turpis viverra elementum semper quis ex. Donec lorem nulla .
                    </p>

                    <div class="contact-items">

                        <ul class="list-unstyled contact-items-list">
                            <li class="contact-item"> <span class="contact-icon"> <i class="fa fa-map-marker"></i></span> 135 Hay el nahda, Rabat, Morocco</li>
                            <li class="contact-item"> <span class="contact-icon"> <i class="fa fa-phone"></i></span> 00 210 25 55  55 11</li>

                            <li class="contact-item"> <span class="contact-icon"> <i class="fa fa-envelope"></i></span> contact@sadaka.org</li>
                        </ul>
                    </div>



                </div>

            </div> <!-- /.row -->


        </div>



    </div>

    <div id="contact-map" class="contact-map">

    </div>

@endsection

