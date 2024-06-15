@extends('layouts.app')

@section('main')
    <h1>メーカー</h1>
    <h2>編集</h2>
    {{ Form::open(['route' => ['makers.update', $maker->id], 'method' => 'put']) }}
    @include('makers/form')
    {{ Form::close() }}
@endsection
