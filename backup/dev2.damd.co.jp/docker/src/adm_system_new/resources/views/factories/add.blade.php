@extends('layouts.app')

@section('main')
    <h1>塗装色</h1>
    <h2>新規追加</h2>
    {{ Form::open(['route' => 'factories.store']) }}
    @include('factories/form')
    {{ Form::close() }}
@endsection
