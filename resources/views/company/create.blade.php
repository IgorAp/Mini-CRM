@extends('Layouts.app')
@section('content')
    <div class="container">
        @include('errors')
        <form action="/companies/store" method="post" enctype="multipart/form-data">
            <div class="form-group">
                {{csrf_field ()}}
                <input class="form-control" type="text" placeholder="Name of company" name="name">
                <input class="form-control" type="email" placeholder="Email of company" name="email">
                <input class="form-control" type="text" placeholder="Website of company" name="website">
                <input class="btn" type="file" name="image">
                <a class="btn btn-primary" href="/companies">Cancel</a>
                <input class="btn" type="submit" value="Create"> 
            </div>
        </form>
    </div>
@endsection