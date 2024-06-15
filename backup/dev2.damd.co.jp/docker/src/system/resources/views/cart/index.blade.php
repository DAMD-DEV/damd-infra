@extends('layouts.front')

@section('title')
カート | エアロパーツ、ドレスアップのダムド | DAMD Inc.
@endsection

@section('custom-head')
@vite(['resources/scss/cart.scss'])
@vite(['resources/css/style.css'])
@endsection

@section('main')
<h2>カート</h2>


@if($cart_data)
    @php($total = 0)
    <table id="table-cart">
        <thead>
            <tr>
                <th>商品名</th>
                <th></th>
                <th>見積価格(税込)</th>
                <th></th>
            </tr>
        </thead>
        @foreach($cart_data as $cart)
        @php($total += $cart['total'])
        <tbody>
            <tr>
                <td>{{ $cart_info[$loop->index]['name'] }} </td>
                <td></td>
                <td>{{ number_format($cart['total']) }}円</td>
                <td>
                    {{ Form::open(['method' => 'delete', 'route' => ['cart.destroy', $cart['item_id']]]) }}
                        <button type="submit" class="btn delete-btn">削除</button>
                    {{ Form::close() }}
                </td>
            </tr>
        </tbody>
        @endforeach
        <tfoot>
            <tr>
                <td>合計</td>
                <td></td>
                <td>{{ number_format($total) }}円</td>
                <td></td>
            </tr>
        </tfoot>
    </table>
@else 
    <div class="mb-3">カートは空です。</div>
@endif

<div class="button">
    <a href="{{ $return_url }}" class="btn">お買い物を続ける</a>
    @if($cart_data)
    <a href="{{ route('order.index') }}" class="btn">ご購入手続きへ</a>
    @endif
</div>

@endsection

@section('custom-scripts')
<script>
    $('.delete-btn').click(function(){
        if(!confirm('カートから削除してよろしいですか？')){
            return false;
        }
    });
</script>
@endsection