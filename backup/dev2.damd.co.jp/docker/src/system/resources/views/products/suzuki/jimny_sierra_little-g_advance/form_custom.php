<?php

//このカスタムを適用するアイテムid

$item_cs_form_ary=array();

$item_cs_form_ary=array(1237,1238,1239,1240,1241,1242,1243,1244,1245,1291);



//パターンA

$colorA = array(
  "ピュアホワイトパール（ZVR）",
  "ブルーイッシュブラックパール3(ZJ3)",
  "ジャングルグリーン(ZZC)",
  "ミディアムグレー(ZVL)",
  "シフォンアイボリーメタリック(ZVG)",
);


//パターンB

$colorB = array(
  "ピュアホワイトパール(ZVR) × マットガンメタリック",
  "ブルーイッシュブラックパール3(ZJ3) × マットガンメタリック",
  "ジャングルグリーン(ZZC) × マットガンメタリック",
  "ミディアムグレー(ZVL) × マットガンメタリック	",
  "シフォンアイボリーメタリック(ZVG) × マットガンメタリック",
);


//パターンC

$colorC = array(
  "ピュアホワイトパール（ZVR） × マットブラック × マットガンメタリック",
  "ブルーイッシュブラックパール3（ZJ3）× マットブラック × マットガンメタリック",
  "ジャングルグリーン（ZZC）× マットブラック × マットガンメタリック",
  "ミディアムグレー（ZVL）× マットブラック × マットガンメタリック",
  "シフォンアイボリーメタリック（ZVG）× マットブラック × マットガンメタリック",
);


//パターンD

$colorD = array(
  "ピュアホワイトパール（ZVR） × ピアノブラック",
  "ブルーイッシュブラックパール3（ZJ3）× ピアノブラック",
  "ジャングルグリーン（ZZC）× ピアノブラック",
  "ミディアムグレー（ZVL）× ピアノブラック",
  "シフォンアイボリーメタリック（ZVG）× ピアノブラック",
);

//ホイールカラー

$colorWheel = array(
  "ブラック",
  "シルバー"
);



// アイテムごとの各項目定義

