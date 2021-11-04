@extends('layouts.default')
@section('body')

    <h2>Posts list</h2>
    <ul>
        @foreach($posts as $post)
            <li>
                <a href="{{ route('site.posts.single', ['post_id' => $post->id]) }}">
                    {{ $post->title }}
                </a>
            </li>
        @endforeach
    </ul>

    <h2>Recent posts</h2>
    <ul>
        @foreach($recent_posts as $chunk)
            @foreach($chunk as $post_id => $post_title)
                <li>
                    <a href="{{ route('site.posts.single', [$post_id]) }}">{{ $post_title }}</a>
                </li>
            @endforeach
        @endforeach
    </ul>

@stop
