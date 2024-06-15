@extends('layouts.app')

@section('main')
    <h1>車種</h1>
    <h2>新規追加</h2>
    {{ Form::open(['route' => 'cars.store']) }}
    @include('cars/form')
    {{ Form::close() }}
@endsection
