@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

        <div class="scroll-to-top"></div>

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

                                    <div class="card-footer pb-4">
                                        
                                        @if (count($post->comments) > 0)
                                            @foreach($post->comments as $comment)
                                                <div class="card mb-3 wat" id="post-{{ $post->id }}">
                                                    <div class="card-body">
                                                        <h5 class="card-title">
                                                            <a href=#>{{ $comment->user->username }}</a><br/>
                                                            <small>
                                                                {{ $comment->created_at->diffForHumans() }}
                                                            </small>
                                                        </h5>
                                                        
                                                        <p class="card-text">
                                                            {{ $comment->content }}
                                                        </p>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endif
                                        
                                        {!! Form::open(array('url' => '/comment', 'class' => 'form-inline')) !!}

                                        <row class='container-fluid'>
                                            <div class='col-md-11'>
                                                {!! Form::label('username', 'Username', ['class' => 'sr-only']); !!}
                                                {!! Form::text('comment', '', ['class' => 'form-control', 'style' => 'width: 100%;']); !!}
                                                {!! Form::hidden('post', $post->id); !!}
                                                {!! Form::hidden('user', Auth::id()); !!}
                                            </div>
                                            <div class='col-md-1'>
                                                {!! Form::submit('Send', ['class' => 'btn btn-default pull-right']); !!}
                                            </div>
                                        </row>

                                        {!! Form::close() !!}

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
