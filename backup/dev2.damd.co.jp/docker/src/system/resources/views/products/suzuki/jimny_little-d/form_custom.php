<?php

//このカスタムを適用するアイテムid

$item_cs_form_ary=array();

$item_cs_form_ary=array(944,945,946,947,948,949,950,955,935,956,951,983,957,1200);



//944 983 945 コンプリートキット



//配列定義------------



//パターンA

$colorA = array(

  //"未塗装品素地",

"ジャングルグリーン(ZZC)",

"ミディアムグレー(ZVL)",

"シフォンアイボリーメタリック(ZVG)",

"ブルーイッシュブラックパール3(ZJ3)"

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

if($item_id==944){



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

    フロントバンパー/リアバンパー/フェンダーパネルの塗装色となります。<br>

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

    前後バンパー＆フェンダー塗装色：'.$user_color;

}

//ーーーーグリルカラーーーーーー



/*

if($item_paint==2 and $g_color==""){

  $g_color="未塗装品素地";

}*/



if($item_paint!=2){



  //塗装有りの場合のみグリルカラー出力

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





}elseif($item_id==945){



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

  フロントバンパー/リアバンパー/フェンダーパネルの塗装色となります。<br>

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

  前後バンパー＆フェンダー塗装色：'.$user_color;

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



}elseif($item_id==946){



/*

  if($item_paint==2 and $user_color==""){

    $user_color="未塗装品素地";

  }

*/



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



}elseif($item_id==949){



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

}elseif($item_id==947){



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



}elseif($item_id==950){



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



}elseif($item_id==948){



  /*if($item_paint==2 and $user_color==""){

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







}elseif($item_id==951){

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

}elseif($item_id==983){



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

    フロントバンパー/リアバンパー/フェンダーパネルの塗装色となります。<br>

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

    前後バンパー＆フェンダー塗装色：'.$user_color;

}

//ーーーーグリルカラーーーーーー



/*

if($item_paint==2 and $g_color==""){

  $g_color="未塗装品素地";

}*/



if($item_paint!=2){



  //塗装有りの場合のみグリルカラー出力

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

  $car_info_title_ary[4] = "WILDBOAR ホイールカラー";

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

}elseif($item_id==955){



    /*

      if($item_paint==2 and $user_color==""){

        $user_color="未塗装品素地";

      }*/



    if($item_paint!=2){



    //     $car_info = '

    // <select name="user_color" id="color" class="form-control" required>

    // '.getOptionHtml2($colorA,$user_color).'

    // </select>

    //   ';



    //     //必須への追加

    //     $required_request[] = "user_color";

    //     //エラーhtml生成用

    //     $required_request_item = "user_color";



    //     //確認画面用

    //     $car_info_confirm = '

    //   塗装色：'.$user_color;





        $car_info_title_ary[1] = "DEAN ホイール キャップカラー";

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



}



if($item_id==944||$item_id==983||$item_id==945||$item_id==948){
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

