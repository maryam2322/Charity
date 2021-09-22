@include("layouts.header")

<div class="page-heading text-center">

    <div class="container zoomIn animated">

        <h1 class="page-title">پرداخت های من در هر زمینه<span class="title-under"></span></h1>
        <p style="font-size: 24px " class="page-description"></p>

    </div>

</div>


<div class="container">
    <h1 style="color: #0f538a;text-align: right">گزارش پرداخت به تفکیک موضوع</h1>
    <table class="table table-hover margin=10dp">
        <thead>
        <tr>
            <th>تاریخ</th>
            <th>حمایت در زمینه :</th>
            <th>مبلغ</th>
        </tr>
        </thead>

        <tbody>
        <tr>
            <td>صدقه</td>
            <td>{{$sadaghe}} تومان</td>
        </tr>
        <tr>
            <td>خمس و زکات</td>
            <td>{{$khoms}} تومان</td>
        </tr>
        <tr>
            <td>تحصیل</td>
            <td>{{$zakat}} تومان</td>
        </tr>
        <tr>
            <td>آزادی زندانیان</td>
            <td>{{$fet}} تومان</td>
        </tr>
        <tr>
            <td>جهیزیه</td>
            <td>{{$jahizie}} تومان</td>
        </tr>
        <tr>
            <td>درمان</td>
            <td>{{$darman}} تومان</td>
        </tr>
        </tbody>


    </table>
</div>

<script src="vendor/jquery/jquery.min.js"></script>
<script src="js/main.js"></script>
@include("layouts.footer")
