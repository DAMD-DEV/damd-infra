@extends('layouts.admin')

@section('main')
    <h1>メーカー</h1>
    <h2>新規追加</h2>
    {{ Form::open(['route' => 'admin.makers.store']) }}
    @include('admin.makers.form')
    {{ Form::close() }}
@endsection
