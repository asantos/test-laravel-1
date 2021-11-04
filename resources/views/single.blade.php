@extends('layouts.default')
@section('body')

    <h1>{!! $post->title !!}</h1>
    <p>{!! $post->body !!}</p>
{{--    <p>Test abcde: {!! $test !!}</p>--}}

    <hr>

    <a href="{{ route('site.posts') }}">&laquo; Go back</a>

@stop
