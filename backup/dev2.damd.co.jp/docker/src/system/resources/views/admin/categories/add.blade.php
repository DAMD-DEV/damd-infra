@extends('layouts.admin')

@section('main')
    <h1>商品カテゴリ</h1>
    <h2>新規追加</h2>
    {{ Form::open(['route' => 'admin.categories.store']) }}
    @include('admin.categories.form')
    {{ Form::close() }}
@endsection
