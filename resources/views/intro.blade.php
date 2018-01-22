@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">

        <div class="col-md-2">
        </div>

        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">Create Profile</div>

                <div class="panel-body">

                    <div class="form-crumbs">
                        <ul class="nav nav-pills text-center">
                            <li class="nav-item form-crumb">
                                <a class="nav-link" href="#">
                                    1
                                </a>
                            </li>
                            <li class="nav-item form-crumb">
                                <a class="nav-link" href="#">
                                    2
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="card mb-3">

                        <div class="card-header">
                            Personal Information
                        </div>

                        <div class="card-body">
                            <p class="card-text">
                
                            {!! Form::open(array('url' => '/intro', 'id' => "personal-info")) !!}

                            {!! Form::label('birthdate', 'Birthdate'); !!}
                            {!! Form::date('birthdate', '', ['class' => 'form-control']); !!}

                            {!! Form::label('country', 'Country'); !!}
                            {!! Form::select('country', [null => 'Select a country', 'Philippines' => 'Philippines'], null, ['class' => 'form-control']); !!}

                            {!! Form::label('gender-male', 'Male'); !!}
                            {!! Form::radio('gender', 'Male', false, ['id' => 'gender-male']); !!}

                            {!! Form::label('gender-female', 'Female'); !!}
                            {!! Form::radio('gender', 'Female', false, ['id' => 'gender-female']); !!}

                            {{--  {!! Form::submit('Next', ['id' => 'personal-info', 'class' => 'btn btn-default']); !!}  --}}
                            <input type="submit" name="personal-info" class="btn btn-default" value="Next">

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