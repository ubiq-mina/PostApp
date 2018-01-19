@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

        @guest
            <div class="col-md-8 mx-auto">

        @else
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        Hello, {{ Auth::user()->username }}!

                    </div>
                </div>
            </div>
        
            <div class="col-md-8">
        @endguest

            <div class="panel panel-default">
                <div class="panel-heading">Newsfeed</div>
                <div class="panel-body">
                    <div class="infinite-scroll">
                        @if (isset($posts))
                            @foreach($posts as $post)
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <h4 class="card-title">
                                            <a href=#>{{ $post->user->username }}</a><br/>
                                            <small>
                                                {{ $post->created_at->diffForHumans() }}
                                            </small>
                                        </h4>
                                        
                                        <p class="card-text">
                                            {{ $post->content }}
                                        </p>
                                    </div>

                                    <div class="card-footer pb-5">
                                    </div>
                                </div>
                            @endforeach
                        @endif

                        <div class="text-center">{{ $posts->links() }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
