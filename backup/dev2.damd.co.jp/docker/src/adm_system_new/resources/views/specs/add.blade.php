@extends('layouts.app')

@section('main')
    <h1>仕様/グレード</h1>
    <h2>新規追加</h2>
    {{ Form::open(['route' => 'specs.store']) }}
    @include('specs/form')
    {{ Form::close() }}
@endsection
