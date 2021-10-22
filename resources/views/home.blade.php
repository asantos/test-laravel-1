@extends('layouts.default')
@section('body')

    <?php
    const TYPE_POST = ['post', 'rate'];
    echo TYPE_POST[0];
    ?>

<form action="{{ action('App\Http\Controllers\HomeController@userRegister') }}" method="post" class="mb-3">
    <div class="mb-3">
        <label for="controlEmailHelp" class="form-label">Email address</label>
        <input type="email" class="form-control" id="controlEmailHelp" name="email" aria-describedby="controlEmailHelp">
        <div id="controlEmailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>

    <button type="submit" class="btn btn-primary">Register</button>

    <input type="hidden" name="_token" value="{{ csrf_token() }}">
</form>

<p><strong>Email</strong>: <a href="mailto:{{ $email }}">{{ $email }}</a></p>

<hr>
<p><strong>Coupon:</strong> {{ $coupon ?? '' }}</p>

@stop
