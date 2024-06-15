@extends('layouts.admin')

@section('main')
    <h1>メーカー</h1>
    <h2>編集</h2>
    {{ Form::open(['route' => ['admin.makers.update', $maker->id], 'method' => 'put']) }}
    @include('admin.makers.form')
    {{ Form::close() }}
@endsection
