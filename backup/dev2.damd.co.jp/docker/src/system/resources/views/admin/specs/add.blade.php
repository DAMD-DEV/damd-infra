@extends('layouts.admin')

@section('main')
    <h1>仕様/グレード</h1>
    <h2>新規追加</h2>
    {{ Form::open(['route' => 'admin.specs.store']) }}
    @include('admin.specs.form')
    {{ Form::close() }}
@endsection
