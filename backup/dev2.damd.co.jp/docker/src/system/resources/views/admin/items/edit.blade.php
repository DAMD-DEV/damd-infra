@extends('layouts.admin')

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
    {{ Form::open(['route' => ['admin.items.update', $item->id], 'method' => 'put']) }}
    @include('admin.items.form')
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

    $a_cars = @json($cars_search);
        $('[name=maker_id]').change(function(){
            $v = $(this).val();
            $target = $('[name=car_id]');

            $target.children('option').remove();

            $target.append(
                $('<option>')
                    .val(null)
                    .text(null)
            );

            $.each($a_cars, function(index, value){
                if(value['maker_id'] == $v){
                    $target.append(
                        $('<option>')
                            .val(value['id'])
                            .text(value['name'])
                    )
                }
            });
        }).change();
</script>
@endsection