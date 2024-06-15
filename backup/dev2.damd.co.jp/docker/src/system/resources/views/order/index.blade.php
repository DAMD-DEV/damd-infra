@extends('layouts.order')

@section('title')
購入申し込みフォーム | エアロパーツ、ドレスアップのダムド | DAMD Inc.
@endsection

@section('main')
@php
$buy_ay = [
    1 => '銀行振込',
    2 => 'クレジットカード',
    3 => 'ダムド分割払いサポート',
];
$check_ay = [
    1 => '確認事項に同意する'
];
$check_ay2 = [
    1 => '確認事項に同意する'
];
$policy_ay = [
    1 => '同意する'
];
@endphp

<h1 class="common-ttl text-center menu-mgn">購入申し込みフォーム</h1>
<div class="content-wrap pb">
    <ul class="progressbar mt-4">
        <li class="active">ご入力</li>
        <li>確認画面</li>
        <li>完了</li>
    </ul>

    <div class="form mt-4">
        <form action="./#pan" method="post" name="form1" id="form1">
            
            {{-- <?
            //print_r($data);
            //sprint_r($data);
            //商品ユニークの出力
            if($unique_html != ""){
                echo '<div id="unique_form">';
                echo "<h2 class='ttl text-center' style='font-size: 18px'>商品の仕様を選択してください</h2>";
                echo $unique_html;
                echo '<div class="text-center"><button type="button" name="unique_area" value="1" class="btn btn-danger">次へ</button></div>';
                echo '</div>';
            }
            ?> --}}

            <div id="common_form">
                <div class="form-sec sec01">
                    <h2>お持ちのお車の情報</h2>
                    <div class="container-fluid">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label"><div class="form-bg"><span class="badge badge-pill badge-danger">必須</span>年式</div></label>
                            <div class="col-sm-5">
                                {{-- <input type="text" name="user_year" class="form-control" value="<?= $user_year ?>" placeholder=""><?= $error_ay["user_year"] ?> --}}
                                {{ Form::text('user_year', old('user_year', $user_year??null), ['class'=>'form-control']) }}
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label"><div class="form-bg"><span class="badge badge-pill badge-danger">必須</span>型式</div></label>
                            <div class="col-sm-5">
                                {{-- <input type="text" name="user_kata" class="form-control" value="<?= $user_kata ?>" placeholder=""><?= $error_ay["user_kata"] ?> --}}
                                {{ Form::text('user_kata', old('user_kata', $user_kata??null), ['class'=>'form-control']) }}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-sec sec02">
                    <h2>お客様情報</h2>
                    <div class="container-fluid">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label"><div class="form-bg">会社名</div></label>
                            <div class="col-sm-5">
                                {{-- <input type="text" name="user_company" class="form-control" value="<?= $user_company ?>" placeholder=""> --}}
                                {{ Form::text('user_company', old('user_company', null), ['class'=>'form-control']) }}
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label"><div class="form-bg"><span class="badge badge-pill badge-danger">必須</span>お名前</div></label>
                            <div class="col-sm-6">
                                {{-- <input style="width:120px;display:inline-block" type="text" id="name1" name="user_name1" class="form-control" value="<?= $user_name1 ?>" placeholder="鈴木"> --}}
                                {{ Form::text('user_name1', old('user_name1', null), ['class'=>'form-control', 'style'=>'width:120px;display:inline-block']) }}
                                {{-- <input style="width:120px;display:inline-block" type="text" id="name2" name="user_name2" class="form-control" value="<?= $user_name2 ?>" placeholder="太郎"><?= $error_ay["user_name1"] ?><?= $error_ay["user_name2"] ?> --}}
                                {{ Form::text('user_name2', old('user_name2', null), ['class'=>'form-control', 'style'=>'width:120px;display:inline-block']) }}
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">
                                <div class="form-bg"><span class="badge badge-pill badge-danger">必須</span>フリガナ</div>
                            </label>
                            <div class="col-sm-5">
                                {{-- <input type="text" name="user_kana" class="form-control" value="<?= $user_kana ?>" placeholder="例）スズキタロウ"><?= $error_ay["user_kana"] ?> --}}
                                {{ Form::text('user_kana', old('user_kana', null), ['class'=>'form-control']) }}
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">
                                <div class="form-bg"><span class="badge badge-pill badge-danger">必須</span>郵便番号</div>
                            </label>
                            <div class="col-sm-6">
                                {{-- <input style="width:80px;display:inline-block" type="text" id="zip1" name="user_zip1" class="form-control" value="<?= $user_zip1 ?>" placeholder="123">-
                                <input style="width:100px;display:inline-block" type="text" id="zip2" name="user_zip2" class="form-control" value="<?= $user_zip2 ?>" placeholder="0045"><?= $error_ay["user_zip1"] ?><?= $error_ay["user_zip2"] ?> --}}
                                {{ Form::text('user_zip', old('user_zip', null), ['class'=>'form-control']) }}
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label"><div class="form-bg"><span class="badge badge-pill badge-danger">必須</span>都道府県</div></label>
                            <div class="col-sm-5">
                                {{-- <select id="pref" name="user_pref" class="form-control form-control">
                                    <?php print getOptionHtml($pref_ay,$user_pref); ?>
                                </select> --}}
                                {{ Form::select('pref', config('data.PREFECTURE'), null, ['class'=>'form-control']) }}
                                {{-- <?= $error_ay["user_pref"] ?> --}}
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label"><div class="form-bg"><span class="badge badge-pill badge-danger">必須</span>ご住所</div></label>
                            <div class="col-sm-9">
                                {{-- 市区町村：<input id="address" type="text" name="user_city" class="form-control" value="<?= $user_city ?>" placeholder="新宿区西新宿"><?= $error_ay["user_city"] ?>
                                番地：<input id="address" type="text" name="user_add1" class="form-control" value="<?= $user_add1 ?>" placeholder="1-1-1"><?= $error_ay["user_add1"] ?>
                                建物：<input type="text" name="user_add2" class="form-control" value="<?= $user_add2 ?>" placeholder="サンプルビル101"><?= $error_ay["user_add2"] ?> --}}
                                市区町村：
                                {{ Form::text('address1', old('address1', null), ['class'=>'form-control']) }}
                                番地・建物名：
                                {{ Form::text('address2', old('address2', null), ['class'=>'form-control']) }}
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">
                                <div class="form-bg"><span class="badge badge-pill badge-danger">必須</span>メールアドレス</div>
                            </label>
                            <div class="col-sm-9">
                                {{-- <input type="email" name="user_mail" class="form-control" value="<?= $user_mail ?>" placeholder="例）sample@sample.co.jp"><?= $error_ay["user_mail"] ?> --}}
                                {{ Form::email('user_mail', old('user_mail', null), ['class'=>'form-control'] ) }}
                                ※携帯電話のメールアドレスをご入力いただく場合、スマートフォンのみの対応となります。

                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">
                                <div class="form-bg"><span class="badge badge-pill badge-danger">必須</span>メールアドレス（確認用）</div>
                            </label>
                            <div class="col-sm-9">
                                {{-- <input type="email" name="user_mail2" class="form-control" value="<?= $user_mail2 ?>" placeholder=""><?= $error_ay["user_mail2"] ?> --}}
                                {{ Form::email('user_mail2', null, ['class'=>'form-control'] ) }}
                            </div>
                        </div>

                        <div class="form-group row">

                            <label class="col-sm-3 col-form-label">
                                <div class="form-bg"><span class="badge badge-pill badge-danger">必須</span>電話番号</div>
                            </label>

                            <div class="col-sm-7">
                                {{-- <input style="width:60px;display:inline-block" type="text" name="user_tel1" class="form-control" value="<?= $user_tel1 ?>" placeholder="080">-
                                <input style="width:60px;display:inline-block" type="text" name="user_tel2" class="form-control" value="<?= $user_tel2 ?>" placeholder="1234">-
                                <input style="width:60px;display:inline-block" type="text" name="user_tel3" class="form-control" value="<?= $user_tel3 ?>" placeholder="5678">
                                <?= $error_ay["user_tel1"] ?>
                                <?= $error_ay["user_tel2"] ?>
                                <?= $error_ay["user_tel3"] ?> --}}
                                {{ Form::text('tel', old('tel', null), ['class'=>'form-control']) }}
                            </div>
                        </div>
                    </div>
                </div><!-- end sec02 -->

                {{-- {{ dd($cart) }} --}}

                @php
                if($cart_status['mount']==2 || $cart_status['mount']==1){
                    //ダムドで取り付け、紹介店取り付けの場合は配送先は非表示
                    $send_style = "style='display:none'";
                }else{
                    // $sender_to_ay = mkSendToAy();
                    $sender_to_ay = [
                        1 => 'ご自宅宛',
                        2 => '法人宛',
                        3 => 'お近くの営業所止め',
                    ];
                    //配送業者
                    $sender_ary=mkSenderAy();
                    /*
                    print_r($sender_to_ay);
                    print_r($sender_ary);
                    */
                    if($data["options"]["corporate_only"]==1){
                        //配送業者が混ざっている場合、法人宛てのみ　自宅、営業所止めを削除
                        unset($sender_to_ay[1]);
                        unset($sender_to_ay[3]);
                    }elseif($data["options"]["item_sender"]!=""){
                        //配送業者が混ざっていない場合
                        $sender_name = $data["options"]["item_sender_name"];
                    }

                    $send_no_homes = array();
                    $send_no_homes  = explode(",",$row["item_no_home"]);
                    if(in_array(1,$send_no_homes)){
                        //個人宅不可の場合
                        $sender_style = "";
                        $sender_style2 = "hide";
                        if($row["item_sender"] != ""){
                            $sender_name = $sender_ary[$row["item_sender"]];
                            //個人宅という選択を消します
                            unset($sender_to_ay[1]);
                        }else{
                            unset($sender_to_ay[1]);
                            $sender_name = "福山通運";
                        }
                    }else{
                        //個人宅が可能の場合、営業所止め項目を削除
                        unset($sender_to_ay[3]);
                        $sender_style = "hide";
                        $sender_style2 = "hide";
                    }

                    if(in_array(2,$send_no_homes)){
                        //支店止め不可の場合
                        $sender_style = "hide";
                        $sender_style2 = "";
                        unset($sender_to_ay[3]);
                    }
                }
                @endphp

                <div class="form-sec sec02" <?= $send_style ?>>
                    <h2>発送先情報</h2>
                    <div class="container-fluid">

                        {{-- <div class="alert alert-primary <?= $sender_style ?>">
                            <small>
                                ※本製品の配送は個人宅不可となります。法人様宛または最寄りの<span id="sender"><?= $sender_name ?></span>営業所止めとなります。
                            </small>
                        </div>

                        <div class="alert alert-primary <?= $sender_style2 ?>">
                            <small>
                                ※本製品の配送は個人宅不可となり、法人様宛のみの配送となります。
                            </small>
                        </div> --}}

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">
                                <div class="form-bg"><span class="badge badge-pill badge-danger">必須</span>発送先</div>
                            </label>
                            <div class="col-sm-9">
                                {{-- <?=
                                getRadioFromMasterData ($sender_to_ay,'name="user_sender_to"', "" , $user_sender_to, '<label style="margin-right:10px;">','</label>  ')
                                ?>
                                <?= $error_ay["user_sender_to"] ?> --}}
                            </div>
                        </div>

                        {{-- <div class="send-area1" style="<?php if($user_sender_to == 1) {print "display:block;";}else{print "display:none;";} ?>"> --}}
                        <div class="send-area1" style="">
                            <div class="form-group row">
                                <div class="col-sm-12 text-center">
                                    <label>
                                        <button type="button" class="btn" name="user_info_copy">上記で入力したお客様情報をコピーする</button>
                                    </label>
                                </div>

                                <label class="col-sm-3 col-form-label">
                                    <div class="form-bg"><span class="badge badge-pill badge-danger">必須</span>お名前</div>
                                </label>

                                <div class="col-sm-6">
                                    {{-- <input style="width:120px;display:inline-block" type="text" id="name1" name="user_send_name1" class="form-control" value="<?= $user_send_name1 ?>" placeholder=""> --}}
                                    {{-- <input style="width:120px;display:inline-block" type="text" id="name2" name="user_send_name2" class="form-control" value="<?= $user_send_name2 ?>" placeholder=""><?= $error_ay["user_send_name1"] ?><?= $error_ay["user_send_name2"] ?> --}}
                                    {{ Form::text('user_send_name1', old('user_send_name1', null), ['class' => 'form-control', 'style' => 'width:120px;display:inline-block']) }}
                                    {{ Form::text('user_send_name2', old('user_send_name2', null), ['class' => 'form-control', 'style' => 'width:120px;display:inline-block']) }}
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">
                                    <div class="form-bg"><span class="badge badge-pill badge-danger">必須</span>フリガナ</div>
                                </label>
                                <div class="col-sm-5">
                                    {{-- <input type="text" name="user_send_kana" class="form-control" value="<?= $user_send_kana ?>" placeholder="例）スズキタロウ"><?= $error_ay["user_send_kana"] ?> --}}
                                    {{ Form::text('user_send_kana', old('user_send_kana', null), ['class' => 'form-control']) }}
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">
                                    <div class="form-bg"><span class="badge badge-pill badge-danger">必須</span>郵便番号</div>
                                </label>
                                <div class="col-sm-6">
                                    {{-- <input style="width:80px;display:inline-block" type="text" id="zip_send1" name="user_send_zip1" class="form-control" value="<?= $user_send_zip1 ?>" placeholder="123">-
                                    <input style="width:100px;display:inline-block" type="text" id="zip_send2" name="user_send_zip2" class="form-control" value="<?= $user_send_zip2 ?>" placeholder="0045"><?= $error_ay["user_send_zip1"] ?><?= $error_ay["user_send_zip2"] ?> --}}
                                    {{ Form::text('send_zip', old('send_zip', null), ['class' => 'form-control']) }}
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><div class="form-bg"><span class="badge badge-pill badge-danger">必須</span>都道府県</div></label>
                                <div class="col-sm-5">
                                    {{-- <select id="pref_send" name="user_send_pref" class="form-control form-control">
                                        <?php print getOptionHtml($pref_ay,$user_send_pref); ?>
                                    </select>
                                    <?= $error_ay["user_send_pref"] ?> --}}
                                    {{ Form::select('send_pref', config('data.PREFECTURE'), null, ['class'=>'form-control']) }}
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">
                                    <div class="form-bg"><span class="badge badge-pill badge-danger">必須</span>ご住所</div>
                                </label>
                                <div class="col-sm-9">
                                    {{-- 市区町村：<input id="address_send" type="text" name="user_send_city1" class="form-control" value="<?= $user_send_city1 ?>" placeholder="新宿区西新宿">
                                    番地：<input id="address_send" type="text" name="user_send_add1" class="form-control" value="<?= $user_send_add1 ?>" placeholder="1-1-1">
                                    建物：<input type="text" name="user_send_add2" class="form-control" value="<?= $user_send_add2 ?>" placeholder="サンプルビル101"><?= $error_ay["user_send_add1"] ?> --}}
                                    {{ Form::text('send_address1', old('send_address1', null), ['class' => 'form-control']) }}
                                    {{ Form::text('send_address2', old('send_address2', null), ['class' => 'form-control']) }}
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><div class="form-bg"><span class="badge badge-pill badge-danger">必須</span>電話番号</div></label>
                                <div class="col-sm-7">
                                    {{-- <input style="width:60px;display:inline-block" type="text" name="user_send_tel1" class="form-control" value="<?= $user_send_tel1 ?>" placeholder="080">-
                                    <input style="width:60px;display:inline-block" type="text" name="user_send_tel2" class="form-control" value="<?= $user_send_tel2 ?>" placeholder="1234">-
                                    <input style="width:60px;display:inline-block" type="text" name="user_send_tel3" class="form-control" value="<?= $user_send_tel3 ?>" placeholder="5678">
                                    <?= $error_ay["user_send_tel1"] ?>
                                    <?= $error_ay["user_send_tel2"] ?>
                                    <?= $error_ay["user_send_tel3"] ?> --}}
                                    {{ Form::text('send_tel', old('send_tel', null), ['class' => 'form-control']) }}
                                </div>
                            </div>
                        </div>

                        {{--

                        <div class="send-area2" style="<?php if($user_sender_to == 2){print "display:block;";}else{print "display:none;";} ?>">

                            <div class="form-group row">
                                <div class="col-sm-12 text-center">
                                    <label>
                                        <button type="button" class="btn" name="user_info_copy2">上記で入力したお客様情報をコピーする</button>
                                    </label>
                                </div>

                                <label class="col-sm-3 col-form-label">
                                    <div class="form-bg"><span class="badge badge-pill badge-danger">必須</span>会社名</div>
                                </label>
                                <div class="col-sm-5">
                                    <input type="text" name="user_send_company" class="form-control" value="<?= $user_send_company ?>" placeholder=""><?= $error_ay["user_send_company"] ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">
                                    <div class="form-bg">お名前</div>
                                </label>
                                <div class="col-sm-5">
                                    <input style="width:120px;display:inline-block" type="text" id="name1" name="user_send_name2_1" class="form-control" value="<?= $user_send_name2_1 ?>" placeholder="">
                                    <input style="width:120px;display:inline-block" type="text" id="name2" name="user_send_name2_2" class="form-control" value="<?= $user_send_name2_2 ?>" placeholder=""><?= $error_ay["user_send_name2_1"] ?><?= $error_ay["user_send_name2_2"] ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">
                                    <div class="form-bg">フリガナ</div>
                                </label>
                                <div class="col-sm-5">
                                    <input type="text" name="user_send_kana2" class="form-control" value="<?= $user_send_kana2 ?>" placeholder="例）スズキタロウ">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">
                                    <div class="form-bg"><span class="badge badge-pill badge-danger">必須</span>郵便番号</div>
                                </label>
                                <div class="col-sm-6">
                                    <input style="width:80px;display:inline-block" type="text" id="zip_send1_2" name="user_send_zip1_2" class="form-control" value="<?= $user_send_zip1_2 ?>" placeholder="123">-
                                    <input style="width:100px;display:inline-block" type="text" id="zip_send2_2" name="user_send_zip2_2" class="form-control" value="<?= $user_send_zip2_2 ?>" placeholder="0045"><?= $error_ay["user_send_zip1_2"] ?><?= $error_ay["user_send_zip2_2"] ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">
                                    <div class="form-bg"><span class="badge badge-pill badge-danger">必須</span>都道府県</div>
                                </label>

                                <div class="col-sm-5">
                                    <select id="pref_send2" name="user_send_pref2" class="form-control form-control">
                                        <?php print getOptionHtml($pref_ay,$user_send_pref2); ?>
                                    </select>
                                    <?= $error_ay["user_send_pref2"] ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">
                                    <div class="form-bg"><span class="badge badge-pill badge-danger">必須</span>ご住所</div>
                                </label>
                                <div class="col-sm-9">
                                    市区町村：<input id="address_send2" type="text" name="user_send_city2" class="form-control" value="<?= $user_send_city2 ?>" placeholder="新宿区西新宿">
                                    番地：<input id="address_send2" type="text" name="user_send_add1_2" class="form-control" value="<?= $user_send_add1_2 ?>" placeholder="1-1-1">
                                    建物：<input type="text" name="user_send_add2_2" class="form-control" value="<?= $user_send_add2_2 ?>" placeholder="サンプルビル101"><?= $error_ay["user_send_add1_2"] ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">
                                    <div class="form-bg"><span class="badge badge-pill badge-danger">必須</span>電話番号</div>
                                </label>
                                <div class="col-sm-7">
                                    <input style="width:60px;display:inline-block" type="text" name="user_send_tel1_2" class="form-control" value="<?= $user_send_tel1_2 ?>" placeholder="080">-
                                    <input style="width:60px;display:inline-block" type="text" name="user_send_tel2_2" class="form-control" value="<?= $user_send_tel2_2 ?>" placeholder="1234">-
                                    <input style="width:60px;display:inline-block" type="text" name="user_send_tel3_2" class="form-control" value="<?= $user_send_tel3_2 ?>" placeholder="5678">
                                    <?= $error_ay["user_send_tel1_2"] ?>
                                    <?= $error_ay["user_send_tel2_2"] ?>
                                    <?= $error_ay["user_send_tel3_2"] ?>
                                </div>
                            </div>
                        </div>

                        --}}

                        {{-- <div class="send-area3" style="<?php if($user_sender_to == 3){print "display:block;";}else{print "display:none;";} ?>"> --}}
                        <div class="send-area3">

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">
                                    <div class="form-bg"><span class="badge badge-pill badge-danger">必須</span>営業所名</div>
                                </label>
                                <div class="col-sm-6">
                                    {{-- <input type="text" name="user_send_shop" class="form-control" value="<?= $user_send_shop ?>" placeholder=""> --}}

                                    @php($sender_name = '○○運輸')

                                    {{ Form::text('send_shop', old('send_shop', null), ['class' => 'form-control']) }}
                                    ※ご希望の<?= $sender_name ?>営業所名をご記入ください。
                                    {{-- <?= $error_ay["user_send_shop"] ?> --}}
                                    <?php
                                    if($sender_name=="西濃運輸"){
                                        print "<br><br>
                                        　各営業所の「営業所止め引き取りの可否」を必ずご確認の上、<br>
                                        　配送先をご指定いただきますようお願い申し上げます。<br>
                                        　なお、「ミニ便のみの対応店舗」は配送不可となります。<br><br>　<a href='https://www.seino.co.jp/seino/branch/' target='_blank'>".$sender_name."営業所一覧はこちら »</a>";
                                    }else{
                                        print "<br><a href='https://corp.fukutsu.co.jp/shop/' target='_blank'>".$sender_name."営業所一覧はこちら »</a>";
                                    }
                                    ?>
                                    {{-- <input type="hidden" name="user_send_corp" value="<?= $row["item_sender"] ?>"> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-sec sec03">
                    <h2>ご購入について、その他</h2>
                    <div class="container-fluid">
                        {{-- <!--<div class="form-group row">
                            <label class="col-sm-3 col-form-label"><div class="form-bg"><span class="badge badge-pill badge-danger">必須</span>購入数</div></label>
                            <div class="col-sm-5">
                                <input type="number" name="user_length" min="1" class="form-control" value="<?= $user_length ?>" placeholder=""><?= $error_ay["user_length"] ?>
                            </div>
                        </div>--> --}}

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">
                                <div class="form-bg"><span class="badge badge-pill badge-danger">必須</span>購入方法</div>
                            </label>

                            {{-- 
                            <?php
                            if($data["options"]["item_loan_max"]<1){
                                //ダムド分割サポート制御
                                unset($buy_ay[3]);
                            }
                            ?> --}}

                            <div class="col-sm-5">
                                {{ Form::select('buy', $buy_ay, old('buy', null), ['class' => 'form-control']) }}
                                {{-- <select name="user_buy" class="form-control form-control">
                                    <?php print getOptionHtml($buy_ay,$user_buy); ?>
                                </select>
                                <?= $error_ay["user_buy"] ?> --}}
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">
                                <div class="form-bg"><span class="badge badge-pill badge-danger">必須</span>納期・発送について</div>
                            </label>
                            <div class="col-sm-9">
                                <div class="description">
                                    <h2>納期ならびに発送について</h2>
                                    <p>
                                        商品お届けの準備が整いましたら、<br>
                                        弊社より発送予定日と共に決済のご案内をメール致します。<br>
                                        ご案内後7日以内にご決済の確認が取れない場合、<br>
                                        ご注文はキャンセル扱いとさせていただきますのでご注意下さい。<br>
                                        <br>
                                        ご決済後発送時期のご調整等は承る事が出来かねます。<br>
                                        予め配送先ならびに車両等についてご準備いただいた上、<br>
                                        購入をお申し込みいただきますようお願い申し上げます。
                                    </p>

                                    {{-- <?php
                                    print getCheckboxFromMasterData2 ($check_ay2, 'name="user_check_send[]"', "", $user_check_send, '<label>','</label>');
                                    ?>
                                    <?= $error_ay["user_check_send"] ?> --}}
                                    <label for="">
                                        {{ Form::checkbox('user_check_send', 1, old('user_check_send', null)) }}
                                        確認事項に同意する
                                    </label>
                                </div>
                            </div>
                        </div>

                        <?php
                        if($cart_status['mount'] == 1){
                        ?>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">
                                <div class="form-bg"><span class="badge badge-pill badge-danger">必須</span>取付確認事項</div>
                            </label>
                            <div class="col-sm-9">
                                <div class="description">
                                    <h2>取り付けを希望されるお客様へ</h2>
                                    <p>
                                        製品代/塗装代/送料/取付工賃をまとめた総額をお振込みまたはクレジットカードにてダムドへお支払いただきます。<br>
                                        <br>
                                        取り付け店舗紹介は、株式会社インプルーブが提供する「ゴーゴーガレージ」との連携サービスです。ご利用にあたり下記ゴーゴーガレージカスタムパーツ取付サービスの注意事項ならびにご利用規約に同意が必要となります。必ずご一読ください。<br>
                                    </p>
                                    <br>
                                    <p>
                                        <a href="/howto/rules.html" target="_blank"><strong>カスタムパーツ取付サービスのご利用規約ならび注意事項</strong></a>
                                    </p>

                                    <textarea cols="50" rows="10">
                                        【ダムド取付店舗紹介サービスご利用注意事項】
                                        
                                        ●	弊社指定の一部商品を除き、エアロパーツ等外装部品の取付に関しましては、塗装済み商品のみが対象となります。

                                        ●	当サービスは、株式会社インプルーブが提供するサービス「ゴーゴーガレージ」との提携によるサービスです。インプルーブ社が提供する下記「カスタムパーツ取付サービスご利用規約」を必ずご確認いただきますようお願い申し上げます。また、取付に伴う日程調整等においてゴーゴーガレージよりお客様へご連絡が必要となりますので、予めご了承下さい。

                                        ●	本取付サービスの対象は、株式会社ダムドから直接ご購入をいただき、指定の取付工場へダムドから直送した新品未開封パーツのみとなります。

                                        ●	当サービスは、株式会社インプルーブが提供するサービス「ゴーゴーガレージ」との提携によるサービスです。取付に伴う日程調整等においてゴーゴーガレージよりお客様へご連絡が必要となりますので、予めご了承下さい。

                                        ●	違法改造車は車両の受け入れができません。作業後に違法改造状態になると判断した場合は、作業をお断りさせて頂きます。

                                        ●	車両に適合した規格サイズのみ取り付けを行います。規定の取付方法と異なる場合、商品・車両の特殊な加工をご希望の場合、お断りすることがあります。取付に伴い、該当パーツの取付説明書に記載がない加工や他部品の脱着が必要となった場合、別途料金が必要となります。

                                        ●	作業後に元に戻す作業が発生した場合は、別途料金が必要となります。

                                        ●	作業後に不要となった部品処分をご希望される場合は、別途処分費用が必要となります。ご希望の場合は、事前お見積りさせて頂きます。

                                        ●	上記追加料金については、取付工場へ直接現金にてお支払い下さい。

                                        ●	取付商品は、弊社規定に基づき、取付工場をお客様へご案内後、取付工場へ直接発送としております。

                                        ●	1決済につき取付車両は1台としております。2台以上の作業をご希望の場合は、決済を分けてご購入をお願い致します。

                                        ●	塗装済み外装パーツ商品の場合、商品加工によるチリ合わせ等のご調整はお受けできません。予めご了承ください。

                                        ●	弊社塗装済み商品は、各自動車メーカー指定色番号と同様の塗料にて塗装を行いますが、ボディの日焼けや経年劣化等によるお客さまの車両状態、また新車であってもベースとなる下地素材の違いや車体毎の個体差等複雑な条件により、色味に若干の誤差が発生する可能性がございます。取付作業後、色味の誤差によるキャンセル、ご返金は承ることができませんので、予めご了承ください。


                                        【サービスご利用の流れとキャンセル等に関するご注意事項】

                                        ●	本サービスは、取付作業確定時にゴーゴガレージよりメールにて「サービスチケット」を発行致します。この「サービスチケット」を作業当日取付工場に提示することで、本人確認とし取付作業を行わせて頂きます。ご利用の際は、「サービスチケット」をご持参頂きますようお願い致します。

                                        ●	取付工賃を含めた商品のご決済後、車両情報等の確認をさせて頂いております。確認メール送信後30日を経過してもご返信頂けない場合は、ご依頼はキャンセルとさせて頂きます。

                                        ●	取付工場でご提示頂くサービスチケットはメールにて送信致します。また、サービスチケットの有効期限はサービスチケット送信後から60日までとさせて頂いております。サービスチケットでご対応可能なパーツは、株式会社ダムドから直接購入し、ダムドより取付店舗へ直接配送した未開封の新品パーツのみです。

                                        ●	上記【ダムド取付店舗紹介サービスご利用注意事項】の記載の通り、取付交換の別途料金または取付不可に関する規定がございます。該当する項目により、取付または交換が出来なかった場合でも、ご返金は出来ません。事前に必ず注意事項をご確認下さい。

                                        ●	納車時の確認以降ご返金はいたしかねます。予めご了承ください。


                                        ●	ご案内する取付工場は、該当製品の取付作業に慣れている工場を優先的にご案内いたします。距離等も含め、取付前に予めお客様へゴーゴーガレージよりご相談をさせていただきます。こちらのご案内時に取付をキャンセルされた場合、取付工賃のみダムドより返金をさせていただきますが、取付工賃を除く商品代金は返金の対象外となります。予めご了承ください。

                                        ●	お客様の事情により作業を実施しない場合においても、返金等は行いません。お客様の事情により作業を実施せず、かつ取付商品が取付工場へ到着している場合は、お客様負担で取付商品の引取りをお願い致します。


                                        【カスタムパーツ取付サービスご利用規約】

                                        ■本規約

                                        株式会社インプルーブ(以下「当社」といいます。)が提供するカスタムパーツ取付サービス(以下「本サービス」といいます。)の利用に関して、本サービスを利用するお客様(以下「利用者」といいます。)と当社との間で定めるものとします。


                                        ■本サービスの定義

                                        本サービスは利用者が、当社と提携した販売会社から購入した自動車カスタムパーツについて当社の提携工場を紹介するサービスです。


                                        ■利用資格

                                        利用者は、本規約に賛同できる方で、満 20 歳以上の自動車等を運転する資格(運転免許証)をお持ちの方に限ります。


                                        利用希望者が次のいずれかに該当すると判断した場合には、利用を承認しないことがあります。

                                        他人、架空の個人情報又は虚偽の個人情報を利用するなど、利用の内容に虚偽があった場合

                                        (他の利用者になりすました場合も該当)

                                        過去に本規約に違反し、本サービスの利用を制限された場合

                                        ・ その他、当社が利用を承認することが適切でないと判断した場合

                                        ・ 盗難車、事故・犯罪の痕跡を隠蔽・消滅する目的での利用

                                        ・ 違法改造車、車検不適合車のサービス利用

                                        法令や条例に違反する行為や犯罪行為又は、違反するおそれのある行為や犯罪行為に結びつくおそれのある行為

                                        その他、当社が利用を承認することが適切でないと判断した場合


                                        利用者が上記の禁止行為のうちいずれか一つでも行った場合、当社は当該利用者の利用資格を事前の通知無しに停止することができ、以後の利用を禁止することができるものとします。


                                        ■個人情報の取り扱い

                                        当社は、本サービスを提供するにあたり提携先から提供された個人情報を本サービスにのみ使用し、それ以外の目的で使用することはありません。


                                        ■利用料金の支払い・キャンセルについて

                                        商品発送前に当社にキャンセルのお申し出があった場合は、キャンセル料等は発生しません。

                                        商品発送後に当社にキャンセルのお申し出があった場合は、利用料金の100%をキャンセル料および受取代行料金として請求します。またその際の発送済み商品については利用者負担で引き取りをお願いします。

                                        商品の型番違いや、その他の事由により取付が行えず、車両を元の状態に戻す場合、追加料金が発生する場合があります。


                                        ■免責

                                        利用者は、本サービスの利用に際し、利用者が第三者及び取付工場に与えた損害の一切の責任を負うものとします。この損害については利用者の責任とし、当社及び株式会社ダムド、取付工場に損害を与えないこととします。また、当社が損害を被った場合、これを速やかに補償するものとします。

                                        当社ならびに株式会社ダムドは、天災地変、交通の閉塞その他不可抗力の発生等、利用者及び取付工場のいずれの責に帰することができない事由により本サービスの提供ができない場合、その損害を賠償する責任を一切負わないものとします。


                                        ■反社会的勢力の排除

                                        当社は、暴力団員等の本サービスの利用は認めません。暴力団員等とは、自ら又は自らの役員が、暴力団、暴力団員、暴力団員でなくなった時から 5 年を経過しない者、暴力団準構成員、暴力団関係企業、総会屋、社会運動等標ぼうゴロ又は特殊知能暴力集団等その他これらに準じる者を言います。

                                        利用者は、本規約に同意した時点で、暴力団員等に該当しないこと、且つ将来にわたっても該当しないことを表明し、保証したものとみなします。
                                        利用時に、当該利用者が暴力団員等であることが判明した場合、本サービスを受けることはできません。


                                        ■定めなき事項

                                        本規約に定めなき事項が発生した場合は双方誠意をもって協議の上、解決に当たるものとします。


                                        2021 年 9 月 1 日 制定・施行
                                    </textarea>

                                    {{-- <?php
                                        print getCheckboxFromMasterData2 ($check_ay, 'name="user_check[]"', "", $user_check, '<label>','</label>');
                                    ?>
                                    <?= $error_ay["user_check"] ?> --}}
                                    <label for="">
                                        {{ Form::checkbox('user_check_send2', 1, old('user_check_send2', null)) }}
                                        確認事項に同意する
                                    </label>
                                </div>
                            </div>
                        </div>

                        <?php
                        }
                        ?>

                        <?php
                        if($cart_status['paint'] != 1){
                        ?>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">
                                <div class="form-bg"><span class="badge badge-pill badge-danger">必須</span>未塗装品確認事項</div>
                            </label>
                            <div class="col-sm-9">
                                <div class="description">
                                    <h2>未塗装品関する注意事項</h2>
                                    <p>
                                        未塗装品はお客様ご自身にて塗装を御手配いただくことが前提の商品となります。<br>
                                        そのままの状態ではご装着いただくことはできません。<br>
                                        <br>
                                        また、未塗装品の商品では面を平す為、<br>
                                        商品本体をヤスリ等で削るなど塗装に向けた加工が行われております。<br>
                                        予めご了承の上、ご注文いただきますようお願い申し上げます。
                                    </p>

                                    {{-- <?php
                                    print getCheckboxFromMasterData2 ($check_ay2, 'name="user_nopaint_check[]"', "", $user_nopaint_check, '<label>','</label>');
                                    ?>
                                    <?= $error_ay["user_nopaint_check"] ?> --}}
                                    <label for="">
                                        {{ Form::checkbox('nopaint_check', 1, old('nopaint_check', null)) }}
                                        確認事項に同意する
                                    </label>
                                </div>
                            </div>
                        </div>

                        <?php
                        }
                        ?>

                        <?php
                        if($cart_status['paint'] == 1){
                        ?>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">
                                <div class="form-bg"><span class="badge badge-pill badge-danger">必須</span>塗装品確認事項</div>
                            </label>
                            <div class="col-sm-9">
                                <div class="description">
                                    <h2>純正色塗装済み品をご検討のお客さま</h2>
                                    <p>
                                        弊社塗装済み商品は各自動車メーカー指定色番号の塗料にて塗装いたしますが、<br>
                                        紫外線等によるボディ塗装面の日焼けや経年劣化等による各お客さまの車両状態、<br>
                                        また新車であってもベースとなる下地素材の違い等複雑な条件により、<br>
                                        色味に若干の誤差が発生する場合がございます。<br>
                                        <br>
                                        予めご了承の上、購入をお願い申し上げます。
                                    </p>

                                    {{-- <?php
                                    print getCheckboxFromMasterData2 ($check_ay2, 'name="user_check2[]"', "", $user_check2, '<label>','</label>');
                                    ?>
                                    <?= $error_ay["user_check2"] ?> --}}
                                    <label for="">
                                        {{ Form::checkbox('user_check_send3', 1, old('user_check_send3', null)) }}
                                        確認事項に同意する
                                    </label>
                                </div>
                            </div>
                        </div>

                        <?php
                        }
                        ?>


                        <?php

                        if($cart_status['paint'] == 1 and $cart_status['mount'] ==2){
                            $check_damd = [
                                1 => '確認事項に同意する'
                            ];
                            $mount_info_ay = [
                                1 => '干渉や取り外しの可能性有り',
                                2 => '干渉や取り外しの可能性無し'
                            ];

                            //詳細記入のデフォルト表示
                            // if($user_mount_info1==1){
                            //     $mount_detail = "";
                            // }else{
                            //     $mount_detail = " style='display:none'";
                            // }
                        ?>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">
                                <div class="form-bg"><span class="badge badge-pill badge-danger">必須</span>取付箇所の状態</div>
                            </label>
                            <div class="col-sm-9">
                                <div class="description">
                                    <h2>
                                        ダムド製パーツの取付に際し、<br>
                                        他社製パーツと干渉の可能性や<br>
                                        他社製パーツの取り外しは必要ですか。
                                    </h2>
                                    <p>
                                        見積もりのパーツ取付工賃はノーマル車両に取り付けた想定の工賃となっております。
                                        別途他社製パーツの取り外しや他パーツとの干渉に伴う加工が必要となった場合、
                                        内容によって別途工賃が発生するケースがございます。<br>
                                        可能な限り正確な情報を申請いただきますようご協力お願い申し上げます。
                                    </p>

                                    {{-- <?=
                                    getRadioFromMasterData ($mount_info_ay,'name="user_mount_info1"', "" , $user_mount_info1, '<label style="margin-right:10px;">','</label>  ')
                                    ?>
                                    <?= $error_ay["user_mount_info1"] ?> --}}

                                    @foreach($mount_info_ay as $key => $val)
                                      {{ Form::radio('user_mount_info1', $key, ($key == old('user_mount_info1', null)), ['id' => 'mount'.$key]) }}
                                      {{ Form::label('mount'.$key, $val) }}
                                    @endforeach
                                </div>
                            </div>
                        </div>



                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">
                                <div class="form-bg"><span class="badge badge-pill badge-danger">必須</span>ダムド取付について</div>
                            </label>

                            <div class="col-sm-9">
                                <div class="description">
                                    <p>
                                        ダムド本社での取付けは平日9:00〜18:00のみのご対応となります。<br>
                                        完全予約制となります為、正式受注後、製品の準備が整い次第、<br>
                                        日程調整のご連絡を弊社から送らせていただきます。<br>
                                        （製品の納期は別途かかりますので、ご注意ください。）<br>
                                        <br>
                                        なお、施工内容によっては即日装着が不可のケースもございます。<br>
                                        車両をお預かりするケースもございます為、予めご了承ください。<br>
                                        なお、代車等のご用意はございません為、ご注意ください。
                                    </p>

                                    {{-- <?=
                                    getCheckboxFromMasterData2 ($check_damd, 'name="user_check_damd[]"', "", $user_check_damd, '<label>','</label>');
                                    ?>\
                                    <?= $error_ay["user_check_damd"] ?> --}}
                                    <label for="">
                                        {{ Form::checkbox('user_check_send3', 1, old('user_check_send3', null)) }}
                                        確認事項に同意する
                                    </label>

                                </div>
                            </div>
                        </div>



                        {{-- <div class="form-group row" id="mount_info_detail"<?= $mount_detail ?>> --}}
                        <div class="form-group row" id="mount_info_detail">
                            <label class="col-sm-3 col-form-label">
                                <div class="form-bg"><span class="badge badge-pill badge-danger">必須</span>干渉や取り外しの可能性有り</div>
                            </label>
                            <div class="col-sm-9">
                                <div class="description">
                                    <p>
                                    「干渉や取り外しの可能性有り」とお答えの方は、車両状態について詳細を可能限りご教示お願いいたします。
                                    </p>
                                    {{-- <textarea name="user_mount_info2" class="form-control" id="exampleFormControlTextarea1" placeholder="他社製パーツ名や装着年数、装着状態など可能限り詳細をご記入ください。" rows="3"><?= $user_comment ?></textarea>
                                    <?= $error_ay["user_mount_info2"] ?> --}}
                                    {{ Form::textarea('user_mount_info2', old('user_mount_info2', null), ['class' => 'form-control', 'id' => 'exampleFormControlTextarea1', 'placeholder' => '他社製パーツ名や装着年数、装着状態など可能限り詳細をご記入ください。', 'rows' => '3']) }}
                                </div>
                            </div>
                        </div>

                        <?php
                        }
                        ?>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">
                                <div class="form-bg">備考</div>
                            </label>
                            <div class="col-sm-9">
                                {{-- <textarea name="user_comment" class="form-control" id="exampleFormControlTextarea1" rows="3"><?= $user_comment ?></textarea>
                                <?= $error_ay["user_comment"] ?> --}}
                                {{ Form::textarea('user_comment', old('user_comment', null), ['class' => 'form-control']) }}
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">
                                <div class="form-bg"><a style="text-decoration:underline;" target="_blank" href="/privacy/"><span class="badge badge-pill badge-danger">必須</span>プライバシーポリシー</a></div>
                            </label>

                            <div class="col-sm-9">
                                {{-- <?php
                                print getCheckboxFromMasterData2 ($policy_ay, 'name="user_policy[]"', "", $user_policy, '<label>','</label>');
                                ?>
                                <?= $error_ay["user_policy"] ?> --}}
                                <label for="">
                                    {{ Form::checkbox('user_policy', 1, old('user_policy', null)) }}
                                    同意する
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="text-center mt-5">
                    <button type="submit" name="reg" value="1" class="btn btn-danger">確認</button>



                <!--<div class="unique_area_back text-center mt-2" style="text-decoration: underline">商品の仕様選択へ戻る</div>-->
                {{-- <!-- 送信見積データ -->

                    <!--

                <input type="hidden" name="file1" value="<?= $file1 ?>">
                <input type="hidden" name="file2" value="<?= $file2 ?>">
                <input type="hidden" name="file3" value="<?= $file3 ?>">

                <input type="hidden" name="item_id" value="<?= $item_id ?>" />
                <input type="hidden" name="item_total" value="<?= $item_total ?>" />
                <input type="hidden" name="item_loan6" value="<?= $item_loan6 ?>" />
                <input type="hidden" name="item_loan12" value="<?= $item_loan12 ?>" />
                <input type="hidden" name="item_loan18" value="<?= $item_loan18 ?>" />
                <input type="hidden" name="item_loan24" value="<?= $item_loan24 ?>" />
                <input type="hidden" name="item_loan36" value="<?= $item_loan36 ?>" />
                <input type="hidden" name="item_id" value="<?= $item_id ?>" />
                <input type="hidden" name="item_price" value="<?= $item_price ?>" />
                <input type="hidden" name="item_p_cost" value="<?= $item_p_cost ?>" />
                <input type="hidden" name="item_m_cost" value="<?= $item_m_cost ?>" />
                <input type="hidden" name="item_class_cost" value="<?= $item_class_cost ?>" />
                <input type="hidden" name="items_paint" value="<?= $items_paint ?>" />
                <input type="hidden" name="item_paint_only" value="<?= $item_paint_only ?>" />
                <input type="hidden" name="car_name" value="<?= $car_name ?>" />
                <input type="hidden" name="item_name" value="<?= $row["item_name"] ?>" />
                <input type="hidden" name="items_mount" value="<?= $items_mount ?>" />
                <input type="hidden" name="items_place" value="<?= $items_place ?>" />
                <input type="hidden" name="page_directory" value="<?= $page_directory ?>" />
                <input type="hidden" name="mitsumori_str" value="<?= $mitsumori ?>"> --}}
                -->

                </div>

            </div><!-- common_form -->
        </form>
    </div>
</div>
@endsection