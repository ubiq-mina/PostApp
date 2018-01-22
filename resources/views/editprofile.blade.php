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
                        <div class="card-body">
                            <p class="card-text"></p>
                            {!! $info = ""; !!}
                            
                            {!! Form::model($info, array('url' => '/editprofile')) !!}

                            {{--  <row>  --}}
                                {{--  <div class='col-md-11 form-group'>  --}}
                                    {!! Form::label('username', 'Username'); !!}
                                    {!! Form::text('username', '', ['class' => 'form-control']); !!}
                                {{--  </div>  --}}
                                {{--  <div class='col-md-1'>  --}}
                                    {!! Form::submit('Send', ['class' => 'btn btn-default']); !!}
                                {{--  </div>  --}}
                            {{--  </row>  --}}

                            {!! Form::close() !!}
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