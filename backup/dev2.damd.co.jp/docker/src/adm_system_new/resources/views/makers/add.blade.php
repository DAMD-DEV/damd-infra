@extends('layouts.app')

@section('main')
    <h1>メーカー</h1>
    <h2>新規追加</h2>
    {{ Form::open(['route' => 'makers.store']) }}
    @include('makers/form')
    {{ Form::close() }}
@endsection
