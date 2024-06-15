@extends('layouts.admin')

@section('main')
    <h1>塗装色</h1>
    <h2>新規追加</h2>
    {{ Form::open(['route' => 'admin.colors.store']) }}
    @include('admin.colors.form')
    {{ Form::close() }}
@endsection
