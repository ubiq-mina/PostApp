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

                    <div class="infinite-scroll">
                        @if (isset($posts))
                            @foreach($posts as $post)
                                <div class="card card-body mb-3">
                                    <h4 class="card-title">
                                        {{--  What<br>  --}}
                                        <a href=#>Hello World</a><br/>
                                        <small>
                                            {{--  {{ Carbon\Carbon::parse($post->created_at)->format('F d, Y') }}  --}}
                                            {{ $post->created_at->diffForHumans() }}
                                        </small>
                                    </h4>
                                    
                                    <p class="card-text">
                                        {{ $post->content }}
                                    </p>
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
