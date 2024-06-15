<?php

session_name('querySes');
session_start();
ini_set("display_errors","1");

/* 初期化ファイル */
//require_once("../common/php/initialize.php");


if(empty($_SESSION["login_cookie"])){
    header("Location:https://www.damd.co.jp/login/");
    exit();
}


/* お問い合わせフォーム処理 */
require_once("./common.php");
require_once('./mailcheck.php');


/* $item_idをpostで与えると商品の金額と型番を出力 */
//共通関数ファイル読み込み
require_once($_SERVER["DOCUMENT_ROOT"]."/adm_system/common/php/function.php");
//$Ses = chkSession('STAFFSESSID');

//DB接続
$mysqli = conDB();

//マスタデータ
require_once($_SERVER["DOCUMENT_ROOT"]."/adm_system/items/master_data.php");


/* 配列作成 */
//$pref_ay = mkPrefAy();
$buy_ay = mkBuyAy();
$pref_ay = mkPrefAy();
$check_ay = mkCheckAy();
$check_ay2 = mkCheckAy2();
$policy_ay = mkPolicyAy();
/*


items_paint
0：未設定　1：塗装希望する　2：塗装希望しない

items_mount
0：未設定　１：最寄りの紹介店舗で取付　２：タムドで取付　3：取り付けしない

items_place
0：未設定　1~47：都道府県ID（47の数値）

options→塗装、取り付け、送付先都道府県の情報
items→カートにいれた商品情報の配列



商品データ
item_paint = 塗装なし
item_paint_only = 塗装品のみ


例↓
{
  "options": {
    items_paint: 1,
    items_mount: 1,
    items_place: 13
  },
  "items": [
    {
      "item_name": "カーボンマフラーカッター CMC-01",
      "item_model": "90",
      "item_sender": "0",
      "item_price": "18000",
      "item_p_cost": "0",
      "item_paint": "1",
      "item_paint_only": "0",
      "item_m_cost": "0",
      "item_class": "85",
      "item_no_home": "",
      "item_loan": "",
      "item_no_mount": "1",
      "item_multiple": null,
      "item_car_name": "マフラーカッター",
      "item_sender_name": null
    },

    {
      "item_name": "ステンレスウィンドウトリム コンプリート14P",
      "item_model": "1",
      "item_sender": "0",
      "item_price": "38000",
      "item_p_cost": "0",
      "item_paint": "1",
      "item_paint_only": "0",
      "item_m_cost": "0",
      "item_class": "82",
      "item_no_home": "",
      "item_loan": "6",
      "item_no_mount": "1",
      "item_multiple": null,
      "item_car_name": "CX-3 (DK)",
      "item_sender_name": null
    }
  ]
}

 */

//print_r($_POST["cartInfo"]);

/*
$data_json = file_get_contents("./test_data.json");
$data_json = mb_convert_encoding($data_json, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
$data = json_decode($data_json,true);
*/

if(!empty($_POST["cartInfo"])){
    $data = json_decode($_POST["cartInfo"],true);
    $_SESSION["cart_data"] = $data;
}else{
    if($_POST["reg"]!=1 and $_GET["back"]!=1){
        header("Location:https://www.damd.co.jp/?show=cart");
        exit();
    }
    //初回以外はセッションからカートデータを復元
    $data = $_SESSION["cart_data"];
}


$items_paint = $data["options"]["items_paint"];
$items_mount = $data["options"]["items_mount"];
$items_place = $data["options"]["items_place"];


//print_r($data);
//print_r($_POST);
//print_r($_SESSION["login_cookie"]);
//ユーザー登録情報取得
require_once($_SERVER["DOCUMENT_ROOT"]."/mypage/get_user_info.php");

//print_r($user_info);

//クエリ取得変換

$q = array();
if($_GET["back"]==1){
	$q = $_SESSION["user_info"];
}elseif($_POST["reg"]!=1 && $back==""){
	//初回アクセス時はdamd_idから情報取得
    $q["user_name1"] = $user_info["last_name"];
    $q["user_name2"] = $user_info["first_name"];
    $q["user_pref"] = $user_info["address"]["prefecture"]["id"];
    $q["user_city"] = $user_info["address"]["city"];
    $q["user_add1"] = $user_info["address"]["street"];
    $q["user_add2"] = $user_info["address"]["address"];
    $q["user_mail"] = $user_info["email"];
    $q["user_mail2"] = $user_info["email"];
    if($user_info["address"]["postal_code"] != ""){
        $q["user_zip1"] = substr($user_info["address"]["postal_code"],0,3);
        $q["user_zip2"] = substr($user_info["address"]["postal_code"],3);
    }

    if($user_info["phone"]["number"] != ""){
        //電話番号をハイフンありに変換
        $tel_n =  format_phone_number($user_info["phone"]["number"]);
        $tel_n_ary =  explode("-",$tel_n);
        $q["user_tel1"] = $tel_n_ary[0];
        $q["user_tel2"] = $tel_n_ary[1];
        $q["user_tel3"] = $tel_n_ary[2];
    }

}else{
	$q = cvQueryData2();
}

extract($q);



//ユニークフォームの作成

$unique_html = "";

foreach ($data["items"] as $item){
    //print "test";
    $unique_html .= uniqueFormHtmlTemplete($item['item_id'],$item['item_cart_id'],$data["options"]["items_paint"]);
}


//取付
if($items_mount==""){
	//値が来ていない場合は、取り付けなしとして処理
	$items_mount = 3;
}


//都道府県取得
$pref_option = getSelectOption($pref_ay, $_POST["items_place"]);
$pref_select = '
<select name="pref" id="pref" class="select-box">
  <option value="">選択</option>
  '. $pref_option .'
</select>';

$pref_select = ecd($pref_select);

function ecd($str){
    $str = mb_convert_encoding($str,"sjis","utf8");
    return $str;
}

