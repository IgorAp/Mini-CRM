@extends('Layouts.app')
@section('content')
    <div class="container">
        <h2>List of employees</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Firt Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Company</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($employees as $employee)
                    <tr>
                        <td>{{ $employee->first_name }}</td>
                        <td>{{ $employee->last_name }}</td>
                        <td>{{ $employee->email }}</td>
                        <td>{{ $employee->phone }}</td>
                        <td>{{ $employee->company }}</td>
                        <td>
                            <a class="btn btn-danger" href="/employees/{{ $employee->id }}/destroy">Delete</a>
                            <a class="btn btn-dark" href="/employees/{{ $employee->id }}/edit">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {!! $employees->links() !!}
        <a class="btn btn-primary" href="/employees/select">Register New</a>
    </div>
@endsection