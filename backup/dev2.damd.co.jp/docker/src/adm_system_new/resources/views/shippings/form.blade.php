
    <div class="form-group row">
        <div class="col-md-3">
            <span>送料区分名</span>&nbsp;<span class="required-tag">必須</span>
        </div>
        <div class="col-md-9">
            {{ Form::text('name', old('name', $shipping->name??null)) }}
        </div>
    </div>
    <button type="button" class="btn btn-primary btn-copy">北海道の値をすべての項目にコピー</button>
    @foreach(config('data.PREFECTURE') as $k => $v)
    <div class="form-group row">
        <div class="col-md-3">
            <span>{{ $v }}</span>
        </div>
        <div class="col-md-9">
            {{ Form::number('sections[]', old('sections['.($k-1).']', $a_sections[$k-1]??0), ['class' => 'prefecture'.$k]) }}円
        </div>
    </div>
    @endforeach
    <div class="form-group row">
        <div class="col-md-3">
            <span>表示設定</span>
        </div>
        <div class="col-md-9">
            @foreach(config('data.DISPLAY') as $k => $v)
                {{ Form::radio('display', $k, ($k == old('display', $shipping->display??1)), ['id' => 'display'.$k]) }}
                {{ Form::label('display'.$k, $v) }}
            @endforeach
        </div>
    </div>
    {{ Form::submit('登録', ['class' => 'btn btn-primary']) }}