if(!preg_match("/confirm.php/",$_SERVER['SCRIPT_NAME'])){

    //バリデート対象の設定（nameを指定）

    //空の場合
    $required_request = array("user_year","user_kata","user_name1","user_name2","user_kana","user_buy","user_zip1","user_zip2","user_add1","user_pref",
    "user_sender_to","user_send_name1","user_send_name2","user_send_kana","user_send_zip1","user_send_zip2","user_send_add1","user_send_pref",
    "user_send_company","user_send_zip1_2","user_send_zip2_2","user_send_add1_2","user_send_pref2","user_send_shop",
    "user_mail","user_mail2","user_tel1","user_tel2","user_tel3","user_policy","user_send_tel1","user_send_tel2","user_send_tel3","user_send_tel1_2","user_send_tel2_2","user_send_tel3_2","user_check_send");


    //メアドチェック
    $required_format = array("user_mail","user_mail2");


    //取り付け概要の必須
    if($items_mount==1){
        $required_request[] = "user_check";
        //$required_request[] = "user_check3";
    }

    //純正色塗装済留意点の必須
    if($items_paint==1){
        $required_request[] = "user_check2";
    }


    //未塗装済留意点の必須
    if($items_paint!=1){
        $required_request[] = "user_nopaint_check";
    }


    //塗装有、ダムド取付の場合のみ追加の条件
    if($items_paint==1 and $items_mount==2){
        $required_request[] = "user_mount_info1";
        $required_request[] = "user_mount_info2";
        $required_request[] = "user_check_damd";
    }


    $error_all_ay = array();
    if(is_array($required_request)){
        foreach($required_request as $val){
            $error_all_ay[$val]['request'] = '<span id="'. $val .'_request_msg" class="console hide">●入力してください</span>';
        }
    }


    if(is_array($required_format)){
        foreach($required_format as $val){
            $error_all_ay[$val]['format'] = '<span id="'. $val .'_format_msg" class="console hide">●メールの形式が正しくありません</span>';
        }
    }


    $error_ay = array();


    if($_POST["reg"]==1 && $back==""){

        //必須チェック
        $error_ay = array();
        $hasError = false;

        //同一配送先チェックが入っていれば実行しないバリデート定義
        $send_required_base = array("user_sender_to");

        $send_required = array("user_send_name1","user_send_name2","user_send_kana","user_send_zip1","user_send_zip2","user_send_pref","user_send_add1","user_send_tel1","user_send_tel2","user_send_tel3");

        $send_required2 = array("user_send_company","user_send_zip1_2","user_send_zip2_2","user_send_pref2","user_send_add1_2","user_send_tel1_2","user_send_tel2_2","user_send_tel3_2");

        $send_required3 = array("user_send_shop");

        if($items_mount != 3){

            //もし発送がない場合、配送関連のバリデートを削除
            $required_request = array_diff($required_request, $send_required_base);
            $required_request = array_diff($required_request, $send_required);
            $required_request = array_diff($required_request, $send_required2);
            $required_request = array_diff($required_request, $send_required3);
            $required_request = array_values($required_request);

        }else{

            //発送がある場合、発送方法によってバリデートすべき値をを決める
            if($user_sender_to==1){
                $required_request = array_diff($required_request, $send_required2);
                $required_request = array_diff($required_request, $send_required3);
                $required_request = array_values($required_request);
            }elseif($user_sender_to==2){
                $required_request = array_diff($required_request, $send_required);
                $required_request = array_diff($required_request, $send_required3);
                $required_request = array_values($required_request);
            }elseif($user_sender_to==3){
                $required_request = array_diff($required_request, $send_required);
                $required_request = array_diff($required_request, $send_required2);
                $required_request = array_values($required_request);
            }
        }

        //他社パーツ取り外しが発生しない場合必須から、他社パーツ詳細記入欄の必須チェックを削除
        if($user_mount_info1!=1){
            $mount_required = array("user_mount_info2");
            $required_request = array_diff($required_request, $mount_required);
            $required_request = array_values($required_request);
        }



        if(is_array($required_request)){
            foreach($required_request as $val){
                $error_all_ay[$val] = array('request' => '<span id="'. $val .'_request_msg" class="console hide">●入力してください</span>');

                if($$val == ""){
                    $error_ay[$val] = str_replace(' hide', '', $error_all_ay[$val]['request']);
                    $hasError = true;
                    //print $val;
                    //exit();
                } else {
                    $error_ay[$val] = $error_all_ay[$val]['request'];
                }
            }
        }

        //exit();

        if(is_array($required_format)){

            foreach($required_format as $val){

                $error_all_ay[$val] = array('request' => '<span id="'. $val .'_format_msg" class="console hide">●メールの形式が正しくありません</span>');

                if (!checkEmailAddress($$val, $err_msg_ary)) {
                    $err_temp = str_replace(' hide', '', $error_all_ay[$val]['format']);
                    $hasError = true;

                    $pos = strpos($err_temp, '</span>');

                    if ($pos !== false) {
                        $ins_msg = implode('<br>', $err_msg_ary);
                        $err_temp = substr($err_temp, 0, $pos);
                        $err_temp .= '<br>' . $ins_msg . '</span>';
                    }

                    $error_ay[$val] .= $err_temp;

                } else {
                    $error_ay[$val] = $error_all_ay[$val]['format'];
                }

            }

        }

        //メール同一チェック
        if($user_mail != $user_mail2){
            $hasError = true;
            $error_ay["user_mail2"] = '<span id="'. $val .'_format_msg" class="console">●メールアドレスが上記と一致しません</span>';
        }


        if(!$hasError){
            //次の画面へ
            $_SESSION["user_info"] = $q;
            //print_r($q);
            //exit();
            header("location:./confirm.php#pan");
            exit;
        }



    } else {

        if(is_array($required_request)){
            foreach($required_request as $val){
                $error_ay[$val] = $error_all_ay[$val]['request'];
            }
        }

        if(is_array($required_format)){
            foreach($required_format as $val){
                $error_ay[$val] .= $error_all_ay[$val]['format'];
            }
        }
    }

}


/* ページ設定 */
$ttl = "";
$ttl_eng = "";
$dsc = "";
$kw = "";
$bread[$ttl] = "";

?>


<!DOCTYPE html>
<html lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>購入申し込みフォーム | エアロパーツ、ドレスアップのダムド | DAMD Inc.</title>
<meta name="viewport" content="width=device-width,initial-scale=1.0" />
<!--#include virtual="/common/meta.html" -->
<meta http-equiv="content-style-type" content="text/css" />


<link rel="stylesheet" href="/css/base.css" type="text/css" />
<link rel="stylesheet" href="/css/style.css" type="text/css" />
<link rel="stylesheet" href="/webfont/css/font-awesome.min.css">
<link rel="stylesheet" href="/css/modal.css">

<!-- <script src="/js/jquery.js" type="text/javascript"></script> -->
<link rel="stylesheet" href="https://damd-assets.s3.ap-northeast-1.amazonaws.com/css/dist.css" type="text/css">        
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>        
<script src="https://damd-assets.s3.ap-northeast-1.amazonaws.com/js/cart.min.js"></script>


<!--
 <link rel="stylesheet" type="text/css" href="../../../fancybox/jquery.fancybox.css" media="screen" />
<script src="../../../fancybox/jquery.fancybox.js"></script>
<script src="../../../fancybox/jquery.mousewheel-3.0.6.pack.js"></script>
<script src="../../../fancybox/fancyboxck.js"></script>
-->

<link rel="stylesheet" type="text/css" media="all" href="/lib/stellarnav/stellarnav.css">
<script type="text/javascript" src="/lib/stellarnav/stellarnav.min.js"></script>
<script type="text/javascript">
jQuery(document).ready(function($) {
    jQuery('.stellarnav').stellarNav({
        theme: 'light'
    });

    jQuery("[name=user_send_check]").change(function(){
        //alert();
        if(jQuery(this).prop("checked")==true){
            jQuery(".send-area").hide();
        }else{
            jQuery(".send-area").show();
        }
    });
});
</script>

<script src="/js/update.js" type="text/javascript"></script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-51828010-1', 'damd.co.jp');
  ga('send', 'pageview');
</script>

<?php require_once($_SERVER["DOCUMENT_ROOT"]."/common/php/header.php") ?>

</head>
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/common/header.html");?>
    <h1 class="common-ttl text-center menu-mgn">購入申し込みフォーム</h1>
    <div class="content-wrap pb">
		<ul class="progressbar mt-4">
            <li class="active">ご入力</li>
            <!--<li class="">写真３枚</li>-->

            <li>確認画面</li>
            <li>完了</li>
        </ul>

    <div class="form mt-4">

