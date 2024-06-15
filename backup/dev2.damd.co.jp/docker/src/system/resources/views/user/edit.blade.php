@extends('layouts.front')

@section('title')
DAMD ID情報変更 | エアロパーツ、ドレスアップのダムド | DAMD Inc.
@endsection

@section('custom-head')

@endsection

@section('main')
<div id="register">
    <h2><img src="{{ asset('images/damd-logo.png') }}" alt="DAMD ID"></h2>
    <h1>EDIT</h1>
    {{ Form::open() }}
    <div class="form-group">
        <label for="">お名前</label>
        {{ Form::text('name', old('name', $profile->name), ['class' => 'form-control']) }}
    </div>
    <div class="form-group">
        <label for="">カナ</label>
        {{ Form::text('kana', old('kana', $profile->kana), ['class' => 'form-control']) }}
    </div>
    <div class="form-group">
        <label for="">電話番号</label>
        {{ Form::text('tel', old('tel', $profile->tel), ['class' => 'form-control']) }}
    </div>
    <div class="form-group">
        <label for="">郵便番号</label>
        {{ Form::text('zip', old('kana', $profile->kana), ['class' => 'form-control']) }}
    </div>
    <div class="form-group">
        <label for="">都道府県</label>
        {{ Form::select('pref', config('data.PREFECTURE'), old('pref', $profile->pref), ['class'=>'form-control', 'placeholder' => '選択してください']) }}
    </div>
    <div class="form-group">
        <label for="">市区町村</label>
        {{ Form::text('address1', old('address1', $profile->address1), ['class' => 'form-control']) }}
    </div>
    <div class="form-group">
        <label for="">番地、建物名</label>
        {{ Form::text('address2', old('address2', $profile->address2), ['class' => 'form-control']) }}
    </div>
    <div class="form-group">
        <label for="">メルマガ登録</label>
        <div>
            {{ Form::checkbox('newsletter', 1, old('newsletter', $profile->newsletter)) }}&nbsp;希望する
        </div>
    </div>
    <div class="text-center">
        <div class="mb-3">
            {{ Form::submit('登録する', ['class' => 'btn']) }}
        </div>
        <div class="small">
            <a href="{{ route('profile') }}">＜＜前のページへ戻る</a>
        </div>
    </div>
    {{ Form::close() }}
</div>
@endsection