if($item_id==1237 || $item_id == 1238 || $item_id == 1239){

  if($item_paint!=2){

    $car_info = '

    <select name="user_color" id="color" class="form-control" required>
  
    '.getOptionHtml2($colorA,$user_color).'
  
    </select>
  
    <div style="line-height:1.3em;">
    
    <small>
    
    ※ 各ﾊﾟｰﾂの塗り分けは下記のとおり指定となります。予めご了承ください。<br>
    【ﾎﾞﾝﾈｯﾄｶﾊﾞｰ】 : 純正塗装色<br>
    【ﾌﾛﾝﾄｸﾞﾘﾙ】 : 純正塗装色×ﾏｯﾄﾌﾞﾗｯｸ<br>
    【ﾌﾛﾝﾄﾊﾞﾝﾊﾟｰ】 : 純正塗装色×ﾏｯﾄﾌﾞﾗｯｸ ×ｶﾞﾝﾒﾀﾘｯｸ<br>
    【ｵｰﾊﾞｰﾌｪﾝﾀﾞｰ】 : 純正塗装色<br>
    【ﾘｱﾊﾞﾝﾊﾟｰ】 : 純正塗装色×ｶﾞﾝﾒﾀﾘｯｸ<br>
    【ｽﾍﾟｱﾀｲﾔｶﾊﾞｰ】 : 純正塗装色×ﾋﾟｱﾉﾌﾞﾗｯｸ
    
    </small>
    
    <input type="hidden" name="user_color_info" value="※ 各ﾊﾟｰﾂの塗り分けは下記のとおり指定となります。予めご了承ください。
    【ﾎﾞﾝﾈｯﾄｶﾊﾞｰ】 : 純正塗装色
    【ﾌﾛﾝﾄｸﾞﾘﾙ】 : 純正塗装色×ﾏｯﾄﾌﾞﾗｯｸ
    【ﾌﾛﾝﾄﾊﾞﾝﾊﾟｰ】 : 純正塗装色×ﾏｯﾄﾌﾞﾗｯｸ ×ｶﾞﾝﾒﾀﾘｯｸ
    【ｵｰﾊﾞｰﾌｪﾝﾀﾞｰ】 : 純正塗装色
    【ﾘｱﾊﾞﾝﾊﾟｰ】 : 純正塗装色×ｶﾞﾝﾒﾀﾘｯｸ
    【ｽﾍﾟｱﾀｲﾔｶﾊﾞｰ】 : 純正塗装色×ﾋﾟｱﾉﾌﾞﾗｯｸ">
    
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

  if($item_id != 1239) {
    //ホイール
    $car_info_title_ary[1] = "ホイールカラー";
    $car_info_html_ary[1].= getRadioFromMasterData2 ($colorWheel,'name="w_color"', "" , $w_color, '<label style="margin-right:10px;">','</label>  ');
    $required_request[] = "w_color";
    $required_request_item_ary[1] = "w_color";
    //確認画面用
    $car_info_confirm_ary[] = $car_info_title_ary[1].'：'.$w_color;
  }
}

if($item_id==1238){
  //ーーーー確認事項ーーーーーーー
  if($item_mount==1||$item_mount==2){
    $r_check_ay[1] = "確認しました";
    $car_info_title_ary[2] = "ホイールについて";
    $car_info_html_ary[2].= '
    <div class="description">
    純正タイヤへの巻替えは出来ません。別途タイヤのご購入が必要な為、必ずご用意をお願い致します。<br>
    '.getCheckboxFromMasterData2 ($r_check_ay, 'name="r_check[]" required', "", $r_check, '<label>','</label>')
    .'</div>';
    $required_request[] = "r_check";
    $required_request_item_ary[2] = "r_check";
    //確認画面用
    $car_info_confirm_ary[] = $car_info_title_ary[2].'：'.$r_check_ay[$r_check[0]];
  }
}

if($item_id==1240){

  if($item_paint!=2){

      $car_info = '

      <select name="user_color" id="color" class="form-control" required>

      '.getOptionHtml2($colorA,$user_color).'

      </select>

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

if($item_id==1243){

  if($item_paint!=2){

      $car_info = '

      <select name="user_color" id="color" class="form-control" required>

      '.getOptionHtml2($colorA,$user_color).'

      </select>

      <div style="line-height:1.3em;">
    
      <small>
      
      ※ 塗装済み品の場合は、純正塗装色×ﾏｯﾄﾌﾞﾗｯｸ ×ﾏｯﾄｶﾞﾝﾒﾀﾘｯｸの塗り分けとなります。
      
      </small>
      
      <input type="hidden" name="user_color_info" value="※ 塗装済み品の場合は、純正塗装色×ﾏｯﾄﾌﾞﾗｯｸ ×ﾏｯﾄｶﾞﾝﾒﾀﾘｯｸの塗り分けとなります。">
      
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

if($item_id==1241){

  if($item_paint!=2){

      $car_info = '

      <select name="user_color" id="color" class="form-control" required>

      '.getOptionHtml2($colorB,$user_color).'

      </select>

      <div style="line-height:1.3em;">
    
      <small>
      
      ※ 塗装済み品の場合は、純正塗装色×ﾏｯﾄﾌﾞﾗｯｸの2色塗り分けとなります。
      
      </small>
      
      <input type="hidden" name="user_color_info" value="※ 塗装済み品の場合は、純正塗装色×ﾏｯﾄﾌﾞﾗｯｸの2色塗り分けとなります。">
      
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

if($item_id==1245){

  if($item_paint!=2){

      $car_info = '

      <select name="user_color" id="color" class="form-control" required>

      '.getOptionHtml2($colorB,$user_color).'

      </select>

      <div style="line-height:1.3em;">
    
      <small>
      
      ※ 塗装済み品の場合は、純正塗装色×ﾏｯﾄｶﾞﾝﾒﾀﾘｯｸの2色塗り分けとなります。
      
      </small>
      
      <input type="hidden" name="user_color_info" value="※ 塗装済み品の場合は、純正塗装色×ﾏｯﾄｶﾞﾝﾒﾀﾘｯｸの2色塗り分けとなります。">
      
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

if($item_id==1244){

  if($item_paint!=2){

      $car_info = '

      <select name="user_color" id="color" class="form-control" required>

      '.getOptionHtml2($colorC,$user_color).'

      </select>

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

if($item_id==918||$item_id==1291){
  /*
  if($item_paint==2 and $user_color==""){
    $user_color="未塗装品素地";
  }*/


  if($item_paint!=2){
    $car_info = '
      <select name="user_color" id="color" class="form-control" required>
      '.getOptionHtml2($colorD,$user_color).'
      </select>
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

if($item_id==1237||$item_id==1238||$item_id==1239||$item_id==1245){
  $r_check_ay[1] = "確認しました";
  $car_info_title_ary[10] = "リアパーキングセンサーについて";
  $car_info_html_ary[10].= '
  <div class="description">
  本製品は、2024年1月以降受注を開始している<br>
  ﾘｱﾊﾟｰｷﾝｸﾞｾﾝｻｰ<ﾊﾞｯｸｿﾅｰ>装着車には対応しておりません。<br>
  該当車両でないことを確認いたします。<br>
  '.getCheckboxFromMasterData2 ($r_check_ay, 'name="r_check[]" required', "", $r_check, '<label>','</label>')
  .'</div>';
  $required_request[] = "r_check";
  $required_request_item_ary[2] = "r_check";
  //確認画面用
  $car_info_confirm_ary[] = $car_info_title_ary[10].'：'.$r_check_ay[$r_check[0]];
}


 ?>

