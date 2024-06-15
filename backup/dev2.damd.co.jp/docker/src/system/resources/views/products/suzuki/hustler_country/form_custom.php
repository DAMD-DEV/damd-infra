<?php
//このカスタムを適用するアイテムid
$item_cs_form_ary=array();
$item_cs_form_ary=array(1229,1230,1235,1236);


//配列定義------------

//パターンA
$colorA = array(
  //"未塗装品素地",
    "クールカーキパールメタリック (ZVD)",
"シフォンアイボリーメタリック (ZVG)",
"オフブルーメタリック (ZYW)",
"ピュアホワイトパール (ZVR)	",
);

//ホイールカラー
$colorWheel = array(
    "ゴールド",
    "ブラック",
    "シルバー"
);

//アイテムごとの各項目定義
//if($item_id==1229||$item_id==1230){
if($item_id==1229){
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
/*
  if($item_paint==2 and $user_color==""){
    $user_color="未塗装品素地";
  }
*/
    /*
if($item_paint!=2){
      $car_info = '
      <select name="user_color" id="color" class="form-control" required>
      '.getOptionHtml2($colorA,$user_color).'
      </select>
    <div style="line-height:1.3em;">
    <small>
    ※ 各ﾊﾟｰﾂの塗り分けは下記のとおり指定となります。予めご了承ください。<br>
　  【ﾎﾞﾝﾈｯﾄﾌｰﾄﾞ】 : 純正塗装色×ｶﾞﾝﾒﾀﾘｯｸ<br>
　  【ﾎﾞﾝﾈｯﾄｶﾞｰﾆｯｼｭ】 : ｶﾞﾝﾒﾀ×ﾏｯﾄﾌﾞﾗｯｸ<br>
　  【ﾌﾛﾝﾄｸﾞﾘﾙ】 : 純正塗装色×ｶﾞﾝﾒﾀﾘｯｸ<br>
　  【ﾌﾛﾝﾄﾊﾞﾝﾊﾟｰ】 : ﾏｯﾄﾌﾞﾗｯｸ×ｶﾞﾝﾒﾀﾘｯｸ
    </small>
    <input type="hidden" name="user_color_info" value="※ 各ﾊﾟｰﾂの塗り分けは下記のとおり指定となります。予めご了承ください。
　  【ﾎﾞﾝﾈｯﾄﾌｰﾄﾞ】 : 純正塗装色×ｶﾞﾝﾒﾀﾘｯｸ
　  【ﾎﾞﾝﾈｯﾄｶﾞｰﾆｯｼｭ】 : ｶﾞﾝﾒﾀ×ﾏｯﾄﾌﾞﾗｯｸ
　  【ﾌﾛﾝﾄｸﾞﾘﾙ】 : 純正塗装色×ｶﾞﾝﾒﾀﾘｯｸ
　  【ﾌﾛﾝﾄﾊﾞﾝﾊﾟｰ】 : ﾏｯﾄﾌﾞﾗｯｸ×ｶﾞﾝﾒﾀﾘｯｸ
    ">
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
*/


}

if($item_id==1235){
  if($item_paint!=2){
    $car_info = '
    <select name="user_color" id="color" class="form-control" required>
    '.getOptionHtml2($colorA,$user_color).'
    </select>
    <div style="line-height:1.3em;">
      <small>
        ※ 各ﾊﾟｰﾂの塗り分けは下記のとおり指定となります。予めご了承ください。<br>
        【ﾎﾞﾝﾈｯﾄﾌｰﾄﾞ】 : 純正塗装色×ｶﾞﾝﾒﾀﾘｯｸ<br>
        【ﾎﾞﾝﾈｯﾄｶﾞｰﾆｯｼｭ】 : ｶﾞﾝﾒﾀ×ﾏｯﾄﾌﾞﾗｯｸ<br>
        【ﾌﾛﾝﾄｸﾞﾘﾙ】 : 純正塗装色×ｶﾞﾝﾒﾀﾘｯｸ×ﾏｯﾄﾌﾞﾗｯｸ<br>
        【ﾌﾛﾝﾄﾊﾞﾝﾊﾟｰ】 : ﾏｯﾄﾌﾞﾗｯｸ×ｶﾞﾝﾒﾀﾘｯｸ"	
      </small>
      <input type="hidden" name="color_info" value="
        【ﾎﾞﾝﾈｯﾄﾌｰﾄﾞ】 : 純正塗装色×ｶﾞﾝﾒﾀﾘｯｸ<br>
        【ﾎﾞﾝﾈｯﾄｶﾞｰﾆｯｼｭ】 : ｶﾞﾝﾒﾀ×ﾏｯﾄﾌﾞﾗｯｸ<br>
        【ﾌﾛﾝﾄｸﾞﾘﾙ】 : 純正塗装色×ｶﾞﾝﾒﾀﾘｯｸ×ﾏｯﾄﾌﾞﾗｯｸ<br>
        【ﾌﾛﾝﾄﾊﾞﾝﾊﾟｰ】 : ﾏｯﾄﾌﾞﾗｯｸ×ｶﾞﾝﾒﾀﾘｯｸ"	
      ">
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
  $car_info_html_ary[1].= getRadioFromMasterData2 ($colorWheel,'name="w_color"', "" , $w_color, '<label style="margin-right:10px;">','</label>  ');
  $required_request[] = "w_color";
  $required_request_item_ary[1] = "w_color";
  //確認画面用
  $car_info_confirm_ary[] = $car_info_title_ary[1].'：'.$w_color;

}
if($item_id==1236){
  if($item_paint!=2){
    $car_info = '
    <select name="user_color" id="color" class="form-control" required>
    '.getOptionHtml2($colorA,$user_color).'
    </select>
    <div style="line-height:1.3em;">
      <small>
        ※ 各ﾊﾟｰﾂの塗り分けは下記のとおり指定となります。予めご了承ください。<br>
        【ﾎﾞﾝﾈｯﾄﾌｰﾄﾞ】 : 純正塗装色×ｶﾞﾝﾒﾀﾘｯｸ<br>
        【ﾎﾞﾝﾈｯﾄｶﾞｰﾆｯｼｭ】 : ｶﾞﾝﾒﾀ×ﾏｯﾄﾌﾞﾗｯｸ<br>
        【ﾌﾛﾝﾄｸﾞﾘﾙ】 : 純正塗装色×ｶﾞﾝﾒﾀﾘｯｸ×ﾏｯﾄﾌﾞﾗｯｸ<br>
        【ﾌﾛﾝﾄﾊﾞﾝﾊﾟｰ】 : ﾏｯﾄﾌﾞﾗｯｸ×ｶﾞﾝﾒﾀﾘｯｸ"	
      </small>
      <input type="hidden" name="color_info" value="
        【ﾎﾞﾝﾈｯﾄﾌｰﾄﾞ】 : 純正塗装色×ｶﾞﾝﾒﾀﾘｯｸ<br>
        【ﾎﾞﾝﾈｯﾄｶﾞｰﾆｯｼｭ】 : ｶﾞﾝﾒﾀ×ﾏｯﾄﾌﾞﾗｯｸ<br>
        【ﾌﾛﾝﾄｸﾞﾘﾙ】 : 純正塗装色×ｶﾞﾝﾒﾀﾘｯｸ×ﾏｯﾄﾌﾞﾗｯｸ<br>
        【ﾌﾛﾝﾄﾊﾞﾝﾊﾟｰ】 : ﾏｯﾄﾌﾞﾗｯｸ×ｶﾞﾝﾒﾀﾘｯｸ"	
      ">
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
