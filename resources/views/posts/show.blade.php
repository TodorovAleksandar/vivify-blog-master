@extends('layouts.master')

@section('title')
    {{ $post->title }}
@endsection

@section('content')
    <h1 class="blog-post-title">{{ $post->title }}</h1>
    <p>{{ $post->body }}</p>
    @if(count($post->comments))
        <hr/>
        <h4>Comments:</h4>
        <ul class="list-unstyled">
            @foreach($post->comments as $comment)
                <li>
                    <p>
                        <strong>Author:</strong> {{ $comment->author }}
                    </p>
                    <p>
                        {{ $comment->text }}
                    </p>
                </li>
            @endforeach
        </ul>
    @endif
    <h4>Post a comment</h4>
    <form method="POST" action="{{ route('comments-post', ['post_id' => $post->id]) }}">

        {{ csrf_field() }}

        <div class="form-group">
            <label for="author">Your name:</label>
            <input type="text" class="form-control" id="author" name="author"/>
            @include('posts.partials.error-message', ['fieldTitle' => 'author'])
        </div>

        <div class="form-group">
            <label for="text">Comment:</label>
            <textarea class="form-control" id="text" name="text"></textarea>
            @include('posts.partials.error-message', ['fieldTitle' => 'text'])
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

    </form>
@endsection