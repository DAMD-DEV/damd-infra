@extends('layouts.admin')

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
    {{ Form::open(['route' => 'admin.items.store']) }}
    @include('admin.items.form')
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