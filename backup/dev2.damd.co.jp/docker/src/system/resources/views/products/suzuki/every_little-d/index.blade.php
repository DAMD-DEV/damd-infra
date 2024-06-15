@php
  $company_pass = 'product_images/suzuki/';
  $image_pass   = 'product_images/suzuki/every_little-d/images/';
  $manual_pass  = 'product_images/suzuki/every_little-d/manual/';
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
<title> EVERY / EVERY WAGON  little D. SUZUKI | エアロパーツ、ドレスアップのダムド | DAMD Inc.</title>
<meta http-equiv="content-style-type" content="text/css" />
<meta name="viewport" content="width=device-width,initial-scale=1.0" />

<meta property="og:title" content=" EVERY / EVERY WAGON  little D.｜SUZUKI | DAMD Inc."/>
<meta property="og:type" content="website"/>
<meta property="og:description" content="軍用車のような出で立ちでハスラーが持つ屈強さを引き出し、より力強いスタイルに。"/>
<meta property="og:url" content="http://www.damd.co.jp/products/suzuki/hustler_carabiner/"/>
<meta property="og:image" content="http://www.damd.co.jp/products/suzuki/hustler_carabiner/images/main.jpg">
<meta property="og:site_name" content=" EVERY / EVERY WAGON  little D.｜SUZUKI DAMD Inc."/>

<meta name="Keywords" content=" EVERY / EVERY WAGON  little D.,DAMD,SUZUKI" />

@include('shared.products.product_head')

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
<li> EVERY / EVERY WAGON  little D.</li>
</ul>
</div><!--contents -->

</div>

<div id="contents" class="clearfix">
  <div class="main_block normal">
    <div class="main_image"> <img src="{{ asset($image_pass.'main.jpg') }}" alt=""> </div>
    <div class="text">
      <p class="logo"><img src="{{ asset($image_pass.'logo.png') }}" alt=""></p>
      <p class="catch">みんなの"ぜんぶ"。<br>
        叶えちゃお！ </p>
      <p>ダムドの人気ボディキット "little D." に<br>
        頼もしいバン仕様、EVERY little D. が仲間入り！ </p>
      <p> 「何する？」 「どこ行く？」 </p>
      <p>その "ぜんぶ" を乗せて<br>
        どこへでも。どこまでも。 </p>
      <p>イメージでは終わらせない！<br>
        君のやりたいこと。<br>
        EVERY little D.と一緒に叶えちゃおう！ </p>
    </div>
  </div>
  <style>

.products .main_block .text{
	margin: 0 0 80px 0;
}

.products .main_block .text p.logo{
	margin: -500px 0 300px 0;
}

.products .main_block .text p.logo img{
	max-height: 160px;
	margin-bottom: 0px;
}

.products .main_block .main_image{
	/*background: #f8dfaf;*/
	padding: 0 0 60px 0;
}
.products .main_block .text p.catch{
	font-family: "ＭＳ Ｐ明朝", "MS PMincho", "ヒラギノ明朝 Pro W3", "Hiragino Mincho Pro", serif;
}
.products .main_block .text p{
	color: #333;
	font-family: "ヒラギノ角ゴ Pro W3", "Hiragino Kaku Gothic Pro", "メイリオ", Meiryo, Osaka, "ＭＳ Ｐゴシック", "MS PGothic", sans-serif;
}

.products .main_block .text p.logo{
	/*display: none;*/
	margin: 20px 0 10px 0;
}

.products table.list th {
    padding: 10px;
	background: #666 !important;
	border-bottom: inherit;
}

.products .accordion p.title .sub {
    background: #bf8c2b;
}

.shoplist.accordion p.title{
	background-color: inherit;
}
.shoplist.accordion p.title img{
	width: 300px;
}


@media screen and (max-width: 800px) {
.products .main_block .main_image{
	/*padding: 0 0 180px 0;*/
}

.products .main_block .text{
	margin: 0 0 0px 0;
}

.products .main_block .text p.logo{
	display: block;
	margin: 20px 0 0 0;
}


.products .main_block .text p.logo img{
	max-height: 70px;
	margin-bottom: 0px;
	height: 60px;
}
.products .main_block .text{
	top: 40%;
}

.shoplist{
	margin-top: -30px;
	clear: both;
}
.shoplist.accordion p.title {
    padding: 10px;
    font-weight: bold;
    margin: 0 0 0 0;
    background: url(../images_1/arrow_down.png) no-repeat 96% 50% inherit;
    background-size: 15px;
	letter-spacing: 0;
}
.shoplist.accordion p.title{
	background-color: inherit;
}

.shoplist.accordion p.title img{
	width: 150px;
}


}

  </style>
  <div class="inner">
    <div class="box title">
      <h3> EVERY / EVERY WAGON  little D.</h3>
    </div>
    <!--<p>ジムニー、タフトに続く 「little D.」ボディキット第3弾。<br>
軽キャン、車中泊、釣り、 サーフィン、ウィンタースポーツ etc<br>
あなたの豊かなアウトドアシーンにより応えられる<br>
待望のVAN STYLEな little D. が登場します！
</p> -->
    <div id="sliderWrap pre">
      <ul class="bxslider">
        <li><img src="{{ asset($image_pass.'18.jpg') }}" alt="" title=""></li>
        <li><img src="{{ asset($image_pass.'17.jpg') }}" alt="" title=""></li>
        <li><img src="{{ asset($image_pass.'19.jpg') }}" alt="" title=""></li>
        <li><img src="{{ asset($image_pass.'16.jpg') }}" alt="" title=""></li>
        <li><img src="{{ asset($image_pass.'15.jpg') }}" alt="" title=""></li>
        <li><img src="{{ asset($image_pass.'13.jpg') }}" alt="" title=""></li>
        <li><img src="{{ asset($image_pass.'14.jpg') }}" alt="" title=""></li>
        <li><img src="{{ asset($image_pass.'12.jpg') }}" alt="" title=""></li>
        <li><img src="{{ asset($image_pass.'DSC04410.jpg') }}" alt="" title=""></li>
        <li><img src="{{ asset($image_pass.'DSC04359.jpg') }}" alt="" title=""></li>
        <li><img src="{{ asset($image_pass.'DSC02631.jpg') }}" alt="" title=""></li>
        <li><img src="{{ asset($image_pass.'DSC03022.jpg') }}" alt="" title=""></li>
        <li><img src="{{ asset($image_pass.'DSC03424.jpg') }}" alt="" title=""></li>
      </ul>
      <p class="caution">※ デモカー画像はカスタム事例となり、実際の車両仕様と異なる点がございます。 </p>
      <div id="bx-pager"> 
      <a data-slide-index="0" href=""><img src="{{ asset($image_pass.'18.jpg') }}" alt=""></a> 
      <a data-slide-index="1" href=""><img src="{{ asset($image_pass.'17.jpg') }}" alt=""></a> 
      <a data-slide-index="2" href=""><img src="{{ asset($image_pass.'19.jpg') }}" alt=""></a> 
      <a data-slide-index="3" href=""><img src="{{ asset($image_pass.'16.jpg') }}" alt=""></a> 
      <a data-slide-index="4" href=""><img src="{{ asset($image_pass.'15.jpg') }}" alt=""></a> 
      <a data-slide-index="5" href=""><img src="{{ asset($image_pass.'13.jpg') }}" alt=""></a> 
      <a data-slide-index="6" href=""><img src="{{ asset($image_pass.'14.jpg') }}" alt=""></a> 
      <a data-slide-index="7" href=""><img src="{{ asset($image_pass.'12.jpg') }}" alt=""></a> 
      <a data-slide-index="8" href=""><img src="{{ asset($image_pass.'DSC04410.jpg') }}" alt=""></a> 
      <a data-slide-index="9" href=""><img src="{{ asset($image_pass.'DSC04359.jpg') }}" alt=""></a> 
      <a data-slide-index="10" href=""><img src="{{ asset($image_pass.'DSC02631.jpg') }}" alt=""></a> 
      <a data-slide-index="11" href=""><img src="{{ asset($image_pass.'DSC03022.jpg') }}" alt=""></a> 
      <a data-slide-index="12" href=""><img src="{{ asset($image_pass.'DSC03424.jpg') }}" alt=""></a> 
      </div>
    </div>
    <style>
.bx-wrapper{
	margin-bottom: 0 !important;
}
    </style>
    <!--<div class="main_data">
<ul class="caution list_none">
<li>※デモカーは実際の製品と異なる箇所もございます。
<li>※価格は税別となり、送料は含まれておりません。	
<li>※製作当時の保安基準に合わせて開発を行なっておりますが、現保安基準に適合しないパーツもございます。予めご了承下さい。																																
<br>
</ul>
<p><i class="fa fa-camera-retro"></i> <strong>をクリックすると写真が見れます。</strong></p>
</div> -->
    <div class="main_data">
      <div class="banner center"> <a href="/complete/shoplist/"><img src="{{ asset($image_pass.'banner.jpg') }}" alt=""></a>
        <!--<p><a href="#shoplist"><img src="{{ asset($image_pass.'banner2.jpg') }}" alt=""></a> </p>-->
      </div>
      <div class="box title center">
        <h4>エクステリア</h4>
      </div>
