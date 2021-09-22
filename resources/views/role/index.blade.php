@extends('layouts.main')

@section('content')
    <div class="page-heading text-center">

        <div class="container zoomIn animated">

            <h1 class="page-title">دسترسی ها<span class="title-under"></span></h1>

        </div>

    </div>

    <div class="main-container fadeIn animated">

        <div class="container">

            <div class="row">

                <div class="col-md-7 col-sm-12 col-form">



                        <form action="/role/add"  method="post">
                            @csrf

                            <div class="form-group">
                                <label for="title">title</label>
                                <input type="text" class="form-control" id="title" name="title" placeholder="title">
                                <div class="form-row">
                                    @foreach($permissions as $permission)
                                        <label for="" class="pr-2">
                                            <input type="checkbox" name="permission[]" id="" value="{{$permission->id}}" >{{$permission->title}}
                                        </label>

                                    @endforeach
                                </div>
                            <div class="form-group alerts">

                                <div class="alert alert-success" role="alert">

                                </div>

                                <div class="alert alert-danger" role="alert">

                                </div>

                            </div>

                            <div><button class="btn" type="submit">submit</button></div>
                                <div class="row">
                                    <a href="/deleteRole" class="bg-danger align-bottom=right"  style="color: red " >حذف دسترسی ؟</a>
                                </div>

                            <div class="clearfix"></div>


                        </form >


                </div>
                @include('resources.error')

            </div> <!-- /.row -->


        </div>



    </div>

    <div id="contact-map" class="contact-map">

    </div>

@endsection