<form action="./#pan" method="post" name="form1" id="form1">

    <?

    //print_r($data);
    //sprint_r($data);
    //商品ユニークの出力
    if($unique_html != ""){
        echo '<div id="unique_form">';
        echo "<h2 class='ttl text-center' style='font-size: 18px'>商品の仕様を選択してください</h2>";
        echo $unique_html;
        echo '<div class="text-center"><button type="button" name="unique_area" value="1" class="btn btn-danger">次へ</button></div>';
        echo '</div>';
    }

    ?>

    <div id="common_form">
        <div class="form-sec sec01">
	    <h2>お持ちのお車の情報</h2>
            <div class="container-fluid">
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label"><div class="form-bg"><span class="badge badge-pill badge-danger">必須</span>年式</div></label>
                    <div class="col-sm-5">
                        <input type="text" name="user_year" class="form-control" value="<?= $user_year ?>" placeholder=""><?= $error_ay["user_year"] ?>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label"><div class="form-bg"><span class="badge badge-pill badge-danger">必須</span>型式</div></label>
                    <div class="col-sm-5">
                        <input type="text" name="user_kata" class="form-control" value="<?= $user_kata ?>" placeholder=""><?= $error_ay["user_kata"] ?>
                    </div>
                </div>
            </div>
        </div>









<div class="form-sec sec02">



	<h2>お客様情報</h2>

<div class="container-fluid">





	<div class="form-group row">

		<label class="col-sm-3 col-form-label"><div class="form-bg">会社名</div></label>

		<div class="col-sm-5">

			<input type="text" name="user_company" class="form-control" value="<?= $user_company ?>" placeholder="">

		</div>

	</div>



  <div class="form-group row">

    <label class="col-sm-3 col-form-label"><div class="form-bg"><span class="badge badge-pill badge-danger">必須</span>お名前</div></label>

    <div class="col-sm-6">

			<input style="width:120px;display:inline-block" type="text" id="name1" name="user_name1" class="form-control" value="<?= $user_name1 ?>" placeholder="鈴木">

			<input style="width:120px;display:inline-block" type="text" id="name2" name="user_name2" class="form-control" value="<?= $user_name2 ?>" placeholder="太郎"><?= $error_ay["user_name1"] ?><?= $error_ay["user_name2"] ?>



		</div>



  </div>



  <div class="form-group row">

    <label class="col-sm-3 col-form-label"><div class="form-bg"><span class="badge badge-pill badge-danger">必須</span>フリガナ</div></label>

    <div class="col-sm-5">

      <input type="text" name="user_kana" class="form-control" value="<?= $user_kana ?>" placeholder="例）スズキタロウ"><?= $error_ay["user_kana"] ?>

    </div>

  </div>



	<div class="form-group row">

    <label class="col-sm-3 col-form-label"><div class="form-bg"><span class="badge badge-pill badge-danger">必須</span>郵便番号</div></label>

    <div class="col-sm-6">

      <input style="width:80px;display:inline-block" type="text" id="zip1" name="user_zip1" class="form-control" value="<?= $user_zip1 ?>" placeholder="123">-

			<input style="width:100px;display:inline-block" type="text" id="zip2" name="user_zip2" class="form-control" value="<?= $user_zip2 ?>" placeholder="0045"><?= $error_ay["user_zip1"] ?><?= $error_ay["user_zip2"] ?>

		</div>



  </div>



	<div class="form-group row">

    <label class="col-sm-3 col-form-label"><div class="form-bg"><span class="badge badge-pill badge-danger">必須</span>都道府県</div></label>

    <div class="col-sm-5">

      <select id="pref" name="user_pref" class="form-control form-control">

      	<?php print getOptionHtml($pref_ay,$user_pref); ?>

      </select>



	  <?= $error_ay["user_pref"] ?>

    </div>

  </div>



	<div class="form-group row">

    <label class="col-sm-3 col-form-label"><div class="form-bg"><span class="badge badge-pill badge-danger">必須</span>ご住所</div></label>

    <div class="col-sm-9">

      市区町村：<input id="address" type="text" name="user_city" class="form-control" value="<?= $user_city ?>" placeholder="新宿区西新宿"><?= $error_ay["user_city"] ?>

      番地：<input id="address" type="text" name="user_add1" class="form-control" value="<?= $user_add1 ?>" placeholder="1-1-1"><?= $error_ay["user_add1"] ?>

      建物：<input type="text" name="user_add2" class="form-control" value="<?= $user_add2 ?>" placeholder="サンプルビル101"><?= $error_ay["user_add2"] ?>

    </div>

  </div>



  <div class="form-group row">

    <label class="col-sm-3 col-form-label"><div class="form-bg"><span class="badge badge-pill badge-danger">必須</span>メールアドレス</div></label>

    <div class="col-sm-9">

      <input type="email" name="user_mail" class="form-control" value="<?= $user_mail ?>" placeholder="例）sample@sample.co.jp"><?= $error_ay["user_mail"] ?>

			※携帯電話のメールアドレスをご入力いただく場合、スマートフォンのみの対応となります。

    </div>

  </div>



  <div class="form-group row">

    <label class="col-sm-3 col-form-label"><div class="form-bg"><span class="badge badge-pill badge-danger">必須</span>メールアドレス（確認用）</div></label>

    <div class="col-sm-9">

      <input type="email" name="user_mail2" class="form-control" value="<?= $user_mail2 ?>" placeholder=""><?= $error_ay["user_mail2"] ?>

    </div>

  </div>



  <div class="form-group row">

    <label class="col-sm-3 col-form-label"><div class="form-bg"><span class="badge badge-pill badge-danger">必須</span>電話番号</div></label>

    <div class="col-sm-7">

      <input style="width:60px;display:inline-block" type="text" name="user_tel1" class="form-control" value="<?= $user_tel1 ?>" placeholder="080">-

      <input style="width:60px;display:inline-block" type="text" name="user_tel2" class="form-control" value="<?= $user_tel2 ?>" placeholder="1234">-

      <input style="width:60px;display:inline-block" type="text" name="user_tel3" class="form-control" value="<?= $user_tel3 ?>" placeholder="5678">



			<?= $error_ay["user_tel1"] ?>

			<?= $error_ay["user_tel2"] ?>

			<?= $error_ay["user_tel3"] ?>

    </div>

  </div>



</div>

</div>



<?php

if($items_mount==2 || $items_mount==1){

	//ダムドで取り付け、紹介店取り付けの場合は配送先は非表示

	$send_style = "style='display:none'";



}else{



$sender_to_ay = mkSendToAy();

//配送業者

$sender_ary=mkSenderAy();



/*

print_r($sender_to_ay);

print_r($sender_ary);

*/



if($data["options"]["corporate_only"]==1){

    //配送業者が混ざっている場合、法人宛てのみ　自宅、営業所止めを削除

    unset($sender_to_ay[1]);

    unset($sender_to_ay[3]);

}elseif($data["options"]["item_sender"]!=""){

   //配送業者が混ざっていない場合

    $sender_name = $data["options"]["item_sender_name"];

}



    $send_no_homes = array();

    $send_no_homes  = explode(",",$row["item_no_home"]);

	if(in_array(1,$send_no_homes)){

		//個人宅不可の場合

		$sender_style = "";

        $sender_style2 = "hide";

		if($row["item_sender"] != ""){



		    $sender_name = $sender_ary[$row["item_sender"]];

		    //個人宅という選択を消します

		    unset($sender_to_ay[1]);



		}else{

				unset($sender_to_ay[1]);

				$sender_name = "福山通運";

			}

	}else{

        //個人宅が可能の場合、営業所止め項目を削除

        unset($sender_to_ay[3]);

        $sender_style = "hide";

        $sender_style2 = "hide";

    }



	if(in_array(2,$send_no_homes)){

	//支店止め不可の場合

        $sender_style = "hide";

        $sender_style2 = "";

        unset($sender_to_ay[3]);

	}







}

 ?>







