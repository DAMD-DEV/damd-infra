@extends('layouts.admin')

@section('main')
    <h1>商品カテゴリ</h1>
    <h2>編集</h2>
    {{ Form::open(['route' => ['admin.colors.update', $color->id], 'method' => 'put']) }}
    @include('admin.colors.form')
    {{ Form::close() }}
@endsection
