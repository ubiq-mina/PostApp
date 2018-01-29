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

                    {{--  <div class="form-crumbs">
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
                    </div>  --}}
                    <nav class="breadcrumb form-crumbs justify-content-center">
                        <a class="breadcrumb-item form-crumb" href="#">1</a>
                        <a class="breadcrumb-item form-crumb" href="#">2</a>
                        <a class="breadcrumb-item form-crumb" href="#">3</a>
                    </nav>

                    <div class="card mb-3">

                        <div class="card-header">
                            Personal Information
                        </div>

                        <div class="card-body">
                            <p class="card-text">
                
                            {!! Form::open(array('url' => '/intro', 'id' => "personal-info")) !!}

                            {!! Form::label('birthdate', 'Birthdate'); !!}
                            {!! Form::date('birthdate', '', ['class' => 'form-control mb-5']); !!}

                            {!! Form::label('country', 'Country'); !!}
                            {!! Form::select('country', [null => 'Select a country', 'Philippines' => 'Philippines'], null, ['class' => 'form-control mb-5']); !!}

                            {!! Form::label('mobile-number', 'Mobile number') !!}
                            {!! Form::text('mobile-number', '', ['class' => 'form-control mb-5']) !!}

                            {!! Form::label('gender', 'Gender') !!} <br>

                            {!! Form::label('gender-male', 'Male', ['class' => 'ml-3']); !!}
                            {!! Form::radio('gender', 'Male', false, ['id' => 'gender-male']); !!}

                            {!! Form::label('gender-female', 'Female'); !!}
                            {!! Form::radio('gender', 'Female', false, ['id' => 'gender-female', 'class' => 'mb-5']); !!} <br>

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