@extends('Layouts.app')
@section('content')
    <div class="container">
        <form action="/companies/{{ $company->id }}/update" method="post" enctype="multipart/form-data">
            <div class="form-group">
                {{csrf_field ()}}
                <input class="form-control" type="text" placeholder="Name of company" name="name" value="{{ $company->name }}">
                <input class="form-control" type="email" placeholder="Email of company" name="email" value="{{ $company->email }}">
                <input class="form-control" type="text" placeholder="Website of company" name="website" value="{{ $company->website }}">
                <input class="btn" type="file" name="image">
                <a class="btn btn-primary" href="/companies">Cancel</a>
                <input class="btn" type="submit"> 
            </div>
        </form>
    </div>
@endsection