<?php
//このカスタムを適用するアイテムid
$item_cs_form_ary=array();
$item_cs_form_ary=array(796,797,799,800,801,802,805,806,807);

//944 983 945 コンプリートキット

//配列定義------------


if($item_id==796||$item_id==797||$item_id==799||$item_id==800||$item_id==801||$item_id==802||$item_id==805||$item_id==806||$item_id==807){



    //塗装有りの場合のみグリルカラー出力
    $car_info_title_ary[1] = "グレード";
    $car_info_html_ary[1].= '<input type="text" name="u_grade" class="form-control" value="'. $u_grade .'" placeholder="">';
  $required_request[] = "u_grade";
  $required_request_item_ary[1] = "u_grade";
  //確認画面用
  $car_info_confirm_ary[] =  $car_info_title_ary[1].'：'.$u_grade;


}










 ?>
