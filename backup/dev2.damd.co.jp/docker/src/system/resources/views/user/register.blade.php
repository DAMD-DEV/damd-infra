@extends('layouts.front')

@section('title')
DAMD ID登録 | エアロパーツ、ドレスアップのダムド | DAMD Inc.
@endsection

@section('custom-head')

@endsection

@section('main')
<div id="register">
    <h2><img src="{{ asset('images/damd-logo.png') }}" alt="DAMD ID"></h2>
    <h1>REGISTER</h1>
    {{ Form::open() }}
    <div class="form-group">
        {{ Form::email('email', old('email', null), ['class' => 'form-control mb-3', 'placeholder' => 'example@example.com']) }}
        {{ Form::password('password', ['class' => 'form-control mb-3', 'placeholder' => 'password']) }}
    </div>
    <div class="text-center">
        {{ Form::checkbox('', null, null, ['required' => 'required', 'class' => '']) }}
        <a href="" target="_blank">DAMD ID 利用規約</a>に同意する。
        <div class="mb-3">
            {{ Form::submit('登録する', ['class' => 'btn']) }}
        </div>
        <div class="small">
            <a href="">＜＜ログイン画面へ戻る</a>
        </div>
    </div>
    {{ Form::close() }}
</div>
@endsection