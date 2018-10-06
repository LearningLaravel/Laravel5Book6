@extends('master')
@section('title', 'Blog')
@section('content')

    <div class="container col-md-10 col-md-offset-2">

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        @if ($posts->isEmpty())
            <p> There is no post.</p>
        @else
            @foreach ($posts as $post)
                <div class="card mt-4">
                    <div class="card-header"><a href="{{ action('BlogController@show', $post->slug) }}">{{ $post->title }}</a></div>
                    <div class="card-body">
                        {{ mb_substr($post->content,0,500) }}
                    </div>
                </div>
            @endforeach
        @endif
    </div>

@endsection