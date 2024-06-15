
    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} row">
        <div class="col-md-3 col-form-label">
            <span>商品名</span>&nbsp;<span class="badge bg-danger">必須</span>
        </div>
        <div class="col-md-9">
            {{ Form::text('name', old('name', $item->name??null), ['class' => 'form-control w-auto']) }}
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-3 col-form-label">
            <span>送料区分</span>
        </div>
        <div class="col-md-9">
            {{ Form::select('shipping_id', $shippings_list, old('shipping_id', $item->shipping_id??null), ['class' => 'form-select w-auto']) }}
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-3 col-form-label">
            <span>適合メーカー</span>
        </div>
        <div class="col-md-9">
            {{ Form::select('maker_id', $makers_list, old('maker_id', $item->maker_id??null), ['class' => 'form-select w-auto']) }}
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-3 col-form-label">
            <span>適合車種</span>
        </div>
        <div class="col-md-9">
            {{ Form::select('car_id', $cars_list, old('car_id', $item->car_id??null), ['class' => 'form-select w-auto', 'placeholder' => '選択無し']) }}
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-3 col-form-label">
            <span>コード</span>
        </div>
        <div class="col-md-9">
            {{ Form::text('code', old('code', $item->code??null), ['class' => 'form-control w-auto', 'pattern' => "^[a-zA-Z0-9]+$"]) }}
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-3 col-form-label">
            <span>仕様/グレード</span>
        </div>
        <div class="col-md-9">
            {{ Form::select('spec_id', $specs_list, old('spec_id', $item->spec_id??null), ['class' => 'form-select w-auto']) }}
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-3 col-form-label">
            <span>商品カテゴリ</span>
        </div>
        <div class="col-md-9">
            {{ Form::select('category_id', $categories_list, old('category_id', $item->category_id??null), ['class' => 'form-select w-auto']) }}
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-3 col-form-label">
            <span>適合年式</span>
        </div>
        <div class="col-md-9">
            {{ Form::month('year_from', old('year_from', $item->year_from??null)) }} ～ {{ Form::month('year_to', old('year_to', $item->year_to??null)) }}
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-3 col-form-label">
            <span>適合アプライド</span>
        </div>
        <div class="col-md-9">
            {{ Form::text('applied', old('applied', $item->applied??null), ['class' => 'form-control w-auto']) }}
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-3 col-form-label">
            <span>定価(税別)</span>
        </div>
        <div class="col-md-9">
            <div class="input-group mw-200px">
                {{ Form::number('price', old('price', $item->price??null), ['class' => 'form-control']) }}
                <span class="input-group-text">円</span>
            </div>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-3 col-form-label">
            <span>ベース仕切り</span>
        </div>
        <div class="col-md-9">
            {{ Form::number('invoice_price', old('invoice_price', $item->invoice_price??null), ['class' => 'form-control w-auto']) }}
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-3 col-form-label">
            <span>原価</span>
        </div>
        <div class="col-md-9">
            {{ Form::number('cost', old('cost', $item->cost??null), ['class' => 'form-control w-auto']) }}
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-3 col-form-label">
            <span>工賃</span>
        </div>
        <div class="col-md-9">
            {{ Form::number('m_cost', old('m_cost', $item->m_cost??null), ['class' => 'form-control w-auto']) }}
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-3 col-form-label">
            <span>単品塗装代</span>
        </div>
        <div class="col-md-9">
            {{ Form::number('paint_cost', old('paint_cost', $item->paint_cost??null), ['class' => 'form-control w-auto']) }}
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-3">
            <span>塗装無し商品</span>
        </div>
        <div class="col-md-9">
            {{ Form::checkbox('no_paint', 1, old('no_paint', $item->no_paint??null), ['class' => 'form-check-input']) }}
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-3">
            <span>塗装品のみ商品</span>
        </div>
        <div class="col-md-9">
            {{ Form::checkbox('paint_only', 1, old('paint_only', $item->paint_only??null), ['class' => 'form-check-input']) }}
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-3">
            <span>取付無し商品</span>
        </div>
        <div class="col-md-9">
            {{ Form::checkbox('no_mount', 1, old('no_mount', $item->no_mount??null), ['class' => 'form-check-input']) }}
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-3">
            <span>ダムド取付不可</span>
        </div>
        <div class="col-md-9">
            {{ Form::checkbox('no_damd', 1, old('no_damd', $item->no_damd??null), ['class' => 'form-check-input']) }}
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-3">
            <span>配送設定</span>
        </div>
        <div class="col-md-9">
            {{ Form::checkbox('no_home', 1, old('no_home', $item->no_home??null), ['id' => 'no-home', 'class' => 'form-check-input']) }}
            {{ Form::label('no-home', '個人宅不可') }}
            &nbsp;
            {{ Form::checkbox('no_stop', 1, old('no_stop', $item->no_stop??null), ['id' => 'no-stop', 'class' => 'form-check-input']) }}
            {{ Form::label('no-stop', '支店止め不可') }}
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-3 col-form-label">
            <span>配送会社</span>
        </div>
        <div class="col-md-9">
            {{ Form::select('sender', config('data.SENDER'), old('sender', $item->sender??null), ['class' => 'form-select w-auto']) }}
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-3">
            <span>分割払い</span>
        </div>
        <div class="col-md-9">
            @foreach(config('data.LOAN') as $k => $v)
                {{ Form::checkbox('loan[]', $k, in_array($k, old('loan', explode(',', $item->loan??null)??[])), ['id' => 'loan'.$k, 'class' => 'form-check-input']) }}
                {{ Form::label('loan'.$k, $v) }}
                &nbsp;
            @endforeach
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-3 col-form-label">
            <span>製造元・発注先</span>
        </div>
        <div class="col-md-9">
            {{ Form::select('factory_id', $factories_list, old('sender', $item->sender??null), ['class' => 'form-select w-auto']) }}
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-3">
            <span>構成商品</span>
        </div>
        <div class="col-md-9">
            {{ Form::select('composition[]', $items_list, old('composition', $item->composition??null), ['multiple' => true]) }}
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-3">
            <span>塗装色</span>
        </div>
        <div class="col-md-9">
            {{ Form::select('colors[]', $colors_list, old('colors', $item->colors??null), ['multiple' => true]) }}
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-3 col-form-label">
            <span>オプション設定</span>
        </div>
        <div class="col-md-9">
            <p class="small mb-0">「オプション名:選択肢1,選択肢2,選択肢3」の形式で入力してください。改行で複数項目設定可能です。</p>
            {{ Form::textarea('options', old('options', $item->options??null), ['class' => 'form-control w-auto']) }}
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-3 col-form-label">
            <span>商品サイズ縦</span>
        </div>
        <div class="col-md-9">
            <div class="input-group mw-200px">
                {{ Form::number('height', old('height', $item->size->height??null), ['class' => 'form-control']) }}
                <span class="input-group-text">mm</span>
            </div>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-3 col-form-label">
            <span>商品サイズ横</span>
        </div>
        <div class="col-md-9">
            <div class="input-group mw-200px">
                {{ Form::number('width', old('width', $item->size->width??null), ['class' => 'form-control']) }}
                <span class="input-group-text">mm</span>
            </div>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-3 col-form-label">
            <span>商品サイズ幅</span>
        </div>
        <div class="col-md-9">
            <div class="input-group mw-200px">
                {{ Form::number('depth', old('depth', $item->size->depth??null), ['class' => 'form-control']) }}
                <span class="input-group-text">mm</span>
            </div>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-3 col-form-label">
            <span>商品重量</span>
        </div>
        <div class="col-md-9">
            <div class="input-group mw-200px">
                {{ Form::number('weight', old('weight', $item->size->weight??null), ['class' => 'form-control']) }}
                <span class="input-group-text">kg</span>
            </div>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-3 col-form-label">
            <span>梱包箱サイズ縦</span>
        </div>
        <div class="col-md-9">
            <div class="input-group mw-200px">
                {{ Form::number('b_height', old('b_height', $item->size->b_height??null), ['class' => 'form-control']) }}
                <span class="input-group-text">mm</span>
            </div>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-3 col-form-label">
            <span>梱包箱サイズ横</span>
        </div>
        <div class="col-md-9">
            <div class="input-group mw-200px">
                {{ Form::number('b_width', old('b_width', $item->size->b_width??null), ['class' => 'form-control']) }}
                <span class="input-group-text">mm</span>
            </div>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-3 col-form-label">
            <span>梱包箱サイズ幅</span>
        </div>
        <div class="col-md-9">
            <div class="input-group mw-200px">
                {{ Form::number('b_depth', old('b_depth', $item->size->b_depth??null), ['class' => 'form-control']) }}
                <span class="input-group-text">mm</span>
            </div>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-3 col-form-label">
            <span>梱包時の総重量</span>
        </div>
        <div class="col-md-9">
            <div class="input-group mw-200px">
                {{ Form::number('t_weight', old('t_weight', $item->size->t_weight??null), ['class' => 'form-control']) }}
                <span class="input-group-text">kg</span>
            </div>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-3 col-form-label">
            <span>同時購入条件数</span>
        </div>
        <div class="col-md-9">
            {{ Form::number('multiple', old('multiple', $item->multiple??null), ['class' => 'form-control w-auto']) }}
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-3 col-form-label">
            <span>書類テンプレート</span>
        </div>
        <div class="col-md-9">
            @foreach(config('data.DOCUMENT') as $k => $v)
            <div class="form-check form-check-inline">
                {{ Form::checkbox('template_ids[]', $k, in_array($k, old('sample_check', explode(',', $item->template_ids??null)??[])), ['id' => 'document'.$k, 'class' => 'form-check-input']) }}
                {{ Form::label('document'.$k, $v, ['class' => 'form-check-label']) }}
            </div>
            @endforeach
        </div>
    </div>
    <div class="form-group row mb-4">
        <div class="col-md-3">
            <span>表示設定</span>
        </div>
        <div class="col-md-9">
            @foreach(config('data.DISPLAY') as $k => $v)
                {{ Form::radio('display', $k, ($k == old('display', $item->display??1)), ['id' => 'display'.$k]) }}
                {{ Form::label('display'.$k, $v) }}
            @endforeach
        </div>
    </div>
    {{ Form::submit('登録', ['class' => 'btn btn-primary']) }}
