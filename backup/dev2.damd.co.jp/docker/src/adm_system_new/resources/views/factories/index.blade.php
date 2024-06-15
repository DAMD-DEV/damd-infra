@extends('layouts.app')

@section('main')
    <h1>工場</h1>
    <div class="clearfix">
        <a href="{{ route('factories.create') }}" class="btn btn-primary float-end">追加</a>
    </div>
    <div>
        <h2>工場一覧</h2>
        {{ $factories->links() }}
        <div class="main-list list-group">
            @foreach($factories as $factory)
                <div href="" class="list-group-item" data-bs-toggle="modal" data-bs-target="#testModal" data-factory-id={{ $factory->id }} data-name="{{ $factory->name }}" data-day="{{ $factory->day }}" data-display="{{ $factory->display }}">
                    {{ $factory->name }}<span class="d-inline-block float-end">{{ $factory->updated_at }}</span>
				</div>
            @endforeach
        </div>
        {{ $factories->links() }}
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
								<th>納期(日数)</th>
								<td class="day"></td>
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

				$day = $(this).data('day');
				$('#testModal').find('.day').text($day);

				$display = $(this).data('display');
				$a_display = @json(config('data.DISPLAY'));
				$('#testModal').find('.display').text($a_display[$display]);

				$factory_id = $(this).data('factoryId');
				$edit_url = @json(route('factories.edit', 'number'));
				$edit_url = $edit_url.replace('number', $factory_id);
				$('#testModal').find('.edit-btn').attr('href', $edit_url);

				$delete_url = @json(route('factories.destroy', 'number'));
				$delete_url = $delete_url.replace('number', $factory_id);
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