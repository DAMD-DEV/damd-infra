@extends('layouts.admin')

@section('main')
    <h1>メールテンプレート</h1>
    <div class="clearfix">
        <a href="{{ route('admin.mail_templates.create') }}" class="btn btn-primary float-end">追加</a>
    </div>
    <div>
        <h2>メールテンプレート一覧</h2>
        {{ $mail_templates->links() }}
        <div class="main-list list-group">
            @foreach($mail_templates as $mail_template)
                <div href="" class="list-group-item list-group-item-action" data-bs-toggle="modal" data-bs-target="#testModal" data-mail-template-id={{ $mail_template->id }} data-name="{{ $mail_template->name }}">
                    {{ $mail_template->name }}<span class="d-inline-block float-end">{{ $mail_template->updated_at }}</span>
				</div>
            @endforeach
        </div>
        {{ $mail_templates->links() }}
    </div>

    <div class="modal" id="testModal" tabindex="-1">
		<div class="modal-dialog modal-lg">
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
								<th>メーカーコード</th>
								<td class="code"></td>
							</tr>
							<tr>
								<th>メーカー種別</th>
								<td class="car-maker"></td>
							</tr>
							<tr>
								<th>表示</th>
								<td class="display"></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="modal-footer">
					{!! Form::open(['url' => route('admin.mail_templates.destroy', 'number'), 'method' => 'delete', 'class' => 'd-inline delete-btn']) !!}
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

				$mail_template_id = $(this).data('mailTemplateId');
				$edit_url = @json(route('admin.mail_templates.edit', 'number'));
				$edit_url = $edit_url.replace('number', $mail_template_id);
				$('#testModal').find('.edit-btn').attr('href', $edit_url);

				$delete_url = @json(route('admin.mail_templates.destroy', 'number'));
				$delete_url = $delete_url.replace('number', $mail_template_id);
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