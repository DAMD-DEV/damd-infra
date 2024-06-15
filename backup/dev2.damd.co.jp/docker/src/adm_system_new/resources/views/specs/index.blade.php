@extends('layouts.app')

@section('main')
    <h1>仕様/グレード</h1>
    <div class="clearfix">
        <a href="{{ route('specs.create') }}" class="btn btn-primary float-end">追加</a>
    </div>
    <div>
        <h2>仕様/グレード一覧</h2>
        {{ $specs->links() }}
        <div class="main-list list-group">
            @foreach($specs as $spec)
                <div href="" class="list-group-item" data-bs-toggle="modal" data-bs-target="#testModal" data-spec-id={{ $spec->id }} data-name="{{ $spec->name }}" data-code="{{ $spec->code }}" data-maker-id={{ $spec->maker_id }} data-car-id={{ $spec->car_id }} data-display="{{ $spec->display }}">
                    {{ $spec->name }}<span class="d-inline-block float-end">{{ $spec->updated_at }}</span>
				</div>
            @endforeach
        </div>
        {{ $specs->links() }}
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
								<th>コード</th>
								<td class="code"></td>
							</tr>
							<tr>
								<th>メーカー</th>
								<td class="maker"></td>
							</tr>
							<tr>
								<th>車種</th>
								<td class="car"></td>
							</tr>
							<tr>
								<th>表示</th>
								<td class="display"></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="modal-footer">
					{!! Form::open(['url' => route('cars.destroy', 'number'), 'method' => 'delete', 'class' => 'd-inline delete-btn']) !!}
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

				$code = $(this).data('code');
				$('#testModal').find('.code').text($code);

				$display = $(this).data('display');
				$a_display = @json(config('data.DISPLAY'));
				$('#testModal').find('.display').text($a_display[$display]);

				$maker_id = $(this).data('makerId');
				$makers = @json($makers_list);
				$('#testModal').find('.maker').text($makers[$maker_id]);

				$car_id = $(this).data('carId');
				$cars = @json($cars_list);
				$('#testModal').find('.car').text($cars[$car_id]);

				$spec_id = $(this).data('specId');
				$edit_url = @json(route('specs.edit', 'number'));
				$edit_url = $edit_url.replace('number', $spec_id);
				$('#testModal').find('.edit-btn').attr('href', $edit_url);
				
				$delete_url = @json(route('specs.destroy', 'number'));
				$delete_url = $delete_url.replace('number', $spec_id);
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