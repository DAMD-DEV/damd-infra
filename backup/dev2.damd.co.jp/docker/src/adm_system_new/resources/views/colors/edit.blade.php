@extends('layouts.app')

@section('main')
    <h1>商品カテゴリ</h1>
    <h2>編集</h2>
    {{ Form::open(['route' => ['colors.update', $color->id], 'method' => 'put']) }}
    @include('colors/form')
    {{ Form::close() }}
@endsection
