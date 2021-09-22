@include("layouts.header")

<div class="page-heading text-center">

    <div class="container zoomIn animated">

        <h1 class="page-title">پرداخت های ماهانه من<span class="title-under"></span></h1>
        <p style="font-size: 24px " class="page-description"></p>

    </div>

</div>


<div class="container">
    <h1 style="color: #0f538a;text-align: right">گزارش پرداخت ماهیانه</h1>

    <table class="table table-hover margin=10dp" >
        <thead>
        <tr>
            <th>ماه</th>
            <th>حمایت در زمینه :</th>
            <th>مبلغ</th>
        </tr>
        </thead>


        <tbody>
        @foreach($payments as $payment)
            <tr>
                @if($payment->created_at->month == 1)
                    <td>دی</td>
                @endif
                @if($payment->created_at->month == 2)
                    <td>بهمن</td>
                @endif
                @if($payment->created_at->month == 3)
                    <td>اسفند</td>
                @endif
                @if($payment->created_at->month == 4)
                    <td>فروردین</td>
                @endif
                @if($payment->created_at->month == 5)
                    <td>اردیبهشت</td>
                @endif
                @if($payment->created_at->month == 6)
                    <td>خرداد</td>
                @endif
                @if($payment->created_at->month == 7)
                    <td>تیر</td>
                @endif
                @if($payment->created_at->month == 8)
                    <td>مرداد</td>
                @endif
                @if($payment->created_at->month == 9)
                    <td>شهریور</td>
                @endif
                @if($payment->created_at->month == 10)
                    <td>مهر</td>
                @endif
                @if($payment->created_at->month == 11)
                    <td>آبان</td>
                @endif
                @if($payment->created_at->month == 12)
                    <td>آذر</td>
                @endif
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
