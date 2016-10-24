@extends('layout')

{{-- css読み込みフォーム --}}
@section('css')
<link rel="stylesheet" href="{{ asset('css/bootstrap/bootstrap.social.css') }}">
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
@endsection

@section('content')
<div class="container main">
    <h2>Login</h2>
    <p>TwitterおよびGoogleアカウントでのログインが有効です。</p>

    <div class="col-md-3">
        <a class="btn btn-block btn-social btn-twitter"  href="/auth/twitter">
            <span class="fa fa-twitter"></span> Login with Twitter
        </a>
        <a class="btn btn-block btn-social btn-google"  href="/auth/google">
            <span class="fa fa-google-plus"></span> Login with Google
        </a>
    </div>
</div>
@endsection