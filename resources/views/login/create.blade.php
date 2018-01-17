@extends("layouts.app")

@section("title", "Login")

{{--  @section("navigation")
    @parent
@endsection  --}}

@section("content")

    {!! Form::open(array("url" => "home")) !!}
    
    <div class="form-group">
        {!! Form::label('email', 'Email') !!}
        {!! Form::text('email', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('username', 'Username') !!}
        {!! Form::text('username', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('password', 'Password') !!}
        {!! Form::text('password', null, ['class' => 'form-control']) !!}
    </div>
    
    {!! Form::submit('Submit', ['class' => 'btn btn-info']) !!}

    {!! Form::close() !!}

@endsection