
    <div class="form-group row">
        <div class="col-md-3">
            <span>メールテンプレート名</span>&nbsp;<span class="required-tag">必須</span>
        </div>
        <div class="col-md-9">
            {{ Form::text('name', old('name', $mail_template->name??null)) }}
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-3">
            <span>ステータス</span>
        </div>
        <div class="col-md-9">
            {{ Form::text('status', old('status', $mail_template->status??null)) }}
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-3">
            <span>タイトル</span>
        </div>
        <div class="col-md-9">
            {{ Form::text('title', old('title', $mail_template->title??null)) }}
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-3">
            <span>本文</span>
        </div>
        <div class="col-md-9">
            {{ Form::textarea('content', old('content', $mail_template->content??null)) }}
        </div>
    </div>
    {{ Form::submit('登録', ['class' => 'btn btn-primary']) }}
