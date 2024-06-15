@extends('layouts.app')

@section('main')
    <h1>仕様/グレード</h1>
    <h2>編集</h2>
    {{ Form::open(['route' => ['specs.update', $spec->id], 'method' => 'put']) }}
    @include('specs/form')
    {{ Form::close() }}
@endsection