<div class="accordion">


<p class="title">コンプリートキット for VAN
<!-- <a href="{{ asset($manual_pass.'specia_bumper220203.pdf') }}"><i class="fa fa-wrench"></i></a> -->
</p>
<div class="detail">
<div class="image">
<p class="text"> アイコニックなルーバーグリルで、<br>
大きく印象を変える丸目フェイスチェンジキットと<br>
丸型テールランプが目を引くリアバンパーがセットになった<br>
エブリィ (バン) 向けコンプリートキット。<br>
<span class="caution"> 
【キット内容】<br>
ﾌｪｲｽﾁｪﾝｼﾞｷｯﾄ (ﾎﾞﾝﾈｯﾄﾌｰﾄﾞ/ﾌｪﾝﾀﾞｰ/ﾌﾛﾝﾄｸﾞﾘﾙ/ﾌﾛﾝﾄﾊﾞﾝﾊﾟｰ)<br>
ﾘｱﾊﾞﾝﾊﾟｰ / little D. ﾚﾀｰｴﾝﾌﾞﾚﾑ (ﾏｯﾄﾌﾞﾗｯｸ)<br>
<br>
<span class="red">※ 本製品はLEDﾍｯﾄﾞﾗﾝﾌﾟ仕様車には取付不可となります。<br>
&nbsp;&nbsp;&nbsp;(現在、対応品を開発中。発売の際はﾎｰﾑﾍﾟｰｼﾞ等にてお知らせ致します。)</span><br>   
※ ﾃﾞｨｽﾁｬｰｼﾞﾄﾞﾍｯﾄﾞﾗﾝﾌﾟ仕様は、<br>
&nbsp;&nbsp;&nbsp;基本ｷｯﾄに加え 「HID H4変換ｷｯﾄ」 が付属いたします。<br>
※ ﾘｱﾊﾟｰｷﾝｸﾞｾﾝｻｰ装着車の場合、純正ｾﾝｻｰを弊社ﾘｱﾊﾞﾝﾊﾟｰへ移植します。<br>
&nbsp;&nbsp;&nbsp;純正ｾﾝｻｰのﾍﾞｾﾞﾙとｾﾝｻｰ本体は純正ﾎﾞﾃﾞｨ色となります為、<br>
&nbsp;&nbsp;&nbsp;別途「ﾘｱｾﾝｻｰﾍﾞｾﾞﾙｷｯﾄ」の購入を推奨いたします。<br>
※ 塗装済み品の場合、対応純正塗装色はｸｰﾙｶｰｷﾊﾟｰﾙﾒﾀﾘｯｸのみとなり、<br>
&nbsp;&nbsp;&nbsp;各ﾊﾟｰﾂの塗り分けは下記のとおりとなります。<br>
&nbsp;&nbsp;&nbsp;【ﾌｪｲｽﾁｪﾝｼﾞｷｯﾄ】<br>
&nbsp;&nbsp;&nbsp;ﾎﾞﾝﾈｯﾄﾌｰﾄﾞ / ﾌｪﾝﾀﾞ-部：ｸｰﾙｶｰｷﾊﾟｰﾙﾒﾀﾘｯｸ<br>
&nbsp;&nbsp;&nbsp;ｸﾞﾘﾙ部：粗目ﾏｯﾄﾌﾞﾗｯｸ×ｸｰﾙｶｰｷﾊﾟｰﾙﾒﾀﾘｯｸ<br>
&nbsp;&nbsp;&nbsp;ﾊﾞﾝﾊﾟｰ部 : 粗目ﾏｯﾄﾌﾞﾗｯｸ<br>
&nbsp;&nbsp;&nbsp;【ﾘｱﾊﾞﾝﾊﾟｰ】 : 粗目ﾏｯﾄﾌﾞﾗｯｸ<br>
※ 弊社塗装済み品に設定がない純正色は、ご不便をおかけいたしますが、<br>
&nbsp;&nbsp;&nbsp; 未塗装品をご購入の上、お客様にて塗装のご手配をお願い申し上げます。<br>
※ 別途送料・お取付業者様でのお取付工賃が発生致します。<br>
※ お取り付け後のキャンセル・返品・交換はお受けできかねます。<br>
※ 沖縄・離島へお届けの場合、送料は着払いとなります。<br>
※ 個人宅配送は不可となります。<br>
※ 車両登録前の本パーツの架装はお控えください。
</span></p>
<ul class="photo clearfix">
<li><a href="{{ asset($image_pass.'EVERY_VAN_complete.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i><img src="{{ asset($image_pass.'EVERY_VAN_complete.jpg') }}" alt="" title=""></a></li>
</ul>
</div>

<h5>コンプリートキット for VAN (ハロゲンヘッドランプ仕様)</h5>
<table class="list">
<tr>
<td class="item_name_sub">未塗装品素地</td>
<td class="price">¥348,000<span class="tax">¥382,800（税込）</span></td>
<td class="button"><label for="modal-trigger" class="btn size_ss mitsumori" data-item_id="1201">見積もり</label></td>
</tr>
<tr>
<td class="option">別途塗装代</td>
<td class="price option"><i class="fa fa-plus-circle"></i> ¥83,000<span class="tax">¥91,300（税込）</span></td>
<td class="button">&nbsp;</td>
</tr>
</table>

<h5>コンプリートキット for VAN (ディスチャージドヘッドランプ仕様)</h5>
<table class="list">
<tr>
<td class="item_name_sub">未塗装品素地</td>
<td class="price">¥372,000<span class="tax">¥409,200（税込）</span></td>
<td class="button"><label for="modal-trigger" class="btn size_ss mitsumori" data-item_id="1283">見積もり</label></td>
</tr>
<tr>
<td class="option">別途塗装代</td>
<td class="price option"><i class="fa fa-plus-circle"></i> ¥83,000<span class="tax">¥91,300（税込）</span></td>
<td class="button">&nbsp;</td>
</tr>
</table>
</div>







<p class="title">コンプリートキット for WAGON </p>
<div class="detail">
<div class="image">
<p class="text">
バン仕様のコンプリートキット に加え、<br>
エブリィ ・ワゴンに装着された純正サイドスカートと交換する<br>
サイドプロテクターを追加したワゴン用コンプリートキット 。<br>
<br>
サイドプロテクターが、フロント/リアも含めた<br>
車両全体に統一感をもたらし、よりワイルドなスタイリングに。 

