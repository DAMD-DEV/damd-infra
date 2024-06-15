<?php

session_name('querySes');

session_start();

extract($_SESSION["user_info"]);



ini_set("display_errors", "1");



/* お問い合わせフォーム処理 */

require_once("./common.php");

require_once('./mailcheck.php');



require_once($_SERVER["DOCUMENT_ROOT"] . "/adm_system/common/php/function.php");

//$Ses = chkSession('STAFFSESSID');

//DB接続

$mysqli = conDB();

//マスタデータ

require_once($_SERVER["DOCUMENT_ROOT"] . "/adm_system/items/master_data.php");



//print_r($_SESSION);



/* 配列作成 */

$pref_ay = mkPrefAy();

$buy_ay = mkBuyAy();

$check_ay = mkCheckAy();

$check_ay2 = mkCheckAy2();

$policy_ay = mkPolicyAy();

$mount_info_ay = mkMountInfoAy();





/*  -----------------------------------コンテンツ設定各環境に合わせて変更----------------------------------- */



/* ページ設定 */

$ttl = "";

$ttl_eng = "on the mail";

$dsc = "";

$kw = "";

$bread[$ttl] = "";





//print_r($_SESSION);

/*

$data_json = file_get_contents("./test_data.json");

$data_json = mb_convert_encoding($data_json, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');

$data = json_decode($data_json, true);

*/

$data = $_SESSION["cart_data"];

//print_r($data);



$items_paint = $data["options"]["items_paint"];

$items_mount = $data["options"]["items_mount"];

$items_place = $data["options"]["items_place"];





