<?php
//このカスタムを適用するアイテムid
$item_cs_form_ary=array();
$item_cs_form_ary=array(1139,1138,1137,1115,1116,1136,1216,1217,1187);

//配列定義------------

//パターンA
$colorA= array(
  //"未塗装品素地",
"ピュアホワイトパール（ZVR）",
"ジャングルグリーン（ZZC）",
"ブルーイッシュブラックパール3（ZJ3）",
"ミディアムグレー（ZVL）",
"シフォンアイボリーメタリック（ZVG）",
);
//パターンB
$colorB = array(
  //"未塗装品素地",
"コットンホワイト×粗目マットブラック",
"粗目シルバー×粗目マットブラック",
"粗目マットブラック×ガンメタ",
);
//パターンC
$colorC = array(
  //"未塗装品素地",
"コットンホワイト×粗目マットブラック",
"粗目シルバー×粗目マットブラック",
"粗目マットブラック×ガンメタ",
"ジャングルグリーン（ZZC）×粗目マットブラック",
"ミディアムグレー（ZVL）×粗目マットブラック",
"シフォンアイボリーメタリック（ZVG）×粗目マットブラック",
);

$w_colors = array(
  "コットンホワイト",
  "アイアンブラック",
);

$w_colors2 = array(
    "シルバー",
    "ブラック",
    "ゴールド",
);