<span class="caution">
【キット内容】<br>
ﾌｪｲｽﾁｪﾝｼﾞｷｯﾄ (ﾎﾞﾝﾈｯﾄﾌｰﾄﾞ/ﾌｪﾝﾀﾞｰ/ﾌﾛﾝﾄｸﾞﾘﾙ/ﾌﾛﾝﾄﾊﾞﾝﾊﾟｰ)<br>
ﾘｱﾊﾞﾝﾊﾟｰ / little D. ﾚﾀｰｴﾝﾌﾞﾚﾑ (ﾏｯﾄﾌﾞﾗｯｸ) / ｻｲﾄﾞﾌﾟﾛﾃｸﾀｰ<br>
<br>
<span class="red">※ 本製品はLEDﾍｯﾄﾞﾗﾝﾌﾟ仕様車には取付不可となります。<br>
&nbsp;&nbsp;&nbsp;(現在、対応品を開発中。発売の際はﾎｰﾑﾍﾟｰｼﾞ等にてお知らせ致します。)</span><br>  
<!--※ 3型(2021年8月)以前の車両については、ﾘｱﾊﾞﾝﾊﾟｰ不適合の為、<br>
&nbsp;&nbsp;&nbsp; 本ｷｯﾄのご注文も不可となります。予めご了承ください。<br>-->
※ ｴﾌﾞﾘｨ ﾜｺﾞﾝ(DA17W) 1～2型(2015年2月～2019年5月)の車両について、<br>
&nbsp;&nbsp;&nbsp;ﾘｱﾊﾞﾝﾊﾟｰを取り付ける際の注意事項がございますので、<br>
&nbsp;&nbsp;&nbsp;必ずご確認をお願い致します。<br>
&nbsp;&nbsp;&nbsp;<a href="{{ asset($manual_pass.'caution_rear-bumper.pdf') }}" target="_blank">注意事項はコチラ</a><br>
※ ﾃﾞｨｽﾁｬｰｼﾞﾄﾞﾍｯﾄﾞﾗﾝﾌﾟ仕様は、<br>
&nbsp;&nbsp;&nbsp;基本ｷｯﾄに加え 「HID H4変換ｷｯﾄ」 が付属いたします。<br>
※ ﾘｱﾊﾟｰｷﾝｸﾞｾﾝｻｰ装着車の場合、純正ｾﾝｻｰを弊社ﾘｱﾊﾞﾝﾊﾟｰへ移植します。<br>
&nbsp;&nbsp;&nbsp;純正ｾﾝｻｰのﾍﾞｾﾞﾙとｾﾝｻｰ本体は純正ﾎﾞﾃﾞｨ色となります為、<br>
&nbsp;&nbsp;&nbsp;別途「ﾘｱｾﾝｻｰﾍﾞｾﾞﾙｷｯﾄ」の購入を推奨いたします。<br>
※ 塗装済み品の場合、対応純正塗装色はｸｰﾙｶｰｷﾊﾟｰﾙﾒﾀﾘｯｸのみとなり、<br>
&nbsp;&nbsp;&nbsp;各ﾊﾟｰﾂの塗り分けは下記のとおりとなります。<br>
&nbsp;&nbsp;&nbsp;【ﾌｪｲｽﾁｪﾝｼﾞｷｯﾄ】   ﾎﾞﾝﾈｯﾄﾌｰﾄﾞ / ﾌｪﾝﾀﾞ-部：ｸｰﾙｶｰｷﾊﾟｰﾙﾒﾀﾘｯｸ<br>
&nbsp;&nbsp;&nbsp;ｸﾞﾘﾙ部：粗目ﾏｯﾄﾌﾞﾗｯｸ×ｸｰﾙｶｰｷﾊﾟｰﾙﾒﾀﾘｯｸ<br>
&nbsp;&nbsp;&nbsp;ﾊﾞﾝﾊﾟｰ部 : 粗目ﾏｯﾄﾌﾞﾗｯｸ<br>
&nbsp;&nbsp;&nbsp;ｻｲﾄﾞﾌﾟﾛﾃｸﾀｰ】 : 粗目ﾏｯﾄﾌﾞﾗｯｸ /  【ﾘｱﾊﾞﾝﾊﾟｰ】 : 粗目ﾏｯﾄﾌﾞﾗｯｸ<br>
※ 弊社塗装済み品に設定がない純正色は、ご不便をおかけいたしますが、<br>
&nbsp;&nbsp;&nbsp;未塗装品をご購入の上、お客様にて塗装のご手配をお願い申し上げます。<br>
※ 別途送料・お取付業者様でのお取付工賃が発生致します。<br>
※ 沖縄・離島へお届けの場合、送料は着払いとなります。<br>
※ 個人宅配送は不可となります。<br>
※ 車両登録前の本パーツの架装はお控えください。<br>
<!--
※ ｴﾌﾞﾘｨ ﾜｺﾞﾝ(DA17W) 1～2型(2015年2月～2019年5月)の車両について、<br>
&nbsp;&nbsp;&nbsp;ﾘｱﾊﾞﾝﾊﾟｰを取り付ける際の注意事項がございますので、<br>
&nbsp;&nbsp;&nbsp;必ずご確認をお願い致します。<br>
&nbsp;&nbsp;&nbsp;<a href="{{ asset($manual_pass.'caution_rear-bumper.pdf') }}" target="_blank">注意事項はコチラ</a><br>
※ ｴﾌﾞﾘｨ ﾜｺﾞﾝ(DA17W) 3型(2019年6月～2021年8月)の車両については、<br>
&nbsp;&nbsp;&nbsp;付属ﾗｲﾄ類が不適合の為、装着は不可となります。<br>
&nbsp;&nbsp;&nbsp;ﾜｺﾞﾝの4型以降は適合となります。予めご了承ください。<br>
&nbsp;&nbsp;&nbsp;なお、ｴﾌﾞﾘｨ ﾊﾞﾝ(DA17V)は全ての型にてご装着が可能です。-->
</span>

</p>
<ul class="photo clearfix three">
<li><a href="{{ asset($image_pass.'EVERY_WAGON_complete.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i><img src="{{ asset($image_pass.'EVERY_WAGON_complete.jpg') }}" alt="" title=""></a></li>
</ul>
</div>
<h5>コンプリートキット for WAGON (ハロゲンヘッドランプ仕様)</h5>
<table class="list">
<tr>
<td class="item_name_sub">未塗装品素地</td>
<td class="price">¥388,000<span class="tax">¥426,800（税込）</span></td>
<td class="button"><label for="modal-trigger" class="btn size_ss mitsumori" data-item_id="1202">見積もり</label></td>
</tr>
<tr>
<td class="option">別途塗装代</td>
<td class="price option"><i class="fa fa-plus-circle"></i> ¥98,000<span class="tax">¥107,800（税込）</span></td>
<td class="button">&nbsp;</td>
</tr>
</table>
<h5>コンプリートキット for WAGON (ディスチャージドヘッドランプ仕様)</h5>
<table class="list">
<tr>
<td class="item_name_sub">未塗装品素地</td>
<td class="price">¥412,000<span class="tax">¥453,200（税込）</span></td>
<td class="button"><label for="modal-trigger" class="btn size_ss mitsumori" data-item_id="1284">見積もり</label></td>
</tr>
<tr>
<td class="option">別途塗装代</td>
<td class="price option"><i class="fa fa-plus-circle"></i> ¥98,000<span class="tax">¥107,800（税込）</span></td>
<td class="button">&nbsp;</td>
</tr>
</table>
</div>

<!--
<p class="title">HID H4変換キット </p>
<div class="detail">
<div class="image">
<p class="text"> ディスチャージドヘッドランプ装着車が対象のアイテム。<br>
ハロゲン丸目ヘッドランプに換装する為の変換ハーネスキット。 <span class="caution"> ※ ｺﾝﾌﾟﾘｰﾄｷｯﾄ / ﾌｪｲｽﾁｪﾝｼﾞｷｯﾄを購入されるお客様が対象のｱｲﾃﾑです。<br>
&nbsp;&nbsp;&nbsp; ﾃﾞｨｽﾁｬｰｼﾞﾄﾞﾍｯﾄﾞﾗﾝﾌﾟ装着車は、上記ｷｯﾄと本製品の同時購入が必要です。<br>
※ 別途送料・お取付業者様でのお取付工賃が発生致します。<br>
※ お取り付け後のキャンセル・返品・交換はお受けできかねます。<br>
※ 沖縄・離島へお届けの場合、送料は着払いとなります。<br>
※ 個人宅配送は不可となります。<br>
※ 車両登録前の本パーツの架装はお控えください。 </span> </p>
</div>
<table class="list">
<tr>
<td class="item_name_sub">&nbsp;</td>
<td class="price">¥24,000<span class="tax">¥26,400（税込）</span></td>
<td class="button"><label for="modal-trigger" class="btn size_ss mitsumori" data-item_id="1203">見積もり</label></td>
</tr>
</table>
</div>
-->



<p class="title">リアセンサーベゼルキット <a href="{{ asset($manual_pass.'1.pdf') }}"><i class="fa fa-wrench"></i></a></p>
        <div class="detail">
          <div class="image">
            <p class="text"> リアパーキングセンサー装着車が対象のアイテム。<br>
              little D. リアバンパーへ純正センサーを移植する際、<br>
              センサー本体とベゼルが純正ボディ色のままとなる為、<br>
              ブラックカラーのベゼルとセンサー本体をブラックアウトする<br>
              専用ステッカーがセットになったパッケージキット。<br>
              <br>
              マットブラック塗装されたリアバンパーで、<br>
              センサーを目立ちにくくしたい方は、<br>
              こちらのキット購入を推奨いたします。 <span class="caution"> ※ 別途送料・お取付業者様でのお取付工賃が発生致します。<br>
                ※ お取り付け後のキャンセル・返品・交換はお受けできかねます。<br>
                ※ 沖縄・離島へお届けの場合、送料は着払いとなります。<br>
                ※ 個人宅配送は不可となります。<br>
                ※ 車両登録前の本パーツの架装はお控えください。 </span> </p>
            <!--<ul class="photo clearfix three">
<li><a href="{{ asset($image_pass.'sticker.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i><img src="{{ asset($image_pass.'sticker.jpg') }}" alt="" title=""></a></li>
</ul> -->
          </div>
          <table class="list">
            <tr>
              <td class="item_name_sub">&nbsp;</td>
              <td class="price">¥9,800<span class="tax">¥10,780（税込）</span></td>
              <td class="button"><label for="modal-trigger" class="btn size_ss mitsumori" data-item_id="1204">見積もり</label></td>
            </tr>
          </table>
        </div>
        <p class="title">フェイスチェンジキット <a href="https://storage.googleapis.com/img-damd-co-jp/2023/07/ebca288c38e14a44ae6ee695743915d3.pdf"><i class="fa fa-wrench"></i></a> <a href="{{ asset($manual_pass.'2-3.pdf') }}"><i class="fa fa-wrench"></i></a></p>
        <div class="detail">
          <div class="image">
            <p class="text">フェンダーから前方部を総替えし、エッジの効いたシェイプと<br>
