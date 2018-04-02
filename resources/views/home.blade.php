@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <h2>Welcome to Mini CRM</h2>
                    <a class="btn btn-primary"  href="employees">Employees</a>
                    <a  class="btn btn-primary" href="/companies">Companies</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
