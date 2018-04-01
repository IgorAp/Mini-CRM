@extends('Layouts.app')
@section('content')
    <div class="container">
        <form action="/companies/store" method="post" enctype="multipart/form-data">
            <div class="form-group">
                {{csrf_field ()}}
                <input class="form-control" type="text" placeholder="Name of company" name="name">
                <input class="form-control" type="email" placeholder="Email of company" name="email">
                <input class="form-control" type="text" placeholder="Website of company" name="website">
                <input class="btn" type="file" name="image">
                <input class="btn" type="submit"> 
            </div>
        </form>
    </div>
@endsection