?>





    <!DOCTYPE html>

    <html lang="ja">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>購入申し込みフォーム | エアロパーツ、ドレスアップのダムド | DAMD Inc.</title>

    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>

    <!--#include virtual="/common/meta.html" -->

    <meta http-equiv="content-style-type" content="text/css"/>



    <link rel="stylesheet" href="../../../css/base.css" type="text/css"/>

    <link rel="stylesheet" href="../../../css/style.css" type="text/css"/>

    <link rel="stylesheet" href="../../../webfont/css/font-awesome.min.css">

    <link rel="stylesheet" href="../../../css/modal.css">



    <script src="../../../js/jquery.js" type="text/javascript"></script>



    <link rel="stylesheet" type="text/css" href="../../../fancybox/jquery.fancybox.css" media="screen"/>

    <script src="../../../fancybox/jquery.fancybox.js"></script>

    <script src="../../../fancybox/jquery.mousewheel-3.0.6.pack.js"></script>

    <script src="../../../fancybox/fancyboxck.js"></script>





    <link rel="stylesheet" type="text/css" media="all" href="/lib/stellarnav/stellarnav.css">

    <script type="text/javascript" src="/lib/stellarnav/stellarnav.min.js"></script>

    <script type="text/javascript">

        jQuery(document).ready(function ($) {

            jQuery('.stellarnav').stellarNav({

                theme: 'light'

            });

        });

    </script>





    <script src="../../../js/update.js" type="text/javascript"></script>



    <script>

        (function (i, s, o, g, r, a, m) {

            i['GoogleAnalyticsObject'] = r;

            i[r] = i[r] || function () {

                (i[r].q = i[r].q || []).push(arguments)

            }, i[r].l = 1 * new Date();

            a = s.createElement(o),

                m = s.getElementsByTagName(o)[0];

            a.async = 1;

            a.src = g;

            m.parentNode.insertBefore(a, m)

        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');



        ga('create', 'UA-51828010-1', 'damd.co.jp');

        ga('send', 'pageview');



    </script>



    <?php require_once($_SERVER["DOCUMENT_ROOT"] . "/common/php/header.php") ?>



</head>





<?php require_once($_SERVER["DOCUMENT_ROOT"] . "/common/header.html") ?>





<h1 class="common-ttl text-center menu-mgn">お申し込み内容の確認</h1>



<div class="content-wrap pb">



    <ul class="progressbar mt-4">

        <li class="">ご入力</li>

        <!--<li class="">写真３枚</li>-->



        <li class="active">確認画面</li>

        <li>完了</li>

    </ul>



    <?php

    //print_r($data);

    ?>





    <div class="form mt-4">



        <!--<h1 class="lower-ttl"><span class="eng font-1">Contact</span><span class="jp">メール問い合わせ</span></h1>-->



        <!--/*------------------------------------------------------------------------------*/ -->



        <section class="contact-form-wrap" id="pan">



            <div class="contact-txt">

                <div class="alert alert-primary text-center">下記内容で送信します。よろしいですか？</div>

            </div>



            <!--<div class="naviation-bar cf text-left">

                <ul>

                    <li class="cl1"><div><span class="flow-area">&nbsp;入力&nbsp;</span></div><span class="arrow"></span></li>

                    <li class="cl2"><div><span class="flow-area-hover">&nbsp;確認&nbsp;</span></div><span class="arrow"></span></li>

                    <li class="cl1"><div><span class="flow-area">&nbsp;完了&nbsp;</span></div></li>

                </ul>

            </div>-->



            <div class="cart_item_list">



                <div class="list">





                    <?php



                    //商品一覧作成

                    $unique_html = "";

                    foreach ($data["items"] as $item) {

                        $unique_html .= getItemListHtml($item['item_id'], $item['item_cart_id'], $data["options"]["items_paint"]);

                    }

                    echo $unique_html;



                    ?>



                </div>



                <div class="sum">

                    合計金額 <span>￥<?= number_format($data["price"]["total"]) ?></span>

                </div>

            </div>





            <form action="./post.php" method="post">







                <table class="contact table">





                    <tr>

                        <th>お車の情報</th>

                        <td>

                            年式：<?= $user_year ?><br>

                            型式：<?= $user_kata ?><br>

                        </td>

                    </tr>



                    <tr>

                        <th>お客様情報</th>

                        <td>

                            会社名：<?= $user_company ?><br>

                            お名前：<?= $user_name1 ?><?= $user_name2 ?>（<?= $user_kana ?>）<br>

                            住所：〒<?= $user_zip1 ?>

                            -<?= $user_zip2 ?> <?= $pref_ay[$user_pref] ?><?= $user_city ?><?= $user_add1 ?><?= $user_add2 ?>

                            <br>

                            メールアドレス：<?= $user_mail ?><br>

                            電話番号：<?= $user_tel1 ?>-<?= $user_tel2 ?>-<?= $user_tel3 ?>

                        </td>

                    </tr>

                    <?php

                    if ($items_mount == 3 || $items_mount == "") {





                        //取り付けがない場合のみ配送先を表示

                        if ($user_sender_to == 1) {

                            $user_send_text = "

お名前：" . $user_send_name1 . $user_send_name2 . "（" . $user_send_kana . "）<br>

電話番号：" . $user_send_tel1 . "-" . $user_send_tel2 . "-" . $user_send_tel3 . "<br>

住所：〒" . $user_send_zip1 . "-" . $user_send_zip2 . " " . $pref_ay[$user_send_pref] . $user_send_city . $user_send_add1 . $user_send_add2;

                        } elseif ($user_sender_to == 2) {

                            $user_send_text = "

会社名：" . $user_send_company . "<br>

お名前：" . $user_send_name2_1 . $user_send_name2_2 . "（" . $user_send_kana2 . "）<br>

電話番号：" . $user_send_tel1_2 . "-" . $user_send_tel2_2 . "-" . $user_send_tel3_2 . "<br>

住所：〒" . $user_send_zip1_2 . "-" . $user_send_zip2_2 . " " . $pref_ay[$user_send_pref2] . $user_send_city2 . $user_send_add1_2 . $user_send_add2_2;

                        } elseif ($user_sender_to == 3) {

                            $user_send_text = "

      営業所名：" . $user_send_shop;

                        }



                        ?>

                        <tr>

                            <th>配送先</th>

                            <td>

                                <?= $user_send_text ?>

                            </td>

                        </tr>

                        <?php

                    }

                    ?>

                    <tr>

                        <th>ご購入について、その他</th>

                        <td>

                            <!--購入数：<?= $user_length ?><br>-->

                            購入方法：<?= $buy_ay[$user_buy] ?><br>

                            納期・発送について：<?= $check_ay2[$user_check_send[0]] ?><br>

                            <?php

                            if ($items_mount == 1) {

                                print "取付確認事項：" . $check_ay[$user_check[0]] . "<br>";

                            }

                            ?>

                            <?php

                            if ($item_paint == 1) {

                                print "塗装品確認事項：" . $check_ay2[$user_check2[0]] . "<br>";

                            }

                            ?>

                            <?php

                            /*if ($items_mount == 1) {

                                print "施工について：" . $check_ay2[$user_check3[0]] . "<br>";

                            }*/

                            ?>

                            <?php

                            if ($item_paint == 1 and $items_mount == 2) {

                                print "取付箇所の状態：" . $mount_info_ay[$user_mount_info1] . "<br>";

                            }

                            ?>

                            <?php

                            if ($user_mount_info1 == 1) {

                                print "干渉や取り外しの可能性有り：<br>" . nl2br($user_mount_info2) . "<br><br>";

                            }

                            ?>

                            備考：<br>

                            <?= nl2br($user_comment) ?><br>

                            プライバシーポリシー：<?= $policy_ay[$user_policy[0]] ?><br>

                        </td>

                    </tr>





                </table>

                <div id="contact-btn" class="text-center mt-5">

                    <a href="./?back=1#pan" class="back flowMove">&lt; 入力へ戻る</a><br/>

                    <button name="reg" class="btn btn-danger flowMove mt-4" type="submit">送信</button>

                </div>

            </form>

        </section>





        <!-- コンテンツレイアウトBOTTOM -->





        <!-- ここまで各ページタグ -->





    </div>



</div>





<?php require_once($_SERVER["DOCUMENT_ROOT"] . "/common/php/footer.php");





function getItemListHtml($item_id, $item_cart_id, $items_paint)

{

    global $mysqli;



//アイテムの情報取得

    $item_data = getItemRowFromId($mysqli, $item_id);



//ヘッダー

    $html = "";





//$item_cart_id…カート内のアイテム識別



    $html_header .= '<div class="item">

    <div class="ttl">' . $item_data["item_name"] . '</div>

    <div class="option">';



    $html_footer .= '</div><div class="length"></div></div>';





//各ユニークフォーム

//構成商品がある場合は構成商品ごとに処理



    if ($item_data["item_composition"] != "") {

        $item_child_ary = explode(",", $item_data["item_composition"]);



        foreach ($item_child_ary as $child_item_id) {



            $html_item_ttl = "";

            $html_item_color = "";

            $html_item_option = "";



            $item_data_child = getItemRowFromId($mysqli, $child_item_id);



//アイテムごとのユニークフォームの生成

            if ($item_data_child["item_colors"] != "" || $item_data_child["item_options"] != "") {

                $html_item_ttl .= '<div class="sub-ttl">' . $item_data_child["item_name"] . '</div>';





                if ($items_paint != 2) {

//塗装を希望しない場合以外は塗装色を出力

                    $html_item_color = getColorHtmlFromItemData($item_data_child, $item_cart_id);

                }



                $html_item_option = getOptionHtmlFromItemData($item_data_child, $item_cart_id);

                if ($html_item_option == "" and $html_item_color == "") {

//ユニークフォームが無い場合

//$html_item_ttl = "";

                } else {

                    $html .= $html_item_ttl . $html_item_color . $html_item_option;

                }



            }

        }

    } else {





        $html_item_color = "";

        $html_item_option = "";

//アイテムごとのユニークフォームの生成

        if ($item_data["item_colors"] != "" || $item_data["item_options"] != "") {

            if ($items_paint != 2) {

//塗装を希望しない場合以外は塗装色を出力

                $html_item_color = getColorHtmlFromItemData($item_data, $item_cart_id);

            }

            $html_item_option = getOptionHtmlFromItemData($item_data, $item_cart_id);



            if ($html_item_option == "" and $html_item_color == "") {

                //ユニークフォームが無い場合



//$html_item_ttl = "";

            }else{

                $html .= $html_item_color . $html_item_option;

            }



        }





    }





    $return_html = $html_header . $html . $html_footer;

    return $return_html;







/*

    if($html !=""){

        $return_html = $html_header.$html.$html_footer;

        return $return_html;

    }else{

        return false;

    }

*/



}





function getColorHtmlFromItemData($item_data, $item_cart_id)

{



    $html = "";

    if ($item_data["item_colors"] != "") {



        if(!empty($_SESSION["user_info"])){

            extract($_SESSION["user_info"]);

        }



//ヘッダー

        $html = '<div class="option-detail">塗装色:';



        $select_html = "";

        $color_ary = getColorAryMaster($item_data["item_colors"]);



        //塗装色セレクトの生成

        if (is_array($color_ary) and !empty($color_ary)) {



            $select_html = $color_ary[$item_colors[$item_cart_id][$item_data['item_id']]];

        }



        //print $select_html;



        if ($select_html != "") {

            $html .= $select_html;

            //フッター

            $html .= '</div>';

            return $html;

        } else {

            return false;

        }



    } else {

        return false;

    }





}



function getOptionHtmlFromItemData($item_data, $item_cart_id)

{



    //print_r($item_data["item_name"]);



    if(!empty($_SESSION["user_info"])){

        extract($_SESSION["user_info"]);

    }



    $select_html = "";



    $option_ary = unserialize($item_data["item_options"]);

//print_r($option_ary);



    if (is_array($option_ary) and !empty($option_ary)) {

        $num = 0;

        foreach ($option_ary as $option_name => $option_select) {

            $num++;



//ヘッダー

            $select_html .= '<div class="option-detail">' . $option_name.":";



            $option_tag_name = "";

            $option_tag_name = "item_options_" . $num;



         /*   print_r($option_select);

            print $option_tag_name;

            print $item_data['item_id'];

*/

            $select_html .= $$option_tag_name[$item_cart_id][$item_data['item_id']];



            $select_html .= '</div>';





        }



    }



    if ($select_html) {

        return $select_html;

    } else {

        return false;

    }



}



