@extends('layouts.app')

@section('main')
    <h1>商品カテゴリ</h1>
    <h2>新規追加</h2>
    {{ Form::open(['route' => 'categories.store']) }}
    @include('categories/form')
    {{ Form::close() }}
@endsection
