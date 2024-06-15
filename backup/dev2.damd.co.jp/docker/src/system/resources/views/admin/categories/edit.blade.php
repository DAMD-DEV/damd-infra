@extends('layouts.admin')

@section('main')
    <h1>商品カテゴリ</h1>
    <h2>編集</h2>
    {{ Form::open(['route' => ['admin.categories.update', $category->id], 'method' => 'put']) }}
    @include('admin.categories.form')
    {{ Form::close() }}
@endsection
