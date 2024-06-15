<?php
//このカスタムを適用するアイテムid
$item_cs_form_ary=array();
$item_cs_form_ary=array(1183,1206,1207,1292,1293);

//944 983 945 コンプリートキット

//配列定義------------

//パターンA
$colorA = array(
  //"未塗装品素地",
"シフォンアイボリーメタリック (ZVG) × 粗目マットシルバー	",
"オフブルーメタリック (ZYW) × 粗目マットシルバー",
// "ブルーイッシュブラックパール (ZJ3) × 粗目マットシルバー	",
"クールカーキパールメタリック (ZVD) × 粗目マットシルバー",
// "アクティブイエロー (ZWH) × 粗目マットシルバー",
"シフォンアイボリーメタリック (ZVG) × スペリアホワイト (26U)",
"オフブルーメタリック (ZYW) × スペリアホワイト (26U)",
// "ブルーイッシュブラックパール (ZJ3) × スペリアホワイト (26U)",
"クールカーキパールメタリック (ZVD) × スペリアホワイト (26U)",
// "アクティブイエロー (ZWH) × スペリアホワイト (26U)"
);

//パターンB
$colorB = array(
  //"未塗装品素地",
  "粗目マットシルバー",
  "スペリアホワイト (26U)",
);

//ホイールカラー
$colorWheel = array(
    "ゴールド",
    "ブラック",
    "シルバー"
);

