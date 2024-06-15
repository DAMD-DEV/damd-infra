@extends('layouts.front')

@section('title')
DAMD IDログイン | エアロパーツ、ドレスアップのダムド | DAMD Inc.
@endsection

@section('custom-head')

@endsection

@section('main')
<div id="register">
    <h2><img src="{{ asset('images/damd-logo.png') }}" alt="DAMD ID"></h2>
    <h1>LOGIN</h1>
    {{ Form::open() }}
    <div class="form-group">
        {{ Form::email('email', old('email', null), ['class' => 'form-control mb-3', 'placeholder' => 'example@example.com']) }}
        {{ Form::password('password', ['class' => 'form-control mb-3', 'placeholder' => 'password']) }}
    </div>
    <div class="text-center">
        <div class="mb-3">
            {{ Form::submit('ログイン', ['class' => 'btn']) }}
        </div>
        <div class="small">
            <a href="{{ route('register') }}">新規登録＞＞</a>
        </div>
    </div>
    {{ Form::close() }}
</div>
@endsection