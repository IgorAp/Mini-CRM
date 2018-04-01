@extends('Layouts.app')
@section('content')
    <div class="container">
        <h2>List of Companies</h2>
        <div>
            @foreach($companies as $company)
            <img src="/companies/{{$company->id}}/logo" alt="">
            <h3>Company: {{ $company->name }}</h3>
            @endforeach
        </div>
    </div>
@endsection