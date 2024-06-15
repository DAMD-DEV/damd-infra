
    <div class="form-group row">
        <div class="col-md-3">
            <span>メーカー名</span>&nbsp;<span class="required-tag">必須</span>
        </div>
        <div class="col-md-9">
            {{ Form::text('name', old('name', $maker->name??null)) }}
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-3">
            <span>メーカーコード</span>
        </div>
        <div class="col-md-9">
            {{ Form::text('code', old('code', $maker->code??null)) }}
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-3">
            <span>メーカー種別</span>
        </div>
        <div class="col-md-9">
            @foreach(config('data.CAR_MAKER') as $k => $v)
                {{ Form::radio('car_maker', $k, ($k == old('car_maker', $maker->car_maker??null)), ['id' => 'car_maker'.$k]) }}
                {{ Form::label('car_maker'.$k, $v) }}
            @endforeach
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-3">
            <span>表示設定</span>
        </div>
        <div class="col-md-9">
            @foreach(config('data.DISPLAY') as $k => $v)
                {{ Form::radio('display', $k, ($k == old('display', $maker->display??1)), ['id' => 'display'.$k]) }}
                {{ Form::label('display'.$k, $v) }}
            @endforeach
        </div>
    </div>
    {{ Form::submit('登録', ['class' => 'btn btn-primary']) }}
