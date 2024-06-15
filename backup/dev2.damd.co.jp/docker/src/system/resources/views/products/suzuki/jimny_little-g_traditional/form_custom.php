<?php

//このカスタムを適用するアイテムid

$item_cs_form_ary=array();

$item_cs_form_ary=array(1240,1249,1258,1259,1261);



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
  "マットブラック",
);


//パターンC

$colorC = array(
  "マットブラック × ピアノブラック",
);



//ホイールカラー

$colorWheel = array(
  "シルバー",
  "ブラック",
  "ゴールド",
);



//アイテムごとの各項目定義

if($item_id==1261){

  if($item_paint!=2){

    $car_info = '

    <select name="user_color" id="color" class="form-control" required>
  
    '.getOptionHtml2($colorA,$user_color).'
  
    </select>
  
    <div style="line-height:1.3em;">
    
    <small>
    
    
    ※ 各ﾊﾟｰﾂの塗り分けは下記のとおり指定となります。予めご了承ください。<br>
    【ﾎﾞﾝﾈｯﾄｶﾊﾞｰ】 : 純正塗装色<br>
    【ﾌﾛﾝﾄｸﾞﾘﾙ】 : ﾏｯﾄﾌﾞﾗｯｸ<br>
    【ﾌﾛﾝﾄﾊﾞﾝﾊﾟｰ】 : ﾋﾟｱﾉﾌﾞﾗｯｸ×ﾏｯﾄﾌﾞﾗｯｸ<br>
    【ﾘｱﾊﾞﾝﾊﾟｰ】 : ﾋﾟｱﾉﾌﾞﾗｯｸ×ﾏｯﾄﾌﾞﾗｯｸ
    
    </small>
    
    <input type="hidden" name="user_color_info" value="※ 各ﾊﾟｰﾂの塗り分けは下記のとおり指定となります。予めご了承ください。
    【ﾎﾞﾝﾈｯﾄｶﾊﾞｰ】 : 純正塗装色
    【ﾌﾛﾝﾄｸﾞﾘﾙ】 : ﾏｯﾄﾌﾞﾗｯｸ
    【ﾌﾛﾝﾄﾊﾞﾝﾊﾟｰ】 : ﾋﾟｱﾉﾌﾞﾗｯｸ×ﾏｯﾄﾌﾞﾗｯｸ
    【ﾘｱﾊﾞﾝﾊﾟｰ】 : ﾋﾟｱﾉﾌﾞﾗｯｸ×ﾏｯﾄﾌﾞﾗｯｸ">
    
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

  // if($item_id != 1248) {
  //   //ホイール
  //   $car_info_title_ary[1] = "ホイールカラー";
  //   $car_info_html_ary[1].= getRadioFromMasterData2 ($colorWheel,'name="w_color"', "" , $w_color, '<label style="margin-right:10px;">','</label>  ');
  //   $required_request[] = "w_color";
  //   $required_request_item_ary[1] = "w_color";
  //   //確認画面用
  //   $car_info_confirm_ary[] = $car_info_title_ary[1].'：'.$w_color;
  // }
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


if($item_id==1249){

  if($item_paint!=2){

      $car_info = '

      <select name="user_color" id="color" class="form-control" required>

      '.getOptionHtml2($colorB,$user_color).'

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

if($item_id==1258||$item_id==1259){

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

if($item_id==1259||$item_id==1261){
  $r_check_ay[1] = "確認しました";
  $car_info_title_ary[2] = "リアパーキングセンサーについて";
  $car_info_html_ary[2].= '
  <div class="description">
  本製品は、2024年1月以降受注を開始している<br>
  ﾘｱﾊﾟｰｷﾝｸﾞｾﾝｻｰ<ﾊﾞｯｸｿﾅｰ>装着車には対応しておりません。<br>
  該当車両でないことを確認いたします。<br>
  '.getCheckboxFromMasterData2 ($r_check_ay, 'name="r_check[]" required', "", $r_check, '<label>','</label>')
  .'</div>';
  $required_request[] = "r_check";
  $required_request_item_ary[2] = "r_check";
  //確認画面用
  $car_info_confirm_ary[] = $car_info_title_ary[2].'：'.$r_check_ay[$r_check[0]];
}





 ?>

