<?php

//このカスタムを適用するアイテムid

$item_cs_form_ary=array();

$item_cs_form_ary=array(1147,1148,1146,1212,1211);





//配列定義------------



//パターンA

$colorA = array(
  //"未塗装品素地",
  "オフブルーメタリック (ZYW)",
);



//ホイールカラー

$colorWheel = array(

    "ゴールド",

    "ブラック",

    "シルバー"

);



//アイテムごとの各項目定義

if($item_id==1147||$item_id==1148){



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

  ※ 各ﾊﾟｰﾂの塗り分けは下記のとおり指定となります。予めご了承ください。<br>

【ﾎﾞﾝﾈｯﾄﾌｰﾄﾞ】 : 純正塗装色×粗目ﾏｯﾄｼﾙﾊﾞｰ<br>

【ﾌﾛﾝﾄｸﾞﾘﾙ】 : 純正塗装色×粗目ﾏｯﾄｼﾙﾊﾞｰ<br>

【ﾌﾛﾝﾄﾊﾞﾝﾊﾟｰ】 : ﾏｯﾄﾌﾞﾗｯｸ×粗目ﾏｯﾄｼﾙﾊﾞｰ

    </small>

    <input type="hidden" name="user_color_info" value="※各ﾊﾟｰﾂの塗り分けは次のとおり指定となります。

　　【ﾎﾞﾝﾈｯﾄﾌｰﾄﾞ】 : 純正塗装色×粗目ﾏｯﾄｼﾙﾊﾞｰ

【ﾌﾛﾝﾄｸﾞﾘﾙ】 : 純正塗装色×粗目ﾏｯﾄｼﾙﾊﾞｰ

【ﾌﾛﾝﾄﾊﾞﾝﾊﾟｰ】 : ﾏｯﾄﾌﾞﾗｯｸ×粗目ﾏｯﾄｼﾙﾊﾞｰ

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







}elseif($item_id==1146){



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

    ※ 各ﾊﾟｰﾂの塗り分けは下記のとおり指定となります。予めご了承ください。<br>

【ﾎﾞﾝﾈｯﾄﾌｰﾄﾞ】 : ご選択の純正塗装色<br>

【ﾌﾛﾝﾄｸﾞﾘﾙ】 : ご選択の純正塗装色×ﾏｯﾄﾌﾞﾗｯｸ<br>

【ﾌﾛﾝﾄﾊﾞﾝﾊﾟｰ】 : ﾏｯﾄﾌﾞﾗｯｸ×ｶﾞﾝﾒﾀﾘｯｸ

    </small>

    <input type="hidden" name="user_color_info" value="※各ﾊﾟｰﾂの塗り分けは次のとおり指定となります。

　　【ﾎﾞﾝﾈｯﾄﾌｰﾄﾞ】 : ご選択の純正塗装色

　　【ﾌﾛﾝﾄｸﾞﾘﾙ】 : ご選択の純正塗装色×ﾏｯﾄﾌﾞﾗｯｸ

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







}elseif($item_id==1212){



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

  ※ 各ﾊﾟｰﾂの塗り分けは下記のとおり指定となります。予めご了承ください。<br>

【ﾎﾞﾝﾈｯﾄﾌｰﾄﾞ】 : 純正塗装色×粗目ﾏｯﾄｼﾙﾊﾞｰ<br>

【ﾌﾛﾝﾄｸﾞﾘﾙ】 : 純正塗装色×粗目ﾏｯﾄｼﾙﾊﾞｰ<br>

【ﾌﾛﾝﾄﾊﾞﾝﾊﾟｰ】 : ﾏｯﾄﾌﾞﾗｯｸ×粗目ﾏｯﾄｼﾙﾊﾞｰ

    </small>

    <input type="hidden" name="user_color_info" value="※各ﾊﾟｰﾂの塗り分けは次のとおり指定となります。

　　【ﾎﾞﾝﾈｯﾄﾌｰﾄﾞ】 : 純正塗装色×粗目ﾏｯﾄｼﾙﾊﾞｰ

【ﾌﾛﾝﾄｸﾞﾘﾙ】 : 純正塗装色×粗目ﾏｯﾄｼﾙﾊﾞｰ

【ﾌﾛﾝﾄﾊﾞﾝﾊﾟｰ】 : ﾏｯﾄﾌﾞﾗｯｸ×粗目ﾏｯﾄｼﾙﾊﾞｰ

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





    }







}elseif($item_id==1211){



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

  ※ 各ﾊﾟｰﾂの塗り分けは下記のとおり指定となります。予めご了承ください。<br>

【ﾎﾞﾝﾈｯﾄﾌｰﾄﾞ】 : 純正塗装色×粗目ﾏｯﾄｼﾙﾊﾞｰ<br>

【ﾌﾛﾝﾄｸﾞﾘﾙ】 : 純正塗装色×粗目ﾏｯﾄｼﾙﾊﾞｰ<br>

【ﾌﾛﾝﾄﾊﾞﾝﾊﾟｰ】 : ﾏｯﾄﾌﾞﾗｯｸ×粗目ﾏｯﾄｼﾙﾊﾞｰ

    </small>

    <input type="hidden" name="user_color_info" value="※各ﾊﾟｰﾂの塗り分けは次のとおり指定となります。

　　【ﾎﾞﾝﾈｯﾄﾌｰﾄﾞ】 : 純正塗装色×粗目ﾏｯﾄｼﾙﾊﾞｰ

【ﾌﾛﾝﾄｸﾞﾘﾙ】 : 純正塗装色×粗目ﾏｯﾄｼﾙﾊﾞｰ

【ﾌﾛﾝﾄﾊﾞﾝﾊﾟｰ】 : ﾏｯﾄﾌﾞﾗｯｸ×粗目ﾏｯﾄｼﾙﾊﾞｰ

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

