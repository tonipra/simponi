@extends('layouts.master')

@section('content')

    <h1>User</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Emp ID</th><th>Emp Pass</th><th>Emp Name</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $user->id }}</td> <td> {{ $user->Emp_ID }} </td><td> {{ $user->Emp_Pass }} </td><td> {{ $user->Emp_name }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection