@extends('layouts.default')
@section('body')

post list:

    <ul>
        <li><a href="{{ route('site.posts.single', [
            'post_id' => 789
         ]) }}">Post 789</a></li>
    </ul>

@stop
