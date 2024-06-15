<?php

//このカスタムを適用するアイテムid

$item_cs_form_ary=array();

$item_cs_form_ary=array(1272,1273,1240,936,930,934,1245);



//パターンA

$colorA = array(
  "ピュアホワイトパール（ZVR）",
  "ブルーイッシュブラックパール3(ZJ3)",
  "ジャングルグリーン(ZZC)",
);


//パターンB

$colorB = array(
  "ピュアホワイトパール(ZVR) × マットブラック",
  "ブルーイッシュブラックパール3(ZJ3) × マットブラック",
  "ジャングルグリーン(ZZC) × マットブラック",
);


//パターンC

$colorC = array(
  "ピュアホワイトパール（ZVR） × マットシルバー",
  "ブルーイッシュブラックパール3（ZJ3）× マットシルバー",
  "ジャングルグリーン（ZZC）× マットシルバー",
);


//パターンD

$colorD = array(
  "ピュアホワイトパール（ZVR） × マットガンメタリック",
  "ブルーイッシュブラックパール3（ZJ3）× マットガンメタリック",
  "ジャングルグリーン（ZZC）× マットガンメタリック",
);



//ホイールカラー

$colorWheel = array(
  "ブラック",
  "シルバー"
);



// アイテムごとの各項目定義

if($item_id==1272 || $item_id == 1273){

  if($item_paint!=2){

    $car_info = '

    <select name="user_color" id="color" class="form-control" required>
  
    '.getOptionHtml2($colorA,$user_color).'
  
    </select>
  
    <div style="line-height:1.3em;">
    
    <small>
    
    ※ 各ﾊﾟｰﾂの塗り分けは下記の通りとなります。<br>
    【ﾎﾞﾝﾈｯﾄｶﾊﾞｰ】 ﾎﾞﾃﾞｨ色<br>
    【ﾌﾛﾝﾄｸﾞﾘﾙ】 ﾎﾞﾃﾞｨ色×ﾏｯﾄﾌﾞﾗｯｸ<br>
    【ﾌﾛﾝﾄﾊﾞﾝﾊﾟｰ】 ﾎﾞﾃﾞｨ色×ﾏｯﾄｶﾞﾝﾒﾀﾘｯｸ<br>
    【ｵｰﾊﾞｰﾌｪﾝﾀﾞｰ】 ﾎﾞﾃﾞｨ色<br>
    【ﾘｱﾊﾞﾝﾊﾟｰ】 ﾎﾞﾃﾞｨ色×ﾏｯﾄｶﾞﾝﾒﾀﾘｯｸ
    
    </small>
    
    <input type="hidden" name="user_color_info" value="※ 各ﾊﾟｰﾂの塗り分けは下記の通りとなります。
    【ﾎﾞﾝﾈｯﾄｶﾊﾞｰ】 ﾎﾞﾃﾞｨ色
    【ﾌﾛﾝﾄｸﾞﾘﾙ】 ﾎﾞﾃﾞｨ色×ﾏｯﾄﾌﾞﾗｯｸ
    【ﾌﾛﾝﾄﾊﾞﾝﾊﾟｰ】 ﾎﾞﾃﾞｨ色×ﾏｯﾄｶﾞﾝﾒﾀﾘｯｸ
    【ｵｰﾊﾞｰﾌｪﾝﾀﾞｰ】 ﾎﾞﾃﾞｨ色
    【ﾘｱﾊﾞﾝﾊﾟｰ】 ﾎﾞﾃﾞｨ色×ﾏｯﾄｶﾞﾝﾒﾀﾘｯｸ">
    
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

if($item_id==1240 || $item_id==936){

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

if($item_id==930){

  if($item_paint!=2){

      $car_info = '

      <select name="user_color" id="color" class="form-control" required>

      '.getOptionHtml2($colorB,$user_color).'

      </select>

      <div style="line-height:1.3em;">
    
      <small>
      
      ※ 塗装済み品はﾎﾞﾃﾞｨ色×ﾏｯﾄﾌﾞﾗｯｸの2色塗り分けとなります。
      
      </small>
      
      <input type="hidden" name="user_color_info" value="※ 塗装済み品はﾎﾞﾃﾞｨ色×ﾏｯﾄﾌﾞﾗｯｸの2色塗り分けとなります。">
      
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

if($item_id==934 || $item_id==1245){

  if($item_paint!=2){

      $car_info = '

      <select name="user_color" id="color" class="form-control" required>

      '.getOptionHtml2($colorD,$user_color).'

      </select>

      <div style="line-height:1.3em;">
    
      <small>
      
      ※ 塗装済み品はﾎﾞﾃﾞｨ色×ﾏｯﾄｶﾞﾝﾒﾀﾘｯｸの2色塗り分けとなります。
      
      </small>
      
      <input type="hidden" name="user_color_info" value="※ 塗装済み品はﾎﾞﾃﾞｨ色×ﾏｯﾄｶﾞﾝﾒﾀﾘｯｸの2色塗り分けとなります。">
      
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

if($item_id==1272||$item_id==1273||$item_id==1245){
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

