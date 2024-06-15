@extends('layouts.app')

@section('custom-head')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
@endsection

@section('main')
    <h1>商品</h1>
    <h2>編集</h2>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {{ Form::open(['route' => ['items.update', $item->id], 'method' => 'put']) }}
    @include('items/form')
    {{ Form::close() }}
@endsection

@section('custom-scripts')
<script>
    $('select[name="composition[]"]').select2({
        multiple: true,
        placeholder: "検索してください",
        width: '50%',
    });
    @php($composition_list = explode(',', $item->composition))
    $composition = @json($composition_list);
    $('select[name="composition[]"]').val($composition).trigger('change');

    $('select[name="colors[]"]').select2({
        multiple: true,
        placeholder: "検索してください",
        width: '50%',
    });
    @php($colors_list = explode(',', $item->colors))
    $colors = @json($colors_list);
    $('select[name="colors[]"]').val($colors).trigger('change');
</script>
@endsection