
    <div class="form-group row">
        <div class="col-md-3">
            <span>仕様名</span>&nbsp;<span class="required-tag">必須</span>
        </div>
        <div class="col-md-9">
            {{ Form::text('name', old('name', $spec->name??null)) }}
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-3">
            <span>コード</span>
        </div>
        <div class="col-md-9">
            {{ Form::text('code', old('code', $spec->code??null)) }}
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-3">
            <span>メーカー</span>
        </div>
        <div class="col-md-9">
            {{ Form::select('maker_id', $makers_list, old('maker_id', $spec->maker_id??null)) }}
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-3">
            <span>車種</span>
        </div>
        <div class="col-md-9">
            {{ Form::select('car_id', $cars_list, old('car_id', $spec->car_id??null)) }}
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-3">
            <span>表示設定</span>
        </div>
        <div class="col-md-9">
            @foreach(config('data.DISPLAY') as $k => $v)
                {{ Form::radio('display', $k, ($k == old('display', $spec->display??1)), ['id' => 'display'.$k]) }}
                {{ Form::label('display'.$k, $v) }}
            @endforeach
        </div>
    </div>
    {{ Form::submit('登録', ['class' => 'btn btn-primary']) }}
