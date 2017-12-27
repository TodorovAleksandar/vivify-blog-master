@extends('layouts.master')

@section('title')
    All posts
@endsection

@section('content')
    <a href="{{ route('create-post') }}" class="btn btn-primary">Create new post</a>

    <hr>

    <ul>
        @foreach($posts as $post)
            <h2 class="blog-post-title"><a href="{{ route('single-post', ['id' => $post->id]) }}">{{ $post->title }}</a></h2>
            <p>{{ $post->body }}</p>
        @endforeach
    </ul>
@endsection