<div class="form-sec sec02" <?= $send_style ?>>



	<h2>発送先情報</h2>

<div class="container-fluid">



	<!--

    <div class="alert alert-primary <?= $sender_style ?>">

		<small>

			※本製品の配送は個人宅不可となります。法人様宛または最寄りの<span id="sender"><?= $sender_name ?></span>営業所止めとなります。

		</small>

	</div>



    <div class="alert alert-primary <?= $sender_style2 ?>">

        <small>

            ※本製品の配送は個人宅不可となり、法人様宛のみの配送となります。

        </small>

    </div>

-->





		<div class="form-group row">

			<label class="col-sm-3 col-form-label"><div class="form-bg"><span class="badge badge-pill badge-danger">必須</span>発送先</div></label>

			<div class="col-sm-9">

<?=

				getRadioFromMasterData ($sender_to_ay,'name="user_sender_to"', "" , $user_sender_to, '<label style="margin-right:10px;">','</label>  ')

				?>

				<?= $error_ay["user_sender_to"] ?>

			</div>



		</div>











<div class="send-area1" style="<?php if($user_sender_to == 1) {print "display:block;";}else{print "display:none;";} ?>">



<div class="form-group row">



	<div class="col-sm-12 text-center">

			<label><button type="button" class="btn" name="user_info_copy">上記で入力したお客様情報をコピーする</button></label>

	</div>





		<label class="col-sm-3 col-form-label"><div class="form-bg"><span class="badge badge-pill badge-danger">必須</span>お名前</div></label>

		<div class="col-sm-6">

			<input style="width:120px;display:inline-block" type="text" id="name1" name="user_send_name1" class="form-control" value="<?= $user_send_name1 ?>" placeholder="">

			<input style="width:120px;display:inline-block" type="text" id="name2" name="user_send_name2" class="form-control" value="<?= $user_send_name2 ?>" placeholder=""><?= $error_ay["user_send_name1"] ?><?= $error_ay["user_send_name2"] ?>

		</div>

	</div>



	<div class="form-group row">

    <label class="col-sm-3 col-form-label"><div class="form-bg"><span class="badge badge-pill badge-danger">必須</span>フリガナ</div></label>

    <div class="col-sm-5">

      <input type="text" name="user_send_kana" class="form-control" value="<?= $user_send_kana ?>" placeholder="例）スズキタロウ"><?= $error_ay["user_send_kana"] ?>

    </div>

  </div>



	<div class="form-group row">

    <label class="col-sm-3 col-form-label"><div class="form-bg"><span class="badge badge-pill badge-danger">必須</span>郵便番号</div></label>

    <div class="col-sm-6">

      <input style="width:80px;display:inline-block" type="text" id="zip_send1" name="user_send_zip1" class="form-control" value="<?= $user_send_zip1 ?>" placeholder="123">-

			<input style="width:100px;display:inline-block" type="text" id="zip_send2" name="user_send_zip2" class="form-control" value="<?= $user_send_zip2 ?>" placeholder="0045"><?= $error_ay["user_send_zip1"] ?><?= $error_ay["user_send_zip2"] ?>

		</div>



  </div>



	<div class="form-group row">

    <label class="col-sm-3 col-form-label"><div class="form-bg"><span class="badge badge-pill badge-danger">必須</span>都道府県</div></label>

    <div class="col-sm-5">

      <select id="pref_send" name="user_send_pref" class="form-control form-control">

      	<?php print getOptionHtml($pref_ay,$user_send_pref); ?>

      </select>



	  <?= $error_ay["user_send_pref"] ?>

    </div>

  </div>



	<div class="form-group row">

    <label class="col-sm-3 col-form-label"><div class="form-bg"><span class="badge badge-pill badge-danger">必須</span>ご住所</div></label>

    <div class="col-sm-9">

      市区町村：<input id="address_send" type="text" name="user_send_city1" class="form-control" value="<?= $user_send_city1 ?>" placeholder="新宿区西新宿">

      番地：<input id="address_send" type="text" name="user_send_add1" class="form-control" value="<?= $user_send_add1 ?>" placeholder="1-1-1">

      建物：<input type="text" name="user_send_add2" class="form-control" value="<?= $user_send_add2 ?>" placeholder="サンプルビル101"><?= $error_ay["user_send_add1"] ?>

    </div>

  </div>



	<div class="form-group row">

		<label class="col-sm-3 col-form-label"><div class="form-bg"><span class="badge badge-pill badge-danger">必須</span>電話番号</div></label>

		<div class="col-sm-7">

			<input style="width:60px;display:inline-block" type="text" name="user_send_tel1" class="form-control" value="<?= $user_send_tel1 ?>" placeholder="080">-

			<input style="width:60px;display:inline-block" type="text" name="user_send_tel2" class="form-control" value="<?= $user_send_tel2 ?>" placeholder="1234">-

			<input style="width:60px;display:inline-block" type="text" name="user_send_tel3" class="form-control" value="<?= $user_send_tel3 ?>" placeholder="5678">



			<?= $error_ay["user_send_tel1"] ?>

			<?= $error_ay["user_send_tel2"] ?>

			<?= $error_ay["user_send_tel3"] ?>

		</div>

	</div>





	</div>







	<div class="send-area2" style="<?php if($user_sender_to == 2){print "display:block;";}else{print "display:none;";} ?>">







		<div class="form-group row">



			<div class="col-sm-12 text-center">

					<label><button type="button" class="btn" name="user_info_copy2">上記で入力したお客様情報をコピーする</button></label>

			</div>





			<label class="col-sm-3 col-form-label"><div class="form-bg"><span class="badge badge-pill badge-danger">必須</span>会社名</div></label>

			<div class="col-sm-5">

				<input type="text" name="user_send_company" class="form-control" value="<?= $user_send_company ?>" placeholder=""><?= $error_ay["user_send_company"] ?>

			</div>

		</div>

		<div class="form-group row">

			<label class="col-sm-3 col-form-label"><div class="form-bg">お名前</div></label>

			<div class="col-sm-5">

				<input style="width:120px;display:inline-block" type="text" id="name1" name="user_send_name2_1" class="form-control" value="<?= $user_send_name2_1 ?>" placeholder="">

				<input style="width:120px;display:inline-block" type="text" id="name2" name="user_send_name2_2" class="form-control" value="<?= $user_send_name2_2 ?>" placeholder=""><?= $error_ay["user_send_name2_1"] ?><?= $error_ay["user_send_name2_2"] ?>

			</div>

		</div>



		<div class="form-group row">

	    <label class="col-sm-3 col-form-label"><div class="form-bg">フリガナ</div></label>

	    <div class="col-sm-5">

	      <input type="text" name="user_send_kana2" class="form-control" value="<?= $user_send_kana2 ?>" placeholder="例）スズキタロウ">

	    </div>

	  </div>



		<div class="form-group row">

	    <label class="col-sm-3 col-form-label"><div class="form-bg"><span class="badge badge-pill badge-danger">必須</span>郵便番号</div></label>

	    <div class="col-sm-6">

	      <input style="width:80px;display:inline-block" type="text" id="zip_send1_2" name="user_send_zip1_2" class="form-control" value="<?= $user_send_zip1_2 ?>" placeholder="123">-

				<input style="width:100px;display:inline-block" type="text" id="zip_send2_2" name="user_send_zip2_2" class="form-control" value="<?= $user_send_zip2_2 ?>" placeholder="0045"><?= $error_ay["user_send_zip1_2"] ?><?= $error_ay["user_send_zip2_2"] ?>

			</div>



	  </div>



		<div class="form-group row">

	    <label class="col-sm-3 col-form-label"><div class="form-bg"><span class="badge badge-pill badge-danger">必須</span>都道府県</div></label>

	    <div class="col-sm-5">

	      <select id="pref_send2" name="user_send_pref2" class="form-control form-control">

	      	<?php print getOptionHtml($pref_ay,$user_send_pref2); ?>

	      </select>



		  <?= $error_ay["user_send_pref2"] ?>

	    </div>

	  </div>



		<div class="form-group row">

	    <label class="col-sm-3 col-form-label"><div class="form-bg"><span class="badge badge-pill badge-danger">必須</span>ご住所</div></label>

	    <div class="col-sm-9">

	      市区町村：<input id="address_send2" type="text" name="user_send_city2" class="form-control" value="<?= $user_send_city2 ?>" placeholder="新宿区西新宿">

	      番地：<input id="address_send2" type="text" name="user_send_add1_2" class="form-control" value="<?= $user_send_add1_2 ?>" placeholder="1-1-1">

	      建物：<input type="text" name="user_send_add2_2" class="form-control" value="<?= $user_send_add2_2 ?>" placeholder="サンプルビル101"><?= $error_ay["user_send_add1_2"] ?>

	    </div>

	  </div>



		<div class="form-group row">

			<label class="col-sm-3 col-form-label"><div class="form-bg"><span class="badge badge-pill badge-danger">必須</span>電話番号</div></label>

			<div class="col-sm-7">

				<input style="width:60px;display:inline-block" type="text" name="user_send_tel1_2" class="form-control" value="<?= $user_send_tel1_2 ?>" placeholder="080">-

				<input style="width:60px;display:inline-block" type="text" name="user_send_tel2_2" class="form-control" value="<?= $user_send_tel2_2 ?>" placeholder="1234">-

				<input style="width:60px;display:inline-block" type="text" name="user_send_tel3_2" class="form-control" value="<?= $user_send_tel3_2 ?>" placeholder="5678">



				<?= $error_ay["user_send_tel1_2"] ?>

				<?= $error_ay["user_send_tel2_2"] ?>

				<?= $error_ay["user_send_tel3_2"] ?>

			</div>

		</div>



		</div>





		<div class="send-area3" style="<?php if($user_sender_to == 3){print "display:block;";}else{print "display:none;";} ?>">



			<div class="form-group row">

				<label class="col-sm-3 col-form-label"><div class="form-bg"><span class="badge badge-pill badge-danger">必須</span>営業所名</div></label>

				<div class="col-sm-6">

					<input type="text" name="user_send_shop" class="form-control" value="<?= $user_send_shop ?>" placeholder="">

					※ご希望の<?= $sender_name ?>営業所名をご記入ください。<?= $error_ay["user_send_shop"] ?>

					<?php

                    if($sender_name=="西濃運輸"){

                        print "<br><br>

                    　各営業所の「営業所止め引き取りの可否」を必ずご確認の上、<br>

                    　配送先をご指定いただきますようお願い申し上げます。<br>

                    　なお、「ミニ便のみの対応店舗」は配送不可となります。<br><br>　<a href='https://www.seino.co.jp/seino/branch/' target='_blank'>".$sender_name."営業所一覧はこちら »</a>";

                    }else{

						print "<br><a href='https://corp.fukutsu.co.jp/shop/' target='_blank'>".$sender_name."営業所一覧はこちら »</a>";

					}

					?>

                    <input type="hidden" name="user_send_corp" value="<?= $row["item_sender"] ?>">



				</div>

			</div>