ギア感溢れる力強いデザインでエブリィを全く異なる表情に。<br>
little D.を象徴するアイコニックなルーバーグリルと、<br>
愛くるしい丸目のバランスが絶妙なフェイスチェンジキット 。
<span class="caution">
<span class="red">※ 本製品はLEDﾍｯﾄﾞﾗﾝﾌﾟ仕様車には取付不可となります。<br>
&nbsp;&nbsp;&nbsp;(現在、対応品を開発中。発売の際はﾎｰﾑﾍﾟｰｼﾞ等にてお知らせ致します。)</span><br>  
※ ﾃﾞｨｽﾁｬｰｼﾞﾄﾞﾍｯﾄﾞﾗﾝﾌﾟ仕様は、<br>
&nbsp;&nbsp;&nbsp;基本ｷｯﾄに加え「HID H4変換ｷｯﾄ」が付属いたします。】<br>
※ 塗装済み品の場合、対応純正塗装色はｸｰﾙｶｰｷﾊﾟｰﾙﾒﾀﾘｯｸのみとなり、】<br>
&nbsp;&nbsp;&nbsp;各ﾊﾟｰﾂの塗り分けは下記のとおりとなります。】<br>
&nbsp;&nbsp;&nbsp;【ﾌｪｲｽﾁｪﾝｼﾞｷｯﾄ】<br>
&nbsp;&nbsp;&nbsp;ﾎﾞﾝﾈｯﾄﾌｰﾄﾞ / ﾌｪﾝﾀﾞ-部：ｸｰﾙｶｰｷﾊﾟｰﾙﾒﾀﾘｯｸ】<br>
&nbsp;&nbsp;&nbsp;ｸﾞﾘﾙ部：粗目ﾏｯﾄﾌﾞﾗｯｸ×ｸｰﾙｶｰｷﾊﾟｰﾙﾒﾀﾘｯｸ】<br>
&nbsp;&nbsp;&nbsp;ﾊﾞﾝﾊﾟｰ部 : 粗目ﾏｯﾄﾌﾞﾗｯｸ】<br>
※ 弊社塗装済み品に設定がない純正色は、ご不便をおかけいたしますが、】<br>
&nbsp;&nbsp;&nbsp;未塗装品をご購入の上、お客様にて塗装のご手配をお願い申し上げます。】<br>
※ 別途送料・お取付業者様でのお取付工賃が発生致します。】<br>
※ お取り付け後のキャンセル・返品・交換はお受けできかねます。】<br>
※ 沖縄・離島へお届けの場合、送料は着払いとなります。】<br>
※ 個人宅配送は不可となります。】<br>
※ 車両登録前の本パーツの架装はお控えください。

</span> </p>
            <ul class="photo clearfix three">
              <li><a href="{{ asset($image_pass.'023A5195_1.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i><img src="{{ asset($image_pass.'023A5195_1.jpg') }}" alt="" title=""></a></li>
            </ul>
          </div>
          <h5>フェイスチェンジキット (ハロゲンヘッドランプ仕様)</h5>
        <table class="list">
            <tr>
              <td class="item_name_sub">未塗装品素地</td>
              <td class="price">¥288,000<span class="tax">¥316,800（税込）</span></td>
              <td class="button"><label for="modal-trigger" class="btn size_ss mitsumori" data-item_id="1219">見積もり</label></td>
            </tr>
            <tr>
              <td class="option">別途塗装代</td>
              <td class="price option"><i class="fa fa-plus-circle"></i> ¥68,000<span class="tax">¥74,800（税込）</span></td>
              <td class="button">&nbsp;</td>
            </tr>
          </table>

          <h5>フェイスチェンジキット (ディスチャージドヘッドランプ仕様) </h5>
          <table class="list">
            <tr>
              <td class="item_name_sub">未塗装品素地</td>
              <td class="price">¥312,000<span class="tax">¥343,200（税込）</span></td>
              <td class="button"><label for="modal-trigger" class="btn size_ss mitsumori" data-item_id="1282">見積もり</label></td>
          </tr>
            <tr>
              <td class="option">別途塗装代</td>
              <td class="price option"><i class="fa fa-plus-circle"></i> ¥68,000<span class="tax">¥74,800（税込）</span></td>
              <td class="button">&nbsp;</td>
            </tr>
        </table>
        </div>
        <p class="title">LEDアクセサリーランプキット <a href="{{ asset($manual_pass.'EVERYLED20230411.pdf') }}"><i class="fa fa-wrench"></i></a></p>
        <div class="detail">
          <div class="image">
            <p class="text">little D. フェイスチェンジキットに付属するクリアダミーランプを<br>
実際にアクセサリーランプとして点灯させる専用キット。
              <span class="caution"> ※ little D.ﾌｪｲｽﾁｪﾝｼﾞｷｯﾄ専用のｵﾌﾟｼｮﾝｱｲﾃﾑとなります。<br>
                ※ 別途送料・お取付業者様でのお取付工賃が発生致します。<br>
                ※ 沖縄・離島へお届けの場合、送料は着払いとなります。<br>
                ※ 車両登録前の本パーツの架装はお控えください。 </span> </p>
            <ul class="photo clearfix three">
              <li><a href="{{ asset($image_pass.'DSC00927.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i><img src="{{ asset($image_pass.'DSC00927.jpg') }}" alt="" title=""></a></li>
              <li><a href="{{ asset($image_pass.'DSC00908.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i><img src="{{ asset($image_pass.'DSC00908.jpg') }}" alt="" title=""></a></li>
            </ul>
        </div>
          <table class="list">
            <tr>
              <td class="item_name_sub">&nbsp;</td>
              <td class="price">¥5,800<span class="tax">¥6,380（税込）</span></td>
              <td class="button"><label for="modal-trigger" class="btn size_ss mitsumori" data-item_id="1234">見積もり</label></td>
            </tr>
          </table>
</div>
        <p class="title">サイドプロテクター <a href="{{ asset($manual_pass.'3.pdf') }}"><i class="fa fa-wrench"></i></a></p>
        <div class="detail">
          <div class="image">
            <p class="text"> エブリィ ワゴンのサイドスカートを取り外し、<br>
              メタル感溢れる無骨なサイドビューへ。<br>
              シンプルながらlittle D.のフロント・リアの流れを繋ぐ、<br>
              ギアテイストなステンレス製のサイドプロテクター。 <span class="caution"> ※ エブリィ バン(DA 17V) にはご装着いただけません。<br>
                ※ 塗装済み品の場合、 製品は粗目ﾏｯﾄﾌﾞﾗｯｸとなります。<br>
                ※ 別途送料・お取付業者様でのお取付工賃が発生致します。<br>
                ※ お取り付け後のキャンセル・返品・交換はお受けできかねます。<br>
                ※ 沖縄・離島へお届けの場合、送料は着払いとなります。<br>
                ※ 個人宅配送は不可となります。<br>
                ※ 車両登録前の本パーツの架装はお控えください。 </span> </p>
            <ul class="photo clearfix three">
              <li><a href="{{ asset($image_pass.'023A5213_1.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i><img src="{{ asset($image_pass.'023A5213_1.jpg') }}" alt="" title=""></a></li>
            </ul>
          </div>
          <table class="list">
            <tr>
              <td class="item_name_sub">未塗装品素地</td>
              <td class="price">¥38,000<span class="tax">¥41,800（税込）</span></td>
              <td class="button"><label for="modal-trigger" class="btn size_ss mitsumori" data-item_id="1221">見積もり</label></td>
            </tr>
            <tr>
              <td class="option">別途塗装代</td>
              <td class="price option"><i class="fa fa-plus-circle"></i> ¥18,000<span class="tax">¥19,800（税込）</span></td>
              <td class="button">&nbsp;</td>
            </tr>
          </table>
        </div>
		
		
        <p class="title">リアバンパー <a href="{{ asset($manual_pass.'everylittleD_rb.pdf') }}"><i class="fa fa-wrench"></i></a></p>
        <div class="detail">
          <div class="image">
            <p class="text"> スチールバンパーのような直線的な面構成ながら、<br>
              丸型テールランプやアクセサリーボルトなど<br>
              ノスタルジックなエレメント散りばめた<br>
              他に類を見ない独創的なリアビューが目を引きます。
            <span class="caution"> 
