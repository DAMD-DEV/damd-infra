﻿@php
  $company_pass = 'product_images/suzuki/';
  $image_pass   = 'product_images/suzuki/jimny_little-b/images/';
  $manual_pass  = 'product_images/suzuki/jimny_little-b/manual/';
@endphp

<!DOCTYPE html>
<html lang="ja">

<head>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-GRN430XGCP"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-GRN430XGCP');
</script>


<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>JIMNY little B. SUZUKI | エアロパーツ、ドレスアップのダムド | DAMD Inc.</title>
<meta http-equiv="content-style-type" content="text/css" />
<meta name="viewport" content="width=device-width,initial-scale=1.0" />

<meta property="og:title" content="JIMNY little B.｜SUZUKI | DAMD Inc."/>
<meta property="og:type" content="website"/>
<meta property="og:description" content="古き良きアメリカの独創的で美しいスタイリング。コンパクトSUVとしてオフロード走行で人気を博した名車に想いを馳せ、ジムニーを本気でとことん遊べるコンパクトな一台に。""ドロンコ""になって駆け回ろう！"/>
<meta property="og:url" content="http://www.damd.co.jp/products/suzuki/jimny_little-b/"/>
<meta property="og:image" content="http://www.damd.co.jp/products/suzuki/jimny_little/images/01.jpg">
<meta property="og:site_name" content="JIMNY little B.｜SUZUKI DAMD Inc."/>

<meta name="Keywords" content="JIMNY little B.,DAMD,SUZUKI" />

{{-- <link rel="stylesheet" href="../../../css/base.css" type="text/css" />
<link rel="stylesheet" href="../../../css/style.css" type="text/css" />
<link rel="stylesheet" href="../../../css/modal.css" type="text/css" />

<link rel="stylesheet" href="css/balloon.css" type="text/css" />

<link href="https://fonts.googleapis.com/css?family=Black+Ops+One" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Kosugi+Maru&display=swap" rel="stylesheet">

<link rel="stylesheet" href="../../../webfont/css/font-awesome.min.css">

<script src="../../../js/jquery.js" type="text/javascript"></script>

<link rel="stylesheet" type="text/css" href="../../../fancybox/jquery.fancybox.css" media="screen" />
<script src="../../../fancybox/jquery.fancybox.js"></script>
<script src="../../../fancybox/jquery.mousewheel-3.0.6.pack.js"></script>
<script src="../../../fancybox/fancyboxck.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('a.fancybox').fancybox();
});
</script>

<script src="../../../js/update.js" type="text/javascript"></script> --}}

@include('shared.products.product_head_no')

<style>
.products .main_block .text p.logo img{
	max-height: 150px;
	margin-bottom: 20px;
}


@media screen and (max-width: 800px) {
	
.products .main_block .text p.logo img{
	max-height: 60px;
	margin-bottom: 0px;
}
}


</style>


<style>

@media screen and (max-width: 800px) {
.detail table.list.stores td{
	display: block;
	width: 100%;
	text-align: center !important;
}
.detail table.list.stores td.item_name_sub{
	border-top: solid 1px #DDD;
}

.products .accordion .detail div.image ul.photo li, .products .accordion .detail div.image ul.photo.block li{
	display: block;
	width: 50%;
	float: left;
}

}
</style>


<style>
products .main_block{
	margin-top: -88px;
}

@media screen and (max-width: 800px) {

.products .main_block .main_image{
	background: #e27c00;
}

}
</style>


<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-51828010-1', 'damd.co.jp');
  ga('send', 'pageview');

</script>

</head><body id="damd_co_jp" class="products">

<!--#include virtual="/common/header.html" -->
@include('shared.products.header')

<div class="box title h2_main">
<div class="inner">
<h2>PRODUCTS</h2>
</div>
</div>
<div id="topic_path">
<ul class="inner">
  <li><a href="{{ url('/') }}">HOME</a></li>
  <li><a href="{{ url('/products') }}">PRODUCTS</a></li>
  <li><a href="{{ url('/products/suzuki') }}">SUZUKI</a></li>
  <li>JIMNY little B.</li>
</ul>
</div>


<div id="contents" class="clearfix">

<div class="main_block">
<div class="main_image">
<img src="{{ asset($image_pass.'main0.jpg') }}" alt="">
</div>
<div class="text">
<p class="logo"><img src="{{ asset($image_pass.'logo.png') }}" alt=""></p>
<p class="catch">蘇る 古き良きアメリカ。
<p>20世紀を駆け抜けた、<br>
アメリカの独創的で美しいスタイリング。

<p>コンパクトSUVとして<br>
オフロードで人気を博した名車に想いを馳せ、<br>
ジムニーを本気でとことん遊べる一台に。<br>

<p>さぁ、「泥んこ」になって駆け回ろう！
</div>
<div class="bottom"><img src="{{ asset($image_pass.'bg_arrow.jpg') }}" ></div>
</div>

<div class="inner">

<div class="box title noborder">
<h3>JIMNY little B.</h3>
</div>
<!--
<p>古き良きアメリカの独創的で美しいスタイリング。<br>
コンパクトSUVとしてオフロード走行で人気を博した名車に想いを馳せ、<br>
ジムニーを本気でとことん遊べるコンパクトな一台に。❝泥んこ❞になって駆け回ろう！
</p>
 -->
<div id="sliderWrap">
<ul class="bxslider">
<li><img src="{{ asset($image_pass.'B-main.jpg') }}" alt="" title=""></li>
<li><img src="{{ asset($image_pass.'B-rear45.jpg') }}" alt="" title=""></li>
<li><img src="{{ asset($image_pass.'B-standard.jpg') }}" alt="" title=""></li>
<li><img src="{{ asset($image_pass.'B-illust.jpg') }}" alt="" title=""></li>
<li><img src="{{ asset($image_pass.'B-front.jpg') }}" alt="" title=""></li>
<li><img src="{{ asset($image_pass.'B-side.jpg') }}" alt="" title=""></li>
<li><img src="{{ asset($image_pass.'B-rear.jpg') }}" alt="" title=""></li>
<li><img src="{{ asset($image_pass.'color/i_sil.jpg') }}" alt="" title=""></li>
<li><img src="{{ asset($image_pass.'color/gr_wh.jpg') }}" alt="" title=""></li>
<li><img src="{{ asset($image_pass.'color/gr_bl.jpg') }}" alt="" title=""></li>
<li><img src="{{ asset($image_pass.'color/blk_sil.jpg') }}" alt="" title=""></li>
<li><img src="{{ asset($image_pass.'color/sil_sil.jpg') }}" alt="" title=""></li>
<li><img src="{{ asset($image_pass.'color/wh_bl.jpg') }}" alt="" title=""></li>
<li><img src="{{ asset($image_pass.'color/bl_sil.jpg') }}" alt="" title=""></li>
<li><img src="{{ asset($image_pass.'color/ye_wh.jpg') }}" alt="" title=""></li>
</ul>
</ul>
<p class="caution">※ 画像はCGとなります。
<div id="bx-pager">
  <a data-slide-index="0" href=""><img src="{{ asset($image_pass.'B-main.jpg') }}" alt=""></a>
  <a data-slide-index="1" href=""><img src="{{ asset($image_pass.'B-rear45.jpg') }}" alt=""></a>
  <a data-slide-index="2" href=""><img src="{{ asset($image_pass.'B-standard.jpg') }}" alt=""></a>
  <a data-slide-index="3" href=""><img src="{{ asset($image_pass.'B-illust.jpg') }}" alt=""></a>
  <a data-slide-index="4" href=""><img src="{{ asset($image_pass.'B-front.jpg') }}" alt=""></a>
  <a data-slide-index="5" href=""><img src="{{ asset($image_pass.'B-side.jpg') }}" alt=""></a>
  <a data-slide-index="6" href=""><img src="{{ asset($image_pass.'B-rear.jpg') }}" alt=""></a>
  <a data-slide-index="7" href=""><img src="{{ asset($image_pass.'color/i_sil.jpg') }}" alt=""></a>
  <a data-slide-index="8" href=""><img src="{{ asset($image_pass.'color/gr_wh.jpg') }}" alt=""></a>
  <a data-slide-index="9" href=""><img src="{{ asset($image_pass.'color/gr_bl.jpg') }}" alt=""></a>
  <a data-slide-index="10" href=""><img src="{{ asset($image_pass.'color/blk_sil.jpg') }}" alt=""></a>
  <a data-slide-index="11" href=""><img src="{{ asset($image_pass.'color/sil_sil.jpg') }}" alt=""></a>
  <a data-slide-index="12" href=""><img src="{{ asset($image_pass.'color/wh_bl.jpg') }}" alt=""></a>
  <a data-slide-index="13" href=""><img src="{{ asset($image_pass.'color/bl_sil.jpg') }}" alt=""></a>
  <a data-slide-index="14" href=""><img src="{{ asset($image_pass.'color/ye_wh.jpg') }}" alt=""></a>
  