</div>



</div>



</div>







<div class="form-sec sec03">



	<h2>ご購入について、その他</h2>

<div class="container-fluid">



	<!--<div class="form-group row">

		<label class="col-sm-3 col-form-label"><div class="form-bg"><span class="badge badge-pill badge-danger">必須</span>購入数</div></label>

		<div class="col-sm-5">

			<input type="number" name="user_length" min="1" class="form-control" value="<?= $user_length ?>" placeholder=""><?= $error_ay["user_length"] ?>

		</div>

	</div>-->



  <div class="form-group row">

    <label class="col-sm-3 col-form-label"><div class="form-bg"><span class="badge badge-pill badge-danger">必須</span>購入方法</div></label>

		<?php



		if($data["options"]["item_loan_max"]<1){

		    //ダムド分割サポート制御

			unset($buy_ay[3]);

		}

		?>

    <div class="col-sm-5">

      <select name="user_buy" class="form-control form-control">

      	<?php print getOptionHtml($buy_ay,$user_buy); ?>

      </select>



	  <?= $error_ay["user_buy"] ?>

    </div>

  </div>





	<div class="form-group row">

		<label class="col-sm-3 col-form-label"><div class="form-bg"><span class="badge badge-pill badge-danger">必須</span>納期・発送について</div></label>

		<div class="col-sm-9">





			<div class="description">

	<h2>納期ならびに発送について</h2>

	<p>

		商品お届けの準備が整いましたら、<br>

		弊社より発送予定日と共に決済のご案内をメール致します。<br>

		ご案内後7日以内にご決済の確認が取れない場合、<br>

		ご注文はキャンセル扱いとさせていただきますのでご注意下さい。<br><br>



		ご決済後発送時期のご調整等は承る事が出来かねます。<br>

		予め配送先ならびに車両等についてご準備いただいた上、<br>

		購入をお申し込みいただきますようお願い申し上げます。

	</p>



	<?php

	print getCheckboxFromMasterData2 ($check_ay2, 'name="user_check_send[]"', "", $user_check_send, '<label>','</label>');

	?>

	<?= $error_ay["user_check_send"] ?>

	</div>



		</div>

	</div>





<?php

