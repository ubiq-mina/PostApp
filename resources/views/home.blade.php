@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">Newsfeed</div>

                <div class="panel-body">

                    @foreach($posts as $post)
                        <div class="card card-body mb-3">
                            <h4 class="card-title">
                                {{--  What<br>  --}}
                                <a href=#>Hello World</a>
                            </h4>
                            
                            <p class="card-text">
                                {{ $post->content }}
                            </p>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
