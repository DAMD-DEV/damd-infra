@extends('layouts.app')

@section('custom-head')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
@endsection

@section('main')
    <h1>商品</h1>
    <h2>新規追加</h2>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {{ Form::open(['route' => 'items.store']) }}
    @include('items/form')
    {{ Form::close() }}
@endsection

@section('custom-scripts')
<script>
    $('select[name="composition[]"]').select2({
        multiple: true,
        placeholder: "検索できます",
    });
    $('select[name="colors[]"]').select2({
        multiple: true,
        placeholder: "検索できます",
    });
</script>
@endsection