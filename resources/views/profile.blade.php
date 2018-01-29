@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">

        <div class="col-md-2">
        </div>

        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">{!! $user->username !!}'s Profile</div>

                <div class="panel-body">

                    <div class="card mb-3">

                        <div class="card-header">
                            Personal Information
                        </div>

                        <div class="card-body">
                            <p class="card-text">

                                <p>
                                    Birthdate: {!! $user->profile->birthdate !!}
                                </p>
                                
                                <p>
                                    Country: {!! $user->profile->country !!}
                                </p>
                                
                                <p>
                                    Gender: {!! $user->profile->sex ? 'Female' : 'Male' !!}
                                </p>

                            </p>
                        </div>
                    </div>

                    <div class="card mb-3">
                    
                        <div class="card-header">
                                Contact Information
                            </div>

                            <div class="card-body">
                                <p class="card-text">

                                    <p>
                                        E-mail address: {!! $user->email !!}
                                    </p>
                                    
                                    <p>
                                        Mobile number: {!! $user->profile->mobile !!}
                                    </p>

                                </p>
                            </div>
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