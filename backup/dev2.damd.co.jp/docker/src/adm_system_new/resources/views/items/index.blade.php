@extends('layouts.app')

@section('main')
    <h1>商品</h1>
    <div class="clearfix mb-4">
        <a href="{{ route('items.create') }}" class="btn btn-primary float-end">追加</a>
    </div>
    <div class="card search mb-4">
        <div class="card-header">
          検索
        </div>
        <div class="p-3">
            {{ Form::open(['route' => 'items.index', 'method'=>'get']) }}
                <div class="row">
                    <div class="col-auto">
                        <label class="col-form-label">商品名</label>
                        {{ Form::text('name', $request->name??null) }}
                    </div>
                    <div class="col-auto">
                        <label class="col-form-label">メーカー</label>
                        {{ Form::select('maker', $makers_list, $request->maker??null, ['placeholder' => '']) }}
                    </div>
                    <div class="col-auto">
                        <label class="col-form-label">車種</label>
                        {{ Form::select('car', $cars_list, $request->car??null, ['placeholder' => '']) }}
                    </div>
                </div>
                {{ Form::submit('検索', ['class' => 'btn btn-primary mt-3']) }}
            {{ Form::close() }}
        </div>
      </div>
    <div class="search">
        
    </div>
    <div>
        <h2>商品一覧</h2>
        {{ $items->links() }}
        <div class="main-list list-group">
            @foreach($items as $item)
                <div href="" class="list-group-item" data-bs-toggle="modal" data-bs-target="#testModal" data-item-id="{{ $item->id }}" data-name="{{ $item->name }}" data-shipping-id="{{ $item->shipping_id }}" data-maker-id="{{ $item->maker_id }}" data-car-id="{{ $item->car_id }}" data-code="{{ $item->code }}" data-spec-id="{{ $item->spec_id }}" data-category-id="{{ $item->category_id }}" data-year-from="{{ $item->year_from }}" data-year-to="{{ $item->year_to }}" data-applied="{{ $item->applied }}" data-price="{{ $item->price }}" data-invoice-price="{{ $item->invoice_price }}" data-cost="{{ $item->cost }}" data-m-cost="{{ $item->m_cost }}" data-paint-cost="{{ $item->paint_cost }}" data-no-paint="{{ $item->no_paint }}" data-paint-only="{{ $item->paint_only }}" data-no-mount="{{ $item->no_mount }}" data-no-damd="{{ $item->no_damd }}" data-no-home="{{ $item->no_home }}" data-no-stop="{{ $item->no_stop }}" data-sender="{{ $item->sender }}" data-loan="{{ $item->loan }}" data-factory-id={{ $item->factory_id }} data-display="{{ $item->display }}">
                    {{ $item->name }}<span class="d-inline-block float-end">{{ $item->updated_at }}</span>
				</div>
            @endforeach
        </div>
        {{ $items->links() }}
    </div>

    <div class="modal" id="testModal" tabindex="-1">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Modal title</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<table class="table">
						<tbody>
							<tr>
								<th>名前</th>
								<td class="name"></td>
							</tr>
							<tr>
								<th>送料区分</th>
								<td class="shipping"></td>
							</tr>
							<tr>
								<th>適合メーカー</th>
								<td class="maker"></td>
							</tr>
							<tr>
								<th>適合車種</th>
								<td class="car"></td>
							</tr>
							<tr>
								<th>コード</th>
								<td class="code"></td>
							</tr>
							<tr>
								<th>仕様/グレード</th>
								<td class="spec"></td>
							</tr>
							<tr>
								<th>商品カテゴリ</th>
								<td class="category"></td>
							</tr>
							<tr>
								<th>適合年式</th>
								<td><span class="year-from"></span> ～ <span class="year-to"></span></td>
							</tr>
                            <tr>
								<th>適合アプライド</th>
								<td class="applied"></td>
							</tr>
                            <tr>
								<th>定価(税込)</th>
								<td><span class="price"></span> 円</td>
							</tr>
                            <tr>
								<th>ベース仕切り</th>
								<td><span class="invoice-price"></span> 円</td>
							</tr>
                            <tr>
								<th>原価</th>
								<td><span class="cost"></span> 円</td>
							</tr>
                            <tr>
								<th>工賃</th>
								<td><span class="m-cost"></span> 円</td>
							</tr>
                            <tr>
								<th>単品塗装代</th>
								<td><span class="paint-cost"></span> 円</td>
							</tr>
                            <tr>
								<th>塗装無し商品</th>
								<td class="no-paint"></td>
							</tr>
                            <tr>
								<th>塗装品のみ商品</th>
								<td class="paint-only"></td>
							</tr>
                            <tr>
								<th>取付無し商品</th>
								<td class="no-mount"></td>
							</tr>
                            <tr>
								<th>ダムド取付不可</th>
								<td class="no-damd"></td>
							</tr>
                            <tr>
								<th>配送設定</th>
								<td class="no-home"></td>
							</tr>
                            <tr>
								<th>配送会社</th>
								<td class="sender"></td>
							</tr>
                            <tr>
								<th>分割払い</th>
								<td class="loan"></td>
							</tr>
                            <tr>
								<th>製造元・発注先</th>
								<td class="factory"></td>
							</tr>
							<tr>
								<th>表示</th>
								<td class="display"></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="modal-footer">
					{!! Form::open(['url' => route('factories.destroy', 'number'), 'method' => 'delete', 'class' => 'd-inline delete-btn']) !!}
					<button action="submit" href="" class="btn btn-secondary">削除</button>
					{!! Form::close() !!}
					<a href="" class="btn btn-primary edit-btn">編集</a>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('custom-scripts')
	<script>
		$(function(){
			$('.list-group-item').click(function(){
				$name = $(this).data('name');
				$('#testModal').find('.modal-title').text($name);
				$('#testModal').find('.name').text($name);

				$shipping_id = $(this).data('shippingId');
                $shippings_list = @json($shippings_list);
				$('#testModal').find('.shipping').text($shippings_list[$shipping_id]);

                $maker_id = $(this).data('makerId');
                $makers_list = @json($makers_list);
				$('#testModal').find('.maker').text($makers_list[$maker_id]);

                $car_id = $(this).data('carId');
                $cars_list = @json($cars_list);
				$('#testModal').find('.car').text($cars_list[$car_id]);

                $code = $(this).data('code');
				$('#testModal').find('.code').text($code);

                $spec_id = $(this).data('specId');
                $specs_list = @json($specs_list);
				$('#testModal').find('.spec').text($specs_list[$spec_id]);

                $category_id = $(this).data('categoryId');
                $categories_list = @json($categories_list);
				$('#testModal').find('.category').text($categories_list[$category_id]);

                $year_from = $(this).data('yearFrom');
                $('#testModal').find('.year-from').text($year_from);

                $year_to = $(this).data('yearTo');
                $('#testModal').find('.year-to').text($year_to);

                $applied = $(this).data('applied');
                $('#testModal').find('.applied').text($applied);

                $price = $(this).data('price');
                $('#testModal').find('.price').text($price);

                $invoice_price = $(this).data('invoicePrice');
                $('#testModal').find('.invoice-price').text($invoice_price);

                $cost = $(this).data('cost');
                $('#testModal').find('.cost').text($cost);

                $m_cost = $(this).data('mCost');
                $('#testModal').find('.m-cost').text($m_cost);

                $paint_cost = $(this).data('paintCost');
                $('#testModal').find('.paint-cost').text($paint_cost);

                if($(this).data('noPaint')){
                    $('#testModal').find('.no-paint').text('塗装無し');
                }

                if($(this).data('paintOnly')){
                    $('#testModal').find('.paint-only').text('塗装品のみ');
                }

                if($(this).data('noMount')){
                    $('#testModal').find('.no-mount').text('取付無し');
                }

                if($(this).data('noDamd')){
                    $('#testModal').find('.no-damd').text('ダムド取付不可');
                }

                $no_home = '';
                if($(this).data('noHome')){
                    $no_home = $no_home + '個人宅不可 ';
                }
                if($(this).data('noStop')){
                    $no_home = $no_home + '支店止め不可';
                }
                $('#testModal').find('.no-home').text($no_home);

                $sender = $(this).data('sender');
                $a_sender = @json(config('data.SENDER'));
                $('#testModal').find('.sender').text($a_sender[$sender]);

                $loan = $(this).data('loan').split(',');
                $loan_list = @json(config('data.LOAN'));
                $loan_text = '';
                $.each($loan, function($i, $v){
                    $loan_text = $loan_text + $loan_list[$v] + ' ';
                });
                $('#testModal').find('.loan').text($loan_text);

                $factory_id = $(this).data('factoryId');
                $factories_list = @json($factories_list);
				$('#testModal').find('.factory').text($factories_list[$factory_id]);




				$display = $(this).data('display');
				$a_display = @json(config('data.DISPLAY'));
				$('#testModal').find('.display').text($a_display[$display]);

				$item_id = $(this).data('itemId');
				$edit_url = @json(route('items.edit', 'number'));
				$edit_url = $edit_url.replace('number', $item_id);
				$('#testModal').find('.edit-btn').attr('href', $edit_url);

				$delete_url = @json(route('items.destroy', 'number'));
				$delete_url = $delete_url.replace('number', $item_id);
				$('#testModal').find('.delete-btn').attr('action', $delete_url);
			});

			$('.delete-btn').find('button').click(function(){
				if(!confirm('削除してよろしいですか？')){
					return false;
				}
			});
		});
	</script>
@endsection