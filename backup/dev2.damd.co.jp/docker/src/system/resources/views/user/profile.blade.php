@extends('layouts.front')

@section('title')
DAMD ID | エアロパーツ、ドレスアップのダムド | DAMD Inc.
@endsection

@section('custom-head')

@endsection

@section('main')
<div id="register">
    <h1>PROFILE</h1>
    <div class="text-center">
        {{$user->email}}でログインしています。
    </div>

    <div class="btn-wrapper mb-4 text-center">
        {{ Form::open(['route' => 'user.logout', 'class' => 'd-inline-block mr-2']) }}
            {{ Form::submit('ログアウト', ['class' => 'btn']) }}
        {{ Form::close() }}
        <a href="{{ route('profile.edit') }}" class="btn">ユーザー情報変更</a>
    </div>

    <table class="table">
        <tbody>
            <tr>
                <td>お名前</td>
                <td>{{ $profile->name }}</td>
            </tr>
            <tr>
                <td>カナ</td>
                <td>{{ $profile->kana }}</td>
            </tr>
            <tr>
                <td>電話番号</td>
                <td>{{ $profile->tel }}</td>
            </tr>
            <tr>
                <td>住所</td>
                <td>
                    @if($profile->zip)
                        {{ $profile->zip }}<br>
                    @endif
                    @if($profile->address1)
                        {{ $profile->address1 }}<br>
                    @endif
                    {{ $profile->address2 }}
                </td>
            </tr>
            <tr>
                <td>メルマガ登録</td>
                <td>{{ config('data.NEWSLETTER')[$profile->newsletter] }}</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection