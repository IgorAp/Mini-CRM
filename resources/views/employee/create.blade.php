@extends('Layouts.app')
@section('content')
    <div class="container">
        @include('errors')
        <form action="/employees/{{$id}}/store" method="post" enctype="multipart/form-data">
            <div class="form-group">
                {{csrf_field ()}}
                <input type="text" class="form-control" name="first_name" placeholder="First Name">
                <input type="text" class="form-control" name="last_name" placeholder="Last Name">
                <input type="email" class="form-control" name="email" placeholder="Email">
                <input type="phone" class="form-control" name="phone" placeholder="Phone">
                <br>
                <a class="btn btn-primary" href="/companies">Cancel</a>
                <input class="btn" type="submit" value="create"> 
            </div>
        </form>
    </div>
@endsection