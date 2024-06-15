@extends('layouts.app')

@section('main')
    {{ Form::open(['url' => '/']) }}   
        <div>商品名フリーワード</div>
        {{ Form::text('s_freeword') }}
        <div>送料区分</div>
        {{ Form::select('s_item_class') }}
        <div>メーカー</div>
        {{ Form::select('s_item_maker') }}
        <div>車種名</div>
        {{ Form::select('') }}
        {{ Form::button('検索') }}
    {{ Form::close() }}
@endsection
