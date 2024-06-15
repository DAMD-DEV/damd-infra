@extends('layouts.admin')

@section('main')
    <h1>商品カテゴリ</h1>
    <h2>編集</h2>
    {{ Form::open(['route' => ['admin.factories.update', $factory->id], 'method' => 'put']) }}
    @include('admin.factories.form')
    {{ Form::close() }}
@endsection
