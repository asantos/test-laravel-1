@extends('layouts.default')
@section('body')

    <h1>{!! $post->title !!}</h1>
    <p>{!! $post->body !!}</p>

@stop
