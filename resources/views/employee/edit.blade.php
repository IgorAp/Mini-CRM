@extends('Layouts.app')
@section('content')
    <div class="container">
        <form action="/employees/{{$employee->id}}/update" method="post" enctype="multipart/form-data">
            <div class="form-group">
                {{csrf_field ()}}
                <input type="text" class="form-control" name="first_name" placeholder="First Name" value="{{$employee->first_name}}">
                <input type="text" class="form-control" name="last_name" placeholder="Last Name" value="{{$employee->last_name}}">
                <input type="email" class="form-control" name="email" placeholder="Email" value="{{$employee->email}}">
                <input type="phone" class="form-control" name="phone" placeholder="Phone" value="{{$employee->phone}}">
                <a class="btn btn-primary" href="/companies">Cancel</a>
                <input class="btn" type="submit" value="update"> 
            </div>
        </form>
    </div>
@endsection