if($items_mount == 1){

?>



	<div class="form-group row">

		<label class="col-sm-3 col-form-label"><div class="form-bg"><span class="badge badge-pill badge-danger">必須</span>取付確認事項</div></label>

		<div class="col-sm-9">





			<div class="description">

<h2>取り付けを希望されるお客様へ</h2>



                <p>

                    製品代/塗装代/送料/取付工賃をまとめた総額をお振込みまたはクレジットカードにてダムドへお支払いただきます。<br><br>

                    取り付け店舗紹介は、株式会社インプルーブが提供する「ゴーゴーガレージ」との連携サービスです。ご利用にあたり下記ゴーゴーガレージカスタムパーツ取付サービスの注意事項ならびにご利用規約に同意が必要となります。必ずご一読ください。

                    <br>

                </p>

<br>

<p><a href="/howto/rules.html" target="_blank"><strong>カスタムパーツ取付サービスのご利用規約ならび注意事項</strong></a></p>



<textarea cols="50" rows="10">

【ダムド取付店舗紹介サービスご利用注意事項】



●	弊社指定の一部商品を除き、エアロパーツ等外装部品の取付に関しましては、塗装済み商品のみが対象となります。



●	当サービスは、株式会社インプルーブが提供するサービス「ゴーゴーガレージ」との提携によるサービスです。インプルーブ社が提供する下記「カスタムパーツ取付サービスご利用規約」を必ずご確認いただきますようお願い申し上げます。また、取付に伴う日程調整等においてゴーゴーガレージよりお客様へご連絡が必要となりますので、予めご了承下さい。



●	本取付サービスの対象は、株式会社ダムドから直接ご購入をいただき、指定の取付工場へダムドから直送した新品未開封パーツのみとなります。



●	当サービスは、株式会社インプルーブが提供するサービス「ゴーゴーガレージ」との提携によるサービスです。取付に伴う日程調整等においてゴーゴーガレージよりお客様へご連絡が必要となりますので、予めご了承下さい。



●	違法改造車は車両の受け入れができません。作業後に違法改造状態になると判断した場合は、作業をお断りさせて頂きます。



●	車両に適合した規格サイズのみ取り付けを行います。規定の取付方法と異なる場合、商品・車両の特殊な加工をご希望の場合、お断りすることがあります。取付に伴い、該当パーツの取付説明書に記載がない加工や他部品の脱着が必要となった場合、別途料金が必要となります。



●	作業後に元に戻す作業が発生した場合は、別途料金が必要となります。



●	作業後に不要となった部品処分をご希望される場合は、別途処分費用が必要となります。ご希望の場合は、事前お見積りさせて頂きます。



●	上記追加料金については、取付工場へ直接現金にてお支払い下さい。



●	取付商品は、弊社規定に基づき、取付工場をお客様へご案内後、取付工場へ直接発送としております。



●	1決済につき取付車両は1台としております。2台以上の作業をご希望の場合は、決済を分けてご購入をお願い致します。



●	塗装済み外装パーツ商品の場合、商品加工によるチリ合わせ等のご調整はお受けできません。予めご了承ください。



●	弊社塗装済み商品は、各自動車メーカー指定色番号と同様の塗料にて塗装を行いますが、ボディの日焼けや経年劣化等によるお客さまの車両状態、また新車であってもベースとなる下地素材の違いや車体毎の個体差等複雑な条件により、色味に若干の誤差が発生する可能性がございます。取付作業後、色味の誤差によるキャンセル、ご返金は承ることができませんので、予めご了承ください。



【サービスご利用の流れとキャンセル等に関するご注意事項】



●	本サービスは、取付作業確定時にゴーゴガレージよりメールにて「サービスチケット」を発行致します。この「サービスチケット」を作業当日取付工場に提示することで、本人確認とし取付作業を行わせて頂きます。ご利用の際は、「サービスチケット」をご持参頂きますようお願い致します。



●	取付工賃を含めた商品のご決済後、車両情報等の確認をさせて頂いております。確認メール送信後30日を経過してもご返信頂けない場合は、ご依頼はキャンセルとさせて頂きます。



●	取付工場でご提示頂くサービスチケットはメールにて送信致します。また、サービスチケットの有効期限はサービスチケット送信後から60日までとさせて頂いております。サービスチケットでご対応可能なパーツは、株式会社ダムドから直接購入し、ダムドより取付店舗へ直接配送した未開封の新品パーツのみです。



●	上記【ダムド取付店舗紹介サービスご利用注意事項】の記載の通り、取付交換の別途料金または取付不可に関する規定がございます。該当する項目により、取付または交換が出来なかった場合でも、ご返金は出来ません。事前に必ず注意事項をご確認下さい。



●	納車時の確認以降ご返金はいたしかねます。予めご了承ください。



●	ご案内する取付工場は、該当製品の取付作業に慣れている工場を優先的にご案内いたします。距離等も含め、取付前に予めお客様へゴーゴーガレージよりご相談をさせていただきます。こちらのご案内時に取付をキャンセルされた場合、取付工賃のみダムドより返金をさせていただきますが、取付工賃を除く商品代金は返金の対象外となります。予めご了承ください。



●	お客様の事情により作業を実施しない場合においても、返金等は行いません。お客様の事情により作業を実施せず、かつ取付商品が取付工場へ到着している場合は、お客様負担で取付商品の引取りをお願い致します。



【カスタムパーツ取付サービスご利用規約】



■本規約

株式会社インプルーブ(以下「当社」といいます。)が提供するカスタムパーツ取付サービス(以下「本サービス」といいます。)の利用に関して、本サービスを利用するお客様(以下「利用者」といいます。)と当社との間で定めるものとします。



■本サービスの定義

本サービスは利用者が、当社と提携した販売会社から購入した自動車カスタムパーツについて当社の提携工場を紹介するサービスです。



■利用資格

利用者は、本規約に賛同できる方で、満 20 歳以上の自動車等を運転する資格(運転免許証)をお持ちの方に限ります。



利用希望者が次のいずれかに該当すると判断した場合には、利用を承認しないことがあります。



他人、架空の個人情報又は虚偽の個人情報を利用するなど、利用の内容に虚偽があった場合

(他の利用者になりすました場合も該当)

過去に本規約に違反し、本サービスの利用を制限された場合

・ その他、当社が利用を承認することが適切でないと判断した場合

・ 盗難車、事故・犯罪の痕跡を隠蔽・消滅する目的での利用

・ 違法改造車、車検不適合車のサービス利用

法令や条例に違反する行為や犯罪行為又は、違反するおそれのある行為や犯罪行為に結びつくおそれのある行為

その他、当社が利用を承認することが適切でないと判断した場合



利用者が上記の禁止行為のうちいずれか一つでも行った場合、当社は当該利用者の利用資格を事前の通知無しに停止することができ、以後の利用を禁止することができるものとします。



■個人情報の取り扱い

当社は、本サービスを提供するにあたり提携先から提供された個人情報を本サービスにのみ使用し、それ以外の目的で使用することはありません。



■利用料金の支払い・キャンセルについて

商品発送前に当社にキャンセルのお申し出があった場合は、キャンセル料等は発生しません。

商品発送後に当社にキャンセルのお申し出があった場合は、利用料金の100%をキャンセル料および受取代行料金として請求します。またその際の発送済み商品については利用者負担で引き取りをお願いします。

商品の型番違いや、その他の事由により取付が行えず、車両を元の状態に戻す場合、追加料金が発生する場合があります。



■免責

利用者は、本サービスの利用に際し、利用者が第三者及び取付工場に与えた損害の一切の責任を負うものとします。この損害については利用者の責任とし、当社及び株式会社ダムド、取付工場に損害を与えないこととします。また、当社が損害を被った場合、これを速やかに補償するものとします。



当社ならびに株式会社ダムドは、天災地変、交通の閉塞その他不可抗力の発生等、利用者及び取付工場のいずれの責に帰することができない事由により本サービスの提供ができない場合、その損害を賠償する責任を一切負わないものとします。



■反社会的勢力の排除

当社は、暴力団員等の本サービスの利用は認めません。暴力団員等とは、自ら又は自らの役員が、暴力団、暴力団員、暴力団員でなくなった時から 5 年を経過しない者、暴力団準構成員、暴力団関係企業、総会屋、社会運動等標ぼうゴロ又は特殊知能暴力集団等その他これらに準じる者を言います。



利用者は、本規約に同意した時点で、暴力団員等に該当しないこと、且つ将来にわたっても該当しないことを表明し、保証したものとみなします。

利用時に、当該利用者が暴力団員等であることが判明した場合、本サービスを受けることはできません。



■定めなき事項

本規約に定めなき事項が発生した場合は双方誠意をもって協議の上、解決に当たるものとします。



2021 年 9 月 1 日 制定・施行

</textarea>







<?php

print getCheckboxFromMasterData2 ($check_ay, 'name="user_check[]"', "", $user_check, '<label>','</label>');

?>

<?= $error_ay["user_check"] ?>

</div>



		</div>

	</div>



<?php

}

