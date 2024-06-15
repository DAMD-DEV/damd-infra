@extends('layouts.admin')

@section('main')
    <h1>メーカー</h1>
    <h2>編集</h2>
    {{ Form::open(['route' => ['admin.mail_templates.update', $mail_template->id], 'method' => 'put']) }}
    @include('mail_templates/form')
    {{ Form::close() }}
@endsection
