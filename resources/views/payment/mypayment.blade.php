@include("layouts.header")
<div class="page-heading text-center">

    <div class="container zoomIn animated">

        <h1 class="page-title">پرداخت های من<span class="title-under"></span></h1>
        <p style="font-size: 24px " class="page-description"></p>

    </div>

</div>

<div class="container">
    <h2 class="text-right"> نیکوکار گرامی {{$user->name}}</h2>
    <p style="font-size: 20px;color: #0f538a" class="text-right">نیکوکار گرامی شما تاکنون مبلغ {{$total}}به خیریه ما کمک
        نموده اید. </p>

    <div>
        <table class="table table-hover margin=10dp">
            <thead>
            <tr>
                <th>تاریخ</th>
                <th>{{$p}}</th>
                <th>{{$pri}}</th>
            </tr>
            </thead>

            @foreach($payment as $payments)
                <tbody>
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$payments->PayFor}}</td>
                    <td>{{$payments->price}}</td>
                </tr>
                </tbody>
            @endforeach

        </table>
    </div>

</div>
<!-- JS -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="js/main.js"></script>
@include("layouts.footer")


