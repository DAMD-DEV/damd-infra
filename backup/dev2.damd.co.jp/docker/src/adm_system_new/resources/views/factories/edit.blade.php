@extends('layouts.app')

@section('main')
    <h1>商品カテゴリ</h1>
    <h2>編集</h2>
    {{ Form::open(['route' => ['factories.update', $factory->id], 'method' => 'put']) }}
    @include('factories/form')
    {{ Form::close() }}
@endsection
