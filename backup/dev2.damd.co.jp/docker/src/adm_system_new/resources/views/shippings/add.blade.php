@extends('layouts.app')

@section('main')
    <h1>送料区分</h1>
    <h2>新規追加</h2>
    {{ Form::open(['route' => 'shippings.store']) }}
    @include('shippings/form')
    {{ Form::close() }}
@endsection

@section('custom-scripts')
<script>
    $(function(){
        $('.btn-copy').click(function(){
            $value = $('.prefecture1').val();
            $('input[name="sections[]"]').each(function(){
                $(this).val($value);
            });
        });
    });
</script>
@endsection