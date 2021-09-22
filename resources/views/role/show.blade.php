<html>
<body>
    <div class="col-md-6" >

        <h2 > roles</h2>
        @foreach($roles as $role)
        <p class="row">{{$role->title}}</p>
        @endforeach

    </div>


</body>
</html>