//アイテムごとの各項目定義
if($item_id==1115){
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
}elseif($item_id==1116){
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
}elseif($item_id==1136){
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
}elseif($item_id==1139 || $item_id==1138){
  if($item_paint!=2){
    //ーーーーフロントグリル　ーーーーーー

      $car_info_title_ary[1] = "フロントグリル";
      $car_info_html_ary[1].= '
    <select name="fg_color" class="form-control" required>
    '.getOptionHtml2($colorA,$fg_color).'
    </select>
      ';
    $required_request[] = "fg_color";
    $required_request_item_ary[1] = "fg_color";
    //確認画面用
    $car_info_confirm_ary[] = $car_info_title_ary[1].'：'.$fg_color;

    //ーーーーフロントバンパー　ーーーーーー

      $car_info_title_ary[2] = "フロントバンパー";
      $car_info_html_ary[2].= '
    <select name="fb_color" class="form-control" required>
    '.getOptionHtml2($colorB,$fb_color).'
    </select>
      ';
    $required_request[] = "fb_color";
    $required_request_item_ary[2] = "fb_color";
    //確認画面用
    $car_info_confirm_ary[] = $car_info_title_ary[2].'：'.$fb_color;

    //ーーーーリアバンパー　ーーーーーー

      $car_info_title_ary[3] = "リアバンパー";
      $car_info_html_ary[3].= '
    <select name="lb_color" class="form-control" required>
    '.getOptionHtml2($colorC,$lb_color).'
    </select>
      ';
    $required_request[] = "lb_color";
    $required_request_item_ary[3] = "lb_color";
    //確認画面用
    $car_info_confirm_ary[] = $car_info_title_ary[3].'：'.$lb_color;
  }

//ーーーーーーホイールカラーーーーーー
    $car_info_title_ary[4] = "ホイールカラー";
  $car_info_html_ary[4].= getRadioFromMasterData2 ($w_colors,'name="w_color"', "" , $w_color, '<label style="margin-right:10px;">','</label>  ');

  $required_request[] = "w_color";
  $required_request_item_ary[4] = "w_color";
  //確認画面用
  $car_info_confirm_ary[] =  $car_info_title_ary[4].'：'.$w_color;





}elseif($item_id==1137){
  if($item_paint!=2){
    //ーーーーフロントグリル　ーーーーーー

      $car_info_title_ary[1] = "フロントグリル";
      $car_info_html_ary[1].= '
    <select name="fg_color" class="form-control" required>
    '.getOptionHtml2($colorA,$fg_color).'
    </select>
      ';
    $required_request[] = "fg_color";
    $required_request_item_ary[1] = "fg_color";
    //確認画面用
    $car_info_confirm_ary[] = $car_info_title_ary[1].'：'.$fg_color;

    //ーーーーフロントバンパー　ーーーーーー

      $car_info_title_ary[2] = "フロントバンパー";
      $car_info_html_ary[2].= '
    <select name="fb_color" class="form-control" required>
    '.getOptionHtml2($colorB,$fb_color).'
    </select>
      ';
    $required_request[] = "fb_color";
    $required_request_item_ary[2] = "fb_color";
    //確認画面用
    $car_info_confirm_ary[] = $car_info_title_ary[2].'：'.$fb_color;

    //ーーーーリアバンパー　ーーーーーー

      $car_info_title_ary[3] = "リアバンパー";
      $car_info_html_ary[3].= '
    <select name="lb_color" class="form-control" required>
    '.getOptionHtml2($colorC,$lb_color).'
    </select>
      ';
    $required_request[] = "lb_color";
    $required_request_item_ary[3] = "lb_color";
    //確認画面用
    $car_info_confirm_ary[] = $car_info_title_ary[3].'：'.$lb_color;


  }


}elseif($item_id==1216 || $item_id==1217){
    if($item_paint!=2){
        //ーーーーフロントグリル　ーーーーーー

        $car_info_title_ary[1] = "フロントグリル";
        $car_info_html_ary[1].= '
    <select name="fg_color" class="form-control" required>
    '.getOptionHtml2($colorA,$fg_color).'
    </select>
      ';
        $required_request[] = "fg_color";
        $required_request_item_ary[1] = "fg_color";
        //確認画面用
        $car_info_confirm_ary[] = $car_info_title_ary[1].'：'.$fg_color;

        //ーーーーフロントバンパー　ーーーーーー

        $car_info_title_ary[2] = "フロントバンパー";
        $car_info_html_ary[2].= '
    <select name="fb_color" class="form-control" required>
    '.getOptionHtml2($colorB,$fb_color).'
    </select>
      ';
        $required_request[] = "fb_color";
        $required_request_item_ary[2] = "fb_color";
        //確認画面用
        $car_info_confirm_ary[] = $car_info_title_ary[2].'：'.$fb_color;

        //ーーーーリアバンパー　ーーーーーー

        $car_info_title_ary[3] = "リアバンパー";
        $car_info_html_ary[3].= '
    <select name="lb_color" class="form-control" required>
    '.getOptionHtml2($colorC,$lb_color).'
    </select>
      ';
        $required_request[] = "lb_color";
        $required_request_item_ary[3] = "lb_color";
        //確認画面用
        $car_info_confirm_ary[] = $car_info_title_ary[3].'：'.$lb_color;
    }

//ーーーーーーホイールカラーーーーーー
    $car_info_title_ary[4] = "ホイールカラー";
    $car_info_html_ary[4].= getRadioFromMasterData2 ($w_colors2,'name="w_color"', "" , $w_color, '<label style="margin-right:10px;">','</label>  ');

    $required_request[] = "w_color";
    $required_request_item_ary[4] = "w_color";
    //確認画面用
    $car_info_confirm_ary[] =  $car_info_title_ary[4].'：'.$w_color;





}elseif($item_id==1187){
    if($item_paint!=2) {

//ーーーーーーホイールカラーーーーーー
        $car_info_title_ary[1] = "ホイールカラー";
        $car_info_html_ary[1] .= getRadioFromMasterData2($w_colors2, 'name="w_color"', "", $w_color, '<label style="margin-right:10px;">', '</label>  ');

        $required_request[] = "w_color";
        $required_request_item_ary[1] = "w_color";
        //確認画面用
        $car_info_confirm_ary[] = $car_info_title_ary[1] . '：' . $w_color;

    }



}

if($item_id==1216||$item_id==1217||$item_id==1139||$item_id==1138||$item_id==1137||$item_id==1136){
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
