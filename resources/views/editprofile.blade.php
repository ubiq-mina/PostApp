@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">

        <div class="col-md-2">
        </div>

        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Profile</div>

                <div class="panel-body">

                    <p>
                        Hello, {{ Auth::user()->username }}!
                    </p>

                    <div class="card mb-3">

                            <div class="card-header">
                                Personal Information
                            </div>
    
                            <div class="card-body">
                                <p class="card-text">

                                    {!! Auth::user()->profile !!}
                    
                                    {!! Form::model(Auth::user()->profile, array('url' => '/intro', 'id' => "personal-info")) !!}
        
                                    {!! Form::label('birthdate', 'Birthdate'); !!}
                                    {!! Form::date('birthdate', null, ['class' => 'form-control mb-5']); !!}
        
                                    {!! Form::label('country', 'Country'); !!}
                                    {!! Form::select('country', [null => 'Select a country', 'Philippines' => 'Philippines'], null, ['class' => 'form-control mb-5']); !!}
        
                                    {!! Form::label('mobile', 'Mobile number') !!}
                                    {!! Form::text('mobile', null, ['class' => 'form-control mb-5']) !!}
        
                                    {!! Form::label('sex', 'Gender') !!} <br>
        
                                    {!! Form::label('gender-male', 'Male', ['class' => 'ml-3']); !!}
                                    {!! Form::radio('sex', 'Male', false, ['id' => 'gender-male']); !!}
        
                                    {!! Form::label('gender-female', 'Female'); !!}
                                    {!! Form::radio('sex', 'Female', false, ['id' => 'gender-female', 'class' => 'mb-5']); !!} <br>
        
                                    {{--  {!! Form::submit('Next', ['id' => 'personal-info', 'class' => 'btn btn-default']); !!}  --}}
                                    <input type="submit" name="personal-info" class="btn btn-default" value="Save">
        
                                    {!! Form::close() !!}
    
                                </p>
                            </div>
                        </div>

                </div>
            </div>
        </div>
        
        <div class="col-md-2">
            </div>
    </div>
</div>

@endsection