?>



    <?php

    if($items_paint != 1){

        ?>



        <div class="form-group row">

            <label class="col-sm-3 col-form-label"><div class="form-bg"><span class="badge badge-pill badge-danger">必須</span>未塗装品確認事項</div></label>

            <div class="col-sm-9">





                <div class="description">

                    <h2>未塗装品関する注意事項</h2>

                    <p>

                        未塗装品はお客様ご自身にて塗装を御手配いただくことが前提の商品となります。<br>

                        そのままの状態ではご装着いただくことはできません。<br><br>



                        また、未塗装品の商品では面を平す為、<br>

                        商品本体をヤスリ等で削るなど塗装に向けた加工が行われております。<br>

                        予めご了承の上、ご注文いただきますようお願い申し上げます。

                    </p>



                    <?php

                    print getCheckboxFromMasterData2 ($check_ay2, 'name="user_nopaint_check[]"', "", $user_nopaint_check, '<label>','</label>');

                    ?>

                    <?= $error_ay["user_nopaint_check"] ?>

                </div>



            </div>

        </div>



        <?php

    }

    ?>



<?php

if($items_paint == 1){

?>



	<div class="form-group row">

		<label class="col-sm-3 col-form-label"><div class="form-bg"><span class="badge badge-pill badge-danger">必須</span>塗装品確認事項</div></label>

		<div class="col-sm-9">





			<div class="description">

<h2>純正色塗装済み品をご検討のお客さま</h2>

<p>

	弊社塗装済み商品は各自動車メーカー指定色番号の塗料にて塗装いたしますが、<br>

	紫外線等によるボディ塗装面の日焼けや経年劣化等による各お客さまの車両状態、<br>

	また新車であってもベースとなる下地素材の違い等複雑な条件により、<br>

	色味に若干の誤差が発生する場合がございます。<br><br>



	予めご了承の上、購入をお願い申し上げます。

</p>



<?php

print getCheckboxFromMasterData2 ($check_ay2, 'name="user_check2[]"', "", $user_check2, '<label>','</label>');

?>

<?= $error_ay["user_check2"] ?>

</div>



		</div>

	</div>



<?php

}

?>













    <?php



if($items_paint == 1 and $items_mount ==2){

    $check_damd = mkCheckAyDamd();

$mount_info_ay = mkMountInfoAy();



//詳細記入のデフォルト表示

if($user_mount_info1==1){

	$mount_detail = "";

}else{

	$mount_detail = " style='display:none'";

}



?>



	<div class="form-group row">

		<label class="col-sm-3 col-form-label"><div class="form-bg"><span class="badge badge-pill badge-danger">必須</span>取付箇所の状態</div></label>

		<div class="col-sm-9">





			<div class="description">

<h2>ダムド製パーツの取付に際し、<br>他社製パーツと干渉の可能性や<br>他社製パーツの取り外しは必要ですか。</h2>

<p>

見積もりのパーツ取付工賃はノーマル車両に取り付けた想定の工賃となっております。

別途他社製パーツの取り外しや他パーツとの干渉に伴う加工が必要となった場合、

内容によって別途工賃が発生するケースがございます。<br>

可能な限り正確な情報を申請いただきますようご協力お願い申し上げます。

</p>



<?=

				getRadioFromMasterData ($mount_info_ay,'name="user_mount_info1"', "" , $user_mount_info1, '<label style="margin-right:10px;">','</label>  ')

				?>

				<?= $error_ay["user_mount_info1"] ?>

</div>



		</div>

	</div>



    <div class="form-group row">

        <label class="col-sm-3 col-form-label"><div class="form-bg"><span class="badge badge-pill badge-danger">必須</span>ダムド取付について</div></label>

        <div class="col-sm-9">





            <div class="description">



                <p>

                    ダムド本社での取付けは平日9:00〜18:00のみのご対応となります。<br>

                    完全予約制となります為、正式受注後、製品の準備が整い次第、<br>

                    日程調整のご連絡を弊社から送らせていただきます。<br>

                    （製品の納期は別途かかりますので、ご注意ください。）<br><br>



                    なお、施工内容によっては即日装着が不可のケースもございます。<br>

                    車両をお預かりするケースもございます為、予めご了承ください。<br>

                    なお、代車等のご用意はございません為、ご注意ください。

                </p>



                <?=

                getCheckboxFromMasterData2 ($check_damd, 'name="user_check_damd[]"', "", $user_check_damd, '<label>','</label>');

                ?>

                <?= $error_ay["user_check_damd"] ?>

            </div>



        </div>

    </div>



	<div class="form-group row" id="mount_info_detail"<?= $mount_detail ?>>

		<label class="col-sm-3 col-form-label"><div class="form-bg"><span class="badge badge-pill badge-danger">必須</span>干渉や取り外しの可能性有り</div></label>

		<div class="col-sm-9">





			<div class="description">



<p>

「干渉や取り外しの可能性有り」とお答えの方は、車両状態について詳細を可能限りご教示お願いいたします。

</p>



<textarea name="user_mount_info2" class="form-control" id="exampleFormControlTextarea1" placeholder="他社製パーツ名や装着年数、装着状態など可能限り詳細をご記入ください。" rows="3"><?= $user_comment ?></textarea>

<?= $error_ay["user_mount_info2"] ?>

</div>



		</div>

	</div>



<?php

}

?>











  <div class="form-group row">

    <label class="col-sm-3 col-form-label"><div class="form-bg">備考</div></label>

    <div class="col-sm-9">

      <textarea name="user_comment" class="form-control" id="exampleFormControlTextarea1" rows="3"><?= $user_comment ?></textarea>

      <?= $error_ay["user_comment"] ?>

    </div>

  </div>



	<div class="form-group row">

    <label class="col-sm-3 col-form-label"><div class="form-bg"><a style="text-decoration:underline;" target="_blank" href="/privacy/"><span class="badge badge-pill badge-danger">必須</span>プライバシーポリシー</a></div></label>

    <div class="col-sm-9">

			<?php

			print getCheckboxFromMasterData2 ($policy_ay, 'name="user_policy[]"', "", $user_policy, '<label>','</label>');

			?>

			<?= $error_ay["user_policy"] ?>

    </div>

  </div>



</div>

