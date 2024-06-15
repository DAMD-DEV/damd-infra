
    <div class="form-group row">
        <div class="col-md-3">
            <span>商品カテゴリ名</span>&nbsp;<span class="required-tag">必須</span>
        </div>
        <div class="col-md-9">
            {{ Form::text('name', old('name', $category->name??null)) }}
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-3">
            <span>商品カテゴリコード</span>
        </div>
        <div class="col-md-9">
            {{ Form::text('code', old('code', $category->code??null)) }}
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-3">
            <span>表示設定</span>
        </div>
        <div class="col-md-9">
            @foreach(config('data.DISPLAY') as $k => $v)
                {{ Form::radio('display', $k, ($k == old('display', $category->display??1)), ['id' => 'display'.$k]) }}
                {{ Form::label('display'.$k, $v) }}
            @endforeach
        </div>
    </div>
    {{ Form::submit('登録', ['class' => 'btn btn-primary']) }}