</div>

<!--<br><br>

<p class="catch center">現在開発中。<br>
2020年 発売予定。
<p class="center">販売価格・パーツ等 詳細は<br>
決まり次第 配信予定です 。
<p class="center">メールアドレスのご登録で、<br>
「Jimny little B.」<br>の最新情報をお知らせします！

<br><br>

<p class="center"><a href="/jimny_info/" class="btn size_l">最新情報を受け取る</a></p> -->

<div class="main_data">

<div class="banner center"><a href="/complete/shoplist/"><img src="{{ asset($image_pass.'bnr.jpg') }}" alt=""></a></div>

<div class="box title center">
<h4>エクステリア</h4>
</div>
 
<div class="accordion">

<p class="title">コンプリートキット		
<!--<a href="{{ asset($manual_pass.'05.pdf') }}"><i class="fa fa-wrench"></i></a> --></p>
<div class="detail">
<div class="image">
<p class="text">
JIMNY little B.のエクステリアが全て含まれた<br>
完全コンプリートパッケージ。<br>
<br>
タイヤには、ホワイトレターが印象的な<br>
TOYO TIRE OPEN COUNTRY R/Tを選びました。<br>
<br>
タイヤセットでは、ホイールにタイヤが組まれております。

<span class="caution">
【キット内容】<br>
APIOヴィンテージアイアングリル / DAMDアメリカンレターエンブレム<br>
ボンネットフードカバー / フロントバンパ- / リアバンパ-<br>
APIO WILDBOAR SR 5本セット【サイズ : 16×5.5J +20】<br>
<br>
（タイヤセットご注文の場合のみ）<br>
TOYO TIRE OPEN COUNTRY R/T ホワイトレター 5本セット<br>
【サイズ：185/85R16 105/103N LT】<br>
<br>
<span class="red">※ 本製品は、2024年1月以降受注を開始している<br>
&nbsp;&nbsp;&nbsp;&nbsp;ﾘｱﾊﾟｰｷﾝｸﾞｾﾝｻｰ＜ﾊﾞｯｸｿﾅｰ＞装着車には対応しておりません。<br>
&nbsp;&nbsp;&nbsp;&nbsp;ご注文際は必ずご確認いただきますようお願い申し上げます。
</span>
<br>
※ ﾎﾞﾃﾞｨﾊﾟｰﾂはABS製 (ｸﾞﾘﾙのみｽﾁｰﾙ製)<br>
※ ｸﾞﾘﾙｶﾗｰ：半艶ﾌﾞﾗｯｸ(ｼﾙﾊﾞｰは終了）<br>
※ ﾎｲｰﾙｶﾗｰ：「ｺｯﾄﾝﾎﾜｲﾄ」「ｱｲｱﾝﾌﾞﾗｯｸ」から選択。<br>
※ ﾃﾞﾓｶｰでは、ｽﾍﾟｱﾎｲｰﾙを背面に向けるﾌﾞﾗｹｯﾄを使用しております。<br>
　ｺﾝﾌﾟﾘｰﾄｷｯﾄに背面ﾌﾞﾗｹｯﾄは付属しておりません。ご了承ください。<br>
※ 別途送料・お取付業者様でのお取付工賃が発生致します。<br>
※ 沖縄・離島へお届けの場合、送料は着払いとなります。<br>
※ 各ﾊﾟｰﾂの詳細・注意事項は各ﾊﾟｰﾂ項目にてご確認ください。<br>
※ 車両登録前の本ﾊﾟｰﾂの架装はお控えください。<br>
※ 塗装・お取付後のｷｬﾝｾﾙ・返品・交換はお受けできかねます。
</span>
</p>
<ul class="photo clearfix">
<li><a href="{{ asset($image_pass.'completekit.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i><img src="{{ asset($image_pass.'completekit.jpg') }}" alt="" title=""></a></li>
</ul>
</div>
<h5>エクステリア＋WILDBOAR SR 5本セット</h5>		
<table class="list">
<tr>
<td class="item_name_sub">未塗装品素地</td>
<td class="price">¥340,000<span class="tax">¥374,000（税込）</span></td>
<td class="button"><label for="modal-trigger" class="btn size_ss mitsumori" data-item_id="1118">見積もり</label></td>
</tr>
<tr>
<td class="option">別途塗装代</td>
<td class="price option"><i class="fa fa-plus-circle"></i> ¥59,000<span class="tax">¥64,900（税込）</span> </td>
<td class="button">&nbsp;</td>
</tr>
</table>
<h5>エクステリア＋ホイール/タイヤ 5本セット</h5>		
<table class="list">
<tr>
<td class="item_name_sub">未塗装品素地</td>
<td class="price">¥490,000<span class="tax">¥539,000（税込）</span></td>
<td class="button"><label for="modal-trigger" class="btn size_ss mitsumori" data-item_id="1119">見積もり</label></td>
</tr>
<tr>
<td class="option">別途塗装代</td>
<td class="price option"><i class="fa fa-plus-circle"></i> ¥59,000<span class="tax">¥64,900（税込）</span> </td>
<td class="button">&nbsp;</td>
</tr>
</table>
</div>


<p class="title">フルコンプリートキット WHITE EDITION</p>
<div class="detail">
<div class="image">
<p class="text">
little B.の象徴とも言えるアイアングリルを、<br>
コットンホワイトで仕立てた APIO×DAMD だけの限定パッケージ。<br>
TOYO TIRE社製のOPEN COUNTRY R/T ホワイトレターとの相性も抜群。<br>
独創的なルックスのジムニーを手に入れよう！

<span class="caution">
【キット内容】<br>
APIOヴィンテージアイアングリル <br>
(コットンホワイト / little B.プロジェクトだけの限定アイテム)<br>
DAMDアメリカンレターエンブレム / ボンネットフードカバー<br>
フロントバンパ- / リアバンパ-<br>
APIO WILDBOAR SR 5本セット【サイズ : 16×5.5J +20】<br>
<br>
（タイヤセットご注文の場合のみ）<br>
OPEN COUNTRY R/T ホワイトレター【サイズ：185/85R16 105/103N LT】<br>
<br>
<span class="red">※ 本製品は、2024年1月以降受注を開始している<br>
&nbsp;&nbsp;&nbsp;&nbsp;ﾘｱﾊﾟｰｷﾝｸﾞｾﾝｻｰ＜ﾊﾞｯｸｿﾅｰ＞装着車には対応しておりません。<br>
&nbsp;&nbsp;&nbsp;&nbsp;ご注文際は必ずご確認いただきますようお願い申し上げます。
</span>
<br>
※ ボディパーツはABS製 (グリルのみスチール製)<br>
※ 塗装品の場合、ﾌﾛﾝﾄｸﾞﾘﾙ・前後ﾊﾞﾝﾊﾟｰ・ﾎｲｰﾙ全てｶﾗｰはｺｯﾄﾝﾎﾜｲﾄです。<br>
※ ﾃﾞﾓｶｰでは、ｽﾍﾟｱﾎｲｰﾙを背面に向けるﾌﾞﾗｹｯﾄを使用しております。<br>
&nbsp;&nbsp;&nbsp;&nbsp;ｺﾝﾌﾟﾘｰﾄｷｯﾄに背面ﾌﾞﾗｹｯﾄは付属しておりません。ご了承ください。<br>
※ 別途送料・お取付業者様でのお取付工賃が発生致します。<br>
※ 沖縄・離島へお届けの場合、送料は着払いとなります。<br>
※ 各ﾊﾟｰﾂの詳細・注意事項は各ﾊﾟｰﾂ項目にてご確認ください。<br>
※ 車両登録前の本ﾊﾟｰﾂの架装はお控えください。<br>
※ 塗装・お取付後のｷｬﾝｾﾙ・返品・交換はお受けできかねます。<br>
</span>
</p>
<ul class="photo clearfix">
<li><a href="{{ asset($image_pass.'completekit.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i><img src="{{ asset($image_pass.'completekit.jpg') }}" alt="" title=""></a></li>
</ul>
</div>
<h5>APIO WILDBOAR SR 5本セット</h5>		
<table class="list">
<tr>
<td class="item_name_sub">未塗装品素地</td>
<td class="price">¥360,000<span class="tax">¥396,000（税込）</span></td>
<td class="button"><label for="modal-trigger" class="btn size_ss mitsumori" data-item_id="1120">見積もり</label> </td>
</tr>
<tr>
<td class="option">別途塗装代</td>
<td class="price option"><i class="fa fa-plus-circle"></i> ¥59,000<span class="tax">¥64,900	（税込）</span> </td>
<td class="button">&nbsp;</td>
</tr>
</table>
<h5>エクステリア＋ホイール/タイヤ 5本セット</h5>		
<table class="list">
<tr>
<td class="item_name_sub">未塗装品素地</td>
<td class="price">¥510,000<span class="tax">¥561,000（税込）</span></td>
<td class="button"><label for="modal-trigger" class="btn size_ss mitsumori" data-item_id="1128">見積もり</label></td>
</tr>
<tr>
<td class="option">別途塗装代</td>
<td class="price option"><i class="fa fa-plus-circle"></i> ¥59,000<span class="tax">¥64,900（税込）</span> </td>
<td class="button">&nbsp;</td>
</tr>
</table>
</div> 



<p class="title">エクステリア5点キット	<!--<a href="{{ asset($manual_pass.'05.pdf') }}"><i class="fa fa-wrench"></i></a> --></p>
<div class="detail">
<div class="image">
<p class="text">
JIMNY little B.のボディキットパッケージ。<br>
古き良きアメリカの雰囲気を身に纏い、ジムニーをクラシックなコンパクトSUVに。	
<span class="caution">
【キット内容】<br>
APIOアイアングリル / DAMDアメリカンレターエンブレム<br>
ボンネットフードカバー / フロントバンパ- / リアバンパ-<br>
<br>
<span class="red">※ 本製品は、2024年1月以降受注を開始している<br>
&nbsp;&nbsp;&nbsp;&nbsp;ﾘｱﾊﾟｰｷﾝｸﾞｾﾝｻｰ＜ﾊﾞｯｸｿﾅｰ＞装着車には対応しておりません。<br>
&nbsp;&nbsp;&nbsp;&nbsp;ご注文際は必ずご確認いただきますようお願い申し上げます。
</span>
<br>
※ ABS製 (グリルのみスチール製)<br>
※ グリルカラー：半艶ブラック(シルバーは終了）<br>
※ 別途送料・お取付業者様でのお取付工賃が発生致します。<br>
※ 沖縄・離島へお届けの場合、送料は着払いとなります。<br>
※ 各パーツの詳細・注意事項は各パーツ項目にてご確認ください。<br>
※ 車両登録前の本パーツの架装はお控えください。<br>
※ 塗装・お取付後のキャンセル・返品・交換はお受けできかねます。
</span>
</p>
<ul class="photo clearfix">
<li><a href="{{ asset($image_pass.'pieceskit5.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i><img src="{{ asset($image_pass.'pieceskit5.jpg') }}" alt="" title=""></a></li>
</ul>
</div>
<table class="list">
<tr>
<td class="item_name_sub">未塗装品素地</td>
<td class="price">¥210,000<span class="tax">¥231,000（税込）</span></td>
<td class="button"><label for="modal-trigger" class="btn size_ss mitsumori" data-item_id="1121">見積もり</label></td>
</tr>
<tr>
<td class="option">別途塗装代</td>
<td class="price option"><i class="fa fa-plus-circle"></i> ¥59,000<span class="tax">¥64,900（税込）</span>	</td>
<td class="button">&nbsp;</td>
</tr> 
</table>
</div>




<p class="title">エクステリア5点キット WHITE EDITION</p>
<div class="detail">
<div class="image">
<p class="text">
エクステリア5点キットのアイアングリルをコットンホワイトで仕立てたAPIO×DAMD だけの限定パッケージ。
<span class="caution">
【キット内容】<br>
APIOアイアングリル (コットンホワイト / little B.プロジェクトだけの限定アイテム)<br>
DAMDアメリカンレターエンブレム / ボンネットフードカバー<br>
フロントバンパ- / リアバンパ-<br>
<br>
<span class="red">※ 本製品は、2024年1月以降受注を開始している<br>
&nbsp;&nbsp;&nbsp;&nbsp;ﾘｱﾊﾟｰｷﾝｸﾞｾﾝｻｰ＜ﾊﾞｯｸｿﾅｰ＞装着車には対応しておりません。<br>
&nbsp;&nbsp;&nbsp;&nbsp;ご注文際は必ずご確認いただきますようお願い申し上げます。
</span><br>
※ ABS製 (グリルのみスチール製)<br>
※ フロントグリル、前後バンパー：コットンホワイト<br>
※ 別途送料・お取付業者様でのお取付工賃が発生致します。<br>
※ 沖縄・離島へお届けの場合、送料は着払いとなります。<br>
※ 各パーツの詳細・注意事項は各パーツ項目にてご確認ください。<br>
※ 車両登録前の本パーツの架装はお控えください。<br>
※ 塗装・お取付後のキャンセル・返品・交換はお受けできかねます。
</span>
</p>

</div>
<table class="list">
<tr>
<td class="item_name_sub">未塗装品素地</td>
<td class="price">¥230,000<span class="tax">¥253,000（税込）</span></td>
<td class="button"><label for="modal-trigger" class="btn size_ss mitsumori" data-item_id="1122">見積もり</label></td>
</tr>
<tr>
<td class="option">別途塗装代</td>
<td class="price option"><i class="fa fa-plus-circle"></i> ¥59,000<span class="tax">¥64,900	（税込）</span> </td>
<td class="button">&nbsp;</td>
</tr>
</table>
</div> 








<p class="title">APIO ヴィンテージアイアングリル</p>
<div class="detail">
<div class="image">
<p class="text">
ヴィンテージな雰囲気がたまらない鉄製のフロントグリル。<br>
プレス加工を加えた横スリットデザインはレザーカットされただけの物とは違う絶妙な立体感があります。<br>
フラットなセンターリブにはステッカーやエンブレムを貼ったりとちょっとしたカスタムも楽しみも１つ。
<span class="caution">
※ こちらの製品はAPIO様の商品となります。ご購入はAPIO様にてお願いいたします。
</span>
</p>
<ul class="photo clearfix">
<li><a href="{{ asset($image_pass.'apio.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i><img src="{{ asset($image_pass.'apio.jpg') }}" alt="" title=""></a></li>
</ul> 
</div>
<table class="list">
<tr>
<td class="item_name_sub">スチール（鉄製）</td>
<td class="price"><!--¥39,000<span class="tax">¥（税込）</span> --></td>
<td class="button"><!--<label for="modal-trigger" class="btn size_ss mitsumori" data-item_id="1123">見積もり</label>  --><a href="http://www.apio.jp/" target="_blank" class="btn size_ss">APIO WEB SITE</a></td>
</tr>
</table>
</div>



<p class="title">DAMDアメリカンエンブレム</p>
<div class="detail">
<div class="image">
<p class="text">
鮮やかなオレンジが特徴的なアメリカンレターエンブレム。<br>
凹凸のある形状でポップ＆レトロにグリルを彩ります。

<span class="caution">
※ 別途送料・お取付業者様でのお取付工賃が発生致します。<br>
※ 沖縄・離島へお届けの場合、送料は着払いとなります。<br>
※ お取付後のキャンセル・返品・交換はお受けできかねます。

</span>
</p>
<ul class="photo clearfix">
<li><a href="{{ asset($image_pass.'emblem-damd.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i><img src="{{ asset($image_pass.'emblem-damd.jpg') }}" alt="" title=""></a></li>
<li><a href="{{ asset($image_pass.'emblem3.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i><img src="{{ asset($image_pass.'emblem3.jpg') }}" alt="" title=""></a></li>
</ul>
</div>
<table class="list">
<tr>
<td class="item_name_sub">オレンジ×シルバー</td>
<td class="price">¥6,800<span class="tax">¥7,480（税込）</span></td>
<td class="button"><label for="modal-trigger" class="btn size_ss mitsumori" data-item_id="1124">見積もり</label> <!--2019年 秋 発売開始予定--></td>
</tr>
</table>
</div>



<p class="title">ボンネットフードカバー <a href="{{ asset($manual_pass.'jimny-BG.pdf') }}"><i class="fa fa-wrench"></i></a></p>
<div class="detail">
<div class="image">
<p class="text">
中央部にボリュームを持たせ、<br>
正面からのシルエットをよりワイルドに。<br>
ジムニーの力強いフォルムをさらに引き立てます。

<span class="caution">
※ 純正ボンネットに穴開け加工が必要となります。<br>
※ 別途送料・お取付業者様でのお取付工賃が発生致します。<br>
※ 沖縄・離島へお届けの場合、送料は着払いとなります。

</span>
</p>
<ul class="photo clearfix">
<li><a href="{{ asset($image_pass.'B-bonnet.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i><img src="{{ asset($image_pass.'B-bonnet.jpg') }}" alt="" title=""></a></li>
</ul>
</div>
<table class="list">
<tr>
<td class="item_name_sub">未塗装品素地</td>
<td class="price">¥48,000<span class="tax">¥52,800（税込）</span></td>
<td class="button"><label for="modal-trigger" class="btn size_ss mitsumori" data-item_id="1125">見積もり</label>		
 <!--2019年 秋 発売開始予定--></td>
</tr>
<tr>
<td class="option">別途塗装代</td>
<td class="price option"><i class="fa fa-plus-circle"></i> ¥13,000<span class="tax">¥14,300（税込）</span> </td>
<td class="button">&nbsp;</td>
</tr>
</table>
</div>

<p class="title">フロントバンパー <a href="{{ asset($manual_pass.'JB64_74_roots_fb-20201130.pdf') }}"><i class="fa fa-wrench"></i></a></p>
<div class="detail">
<div class="image">
<p class="text">
バンパーの根元とも言えるベーシックな造形が、<br>
力強く、愛くるしい。<br>
豊富なカラーバリエーションで<br>
あなたの記憶に残るクラシックスタイルを。<br>
<br>
<a href="{{ asset($image_pass.'FB_color.jpg') }}" class="fancybox" title="" rel="sheetcover">塗装仕様のイメージを見る</a>
			
<span class="caution">※ フォグランプは純正を流用。<br>
　 (XGｸﾞﾚ-ﾄﾞへ装着する場合は別途ﾌｫｸﾞﾗﾝﾌﾟの購入が必要となります。）<br>
※ 網はブラックとなります。<br>
※ 別途送料・お取付業者様でのお取付工賃が発生致します。<br>
※ 沖縄・離島へお届けの場合、送料は着払いとなります。<br>
※ 車両登録前の本パーツの架装はお控えください。<br>
※ 塗装・お取付後のキャンセル・返品・交換はお受けできかねます。</span></p>
<ul class="photo clearfix">
<li><a href="{{ asset($image_pass.'B-f_bamperW.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i><img src="{{ asset($image_pass.'B-f_bamperW.jpg') }}" alt="" title=""></a></li>
</ul>
</div>
<table class="list">
<tr>
<td class="item_name_sub">未塗装品素地</td>
<td class="price">¥58,000<span class="tax">¥63,800（税込）</span></td>
<td class="button"><label for="modal-trigger" class="btn size_ss mitsumori" data-item_id="1126">見積もり</label> <!--2019年 秋 発売開始予定--></td>
</tr>
<tr>
<td class="option">別途塗装代</td>
<td class="price option"><i class="fa fa-plus-circle"></i> ¥23,000<span class="tax">¥25,300（税込）</span> </td>
<td class="button">&nbsp;</td>
</tr> 
</table>
</div>



<p class="title">リアバンパー <a href="{{ asset($manual_pass.'03.pdf') }}"><i class="fa fa-wrench"></i></a></p>
<div class="detail">
<div class="image">
<p class="text">
クラシックなストレートシェイプが際立つリアバンパー。<br>
純正ボディ色の塗装設定も用意し、一体感のある演出も可能。<br>
シンプルで存在感のあるリアビューを。<br>
<br>
<a href="{{ asset($image_pass.'RB_color.jpg') }}" class="fancybox" title="" rel="sheetcover">塗装仕様のイメージを見る</a>
 <span class="caution">
 <span class="red">※ 本製品は、2024年1月以降受注を開始している<br>
&nbsp;&nbsp;&nbsp;&nbsp;ﾘｱﾊﾟｰｷﾝｸﾞｾﾝｻｰ＜ﾊﾞｯｸｿﾅｰ＞装着車には対応しておりません。<br>
&nbsp;&nbsp;&nbsp;&nbsp;ご注文際は必ずご確認いただきますようお願い申し上げます。
</span>
<br>
※ 丸型ウィンカー/ストップランプ/バックランプ/角形リフレクター付属<br>
※ 別途送料・お取付業者様でのお取付工賃が発生致します。<br>
※ 沖縄・離島へお届けの場合、送料は着払いとなります。<br>
※ 車両登録前の本パーツの架装はお控えください。<br>
※ 塗装・お取付後のキャンセル・返品・交換はお受けできかねます。

</span>
</p>
<ul class="photo clearfix">
<li><a href="{{ asset($image_pass.'B-r_bamperW.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i><img src="{{ asset($image_pass.'B-r_bamperW.jpg') }}" alt="" title=""></a></li>
</ul>
</div>
<table class="list">
<tr>
<td class="item_name_sub">未塗装品素地</td>
<td class="price">¥65,000<span class="tax">¥71,500（税込）</span> </td>
<td class="button"><label for="modal-trigger" class="btn size_ss mitsumori" data-item_id="1127">見積もり</label> <!--2019年 秋 発売開始予定--></td>
</tr>
<tr>
<td class="option">別途塗装代</td>
<td class="price option"><i class="fa fa-plus-circle"></i> ¥23,000<span class="tax">¥25,300（税込）</span> </td>
<td class="button">&nbsp;</td>
</tr>
</table>
</div>



<p class="title">trip basket ルーフラック <a href="{{ asset($manual_pass.'roofrack.pdf') }}" target="_blank"><i class="fa fa-wrench"></i></a><a href="{{ asset($manual_pass.'roofrack-partslist.pdf') }}" target="_blank"><i class="fa fa-wrench"></i></a>　<span class="caution">HALF</span><a href="{{ asset($manual_pass.'roofrack_halfsize.pdf') }}" target="_blank"><i class="fa fa-wrench"></i></a><a href="{{ asset($manual_pass.'roofrack-partslist_halfsize.pdf') }}" target="_blank"><i class="fa fa-wrench"></i></a></p>
<div class="detail">
<div class="image">
<p class="text">
インダストリアルなスチール製ルーフラックに、<br>
自然のぬくもりを感じるナチュラルウッドをセット。<br>
<br>
ウッドパネルにはラジアタパインと呼ばれる<br>
ニュージーランド産の松をアセチル化処理した、<br>
高耐久化天然木材 「アコヤ」を採用。<br>
<br>
無垢材の持つ風合い維持したまま、<br>
激しい温度の変化や乾燥などにも強い<br>
材質を使用しています。<br>
<br>あなたとジムニーの思い出と共に、<br>
使い込むほど風合いに深みが出ていきます。<br>
<br>
<strong>【待望のハーフサイズ登場！】</strong><br>
<br>
余ったスペースで、<br>
スキー板やサーフボードの積載が可能に。<br>
より遊びの幅が広がるハーフサイズがデビュー！
<br><br>
<span class="caution">

※ ﾙｰﾌﾗｯｸ本体/ｽﾁｰﾙ製 / ｶﾗｰはﾌﾞﾗｯｸとなります。<br>
&nbsp;&nbsp;&nbsp; ﾌﾙｻｲｽﾞ : 1350mm×1000mm×160mm / 重量 : 16kg<br>
&nbsp;&nbsp;&nbsp; ﾊｰﾌｻｲｽﾞ： 1350mm × 600mm × 160mm / 重量：13.5kg<br>
※ ﾍﾞｰｽｷｬﾘｱｷｯﾄでは、ﾙｰﾌﾗｯｸ単体に加えてJB64/JB74専用<br>
&nbsp;&nbsp;&nbsp; PIAA社製TERZOﾌｯﾄ(4個)とﾒｲﾝﾊﾞｰ(2本)が付属します。/ 重量 : 5kg<br>
※ 本製品は天然木材を使用している為、使用条件や経年劣化による<br>
&nbsp;&nbsp;&nbsp; 製品の反り、ヒビ割れ、日焼け等が発生する可能性がございます。<br>
&nbsp;&nbsp;&nbsp; 製品の性質上、そのような事例による返品·交換は致しかねます為、<br>
&nbsp;&nbsp;&nbsp; 予めご理解をいただいた上、ご購入いただきますようお願い申し上げます。<br>
※ 本製品はｽﾁｰﾙ製となり、防錆処理を施しておりますが、<br>
&nbsp;&nbsp;&nbsp; 長期間の継続使用ならびに使用環境等の要因により溶接部等へ<br>
&nbsp;&nbsp;&nbsp; 錆が発生する可能性がございます。予めご了承ください。<br>
※ 別途お取付業者様でのお取付工賃が発生致します。<br>
※ 沖縄·離島へお届けの場合、送料は着払いとなります。<br>
※ 車両登録前の本パーツの架装はお控えください。<br>
※ 塗装·お取付後のキャンセル·返品·交換はお受けできかねます。



</span>
</p>
</div>
<table class="list">
<tr>
<td class="item_name_sub">ルーフラック（フルサイズ）
単体【TB-RR1】 <a href="{{ asset($image_pass.'TB-RR1_1.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i></a> <a href="{{ asset($image_pass.'TB-RR1_2.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i></a></td>
<td class="price">¥59,000<span class="tax">¥64,900（税込）</span></td>
<td class="button"><label for="modal-trigger" class="btn size_ss mitsumori" data-item_id="1133">見積もり</label>
<!--受注停止中 --></td>
</tr>
<tr>
<td class="item_name_sub">ルーフラック・ベースキャリアセット 【TB-RRKJB】</td>
<td class="price">¥77,000<span class="tax">¥84,700（税込）</span></td>
<td class="button"><label for="modal-trigger2" class="btn size_ss mitsumori" data-item_id="1134">見積もり</label>
<!--受注停止中--></td>
</tr>
<tr>
<td class="item_name_sub">ルーフラック（ハーフサイズ）
単体【TB-HR1】 <a href="{{ asset($image_pass.'DSC_0017.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i></a> <a href="{{ asset($image_pass.'JIMNY_half-size.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i></a></td>
<td class="price">¥56,000<span class="tax">¥61,600（税込）</span></td>
<td class="button"><label for="modal-trigger" class="btn size_ss mitsumori" data-item_id="1298">見積もり</label>
<!--受注停止中 --></td>
</tr>
<tr>
<td class="item_name_sub">ベースキャリアキット（ハーフサイズ）
【TB-HRKJB】</td>
<td class="price">¥74,000<span class="tax">¥81,400（税込）</span></td>
<td class="button"><label for="modal-trigger" class="btn size_ss mitsumori" data-item_id="1302">見積もり</label></td>
</tr>
</table>

</div> 



</div>

<div class="box title center">
<h4>インテリア</h4>
</div>
<div class="accordion">



<p class="title">アーセナルピラー<span class="new"><script>newUp(2023,9,8,"new")</script></span></p>
<div class="detail">
<div class="image">
<p class="text">
ピカティニーレールがセットされたミリタリーAピラー。<br>
遊び心をくすぐるラギットなデザインに、<br>
別売アタッチメントで用途に合わせたガジェット取付が可能。<br>
純正インテリアに合わせた表面仕上げとブラックカラーで、<br>
室内空間の引き締めも同時に叶えます。<br>
<br>
オプションアタッチメントを全て含めた<br>
フルアタッチメントキットもご用意。<br>
<br>
<span class="caution">
<strong>ﾌﾙｱﾀｯﾁﾒﾝﾄｷｯﾄ内容</strong><br>
ｱｰｾﾅﾙﾋﾟﾗｰ本体(L/R) / ｽﾏﾌｫﾎﾙﾀﾞｰ本体<br>
GO PROﾏｳﾝﾄ本体 / ｱｰﾑ×2 / ﾚｰﾙﾏｳﾝﾄ×2<br>
1inchｱﾙﾐﾎﾞｰﾙﾍｯﾄﾞ×2 / ﾌﾛﾝﾄﾋﾞｭｰﾐﾗｰ<br>
<br>
<strong>ｽﾏﾌｫﾎﾙﾀﾞｰｷｯﾄ内容</strong><br>
P45:V54<br>
ｽﾏﾌｫﾎﾙﾀﾞｰ本体 / ﾚｰﾙﾏｳﾝﾄ<br>
ｱｰﾑ / 1inchｱﾙﾐﾎﾞｰﾙﾍｯﾄﾞ<br>
<br>
<strong>GO PROﾏｳﾝﾄｷｯﾄ内容</strong><br>
GO PROﾏｳﾝﾄ本体 / ﾚｰﾙﾏｳﾝﾄ<br>
ｱｰﾑ / 1inchｱﾙﾐﾎﾞｰﾙﾍｯﾄﾞ<br>
<br>
※ ﾌﾛﾝﾄﾋﾞｭｰﾐﾗｰのお取付は、<br>
&nbsp;&nbsp;&nbsp; 助手席側ﾋﾟﾗｰ本体に穴開け加工が必要となります。<br>
※ GO PROﾏｳﾝﾄｷｯﾄにはGO PRO本体側に装着する<br>
&nbsp;&nbsp;&nbsp; 取付ﾏｳﾝﾄ・ｶﾞｼﾞｪｯﾄ等は含まれておりません。ご注意ください。<br>
※ 取付ｻｰﾋﾞｽの取付工賃は、純正ﾋﾟﾗｰとの交換及び<br>
&nbsp;&nbsp;&nbsp; ｵﾌﾟｼｮﾝｱﾀｯﾁﾒﾝﾄ品取付のみの工賃となります。<br>
&nbsp;&nbsp;&nbsp; 別途ﾊﾟｰﾂ(ﾂィｰﾀｰ等)が装着されていた場合の<br>
&nbsp;&nbsp;&nbsp; 取外し・移設、ｵﾌﾟｼｮﾝ品への車載器取付・配線等の<br>
&nbsp;&nbsp;&nbsp; 追加工賃は含まれておりません。<br>
&nbsp;&nbsp;&nbsp; 追加ｹｰｽが発生した場合は、別途追加工賃が発生いたします。<br>
&nbsp;&nbsp;&nbsp; 予めご了承ください。<br>
※ 別途お取付業者様でのお取付工賃が発生致します。<br>
※ 沖縄・離島へお届けの場合、送料は着払いとなります。<br>
※ 車両登録前の本パーツの架装はお控えください。<br>
※ 塗装・お取付後のキャンセル・返品・交換はお受けできかねます。
</span>
</p>
<ul class="photo clearfix">
<li><a href="{{ asset($company_pass.'images/pillar_1.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i><img src="{{ asset($company_pass.'images/pillar_1.jpg') }}" alt="" title=""></a></li>
<li><a href="{{ asset($company_pass.'images/pillar_3-2.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i><img src="{{ asset($company_pass.'images/pillar_3-2.jpg') }}" alt="" title=""></a></li>
<li><a href="{{ asset($company_pass.'images/pillar_4-2.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i><img src="{{ asset($company_pass.'images/pillar_4-2.jpg') }}" alt="" title=""></a></li>
<li><a href="{{ asset($company_pass.'images/pillar_9.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i><img src="{{ asset($company_pass.'images/pillar_9.jpg') }}" alt="" title=""></a></li>
</ul>
</div><!--image -->
<table class="list stores">
<tbody><tr>
  <td class="item_name_sub">フルアタッチメントキット <a href="{{ asset($company_pass.'images/pillar_1.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i></a></td>
  <td class="price">
    ¥29,000<span class="tax">¥31,900（税込）</span></td>
  <td class="button"><div class="storesjp-button" data-storesjp-item="64eeb9855ddc5d0060cd94ee" data-storesjp-variation="64eeb9855ddc5d0060cd94ef" data-storesjp-name="damd" data-storesjp-layout="layout_c" data-storesjp-lang="ja" ></div><script>(function(d,s,id){var st=d.getElementsByTagName(s)[0];if(d.getElementById(id)){return;}var nst=d.createElement(s);nst.id=id;nst.src="//btn.stores.jp/button.js";nst.charset="UTF-8";st.parentNode.insertBefore(nst,st);})(document, "script", "storesjp-button");</script></td>
</tr>
  <tr>
    <td class="item_name_sub">ピラー本体 L/R <a href="{{ asset($company_pass.'images/pillar_2.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i></a> <a href="{{ asset($company_pass.'images/pillar_9.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i></a></td>
    <td class="price">
      ¥18,000<span class="tax">¥19,800（税込）</span></td>
    <td class="button"><div class="storesjp-button" data-storesjp-item="64eeb839d952300033e7fb2f" data-storesjp-variation="64eeb839d952300033e7fb30" data-storesjp-name="damd" data-storesjp-layout="layout_c" data-storesjp-lang="ja" ></div><script>(function(d,s,id){var st=d.getElementsByTagName(s)[0];if(d.getElementById(id)){return;}var nst=d.createElement(s);nst.id=id;nst.src="//btn.stores.jp/button.js";nst.charset="UTF-8";st.parentNode.insertBefore(nst,st);})(document, "script", "storesjp-button");</script></td>
  </tr>
  <tr>
    <td class="item_name_sub">スマフォホルダーキット <a href="{{ asset($company_pass.'images/pillar_3.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i></a> <a href="{{ asset($company_pass.'images/pillar_3-2.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i></a></td>
    <td class="price">
      ¥5,800<span class="tax">¥6,380（税込）</span></td>
    <td class="button"><div class="storesjp-button" data-storesjp-item="64eebd194fb490003d861dae" data-storesjp-variation="64eebd194fb490003d861daf" data-storesjp-name="damd" data-storesjp-layout="layout_c" data-storesjp-lang="ja" ></div><script>(function(d,s,id){var st=d.getElementsByTagName(s)[0];if(d.getElementById(id)){return;}var nst=d.createElement(s);nst.id=id;nst.src="//btn.stores.jp/button.js";nst.charset="UTF-8";st.parentNode.insertBefore(nst,st);})(document, "script", "storesjp-button");</script></td>
  </tr>
  <tr>
    <td class="item_name_sub">GO PROマウントキット <a href="{{ asset($company_pass.'images/pillar_4.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i></a> <a href="{{ asset($company_pass.'images/pillar_4-2.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i></a></td>
    <td class="price">
      ¥4,800<span class="tax">¥5,280（税込）</span></td>
    <td class="button"><div class="storesjp-button" data-storesjp-item="64eebde32ce5f60029f291b9" data-storesjp-variation="64eebde32ce5f60029f291ba" data-storesjp-name="damd" data-storesjp-layout="layout_c" data-storesjp-lang="ja" ></div><script>(function(d,s,id){var st=d.getElementsByTagName(s)[0];if(d.getElementById(id)){return;}var nst=d.createElement(s);nst.id=id;nst.src="//btn.stores.jp/button.js";nst.charset="UTF-8";st.parentNode.insertBefore(nst,st);})(document, "script", "storesjp-button");</script></td>
  </tr>
  <tr>
    <td class="item_name_sub">フロントビューミラー <a href="{{ asset($company_pass.'images/pillar_5.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i></a> <a href="{{ asset($company_pass.'images/pillar_5-2.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i></a></td>
    <td class="price">
      ¥2,800<span class="tax">¥3,080（税込）</span></td>
    <td class="button"><div class="storesjp-button" data-storesjp-item="64eebc1f248f8c002b7992f9" data-storesjp-variation="64eebc1f248f8c002b7992fa" data-storesjp-name="damd" data-storesjp-layout="layout_c" data-storesjp-lang="ja" ></div><script>(function(d,s,id){var st=d.getElementsByTagName(s)[0];if(d.getElementById(id)){return;}var nst=d.createElement(s);nst.id=id;nst.src="//btn.stores.jp/button.js";nst.charset="UTF-8";st.parentNode.insertBefore(nst,st);})(document, "script", "storesjp-button");</script></td>
  </tr>
  <tr>
    <td class="item_name_sub">１inchアルミボールヘッド <a href="{{ asset($company_pass.'images/pillar_6.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i></a></td>
    <td class="price">
      ¥1,800<span class="tax">¥1,980（税込）</span></td>
    <td class="button"><div class="storesjp-button" data-storesjp-item="64f4a4b4e47f10002ceb7a10" data-storesjp-variation="64f4a4b4e47f10002ceb7a11" data-storesjp-name="damd" data-storesjp-layout="layout_c" data-storesjp-lang="ja" ></div><script>(function(d,s,id){var st=d.getElementsByTagName(s)[0];if(d.getElementById(id)){return;}var nst=d.createElement(s);nst.id=id;nst.src="//btn.stores.jp/button.js";nst.charset="UTF-8";st.parentNode.insertBefore(nst,st);})(document, "script", "storesjp-button");</script></td>
  </tr>
  <tr>
    <td class="item_name_sub">ジョイントアーム単品 <a href="{{ asset($company_pass.'images/pillar_7.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i></a></td>
    <td class="price">
      ¥1,800<span class="tax">¥1,980（税込）</span></td>
    <td class="button"><div class="storesjp-button" data-storesjp-item="64f4a5687beeeb0031bfe93f" data-storesjp-variation="64f4a5687beeeb0031bfe940" data-storesjp-name="damd" data-storesjp-layout="layout_c" data-storesjp-lang="ja" ></div><script>(function(d,s,id){var st=d.getElementsByTagName(s)[0];if(d.getElementById(id)){return;}var nst=d.createElement(s);nst.id=id;nst.src="//btn.stores.jp/button.js";nst.charset="UTF-8";st.parentNode.insertBefore(nst,st);})(document, "script", "storesjp-button");</script></td>
  </tr>
  <tr>
    <td class="item_name_sub">レールマウント単品 <a href="{{ asset($company_pass.'images/pillar_8.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i></a></td>
    <td class="price">
      ¥2,800<span class="tax">¥3,080（税込）</span></td>
    <td class="button"><div class="storesjp-button" data-storesjp-item="64f4a3e3e47f10002ceb79eb" data-storesjp-variation="64f4a3e3e47f10002ceb79ec" data-storesjp-name="damd" data-storesjp-layout="layout_c" data-storesjp-lang="ja" ></div><script>(function(d,s,id){var st=d.getElementsByTagName(s)[0];if(d.getElementById(id)){return;}var nst=d.createElement(s);nst.id=id;nst.src="//btn.stores.jp/button.js";nst.charset="UTF-8";st.parentNode.insertBefore(nst,st);})(document, "script", "storesjp-button");</script></td>
  </tr>
</tbody>
</table>
</div><!--detail -->


<p class="title">trip basket ドリンクホルダー【送料込】<span class="sub green">ONLINE 限定</span> </p>
<div class="detail">
<div class="image">
<p class="text">
天然木の無垢材と幾何学的な曲げ加工を施された<br>
ステンレス棒材が組み合わさった<br>
ナチュラルテイストのドリンクホルダー。<br>
<br>
缶、ペットボトル、紙パックまで<br>
多様なサイズのドリンクに対応し、<br>
底面のコースターには高耐久のコルクを使い、<br>
保温性の維持と振動音を防止しています。	

</p>
<ul class="photo clearfix">
<li><a href="{{ asset($company_pass.'images/drinkholder/DH-untenseki.png') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i><img src="{{ asset($company_pass.'images/drinkholder/DH-untenseki.png') }}" alt="" title=""></a></li>
<li><a href="{{ asset($company_pass.'images/drinkholder/DH-jyosyuseki.png') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i><img src="{{ asset($company_pass.'images/drinkholder/DH-jyosyuseki.png') }}" alt="" title=""></a></li>
<li><a href="{{ asset($company_pass.'images/drinkholder/DH-explain.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i><img src="{{ asset($company_pass.'images/drinkholder/DH-explain.jpg') }}" alt="" title=""></a></li>
<li><a href="{{ asset($company_pass.'images/drinkholder/DHLO2.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i><img src="{{ asset($company_pass.'images/drinkholder/DHLO2.jpg') }}" alt="" title=""></a></li>
<li><a href="{{ asset($company_pass.'images/drinkholder/DHNA.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i><img src="{{ asset($company_pass.'images/drinkholder/DHNA.jpg') }}" alt="" title=""></a></li>
<li><a href="{{ asset($company_pass.'images/drinkholder/DHTS2.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i><img src="{{ asset($company_pass.'images/drinkholder/DHTS2.jpg') }}" alt="" title=""></a></li>
</ul>
</div>
<table class="list stores">
<tr>
<td class="item_name_sub">NATURAL 【TB-DHNA】</td>
<td class="price">¥18,000<span class="tax">¥19,800（税込）</span> </td>
<td class="button">
<div class="storesjp-button" data-storesjp-item="625ea33388dc6522b9acb808" data-storesjp-variation="625ea33388dc6522b9acb80f" data-storesjp-name="damd" data-storesjp-layout="layout_c" data-storesjp-lang="ja" ></div><script>(function(d,s,id){var st=d.getElementsByTagName(s)[0];if(d.getElementById(id)){return;}var nst=d.createElement(s);nst.id=id;nst.src="//btn.stores.jp/button.js";nst.charset="UTF-8";st.parentNode.insertBefore(nst,st);})(document, "script", "storesjp-button");</script>							
</td>
</tr>
<tr>
<td class="item_name_sub">LIGHT OAK 【TB-DHLO】</td>
<td class="price">¥18,000<span class="tax">¥19,800（税込）</span> </td>
<td class="button"><div class="storesjp-button" data-storesjp-item="625ea33388dc6522b9acb808" data-storesjp-variation="625ea33388dc6522b9acb80e" data-storesjp-name="damd" data-storesjp-layout="layout_c" data-storesjp-lang="ja" ></div><script>(function(d,s,id){var st=d.getElementsByTagName(s)[0];if(d.getElementById(id)){return;}var nst=d.createElement(s);nst.id=id;nst.src="//btn.stores.jp/button.js";nst.charset="UTF-8";st.parentNode.insertBefore(nst,st);})(document, "script", "storesjp-button");</script>							</td>
</tr>
<tr>
<td class="item_name_sub">DARK OAK 【TB-DHDO】</td>
<td class="price">¥18,000<span class="tax">¥19,800（税込）</span></td>
<td class="button"><div class="storesjp-button" data-storesjp-item="625ea33388dc6522b9acb808" data-storesjp-variation="625ea33388dc6522b9acb810" data-storesjp-name="damd" data-storesjp-layout="layout_c" data-storesjp-lang="ja" ></div><script>(function(d,s,id){var st=d.getElementsByTagName(s)[0];if(d.getElementById(id)){return;}var nst=d.createElement(s);nst.id=id;nst.src="//btn.stores.jp/button.js";nst.charset="UTF-8";st.parentNode.insertBefore(nst,st);})(document, "script", "storesjp-button");</script>							</td>
</tr>
<tr>
<td class="item_name_sub">TOBACCO SUNBURST 【TB-DHTSB】</td>
<td class="price">¥24,000<span class="tax">¥26,400（税込）</span></td>
<td class="button"><div class="storesjp-button" data-storesjp-item="625f9e492023976e3a7cc086" data-storesjp-variation="625f9e492023976e3a7cc08a" data-storesjp-name="damd" data-storesjp-layout="layout_c" data-storesjp-lang="ja" ></div><script>(function(d,s,id){var st=d.getElementsByTagName(s)[0];if(d.getElementById(id)){return;}var nst=d.createElement(s);nst.id=id;nst.src="//btn.stores.jp/button.js";nst.charset="UTF-8";st.parentNode.insertBefore(nst,st);})(document, "script", "storesjp-button");</script>							</td>
</tr>
</table>

</div>




<p class="title">trip basket ドリンクホルダー &amp; テーブル【送料込】 <span class="sub green">ONLINE 限定</span></p>
<div class="detail">
<div class="image">
<p class="text">
天然木材のドリンクホルダーとテーブルのセット。<br>
<br>
テーブルの固定は強力なネオジューム磁石を使用し、<br>
安全性を考慮しながら、取り外しも簡単。<br>
外したテーブルはドアポケットに収納することができます。<br>
<span class="caution">
※ 助手席エアバックの関係上、 走行中は必ずテーブルを取り外してご利用ください。						
</span>					
	
</p>
<ul class="photo clearfix">
<li><a href="{{ asset($company_pass.'images/drinkholder/DTimage.png') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i><img src="{{ asset($company_pass.'images/drinkholder/DTimage.png') }}" alt="" title=""></a></li>
<li><a href="{{ asset($company_pass.'images/drinkholder/DTimage2.png') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i><img src="{{ asset($company_pass.'images/drinkholder/DTimage2.png') }}" alt="" title=""></a></li>
<li><a href="{{ asset($company_pass.'images/drinkholder/DTNA.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i><img src="{{ asset($company_pass.'images/drinkholder/DTNA.jpg') }}" alt="" title=""></a></li>
<li><a href="{{ asset($company_pass.'images/drinkholder/DTNA2.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i><img src="{{ asset($company_pass.'images/drinkholder/DTNA2.jpg') }}" alt="" title=""></a></li>
<li><a href="{{ asset($company_pass.'images/drinkholder/DTLO.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i><img src="{{ asset($company_pass.'images/drinkholder/DTLO.jpg') }}" alt="" title=""></a></li>
<li><a href="{{ asset($company_pass.'images/drinkholder/DTLO2.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i><img src="{{ asset($company_pass.'images/drinkholder/DTLO2.jpg') }}" alt="" title=""></a></li>
<li><a href="{{ asset($company_pass.'images/drinkholder/DTDO.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i><img src="{{ asset($company_pass.'images/drinkholder/DTDO.jpg') }}" alt="" title=""></a></li>
<li><a href="{{ asset($company_pass.'images/drinkholder/DTDO2.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i><img src="{{ asset($company_pass.'images/drinkholder/DTDO2.jpg') }}" alt="" title=""></a></li>
<li><a href="{{ asset($company_pass.'images/drinkholder/DTTS.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i><img src="{{ asset($company_pass.'images/drinkholder/DTTS.jpg') }}" alt="" title=""></a></li>
<li><a href="{{ asset($company_pass.'images/drinkholder/DTTS2.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i><img src="{{ asset($company_pass.'images/drinkholder/DTTS2.jpg') }}" alt="" title=""></a></li>
</ul>
</div>
<table class="list stores">
<tr>
<td class="item_name_sub">NATURAL 【TB-DHTNA】</td>
<td class="price">¥25,000<span class="tax">¥27,500（税込）</span> </td>
<td class="button">
<div class="storesjp-button" data-storesjp-item="625f8d853463e757201c69c6" data-storesjp-variation="625f8d853463e757201c69d2" data-storesjp-name="damd" data-storesjp-layout="layout_c" data-storesjp-lang="ja" ></div><script>(function(d,s,id){var st=d.getElementsByTagName(s)[0];if(d.getElementById(id)){return;}var nst=d.createElement(s);nst.id=id;nst.src="//btn.stores.jp/button.js";nst.charset="UTF-8";st.parentNode.insertBefore(nst,st);})(document, "script", "storesjp-button");</script>												
</td>
</tr>
<tr>
<td class="item_name_sub">LIGHT OAK 【TB-DHLO】</td>
<td class="price">¥25,000<span class="tax">¥27,500（税込）</span> </td>
<td class="button"><div class="storesjp-button" data-storesjp-item="625f8d853463e757201c69c6" data-storesjp-variation="625f8d853463e757201c69d3" data-storesjp-name="damd" data-storesjp-layout="layout_c" data-storesjp-lang="ja" ></div><script>(function(d,s,id){var st=d.getElementsByTagName(s)[0];if(d.getElementById(id)){return;}var nst=d.createElement(s);nst.id=id;nst.src="//btn.stores.jp/button.js";nst.charset="UTF-8";st.parentNode.insertBefore(nst,st);})(document, "script", "storesjp-button");</script>												</td>
</tr>
<tr>
<td class="item_name_sub">DARK OAK 【TB-DHDO】</td>
<td class="price">¥25,000<span class="tax">¥27,500（税込）</span></td>
<td class="button"><div class="storesjp-button" data-storesjp-item="625f8d853463e757201c69c6" data-storesjp-variation="625f8d853463e757201c69d4" data-storesjp-name="damd" data-storesjp-layout="layout_c" data-storesjp-lang="ja" ></div><script>(function(d,s,id){var st=d.getElementsByTagName(s)[0];if(d.getElementById(id)){return;}var nst=d.createElement(s);nst.id=id;nst.src="//btn.stores.jp/button.js";nst.charset="UTF-8";st.parentNode.insertBefore(nst,st);})(document, "script", "storesjp-button");</script>													</td>
</tr>
<tr>
<td class="item_name_sub">TOBACCO SUNBURST 【TB-DHTSB】</td>
<td class="price">¥30,000<span class="tax">¥33,000（税込）</span></td>
<td class="button"><div class="storesjp-button" data-storesjp-item="625fa08408e5e225c24efd3f" data-storesjp-variation="625fa14a6b87c37a9d2b4ce8" data-storesjp-name="damd" data-storesjp-layout="layout_c" data-storesjp-lang="ja" ></div><script>(function(d,s,id){var st=d.getElementsByTagName(s)[0];if(d.getElementById(id)){return;}var nst=d.createElement(s);nst.id=id;nst.src="//btn.stores.jp/button.js";nst.charset="UTF-8";st.parentNode.insertBefore(nst,st);})(document, "script", "storesjp-button");</script>													</td>
</tr>
</table>

</div>



</div>

</div>

<div class="sub_data accordion">

<h3 class="title">DATA</h3>
<div class="box detail">
<dl class="data clearfix">
<dt>形式
<dd>JB64<dt>年式
<dd>2018.7〜								
<dt>ホイール
<dd>APIO WILDBOAR SR<br>
【16×5.5J +20】				
<dt>タイヤ
<dd>
TOYO TIRE OPEN COUNTRY R/T<br>
【185/85R16 105/103N LT】				
<dt>サスペンション	
<dd>APIO 6440 SUSPENSION KIT											
</dl>
</div>

<h3 class="title">塗装色</h3>
<div class="box detail">

<h4>ボンネットフードカバー</h4>
<ul>
<li>ﾋﾟｭｱﾎﾜｲﾄﾊﾟｰﾙ（ZVR)
<li>ｼﾞｬﾝｸﾞﾙｸﾞﾘｰﾝ（ZZC）
<li>ﾌﾞﾙｰｲｯｼｭﾌﾞﾗｯｸﾊﾟｰﾙ3（ZJ3）
<li>ﾐﾃﾞｨｱﾑｸﾞﾚｰ（ZVL）
<li>ｼﾌｫﾝｱｲﾎﾞﾘｰﾒﾀﾘｯｸ（ZVG）
</ul>

<h4>フロントバンパー</h4>
<ul>
<li>ｺｯﾄﾝﾎﾜｲﾄ×粗目ﾏｯﾄﾌﾞﾗｯｸ
<li>粗目ｼﾙﾊﾞｰ×粗目ﾏｯﾄﾌﾞﾗｯｸ
<li>粗目ﾏｯﾄﾌﾞﾗｯｸ×ｶﾞﾝﾒﾀ
</ul>

<h4>リアバンパー</h4>
<ul>
<li>ｺｯﾄﾝﾎﾜｲﾄ×粗目ﾏｯﾄﾌﾞﾗｯｸ
<li>粗目ｼﾙﾊﾞｰ×粗目ﾏｯﾄﾌﾞﾗｯｸ
<li>粗目ﾏｯﾄﾌﾞﾗｯｸ×ｶﾞﾝﾒﾀ
<li>ｼﾞｬﾝｸﾞﾙｸﾞﾘｰﾝ（ZZC）×粗目ﾏｯﾄﾌﾞﾗｯｸ
<li>ﾐﾃﾞｨｱﾑｸﾞﾚｰ（ZVL）×粗目ﾏｯﾄﾌﾞﾗｯｸ
<li>ｼﾌｫﾝｱｲﾎﾞﾘｰﾒﾀﾘｯｸ（ZVG）×粗目ﾏｯﾄﾌﾞﾗｯｸ
</ul>
<!--<h4>オリジナル塗装</h4>
<ul>	
<li>マットブラック	
</ul>
<h4>純正色塗装</h4>
<ul>		
<li>ピュアホワイトパール（ZVR）			
<li>シルキーシルバーメタリック（Z2S）			
<li>ジャングルグリーン（ZZC）			
<li>ブルーイッシュブラックパール3（ZJ3）			
<li>ミディアムグレー（ZVL）			
<li>ブリスクブルーメタリック（ZWY）			
<li>シフォンアイボリーメタリック（ZVG）			
<li>キネティックイエロー（ZZB）			
<li>スペリアホワイト (26U) 
</ul>-->
</div>

<h3 class="title">取り付け要項</h3>
<div class="box detail">
<ul>
<li>取り付け方法：両面テープ・専用ステー・ビス・ボルト／ナット類
<li>付属品：両面テープ・モール・ステー・ボルト／ナット・タッピングビス・プライマー等
<li>必要工具：脱脂剤（パーツクリーナー等）・ハサミ・ドライバー・スパナ・ドリル（タッピングビス下穴用）
</ul>
</div>

<h3 class="title">注意事項</h3>
<div class="box detail">
<ol>
<li>未塗装製品は、塗装前に必ず装着確認を行って下さい。</li>
<li>取り付け部品等は、開封後に必ずご確認をお願い致します。</li>
<li>取り付け作業は、安全な場所を確認後、施工してください。</li>
<li>専門業者での取り付け塗装をお勧め致します。</li>
</ol>
</div>

</div>


<hr>

<div class="box_apio">
<p class="title center"><img src="{{ asset($image_pass.'ttl_apio.jpg') }}" alt="apio">
<ul class="item box column_3">
<li><img src="{{ asset($image_pass.'apio_1.jpg') }}"><p class="title"><!--40mmUP SUSPENSION KIT -->
<li><img src="{{ asset($image_pass.'apio_2.jpg') }}"><p class="title"><!--WHEELS -->
<li><img src="{{ asset($image_pass.'apio_3.jpg') }}"><p class="title"><!--EXHOUST -->
</ul>
<p class="catch clear center"><span>JIMNYカスタムのスタンダード。</span></p>
<p class="lead">ジムニー・ザ・ルーツに取り付けられている<br>
ボディキット以外のパーツは、<br>
ジムニー専門パーツメーカーAPIOのパーツになります。
<p class="lead">弊社にてお取り扱いのないパーツについては、<br>APIOにてご購入いただけます！
<p class="button center"><a href="http://www.apio.jp/" target="_blank" class="btn">APIO WEB SITE</a></p>
</div>


<hr>

<div class="movie-wrap clear">
<iframe width="560" height="315" src="https://www.youtube.com/embed/Ata5VRea4qM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>


<hr>

<section class="color" style="padding: 0;">
<p class="center"><img src="{{ asset($image_pass.'ttl_colorsample.png') }}" alt="" width="320"></p>
<ul class="list product column_4">
  
<li><a href="{{ asset($image_pass.'color/i_sil.jpg') }}" class="fancybox" rel="color"><img src="{{ asset($image_pass.'color/i_sil.jpg') }}" alt="" title=""></a></li>
<li><a href="{{ asset($image_pass.'color/gr_bl.jpg') }}" class="fancybox" rel="color"><img src="{{ asset($image_pass.'color/gr_bl.jpg') }}" alt="" title=""></a></li>
<li><a href="{{ asset($image_pass.'color/gr_wh.jpg') }}" class="fancybox" rel="color"><img src="{{ asset($image_pass.'color/gr_wh.jpg') }}" alt="" title=""></a></li>
<li><a href="{{ asset($image_pass.'color/blk_sil.jpg') }}" class="fancybox" rel="color"><img src="{{ asset($image_pass.'color/blk_sil.jpg') }}" alt="" title=""></a></li>
<li><a href="{{ asset($image_pass.'color/sil_sil.jpg') }}" class="fancybox" rel="color"><img src="{{ asset($image_pass.'color/sil_sil.jpg') }}" alt="" title=""></a></li>
<li><a href="{{ asset($image_pass.'color/wh_bl.jpg') }}" class="fancybox" rel="color"><img src="{{ asset($image_pass.'color/wh_bl.jpg') }}" alt="" title=""></a></li>
<li><a href="{{ asset($image_pass.'color/bl_sil.jpg') }}" class="fancybox" rel="color"><img src="{{ asset($image_pass.'color/bl_sil.jpg') }}" alt="" title=""></a></li>
<li><a href="{{ asset($image_pass.'color/ye_wh.jpg') }}" class="fancybox" rel="color"><img src="{{ asset($image_pass.'color/ye_wh.jpg') }}" alt="" title=""></a></li>
</ul>
</section>


</section>


</div><!--inner -->
</div><!--contents -->

</div>

<!--#include virtual="/common/footer.html" -->
@include('shared.products.footer')

<link rel="stylesheet" href="{{ asset('lib/bxslider/jquery.bxslider.css') }}">
<script src="{{ asset('lib/bxslider/jquery.bxslider.js') }}"></script>
<script src="{{ asset('lib/jquery.fitvids.js') }}"></script>

<script type="text/javascript">
  $(document).ready(function(){
    $('.bxslider').bxSlider({
    pagerCustom: '#bx-pager',
	mode: 'fade',
    controls: false,
	captions:true
});
});
</script>

<script>
jQuery(document).ready(function($) {
    //PC
    if (window.matchMedia( '(min-width: 800px)' ).matches) {
        /*$.ajax({
            url: 'pc.js',
            dataType: 'script',
            cache: false
       });*/
    //SP
    } else {
    $(document).ready(function() {
	$(".accordion .title").hover(function(){
		$(this).css("cursor","pointer"); 
	},function(){
		$(this).css("cursor","default"); 
		});
		
	$(".accordion .detail").css("display","none");
	
	$(".accordion .title").click(function(){
		$(this).next().slideToggle("fast");
		$(this).toggleClass("active"); 
		});
	
	});
  };
});
</script>
<!--
<script>

$(window).on("load", function(){
    
    if (window.matchMedia( '(min-width: 800px)' ).matches) {
        
$.fancybox({
hideOnContentClick:true,
overlayShow:true,
type:'iframe',
width:600,
height:760,
href:'popup.html',
autoSize:false
}).click();


    } else {
		
$.fancybox({
hideOnContentClick:true,
overlayShow:true,
type:'iframe',
width:600,
height:420,
href:'popup.html',
autoSize:false
}).click();

  };
});
</script>
-->
    
<!--#include virtual="/common/products_mitsumori.html" -->
@vite(['resources/js/form.js'])

<!--#include virtual="/common/products_modal.html" -->
</body>
</html>
