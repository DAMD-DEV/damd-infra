@extends('layouts.app')

@section('main')
    <h1>送料区分</h1>
    <div class="clearfix">
        <a href="{{ route('shippings.create') }}" class="btn btn-primary float-end">追加</a>
    </div>
    <div>
        <h2>送料区分一覧</h2>
        {{ $shippings->links() }}
        <div class="main-list list-group">
            @foreach($shippings as $shipping)
                <div href="" class="list-group-item" data-bs-toggle="modal" data-bs-target="#testModal" data-shipping-id={{ $shipping->id }} data-name="{{ $shipping->name }}" data-sections="{{ $shipping->sections }}" data-display="{{ $shipping->display }}">
                    {{ $shipping->name }}<span class="d-inline-block float-end">{{ $shipping->updated_at }}</span>
				</div>
            @endforeach
        </div>
        {{ $shippings->links() }}
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
							@foreach(config('data.PREFECTURE') as $k => $v)
							<tr>
								<th>{{$v}}</th>
								<td><span class="section{{$k-1}}"></span>円</td>
							</tr>
							@endforeach
							<tr>
								<th>表示</th>
								<td class="display"></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="modal-footer">
					{!! Form::open(['url' => route('shippings.destroy', 'number'), 'method' => 'delete', 'class' => 'd-inline delete-btn']) !!}
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

				$sections = $(this).data('sections');
				$a_sections = $sections.split(',');
				$.each($a_sections, function(index, value){
					$('.section'+index).text(value);
				});

				$display = $(this).data('display');
				$a_display = @json(config('data.DISPLAY'));
				$('#testModal').find('.display').text($a_display[$display]);

				$shipping_id = $(this).data('shippingId');
				$edit_url = @json(route('shippings.edit', 'number'));
				$edit_url = $edit_url.replace('number', $shipping_id);
				$('#testModal').find('.edit-btn').attr('href', $edit_url);

				$delete_url = @json(route('shippings.destroy', 'number'));
				$delete_url = $delete_url.replace('number', $shipping_id);
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