/*
//パターンC
$colorC = array(
  //"未塗装品素地",
  "粗目マットブラック塗装"
);
//パターンD
$colorD = array(
//"未塗装品素地",
"粗目マットブラック塗装",
"ピュアホワイトパール(ZVR)×粗目マットブラック塗装",
"シルキーシルバーメタリック(Z2S)×粗目マットブラック塗装",
"ジャングルグリーン(ZZC)×粗目マットブラック塗装",
"ブルーイッシュブラックパール3(ZJ3)×粗目マットブラック塗装",
"ミディアムグレー(ZVL)×粗目マットブラック塗装",
"ブリスクブルーメタリック(ZWY)×粗目マットブラック塗装",
"シフォンアイボリーメタリック(ZVG)×粗目マットブラック塗装",
"キネティックイエロー(ZZB)×粗目マットブラック塗装",
"スペリアホワイト (26U)×粗目マットブラック塗装"
);

//パターンE
$colorE = array(
"ピュアホワイトパール(ZVR)",
"シルキーシルバーメタリック(Z2S)"	,
"ジャングルグリーン(ZZC)",
"ブルーイッシュブラックパール3(ZJ3)",
"ミディアムグレー(ZVL)",
"ブリスクブルーメタリック(ZWY)",
"シフォンアイボリーメタリック(ZVG)",
"キネティックイエロー(ZZB)"
);



//ホイールカラー
$colorWheel = array(
  "マットブラック",
  "マーガレットホワイト"
);

//エンブレムカラー
$colorEnb = array(
"マットブラック",
"マットシルバー"
);

//有無
$onoff = array(
"有",
"無"
);

//ホイールカラー
$colorWheelWild = array(
  "アイアンブラック",
  "コットンホワイト"
);




*/
//アイテムごとの各項目定義
if($item_id==1183){

    if($item_paint!=2){
        $car_info = '
        <select name="user_color" id="color" class="form-control" required>
        '.getOptionHtml2($colorA,$user_color).'
        </select>
        <div style="line-height:1.3em;">
        <small>
        ※ 塗装済み品の場合、各ﾊﾟｰﾂの塗り分けは下記のとおりとなります。<br><br>
        【ｸﾞﾘﾙ×ﾗｲﾄｶｳﾙ】<br>純正塗装色よりご選択ください。<br>塗装は粗目ﾏｯﾄｼﾙﾊﾞｰ×ｶﾞﾝﾒﾀ×純正塗装色の塗り分けとなります。<br><br>
        【ﾊﾞﾝﾊﾟｰｶﾞｰﾆｯｼｭ】<br>粗目ﾏｯﾄｼﾙﾊﾞｰまたはｽﾍﾟﾘｱﾎﾜｲﾄ (26U) からご選択ください。<br><br>

        ※ 弊社塗装済み品に設定がない純正色は未塗装品をご購入いただき、<br>お客様にて塗装のご手配を行って頂きますようお願い申し上げます。
        </small>
        <input type="hidden" name="user_color_info" value="※フロントバンパーは荒目マットブラック×ガンメタの2色塗り分けとなります。">
        </div>
        ';

        //必須への追加
        $required_request[] = "user_color";
        //エラーhtml生成用
        $required_request_item = "user_color";

        //確認画面用
        $car_info_confirm = '
        塗装色：'.$user_color;
    }

}elseif($item_id==1206 || $item_id==1207){

    if($item_paint!=2){
        $car_info = '
      <select name="user_color" id="color" class="form-control" required>
      '.getOptionHtml2($colorA,$user_color).'
      </select>
    <div style="line-height:1.3em;">
    <small>
    ※ 塗装済み品の場合、各ﾊﾟｰﾂの塗り分けは下記のとおりとなります。<br><br>
    【ｸﾞﾘﾙ×ﾗｲﾄｶｳﾙ】<br>純正塗装色よりご選択ください。<br>塗装は粗目ﾏｯﾄｼﾙﾊﾞｰ×ｶﾞﾝﾒﾀ×純正塗装色の塗り分けとなります。<br><br>
    【ﾊﾞﾝﾊﾟｰｶﾞｰﾆｯｼｭ】<br>粗目ﾏｯﾄｼﾙﾊﾞｰまたはｽﾍﾟﾘｱﾎﾜｲﾄ (26U) からご選択ください。<br><br>

    ※ 弊社塗装済み品に設定がない純正色は未塗装品をご購入いただき、<br>お客様にて塗装のご手配を行って頂きますようお願い申し上げます。
    </small>
    <input type="hidden" name="user_color_info" value="※フロントバンパーは荒目マットブラック×ガンメタの2色塗り分けとなります。">
    </div>
    ';

        //必須への追加
        $required_request[] = "user_color";
        //エラーhtml生成用
        $required_request_item = "user_color";

        //確認画面用
        $car_info_confirm = '
    塗装色：'.$user_color;

    } 

        $car_info_title_ary[1] = "ホイールカラー";
        $car_info_html_ary[1].= '
    <select name="w_color" class="form-control" required>
    '.getOptionHtml2($colorWheel,$w_color).'
    </select>
      ';
        $required_request[] = "w_color";
        $required_request_item_ary[1] = "w_color";
        //確認画面用
        $car_info_confirm_ary[] = $car_info_title_ary[1].'：'.$w_color;


}elseif($item_id==1292){
  if($item_paint!=2){
    $car_info = '
    <select name="user_color" id="color" class="form-control" required>
    '.getOptionHtml2($colorA,$user_color).'
    </select>
    <div style="line-height:1.3em;">
    <small>
    ※ 塗装済み品の場合、粗目ﾏｯﾄｼﾙﾊﾞｰ×ｶﾞﾝﾒﾀ×純正塗装色の塗り分けとなります。<br>
    ※ 弊社塗装済み品に設定がない純正色は未塗装品をご購入いただき、<br>お客様にて塗装のご手配を行って頂きますようお願い申し上げます。
    </small>
    <input type="hidden" name="user_color_info" value="※ 塗装済み品の場合、粗目ﾏｯﾄｼﾙﾊﾞｰ×ｶﾞﾝﾒﾀ×純正塗装色の塗り分けとなります。
    ※ 弊社塗装済み品に設定がない純正色は未塗装品をご購入いただき、
    お客様にて塗装のご手配を行って頂きますようお願い申し上げます。">
    </div>
    ';

    //必須への追加
    $required_request[] = "user_color";
    //エラーhtml生成用
    $required_request_item = "user_color";

    //確認画面用
    $car_info_confirm = '
    塗装色：'.$user_color;
  }
}elseif($item_id==1293){
  if($item_paint!=2){
    $car_info = '
    <select name="user_color" id="color" class="form-control" required>
    '.getOptionHtml2($colorB,$user_color).'
    </select>
    <div style="line-height:1.3em;">
    <small>
    ※ 塗装済み品の場合、粗目ﾏｯﾄｼﾙﾊﾞｰまたはｽﾍﾟﾘｱﾎﾜｲﾄ (26U) からご選択ください。<br>
    ※ 弊社塗装済み品に設定がない純正色は未塗装品をご購入いただき、<br>お客様にて塗装のご手配を行って頂きますようお願い申し上げます。
    </small>
    <input type="hidden" name="user_color_info" value="※ 塗装済み品の場合、粗目ﾏｯﾄｼﾙﾊﾞｰまたはｽﾍﾟﾘｱﾎﾜｲﾄ (26U) からご選択ください。
    ※ 弊社塗装済み品に設定がない純正色は未塗装品をご購入いただき、
    お客様にて塗装のご手配を行って頂きますようお願い申し上げます。">
    </div>
    ';

    //必須への追加
    $required_request[] = "user_color";
    //エラーhtml生成用
    $required_request_item = "user_color";

    //確認画面用
    $car_info_confirm = '
    塗装色：'.$user_color;
  }
}

 ?>