※ ｴﾌﾞﾘｨ ﾜｺﾞﾝ(DA17W) 1～2型(2015年2月～2019年5月)の車両について、<br>
&nbsp;&nbsp;&nbsp;ﾘｱﾊﾞﾝﾊﾟｰを取り付ける際の注意事項がございますので、<br>
&nbsp;&nbsp;&nbsp;必ずご確認をお願い致します。<br>
&nbsp;&nbsp;&nbsp;<a href="{{ asset($manual_pass.'caution_rear-bumper.pdf') }}" target="_blank">注意事項はコチラ</a><br>
※ ｴﾌﾞﾘｨ ﾜｺﾞﾝ(DA17W) 3型(2019年6月～2021年8月)の車両については、<br>
&nbsp;&nbsp;&nbsp;付属ﾗｲﾄ類が不適合の為、装着は不可となります。<br>
&nbsp;&nbsp;&nbsp;ﾜｺﾞﾝの4型以降は適合となります。予めご了承ください。<br>
&nbsp;&nbsp;&nbsp;なお、ｴﾌﾞﾘｨ ﾊﾞﾝ(DA17V)は全ての型にてご装着が可能です。<br>
※ ﾘｱﾊﾟｰｷﾝｸﾞｾﾝｻｰ装着車の場合、純正ｾﾝｻｰを弊社ﾘｱﾊﾞﾝﾊﾟｰへ移植します。<br>
                &nbsp;&nbsp;&nbsp;純正ｾﾝｻｰのﾍﾞｾﾞﾙとｾﾝｻｰ本体は純正ﾎﾞﾃﾞｨ色となります為、<br>
                &nbsp;&nbsp;&nbsp;別途「ﾘｱｾﾝｻｰﾍﾞｾﾞﾙｷｯﾄ」の購入を推奨いたします。<br>
                ※ 塗装済み品の場合、 製品は粗目ﾏｯﾄﾌﾞﾗｯｸとなります。<br>
                ※ 別途送料・お取付業者様でのお取付工賃が発生致します。<br>
                ※ お取り付け後のキャンセル・返品・交換はお受けできかねます。<br>
                ※ 沖縄・離島へお届けの場合、送料は着払いとなります。<br>
                ※ 個人宅配送は不可となります。<br>
                ※ 車両登録前の本パーツの架装はお控えください。 </span> </p>
            <ul class="photo clearfix three">
              <li><a href="{{ asset($image_pass.'023A5200_1.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i><img src="{{ asset($image_pass.'023A5200_1.jpg') }}" alt="" title=""></a></li>
            </ul>
          </div>
          <table class="list">
            <tr>
              <td class="item_name_sub">未塗装品素地</td>
              <td class="price">¥78,000<span class="tax">¥85,800（税込）</span></td>
              <td class="button"><label for="modal-trigger" class="btn size_ss mitsumori" data-item_id="1220">見積もり</label></td>
            </tr>
            <tr>
              <td class="option">別途塗装代</td>
              <td class="price option"><i class="fa fa-plus-circle"></i> ¥15,000<span class="tax">¥16,500（税込）</span></td>
              <td class="button">&nbsp;</td>
            </tr>
          </table>
        </div>
		
		
		<p class="title">リアマッドフラップ <a href="{{ asset($manual_pass.'madflap.pdf') }}"><i class="fa fa-wrench"></i></a></p>
        <div class="detail">
          <div class="image">
            <p class="text">
			よりラギットなスタイリングへ。<br>
フロントに装着された純正マッドフラップと質感を合わせた、<br>
前後のバランスを整えるリアマッドフラップ。
<span class="caution"> 
※ EVERY little D. ﾘｱﾊﾞﾝﾊﾟｰ専用品となります。<br>
&nbsp;&nbsp;&nbsp; 純正ﾘｱﾊﾞﾝﾊﾟｰ、他社製ﾊﾞﾝﾊﾟｰにお取り付け不可となります。<br>
※ 別途送料・お取付業者様でのお取付工賃が発生致します。<br>
※ お取り付け後のキャンセル・返品・交換はお受けできかねます。<br>
※ 沖縄・離島へお届けの場合、送料は着払いとなります。<br>
※ 個人宅配送は不可となります。
</span> </p>
            <ul class="photo clearfix three">
              <li><a href="{{ asset($image_pass.'every_madflap.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i><img src="{{ asset($image_pass.'every_madflap.jpg') }}" alt="" title=""></a></li>
            </ul>
          </div>
          <table class="list">
            <tr>
              <td class="item_name_sub">&nbsp;</td>
              <td class="price">¥14,000<span class="tax">¥15,400（税込）</span></td>
              <td class="button"><label for="modal-trigger" class="btn size_ss mitsumori" data-item_id="1255">見積もり</label></td>
            </tr>
          </table>
        </div>
		
		
        <p class="title">little D. デカール(S) </p>
        <div class="detail">
          <div class="image">
            <p class="text"> little D. を象徴する印象的なサイドデカール。<br>
              ユニオンジャックと可愛らしい犬が描かれた<br>
              イージーファッションアイテム。 <span class="caution"> ※ 別途送料・お取付業者様でのお取付工賃が発生致します。<br>
                ※ お取り付け後のキャンセル・返品・交換はお受けできかねます。<br>
                ※ 沖縄・離島へお届けの場合、送料は着払いとなります。<br>
                ※ 個人宅配送は不可となります。 </span> </p>
            <ul class="photo clearfix three">
              <li><a href="{{ asset($image_pass.'023A5204_1.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i><img src="{{ asset($image_pass.'023A5204_1.jpg') }}" alt="" title=""></a></li>
            </ul>
          </div>
          <table class="list">
            <tr>
              <td class="item_name_sub">グレー</td>
              <td class="price">¥19,800<span class="tax">¥21,780（税込）</span></td>
              <td class="button"><label for="modal-trigger" class="btn size_ss mitsumori" data-item_id="1205">見積もり</label></td>
            </tr>
          </table>
        </div>
        



<p class="title">ルーフギア フルオプションキット <span class="mark up"><script>newUp(2023,9,29,"new")</script></span></p>
<div class="detail">
<div class="image">
<p class="text">EVERY little D. をより強靭でラギットなフォルムに。<br>
スチール製のワークライトマウントとソリッドラック、<br>
その全てのオプションパーツをキット化した<br>
MADE IN JAPANのフルオプションキット。
<span class="caution">
【ｷｯﾄ内容】<br>
ﾜｰｸﾗｲﾄﾏｳﾝﾄ本体 / ｿﾘｯﾄﾞﾗｯｸ本体 / ｱﾄﾞｵﾝﾌﾞﾘｯｼﾞ 2本ｾｯﾄ<br>
ｵﾌﾟｼｮﾅﾙﾌﾞﾗｹｯﾄ (2個) / ｻｲﾄﾞｳｫｰﾙ (L/Rｾｯﾄ)<br>
<br>
【PIAAﾜｰｸﾗｲﾄｷｯﾄ付】<br>
上記の基本ｷｯﾄ内容に加え、<br>
PIAA社製丸型LEDﾗﾝﾌﾟ ＜ DK538XG (防水ｶﾌﾟﾗｰ仕様) ＞ を付属。<br>
<br>
【IPFﾜｰｸﾗｲﾄｷｯﾄ付】<br>
上記の基本ｷｯﾄ内容に加え、<br>
IPF社製角型2ｲﾝﾁﾄﾞﾗｲﾋﾞﾝｸﾞﾗﾝﾌﾟ ＜ S-632 ＞<br>
20ｲﾝﾁｼﾝｸﾞﾙﾛｰLEDﾊﾞｰﾗﾝﾌﾟ ＜ 621SS ＞ を付属。<br>
<br>
※ ＜PIAAﾜｰｸﾗｲﾄｷｯﾄ＞と＜IPFﾜｰｸﾗｲﾄｷｯﾄ＞は同時装着できません。<br>
※ ﾜｰｸﾗｲﾄｷｯﾄには、配線加工に必要な部材が含まれておりません。<br>
&nbsp;&nbsp;&nbsp;&nbsp;【加工や配線ﾙｰﾄは各社ﾗﾝﾌﾟの取付説明書記載事項に従い、<br>
&nbsp;&nbsp;&nbsp;&nbsp;【お客様ご自身で作業をしていただく必要がございます。<br>
※ 各種ﾜｰｸﾗｲﾄｷｯﾄは、作業灯としてﾜｰｸﾗｲﾄﾏｳﾝﾄへご装着ください。<br>
&nbsp;&nbsp;&nbsp;&nbsp;【点灯ｽｲｯﾁも運転中点灯操作が出来ない位置に<br>
&nbsp;&nbsp;&nbsp;&nbsp;【ｽｲｯﾁの取付位置をご調整いただく必要がございます。<br>
※ ﾜｰｸﾗｲﾄは走行中の点灯不可となります。予めご了承ください。<br>
※ 本製品のｳｯﾄﾞﾊﾟﾈﾙは天然木材を使用している為、<br>
&nbsp;&nbsp;&nbsp;&nbsp;【使用条件や経年劣化による製品の反り、ヒビ割れ、<br>
&nbsp;&nbsp;&nbsp;&nbsp;【日焼け等が発生する可能性がございます。<br>
　  製品の性質上、そのような事例による返品・交換は致しかねます為、<br>
　  予めご理解をいただいた上、ご購入をお願い申し上げます。<br>
※ 本製品はスチール製となります。<br>
&nbsp;&nbsp;&nbsp;&nbsp;【防錆処理を施しておりますが、<br>
　  長期間の継続使用ならびに使用環境等の要因により溶接部等へ<br>
　  錆が発生する可能性がございます。<br>
　  予めご了承ください。<br>
※ 別途送料・お取付業者様でのお取付工賃が発生致します。<br>
※ お取り付け後のキャンセル・返品・交換はお受けできかねます。<br>
※ 沖縄・離島へお届けの場合、送料は着払いとなります。<br>
※ 個人宅配送は不可となります。<br>
※ 車両登録前の本パーツの架装はお控えください。
</span> </p>
<ul class="photo clearfix three">
<li><a href="{{ asset($image_pass.'roof-gear-fulloptionkit.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i><img src="{{ asset($image_pass.'roof-gear-fulloptionkit.jpg') }}" alt="" title=""></a></li>
</ul>
</div>
<table class="list">
<tr>
<td class="item_name_sub">ワークライト無</td>
<td class="price">¥315,000<span class="tax">¥346,500（税込）</span></td>
<td class="button"><label for="modal-trigger" class="btn size_ss mitsumori" data-item_id="1269">見積もり</label></td>
</tr>
<tr>
<td class="item_name_sub">PIAAワークライトキット付</td>
<td class="price">¥357,000<span class="tax">¥392,700（税込）</span></td>
<td class="button"><label for="modal-trigger" class="btn size_ss mitsumori" data-item_id="1270">見積もり</label></td>
</tr>
<tr>
<td class="item_name_sub">IPFワークライトキット付</td>
<td class="price">¥387,000<span class="tax">¥425,700（税込）</span></td>
<td class="button"><label for="modal-trigger" class="btn size_ss mitsumori" data-item_id="1271">見積もり</label></td>
</tr>
</table>
</div>





