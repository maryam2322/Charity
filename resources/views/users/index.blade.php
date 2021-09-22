@extends('layouts.main')

@section('content')
    <div class="page-heading text-center">

        <div class="container zoomIn animated">

            <h1 class="page-title">کاربران<span class="title-under"></span></h1>

        </div>

    </div>

   <div class="row">
       <div class="col-md-12 p-4">
           <table class="table">
               <thead>
               <tr>
                   <th scope="col">#</th>
                   <th scope="col">name</th>
                   <th scope="col">lastName</th>
                   <th scope="col">email</th>
                   <th scope="col">phone</th>
                   <th scope="col">role</th>
                   <th scope="col">edit</th>
                   <th scope="col">delete</th>
               </tr>
               </thead>
            @foreach($user as $users)
                <tr>
                <th scope="row">{{$users->id}}</th>
                <td>{{$users->name}}</td>
                   <td>{{$users->lastname}}</td>
                   <td>{{$users->email}}</td>
                   <td>{{$users->phone}}</td>
                    <td>{{$users->role->title}}</td>

                    <td>
                        <a href="/users/{{$users->id}}/edit" class="btn btn-warning">edit</a>
                    </td>
                    <td>
                        <form action="/users/{{$users->id}}" method="post">
                            @csrf
                            @method('DELETE')
                            <div>
                                <input type="submit" class="btn btn-danger" value="delete">
                            </div>
                        </form>
                    </td>
                </tr>
               @endforeach
           </table>
       </div>
   </div>


@endsection
