@extends('layouts.main')
@section('content')
<div class="page-heading text-center">

    <div class="container zoomIn animated">

        <h1 class="page-title">تصاویر خیریه <span class="title-under"></span></h1>
        <p  style="font-size: 24px " class="page-description">
            هدف بهبود زندگی کودکان است
        </p>

    </div>

</div>

<div class="main-container">

    <div class="container gallery fadeIn animated">

        <div class="row">
            @foreach($gallery as $galleries)

            <a href="{{$galleries->image}}" class="col-md-3 col-sm-4 gallery-item lightbox">

                <img src="{{$galleries->image}}" alt="">

                <span class="on-hover">
                    <span class="hover-caption">{{$galleries->imageCap}}</span>
                </span>

            </a> <!-- /.gallery-item -->

            @endforeach
        </div>

    </div>

</div> <!-- /.main-container  -->



@endsection
