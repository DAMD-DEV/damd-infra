@extends('layouts.app')

@section('main')
    <h1>塗装色</h1>
    <h2>新規追加</h2>
    {{ Form::open(['route' => 'colors.store']) }}
    @include('colors/form')
    {{ Form::close() }}
@endsection
