@extends('layouts.app')

@section('main')
    <h1>商品カテゴリ</h1>
    <h2>編集</h2>
    {{ Form::open(['route' => ['categories.update', $category->id], 'method' => 'put']) }}
    @include('categories/form')
    {{ Form::close() }}
@endsection
