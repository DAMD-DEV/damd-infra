<?php

//このカスタムを適用するアイテムid

$item_cs_form_ary=array();

$item_cs_form_ary=array(1201,1202,1219,1221,1220,1283,1284,1282);



//print_r($_POST);





//配列定義------------



//パターンA

$colorA = array(

  //"未塗装品素地",

"クールカーキパールメタリック (ZVD) × 粗目マットブラック	"

);



//パターンA

$colorB = array(

    //"未塗装品素地",

    "粗目マットブラック"

);



//アイテムごとの各項目定義

if($item_id==1201||$item_id==1202||$item_id==1219||$item_id==1283||$item_id==1284||$item_id==1282){



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

';



//必須への追加

$required_request[] = "user_color";

//エラーhtml生成用

$required_request_item = "user_color";



//確認画面用

$car_info_confirm = '

塗装色：'.$user_color;

}





}elseif($item_id==1221||$item_id==1220){



    /*

      if($item_paint==2 and $user_color==""){

        $user_color="未塗装品素地";

      }

    */

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











 ?>

