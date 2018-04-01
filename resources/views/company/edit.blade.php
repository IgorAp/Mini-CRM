@extends('Layouts.app')
@section('content')
    <div class="container">
        <form action="/store" method="post" enctype="multipart/form-data">
            <div class="form-group">
                {{csrf_field ()}}
                <input class="form-control" type="text" placeholder="Name of company" name="name">
                <input class="form-control" type="email" placeholder="Email of company">
                <input class="form-control" type="phone">
                <input class="btn" type="file" name="image">
                <input class="btn" type="submit"> 
            </div>
        </form>
    </div>
@endsection