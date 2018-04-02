@extends('Layouts.app')
@section('content')
    <div class="container">
        <h2>Choose employee's company</h2>
        <div>
            <table class="table table-responsive">
                <thead>
                    <tr>
                        <th>Logo</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Website</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($companies as $company)
                    <tr>
                        <td><img width='100px' src="/companies/{{$company->id}}/logo" alt=""></td>
                        <td>{{$company->name}}</td>
                        <td>{{$company->email}}</td>
                        <td>{{$company->website}}</td>
                        <td>
                            <a class="btn btn-danger" href="/employees/{{$company->id}}/create">Select</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        {!! $companies->links() !!}
        <a  class="btn btn-primary" href="/employees">Cancel</a>
    </div>
@endsection