<p class="title">trip basket ワークライトマウント <a href="{{ asset($manual_pass.'trip-basket_1.pdf') }}"><i class="fa fa-wrench"></i></a> <a href="{{ asset($manual_pass.'trip-basket_2.pdf') }}"><i class="fa fa-wrench"></i></a> <a href="{{ asset($manual_pass.'trip-basket_1.pdf') }}"><i class="fa fa-wrench"></i></a> <a href="{{ asset($manual_pass.'trip-basket_3.pdf') }}"><i class="fa fa-wrench"></i></a> <a href="{{ asset($manual_pass.'trip-basket_4.pdf') }}"><i class="fa fa-wrench"></i></a> <span class="mark up"><script>newUp(2023,9,27,"new")</script></span></p>
<div class="detail">
<div class="image">
<p class="text">
前面のウッドパネルが目を引く、ワークライトマウント。<br>
別売ワークライトキットの追加装着で、<br>
作業灯として機能性を持たせることが可能。<br>
EVERYをカーゴバンからギアへ押し上げるアイテム。
<span class="caution">
※ ﾜｰｸﾗｲﾄﾏｳﾝﾄ本体にﾗｲﾄは付属しません。<br>
&nbsp;&nbsp;&nbsp;&nbsp;別途各種ﾜｰｸﾗｲﾄｷｯﾄをご購入ください。<br>
※ ＜PIAAﾜｰｸﾗｲﾄｷｯﾄ＞と＜IPFﾜｰｸﾗｲﾄｷｯﾄ＞は同時装着できません。<br>
&nbsp;&nbsp;&nbsp;&nbsp;【PIAAﾜｰｸﾗｲﾄｷｯﾄ】<br>
&nbsp;&nbsp;&nbsp;&nbsp;PIAA社製丸型LEDﾗﾝﾌﾟ ＜DK538XG 防水ｶﾌﾟﾗｰ仕様＞を使用します。<br>
&nbsp;&nbsp;&nbsp;&nbsp;【IPFﾜｰｸﾗｲﾄｷｯﾄ】<br>
&nbsp;&nbsp;&nbsp;&nbsp;IPF社製角型2ｲﾝﾁﾄﾞﾗｲﾋﾞﾝｸﾞﾗﾝﾌﾟ ＜S-632＞と、<br>
&nbsp;&nbsp;&nbsp;&nbsp;IPF社製20ｲﾝﾁｼﾝｸﾞﾙﾛｰLEDﾊﾞｰﾗﾝﾌﾟ ＜621SS＞ を使用します。<br>
※ 各種ﾜｰｸﾗｲﾄｷｯﾄの取付には、＜ﾜｰｸﾗｲﾄﾏｳﾝﾄ本体＞が必要です。<br>
※ 各種ﾜｰｸﾗｲﾄｷｯﾄは、作業灯としてﾜｰｸﾗｲﾄﾏｳﾝﾄへご装着ください。<br>
&nbsp;&nbsp;&nbsp;&nbsp;点灯ｽｲｯﾁも運転中点灯操作が出来ない位置に<br>
&nbsp;&nbsp;&nbsp;&nbsp;ｽｲｯﾁの取付位置をご調整いただく必要がございます。<br>
※ ﾜｰｸﾗｲﾄｷｯﾄには、配線加工に必要な部材が含まれておりません。<br>
&nbsp;&nbsp;&nbsp;&nbsp;加工や配線ﾙｰﾄは各社ﾗﾝﾌﾟの取付説明書記載事項に従い、<br>
&nbsp;&nbsp;&nbsp;&nbsp;お客様ご自身で作業をしていただく必要がございます。<br>
※ ﾜｰｸﾗｲﾄは走行中の点灯不可となります。予めご了承ください。<br>
※ 本製品のｳｯﾄﾞﾊﾟﾈﾙは天然木材を使用している為、<br>
&nbsp;&nbsp;&nbsp;&nbsp;使用条件や経年劣化による製品の反り、ヒビ割れ、<br>
&nbsp;&nbsp;&nbsp;&nbsp;日焼け等が発生する可能性がございます。<br>
　  製品の性質上、そのような事例による返品・交換は致しかねます為、<br>
&&nbsp;&nbsp;&nbsp;&nbsp;;&nbsp;&nbsp;&nbsp;予めご理解をいただいた上、ご購入をお願い申し上げます。<br>
※ 本製品はスチール製となります。<br>
&nbsp;&nbsp;&nbsp;&nbsp;防錆処理を施しておりますが、<br>
&nbsp;&nbsp;&nbsp;&nbsp;長期間の継続使用ならびに使用環境等の要因により溶接部等へ<br>
&nbsp;&nbsp;&nbsp;&nbsp;錆が発生する可能性がございます。<br>
&nbsp;&nbsp;&nbsp;&nbsp;予めご了承ください。<br>
※ 別途送料・お取付業者様でのお取付工賃が発生致します。<br>
※ お取り付け後のキャンセル・返品・交換はお受けできかねます。<br>
※ 沖縄・離島へお届けの場合、送料は着払いとなります。<br>
※ 個人宅配送は不可となります。<br>
※ 車両登録前の本パーツの架装はお控えください。
</span> </p>
<ul class="photo clearfix three">
<li><a href="{{ asset($image_pass.'Work-Light-Mount_2.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i><img src="{{ asset($image_pass.'Work-Light-Mount_2.jpg') }}" alt="" title=""></a></li>
<li><a href="{{ asset($image_pass.'Work-Light-Kit_txt.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i><img src="{{ asset($image_pass.'Work-Light-Kit_txt.jpg') }}" alt="" title=""></a></li>
</ul>
</div>
<table class="list">
<tr>
<td class="item_name_sub">ワークライトマウント本体</td>
<td class="price">¥88,000<span class="tax">¥96,800（税込）</span></td>
<td class="button"><label for="modal-trigger" class="btn size_ss mitsumori" data-item_id="1262">見積もり</label></td>
</tr>
<tr>
<td class="item_name_sub">PIAAワークライトキット</td>
<td class="price">¥42,000<span class="tax">¥46,200（税込）</span></td>
<td class="button"><label for="modal-trigger" class="btn size_ss mitsumori" data-item_id="1263">見積もり</label></td>
</tr>
<tr>
<td class="item_name_sub">IPFワークライトキット</td>
<td class="price">¥72,000<span class="tax">¥79,200（税込）</span></td>
<td class="button"><label for="modal-trigger" class="btn size_ss mitsumori" data-item_id="1264">見積もり</label></td>
</tr>
</table>
</div>




<p class="title">ソリッドラック <a href="{{ asset($manual_pass.'solid-rack_1.pdf') }}"><i class="fa fa-wrench"></i></a> <a href="{{ asset($manual_pass.'solid-rack_2.pdf') }}"><i class="fa fa-wrench"></i></a> <a href="{{ asset($manual_pass.'solid-rack_3.pdf') }}"><i class="fa fa-wrench"></i></a> <a href="{{ asset($manual_pass.'solid-rack_4.pdf') }}"><i class="fa fa-wrench"></i></a> <a href="{{ asset($manual_pass.'solid-rack_5.pdf') }}"><i class="fa fa-wrench"></i></a> <span class="mark up"><script>newUp(2023,9,29,"new")</script></span></p>
<div class="detail">
<div class="image">
<p class="text">
「ロールーフでスタイリッシュなラックが欲しい。」<br>
「サイドオーニングを簡単に取り付けられるようにしたい。」<br>
など様々なエブリィ オーナーのリクエストに応える形で開発。<br>
<br>
別売のオプションで機能の拡張性が高く、<br>
DIYでの可能性も広がるラギットなルーフアイテム。<br>
高い機能性に加え、スタイリッシュなデザインもプラス。<br>
フルオプションキットもご用意。

