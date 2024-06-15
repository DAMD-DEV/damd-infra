@extends('layouts.admin')

@section('main')
    <h1>仕様/グレード</h1>
    <h2>編集</h2>
    {{ Form::open(['route' => ['admin.specs.update', $spec->id], 'method' => 'put']) }}
    @include('admin.specs.form')
    {{ Form::close() }}
@endsection
