@extends('layouts.admin')

@section('main')
    <h1>メールテンプレート</h1>
    <h2>新規追加</h2>
    {{ Form::open(['route' => 'admin.mail_templates.store']) }}
    @include('mail_templates/form')
    {{ Form::close() }}
@endsection
