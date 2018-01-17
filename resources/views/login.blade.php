@extends('layouts.app')

@section('title', 'Login')

{{--  @section('navigation')
    @parent
@endsection  --}}

@section('content')

    {!! Form::open(array('url' => 'home')) !!}
        {!! Form::label('email', 'Email'); !!}
        {!! Form::email('email'); !!}
        <br/>

        {!! Form::label('username', 'Username'); !!}
        {!! Form::text('username'); !!}
        <br/>

        {!! Form::label('password'); !!}
        {!! Form::password('password'); !!}
        <br/>

        {!! Form::submit('Submit'); !!}
    {!! Form::close() !!}

@endsection