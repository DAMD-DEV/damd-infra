<?php

//このカスタムを適用するアイテムid

$item_cs_form_ary=array();

$item_cs_form_ary=array(967,920,917,930,919,921,918,1291);





//パターンA

$colorA = array(

//"未塗装品素地",

    "ピュアホワイトパール(ZVR)",

    "ブルーイッシュブラックパール3(ZJ3)",
    
    "ジャングルグリーン(ZZC)",

);



$colorB = array(

    "ピュアホワイトパール(ZVR) × マットシルバー",

    "ブルーイッシュブラックパール3(ZJ3) × マットシルバー",
    
    "ジャングルグリーン(ZZC) × マットシルバー",

);



//パターンc

$colorC = array(

  //"未塗装品素地",

    "ピュアホワイトパール(ZVR) × ブラック",

    "ブルーイッシュブラックパール3(ZJ3) × ブラック",
    
    "ジャングルグリーン(ZZC) × ブラック",

);



//ホイールカラー

$colorWheel = array(

  "ブラック",

  "シルバー"

);



//アイテムごとの各項目定義

if($item_id==967){

  //コンプリートキット



/*

  if($item_paint==2 and $user_color==""){

    $user_color="未塗装品素地";

  }

*/

if($item_paint!=2){

    $car_info = '

    <select name="user_color" id="color" class="form-control" required>

    '.getOptionHtml2($colorA,$user_color).'

    </select>

  <div style="line-height:1.3em;">

  <small>

  ※ フロントバンパー：純正ボディ色×マットシルバーの２色塗り分けとなります。<br>

  ※ スペアタイヤカバー：純正ボディ色×ブラックの2色塗り分けとなります。

  </small>

  <input type="hidden" name="user_color_info" value="※ フロントバンパー：純正ボディ色×マットシルバーの２色塗り分けとなります。

  ※ スペアタイヤカバー：純正ボディ色×ブラックの2色塗り分けとなります。">

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



//ーーーーDEAN ホイールカラーーーーーーー



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



//ーーーー確認事項ーーーーーーー

if($item_mount==1){

  $r_check_ay[1] = "確認しました";

  $car_info_title_ary[2] = "リアバンパーについて";

  $car_info_html_ary[2].= '

  <div class="description">

  紹介店舗では純正リアバンパーの

  塗装は承っておりません。<br>

  別途弊社商品「純正リアバンパー（塗装済品）」を併せてご購入いただくか、<br>

  または、お客さまご自身にて純正リアバンパーの塗装のご手配をいただきますようお願い申し上げます。<br>

  '.getCheckboxFromMasterData2 ($r_check_ay, 'name="r_check[]" required', "", $r_check, '<label>','</label>')

  .'</div>';



  $required_request[] = "r_check";

  $required_request_item_ary[2] = "r_check";

  //確認画面用

  $car_info_confirm_ary[] = $car_info_title_ary[2].'：'.$r_check_ay[$r_check[0]];

}







}elseif($item_id==917){





/*

  if($item_paint==2 and $user_color==""){

    $user_color="未塗装品素地";

  }

*/

if($item_paint!=2){

  $car_info = '

  <select name="user_color" id="color" class="form-control" required>

  '.getOptionHtml2($colorA,$user_color).'

  </select>

  <div style="line-height:1.3em;">

  <small>

  ※ フロントバンパー：純正ボディ色×マットシルバーの２色塗り分けとなります。<br>

  ※ スペアタイヤカバー：純正ボディ色×ブラックの2色塗り分けとなります。

  </small>

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



//ーーーー確認事項ーーーーーーー

if($item_mount==1){

  $r_check_ay[1] = "確認しました";

  $car_info_title_ary[2] = "リアバンパーについて";

  $car_info_html_ary[2].= '

  <div class="description">

  紹介店舗では純正リアバンパーの

  塗装は承っておりません。<br>

  別途弊社商品「純正リアバンパー（塗装済品）」を併せてご購入いただくか、<br>

  または、お客さまご自身にて純正リアバンパーの塗装のご手配をいただきますようお願い申し上げます。<br>

  '.getCheckboxFromMasterData2 ($r_check_ay, 'name="r_check[]" required', "", $r_check, '<label>','</label>')

  .'</div>';



  $required_request[] = "r_check";

  $required_request_item_ary[2] = "r_check";

  //確認画面用

  $car_info_confirm_ary[] = $car_info_title_ary[2].'：'.$r_check_ay[$r_check[0]];

}



}else if($item_id==919){

  /*

  if($item_paint==2 and $user_color==""){

    $user_color="未塗装品素地";

  }*/



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



}else if($item_id==918||$item_id==1291){

  /*

  if($item_paint==2 and $user_color==""){

    $user_color="未塗装品素地";

  }*/



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



}else if($item_id==921 or $item_id==920 or $item_id==930){

  /*

  if($item_paint==2 and $user_color==""){

    $user_color="未塗装品素地";

  }*/



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





if($item_id==920){
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