<span class="caution">
※ ｱﾄﾞｵﾝﾌﾞﾘｯｼﾞは最大で4本まで追加が可能です。<br>
※ ｻｲﾄﾞｵｰﾆﾝｸﾞ等の取付にはｵﾌﾟｼｮﾅﾙﾌﾞﾗｹｯﾄが必要となります。<br>
&nbsp;&nbsp;&nbsp;&nbsp;また装着可否のご判断は、ﾌﾞﾗｹｯﾄ寸法を確認の上ご検討ください。<br>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="{{ asset($image_pass.'optional_bracket.jpg') }}" class="fancybox">ｵﾌﾟｼｮﾅﾙﾌﾞﾗｹｯﾄ寸法</a><br>
※ 本製品はｽﾁｰﾙ製となります。<br>
&nbsp;&nbsp;&nbsp;&nbsp;防錆処理を施しておりますが、<br>
&nbsp;&nbsp;&nbsp;&nbsp;長期間の継続使用ならびに使用環境等の要因により溶接部等へ<br>
&nbsp;&nbsp;&nbsp;&nbsp;錆が発生する可能性がございます。<br>
&nbsp;&nbsp;&nbsp;&nbsp;予めご了承ください。<br>
※ 別途送料・お取付業者様でのお取付工賃が発生致します。<br>
※ お取り付け後のキャンセル・返品・交換はお受けできかねます。<br>
※ 沖縄・離島へお届けの場合、送料は着払いとなります。<br>
※ 個人宅配送は不可となります。<br>
※ 車両登録前の本パーツの架装はお控えください。

