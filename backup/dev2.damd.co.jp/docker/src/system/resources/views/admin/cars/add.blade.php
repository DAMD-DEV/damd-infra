@extends('layouts.admin')

@section('main')
    <h1>車種</h1>
    <h2>新規追加</h2>
    {{ Form::open(['route' => 'admin.cars.store']) }}
    @include('admin.cars.form')
    {{ Form::close() }}
@endsection
