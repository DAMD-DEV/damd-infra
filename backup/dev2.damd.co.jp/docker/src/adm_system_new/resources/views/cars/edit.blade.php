@extends('layouts.app')

@section('main')
    <h1>車種</h1>
    <h2>編集</h2>
    {{ Form::open(['route' => ['cars.update', $car->id], 'method' => 'put']) }}
    @include('cars/form')
    {{ Form::close() }}
@endsection
