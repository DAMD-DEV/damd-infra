<?php

//このカスタムを適用するアイテムid

$item_cs_form_ary=array();

$item_cs_form_ary=array(959,960,946,961,962,950,965,956,957,963,984,1200,1215,1187);



//print_r($_POST);





//配列定義------------



//パターンA

$colorA = array(

  //"未塗装品素地",

  "ジャングルグリーン(ZZC)",
  "ミディアムグレー(ZVL)",
  "シフォンアイボリーメタリック(ZVG)",
  "ブルーイッシュブラックパール3(ZJ3)",

);

//パターンB

$colorB = array(

  //"未塗装品素地",

  "粗目マットブラック塗装×ガンメタ"

);

//パターンC

$colorC = array(

  //"未塗装品素地",

  "粗目マットブラック塗装"

);

//パターンD

$colorD = array(

//"未塗装品素地",

"粗目マットブラック塗装",

"ジャングルグリーン(ZZC)×粗目マットブラック塗装",

"ミディアムグレー(ZVL)×粗目マットブラック塗装",

"シフォンアイボリーメタリック(ZVG)×粗目マットブラック塗装",

"ブルーイッシュブラックパール3(ZJ3)×粗目マットブラック塗装",

);



//パターンE

$colorE = array(

//"未塗装品素地",

"ジャングルグリーン（ZZC）×粗目マットブラック塗装",

"ミディアムグレー（ZVL）×粗目マットブラック塗装",

"シフォンアイボリーメタリック（ZVG）×粗目マットブラック塗装",

"ブルーイッシュブラックパール3（ZJ3）×粗目マットブラック塗装",

);



//グリルカラー

/*

$colorGrill = array(

  "ブラック",

  "シルバー"

);*/



//ホイールカラー

$colorWheel = array(

  "マットブラック",

  "マーガレットホワイト"

);



