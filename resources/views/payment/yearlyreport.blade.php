@include("layouts.header")

<div class="page-heading text-center">

    <div class="container zoomIn animated">

        <h1 class="page-title">پرداخت سالانه من<span class="title-under"></span></h1>
        <p style="font-size: 24px " class="page-description"></p>

    </div>

</div>


<div class="container">
    <h1 style="color: #0f538a;text-align: right">گزارش پرداخت سالیانه</h1>

    <table class="table table-hover margin=10dp">
        <thead>
        <tr>
            <th>سال</th>
            <th>حمایت در زمینه :</th>
            <th>مبلغ</th>
        </tr>
        </thead>

        <tbody>
        @foreach($payments as $payment)
            <tr>
                <td>{{$payment->getyear($payment)}}</td>
                <td>{{$payment->PayFor}}</td>
                <td>{{$payment->price}} تومان</td>
            </tr>

        @endforeach
        </tbody>
    </table>
</div>

<script src="vendor/jquery/jquery.min.js"></script>
<script src="js/main.js"></script>
@include("layouts.footer")