</div>







  <div class="text-center mt-5">

  	<button type="submit" name="reg" value="1" class="btn btn-danger">確認</button>



      <!--<div class="unique_area_back text-center mt-2" style="text-decoration: underline">商品の仕様選択へ戻る</div>-->

      <!-- 送信見積データ -->







	<!--

      <input type="hidden" name="file1" value="<?= $file1 ?>">

		<input type="hidden" name="file2" value="<?= $file2 ?>">

		<input type="hidden" name="file3" value="<?= $file3 ?>">



		<input type="hidden" name="item_id" value="<?= $item_id ?>" />

		<input type="hidden" name="item_total" value="<?= $item_total ?>" />

		<input type="hidden" name="item_loan6" value="<?= $item_loan6 ?>" />

		<input type="hidden" name="item_loan12" value="<?= $item_loan12 ?>" />

		<input type="hidden" name="item_loan18" value="<?= $item_loan18 ?>" />

		<input type="hidden" name="item_loan24" value="<?= $item_loan24 ?>" />

		<input type="hidden" name="item_loan36" value="<?= $item_loan36 ?>" />

		<input type="hidden" name="item_id" value="<?= $item_id ?>" />

		<input type="hidden" name="item_price" value="<?= $item_price ?>" />

		<input type="hidden" name="item_p_cost" value="<?= $item_p_cost ?>" />

		<input type="hidden" name="item_m_cost" value="<?= $item_m_cost ?>" />

		<input type="hidden" name="item_class_cost" value="<?= $item_class_cost ?>" />

		<input type="hidden" name="items_paint" value="<?= $items_paint ?>" />

		<input type="hidden" name="item_paint_only" value="<?= $item_paint_only ?>" />

		<input type="hidden" name="car_name" value="<?= $car_name ?>" />

		<input type="hidden" name="item_name" value="<?= $row["item_name"] ?>" />

		<input type="hidden" name="items_mount" value="<?= $items_mount ?>" />

		<input type="hidden" name="items_place" value="<?= $items_place ?>" />

		<input type="hidden" name="page_directory" value="<?= $page_directory ?>" />

		<input type="hidden" name="mitsumori_str" value="<?= $mitsumori ?>">

		-->





  </div>





</div><!-- common_form -->



</form>





   </div>





   </div>





    <?php

	$js = '<script src="/contact/exif.js"></script>';

	$js .= '<script type="text/javascript" src="//jpostal-1006.appspot.com/jquery.jpostal.js"></script>';

	$js .= '<script src="./local.js?date='. time()  .'"></script>';





	?>





<?php



require_once($_SERVER["DOCUMENT_ROOT"]."/common/php/footer.php");





function uniqueFormHtmlTemplete($item_id,$item_cart_id,$items_paint){

global $mysqli;



//アイテムの情報取得

$item_data = getItemRowFromId($mysqli,$item_id);



//ヘッダー

$html = "";



//$item_cart_id…カート内のアイテム識別



$html_header.= '<div class="form-sec form-items">

    <h2>'.$item_data["item_name"].'</h2>

    <div class="container-fluid">';

        $html_footer.= '</div></div>';



//各ユニークフォーム

//構成商品がある場合は構成商品ごとに処理





if($item_data["item_composition"]!="") {

	$item_child_ary = explode(",", $item_data["item_composition"]);



	foreach ($item_child_ary as $child_item_id){



		$html_item_ttl = "";

		$html_item_color = "";

		$html_item_option = "";



		$item_data_child = getItemRowFromId($mysqli,$child_item_id);



		//アイテムごとのユニークフォームの生成

		if($item_data_child["item_colors"] != "" || $item_data_child["item_options"] != ""){

			$html_item_ttl.= '<h3 style="font-size: 15px;

			color: #837f7f;

			padding: 20px 10px 10px;

			margin-bottom: 0;" class="row">'.$item_data_child["item_name"].'</h3>';





			if($items_paint!=2){

				//塗装を希望しない場合以外は塗装色を出力

				$html_item_color= getColorSelectHtmlFromItemData($item_data_child,$item_cart_id);

			}



			$html_item_option = getOptionSelectHtmlFromItemData($item_data_child,$item_cart_id);

			if($html_item_option == "" and $html_item_color == ""){

				//ユニークフォームが無い場合

				$html_item_ttl = "";

			}else{

				$html.=$html_item_ttl.$html_item_color.$html_item_option;

			}

		}

	}

}else{


	$html_item_color = "";

	$html_item_option = "";

	//アイテムごとのユニークフォームの生成

	if($item_data["item_colors"] != "" || $item_data["item_options"] != "") {

		if($items_paint!=2) {

			//塗装を希望しない場合以外は塗装色を出力

			$html_item_color = getColorSelectHtmlFromItemData($item_data,$item_cart_id);

		}

		$html_item_option = getOptionSelectHtmlFromItemData($item_data,$item_cart_id);

		if($html_item_option == "" and $html_item_color == ""){

			//ユニークフォームが無い場合

			$html_item_ttl = "";

		}else{

			$html.=$html_item_color.$html_item_option;

		}

	}

}



if($html !=""){

$return_html = $html_header.$html.$html_footer;

return $return_html;

}else{

return false;

}



}





function getColorSelectHtmlFromItemData($item_data,$item_cart_id){



$html= "";

if($item_data["item_colors"]!=""){



    if(!empty($_SESSION["user_info"])){

        extract($_SESSION["user_info"]);

    }





//ヘッダー

$html='

<div class="form-group row">

    <label class="col-sm-3 col-form-label"><div class="form-bg"><span class="badge badge-pill badge-danger">必須</span>塗装色</div></label>';



    $select_html="";

    $color_ary = getColorAryMaster($item_data["item_colors"]);



    //塗装色セレクトの生成

    if(is_array($color_ary) and !empty($color_ary)){

    // print_r($item_data["item_colors"]);

    // print_r($color_ary);



    /*

    * webフォームの場合は塗装色選択させるのであれば塗装希望の場合のみなので未塗装という選択肢は不要

    if($item_data["item_paint_only"]!=1){

    //塗装なしじゃなければ

    array_unshift($color_ary,"未塗装");

    }*/







    $select_html = '<div class="col-sm-5"><select required class="form-control color-select" name="item_colors['.$item_cart_id.']['.$item_data['item_id'].']">';

            $select_html.="<option value=''>選択してください</option>";

            $select_html.= getSelectOption($color_ary ,$item_colors[$item_cart_id][$item_data['item_id']]);

            $select_html.= '</select></div>';

    }



    //print $select_html;



    if($select_html != ""){

    $html.=$select_html;

    //フッター

    $html.='</div>';

return $html;

}else{

return false;

}



}else{

return false;

}





}



function getOptionSelectHtmlFromItemData($item_data,$item_cart_id){



    if(!empty($_SESSION["user_info"])){

        extract($_SESSION["user_info"]);

    }

$select_html="";



$option_ary = unserialize($item_data["item_options"]);

//print_r($option_ary);



if(is_array($option_ary) and !empty($option_ary)){

$num = 0;

foreach ($option_ary as $option_name => $option_select){

$num++;



//ヘッダー

$select_html.='

<div class="form-group row">

    <label class="col-sm-3 col-form-label"><div class="form-bg"><span class="badge badge-pill badge-danger">必須</span>'.$option_name.'</div></label>';



    $option_tag_name = "";

    $option_tag_name = "item_options_". $num;

    $select_html.= '<div class="col-sm-5"><select required class="form-control color-select" name="'. $option_tag_name .'['.$item_cart_id.']['.$item_data['item_id'].']">';

    $select_html.="<option value=''>選択してください</option>";

    $select_html.= getSelectOptionVal($option_select ,$$option_tag_name[$item_cart_id][$item_data['item_id']]);

            $select_html.= '</select></div>';



    $select_html.='</div>';







}



}



if($select_html){

return $select_html;

}else{

return false;

}



}