</span> </p>
<ul class="photo clearfix three">
<li><a href="{{ asset($image_pass.'solid-rack_body.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i><img src="{{ asset($image_pass.'solid-rack_body.jpg') }}" alt="" title=""></a></li>
</ul>
</div>
<table class="list">
<!--<tr>
<td class="item_name_sub">ソリッドラックフルオプションキット <a href="{{ asset($image_pass.'Solid-Rack_full-option-kit.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i></a></td>
<td class="price">¥225,000<span class="tax">¥247,500（税込）</span></td>
<td class="button"><label for="modal-trigger" class="btn size_ss mitsumori" data-item_id="1269">見積もり</label></td>
</tr>
-->
<tr>
<td class="item_name_sub">ソリッドラック本体 <a href="{{ asset($image_pass.'solid-rack_body_2.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i></a></td>
<td class="price">¥128,000<span class="tax">¥140,800（税込）</span></td>
<td class="button"><label for="modal-trigger" class="btn size_ss mitsumori" data-item_id="1265">見積もり</label></td>
</tr>
<tr>
<td class="item_name_sub">アドオンブリッジ（2本セット) <a href="{{ asset($image_pass.'Solid-Rack_add-on-brdige_2.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i></a></td>
<td class="price">¥55,000<span class="tax">¥60,500（税込）</span></td>
<td class="button"><label for="modal-trigger" class="btn size_ss mitsumori" data-item_id="1266">見積もり</label></td>
</tr>
<tr>
<td class="item_name_sub">オプショナルブラケット（2個セット) <a href="{{ asset($image_pass.'optional-bracket_2.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i></a> <a href="{{ asset($image_pass.'optional-bracket_ex.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i></a> <a href="{{ asset($image_pass.'optional-bracket_ex_2.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i></a></td>
<td class="price">¥18,000<span class="tax">¥19,800（税込）</span></td>
<td class="button"><label for="modal-trigger" class="btn size_ss mitsumori" data-item_id="1267">見積もり</label></td>
</tr>
<tr>
<td class="item_name_sub">サイドウォール <a href="{{ asset($image_pass.'side-wall.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i></a></td>
<td class="price">¥26,000<span class="tax">¥28,600（税込）</span></td>
<td class="button"><label for="modal-trigger" class="btn size_ss mitsumori" data-item_id="1268">見積もり</label></td>
</tr>
</table>
</div>
      
	  
	  
	  </div>
      
      
      
      
      <div class="box title center clear">
        <h4>インテリア</h4>
      </div>
      <div class="accordion">
        <p class="title">シートカバー little D. </p>
        <div class="detail">
          <div class="image">
            <p class="text"> 懐かしく、優しい風合いのライトグリーンな<br>
              クラシックテイストの千鳥柄生地に、<br>
              落ち着いたトーンの本革調ブラックPVCをセット。 <br>
              <span class="caution"> 【対応グレード】<br>
                for VAN : JOIN / JOINﾀｰﾎﾞ<br>
                for WAGON : JPﾀｰﾎﾞ / PZﾀｰﾎﾞ / PZﾀｰﾎﾞｽﾍﾟｼｬﾙ<br>
                <br>
                ※ for VANではｱｰﾑﾚｽﾄｶﾊﾞｰも付属しておりますが、<br>
                &nbsp;&nbsp;&nbsp; お客様にてｱｰﾑﾚｽﾄ取付位置の穴開け加工が必要となります。<br>
                &nbsp;&nbsp;&nbsp; 予めご了承上、購入をご検討ください。<br>
                ※ 別途送料·お取付業者様でのお取付工賃が発生致します。<br>
                ※ 沖縄・離島へお届けの場合、送料は着払いとなります。<br>
                <!--
&nbsp;&nbsp;&nbsp; アームレスト非装着車に装着はできません。ご注意ください。<br> -->
                ※ 塗装・お取付後のキャンセル・返品・交換はお受けできかねます。 </span> </p>
            <ul class="photo clearfix three">
              <li><a href="{{ asset($image_pass.'023A5227_1.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i><img src="{{ asset($image_pass.'023A5227_1.jpg') }}" alt="" title=""></a></li>
              <li><a href="{{ asset($image_pass.'023A5235_1.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i><img src="{{ asset($image_pass.'023A5235_1.jpg') }}" alt="" title=""></a></li>
            </ul>
          </div>
          <table class="list">
            <tr>
              <td class="item_name_sub">for VAN / LIGHT GREEN×HOUNDSTOOTH </td>
              <td class="price">¥68,000<span class="tax">¥74,800（税込）</span></td>
              <td class="button"><label for="modal-trigger" class="btn size_ss mitsumori" data-item_id="1226">見積もり</label></td>
            </tr>
            <tr>
              <td class="item_name_sub">for WAGON / LIGHT GREEN×HOUNDSTOOTH </td>
              <td class="price">¥68,000<span class="tax">¥74,800（税込）</span></td>
              <td class="button"><label for="modal-trigger" class="btn size_ss mitsumori" data-item_id="1227">見積もり</label></td>
            </tr>
          </table>
        </div>
        <!--<p class="title">EVERY little D. シートカバー</p>
<div class="detail">
<div class="image">
<p class="text">
懐かしく、優しい風合いのクラシックテイストの生地に、<br>
落ち着いたトーンの本革調ブラックPVCをセット。

</p>
<ul class="photo clearfix">
<li><a href="{{ asset($image_pass.'023A5227_1.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i><img src="{{ asset($image_pass.'023A5227_1.jpg') }}" alt="" title=""></a></li>
<li><a href="{{ asset($image_pass.'023A5235_1.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i><img src="{{ asset($image_pass.'023A5235_1.jpg') }}" alt="" title=""></a></li>
</ul>
</div>
<table class="list">
<tr>
<td class="item_name_sub">BEIGE×HOUNDSTOOTH</td>
<td class="price">¥3,600<span class="tax">¥3,960（税込）</span></td>
<td class="button"><label for="modal-trigger" class="btn size_ss mitsumori" data-item_id="1185">見積もり</label>
2022年秋頃発売予定 </td>
</tr>
</table>
</div> -->
        <!--detail -->
      </div>
    </div>
    <div class="sub_data accordion">
      <h3 class="title">DATA</h3>
      <div class="box detail">
        <dl class="data clearfix">
          <dt>形式
          <dd>5BD-DA17V / 3BD-DA17V / HBD-DA17V / EBD-DA17V / ABA-DA17W	
          <dt>年式
          <dd>2015.2〜
          <dt>ホイール
          <dd>Coming Soon.						
          <dt>タイヤ
          <dd> Coming Soon.						
          <dt>サスペンション		
          <dd>-					
        </dl>
      </div>
      <h3 class="title">塗装済み対応純正色 </h3>
      <div class="box detail">
        <!--<h4>オリジナル塗装</h4> -->
        <!--<ul>	
<li>マットブラック	
</ul> -->
        <ul>
          <li>クールカーキパールメタリック (ZVD)
        </ul>
        <!--<p class="caution">※ 掲載のない純正塗装色は未塗装品をご購入いただき、 お客様にて塗装のご手配を行って頂きますようお願い申し上げます。			 -->
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
	
	<p class="clear">

<div class="movie-wrap clear">
<iframe width="560" height="315" src="https://www.youtube.com/embed/W1TkLYKQ23s" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>


    <p class="clear"></p>
    <section class="shoplist tax accordion" id="shoplist" style="display: none;">
      <p class="center title" style="background: none;"><span class="center title" style="background: none;"><img src="{{ asset($image_pass.'list.jpg') }}" alt="EVERY VAN little D 実車展示特約店舗一覧"></span><br>
        <br>
        <span class="caution" style="text-align: left; display: block; width: 100%;"> ※ 店舗様の状況で展示車が店舗から移動している可能性もございます。<br>
          　ご訪問前に各店舗様へ展示車について、確認のご連絡をお願い申し上げます。 </span> </p>
      <table class="data full ">
        <tr>
          <th class="pref">青森</th>
          <td>DOKI SHOKAI   イオンSC十和田店　有限会社ドキ商会</td>
          <td>080-5016-4941</td>
        </tr>
        <tr>
          <th rowspan="2" class="pref">秋田</th>
          <td>ジョイカル横手大森</td>
          <td>0182-56-4888</td>
        </tr>
        <tr>
          <td>TAX大曲   （有）華栄自動車</td>
          <td>0187-84-0007</td>
        </tr>
        <tr>
          <th class="pref">宮城</th>
          <td>株式会社   FREE DRESS</td>
          <td>022-794-9290</td>
        </tr>
        <tr>
          <th class="pref">福島</th>
          <td>有限会社   カーエキスパート</td>
          <td>0246-68-8188</td>
        </tr>
        <tr>
          <th class="pref">栃木</th>
          <td>株式会社   東京オート 小山店</td>
          <td>028-527-6211</td>
        </tr>
        <tr>
          <th class="pref">群馬</th>
          <td>くるまによん</td>
          <td>0276-56-9718</td>
        </tr>
          <th rowspan="2" class="pref">茨木</th>
          <td>ORIGINALZ   AUTOREPAIR&amp;SERVICE</td>
          <td>029-353-8001</td>
        </tr>
        <tr>
          <td>TAX湊 磯崎自動車工業 株式会社 </td>
          <td>029-263-3245</td>
        </tr>
        <tr>
          <th rowspan="3" class="pref">千葉</th>
          <td>(株)ダイチモータース</td>
          <td>047-709-3939</td>
        </tr>
        <tr>
          <td>TAX市原　市原自動車センター株式会社</td>
          <td>0436-23-0002</td>
        </tr>
        <tr>
          <td>有限会社 芝田自動車</td>
          <td>04-7198-0514</td>
        </tr>
        <tr>
          <th rowspan="2" class="pref">東京</th>
          <td>(株)ケイスリー　福生本店</td>
          <td>042-553-5431</td>
        </tr>
        <tr>
          <td>TAX関越練馬   （株）タックス本部</td>
          <td>03-5905-1717</td>
        </tr>
        <tr>
          <th rowspan="2" class="pref">埼玉</th>
          <td>スズキアリーナさいたま中央　AMJ株式会社</td>
          <td>048-649-1811</td>
        </tr>
        <tr>
          <td>スズキアリーナ狭山中央　株式会社スズキトラスト</td>
          <td>04-2959-5321</td>
        </tr>
        <tr>
          <th rowspan="7" class="pref">神奈川</th>
          <td>S-SHOP湘南   秋葉台店</td>
          <td>0466-89-0015</td>
        </tr>
        <tr>
          <td>ブラックムーン　有限会社 ゼット・アイ・エス　</td>
          <td>045-475-5558</td>
        </tr>
        <tr>
          <td>TAX横浜南 （株）タックス横浜</td>
          <td>045-783-1241</td>
        </tr>
        <tr>
          <td>たかすけ自動車　高助商事有限会社</td>
          <td>0465-22-7711</td>
        </tr>
        <tr>
          <td>株式会社リバーサイド</td>
          <td>046-233-8000</td>
        </tr>
        <tr>
          <td>株式会社DDB オートモーティブジャパン</td>
          <td>045-534-6071</td>
        </tr>
        <tr>
          <td>T-STYLE (株)T.S.D</td>
          <td>045-342-7757</td>
        </tr>
        <tr>
          <th rowspan="6" class="pref">静岡</th>
          <td>(有)ウェップス   カーベル静岡</td>
          <td>054-256-2181</td>
        </tr>
        <tr>
          <td>(株)オートヨ</td>
          <td>053-472-4633</td>
        </tr>
        <tr>
          <td>(株)沖自動車</td>
          <td>054-294-9936</td>
        </tr>
        <tr>
          <td>（有）コサイ自動車</td>
          <td>053-578-2639</td>
        </tr>
        <tr>
          <td>東名スポーツクラブ 株式会社</td>
          <td>055-929-7188</td>
        </tr>
        <tr>
          <td>有限会社 草薙オートサービス</td>
          <td>054-346-7798</td>
        </tr>
        <tr>
          <th class="pref">山梨</th>
          <td>TOTAL AUTO RYU 株式会社 トータルオート リュウ</td>
          <td>0555-24-5477</td>
        </tr>
        <tr>
          <th rowspan="2" class="pref">長野</th>
          <td>Muu Communications 有限会社杉浦自動車</td>
          <td>0263-54-7319</td>
        </tr>
        <tr>
          <td>スズキアリーナ諏訪中央KOWA</td>
          <td>0266-52-8877</td>
        </tr>
        <tr>
          <th rowspan="2" class="pref">富山</th>
          <td>モトイタリアーナ北陸　西元自動車有限会社</td>
          <td>0766-52-7577</td>
        </tr>
        <tr>
          <td>TAX富山中央   株式会社 ナイン自動車</td>
          <td>076-451-1190</td>
        </tr>
        <tr>
          <th rowspan="2" class="pref">石川</th>
          <td>立石自動車 株式会社</td>
          <td>0761-77-3333</td>
        </tr>
        <tr>
          <td>有限会社 国光マイカーサービス</td>
          <td>076-272-2616</td>
        </tr>
        <tr>
          <th rowspan="5" class="pref">大阪</th>
          <td>Ｎ   STYLE 自動車事業部</td>
          <td>072-370-1054</td>
        </tr>
        <tr>
          <td>有限会社スズキプラザ北摂</td>
          <td>072-750-2875</td>
        </tr>
        <tr>
          <td>有限会社 カーショップアシスト</td>
          <td>072-887-3113</td>
        </tr>
        <tr>
          <td>スズキアリーナ堺北　大阪中央スズキ販売株式会社</td>
          <td>072-233-0228</td>
        </tr>
        <tr>
          <td>村上自動車工業株式会社</td>
          <td>06-6781-0386</td>
        </tr>
        <tr>
          <th rowspan="4" class="pref">兵庫</th>
          <td>株式会社　くるま屋スピッツ</td>
          <td>079-230-1666</td>
        </tr>
        <tr>
          <td>TAX春日インター店 （株）DreamCompany</td>
          <td>0795-78-9924</td>
        </tr>
        <tr>
          <td>三木スズキ</td>
          <td>0794-86-1900</td>
        </tr>
        <tr>
          <td>株式会社スズキ中兵庫販売　スズキカーセレクションセンター鈴蘭台店</td>
          <td>078-592-3442</td>
        </tr>
        <tr>
          <th rowspan="2" class="pref">愛知</th>
          <td>丸十自動車株式会社</td>
          <td>052-853-0010</td>
        </tr>
        <tr>
          <td>中部自動車販売 株式会社</td>
          <td>052-482-2244</td>
        </tr>
        <tr>
          <th class="pref">三重</th>
          <td>有限会社オートプラザミヤタ</td>
          <td>0595-24-5007</td>
        </tr>
        <tr>
          <th class="pref">奈良</th>
          <td>奈良スズキ販売株式会社　スズキアリーナ中和幹線橿原</td>
          <td>0744-20-2215</td>
        </tr>
        <tr>
          <th rowspan="2" class="pref">岡山</th>
          <td>(株)アトリエインターナショナル</td>
          <td>086-278-3355</td>
        </tr>
        <tr>
          <td>（株）ニチイ車輌</td>
          <td>086-434-6868</td>
        </tr>
        <tr>
          <th rowspan="3" class="pref">広島</th>
          <td>（株）サコダ車輛</td>
          <td>082-941-3999</td>
        </tr>
        <tr>
          <td>ジョイカル福山中央</td>
          <td>084-999-7601</td>
        </tr>
        <tr>
          <td>スズキアリーナ庚午</td>
          <td>082-273-1000</td>
        </tr>
        <tr>
          <th class="pref">島根</th>
          <td>トーアドットコム株式会社　ASKA店</td>
          <td>0852-24-2555</td>
        </tr>
        <tr>
          <th class="pref">徳島</th>
          <td>スズキコンプリート販売徳島   アウトクラスカーズ(株)</td>
          <td>088-669-5019</td>
        </tr>
        <tr>
          <th class="pref">香川</th>
          <td>株式会社   多田自動車ボデー</td>
          <td>0879-49-3162</td>
        </tr>
        <tr>
          <th rowspan="2" class="pref">長崎</th>
          <td>TAX長崎   （株）長崎車輌センター</td>
          <td>095-882-0831</td>
        </tr>
        <tr>
          <td>TAX長崎 DOME （株）長崎車輌センター DOME店</td>
          <td>095-886-8788</td>
        </tr>
        <tr>
          <th class="pref">大分</th>
          <td>TAX別府H   Cniwa（ハコニワ）(合)</td>
          <td>0977-75-9103</td>
        </tr>
        <tr>
          <th rowspan="2" class="pref">鹿児島</th>
          <td>有限会社　宮田自動車</td>
          <td>0995-62-1879</td>
        </tr>
        <tr>
          <td>有限会社　菊永自動車</td>
          <td>0993-83-2355</td>
        </tr>
      </table>
    </section>
  </div>
  <!--inner -->
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
    if (window.matchMedia( '(min-width: 800px)' ).matches) {
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

    
<!--#include virtual="/common/products_mitsumori.html" -->
@vite(['resources/js/form.js'])

<!--#include virtual="/common/products_modal.html" -->
</body>
</html>