$colorWheel2 = array(

    "シルバー",

    "ブラック",

    "ゴールド",

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







//アイテムごとの各項目定義

if($item_id==959){





if($item_paint!=2){

  $car_info = '

  <select name="user_color" id="color" class="form-control" required>

  '.getOptionHtml2($colorC,$user_color).'

  </select>

<div style="line-height:1.3em;">

<small>

フロントバンパー/リアバンパー塗装色となります。<br>

※フロントバンパーは荒目マットブラック×ガンメタの2色塗り分けとなります。

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

前後バンパー塗装色：'.$user_color;

}



if($item_paint!=2){



  $car_info_title_ary[1] = "グリルカラー";

  $car_info_html_ary[1].= '

<select name="g_color" class="form-control" required>

'.getOptionHtml2($colorD,$g_color).'

</select>

  ';

$required_request[] = "g_color";

$required_request_item_ary[1] = "g_color";

//確認画面用

$car_info_confirm_ary[] =  $car_info_title_ary[1].'：'.$g_color;

}



if($item_paint!=2){



  $car_info_title_ary[2] = "ボンネットフードカラー";

  $car_info_html_ary[2].= '

<select name="b_color" class="form-control" required>

'.getOptionHtml2($colorA,$b_color).'

</select>

  ';

$required_request[] = "b_color";

$required_request_item_ary[2] = "b_color";

//確認画面用

$car_info_confirm_ary[] = $car_info_title_ary[2].'：'.$b_color;

}





//ーーーーDEAN ホイールキャップーーーーーーー





  $car_info_title_ary[4] = "DEAN ホイール キャップカラー";

  $car_info_html_ary[4].= '

<select name="cap_color" class="form-control" required>

'.getOptionHtml2($colorA,$cap_color).'

</select>

  ';

$required_request[] = "cap_color";

$required_request_item_ary[4] = "cap_color";

//確認画面用

$car_info_confirm_ary[] = $car_info_title_ary[4].'：'.$cap_color;



//ーーーーレターエンブレムーーーーーーー



  $car_info_title_ary[7] = "little D. レターエンブレム カラー";

  $car_info_html_ary[7].= '

<select name="e_color" class="form-control" required>

'.getOptionHtml2($colorEnb,$e_color).'

</select>

  ';

$required_request[] = "e_color";

$required_request_item_ary[7] = "e_color";

//確認画面用

$car_info_confirm_ary[] = $car_info_title_ary[7].'：'.$e_color;







//ーーーー確認事項ーーーーーーー

if($item_mount==2){

  $np_check_ay[1] = "確認しました";

  $car_info_title_ary[8] = "ナンバープレートについて";

  $car_info_html_ary[8].= '

  <div class="description">

  取付後、純正リアバンパーから取り外したナンバープレートは、<br>

お客さまご自身にて車両登録管轄内の国土交通省・運輸支局(車検場)で再封印のご手配をお願い致します。<br>

  '.getCheckboxFromMasterData2 ($np_check_ay, 'name="np_check[]" required', "", $np_check, '<label>','</label>')

  .'</div>';



  $required_request[] = "np_check";

  $required_request_item_ary[8] = "np_check";

  //確認画面用

  $car_info_confirm_ary[] = $car_info_title_ary[8].'：'.$np_check_ay[$np_check[0]];

}





}elseif($item_id==960){



/*

  if($item_paint==2 and $user_color==""){

    $user_color="未塗装品素地";

  }

*/

if($item_paint!=2){

  $car_info = '

  <select name="user_color" id="color" class="form-control" required>

  '.getOptionHtml2($colorC,$user_color).'

  </select>

<div style="line-height:1.3em;">

<small>

フロントバンパー/リアバンパー塗装色となります。<br>

※フロントバンパーは荒目マットブラック×ガンメタの2色塗り分けとなります。

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

前後バンパー塗装色：'.$user_color;





}



//ーーーーグリルカラーーーーーー



/*

if($item_paint==2 and $g_color==""){

  $g_color="未塗装品素地";

}*/



if($item_paint!=2){



  $car_info_title_ary[1] = "グリルカラー";

  $car_info_html_ary[1].= '

<select name="g_color" class="form-control" required>

'.getOptionHtml2($colorD,$g_color).'

</select>

  ';

$required_request[] = "g_color";

$required_request_item_ary[1] = "g_color";

//確認画面用

$car_info_confirm_ary[] =  $car_info_title_ary[1].'：'.$g_color;



}

//ーーーーボンネットフードカラーーーーーーー

/*

if($item_paint==2 and $b_color==""){

  $b_color="未塗装品素地";

}*/





if($item_paint!=2){

  $car_info_title_ary[2] = "ボンネットフードカラー";

  $car_info_html_ary[2].= '

<select name="b_color" class="form-control" required>

'.getOptionHtml2($colorA,$b_color).'

</select>

  ';

$required_request[] = "b_color";

$required_request_item_ary[2] = "b_color";

//確認画面用

$car_info_confirm_ary[] = $car_info_title_ary[2].'：'.$b_color;

}



//ーーーーバックカメラキットーーーーーーー

  /*

  $car_info_title_ary[5] = "バックカメラキット";

  $car_info_html_ary[5].= '

<select name="b_camera" class="form-control" required>

'.getOptionHtml2($onoff,$b_camera).'

</select>

  ';

$required_request[] = "b_camera";

$required_request_item_ary[5] = "b_camera";

//確認画面用

$car_info_confirm_ary[] = $car_info_title_ary[5].'：'.$b_camera;

*/

//ーーーーナンバープレート移設キットーーーーーーー

  /*

  $car_info_title_ary[6] = "ナンバープレート移設キット";

  $car_info_html_ary[6].= '

<select name="n_plate" class="form-control" required>

'.getOptionHtml2($onoff,$n_plate).'

</select>

  ';

$required_request[] = "n_plate";

$required_request_item_ary[6] = "n_plate";

//確認画面用

$car_info_confirm_ary[] = $car_info_title_ary[6].'：'.$n_plate;

*/

//ーーーーレターエンブレムーーーーーーー



  $car_info_title_ary[7] = "little D. レターエンブレム カラー";

  $car_info_html_ary[7].= '

<select name="e_color" class="form-control" required>

'.getOptionHtml2($colorEnb,$e_color).'

</select>

  ';

$required_request[] = "e_color";

$required_request_item_ary[7] = "e_color";

//確認画面用

$car_info_confirm_ary[] = $car_info_title_ary[7].'：'.$e_color;



//ーーーー確認事項ーーーーーーー

if($item_mount==2){

  $np_check_ay[1] = "確認しました";

  $car_info_title_ary[8] = "ナンバープレートについて";

  $car_info_html_ary[8].= '

  <div class="description">

  取付後、純正リアバンパーから取り外したナンバープレートは、<br>

お客さまご自身にて車両登録管轄内の国土交通省・運輸支局(車検場)で再封印のご手配をお願い致します。<br>

  '.getCheckboxFromMasterData2 ($np_check_ay, 'name="np_check[]" required', "", $np_check, '<label>','</label>')

  .'</div>';



  $required_request[] = "np_check";

  $required_request_item_ary[8] = "np_check";

  //確認画面用

  $car_info_confirm_ary[] = $car_info_title_ary[8].'：'.$np_check_ay[$np_check[0]];

}



}elseif($item_id==946){

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

}elseif($item_id==962){

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



//ーーーー確認事項ーーーーーーー

if($item_mount==2){

  $np_check_ay[1] = "確認しました";

  $car_info_title_ary[8] = "ナンバープレートについて";

  $car_info_html_ary[8].= '

  <div class="description">

  取付後、純正リアバンパーから取り外したナンバープレートは、<br>

お客さまご自身にて車両登録管轄内の国土交通省・運輸支局(車検場)で再封印のご手配をお願い致します。<br>

  '.getCheckboxFromMasterData2 ($np_check_ay, 'name="np_check[]" required', "", $np_check, '<label>','</label>')

  .'</div>';



  $required_request[] = "np_check";

  $required_request_item_ary[8] = "np_check";

  //確認画面用

  $car_info_confirm_ary[] = $car_info_title_ary[8].'：'.$np_check_ay[$np_check[0]];

}









}elseif($item_id==961){

  /*if($item_paint==2 and $user_color==""){

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

}elseif($item_id==950 or $item_id==965){

  /*

  if($item_paint==2 and $user_color==""){

    $user_color="未塗装品素地";

  }*/

  if($item_paint!=2){
    $car_info_title_ary[1] = "塗装色";
    $car_info_html_ary[1].= '
    <select name="cap_color" class="form-control" required>
    '.getOptionHtml2($colorA,$cap_color).'
    </select>
      ';
    $required_request[] = "cap_color";
    $required_request_item_ary[1] = "cap_color";
    //確認画面用
    $car_info_confirm_ary[] = $car_info_title_ary[1].'：'.$cap_color;

  }

}elseif($item_id==962){

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

  //ーーーーバックカメラキットーーーーーーー

  /*

    $car_info_title_ary[5] = "バックカメラキット";

    $car_info_html_ary[5].= '

  <select name="b_camera" class="form-control" required>

  '.getOptionHtml2($onoff,$b_camera).'

  </select>

    ';

  $required_request[] = "b_camera";

  $required_request_item_ary[5] = "b_camera";

  //確認画面用

  $car_info_confirm_ary[] = $car_info_title_ary[5].'：'.$b_camera;

*/

  //ーーーーナンバープレート移設キットーーーーーーー

  /*

    $car_info_title_ary[6] = "ナンバープレート移設キット";

    $car_info_html_ary[6].= '

  <select name="n_plate" class="form-control" required>

  '.getOptionHtml2($onoff,$n_plate).'

  </select>

    ';

  $required_request[] = "n_plate";

  $required_request_item_ary[6] = "n_plate";

  //確認画面用

  $car_info_confirm_ary[] = $car_info_title_ary[6].'：'.$n_plate;

  */

}elseif($item_id==956){

  $b_check_ay[1] = "確認しました";

  $car_info_title_ary[1] = "本製品について";

  $car_info_html_ary[1].= '

  <div class="description">

  本製品は『little D. リアバンパー』専用アイテムです。<br>

他社製バンパーがご装着されている場合、取付は不可となります。

  '.getCheckboxFromMasterData2 ($b_check_ay, 'name="b_check[]" required', "", $b_check, '<label>','</label>')

  .'</div>';



  $required_request[] = "b_check";

  $required_request_item_ary[1] = "b_check";

  //確認画面用

  $car_info_confirm_ary[] = $car_info_title_ary[1].'：'.$b_check_ay[$b_check[0]];

}elseif($item_id==957){

  $b_check_ay[1] = "確認しました";

  $car_info_title_ary[1] = "本製品について";

  $car_info_html_ary[1].= '

  <div class="description">

  本製品は『little D. リアバンパー』専用アイテムです。<br>

他社製バンパーがご装着されている場合、取付は不可となります。

  '.getCheckboxFromMasterData2 ($b_check_ay, 'name="b_check[]" required', "", $b_check, '<label>','</label>')

  .'</div>';



  $required_request[] = "b_check";

  $required_request_item_ary[1] = "b_check";

  //確認画面用

  $car_info_confirm_ary[] = $car_info_title_ary[1].'：'.$b_check_ay[$b_check[0]];

}elseif($item_id==963){

  $b_check_ay[1] = "確認しました";

  $car_info_title_ary[1] = "本製品について";

  $car_info_html_ary[1].= '

  <div class="description">

  本製品は『little D. リアバンパー』専用アイテムです。<br>

他社製バンパーがご装着されている場合、取付は不可となります。

  '.getCheckboxFromMasterData2 ($b_check_ay, 'name="b_check[]" required', "", $b_check, '<label>','</label>')

  .'</div>';



  $required_request[] = "b_check";

  $required_request_item_ary[1] = "b_check";

  //確認画面用

  $car_info_confirm_ary[] = $car_info_title_ary[1].'：'.$b_check_ay[$b_check[0]];

}elseif($item_id==984){



/*

  if($item_paint==2 and $user_color==""){

    $user_color="未塗装品素地";

  }

*/

if($item_paint!=2){

  $car_info = '

  <select name="user_color" id="color" class="form-control" required>

  '.getOptionHtml2($colorC,$user_color).'

  </select>

<div style="line-height:1.3em;">

<small>

フロントバンパー/リアバンパー塗装色となります。<br>

※フロントバンパーは荒目マットブラック×ガンメタの2色塗り分けとなります。

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

前後バンパー塗装色：'.$user_color;

}

//ーーーーグリルカラーーーーーー

/*

if($item_paint==2 and $g_color==""){

  $g_color="未塗装品素地";

}*/

if($item_paint!=2){



  $car_info_title_ary[1] = "グリルカラー";

  $car_info_html_ary[1].= '

<select name="g_color" class="form-control" required>

'.getOptionHtml2($colorD,$g_color).'

</select>

  ';

$required_request[] = "g_color";

$required_request_item_ary[1] = "g_color";

//確認画面用

$car_info_confirm_ary[] =  $car_info_title_ary[1].'：'.$g_color;

}

//ーーーーボンネットフードカラーーーーーーー

/*

if($item_paint==2 and $b_color==""){

  $b_color="未塗装品素地";

}*/

if($item_paint!=2){



  $car_info_title_ary[2] = "ボンネットフードカラー";

  $car_info_html_ary[2].= '

<select name="b_color" class="form-control" required>

'.getOptionHtml2($colorA,$b_color).'

</select>

  ';

$required_request[] = "b_color";

$required_request_item_ary[2] = "b_color";

//確認画面用

$car_info_confirm_ary[] = $car_info_title_ary[2].'：'.$b_color;

}

//ーーーーDEAN ホイールカラーーーーーーー

/*

  $car_info_title_ary[3] = "DEAN ホイール カラー";

  $car_info_html_ary[3].= '

<select name="w_color" class="form-control" required>

'.getOptionHtml2($colorWheel,$w_color).'

</select>

  ';

$required_request[] = "w_color";

$required_request_item_ary[3] = "w_color";

//確認画面用

$car_info_confirm_ary[] = $car_info_title_ary[3].'：'.$w_color;

*/



//ーーーーDEAN ホイールキャップーーーーーーー



/*

if($item_paint==2 and $cap_color==""){

  $cap_color="未塗装品素地";

}*/

  $car_info_title_ary[4] = "WILDBOAR ホイール カラー";

  $car_info_html_ary[4].= '

<select name="cap_color" class="form-control" required>

'.getOptionHtml2($colorWheelWild,$cap_color).'

</select>

  ';

$required_request[] = "cap_color";

$required_request_item_ary[4] = "cap_color";

//確認画面用

$car_info_confirm_ary[] = $car_info_title_ary[4].'：'.$cap_color;



//ーーーーバックカメラキットーーーーーーー

  /*

  $car_info_title_ary[5] = "バックカメラキット";

  $car_info_html_ary[5].= '

<select name="b_camera" class="form-control" required>

'.getOptionHtml2($onoff,$b_camera).'

</select>

  ';

$required_request[] = "b_camera";

$required_request_item_ary[5] = "b_camera";

//確認画面用

$car_info_confirm_ary[] = $car_info_title_ary[5].'：'.$b_camera;

*/

//ーーーーバックカメラキットーーーーーーー

  /*

  $car_info_title_ary[6] = "ナンバープレート移設キット";

  $car_info_html_ary[6].= '

<select name="n_plate" class="form-control" required>

'.getOptionHtml2($onoff,$n_plate).'

</select>

  ';

$required_request[] = "n_plate";

$required_request_item_ary[6] = "n_plate";

//確認画面用

$car_info_confirm_ary[] = $car_info_title_ary[6].'：'.$n_plate;

*/

//ーーーーレターエンブレムーーーーーーー



  $car_info_title_ary[7] = "little D. レターエンブレム カラー";

  $car_info_html_ary[7].= '

<select name="e_color" class="form-control" required>

'.getOptionHtml2($colorEnb,$e_color).'

</select>

  ';

$required_request[] = "e_color";

$required_request_item_ary[7] = "e_color";

//確認画面用

$car_info_confirm_ary[] = $car_info_title_ary[7].'：'.$e_color;







//ーーーー確認事項ーーーーーーー

if($item_mount==2){

  $np_check_ay[1] = "確認しました";

  $car_info_title_ary[8] = "ナンバープレートについて";

  $car_info_html_ary[8].= '

  <div class="description">

  取付後、純正リアバンパーから取り外したナンバープレートは、<br>

お客さまご自身にて車両登録管轄内の国土交通省・運輸支局(車検場)で再封印のご手配をお願い致します。<br>

  '.getCheckboxFromMasterData2 ($np_check_ay, 'name="np_check[]" required', "", $np_check, '<label>','</label>')

  .'</div>';



  $required_request[] = "np_check";

  $required_request_item_ary[8] = "np_check";

  //確認画面用

  $car_info_confirm_ary[] = $car_info_title_ary[8].'：'.$np_check_ay[$np_check[0]];

}





}elseif($item_id==1200){

  if($item_paint!=2){

    $car_info = '

<select name="user_color" id="color" class="form-control" required>

'.getOptionHtml2($colorE,$user_color).'

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

}elseif($item_id==1215){



  if($item_paint!=2){

    $car_info = '

  <select name="user_color" id="color" class="form-control" required>

  '.getOptionHtml2($colorC,$user_color).'

  </select>

<div style="line-height:1.3em;">

<small>

フロントバンパー/リアバンパー塗装色となります。<br>

※フロントバンパーは荒目マットブラック×ガンメタの2色塗り分けとなります。

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

前後バンパー塗装色：'.$user_color;

  }



  if($item_paint!=2){



    $car_info_title_ary[1] = "グリルカラー";

    $car_info_html_ary[1].= '

<select name="g_color" class="form-control" required>

'.getOptionHtml2($colorD,$g_color).'

</select>

  ';

    $required_request[] = "g_color";

    $required_request_item_ary[1] = "g_color";

//確認画面用

    $car_info_confirm_ary[] =  $car_info_title_ary[1].'：'.$g_color;

  }



  if($item_paint!=2){



    $car_info_title_ary[2] = "ボンネットフードカラー";

    $car_info_html_ary[2].= '

<select name="b_color" class="form-control" required>

'.getOptionHtml2($colorA,$b_color).'

</select>

  ';

    $required_request[] = "b_color";

    $required_request_item_ary[2] = "b_color";

//確認画面用

    $car_info_confirm_ary[] = $car_info_title_ary[2].'：'.$b_color;

  }





//ーーーーDEAN ホイールキャップーーーーーーー

/*

  $car_info_title_ary[4] = "Cantabile ホイール キャップカラー";

  $car_info_html_ary[4].= '

<select name="cap_color" class="form-control" required>

'.getOptionHtml2($colorA,$cap_color).'

</select>

  ';

  $required_request[] = "cap_color";

  $required_request_item_ary[4] = "cap_color";

//確認画面用

  $car_info_confirm_ary[] = $car_info_title_ary[4].'：'.$cap_color;

*/

//ーーーーレターエンブレムーーーーーーー



  $car_info_title_ary[7] = "little D. レターエンブレム カラー";

  $car_info_html_ary[7].= '

<select name="e_color" class="form-control" required>

'.getOptionHtml2($colorEnb,$e_color).'

</select>

  ';

  $required_request[] = "e_color";

  $required_request_item_ary[7] = "e_color";

//確認画面用

  $car_info_confirm_ary[] = $car_info_title_ary[7].'：'.$e_color;



//ーーーーーーホイールカラーーーーーー

  $car_info_title_ary[8] = "Cantabile ホイールカラー";

  $car_info_html_ary[8] .= getRadioFromMasterData2($colorWheel2, 'name="w_color"', "", $w_color, '<label style="margin-right:10px;">', '</label>  ');



  $required_request[] = "w_color";

  $required_request_item_ary[8] = "w_color";

  //確認画面用

  $car_info_confirm_ary[] = $car_info_title_ary[8] . '：' . $w_color;



//ーーーー確認事項ーーーーーーー

  if($item_mount==2){

    $np_check_ay[1] = "確認しました";

    $car_info_title_ary[9] = "ナンバープレートについて";

    $car_info_html_ary[9].= '

  <div class="description">

  取付後、純正リアバンパーから取り外したナンバープレートは、<br>

お客さまご自身にて車両登録管轄内の国土交通省・運輸支局(車検場)で再封印のご手配をお願い致します。<br>

  '.getCheckboxFromMasterData2 ($np_check_ay, 'name="np_check[]" required', "", $np_check, '<label>','</label>')

        .'</div>';



    $required_request[] = "np_check";

    $required_request_item_ary[9] = "np_check";

    //確認画面用

    $car_info_confirm_ary[] = $car_info_title_ary[9].'：'.$np_check_ay[$np_check[0]];

  }











}elseif($item_id==1187){

  if($item_paint!=2){





    //ーーーーーーホイールカラーーーーーー

    $car_info_title_ary[1] = "ホイールカラー";

    $car_info_html_ary[1] .= getRadioFromMasterData2($colorWheel2, 'name="w_color"', "", $w_color, '<label style="margin-right:10px;">', '</label>  ');



    $required_request[] = "w_color";

    $required_request_item_ary[1] = "w_color";

    //確認画面用

    $car_info_confirm_ary[] = $car_info_title_ary[1] . '：' . $w_color;





  }

}



if($item_id==1215||$item_id==959||$item_id==984||$item_id==962){
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

