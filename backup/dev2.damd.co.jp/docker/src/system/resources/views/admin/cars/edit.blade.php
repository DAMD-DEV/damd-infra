@extends('layouts.admin')

@section('main')
    <h1>車種</h1>
    <h2>編集</h2>
    {{ Form::open(['route' => ['admin.cars.update', $car->id], 'method' => 'put']) }}
    @include('admin.cars.form')
    {{ Form::close() }}
@endsection
