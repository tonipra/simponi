@extends('layouts.master')

@section('content')

    <h1>Create New User</h1>
    <hr/>

    {!! Form::open(['url' => 'user/users', 'class' => 'form-horizontal']) !!}

                <div class="form-group {{ $errors->has('Emp_ID') ? 'has-error' : ''}}">
                {!! Form::label('Emp_ID', 'Emp Id: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('Emp_ID', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('Emp_ID', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('Emp_Pass') ? 'has-error' : ''}}">
                {!! Form::label('Emp_Pass', 'Emp Pass: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('Emp_Pass', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('Emp_Pass', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('Emp_name') ? 'has-error' : ''}}">
                {!! Form::label('Emp_name', 'Emp Name: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('Emp_name', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('Emp_name', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('Emp_Email') ? 'has-error' : ''}}">
                {!! Form::label('Emp_Email', 'Emp Email: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('Emp_Email', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('Emp_Email', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('Admin_ID') ? 'has-error' : ''}}">
                {!! Form::label('Admin_ID', 'Admin Id: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('Admin_ID', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('Admin_ID', '<p class="help-block">:message</p>') !!}
                </div>
            </div>


    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Create', ['class' => 'btn btn-primary form-control']) !!}
        </div>
    </div>
    {!! Form::close() !!}

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

@endsection