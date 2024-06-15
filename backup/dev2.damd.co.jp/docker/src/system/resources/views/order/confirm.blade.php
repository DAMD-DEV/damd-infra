@extends('layout.order')

@section('title')
購入申し込みフォーム | エアロパーツ、ドレスアップのダムド | DAMD Inc.
@endsection

@section('main')
<h1 class="common-ttl text-center menu-mgn">お申し込み内容の確認</h1>
<div class="content-wrap pb">
    <ul class="progressbar mt-4">
        <li class="">ご入力</li>
        <li class="active">確認画面</li>
        <li>完了</li>
    </ul>

    <div class="form mt-4">
        <section class="contact-form-wrap" id="pan">
            <div class="contact-txt">
                <div class="alert alert-primary text-center">下記内容で送信します。よろしいですか？</div>
            </div>

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
                            $user_send_text = "お名前：" . $user_send_name1 . $user_send_name2 . "（" . $user_send_kana . "）<br>
                            電話番号：" . $user_send_tel1 . "-" . $user_send_tel2 . "-" . $user_send_tel3 . "<br>
                            住所：〒" . $user_send_zip1 . "-" . $user_send_zip2 . " " . $pref_ay[$user_send_pref] . $user_send_city . $user_send_add1 . $user_send_add2;
                        } elseif ($user_sender_to == 2) {
                            $user_send_text = "会社名：" . $user_send_company . "<br>
                            お名前：" . $user_send_name2_1 . $user_send_name2_2 . "（" . $user_send_kana2 . "）<br>
                            電話番号：" . $user_send_tel1_2 . "-" . $user_send_tel2_2 . "-" . $user_send_tel3_2 . "<br>
                            住所：〒" . $user_send_zip1_2 . "-" . $user_send_zip2_2 . " " . $pref_ay[$user_send_pref2] . $user_send_city2 . $user_send_add1_2 . $user_send_add2_2;
                        } elseif ($user_sender_to == 3) {
                            $user_send_text = "営業所名：" . $user_send_shop;
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
    </div>
</div>
@endsection